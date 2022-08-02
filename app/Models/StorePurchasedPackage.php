<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class StorePurchasedPackage extends Model
{
    protected $dateFormat = 'U';
    public static $snakeAttributes = false;

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    protected $casts = [
        'created_at' => 'int',
        'updated_at' => 'int',
    ];

    protected $fillable = [
        'package_id',
        'store_id',
        'service_id',
        'package',
        'package_status',
        'payment_gateway',
    ];

}
