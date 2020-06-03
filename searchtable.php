<?php 

echo "<table>
<tr>
<th align=center><b>Flight_id</b></th>
<th align=center><b>Source</b></th>
<th align=center><b>Destination</b></th>
<th align=center><b>Depart_date</b></th>
<th align=center><b>Arrival_date</b></th>
<th align=center><b>Depart_time</b></th>
<th align=center><b>Arrival_time</b></th>
<th align=center><b>Seats_economy</b></th>
<th align=center><b>Seats_business</b></th>
<th align=center><b>Price_economy</b></th>
<th align=center><b>Price_bussiness</b></th>
<th align=center><b>Book</b></th></tr>";

while($row=mysqli_fetch_assoc($result)){
						echo "<tr>";
						echo "<td align=center>".$row['flight_id']."</td>";
						echo "<td align=center>".$row['source']."</td>";
						echo "<td align=center>".$row['destination']."</td>";
						echo "<td align=center>".$row['depart_date']."</td>";
						echo "<td align=center>".$row['arrival_date']."</td>";
						echo "<td align=center>".$row['departure_time']."</td>";
						echo "<td align=center>".$row['arrival_time']."</td>";
						echo "<td align=center>".$se=$row['seats_economy']."</td>";
						echo "<td align=center>".$row['seats_bussiness']."</td>";
						echo "<td align=center>".$row['price_economy']."</td>";
						echo "<td align=center>".$row['price_business']."</td>
					    <td><a href='bookingdetails.php?seats_economy=".$row['seats_economy']."&seats_bussiness=".$row['seats_bussiness']."&price_economy=".$row['price_economy']."&price_business=".$row['price_business']."&flight_id=".$row['flight_id']."&journey_date=".$row['depart_date']."&source=".$row['source']."&destination=".$row['destination']."'>Book now</a></td>
						</tr>";

					}
					echo "</table>";
					mysqli_close($con); 
?>

