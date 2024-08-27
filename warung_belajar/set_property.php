<?php
class komputer{
   var $warna;
   var $ram;
   var $harddisk;
   var $prosesor;
 
   function memutar_musik()
   {
     return "komputer memutar musik";
   }
   function memutar_video()
   {
     return "komputer memutar video";
   }
   function edit_foto()
   {
     return "Edit Foto";
   }
   function edit_video()
   {
     return "Edit Video";
   }
}
$komputer_budi = new komputer();
$komputer_budi->warna = "Merah";
$komputer_budi->ram = "4 GB";
$komputer_budi->harddisk = "2 TB";
$komputer_budi->prosesor = "Core i7";
?>