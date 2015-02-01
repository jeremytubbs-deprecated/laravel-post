<?php namespace JeremyTubbs\LaravelPost;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Post extends \Eloquent {
	use SoftDeletingTrait;
	protected $fillable = [];
	protected $dates = ['deleted_at', 'published_at'];

	/**
	 * The prefix string for config options.
	 *
	 * Defaults to the package's config prefix string
	 *
	 * @var string
	 */
	protected $configPrefix = 'laravel-post::';

	/**
	 * Query scope for "live" posts, adds conditions for status = APPROVED and published date is in the past
	 *
	 * @param $query
	 * @return mixed
	 */
	public function scopeLive($query)
	{
		return $query->where($this->getTable().'.status', '=', Post::APPROVED)
			->where($this->getTable().'.published_date', '<=', \Carbon\Carbon::now());
	}

	public function getPublishedAttribute() {
		if($this->status = 1) return 'true';
		return 'false';
	}
	public function getPublishedTextAttribute() {
		if($this->status = 1) return 'Publish';
		return 'Save Draft';
	}
}