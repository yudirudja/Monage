<?php
$con=mysqli_connect("localhost","root","","projectAkhir");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM moneyManager");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['income'] . "</td>";
echo "<td>" . $row['outcome'] . "</td>";
echo "<td>" . $row['totalMoney'] . "</td>";
echo "<td>" . $row['catatan'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>