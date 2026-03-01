<?php
class DBController {
	private $server = "localhost";
	private $perdorues = "root";
	private $fjalekalim= "";
	private $databaza = "umrrsg";
	private $konektimi;
	
	function __construct() {
		$this->konektimi = $this->connectDB();
	}
	
	function connectDB() {
		$konektimi = mysqli_connect($this->server,$this->perdorues,$this->fjalekalim,$this->databaza);
		return $konektimi;
	}
	
	function runQuery($pyetesori) {
		$rezultati = mysqli_query($this->konektimi,$pyetesori);
		while($rreshti=mysqli_fetch_array($rezultati)) {
			$rezultativ[] = $rreshti;
		}
		if(!empty($rezultativ))
			return $rezultativ;
	}
	
	function insertQuery($pyetesori) {
	    mysqli_query($this->konektimi, $pyetesori);
	    $vendos_id = mysqli_insert_id($this->konektimi);
	    return $vendos_id;
	}
	
	function getIds($pyetesori) {
	    $rezultati = mysqli_query($this->konektimi,$pyetesori);
	    while($rreshti=mysqli_fetch_array($rezultati)) {
	        $rezultativ[] = $rreshti[0];
	    }
	    if(!empty($rezultativ))
	        return $rezultativ;
	}
}
?>