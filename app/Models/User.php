<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Jika pakai tabel 'users', baris ini bisa dihapus
    // protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'alamat',
        'no_tlp'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
