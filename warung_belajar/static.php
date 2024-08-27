<?php 
class komputer
{
	public $prosesor = "Core i5";
	public function memutar_video()
	{
		return "Komputer memutar video";
	}
}
$komputer_budi = new komputer();
echo $komputer_budi->prosesor;
echo "<br/>";
echo $komputer_budi->memutar_video();
?>