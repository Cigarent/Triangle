<html>

<head>
	<title>Results</title>
	<script src="../js/recolor.js"></script> 
    <script src="../js/trans.js"></script> 
	<script src="../js/drop.js"></script> 
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css' />
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>

<body>

<div id="results">

{<br><blockquote>
  "itemName" : "<?php echo $_POST["name"]; ?>",<br>
  "inventoryIcon" : "<?php echo $_POST["icon"]; ?>",<br>
  "dropCollision" : <?php echo $_POST["drop"]; ?>,<br>
  "maxStack" : <?php echo $_POST["maxs"]; ?>,<br>
  "rarity" : "<?php echo $_POST["rare"]; ?>",<br>
  "tooltipKind" : "<?php echo $_POST["tool"]; ?>",<br>
  "description" : "<?php echo $_POST["desc"]; ?>",<br>
  "shortdescription" : "<?php echo $_POST["shor"]; ?>",<br>
  "largeImage" : "<?php echo $_POST["larg"]; ?>",<br>
  "image" : "<?php echo $_POST["imag"]; ?>",<br>
  "handPosition" : <?php echo $_POST["hand"]; ?>,<br>
  "fireTime" : <?php echo $_POST["fire"]; ?>,<br>
  "swingStart" : <?php echo $_POST["star"]; ?>,<br>
  "swingFinish" : <?php echo $_POST["fini"]; ?>,<br>
  "blockRadius" : <?php echo $_POST["bloc"]; ?>,<br>
  "altBlockRadius" : <?php echo $_POST["altb"]; ?>,<br>
  "twoHanded" : <?php echo $_POST["twoh"]; ?>,<br>
  "strikeSounds" : ["<?php echo $_POST["stri"]; ?>"],<br>
  "breakSound" : "<?php echo $_POST["brea"]; ?>",<br>
  "durability" : <?php echo $_POST["dura"]; ?>,<br>
  "durabilityPerUse" : <?php echo $_POST["duru"]; ?>,<br>
  "tileDamage" : <?php echo $_POST["tile"]; ?>,<br>
  "harvestLevel" : <?php echo $_POST["harv"]; ?>,<br>
  "tileDamageBlunted" : <?php echo $_POST["tdmg"]; ?><br>
</blockquote>}
	
</div>

</body>
</html> 