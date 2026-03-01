<html>
<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />

		
<?php
include('../konfig.php');
session_start();
$kontrollo_perdoruesin = $_SESSION['perdoruesi_umrrsg'];
$selekto_sql = mysqli_query($konektimi, "SELECT id_perdoruesi_umrrsg,perdoruesi_umrrsg FROM perdoruesit_umrrsg WHERE perdoruesi_umrrsg='$kontrollo_perdoruesin'");
$rreshti = mysqli_fetch_array($selekto_sql, MYSQLI_ASSOC);
$kyqja_perdoruesit = $rreshti['perdoruesi_umrrsg']; // Update the variable name
if (!isset($kontrollo_perdoruesin)) {
    header("Location: index.php");
}



	
    $_SESSION["perdoruesi_id"] =  $rreshti['id_perdoruesi_umrrsg'];
    
	require("dbcontroller.php");
	$dbController = new DBController();
	
	$pyetesori = "SELECT DISTINCT pyetje_id from tbl_pyetesori WHERE perdoruesi_id = " . $_SESSION["perdoruesi_id"]; 
	$rezultati = $dbController->getIds($pyetesori);
	
	$kushti = "";
	if(!empty($rezultati)) {
	    $kushti = " WHERE id NOT IN (" . implode(",", $rezultati) . ")";
    }
    
    $pyetesori = "SELECT * FROM `tbl_pyetje` " . $kushti . " limit 1";
    $pyetjet = $dbController->runQuery($pyetesori);
    
    if(!empty($pyetjet)) {
?>      
		<div class="question"><?php echo $pyetjet[0]["pyetje"]; ?><input type="hidden" name="pyetje" id="question" value="<?php echo $pyetjet[0]["id"]; ?>" ></div>      
<?php 
        $pyetesori = "SELECT * FROM tbl_pergjigjje WHERE pyetje_id = " . $pyetjet[0]["id"];
        $pergjigjjet = $dbController->runQuery($pyetesori);
        if(!empty($pergjigjjet)) {
            foreach($pergjigjjet as $k=>$v) {
                ?>
			<div class="question"><input type="radio" name="pergjigjje" class="radio-input" value="<?php echo $pergjigjjet[$k]["id"]; ?>" /><?php echo $pergjigjjet[$k]["pergjigjje"]; ?></div>      
<?php 
            }
        }
?>
		<div class="poll-bottom">
			<button id="btnSubmit" onClick="addPoll()">Dergo</button>
		</div>
<?php        
    } else {
?>

<div class="error">Votimi perfundoi me sukses!</div>


<?php 
    }
?>