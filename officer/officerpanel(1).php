

<head>
  <title>WEB BASED PRISONS MNGNT SYSTEM </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='1' bgcolor='green' width='820' cellpadding='10' cellspacing='0' height='325'>
          <tr>
            <td colspan='3' height='2'><img src='banner.gif'></td>
          </tr>
       
          <tr>
          	 <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
            <font size="4">
            
            <a href="court.php">COURT</a>  |
            <a href="transfer.php">TRANSFER </a>|
            <a href="newprison.php">NEW PRISON </a> |
            <a href="search-form.php">SEARCH </a> 
            <!-- <a href="search.php">SEARCH</a> -->
          </font>
            </td>

          </tr>

            <td height='1' colspan='3' align='right' bgcolor="#006600">&nbsp;</td>

          </tr>



          <tr>

            <td width='4%' bgcolor='#FFFFFF' valign='top'>
               

            <td width='71%' valign='top' bgcolor="#FFFFFF">

<h3 align='center'> WEB BASED PRISON MNGNT  SYSTEM FOR THE WARDER  </h3>
<P align='justify'><font face='Arial, Helvetica, sans-serif'>
	The warder has the abilty to view information,edit and delete.
 this is for the warder. The system enable an Administrator to provide
 services to users and here the administrator can add and upload information, update, delete, view the record added. 
 The administrator can also change his account for more security.

			</td>
            <td width='25%' bgcolor='GREEN'  valign='top'>
			
	
<table border='0' align='center'>
<tr>
<td width="252"  ">
<h3>  WARDER PANNEL : </h3><br/>
<ul>
	

			<div id="menu">
				<ul>
					
					<li><a href="viewannounce1.php">Comment</a></li>
					<li><a href="viewprisoners1.php">inmates Info</a></li> 
					<li><a href="viewcourt1.php">Court Information</a></li>
          <li><a href="viewvisitors.php">Visitors</a></li>
          <li><a href="viewnewprison.php">New Prison</a></li>
          <li><a href="viewofficer.php">Warder</a></li>
          <li><a href="viewtransfer1.php">Inmates Transfer</a></li>
 					<li><a href="../index.php">Log Out</a></li>

				</ul>
				</ul>
			</div>
</td>
</tr>
</table>
	
			</td>
          </tr>
           <?php
           include("footer.php");
                ?>
          <tr>
           
          </tr>
	</table>
</body>
</head>
</html>