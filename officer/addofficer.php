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
	<form id="frmReg" method="POST" action="validateofficer.php">
       <h2 id="hdr_title">Warder Registration Form  </h2>
            <div class="control_input">
            <label for="id" class="label">Personal Id</label><input type="text" id="id" name="id" size=14  maxlength=14 
                class="reg_fields" required placeholder="12345678"  />
            </div>
            <div class="control_input">
                <label for="fullname" class="label">Full Name</label><input type="text" id="fullname" name="fullname" class="reg_fields" required placeholder="John otieno"/>
            </div>
            <div class="control_input">
                <label for="address" class="label">Address</label><input type="text" id="address" name="address" class="reg_fields" required placeholder="langata"/>
            </div>
           
             
            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="dateofbirth" class="label">Date of birth</label>
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
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="gender" class="label">Gender</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="gender" name="gender" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                           <option>Male</option>
                           <option>Female</option>       
                        </select>
                    </td>
                </table>
                </div class="control_input">

            <div class="control_input">
                <label for="uemail" class="label">Telephone No.</label><input type="text" id="telephone" name="telephone"  size=11  maxlength=11 
                class="reg_fields" required placeholder="074565558" class="reg_fields"/>
            </div class="control_input">

        

            <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="campus" class="label">Education Background</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="education" name="education" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option>O level</option>
                           <option>Certificate</option>
                           <option>Diploma</option>
                           <option>Bsc/B.A</option>
                           <option>PDG</option>
                           <option>Master</option>
                          <option>PHD</option>
                        </select>
                    </td>
                </table>
                </div class="control_input">

                <div class="control_input">
            <label for="id" class="label">Rank</label><input type="text" id="" name="" size=30  maxlength=30 
                class="reg_fields" required placeholder="Input Rank"  />
            </div>
            <div class="control_input">
            <label for="id" class="label">Duties</label><input type="text" id="" name="" size=30 maxlength=30 
                class="reg_fields" required placeholder="12345678"  />
            </div>
                 <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="campus" class="label">Years of experience</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="exp" name="exp" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option>1-6 months</option>
                           <option>1-2years</option>
                           <option>3-4years</option>
                           <option>5-7yrs</option>
                           <option>7-above</option>
                        </select>
                    </td>
                </table>
                </div class="control_input">
                 
           

            <div class="control_input">
                <input type="submit" name="signup" id="signup" value="Submit" title="" border="0">
             </div class="control_input">
            
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