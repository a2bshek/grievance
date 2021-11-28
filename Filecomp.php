<!DOCTYPE HTML>
<HTML lang="en">
	<HEAD>
		<meta charset="utf-8">
		<title>File Complaint</title>
        <link rel = "icon" href = "img/like.png" type = "image/x-icon">
		<link rel="stylesheet" href="css/Raise.css">	
	</HEAD>
	<BODY>
		<table class="a">
			<tr>
			    <td height="40" align="center">
				    <img alt="" src="img/logo.png" width="250px" height="200px" align="absmiddle">
                </td>
            </tr>
		</table>
		<div class="topnav">
            <a href="Viewcomp.php">View Complaints</a>
			<a href="Filecomp.php" class="active">File Complaint</a>
			<a href="Index.php">Home</a>
		</div>
    	<table cellpadding="0px" class="a">
		    <tr>
                <td style="text-align: center; font-family: sans-serif; font-size: 15px; color: #000000;">
			        <b><i>Raise My Voice</i> is the platform to raise your voice against unjust.<br>This is the place where your problems are solved<br>Solution for the cause of revolt.</b>
			    </td>
            </tr>
        </table>
		<h1 colspan="100px" class="a">
		    <br>File Complaint<br>&emsp;
        </h1>

		<form action="backend/submit.php" method="POST" enctype="multipart/form-data">
			
            <table bgcolor="#222222" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; 
			font-size: 15px; color: #FFFFFF;" align="center" width="100%">
				<tr><td>
					<table bgcolor="#222222" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; 
					font-size: 15px; color: #FFFFFF;" align="center">
						<tr width="100px"> <br>
							<td style="text-align: right;">First name :</td>
							<td style="text-align: left;">
								<input type="text" name="fname" placeholder="First Name*" class="defaultTextBox" required />
							</td>
						</tr>
						<tr>
							<td style="text-align: right;">Last name :</td>
							<td style="text-align: left;">
								<input type="text" name="lname" placeholder="Last Name" class="defaultTextBox" />
							</td>
						</tr>
                        <tr>
							<td style="text-align: right;">&emsp;</td>
							<td style="text-align: left;">&emsp;</td>
						</tr>
						<tr>
							<td style="text-align: right;">Show my name :</td>
							<td style="text-align: left;">
									<input type="radio" name="sname" value="Y" required />Yes
									<input type="radio" name="sname" value="N" required />No &emsp; (Select Yes if want to display your name in the complaint)
							</td>
						</tr>
                        <tr>
							<td style="text-align: right;">&emsp;</td>
							<td style="text-align: left;">&emsp;</td>
						</tr>
						<tr>
							<td style="text-align: right;">E-mail :</td>
							<td style="text-align: left;">
								<input type="email" name="email" placeholder="email*" class="defaultTextBox" required />
							</td>
						</tr>
						<tr>
							<td style="text-align: right;">Zip code :</td>
							<td style="text-align: left;">
								<input type="number" placeholder="Postal Code*" name="zip" class="defaultTextBox" required />
							</td>
						</tr>
                        <tr>
							<td style="text-align: right;">&emsp;</td>
							<td style="text-align: left;">&emsp;</td>
						</tr>
                        <tr>
							<td style="text-align: right;">Complaint On:</td>
							<td style="text-align: left;">
                                <input type="text" placeholder="Name or the Department of the complaint*" name="dep" class="defaultTextBox" required />
                            </td>
						</tr>
                        <tr>
							<td style="text-align: right;">&emsp;</td>
							<td style="text-align: left;">&emsp;</td>
						</tr>
						<tr>
							<td style="text-align: right;">Complaint :</td>
							<td style="text-align: left;">
								<textarea placeholder="Describe Your Complaint Briefly*" name="complaint" rows="8" cols="60" class="topnav" required ></textarea>
							</td>
						</tr>
                        <tr>
							<td style="text-align: right;">&emsp;</td>
							<td style="text-align: left;">&emsp;</td>
						</tr>
						<tr>
							<td style="text-align: right;">Upload proof :</td>
							<td style="text-align: left;">
							<input class="" type="file" placeholder="Upload proof*" name="proof" />
							</td>
						</tr>
                        <tr>
							<td style="text-align: right;">&emsp;</td>
							<td style="text-align: left;">&emsp;</td>
						</tr>
                        <tr>
                            <td style="text-align: right;">Captcha :</td>
						    <td style="text-align: left;" class="a"><br>
							<input type="text" class="defaultTextBox" id="captcha" placeholder="Enter captcha" name="captcha" />
                            <img src="backend/captcha.php"/>
                            <br>&emsp;
						</td>
					</tr>
					</table>
                    					
                    <table align="center">
						<tr>
							<td align="center" class="a">
								<br>
								<input type="submit" value="Submit" class="submit" onclick="" />
								<br>&emsp;
							</td>
						</tr>
					</table>
					<table align="right">
						<tr>
							<td align="right">
								<br>
								*(Required Fields)
								<br>&emsp;
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
		</form>
	</BODY>
</HTML>