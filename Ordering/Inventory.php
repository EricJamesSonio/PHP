<?php

include_once "MenuItem.php";

class Inventory {
    private array $items;

    function __construct() {
        $this->items = [];
    }

    function addItem(MenuItem $item, int $quantity) {
        if ($quantity <= 0) {
            return ;
            }

        $existing = $this->findItem($item->getCode());

        if ($existing !== null) {
            $this->items[$existing]["qty"] += $quantity;
            return;
        }

        $this->items[] = ["item" => $item, "qty" => $quantity];

    }

    function removeItem(int $code) {
        $existing = $this->findItem($code);

        if ($existing !== null) {
            unset($this->items[$existing["index"]]); // remove item
            $this->items = array_values($this->items);
        } else {
        echo "Item not found.\n";
        }
    }

    
    function findItem(int $code) {
        foreach ($this->items as $item) {
            if ($item["item"]->getCode() === $code) {
                return $item; 
            }
        }
        return null;
    }

    function getItems() {
        return $this->items;
    }

}





















?>