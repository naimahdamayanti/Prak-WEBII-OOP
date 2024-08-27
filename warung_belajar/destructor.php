<?php 
class komputer
{

	public function __destruct()
	{
		echo "Object telah dihapus dari memory";
	}

}

$komputer_budi = new komputer();
unset($komputer_budi);
?>