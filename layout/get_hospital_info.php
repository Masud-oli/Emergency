<?php
session_start();
include('db_con.php');
include('banglaEnglish.php');
$q=$_GET["q"];
$sql="SELECT * FROM hospital_info_table WHERE districtName = '".$q."' order by hospital_title asc";

$result = mysql_query($sql);
?>

<div class="table-responsive">
 <?php
echo "<table class='table table-bordered table-hover'>
<tr>" ?>
<th style="color:#444; font-size:20px"><?php if(isset($_SESSION['bn'])){echo $selectUpazillaName2;}else{echo $selectUpazillaName;}?></th>
<th style="color:#444; font-size:20px"><?php if(isset($_SESSION['bn'])){echo $hospitalStationName2;}else{echo $hospitalStationName;}?></th>
<th style="color:#444; font-size:20px"><?php if(isset($_SESSION['bn'])){echo $mobileNumbers2;}else{echo $mobileNumbers;}?></th>
</tr>
<?php


while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td style='color:#003;font-size:15px'>" . $row['upazillaName'] . "</td>";
  echo "<td style='color:#003;font-size:15px'>" . $row['hospital_title'] . "</td>";
  echo "<td style='color:#003;font-size:15px'>" . $row['mobileNo'] . "</td>";
  echo "</tr>";
  }

echo "</table>";
?>
</div>
<?php
mysql_close();
?>
