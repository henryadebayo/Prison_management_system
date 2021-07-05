

<head>
  <title>KANO CENTRAL PRISON</title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='500' cellpadding='10' cellspacing='0' height='525'>
          
		  <tr>
            <td colspan='3' height='2'><img src='banner.gif'></td>
          </tr>
		  <tr>
            <td colspan="7" bgcolor="#yellow" height="1" align="center">
		      <h1><font size="5">
	           <a href="adminpanel.php">Home</a> | 
              			   
		        <a href="search-form.php">Search </a> 
                <!-- <a href="location.php">Location</a>| -->
				
		        <a href="officertransfer.php">Warder</a>|
		        <a href="registration.php">Register Inmate</a>
				<a href="court.php">Court</a>
		        </font></h1>
            </td>
			 </td>
		 
            <td height='1' colspan='3' align='right' bgcolor="green">&nbsp;</td>
			
          </tr>
		 
          <tr>
		 
            <td width='4%' bgcolor='#FFFFFF' valign='top'>
<h3 align='center'  title='You should be online'>&nbsp;</h3></td>

            <td width='81%' valign='top' bgcolor="#FFFFFF">

<p align='center'>
 

<h3 align='center'>&nbsp;</h3>
<br/>
<h3 align='center'>THIS FOR ADMINSITRATOR </h3>
<P align='justify'><font face='Arial, Helvetica, sans-serif'>The system enable an Administrator 
	to provide services to users and here the administrator can add and upload information,
	 update, delete, view the record added. The administrator
	  can also change his account for more security.</font></p>

		<br>
			</td>
            <td width='25%' bgcolor='green'  valign='top'>
			
	
<table border='1' align='center'>
<tr>
<td width="252" bgcolor="green">
<h4>  Admin Management : </h4>


<ul>
	
	<li><a href="viewofficer.php"><b>Prison Warder Transfer</b></a></li>
		

	<li><a href="viewprisoners.php"><b>Inmates Details</b></a></li>
		<br>
	<li><a href="viewcase.php"><b>Case Details</b></a></li>
		<br>
	<li><a href="viewtransfer.php"><b>Transfer Information</b></a></li>
		<br>
	<li><a href="viewvis.php"><b>Visitors Information</b></a></li>
		<br>
	<li><a href="viewoff.php"><b>Warder details</b></a></li>
		<br>
	<li><a href="viewnewprison.php"><b>New Prison</b></a></li>
		<br>
	<li><a href="viewcourt.php"><b>Court Information</b></a></li>
		<br>
	<li><a href="viewAnnounce.php"><b>View Comment</b></a></li>
		<br>
	<li><a href="report.php"><b>Report</b></a></li>
		<br>
    <li><a href="../login2.php"><b>LOG OUT</b></a></li>
</ul>
</td>
</tr>
</table>


			
			</td>
          </tr>
          <tr>
            <?php
           include("Footer.php");
                ?>
          </tr>
	</table>
</body>
</head>
</html>