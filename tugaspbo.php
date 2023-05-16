<?php

class Animal
{
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;   
    }
    public function getInfo()
    {
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ".";
    }
}

$animal = new Animal("Harimau", "Karnivora");
echo $animal->getInfo() . '<br>';

class Cat extends Animal 
{    
    function __construct($nama)
    {
        $this->nama = $nama;   
    }
    function getInfo()
    {
        return 'Hewan ini adalah ' . $this->nama . ' jenis kucing. Kucing adalah hewan yang suka bermain dan bersih';
    }
}

$cat = new Cat('Kitty');
echo $cat->getInfo() . '<br>';

class Dog extends Animal 
{    
    function __construct($nama)
    {
        $this->nama = $nama;   
    }
    function getInfo()
    {
        return 'Hewan ini adalah ' . $this->nama . ' jenis anjing. Anjing adalah hewan yang setia dan cerdas.';
    }
}

$dog = new Dog('Buddy');
echo $dog->getInfo() . '<br>';

echo '<br><br>';

$animal2 = new Animal('Gajah', 'Herbivora');
echo $animal2->getInfo() . '<br>';

$cat2 = new Cat('Anggora');
echo $cat2->getInfo() . '<br>';

$dog2 = new Dog('Scoobe');
echo $dog2->getInfo() . '<br>';

?>