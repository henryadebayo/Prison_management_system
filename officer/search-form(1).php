<html>
<head>
   <style>
    div.ex
     {
      width:400px;
      padding:3px;
      border:5px silver;
      margin:0px;
     }
   </style>
  <title>PRISON MANAGEMNT SYSTEM</title>
</head>
<body>
    <table align='center' border='1' bgcolor='green' width='820' cellpadding='10' cellspacing='0' height='325'>
          <tr>
            <td colspan='3' height='2'><img src='banner.gif'></td>
          </tr>
      
  <tr>
   <td colspan="8" bgcolor="FF0000" height="3" align="center">			
	   <font size="5">  
     <a href="../index.php">Log Out</a>|
     <a href="officerpanel.php">Back to  Panel</a>
          </font> </td>
</tr>
<td align="center" bgcolor="#FFFFFF"><h1> Seacrh By Prisoner Name</h1>
        <form action="search.php" method="get">
           <label>Prisoner Name:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td>
<td width="7%" bgcolor="#FFFFFF"></td>
<td width="2%" bgcolor="#FFFFFF"></td>

<tr>
</tr>
           <?php
           include("footer.php");
                ?>
          <tr>
</tr>
</table>
</body>
</html>
