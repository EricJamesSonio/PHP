<?php

include_once "MenuItem.php";

class Inventory {
    private array $items;

    function __construct() {
        $this->items = [];
    }

    function addItem(MenuItem $item, int $quantity) {
        if ($quantity <= 0) {
            return;
        }

        $existing = $this->findItem($item->getCode());

        if ($existing !== null) {
            $this->items[$existing["index"]]["qty"] += $quantity;
        } else {
            $this->items[] = ["item" => $item, "qty" => $quantity];
        }
    }

    function removeItem(int $code) {
        $existing = $this->findItem($code);
                
        if ($existing !== null) {
            unset($this->items[$existing["index"]]); 
            $this->items = array_values($this->items); // reindex
        } else {
            echo "Item not found.\n";
        }
    }
    
    
    function findItem(int $code): ?array {
        foreach ($this->items as $index => $item) {
            if ($item["item"]->getCode() === $code) {
                return ["index" => $index, "data" => $item];
            }
        }
        return null;
    }

    function displayItems() {
        foreach ($this->items as $item) {
            echo ($item["item"]->getDetails());
        }
    }

    function getItems() {
        return $this->items;
    }

}





















?>