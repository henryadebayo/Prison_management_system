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
           <a href="userpanel.php">HOME</a>  |
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">
       
<div id="content" class="ctrdiv">
	<form id="frmReg" method="POST" action="prisonerval.php">
       <h2 id="hdr_title">Register Prisoner </h2>
            <div class="control_input">
            <label for="Nid" class="label">National Id</label><input type="text" id="Nid" name="Nid" size=8  maxlength=8 class="reg_fields" required placeholder="00001111"  />
            </div>
            <div class="control_input">
                <label for="Fname" class="label">Full Name</label><input type="text" id="Fname" name="Fname" class="reg_fields" required placeholder="Otienno jin"/>
            </div>

            <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="date" class="label">Birth Date</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="lMonth" name="1Month" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
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
                <table><tr>
                    <td>
                        <label for="datein" class="label">Date In</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="lMonth" name="2Month" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
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
                        <input type="text" id="TxtDay" name="TxtDay" style="width: 40px;" value="DD" class="reg_fields"/>
                        <input type="text" id="TxtYear" name="TxtYear" style="width: 60px;" value="YYYY" class="reg_fields"/>
                    </td>
                    </tr></table>
                </div>
            </div>

             <div class="control_input">               
                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Date Out</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="lMonth" name="3Month" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
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
                        <input type="text" id="TXtDay" name="TXtDay" style="width: 40px;" value="DD" class="reg_fields"/>
                        <input type="text" id="TXtYear" name="TXtYear" style="width: 60px;" value="YYYY" class="reg_fields"/>
                    </td>
                    </tr></table>
                </div>
            </div>

            <div class="control_input">
                <label for="address" class="label">Address</label><input type="text" id="address" name="address" class="reg_fields" required placeholder="Rongai"/>
            </div>
            
             <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="county" class="label">County</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="county" name="county" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option selected="selected" value="01">Lamu</option>
                            <option value="02">Nairobi</option>
                             <option value="03">Nakuru</option>
                            <option value="04">Mombassa</option>
                           <option value="04">Machakos</option>
                           <option value="06">Malindi</option>
                           <option value="07">Mandera</option>
                           <option value="08">Meru</option>></td></tr>
                        </select>
                    </td>
                    </tr></table>
                </div></br>

            <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Gender</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="Gender" name="Gender" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option selected="selected" value="01">Male</option>
                            <option value="02">Female</option>
                        </select>
                    </td>
                    </tr></table>
                </div></br>

                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Education Level</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="education" name="education" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option selected="selected" value="01">KECP</option>
                            <option value="02">Never</option>
                            <option value="03">O level</option>
                            <option value="04">Certificate</option>
                            <option value="05">Diploma</option>
                            <option value="06">Bachelor Degree</option>
                            <option value="07">PGD</option>
                            <option value="08">Above</option></td></tr>
                        </select>
                    </td>
                    </tr></table>
                </div></br>

                <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="status" class="label">Maritial Status</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="status" name="status" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option selected="selected" value="01">Fiancee</option>
                            <option value="02">Divorced</option>
                            <option value="03">Married</option>
                            <option value="04">Single</option>
                            <option value="05">In Relationship</option></td></tr>
                        </select>
                    </td>
                    </tr></table>
                </div></br>
             
                 
              



                <div class="control_input">
                <label for="Pname" class="label">Offence</label>
                <textarea cols="17" rows="4" name="offence" required placeholder="fill this box"></textarea>
                </div>

                 <div style="display: inline-block;">
                <table><tr>
                    <td>
                        <label for="opendate" class="label">Sentence</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                        <select id="sentence" name="sentence" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                            <option selected="selected" value="01">3 months</option>
                            <option value="02">6 months</option>
                            <option value="03">1 year</option>
                            <option value="04">2 years</option>
                            <option value="05">3 year</option>
                            <option value="06">5 year</option>
                            <option value="07">7 year</option>
                            <option value="08">10 year</option></td></tr>
                        </select>
                    </td>
                    </tr></table>
                </div></br>


            <div class="control_input">
                <label for="Filenum" class="label">File Number</label><input type="text" id="Filenum" name="Filenum"  size=8  maxlength=8 class="reg_fields" required placeholder="xxx"/>
            </div>
             
             <div class="control_input">
                <div style="display: inline-block;">
                <table>
                     <td>
                        <label for="Campus" class="label">Prison</label>
                    </td>
                    <td style="margin: 0; padding: 0;">
                    <select id="prison" name="prison" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px; padding: display:block;">
                     <option value="">--Select prison--</option>
                   <?php
                   $con = mysqli_connect('localhost', 'root', '', 'prisonpro');
                   mysqli_select_db($con, 'prisonpro');
                   $my_sql = "SELECT * FROM transfer";
                   $query = mysqli_query($con, $my_sql);
                //    $msql = mysql_query($con, "SELECT * FROM transfer");

                    while($m_row = mysqli_fetch_array($query))        
                    echo("<option value = '" . $m_row['From_prison'] . "'>" . $m_row['From_prison'] . "</option>");
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