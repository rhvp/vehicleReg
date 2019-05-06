<?php


if (isset($_SESSION['id'])) {
	$user_id = $_SESSION['id'];
	$conn = mysqli_connect("localhost", "root", "", "cars");
	$query = "SELECT * FROM car WHERE user_id = '$user_id'";
	$get_cars = mysqli_query($conn, $query);



?>
<style type="text/css">
    table{
        width:80%;
        margin:auto;
        
    }
    
    
    tr td{
        padding:0.3em;
        font-size: 1em;
        color:black;
        font-family: arial;
    }
   .tablehead td{
        padding:0.3em;
        font-size: 1em;
        background:black !important;
        color:white !important;
        font-family: arial;
    }
</style>
<table>
	<thead class="tablehead">
	<td>No</td>
	<td>Vehicle Brand</td>
	<td>Vehicle Model</td>
	<td>Vehicle Year</td>
	<td>Vehicle No </td>
	<td>Vehicle Chasis No</td>
	</thead>

<?php 
echo "<br/>";
$counter = 1;
while($this_car = mysqli_fetch_assoc($get_cars)) {
	$car_brand = $this_car['brand'];
	$car_year = $this_car['year'];
	$car_number = $this_car['car_no'];
	$car_model = $this_car['model'];
	$car_chasis = $this_car['chasis_no'];

	echo "<tr>
		<td>".$counter."</td>
		<td>".$car_brand."</td>
		<td>".$car_model."</td>
		<td>".$car_year."</td>
		<td>".$car_number."</td>
		<td>".$car_chasis."</td>
	</tr>";
	$counter++;
	
}

}

?>
</table>