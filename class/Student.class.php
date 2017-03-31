<?php
class Student extends Person {
 private $stdId;
 public static $StdCount = 0;
 public function __construct($name,$surname,$id){
 parent::__construct($name, $surname);
 $this->stdId = $id;
 self::$StdCount++;
 }
 public function getStudentId() {
 return $this->stdId;
 }
 public function displayName() {
 parent::displayName();
 echo $this->name." ".$this->surname." ".$this->stdId."<br/>";
 }
}
?>
