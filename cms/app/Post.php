<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // access to a 'posts' table from this class Post
    //default column called 'id'


    //protected $table = 'posts;
    //protected $primaryKey = 'post_id';


//allows for title and content to tbe created proeperties
    protected $fillable = [


        'title',
        'content'




    ];









}
