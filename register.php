<?php
$page = "register";
require_once 'header.php';
?>

<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Synapse Registration Form</h3>
        </div>
        <div class="panel-body">
          <form action="includes/insertdata.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control" placeholder="JOHN DOE" name="name" required>
            </div>

            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" placeholder="abcde@email.com" name="email" required>
            </div>

            <div class="form-group">
              <label>Contact Number:</label>
              <input type="text" class="form-control" placeholder="984XXXXXXX" name="contact" required>
            </div>

            <div class="form-group">
              <label>College Name:</label>
              <input type="text" class="form-control" placeholder="COLLEGE NAME" name="college" required>
            </div>

            <div class="form-group">
              <label>Faculty:</label>
              <input type="text" class="form-control" placeholder="MBBS, BDS, NURSING, etc." name="faculty" required>
            </div>

            <div class="form-group">
              <label>Batch:</label>
              <select class="form-control" name="batch">
                <option value="">Select Batch</option>
                <option value="First Year">First Year</option>
                <option value="Second Year">Second Year</option>
                <option value="Third Year">Third Year</option>
                <option value="Fourth Year">Fourth Year</option>
                <option value="Final Year">Final Year</option>
              </select>
            </div>

            <div class="form-group">
              <label>Participate in:</label><br>
              <?php
              $events = [
                "Football",
                "Cricket",
                "Basketball",
                "Volleyball",
                "Table Tennis",
                "Badminton",
                "Futsal / Cricsal",
                "Chess",
                "Computer Gaming",
                "Literary Events",
                "Cultural Events"
              ];
              foreach ($events as $event) {
                echo '<label class="checkbox-inline"><input type="checkbox" name="event[]" value="' . $event . '"> ' . $event . '</label> ';
              }
              ?>
            </div>

            <div class="form-group">
              <label>Photo:</label>
              <input type="file" name="photo">
            </div>

            <div class="form-group">
              <label>Voucher Photo:</label>
              <input type="file" name="vphoto">
            </div>

            <button type="submit" name="register" class="btn btn-primary btn-block">Register Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once 'footer.php'; ?>