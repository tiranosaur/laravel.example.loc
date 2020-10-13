<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    protected $table = 'brokers';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'link_name',
        'text',
        'is_agreed',
        'url_en',
        'language_id',
        'parent_id',
        'img',
        'img_thumb',
        'text_en',
        'order_',
        'broker_type_str',
        'vote_for',
        'vote_against',
        'vote_history',
        'point_about_history',
        'comment_pre_moder',
        'active',
        'url_ru',
        'close_date'
    ];
}
