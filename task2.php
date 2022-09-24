<?php
class Animal{
private $family;
private $food;
function  __construct($family,$food)
{
    $this->family=$family;
    $this->food=$food;
}
function get_Family(){
    return $this->family;
}
function set_family($family){
    $this->family = $family;
}
function get_food(){
        return $this->food;
    }
function set_food($food){
        $this->food = $food;
    }
}
class cow extends Animal{
private $owner;
    function  __construct($family,$food,$owner)
    {
        $this->family=$family;
        $this->food=$food;
        $this->owner=$owner;
    }

    public function get_owner(){
        return $this->owner;
}
public function set_owner($owner){
        $this->owner=$owner;
}
}
class lion extends Animal{
    function  __construct($family,$food)
    {
        $this->family=$family;
        $this->food=$food;
    }
}
class Person{
    function geet(){

    }
}
/*class English extends Person{

}
class french extends Person{

}
class German extends Person{

}*/
$English =new Person();
$french =new Person();
$German =new Person();
$English->geet();
$french->geet();
$German->geet();