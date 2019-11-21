<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

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

    public function getStatus(){
        return array_get($this->status, $this->active, '[N/A]');
    }
}
