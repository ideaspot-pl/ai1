<?php

class Dog
{
    public function bark()
    {
        var_dump("woof");
    }
}

class LoudDog extends Dog
{
    public function bark()
    {
        var_dump("WOOOOOF");
    }
}

class LazyDog extends Dog
{
    public function bark()
    {
        parent::bark();
    }
}

$dog = new Dog();
$dog->bark();
// string 'woof' (length=4)

$loudDog = new LoudDog();
$loudDog->bark();
// string 'WOOOOOF' (length=7)

$lazyDog = new LazyDog();
$lazyDog->bark();
// string 'woof' (length=4)
