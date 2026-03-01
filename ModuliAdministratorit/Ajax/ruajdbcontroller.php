<?php
    session_start();
    require("dbcontroller.php");
	$dbController = new DBController();
	
	$pergjigjje_id  = $_POST['pergjigjje'];
	$pyetje_id = $_POST['pyetje'];
	
	$pyetesori= "INSERT INTO tbl_pyetesori(pyetje_id,pergjigjje_id,perdoruesi_id) VALUES ('" . $pyetje_id ."','" . $pergjigjje_id . "','" . $_SESSION["perdoruesi_id"] . "')";
    $vendos_id = $dbController->insertQuery($pyetesori);
    
    if(!empty($vendos_id)) {
        $pyetesori = "SELECT * FROM tbl_pergjigjje WHERE pyetje_id = " . $pyetje_id;
        $pergjigjje = $dbController->runQuery($pyetesori);
    }
    
    if(!empty($pergjigjje)) {
?>        
        <div class="poll-heading"> Rezultati </div> 
<?php
        $pyetesori = "SELECT count(pergjigjje_id) as nr_final FROM tbl_pyetesori WHERE pyetje_id = " . $pyetje_id;
        $totali = $dbController->runQuery($pyetesori);

        foreach($pergjigjje as $k=>$v) {
            $pyetesori = "SELECT count(pergjigjje_id) as nr_pergjigjjev FROM tbl_pyetesori WHERE pyetje_id = " .$pyetje_id . " AND pergjigjje_id = " . $pergjigjje[$k]["id"];
            $totali_prgj = $dbController->runQuery($pyetesori);
            $nr_prgj = 0;
            if(!empty($totali_prgj)) {
                $nr_prgj = $totali_prgj[0]["nr_pergjigjjev"];
            }
            $perqindja = 0;
            if(!empty($totali)) {
                $perqindja = ( $nr_prgj / $totali[0]["nr_final"] ) * 100;
                if(is_float($perqindja)) {
                    $perqindja = number_format($perqindja,2);
                }
            }
            
?>
		<div class="answer-rating"> <span class="answer-text"><?php echo $pergjigjje[$k]["pergjigjje"]; ?></span><span class="answer-count"> <?php echo $perqindja . "%"; ?></span></div>      
<?php 
        }
    }
?>
<div class="poll-bottom">
	<button class="next-link" onClick="show_poll();">Vazhdo</button>
</div>