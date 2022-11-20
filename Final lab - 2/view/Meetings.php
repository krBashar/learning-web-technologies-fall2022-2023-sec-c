<!DOCTYPE html>

<head>
    <title>Schedule Meetings</title>
</head>

<body bgcolor="LIGHTGRAY">
	<?php 

		session_start();
		$day;
		$start;
		$nd;

		
	?>
	<form method="POST" action="ScheduleMeetings.php" enctype="" name="meeting">

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
				<a href="ProjectManager.php">Home</a>&ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
            <fieldset align="center">
                <legend align="center">Meeting Informations</legend>
                <a href="createMeeting.php" ><h4>Create New Meeting</h4></a>
                <a href="viewMeeting.php" ><h4>View Meetings</h4></a>
                <a href="removeMeeting.php" ><h4>Remove Meeting</h4></a>
                <a href="editMeeting.php" ><h4>Edit Meeting</h4></a>
            </fieldset>

            	<br><br>

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