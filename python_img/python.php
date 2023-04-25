<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/Logo_Fafnir_icon.png">
    <title>Fafnir | img</title>
    <?php require "../phpimports/stylesheetimport.php"; ?>
</head>

<body>

    <div class="bg-light">
        <?php include "../phpimports/nav.php"; ?>
    </div>

    <br>

    <div class="text-center">
        <h1>Image Générée</h1>
    </div>

    <br>
    <br>

	<?php exec('python Chaos.py'); ?>

    	<div class="container text-center">
	    <img src="test.png">
	</div>

    <br>
    <br>

    <?php include "../phpimports/footer.php"; ?>

    <?php include "../phpimports/script.php"; ?>
</body>

</html>
