<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public function getlist()
    {
        $product = DB::table('product')->get();

        return $product;
    }
}
