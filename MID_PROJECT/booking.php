<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
  <tr >
    <td colspan="2"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="chef_page.php"><?=$_COOKIE['userName']?></a>|
        <a href="logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr>
  	<td>
		<ul>
			<p><a href="check_in_out.php"> Check IN/OUT </a></p>
      <p><a href="booking.php"> Bookings </a></p>
      <p><a href="order.php"> Order </a></p>
      <p><a href="chef_order.php"> Order For Chef </a></p>
      <p><a href="staff_order.php"> Order For Staff </a></p>
      <p><a href="cashier.php"> Invoice Management </a></p>
      <p><a href="parking.php"> Parking </a></p>
      <p><a href="car_reservation.php"> Car Reservation </a></p>
      <p><a href="review_complain.php"> Complains From Customer </a></p>
      <p><a href="extend_booking.php"> Extend Booking </a></p>
      <p><a href="feedback.php"> Feedback From Customer </a></p>
      <p><a href="salary.php"> My Salary </a></p>
      <p><a href="activity.php"> Activity Management </a></p>
		</ul>
	</td>
	<td width="80%">
    <fieldset>
      <legend>BOOKING</legend>
    	<form>
    		<table border="1" cellspacing="0" cellpadding="8" width="100%" align="center">
           <tr>
             <td >Arrival Time</td>
             <td>Departure Time</td>
             <td>Pakage</td>
           </tr>
           <?//php  while($data = mysqli_fetch_assoc($result)){ ?>
           <tr>
             <td><?//php echo $data['itemName'] ?></td>
             <td><?//php echo $data['picture'] ?></td>
             <td><?//php echo $data['detail'] ?></td>
             <!--<td><?//php echo $data['detail'] ?></td>
             <td><?//php echo $data['detail'] ?></td>-->
           </tr>

           <?//php } ?>
           <tr>
             <td colspan="3" align="right">
               <input type="button" name="button" value="Confirm">
             </td>
           </tr>
        </table> 

    	</form>
    </fieldset>

	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>