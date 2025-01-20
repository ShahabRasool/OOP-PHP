<?php
class ContaineredClass{
    private $shahab;
    const PADDING = "p-16";
    public static $count=0;
    public $finalMarkup="";
   public  $tailwind=["text-red-300", "text-3xl"];
public function __construct($shahab)
{
   $this->shahab = $shahab;
    // print "My name is " .$shahab;
}
public function prepareMarkup(){
    $tring= Utility::tailwindOutput($this->tailwind);
    //  print '<h1 class="' . implode(" ", $this->tailwind) . '">My name is ' . $this->shahab . '</h1>';
   
    $this->finalMarkup='<h1 class="' . $tring . ' ' . self::PADDING . '">My name is ' . $this->shahab . '</h1>';
}
public function wrapperout(){

    $this->finalMarkup='<h1 class="container mx-auto">' . $this->shahab . '</h1>';

}
public function render(){
    echo $this->finalMarkup;
}

}