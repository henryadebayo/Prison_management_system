<html>
<head>
   <head>
  
    <link href="style1.css" rel="stylesheet" type="text/css"/>
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
	  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body> 

	<table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
          <tr>
            <td colspan="2" height="2"><img src="../banner.gif" width="860"></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
	     	   <font size="4">   
           <a href="officerpanel.php">HOME</a>  |
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">
       
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST" action="validatenewprison.php">
       <h2 id="hdr_title">Add New Prison  </h2>
            <div class="control_input">
            <label for="Pno" class="label">Prison No</label><input type="text" id="pno" name="pno" size=5  maxlength=5 
                class="reg_fields" required placeholder="-XXXX/XX"  />
            </div>
            <div class="control_input">
                <label for="Pname" class="label">Prison Name</label><input type="text" id="pname" name="pname" class="reg_fields" required placeholder="xxx"/>
            </div>
             
            <div class="control_input">
                <label for="location" class="label">Location</label><input type="text" id="location" name="location" class="reg_fields" required placeholder="Mombasa"/>
            </div>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Open Date</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="lMonth" name="lMonth" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
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
                    </td>
                    <td>
                        <input type="text" id="txtDay" name="txtDay" style="width: 40px;" value="DD" class="reg_fields"/>
                        <input type="text" id="txtYear" name="txtYear" style="width: 60px;" value="YYYY" class="reg_fields"/>
                    </td>
                    </tr></table>
                </div>
            </div>
            <div class="control_input">
                <label for="contact" class="label">Contact No.</label><input type="text" id="contact" name="contact"  size=11  maxlength=11 
                class="reg_fields" required placeholder="074565558" class="reg_fields"/>
            </div class="control_input">

            

                <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="Campus" class="label">Capacity</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                    <select id="capacity" name="capacity" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                     <option value="">--Select capacity--</option>
                   <?php
                   $con = mysqli_connect('localhost', 'root', '', 'prisonpro');
                   mysqli_select_db($con, 'prisonpro');
                   $msql = mysqli_query($con, "SELECT * FROM capacity");
                    while($m_row = mysqli_fetch_array($msql))        
                    echo("<option value = '" . $m_row['number'] . "'>" . $m_row['number'] . "</option>");
                    ?>
                     </select></td>
                 </table>
                  </div class="control_input">

            <div class="control_input">
                <input type="submit" name="signup" id="Add" value="Add " title="" border="0">
            </div>
            
            <div id="validation_msg">
            </div>
    </form>
</td>
</tr>
<tr>
  <?php
           include("Footer.php");
                ?>
</tr>
</table>
</body>
</html>