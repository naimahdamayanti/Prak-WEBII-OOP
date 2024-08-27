<?php 
class komputer
{
	var $prosesor = "Core i7";
	private $memory = "4 GB";
	private function memutar_video()
	{
		return "Komputer memutar video";
	}
}

$komputer_budi = new komputer();
echo $komputer_budi->prosesor;
echo "<br/>";
echo $komputer_budi->memory;
echo "<br/>";
echo $komputer_budi->memutar_video();
?>