<?php
class Laptop
{
	const os = "Microsoft Windows";
	private $prosesor = "Core i7";
	public function get_os()
	{
		return self::os;
	}
} 
echo Laptop::os;
echo "<br/>";
$laptop_budi = new Laptop();
echo $laptop_budi->get_os();
?>