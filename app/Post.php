<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	public function author(){
		return $this->belongsTo(User::class);
	}

    public function getImageUrlAttribute($value){

    	$imageUrl = "";

    	if (! is_null($this->image)) {

    		$imagePath = public_path() . "/images" . $this->image;
    		if (file_exists($imagePath)){
    			$imageUrl = asset("images/" . $this->image);
    		} 
    			
    	}

    	return $imageUrl;
    }

    public function getDateAttribute(){
    	return $this->created_at->diffForHumans();
    }

    public function scopeLatestFirst(){
    	return $this->orderBy('created_at', 'DESC');
    }
}
