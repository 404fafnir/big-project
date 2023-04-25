<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/Logo_Fafnir_icon.png">
    <title>Fafnir | Avis</title>
    <?php require "../phpimports/stylesheetimport.php"; ?>
</head>

<body>

    <div class="bg-light">
    	<?php include "../phpimports/nav.php"; ?>
    </div>

    <br>

    <div class="text-center">
	<h1>Feedbacks</h1>
    </div>

    <br>
    <br>


    <div class="text-center">
	<form class="container text-center" method="post" action="../phpsql/sqlfeedback.php">
	    <div class="form-group">
		<label>Username</label>
		<input type="username" class="form-control" id="usernameavis" name="usernameavis" placeholder="_xXD4RK-J0hnD0eXx_">
	    </div>

	    <br>

	    <div class="form-group">
		<label>Email adress</label>
		<input type="email" class="form-control" id="emailavis" name="emailavis" placeholder="JohnDoe@nowhere.fr">
 	    </div>		

	    <br>
		
	    <div class="form-group">
		<label>Message to display</label>
		<textarea class="form-control" id="texteavis" name="texteavis" rows="4"></textarea>
	    </div>

	    <br>

	    <button type="submit" class="btn btn-primary">Submit</button>
	</form>
    </div>

    <br>

    <br>

	<?php require_once "../admin/config.php"; ?>

	<div class="container text-center">
		
		<h2>Que disent les autres ?</h2>

		<br>

		<?php
   			$sql = "SELECT * FROM user"; 
   			$pre = $pdo->prepare($sql); 
   			$pre->execute();
   			$data = $pre->fetchAll(PDO::FETCH_ASSOC);
			?>

			    <div class="row">	
					<div class="col-8 offset-2 ">	
					<?php foreach($data as $user){ ?>
							<div class="card">
  								<div class="card-body">
    								<blockquote class="blockquote mb-0">
      									<p><?php echo $user['texteavis'] ?></p>
      									<footer class="blockquote-footer"><?php echo $user['usernameavis'] ?></footer>
    								</blockquote>
  								</div>
								<br>
							</div>
						<br>
						<?php } ?>
							
					</div>
						
				</div>	
		<br>

		<br>

	</div>








    <?php include "../phpimports/footer.php"; ?>

    <?php include "../phpimports/script.php"; ?>
</body>

</html>
