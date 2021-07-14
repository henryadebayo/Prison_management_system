<html>
<head>
<title>registration  form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="1" bgcolor="WHITE" align="center" width="54%">
<tr bgcolor="#FF0000">
<td align="center">
<font size="5">
<a href="./adminpanel.php">Home</a> 
</font>
</td>
</tr>
<tr>
<td>

<form action="procereg.php" method="post">
<table bgcolor="white" height="450" border="0" align="center" width="50%">
<tr>
<tr>		
<td width="34%" bgcolor="#FFFFFF"><b>Personal Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid"  size=15 maxlength=15 required placeholder="00001111"/>
<span class="required_notification"> Required</span></td>

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Full Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Fname"  size=20 maxlength=20 required placeholder="JAMES AMULI" />
<span class="required_notification"> Required</span></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Date of Birth:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dob" size=12 maxlength=12 required placeholder="YYYY-MM-DD" />
	<span class="required_notification"> Required</span></td>

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Address:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="address"  size=12 maxlength=12 required placeholder="NGONG" />
<span class="required_notification"> Required</span></td>
</tr>
<tr><td width="34%" bgcolor="#FFFFFF"><b>State:</b></td>
        <td> <select name="county">
		<option>Kano</option>
		<option>Lagos</option>
		<option>Abuja</option>
        <option>Oyo</option>
		<option>Kwara</option>
		<option>Sokoto/option>
		<option>Bauchi</option></td></tr>
		<tr>
 <td><b>Gender</b></td>
        <td><b><input type="radio" name="Gender" value="Male" checked="checked">
        Male <input type="radio" name="Gender" value="Female"></b>
	   <b>Female</b></td>
	      </tr>
		  
 <tr><td bgcolor="#FFFFFF"><b>Education Level:</b></td>
        <td> <select name="education">
		<option>Never</option>
		<option>O level</option>
		<option>Diploma</option>
        <option>Bachelor Degree</option>
		<option>Above</option></td></tr>
		
<tr><td width="44%" bgcolor="#FFFFFF"><b>Marital Status:</b></td>
        <td> <select name="status">
		<option>Divorced</option>
		<option>Married</option>
		<option>Single</option></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Offence:</b></td>
        <td> <select name="offence">
        <option>Murder</option>
		<option>Robbery</option>
		<option>Theft</option>
        <option>Rape</option>
		<option>Other</option></td></tr>
		<tr><td bgcolor="#FFFFFF"><b>Cell-N0:</b> <td bgcolor="#FFFFFF"><input type="text" name="cellno"  size=15 maxlength=15 required placeholder="0000" </td> </td>
		<tr><td bgcolor="#FFFFFF"><b>Health Status:</b><input type="text" name="healthsta"  size=20 maxlength=20 required placeholder="" </tr></td>
<tr><td bgcolor="#FFFFFF"><b>Date in:</b></td></tr>
<td bgcolor="#FFFFFF"><input type="text" name="datein"  size=12 maxlength=12 required placeholder="YYYY-MM-DD"/>
	<span class="required_notification"> Required</span></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>Date out:</b></td></tr>
<td bgcolor="#FFFFFF"><input type="text" name="dateout"  size=12 maxlength=12 required placeholder="YYYY-MM-DD"/>
	<span class="required_notification"> Required</span></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>sentence to:</b></td></tr>
<td bgcolor="#FFFFFF"><input type="text" name="sentenceto"  size=20 maxlength=20 required placeholder="2years imprisonment"/>
	<span class="required_notification"> Required</span></td>
</tr>


<tr>
<td bgcolor="#FFFFFF"><b>File Number:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Filenum"  size=5 maxlength=5 required placeholder="NB-00099" />
	<span class="required_notification"> Required</span></td>
</tr>
<script language="javascript" type="text/javascript">

        var flag =0;
        var quality = 60; //(1 to 100) (recommanded minimum 55)
        var timeout = 10; // seconds (minimum=10(recommanded), maximum=60, unlimited=0 )

//function to initialize the device

        function GetInfo() {
            document.getElementById('tdSerial').innerHTML = "";
            document.getElementById('tdCertification').innerHTML = "";
            document.getElementById('tdMake').innerHTML = "";
            document.getElementById('tdModel').innerHTML = "";
            document.getElementById('tdWidth').innerHTML = "";
            document.getElementById('tdHeight').innerHTML = "";
            document.getElementById('tdLocalMac').innerHTML = "";
            document.getElementById('tdLocalIP').innerHTML = "";
            document.getElementById('tdSystemID').innerHTML = "";
            document.getElementById('tdPublicIP').innerHTML = "";


            var key = document.getElementById('txtKey').value;

            var res;
            if (key.length == 0) {
                res = GetMFS100Info();
            }
            else {
                res = GetMFS100KeyInfo(key);
            }

            if (res.httpStaus) {

                document.getElementById('txtStatus').value = "ErrorCode: " + res.data.ErrorCode + " ErrorDescription: " + res.data.ErrorDescription;

                if (res.data.ErrorCode == "0") {
                    document.getElementById('tdSerial').innerHTML = res.data.DeviceInfo.SerialNo;
                    document.getElementById('tdCertification').innerHTML = res.data.DeviceInfo.Certificate;
                    document.getElementById('tdMake').innerHTML = res.data.DeviceInfo.Make;
                    document.getElementById('tdModel').innerHTML = res.data.DeviceInfo.Model;
                    document.getElementById('tdWidth').innerHTML = res.data.DeviceInfo.Width;
                    document.getElementById('tdHeight').innerHTML = res.data.DeviceInfo.Height;
                    document.getElementById('tdLocalMac').innerHTML = res.data.DeviceInfo.LocalMac;
                    document.getElementById('tdLocalIP').innerHTML = res.data.DeviceInfo.LocalIP;
                    document.getElementById('tdSystemID').innerHTML = res.data.DeviceInfo.SystemID;
                    document.getElementById('tdPublicIP').innerHTML = res.data.DeviceInfo.PublicIP;
                }
            }
            else {
                alert(res.err);
            }
            return false;
        }
//function to capture the finger prints. 

        function Capture() {
            try {
                document.getElementById('txtStatus').value = "";
                document.getElementById('imgFinger').src = "data:image/bmp;base64,";
                document.getElementById('txtImageInfo').value = "";
                document.getElementById('txtIsoTemplate').value = "";
                document.getElementById('txtAnsiTemplate').value = "";
                document.getElementById('txtIsoImage').value = "";
                document.getElementById('txtRawData').value = "";
                document.getElementById('txtWsqData').value = "";

                var res = CaptureFinger(quality, timeout);
                if (res.httpStaus) {
                      flag = 1;
                    document.getElementById('txtStatus').value = "ErrorCode: " + res.data.ErrorCode + " ErrorDescription: " + res.data.ErrorDescription;

                    if (res.data.ErrorCode == "0") {
                        document.getElementById('imgFinger').src = "data:image/bmp;base64," + res.data.BitmapData;
                        var imageinfo = "Quality: " + res.data.Quality + " Nfiq: " + res.data.Nfiq + " W(in): " + res.data.InWidth + " H(in): " + res.data.InHeight + " area(in): " + res.data.InArea + " Resolution: " + res.data.Resolution + " GrayScale: " + res.data.GrayScale + " Bpp: " + res.data.Bpp + " WSQCompressRatio: " + res.data.WSQCompressRatio + " WSQInfo: " + res.data.WSQInfo;
                        document.getElementById('txtImageInfo').value = imageinfo;
                        document.getElementById('txtIsoTemplate').value = res.data.IsoTemplate;
                        document.getElementById('txtAnsiTemplate').value = res.data.AnsiTemplate;
                        document.getElementById('txtIsoImage').value = res.data.IsoImage;
                        document.getElementById('txtRawData').value = res.data.RawData;
                        document.getElementById('txtWsqData').value = res.data.WsqImage;
                    }
                }
                else {
                    alert(res.err);
                }
            }
            catch (e) {
                alert(e);
            }
            return false;
        }

        function Verify() {
            try {
                var isotemplate = document.getElementById('txtIsoTemplate').value;
                var res = VerifyFinger(isotemplate, isotemplate);

                if (res.httpStaus) {
                    if (res.data.Status) {
                        alert("Finger matched");
                    }
                    else {
                        if (res.data.ErrorCode != "0") {
                            alert(res.data.ErrorDescription);
                        }
                        else {
                            alert("Finger not matched");
                        }
                    }
                }
                else {
                    alert(res.err);
                }
            }
            catch (e) {
                alert(e);
            }
            return false;

        }

        function Match() {
            try {
                var isotemplate = document.getElementById('txtIsoTemplate').value;
                var res = MatchFinger(quality, timeout, isotemplate);

                if (res.httpStaus) {
                    if (res.data.Status) {
                        alert("Finger matched");
                    }
                    else {
                        if (res.data.ErrorCode != "0") {
                            alert(res.data.ErrorDescription);
                        }
                        else {
                            alert("Finger not matched");
                        }
                    }
                }
                else {
                    alert(res.err);
                }
            }
            catch (e) {
                alert(e);
            }
            return false;

        }

        function GetPid() {
            try {
                var isoTemplateFMR = document.getElementById('txtIsoTemplate').value;
                var isoImageFIR = document.getElementById('txtIsoImage').value;

                var Biometrics = Array(); // You can add here multiple FMR value
                Biometrics["0"] = new Biometric("FMR", isoTemplateFMR, "UNKNOWN", "", "");

                var res = GetPidData(Biometrics);
                if (res.httpStaus) {
                    if (res.data.ErrorCode != "0") {
                        alert(res.data.ErrorDescription);
                    }
                    else {
                        document.getElementById('txtPid').value = res.data.PidData.Pid
                        document.getElementById('txtSessionKey').value = res.data.PidData.Sessionkey
                        document.getElementById('txtHmac').value = res.data.PidData.Hmac
                        document.getElementById('txtCi').value = res.data.PidData.Ci
                        document.getElementById('txtPidTs').value = res.data.PidData.PidTs
                    }
                }
                else {
                    alert(res.err);
                }

            }
            catch (e) {
                alert(e);
            }
            return false;
        }
        function GetProtoPid() {
            try {
                var isoTemplateFMR = document.getElementById('txtIsoTemplate').value;
                var isoImageFIR = document.getElementById('txtIsoImage').value;

                var Biometrics = Array(); // You can add here multiple FMR value
                Biometrics["0"] = new Biometric("FMR", isoTemplateFMR, "UNKNOWN", "", "");

                var res = GetProtoPidData(Biometrics);
                if (res.httpStaus) {
                    if (res.data.ErrorCode != "0") {
                        alert(res.data.ErrorDescription);
                    }
                    else {
                        document.getElementById('txtPid').value = res.data.PidData.Pid
                        document.getElementById('txtSessionKey').value = res.data.PidData.Sessionkey
                        document.getElementById('txtHmac').value = res.data.PidData.Hmac
                        document.getElementById('txtCi').value = res.data.PidData.Ci
                        document.getElementById('txtPidTs').value = res.data.PidData.PidTs
                    }
                }
                else {
                    alert(res.err);
                }

            }
            catch (e) {
                alert(e);
            }
            return false;
        }
        function GetRbd() {
            try {
                var isoTemplateFMR = document.getElementById('txtIsoTemplate').value;
                var isoImageFIR = document.getElementById('txtIsoImage').value;

                var Biometrics = Array();
                Biometrics["0"] = new Biometric("FMR", isoTemplateFMR, "LEFT_INDEX", 2, 1);
                Biometrics["1"] = new Biometric("FMR", isoTemplateFMR, "LEFT_MIDDLE", 2, 1);
                // Here you can pass upto 10 different-different biometric object.


                var res = GetRbdData(Biometrics);
                if (res.httpStaus) {
                    if (res.data.ErrorCode != "0") {
                        alert(res.data.ErrorDescription);
                    }
                    else {
                        document.getElementById('txtPid').value = res.data.RbdData.Rbd
                        document.getElementById('txtSessionKey').value = res.data.RbdData.Sessionkey
                        document.getElementById('txtHmac').value = res.data.RbdData.Hmac
                        document.getElementById('txtCi').value = res.data.RbdData.Ci
                        document.getElementById('txtPidTs').value = res.data.RbdData.RbdTs
                    }
                }
                else {
                    alert(res.err);
                }

            }
            catch (e) {
                alert(e);
            }
            return false;
        }

        function GetProtoRbd() {
            try {
                var isoTemplateFMR = document.getElementById('txtIsoTemplate').value;
                var isoImageFIR = document.getElementById('txtIsoImage').value;

                var Biometrics = Array();
                Biometrics["0"] = new Biometric("FMR", isoTemplateFMR, "LEFT_INDEX", 2, 1);
                Biometrics["1"] = new Biometric("FMR", isoTemplateFMR, "LEFT_MIDDLE", 2, 1);
                // Here you can pass upto 10 different-different biometric object.


                var res = GetProtoRbdData(Biometrics);
                if (res.httpStaus) {
                    if (res.data.ErrorCode != "0") {
                        alert(res.data.ErrorDescription);
                    }
                    else {
                        document.getElementById('txtPid').value = res.data.RbdData.Rbd
                        document.getElementById('txtSessionKey').value = res.data.RbdData.Sessionkey
                        document.getElementById('txtHmac').value = res.data.RbdData.Hmac
                        document.getElementById('txtCi').value = res.data.RbdData.Ci
                        document.getElementById('txtPidTs').value = res.data.RbdData.RbdTs
                    }
                }
                else {
                    alert(res.err);
                }

            }
            catch (e) {
                alert(e);
            }
            return false;
        }
       
        function validateform()
        {

        var password1=document.myform.exampleInputPassword1;
        var email=document.myform.exampleInputEmail1.value;
        
        if(email.length>20)
        {
            alert("username can be max 25 char");
            return false;
        }

        if (password1.length>8) 
        {
          alert("password should be max 8 char");
          return false;
        }

        // password matching
        if (password1==password2) 
        {
          return true;
        }
        else
         {
            alert("password not matched");
            return false;
         } 

        }

    </script>
</head>

<body class="mainbody">

    <div class="header">

    <img class="left" src="../favicons/apple-icon-60x60.png" height="40" width="40">
    </div>

    <div class="register_panel">
        <div class="panel panel-primary">
        <div class="panel-heading font"> </div>
        <div class="panel-body margin">
                <form method = "post" action="#" name="myform">
            
            

                    <table width="100%" style="padding-top:0px;">
                        <tr>
                            <td width="200px;">
                                <table align="left" border="0" width="100%">
                                    <tr>
                                        <td>
                                            <input type="submit" id="btnCapture" value="Capture" class=" capturebuttonpadding btn btn-primary btn-lg submit_buttom_padding" onclick="return Capture()" />
                                        </td>
                                    </tr>
                                     </td>
                            <td width="150px" height="190px" align="center" class="img">
                                <img id="imgFinger" width="145px" height="188px" Falt="Finger Image" class="padd_top" />
                            </td>
                            <td>
                                <table align="left" border="0" style="width:100%; padding-right:20px;">
                    

   <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr>   <?php
           include("footer.php");
                ?>
          </tr>
</tr>
</table>
</body>

</html>