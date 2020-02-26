<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $guarded = ['*'];

    const STATUS_PUBLIC  = 1;
    const STATUS_PRIVATE = 0;

    protected $status_contact = [
        1 => [
            'name' => 'Đã xử lý',
            'class' => 'badge-success'
        ],

        0 => [
            'name' => 'Chưa xử lý',
            'class' => 'badge-danger'
        ]
    ];

    public function getStatus(){
        return array_get($this->status_contact, $this->status, '[N/A]');
    }
}
