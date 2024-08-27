<?php 
abstract class hewan{
	abstract function bersuara();
}

class kucing extends hewan{
	function bersuara()
	{
		return 'Meong';
	}
}

$kucing_budi = new kucing();
echo $kucing_budi->bersuara();
?>