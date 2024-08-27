<?php
class Laptop
{
	private $prosesor;

	public function set_prosesor($proc)
	{
		$this->prosesor = $proc;
	}
	public function get_prosesor()
	{
		return $this->prosesor;
	}
} 
$laptop_budi = new Laptop();
$laptop_cika = new Laptop();

$laptop_budi->set_prosesor("Core i7");
$laptop_cika->set_prosesor("Core i5");

echo "Prosesor Laptop Budi ".$laptop_budi->get_prosesor();
echo "<br/>";
echo "Prosesor Laptop Cika ".$laptop_cika->get_prosesor();
?>