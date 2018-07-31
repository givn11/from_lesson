<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 31.07.2018
 * Time: 19:38
 */

namespace App;


class Cart
{
    public $items = null; //хранит объекты покупаемых товаров
    public $totalPrice = 0; //итоговая сумма товаров в карзине
    public $totalQty = 0; //итоговое количество товаров в корзине

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }
}