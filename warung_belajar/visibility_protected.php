<?php 
class komputer
{
	protected $prosesor = "Core i7";
	protected $memory = "4 GB";
	protected function memutar_video()
	{
		return "Komputer memutar video";
	}

	function get_data_komputer()
	{
		return $this->prosesor." ".$this->memory;
	}
}

class laptop extends komputer
{
	function get_data_laptop()
	{
		return $this->prosesor." ".$this->memory;
	}
}

$komputer_budi = new komputer();
$laptop_budi = new laptop();
echo $komputer_budi->get_data_komputer();
echo "<br/>";
echo $laptop_budi->get_data_laptop();
echo "<br/>";
echo $komputer_budi->memutar_video();
?>