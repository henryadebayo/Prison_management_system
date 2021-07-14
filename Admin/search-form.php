<html>
<head>
  
  <title>INMATES SEARCH RECORD</title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table align="center" border="1" bgcolor="#937541" width="600" cellpadding="8" cellspacing="0" height="415">
          <tr>
            <td colspan="0" height="246"><img src="banner.gif" width="1045" height="230""></td>
          </tr>
          <tr>
            <td colspan="8" bgcolor="green" height="3" align="center">
			
			
		<font size="5">  
		 <a href="../index.php">Logout</a> |
         <a href="adminpanel.php">Admin Panel</a>
          </font>
            </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF"><h1> Seacrh Inmates By ID</h1>
        <form action="search.php" method="get">
           <label>ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td>

    <tr>
     <td align="center" bgcolor="#FFFFFF"><h1> Seacrh Warder By ID</h1>
        <form action="search1.php" method="get">
           <label> Warder ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></td></tr>
<tr>
     
      <td align="center" bgcolor="#FFFFFF"><h1> Seacrh Visitor By ID</h1>
        <form action="search3.php" method="get">
           <label> Visitors ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></tr>

    <tr>
     
      <td align="center" bgcolor="#FFFFFF"><h1> Seacrh Transfer By ID</h1>
        <form action="search2.php" method="get">
           <label> Transfer  ID :
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></tr>

<td width="7%" bgcolor="#FFFFFF"></td>
<td width="2%" bgcolor="#FFFFFF"></td>


<tr>
<td bgcolor="#937541" colspan="3" align="center">
<?php
           include("footer.php");
                ?>
</tr>
</table>
</body>
</html>