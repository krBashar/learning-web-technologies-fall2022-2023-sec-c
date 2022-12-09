<!DOCTYPE html>

<head>
    <title>Schedule Meeting</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="POST" action="../controller/clearMeetingReq.php" enctype="">

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
				<legend align="center">Meeting Requests</legend>
                <table width=60% align = "center">
                    <tr>
                        <td >Meeting ID</td>
                        <td>Project ID</td>
                        <td>Employee ID</td>
                        <td>Day</td>
                    </tr>
                    <?php
                        require_once('../models/meetinginfo.php');
						$users = allMeetingReq();
						foreach($users as $user){
							echo "	<tr><td>{$user['meetingid']}</td>
									<td>{$user['projectid']}</td>
									<td>{$user['empid']}</td>
									<td>{$user['weekday']}</td></tr>";
						}
                    ?>
                	</table><br><br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					
					<input align="center" type="submit" value="Clear Meeting Request" name="submit">
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