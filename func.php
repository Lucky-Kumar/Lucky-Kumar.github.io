<?php

function nav_button($link,$icon,$title,$small,$click = ""){
	?>
	<a href="<?php echo $link;?>" class="w3-bar-item w3-button w3-hide-small <?php if($small == "true"){
		echo 'w3-hide-small ';
		} else {
			echo '';
		}?>w3-padding-large w3-hover-white" <?php if($click != ""){
			?>onclick="openNav()" <?php
		} else {
			echo '';
		}?>title="<?php echo $title;?>"><i class="fa fa-<?php echo $icon;?>"></i></a>
	<?php
}

function sidebar_btn(){
	?><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><?php
}

function player($title,$link){
	?>
	<!--<button class="back" onclick="window.history.back()">BACK</button>-->
	<div class="w3-white w3-text-grey w3-card-4 w3-container">
		<br>
	<center>
		<h1 class="w3-text-black w3-hover-red w3-hover-text-white"><?php echo $title; ?></h1>
	<div class="blockpos" style="position: relative;">

      <iframe id="iplayer" src="https://drive.google.com/file/d/<?php echo $link; ?>/preview" frameborder="0" seamless="" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>

      <div style="width: 70px; height: 70px; position: absolute; opacity: 0; right: 0px; top: 0px;background-color: green;">&nbsp;</div>
	</div>
	</center>
	<br>
	</div>
		<br>
<!--
<script>
$("#iplayer").ready(function(){
	setTimeout(function() {
		document.getElementById("iplayer").click();
		alert("Done");
	},3000);
});
</script>-->
	<?php
}

function hr(){
	echo "<hr>";
}

function course_strip(){
	require("db.php");
	?>
	<div class="w3-container w3-white">
	<?php $couser = array("html","css","html5","css3","php","javascript","jquery","ajax","web_host","bootstrap","project"); ?>
		<?php foreach ($couser as $a) {?>
		<div class="w3-dropdown-hover">
		<button class="w3-button w3-padding-large w3-black" title="Notifications"><?php echo $a; ?></button>     
		<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">

		<?php
		$sql = "Select * from subject where subject='".$a."'";
		$q = mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($q)){ ?>
			<a href="#" class="w3-bar-item w3-button"><?php echo $row["title"]; ?></a>
		<?php
		}
		?>
		</div>
		</div>
		<?php } ?>
	</div>
	<br>
	<?php
}
?>