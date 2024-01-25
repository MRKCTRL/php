<?php
 class Pen{
   // public $inkColor;

   function __construct($inkColor){
     $this->inkColor;
   }

   public function toggleCao(){

   }
   public function toggle(){

   }
   public function write($message){
     echo $message
   }

 }

 class penWithCap{
   public function $inkColor;
   public functiom write($message){

   }
 }
 penWithCap extends pen{
   public function toggleCao{

   }
 }
 class RetraPen extends Pen{
   public function togglePoint(){

   }
   public function write($message){
    return 'written with retraceable pen' . $message;
   }
 }
 $cappedPen = penWithCap('blue');
 $cappedPen->toggleCao();
 $cappedPen->write('gbrgjfdrgb');
 $cappedPen->toggleCao();

 $cappPen = RetraPen('black');
 $cappPen->toggleCao();
 $cappPen->write('gbrgjfdrgb');
 $cappPen->toggleCao();

 ?>
