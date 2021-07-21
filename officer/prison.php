<html>
<head>
   
	<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align="center" border="1" bgcolor="green" width="540" cellpadding="9" cellspacing="0" height="525">
          <tr>
            <td colspan="3" height="2"><img src="banner.gif" width="860"></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="green" height="1" align="center">
	     	<font size="4">
         
         <a href="officerpanel.php">HOME</a>  |
		     
          </font>
            </td>
          </tr>
          <tr>
            <td width="0%" bgcolor="#FFFFFF" ></td>
            <td width="0%" align="center" bgcolor="#FFFFFF">
    <h2>Fill the details to add new Prison</h2>
    
    <form action='prisonvalidation.php' method="POST">
      <label for="prisonid">Prisonid:</label>
      <input name="id" class="id" required size=30 placeholder='GOV-XXX' type="text" maxlength=255 /> *
    </br></br>
      <label for="name">Prison Name:</label>
      <input name="name" class="name" required size=30 placeholder='KIBERA' type="text"/> *
    </br></br>
    
    <label for="Dpt">Location:</label>
      <select name='location' required size=0 >
        <option>Nairobi</option>
        <option>Mombassa</option>
        <option>Kiambu</option>
        <option>Nakuru</option>
        <option>Malindi</option>
        <option>Eldoret</option>
        <option>Mandera</option>
      </select> 
    </br></br>
       <label for="Max">Maximum Number:</label>
      <select name='max' required>
        <option>5000 inmates</option>
        <option>8000 inmates</option>
        <option>10000 inmates</option>
        <option>15000 inmates</option>
        <option>20000 inmates</option>
      </select> *
    </br></br>
    
    <label for="current">Current Num:</label>
    <select name='current' required>
      <option>2000</option>
      <option>3000</option>
      <option>5000</option>
      <option>10000</option>
      <option>20000</option>
    </select> *
    </br></br>

       <label for="on">Date of Creation:</label>
            <select name="month" required>
        <option selected="selected" value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
        </select>
        <input type="text" name="day" size=4 maxlength=2 required placeholder="DD"/>
        <!-- <input type="text" name="year" size=4 maxlength=4 required placeholder="YYYY"/> -->
        <!--  <label for="on">Date of prblm:</label>-->
            <select name="year" required>
        <option selected="selected" value="01">2014</option>
        <option value="02">2015</option>
        </select>
         </br></br>
         
    <label for="Status">Status:</label>
    <select name='status' required >
      <option>unsolved</option>
    </select> *
    </br></br>

    <input align="center" type="submit" value="Submit" name="submit"/>
    </form>
    </section>
</td>
</tr>
<tr>
  <?php
           include("footer.php");
                ?>
</tr>
</table>
</body>
</html>