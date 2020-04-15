<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Products';

    public function getPrice()
    {
        $price = $this->price / 1000;
        return number_format($price, '3') . 'Đ';
    }
}
