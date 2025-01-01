<?php
class Css{
    private $shahab;
    const PADDING = "p-16";
   public  $tailwind=["text-red-300", "text-2xl"];
public function __construct($shahab)
{
   $this->shahab = $shahab;
    // print "My name is " .$shahab;
}
public function output(){
    $tring= Utility::tailwindOutput($this->tailwind);
    //  print '<h1 class="' . implode(" ", $this->tailwind) . '">My name is ' . $this->shahab . '</h1>';
   
    print '<h1 class="' . $tring . ' ' . self::PADDING . '">My name is ' . $this->shahab . '</h1>';


}
// public function test(){
//     $this->output();
// }
}