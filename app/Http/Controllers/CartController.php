<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $product_id){ //уточнение типов
        //получаем добавляемый продукт в корзину по id
        $product = Product::find($product_id);
        //dd($product);
        $oldCart = Session::has('cart') ? Session::get('cart') : null; // проверяем наличие корзины в сессии
        $oldCart = new Cart($oldCart); //создали экземпляр объекта корзины
        //добавление товаров в корзину
        $cart->add($product, $product->id);
        //
        /*if($_SESSION['cart'] == null){
            $oldCart = $_SESSION['cart'];
        }else{
            $oldCart = null;
        }*/


    }
}
