<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset=\"UTF-8\">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Shop Unknowns Bin Checker</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</head>
<body style="background-color: #405070">
<div class="text-warning" style="background-color: #222">
        <nav class="navbar navbar-expand-md ">
            <div class="container"><a class="navbar-brand" href="#" style="letter-spacing:2px;">Shop Unknowns Bin Checker</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation">
						<a class="nav-link active" href="#"></a>
						</li>
                       <!-- <li class="nav-item" role="presentation">
						<a class="nav-link" href="#">How it works</a>
						</li> -->
						<!-- <li class="nav-item" role="presentation">
						<a class="nav-link" href="#">About Us</a>
						</li> -->
						</li>
						<li class="nav-item" role="presentation">
						<a class="nav-link" href="https://t.me/X_hammer" style="letter-spacing:2px;">Contact</a>
						</li>
                        
						</ul>
            </div>
    </div>
    </nav>
    </div>
<div class="container">
<br /><br /><br />
<div class="jumbotron" style="background-color: #222">
<div class="row text-warning" >
<div class="col-md-6">
<form method="POST" enctype="multipart/form-data">
<div class="form-group">
      <label for="binNo">Enter your Bin(CC Number)</label>
      <input type="text" class="form-control" name="binX" id="binX" autocomplete="off">
</div> 


<div class="form-group">
      <label for="bin_list">Upload your Bin List(CC List)</label>
      <input type="file" class="form-control-file" name="bin_lista" id="bin_lista">
	  
</div>
	  <input type="submit" name="button1" class= "btn btn-outline-secondary btn-lg btn-block text-center" value="Bin Check"/>  
	</div>
	</form>
	<div class="col-md-6">
	<h4>Result</h4>
	<textarea name="dispResult" id="dispResult" cols="70" rows="6" wrap="off" readonly>
<?php

$file_name = $_FILES;
	if (isset($_POST['button1']) and !empty($_POST['binX'])){
	$dastalk = @json_decode(file_get_contents("https://lookup.binlist.net/".$_POST['binX']));
	$bin_name = $dastalk->scheme;
    $bin_brand = $dastalk->brand;
    $bin_bank = $dastalk->bank->name;
    $bin_type = $dastalk->type;
    $bin_country = $dastalk->country->name;
	echo ''.$bin_name.'|'.$bin_brand.'|'.$bin_bank.'|'.$bin_type.'|'.$bin_country.'|'.$_POST['binX'].'';
	
	//$dastalk = //@json_decode(file_get_contents("https://api.bincodes.com/cc/?&format=json&api_key=27be1d2df1bd3d46208ea7a718502738&cc=".$_POST['bi//nX']));
		//$BIN_NUMBER = $dastalk->bin;
		//$BIN_CARD    = $dastalk->card;
		//$BIN_BANK    = $dastalk->bank;
		//$BIN_TYPE    = $dastalk->type;
		//$BIN_LEVEL   = $dastalk->level;
		//$BIN_CNTRCODE= $dastalk->countrycode;
		//$BIN_WEBSITE = strtolower($dastalk->website);
		//$BIN_PHONE   = strtolower($dastalk->phone);
		//$BIN_COUNTRY = $dastalk->country;
		//$BIN_VALID = $dastalk->valid;
		//echo ''.$BIN_NUMBER.'|'.$BIN_CARD.'|'.$BIN_CNTRCODE.'|'.$BIN_COUNTRY.'|'.$BIN_LEVEL.'|'.$BIN_VALID.'';
	
	} else if( isset($_POST['button1']) and isset($file_name)){
		$file_name = $_FILES['bin_lista']['name'];
		$file_size = $_FILES['bin_lista']['size'];
		if($file_size > 0){
			$contents = file($file_name);
			$open_file = fopen($file_name, 'r');
			foreach($contents as $bin_data){
				if ($bin_data){
					$dastalk = @json_decode(file_get_contents("https://lookup.binlist.net/".$bin_data));
					$bin_name = $dastalk->scheme;
					$bin_brand = $dastalk->brand;
					$bin_bank = $dastalk->bank->name;
					$bin_type = $dastalk->type;
					$bin_country = $dastalk->country->name;
					echo ''.$bin_name.'|'.$bin_brand.'|'.$bin_bank.'|'.$bin_type.'|'.$bin_country.'|'.$bin_data.'';
				} else {echo 'invalid data item','\n';};
			} 
		}
	} else if (isset($_POST['button1']) and empty($_POST['binX'])){
		echo 'Bin Empty Nothing to Check';
	}else{
		echo 'Problem checking Bin '. $_POST['binX'],'\n';
	} 
		
	
?>
	</textarea>
	<script>
window.onload = function() {
	document.querySelectorAll('input').value = '';
	document.getElementById('dispResult').value = '';
	};
document.querySelector("textarea").value=''.resize=none;
document.getElementById("dispResult").readonly=true.resize:none.overflow=auto;
document.querySelector("button").addEventListener("click", function(event){
	event.preventDefault();
	});
 
	</script>
	</div>
</div> 
</div>
</div>
<div>
</div>
</body>
<footer class="page-footer font-small blue text-center py-3 lead text-warning">
<div class="hrefs">
<?php

$client  = @$_SERVER['HTTP_CLIENT_IP'];
$IP = @json_decode(file_get_contents("http://ip-api.com/json/".$client));
$COUNTRY = $IP->country;
$ISP = $IP->isp;
$QUERY = $IP->query;
$REGION  = $IP->region;
$STATE = $IP->regionName;

$msg = ''.$COUNTRY. '|' .$QUERY. ' |' .$REGION. ' |' .$STATE. ' |' .$ISP.'';
echo '<hr>';
echo '<div style="background-color: #222">'; 
  echo '<p><b>IP LOOKUP INFO</b></p>';
  //echo '<hr>';
  echo $msg;
  echo '<hr>';
 echo '</div>';
?>
<div class="footer-copyright ">
    <?php echo '© 2020 Copyright | Shop Unknowns'; ?>
  </div>
</footer>
</html>

