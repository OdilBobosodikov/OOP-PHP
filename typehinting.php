<?php

interface ItemInterface
{
  public function setCost(float $cost);
  public function getCost();
}
class Item implements ItemInterface
{
  protected $cost = 0;
  
  public function setCost(float $cost)
  {
    $this->cost = $cost;
  }

  public function getCost()
  {
    return $this->cost;
  }
}
class Cart
{
  protected $items = [];

  public function add(ItemInterface $item)
  {
    $this->items[] = $item;
  }

  public function total()
  {
    $total = 0;
    foreach($this->items as $item)
    {
      $total += $item->getCost();
    }
    return $total;
  }
}

$item = new Item;
$item->setCost(5);

$item1 = new Item;
$item1->setCost(20.25);

$cart = new Cart;
$cart->add($item);
$cart->add($item1);

var_dump($cart);
var_dump($cart->total());
// class Calculator
// {
//   protected $total = 0;

//   public function add(array $values)
//   {
//       foreach($values as $value)
//       {
//         $this->total += $value;
//       }
//   }
//   public function total()
//   {
//     return $this->total;
//   }
// }

// $calculator = new Calculator;
// $calculator->add([2,4,6]);
// echo $calculator->total();