<?php namespace JeremyTubbs\LaravelPost;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Post extends \Eloquent {
	use SoftDeletingTrait;
	protected $fillable = [];
	protected $dates = ['deleted_at', 'published_at'];

	public function getPublishedAttribute() {
		if($this->status = 1) return 'true';
		return 'false';
	}
	public function getPublishedTextAttribute() {
		if($this->status = 1) return 'Publish';
		return 'Save Draft';
	}
}