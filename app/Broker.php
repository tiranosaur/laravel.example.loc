<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    protected $table = 'brokers';
    public $timestamps = false;
    public $id;
    public $name;
    public $link_name;
    public $text;
    public $is_agreed;
    public $url_en;
    public $language_id;
    public $parent_id;
    public $img;
    public $img_thumb;
    public $text_en;
    public $order_;
    public $broker_type_str;
    public $vote_for;
    public $vote_against;
    public $vote_history;
    public $point_about_history;
    public $comment_pre_moder;
    public $active;
    public $url_ru;
    public $close_date;
//    protected $fillable = [
//        'name',
//        'link_name',
//        'text',
//        'is_agreed',
//        'url_en',
//        'language_id',
//        'parent_id',
//        'img',
//        'img_thumb',
//        'text_en',
//        'order_',
//        'broker_type_str',
//        'vote_for',
//        'vote_against',
//        'vote_history',
//        'point_about_history',
//        'comment_pre_moder',
//        'active',
//        'url_ru',
//    ];
}
