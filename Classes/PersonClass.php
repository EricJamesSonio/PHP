<?php


// Public Class Person
class Person {
    private $firstName;    
    private $middleName;
    private $lastName;
    function __construct($firstName, $middleName, $lastName) {
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
    }

    function greet() {
        return "Hello : " . $this->firstName . $this->middleName . $this->lastName;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getMiddleName() {
        return $this->middleName;
    }
    
    function getLastName() {
        return $this->lastName;
    }
}

class Customer {
    Private Person $person;
    
    function __construct(Person $person) {
        $this->person = $person;
    }

    function greet() {
        return $this->person->greet();
    }
}

class Item {
    private String $name;
    private float $price;
    private int $id;


    function __construct(String $name, int $id, float $price) {
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
    }

    function getName() {
        return $this->name;
    }

    function getId() {
        return $this->id;
    }

    function getPrice() {
        return $this->price;
    }

    function getDetails() {
        return "Name : " . $this->name . "Id : " . $this->id . " Price : " . $this->price; 
    }
}

class OrderItem {
    private Item $item;
    private int $quantity;

    function __construct(Item $item, int $quantity) {
        $this->item = $item;
        $this->quantity = $quantity;
    }

    function getItem() {
        return $this->item;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getDetails() {
        $this->item->getDetails();
        "Quantity : " . $this->quantity;
    }
}

class Cart {
    private array $orders = [];

    function addItem(Item $item, int $quantity) {
        $this->orders[] = new OrderItem($item, $quantity);
    }

    function findOrder(int $id) {
        foreach ($this->orders as $order) {
            if ($order->getItem()->getId() === $id) {
                return $order;
            }
        }   
        return null;
    }

    function displayItems() {
        foreach ($this->orders as $order) {
            $item = $order["item"];
            $qty = $order["qty"];
            echo "Name : " . $item->getName() . "Price : " . $item->getPrice() . "Quantity : " . $qty;
        }
    }
}

class Inventory {
    private array $items;
    private Viewer $viewer;

    function __construct() {
        $this->items = []; 
        $this->viewer = new Viewer($this);
    }

    function addItem(Item $item, int $quantity) {
        if ($quantity <= 0) {
            return;
        }

        $found = $this->findItem($item->getId());

        if ($found !== null) {
            $this->items[$found["index"]]["qty"] += $quantity;
            return;
        }

    
        $this->items[] = ["item" => $item, "qty" => $quantity];
    }

    function findItem(int $id): ?array {
        foreach ($this->items as $i => $entry) {
            if ($entry["item"]->getId() === $id) {
                return [
                    "index" => $i,
                    "item" => $entry["item"]
                ];
            }
        }
        return null;
    }

    function getItems(): array {
        return $this->items;
    }

    function displayItems() {
        return $this->viewer->displayItems();
    }
}

class Viewer {
    private Inventory $inv;

    function __construct(Inventory $inv) {
        $this->inv = $inv;
    }

    function displayItems() {
        foreach ($this->inv->getItems() as $order) {
            echo $order["item"]->getDetails() . "qty : " . $order["qty"];
        }
    }

    function getInventory() {
        return $this->inv;
    }



}







?>

