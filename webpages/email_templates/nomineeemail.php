<?php
	function getNomineeEmailBody($name, $nomName, $uid)
	{
		$msg = '<html>
					<head>
						<title>You have been nominated to be a GTA</title>
					</head

					<body>
						<p>Dear ' . $name . ',</p>

						<p>Nominator ' . $nomName . ' has nominated to you be a GTA.</p>

						<p>If you wish to accept this nomination, follow the link provided and fill out the form.</p>

						<p>After you have you successfully entered your information and submitted, your nominator will
						 then look, and verify, your information.</p> 

						<p><a href="http://raspbiripi.ddns.net/webpages/nominee.php?u=' . $uid . '>Click here</a> to fill 
						out your nominee form.</p>"
					</body>

					<footer>
						<hr>
						GTAMS Administration
					</footer>
				</html>';

		return $msg;
	}
?>