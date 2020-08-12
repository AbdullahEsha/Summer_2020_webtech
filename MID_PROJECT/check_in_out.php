<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
 <tr >
    <td colspan="2" ><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="manager_page.php"><?=$_COOKIE['userName']?></a>|
        <a href="logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr >
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
	<td width="80%%">
    <fieldset>
      <legend>CHECK IN/OUT</legend>
    	<form>
    		<table border="0" cellspacing="0" cellpadding="5" width="100%" align="center">
           <tr>
             <td width="30%" align="center">Name</td>
             <td><input type="text" name="itemName" size="90%%"></td>
           </tr>
           <tr>
             <td align="center">NID</td>
             <td><input type="text" name="quantity" size="90%%"></td>
           </tr>
           <tr>
             <td align="center">Check-IN Time</td>
             <td><input type="text" name="time" size="90%%"></td>
           </tr>
           <tr>
             <td align="center">Check-OUT Time</td>
             <td><input type="text" name="time" size="90%%"></td>
           </tr>
           <tr>
           <td colspan="2"><hr></td>
           </tr>
           <tr>
             <td colspan="2" align="right">
               <input type="submit" name="submit" value="Checked IN">
             </td>
           </tr>
           <tr>
           <td colspan="2"><hr></td>
           </tr>
           <tr>
           <td colspan="2"><hr></td>
           </tr>
            <tr>
             <td colspan="2" align="right">
              <input type="text" name="search" placeholder="search" size="80">
               <input type="button" name="search" value="search" >
               <br>
               <br>
               <input type="submit" name="submit"  value="Checked OUT">
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