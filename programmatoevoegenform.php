<?php 
include('db.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>zender</title>
	
	</head>
	
	<body>
			
				
			
					
						<h3 > Add Programma</h3><br>
						
						
                   
					<form action="programmatoevoegen.php" method="POST">
					     <label>idprogramma</label><br>
					    <select name="idpro" id="">
							<?php 
							$mysql = "SELECT * FROM programma";
							$stmt = $conn->prepare($mysql);
							$stmt->execute();
							$rows = $stmt->fetchAll();

							foreach($rows as $row ){
							echo 	"<option value=".$row['idprogramma'].">".$row['omschrijving']."</option>";

							}
							
							?>
						
						
						</select>
                         <br><br>
                         <label>datum</label><br>
					     <input type="date" name="datum">
                         <br><br>
                         <label>begintijd</label><br>
					     <input type="time" name="begintijd">
                         <br><br>
                         <label>eindtijd</label><br>
					     <input type="time" name="eindtijd">
					     <br><br>
					     <label>presentator</label><br>
					     <input type="number" name="presentator">
                         <br><br>
                         <label>idzender</label><br>
					     <input type="number" name="idzender">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add Programma</button>
					</form>
				
				
				</div>
				<br>
				<div class="content2">
					<a href="index.php">link naar het programaoverzicht</a>
				</div>
				
				
			</div>
	
	</body>
</html>