<?php

class Cart {
    private array $items;

    function __construct() {
        $this->items = [];
    }

    function addToCart(MenuItem $item, int $quantity) {
        $existing = $this->findItem($item->getCode());
    }

    function findItem(int $code) {
        foreach ($this->items as $index => $item) {
            if ($item["item"]->getCode() ==$code ) {
                return ["index" => $index, "data" => $item ];
            }
        }
    }


}