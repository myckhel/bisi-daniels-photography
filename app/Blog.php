<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  //
  // public $feature;
  // public function __construct(){
  //   $this->feature = ( $this->feature == NULL ) ? \URL::asset('img/blog_posts/default.jpg') : \URL::asset("img/blog_posts/$this->feature");
  // }
  protected $fillable = ['title', 'description', 'content'];

  public function feature(){
    return ( $this->feature == NULL ) ? \URL::asset('img/blog_posts/default.jpg') : \URL::asset("img/blog_posts/$this->feature");
  }
}
