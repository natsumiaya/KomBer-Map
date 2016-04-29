<!DOCTYPE HTML>
<html>
	<head>
		<title>Where am I?</title>
		<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
		<link rel="shortcut icon" href="<?php echo base_url('assets/images/fav.png') ?>" />	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js') ?>"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!-- Custom Theme files -->
		<link href="<?php echo base_url('assets/css/style.css') ?>" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body>
		<div class="header-section">
			<div id="home" class="header">
				<div class="container">
					<div class="top-header">
						<div class="logo">
							<a href="#"><img src="<?php echo base_url('assets/images/logo.png') ?>" title="logo" /></a>
						</div>
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="#home" class="scroll">Profile </a></li>
								<li class="page-scroll"><a href="#fea" class="scroll">Log Out</a></li>
							</ul>
							<a href="#" id="pull"><img src="<?php echo base_url('assets/images/nav-icon.png') ?>" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<div id="map"></div>
		
	
	<script>
	// The following example creates complex markers to indicate beaches near
	// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
	// to the base of the flagpole.
	var latitude = Number('<?php echo $pack[0]["latitude"]?>');
	var longitude = Number('<?php echo $pack[0]["longitude"]?>');
	function initMap() {
	  var map = new google.maps.Map(document.getElementById('map'), {
	    zoom: 15,
	    center: {lat: latitude, lng: longitude}
	  });

	  setMarkers(map);
	}

	// Data for the markers consisting of a name, a LatLng and a zIndex for the
	// order in which these markers should display on top of each other.
	
	var makan = [
		<?php
			$i=0; 
			foreach($makan as $row){
			if ($i!=0) echo ",";
			echo "['";
			echo $makan[$i]["times"];
			echo "',";
			echo (float)$makan[$i]["latitude"];
			echo ",";
			echo (float)$makan[$i]["longitude"];
			echo "]";
			$i++;
		}
		?>
	];
	var rapat = [
		<?php
			$i=0; 
			foreach($rapat as $row){
			if ($i!=0) echo ",";
			echo "['";
			echo $rapat[$i]["times"];
			echo "',";
			echo (float)$rapat[$i]["latitude"];
			echo ",";
			echo (float)$rapat[$i]["longitude"];
			echo "]";
			$i++;
		}
		?>
	];
	var tidur = [
		<?php
			$i=0; 
			foreach($tidur as $row){
			if ($i!=0) echo ",";
			echo "['";
			echo $tidur[$i]["times"];
			echo "',";
			echo (float)$tidur[$i]["latitude"];
			echo ",";
			echo (float)$tidur[$i]["longitude"];
			echo "]";
			$i++;
		}
		?>
	];
	var mandi = [
		<?php
			$i=0; 
			foreach($mandi as $row){
			if ($i!=0) echo ",";
			echo "['";
			echo $mandi[$i]["times"];
			echo "',";
			echo (float)$mandi[$i]["latitude"];
			echo ",";
			echo (float)$mandi[$i]["longitude"];
			echo "]";
			$i++;
		}
		?>
	];
	var jalan = [
		<?php
			$i=0; 
			foreach($jalan as $row){
			if ($i!=0) echo ",";
			echo "['";
			echo $jalan[$i]["times"];
			echo "',";
			echo (float)$jalan[$i]["latitude"];
			echo ",";
			echo (float)$jalan[$i]["longitude"];
			echo "]";
			$i++;
		}
		?>
	];
	var berkendara = [
		<?php
			$i=0; 
			foreach($berkendara as $row){
			if ($i!=0) echo ",";
			echo "['";
			echo $berkendara[$i]["times"];
			echo "',";
			echo (float)$berkendara[$i]["latitude"];
			echo ",";
			echo (float)$berkendara[$i]["longitude"];
			echo "]";
			$i++;
		}
		?>
	];
	var romantic = [
		<?php
			$i=0; 
			foreach($romantic as $row){
			if ($i!=0) echo ",";
			echo "['";
			echo $romantic[$i]["times"];
			echo "',";
			echo (float)$romantic[$i]["latitude"];
			echo ",";
			echo (float)$romantic[$i]["longitude"];
			echo "]";
			$i++;
		}
		?>
	];
	var mendaki = [
		<?php
			$i=0; 
			foreach($mendaki as $row){
			if ($i!=0) echo ",";
			echo "['";
			echo $mendaki[$i]["times"];
			echo "',";
			echo (float)$mendaki[$i]["latitude"];
			echo ",";
			echo (float)$mendaki[$i]["longitude"];
			echo "]";
			$i++;
		}
		?>
	];
	var berselancar = [
		<?php
			$i=0; 
			foreach($berselancar as $row){
			if ($i!=0) echo ",";
			echo "['";
			echo $berselancar[$i]["times"];
			echo "',";
			echo (float)$berselancar[$i]["latitude"];
			echo ",";
			echo (float)$berselancar[$i]["longitude"];
			echo "]";
			$i++;
		}
		?>
	];
	var memancing = [
		<?php
			$i=0; 
			foreach($memancing as $row){
			if ($i!=0) echo ",";
			echo "['";
			echo $memancing[$i]["times"];
			echo "',";
			echo (float)$memancing[$i]["latitude"];
			echo ",";
			echo (float)$memancing[$i]["longitude"];
			echo "]";
			$i++;
		}
		?>
	];

	function setMarkers(map) {

	  var image1 = {
	    url: "<?php echo base_url('assets/images/marker1.png') ?>",
	    size: new google.maps.Size(50, 50),
	    origin: new google.maps.Point(0, 0),
	    anchor: new google.maps.Point(0, 32)
	  };
	  var image2 = {
	    url: "<?php echo base_url('assets/images/marker2.png') ?>",
	    size: new google.maps.Size(50, 50),
	    origin: new google.maps.Point(0, 0),
	    anchor: new google.maps.Point(0, 32)
	  };
	  var image3 = {
	    url: "<?php echo base_url('assets/images/marker3.png') ?>",
	    size: new google.maps.Size(50, 50),
	    origin: new google.maps.Point(0, 0),
	    anchor: new google.maps.Point(0, 32)
	  };
	  var image4 = {
	    url: "<?php echo base_url('assets/images/marker4.png') ?>",
	    size: new google.maps.Size(50, 50),
	    origin: new google.maps.Point(0, 0),
	    anchor: new google.maps.Point(0, 32)
	  };
	  var image5 = {
	    url: "<?php echo base_url('assets/images/marker5.png') ?>",
	    size: new google.maps.Size(50, 50),
	    origin: new google.maps.Point(0, 0),
	    anchor: new google.maps.Point(0, 32)
	  };
	  var image6 = {
	    url: "<?php echo base_url('assets/images/marker6.png') ?>",
	    size: new google.maps.Size(50, 50),
	    origin: new google.maps.Point(0, 0),
	    anchor: new google.maps.Point(0, 32)
	  };
	  var image7 = {
	    url: "<?php echo base_url('assets/images/marker7.png') ?>",
	    size: new google.maps.Size(50, 50),
	    origin: new google.maps.Point(0, 0),
	    anchor: new google.maps.Point(0, 32)
	  };
	  var image8 = {
	    url: "<?php echo base_url('assets/images/marker8.png') ?>",
	    size: new google.maps.Size(50, 50),
	    origin: new google.maps.Point(0, 0),
	    anchor: new google.maps.Point(0, 32)
	  };
	  var image9 = {
	    url: "<?php echo base_url('assets/images/marker9.png') ?>",
	    size: new google.maps.Size(50, 50),
	    origin: new google.maps.Point(0, 0),
	    anchor: new google.maps.Point(0, 32)
	  };
	  var image10 = {
	    url: "<?php echo base_url('assets/images/marker10.png') ?>",
	    size: new google.maps.Size(50, 50),
	    origin: new google.maps.Point(0, 0),
	    anchor: new google.maps.Point(0, 32)
	  };


	  var shape = {
	    coords: [1, 1, 1, 20, 18, 20, 18, 1],
	    type: 'poly'
	  };
	  for (var i = 0; i < makan.length; i++) {
	    var permakan = makan[i];
	    var marker = new google.maps.Marker({
	      position: {lat: permakan[1], lng: permakan[2]},
	      map: map,
	      icon: image1,
	      shape: shape,
	      title: permakan[0],
	      zIndex: permakan[3]
	    });
	  }
	  for (var i = 0; i < rapat.length; i++) {
	    var perrapat = rapat[i];
	    var marker = new google.maps.Marker({
	      position: {lat: perrapat[1], lng: perrapat[2]},
	      map: map,
	      icon: image2,
	      shape: shape,
	      title: perrapat[0],
	      zIndex: perrapat[3]
	    });
	  }
	  for (var i = 0; i < tidur.length; i++) {
	    var pertidur = tidur[i];
	    var marker = new google.maps.Marker({
	      position: {lat: pertidur[1], lng: pertidur[2]},
	      map: map,
	      icon: image3,
	      shape: shape,
	      title: pertidur[0],
	      zIndex: pertidur[3]
	    });
	  }
	  for (var i = 0; i < mandi.length; i++) {
	    var permandi = mandi[i];
	    var marker = new google.maps.Marker({
	      position: {lat: permandi[1], lng: permandi[2]},
	      map: map,
	      icon: image4,
	      shape: shape,
	      title: permandi[0],
	      zIndex: permandi[3]
	    });
	  }
	  for (var i = 0; i < jalan.length; i++) {
	    var perjalan = jalan[i];
	    var marker = new google.maps.Marker({
	      position: {lat: perjalan[1], lng: perjalan[2]},
	      map: map,
	      icon: image5,
	      shape: shape,
	      title: perjalan[0],
	      zIndex: perjalan[3]
	    });
	  }
	  for (var i = 0; i < berkendara.length; i++) {
	    var perberkendara = berkendara[i];
	    var marker = new google.maps.Marker({
	      position: {lat: perberkendara[1], lng: perberkendara[2]},
	      map: map,
	      icon: image6,
	      shape: shape,
	      title: perberkendara[0],
	      zIndex: perberkendara[3]
	    });
	  }
	  for (var i = 0; i < romantic.length; i++) {
	    var perromantic = romantic[i];
	    var marker = new google.maps.Marker({
	      position: {lat: perromantic[1], lng: perromantic[2]},
	      map: map,
	      icon: image7,
	      shape: shape,
	      title: perromantic[0],
	      zIndex: perromantic[3]
	    });
	  }
	  for (var i = 0; i < mendaki.length; i++) {
	    var permendaki = mendaki[i];
	    var marker = new google.maps.Marker({
	      position: {lat: permendaki[1], lng: permendaki[2]},
	      map: map,
	      icon: image8,
	      shape: shape,
	      title: permendaki[0],
	      zIndex: permendaki[3]
	    });
	  }
	  for (var i = 0; i < berselancar.length; i++) {
	    var perberselancar = berselancar[i];
	    var marker = new google.maps.Marker({
	      position: {lat: perberselancar[1], lng: perberselancar[2]},
	      map: map,
	      icon: image9,
	      shape: shape,
	      title: perberselancar[0],
	      zIndex: perberselancar[3]
	    });
	  }
	  for (var i = 0; i < memancing.length; i++) {
	    var permemancing = memancing[i];
	    var marker = new google.maps.Marker({
	      position: {lat: permemancing[1], lng: permemancing[2]},
	      map: map,
	      icon: image10,
	      shape: shape,
	      title: permemancing[0],
	      zIndex: permemancing[3]
	    });
	  }
	}

	    </script>
	    <script async defer
	        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGJ9ombUsQOnWwb3WC4YA_nvpdBtHi9FM&signed_in=true&callback=initMap"></script>	
	</body>
</html>

