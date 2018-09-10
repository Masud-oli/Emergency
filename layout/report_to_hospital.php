<title><?php if(isset($_SESSION['bn'])){echo $reportHospitalTitle2;}else{echo $reportHospitalTitle;}?></title>
<?php
if (isset($_SESSION['sucess'])) {?>
<script>

		alertify.success("<span class='glyphicon glyphicon-ok'></span> Congratulations, Your report have been accepted.");

</script>
<?php
unset($_SESSION['sucess']);
}


if (isset($_SESSION['fail'])) {?>
<script>
	
		alertify.error("<span class='glyphicon glyphicon-remove'></span> Fail to insert.");
</script>
<?php
unset($_SESSION['fail']);
}
if (isset($_SESSION['unkown'])) {?>
<script>
	
		alertify.error("<span class='glyphicon glyphicon-remove'></span>Unkonw problem occurs.");
</script>
<?php
unset($_SESSION['unkown']);
}
if (isset($_SESSION['exist'])) {?>
<script>
	
		alertify.error("<span class='glyphicon glyphicon-remove'></span>Your selected photo already exist. If you want upload please rename the photo");
</script>
<?php
unset($_SESSION['exist']);
}
?>
<?php
$localIP = getHostByName(php_uname('n'));
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() { 

    global $user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}

function getBrowser() {

    global $user_agent;

    $browser        =   "Unknown Browser";

    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/edge/i'       =>  'Edge',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );

    foreach ($browser_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }

    }

    return $browser;

}

$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$$localIP));
if($query) {
   $contryName=$query['country'];
} else {
 $contryName="Bangladesh";
}

$user_os        =   getOS();
$user_browser   =   getBrowser();
$UserInfo="IP Address: ".$localIP.", Operating System Name: ".$user_os.", Browser Name: ".$user_browser.", Country Name: ".$contryName;

?>
<br />

<div class="container">
        <div class="col-md-4 left-part">
        
        </div>
        <div class="col-md-4 left-part">
		<div class="panel panel-primary">
      				<div class="panel-heading" style="text-align:center; font-size:24px"><?php if(isset($_SESSION['bn'])){echo $QuickContacttoHospital2;}else{echo $QuickContacttoHospital;}?></div>
      				<div class="panel-body">
                    <form id="form3" name="f" method="post" action="report_insert/insert_hospital_info_reporter.php" onSubmit="return validateForm_rab();"  enctype="multipart/form-data">
                    	
                        <legend><?php if(isset($_SESSION['bn'])){echo $selectPhoto2;}else{echo $selectPhoto;}?></legend>                           
                        	 <input type="file" class="file-input"  name="file"  data-show-upload="false" data-show-caption="true">
                     	
                        <legend><?php if(isset($_SESSION['bn'])){echo $actionType2;}else{echo $actionType;}?><span style="color:red">*</span></legend>
                            <div class="form-group">
                               <select class="form-control" autofocus=""  id="action_title" name="action_title">
                                <option value="" selected hidden><?php if(isset($_SESSION['bn'])){echo $selectAction2;}else{echo $selectAction;}?></option>
                               	<?php
									include('db_con.php');
									 $resource=mysql_query("SELECT *FROM crime_type GROUP BY action_title");
										if(mysql_num_rows($resource)>0)
										{
											while($result=mysql_fetch_row($resource))
											{   
												?>
												<option class="form-control" value="<?php echo $result[1] ?>"><?php echo $result[1] ?></option>
												<?php
											}   
										   
										}
										?>
                                </select>
                                  </div>
                                  
                     	<legend><?php if(isset($_SESSION['bn'])){echo $selectDivisionName2;}else{echo $selectDivisionName;}?><span style="color:red">*</span></legend>
                            <div class="form-group">
                                <select class="form-control" id="divisionName" name="divisionName" onchange="callCourses4()">
                                <option value="" selected hidden><?php if(isset($_SESSION['bn'])){echo $selectDivision2;}else{echo $selectDivision;}?></option>
                               	<?php
										include('db_con.php');
						
										$resource=mysql_query("SELECT *FROM rab_info_table GROUP BY divisionName");
						
										if(mysql_num_rows($resource)>0)
										{
											while($result=mysql_fetch_row($resource))
											{   
												?>
												<option class="form-control" value="<?php echo $result[1] ?>"><?php echo $result[1] ?></option>
												<?php
											}   
										   
										}
										?>

                                </select>
                                  </div>
                                   <legend><?php if(isset($_SESSION['bn'])){echo $selectDistrictName2;}else{echo $selectDistrictName;}?><span style="color:red">*</span></legend>        
                                 <div class="form-group">
                                 <select class="form-control" name="districtName" id="districtName"  onChange="callUpazilla4()">
								 <option class="form-control" value="select" selected hidden><?php if(isset($_SESSION['bn'])){echo $selectDistrict2;}else{echo $selectDistrict;}?></option>						
								</select>
                                </div>
                                <legend><?php if(isset($_SESSION['bn'])){echo $selectUpazillaName2;}else{echo $selectUpazillaName;}?><span style="color:red">*</span></legend>        
                                 <div class="form-group">
                                 <select class="form-control"  name="upazillaName" id="upazillaName" onChange="callhospital4()">
								 <option class="form-control" value="select" selected hidden><?php if(isset($_SESSION['bn'])){echo $selectupazilla2;}else{echo $selectupazilla;}?></option>						
								</select>
                                </div>
                                 <legend><?php if(isset($_SESSION['bn'])){echo $selectHospitalName2;}else{echo $selectHospitalName;}?><span style="color:red">*</span></legend>        
                                 <div class="form-group">
                                 <select class="form-control" name="hospitalName" id="hospitalName" >
								 <option class="form-control" value="select" selected hidden><?php if(isset($_SESSION['bn'])){echo $selectHospital2;}else{echo $selectHospital;}?></option>						
								</select>
                                </div>
                            <legend><?php if(isset($_SESSION['bn'])){echo $placeName2;}else{echo $placeName;}?><span style="color:red">*</span></legend>                            
                             <div class="form-group">
                                <input type="text" class="form-control" value="" placeholder="<?php if(isset($_SESSION['bn'])){echo $placeNameExample2;}else{echo $placeNameExample;}?>" name="placeName" />
                              </div>
                          <legend><?php if(isset($_SESSION['bn'])){echo $reporterMobileNo2;}else{echo $reporterMobileNo;}?><span style="color:red">*</span></legend>                            
                             <div class="form-group">
                                <input type="text" class="form-control" onkeyup="validateInput_mobileNo2();" value="+8801" maxlength="14" name="mobileNo" />
                              </div>
                              <input type="hidden" class="form-control" value="<?php echo $UserInfo ?>" name="UserInfo" />
                             <legend><?php if(isset($_SESSION['bn'])){echo $reportDiscription2;}else{echo $reportDiscription;}?><span style="color:red">*</span></legend>                            
                                 <script type="text/javascript" language="JavaScript1.2">
                                 document.write('<?php if(isset($_SESSION['bn'])){echo $characterTyped2;}else{echo $characterTyped;}?> <input '+
                                  'type="text"  size="3" name="counter" value=""'+
                                  'readonly onfocus="this.form.reportDescription.focus()"> (<?php if(isset($_SESSION['bn'])){echo $limits2;}else{echo $limits;}?>)');
                               </script>
                                                            <div class="form-group">           
                                                            <textarea class="form-control" rows="4" maxlength="100" cols="10" name="reportDescription"
                                 onkeyup="update();"></textarea><br>

 
                                    </div>  
                                  <button type="submit" name="save" class="btn btn-primary pull-right btn-sm confirm"><?php if(isset($_SESSION['bn'])){echo $submit2;}else{echo $submit;}?></button>
                      </form> 
                    
                    
                    </div>
    			</div>
            </div>
            
           <div class="col-md-4 left-part">
        
        </div>
		</div>