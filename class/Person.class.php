<?php
class Person {
 public $name;
 private $surname= "Test";
 function __construct($name=0,$surname="Rukdee") {
 $this->name = $name;
 $this->surname = $surname;
 }
 function getName() {
 return $this->name;
 }
 public function displayName() {
 echo $this->getName()." ".$this->surname."<br/>";
 } 
 public function __destruct() {
 $file = fopen(__DIR__."/id.txt", "a") or die("Unable to open!");
 $txt = $this->name." ".$this->surname;
 echo ("bytes written:".fwrite($file, $txt)."<br/>");
 fclose($file);
 echo "object(".spl_object_hash($this).") was destroyed<br/>";
 }
 public function __toString() {
 return $this->name." ".$this->surname;
 }
}

?>