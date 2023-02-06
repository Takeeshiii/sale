<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class sales extends Model
{
    public function getList(){

        $product = DB::table('product')->get();

        return $product;
}};