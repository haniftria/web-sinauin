<?php 
    session_start();
    if(!isset($_SESSION['nama'])) {
     header("location:/sinauinn/login.php");
    } else {

 ?>
<?php include ('header.php');?>
<!DOCTYPE>
<html>
<?php require 'dbconfig.php';
?>
<head>
<title>QUIZ</title>
<style>
/* button */
.card-aaaa {
  margin-top: 50px;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 500px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.button3 {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f4e542;
}

.button3:hover {
    background-color: #f4e542;
    color: Black;
}
</style>
</head>
<body><center>
  <div class="card bg-success" style="max-width: 100rem; height: 41rem;">
  <div class="card card-aaaa border-danger mb-3" style="max-width: 40rem;">
  <div class="card-header">Sinauin</div>
  <div class="card-body">
<?php 															
																if (isset($_POST['click']) || isset($_GET['start'])) {
																@$_SESSION['clicks'] += 1 ;
																$c = $_SESSION['clicks'];
																if(isset($_POST['userans'])) { $userselected = $_POST['userans']; $id_mata_pelajaran= $_POST['id_mata_pelajaran'];
																
																$fetchqry2 = "UPDATE `pilihan_soal` SET `userans`='$userselected' WHERE `id_pilihan_soal`=$c-1 and id_mata_pelajaran='$id_mata_pelajaran'"; 
																$result2 = mysqli_query($con,$fetchqry2);
																}
		  
																	
 																} else {
																	$_SESSION['clicks'] = 0;
																}
																
																//echo($_SESSION['clicks']);
																?>
<div class="bump"><br><form><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" float="left"><span>START QUIZ</span></button> <?php } ?></form></div>
<form action="" method="post">  				
<table><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `pilihan_soal` where id_pilihan_soal='$c'"; 
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
		  ?>
<tr><td><h3><br><?php echo @$row['que'];?></h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 6){ ?>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['pilihan_a'];?>">&nbsp;<?php echo $row['pilihan_a']; ?><br>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['pilihan_b'];?>">&nbsp;<?php echo $row['pilihan_b'];?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['pilihan_c'];?>">&nbsp;<?php echo $row['pilihan_c']; ?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['pilihan_d'];?>">&nbsp;<?php echo $row['pilihan_d']; ?></td></tr>
  <tr><td><input required type="radio" name="userans" value="<?php echo $row['pilihan_e'];?>">&nbsp;<?php echo $row['pilihan_e']; ?><br><br><br></td></tr>
  <tr><td><button class="button3" name="click" >Next</button></td></tr> <?php }  
																	?> 
  <form>
 <?php if($_SESSION['clicks']>5){ 
	$qry3 = "SELECT `ans`, `userans` FROM `pilihan_soal`;";
	$result3 = mysqli_query($con,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['ans']==$row3['userans']){
		 @$_SESSION['score'] += 1 ;
	 }
}
 
 ?> 
 
 
 <h2>Result</h2>
 <span>Jumlah jawaban yang benar:&nbsp;<?php echo $no = @$_SESSION['score']; 
 session_unset(); ?></span><br>
 <span>Nilai:&nbsp;<?php echo $no*2; ?></span>
<?php } ?>
 <!-- <script type="text/javascript">
    function radioValidation(){
		/* var useransj = document.getElementById('rd').value;
        //document.cookie = "username = " + userans;
		alert(useransj); */
		var uans = document.getElementsByName('userans');
		var tok;
		for(var i = 0; i < uans.length; i++){
			if(uans[i].checked){
				tok = uans[i].value;
				alert(tok);
			}
		}
    }
</script> -->
</div>
</div>
</center>
</body>
</html>

<?php } ?>