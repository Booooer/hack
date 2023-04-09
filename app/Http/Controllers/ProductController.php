<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function add(){
        $data = json_decode(file_get_contents("php://input"));

        if (!isset($data)) {
            return json_encode("При добавлении произошла ошибка");
        }

        $add = Product::create([
            'categorya_3' => "Товары",
            'categorya_nomenklatyri' => $data[1],
            'element_nomenklatyri' => $data[0],
            'itog' => $data[2],
        ]);

        if ($add) {
            return json_encode("Товар добавлен");
        }
        return json_encode("Пошёл нахуй");
    }
}
