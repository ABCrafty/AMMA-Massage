<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = "homepage";

    protected $fillable = [
        'phone',
        'phone_text',
        'title',
        'content_title',
        'title_link',
        'service_1',
        'service_2',
        'service_3',
        'service_4',
        'offer_preview',
        'offer_title_1',
        'offer_title_2',
        'offer_title_3',
        'offer_content_1',
        'offer_content_2',
        'offer_content_3',
        'offer_link_1',
        'offer_link_2',
        'offer_link_3'
    ];

    protected $hidden = [
        'id',
        '_token'
    ];
}
