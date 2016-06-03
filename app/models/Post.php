<?php

class Post extends Eloquent {
    protected $table = "posts";

    public static $rules = array( 
        'title'=> 'required|max:100',
        'body'=> 'required|max:20000',
        'image'=>'required|max:1000',
        'tags'=>'required|max:300'

    );
}