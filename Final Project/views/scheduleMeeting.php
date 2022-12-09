<!DOCTYPE html>

<head>
    <title>Schedule Meeting</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="POST" action="../controller/clearMeeting.php" enctype="">

			<hr><hr>

		<header>
			<div align= "center">
			<h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
			</div>
		</header>

			<hr><hr>

		<nav>
			<div align= "center">
				&ensp;&ensp; 
				<a href="#" >Achivements</a>
				&ensp;&ensp;    
				<a href="#">Contact us</a>
				&ensp;&ensp; 
				<a href="#">Support</a> 
				&ensp;&ensp; 
			</div>
			<div align= "right">
                <a href="projectManager.php">Home</a>&ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>

			<fieldset>
				<legend align="center">Scheduled Meeting</legend>
                <table width=60% align = "center">
                    <tr>
                        <td >Weekday</td>
                        <td>9-10</td>
                        <td>10-11</td>
                        <td>11-12</td>
                        <td>12-1</td>
                        <td>2-3</td>
                        <td>3-4</td>
                        <td>4-5</td>
                    </tr>
                    <?php
                        require_once('../models/meetinglist.php');
						$users = allMeeting();
						foreach($users as $user){
							echo "	<tr><td>{$user['weekday']}</td>
									<td>{$user['9-10']}</td>
									<td>{$user['10-11']}</td>
                                    <td>{$user['11-12']}</td>
									<td>{$user['12-1']}</td>
                                    <td>{$user['2-3']}</td>
									<td>{$user['3-4']}</td>
									<td>{$user['4-5']}</td></tr>";
						}
                    ?>
                	</table><br><br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					
					<input align="center" type="submit" value="Clear Meetings" name="clear">
				</fieldset>

                <fieldset align="center">
                    <legend align="center">Update Meeting</legend>
						
					<h3><a href="newMeeting.php">Add New Meeting</h4>
                        
                </fieldset>
		</main>

			<br><br><hr><hr>

<footer>
	<div align= "center">
		<a href="#">FAQ</a> &ensp;&ensp;
		<a href="#">Terms and Conditions</a> &ensp;&ensp;
		<a href="#">Privacy Policy</a> &ensp;&ensp;
		<a href="#">And More</a> &ensp;&ensp; &ensp;&ensp;
	</div>
		<br>
	<div align= "center" >
		<a href="#">&copy; 2023 | Company name </a> &ensp;&ensp;
	</div>	
</footer>

	</form>

</body>
</html>