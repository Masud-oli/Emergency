<?php
session_start();
include('db_con.php');
include('banglaEnglish.php');
$q=$_GET["q"];
$sql="SELECT * FROM fire_service_info_table WHERE districtName = '".$q."' order by fire_station_title asc";

$result = mysql_query($sql);
?>

<div class="table-responsive">
 <?php
echo "<table class='table table-bordered table-hover'>
<tr>" ?>
<th style="color:#444; font-size:20px"><?php if(isset($_SESSION['bn'])){echo $selectUpazillaName2;}else{echo $selectUpazillaName;}?></th>
<th style="color:#444; font-size:20px"><?php if(isset($_SESSION['bn'])){echo $fireServiceStationName2;}else{echo $fireServiceStationName;}?></th>
<th style="color:#444; font-size:20px"><?php if(isset($_SESSION['bn'])){echo $mobileNumbers2;}else{echo $mobileNumbers;}?></th>
</tr>
<?php
;

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td style='color:#003;font-size:15px'>" . $row['upazillaName'] . "</td>";
  echo "<td style='color:#003;font-size:15px'>" . $row['fire_station_title'] . "</td>";
  echo "<td style='color:#003;font-size:15px'>" . $row['mobileNo'] . "</td>";
  echo "</tr>";
  }

echo "</table>";
?>
</div>
<?php
mysql_close();
?>
