<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    const HOT_ON = 1;
    const HOT_OFF = 0;

    protected $status = [
        1 => [
            'name' => 'Public',
            'class' => 'badge-primary'
        ],

        0 => [
            'name' => 'Private',
            'class' => 'badge-danger'
        ]
    ];

    protected $view_hot = [
        1 => [
            'name' => 'Nổi bật',
            'class' => 'badge-success'
        ],

        0 => [
            'name' => 'Không nổi bật',
            'class' => 'badge-info'
        ]
    ];

    public function getStatus(){
        return array_get($this->status, $this->active, '[N/A]');
    }

    public function getHot(){
        return array_get($this->view_hot, $this->hot, '[N/A]');
    }

    public function category()
    {
        return $this->belongsTo(CategoryNews::class,'category_id');
    }

}
