<?php

class Post extends BaseModel {
    protected $table = "posts";

    public static $rules = array(
        'title'=> 'required|max:100',
        'body'=> 'required|min:3',
        'image'=>'required|min:3',
        'tags'=>'required|max:300'

    );
}
