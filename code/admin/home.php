<!DOCTYPE html>
<?php 
	require 'validator.php';
	require_once 'conn.php'
?>
<html lang="en">
	<head>
		<title>Cloud Based Backup and Recovery System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<style>
			.hidden-content {
				display: none;
				padding: 10px;
				background-color: #f7f7f7;
				border: 1px solid #ccc;
				margin-top: 10px;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" style="background-color:blue;">
			<div class="container-fluid">
				<label class="navbar-brand" id="title">Cloud Based Backup and Recovery System</label>
				<?php 
					$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user]'") or die(mysqli_error());
					$fetch = mysqli_fetch_array($query);
				?>
				<ul class="nav navbar-right">	
					<li class="dropdown">
						<a class="user dropdown-toggle" data-toggle="dropdown" href="#">
							<span class="glyphicon glyphicon-user"></span>
							<?php 
								echo $fetch['firstname']." ".$fetch['lastname'];
							?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<?php include 'sidebar.php'?>
		<div id="content">
			<br /><br /><br />
			<div class="alert alert-info" id="mission-section">
				<h3>Mission</h3>
			</div>
			

			<!-- Hidden content for Mission and Vision -->
			<div id="mission-content" class="hidden-content">
				<p>The mission of a Cloud-Based Backup and Recovery System is to provide businesses and individuals with a reliable, scalable, and secure solution for protecting critical data from loss or corruption. In an era of increasing digital threats, data breaches, and unexpected disasters, our mission is to offer a robust backup solution that ensures data integrity, continuity, and peace of mind for all users.

The primary goal is to enable users to store and recover their data quickly and efficiently in the event of hardware failure, cyberattacks, accidental deletion, or natural disasters. By leveraging cloud technology, this system eliminates the need for complex and expensive on-premises infrastructure, offering users flexibility and cost-efficiency. The system’s cloud infrastructure is designed to scale according to the specific needs of each user, whether it be small-scale personal backups or large enterprise-level storage solutions.

Our mission also extends to offering automated backups with minimal user intervention, ensuring that data is consistently protected without the risk of human error. The recovery process is made seamless and fast, allowing users to restore lost or damaged data to a specific point in time, thereby minimizing downtime and reducing business disruption.

Moreover, the system prioritizes security by using encryption, multi-factor authentication, and other state-of-the-art protective measures to safeguard sensitive data from unauthorized access.

Overall, our Cloud-Based Backup and Recovery System’s mission is to make data protection as simple and reliable as possible, ensuring that users can focus on their core activities while knowing their valuable data is securely backed up and easily recoverable in times of need..</p>
			</div>
			
			<div class="alert alert-info" id="vision-section">
				<h3>Vision</h3>
			</div>

			<div id="vision-content" class="hidden-content">
				<p>The vision of the Cloud-Based Backup and Recovery System is to become the leading solution for data protection and business continuity worldwide, empowering organizations and individuals to confidently navigate the digital age. As businesses and personal data continue to grow exponentially, our vision is to provide a seamless, intelligent, and fully integrated cloud-based platform that ensures data is always accessible, secure, and recoverable, no matter the circumstance.

We envision a future where data backup and recovery are no longer complex or manual processes, but are automated, efficient, and worry-free. With advanced technologies like artificial intelligence and machine learning, our system aims to predict potential risks, automate data management, and offer real-time disaster recovery solutions, minimizing downtime and enhancing operational efficiency. This approach ensures that users can proactively prevent data loss before it occurs and recover in seconds when disasters strike.

In the long term, our vision is to support businesses of all sizes—from startups to global enterprises—by offering scalable solutions that adapt to their evolving needs. We aspire to make cloud-based data protection universally accessible, breaking down barriers to entry, and democratizing data security for everyone, regardless of technical expertise or budget constraints.

Furthermore, we strive to redefine the concept of data security, not only by providing encrypted and compliant storage, but also by setting new standards for transparency, user control, and trust in data management. Our goal is to build a system that is not only reliable but also intuitive, enabling users to manage their backups with ease while maintaining full control over their information.

Ultimately, our vision is to be at the forefront of the digital transformation, ensuring that data recovery and backup are effortless, secure, and available anytime, anywhere, for all users..</p>
			</div>
		</div>
		<div id="footer">
			<label class="footer-title">&copy; Supervised by: Adeife, O.T. (Mrs) <?php echo date("Y", strtotime("+8 HOURS"))?></label>
		</div>
		<?php include 'script.php'?>	
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$(document).ready(function() {
				// Toggle mission content
				$("#mission-section").click(function() {
					$("#mission-content").toggle();  // Toggle visibility of mission content
					$("#vision-content").hide();    // Hide vision content if it's open
				});

				// Toggle vision content
				$("#vision-section").click(function() {
					$("#vision-content").toggle();  // Toggle visibility of vision content
					$("#mission-content").hide();  // Hide mission content if it's open
				});
			});
		</script>
	</body>
</html>
