<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;


    // access to a 'posts' table from this class Post
    //default column called 'id'


    //protected $table = 'posts;
    //protected $primaryKey = 'post_id';


    protected $dates = ['deleted_at'];





//allows for title and content to tbe created proeperties
    protected $fillable = [


        'title',
        'content'




    ];









}
