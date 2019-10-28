<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model
{
    protected $table = 'category_news';
    protected $guared = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status = [
        1 => [
            'name' => 'Public',
            'class' => ''
        ],

        0 => [
            'name' => 'Private',
            'class' => ''
        ]
    ];

    public function getStatus(){
        return array_get($this->status, $this->active, '[N/A]');
    }
}
