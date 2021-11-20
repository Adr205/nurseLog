
<?php 
	function hacerQuery($consulta){
		$con = mysqli_connect("localhost","root","","nurseLog"); 
	    $result = mysqli_query($con, $consulta);
	    mysqli_close($con);

		if($result)
			return $result;
		else
			return false;
	}
?>
