<?php include "contact.php"; ?>
<?php include "navigator.php"; ?>
<?php include "header_login.php"; ?>
  <?=$thankYou ?>
  <h2> Feedback for Asian Aroma </h2>

  <div class="feedback">
    <div class="form-group">
      <form class="" action="feedback.php" method="post">
        <label for="comment">Write Your Comment Here:</label>
        <textarea class="form-control" rows="5" id="message" name="message"></textarea>
      </form>
    </div>
    <div class="rate">
      <p><b>How would you like to rate our service?</b></p>
      <form class="" action="feedback.php" method="post">
        <table class="rateIcon">
          <tr>
            <td><img src="icon/happy.png" alt="" width="30px" height="30px"></td>
            <td><img src="icon/smile.png" alt="" width="30px" height="30px"></td>
            <td><img src="icon/normal.png" alt="" width="30px" height="30px"></td>
            <td><img src="icon/sad.png" alt="" width="30px" height="30px"></td>
            <td><img src="icon/totallysad.png" alt="" width="30px" height="30px"></td>
          </tr>

          <tr style="text-align:center;">
            <td><br><input type="radio" name="rate" value="verySastified"></td>
            <td><br><input type="radio" name="rate" value="sastified"></td>
            <td><br><input type="radio" name="rate" value="normal"></td>
            <td><br><input type="radio" name="rate" value="unsastified"></td>
            <td><br><input type="radio" name="rate" value="totalyUnsastified"></td>
          </tr>
        </table>
      </form>
    </div>
    <hr>
    <div class="infoForm">
      <h5 style="font-weight:bold;">Fill you info here: <br></h5>
      <form class="" action="feedback.php" method="post">
        <div class="form-group row">
          <label class="control-label col-sm-3" for="uname">Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="sender" name="sender" placeholder="Enter your name here" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-sm-3" for="phonenum">Telephone</label>
          <div class="col-sm-8">
            <input type="tel" class="form-control" id="phonenum" name="phonenum" placeholder="Enter your phone number here">
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-sm-3" for="email">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email here" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-10 col-sm-3">
            <button type="submit" class="btn btn-primary" name="btnSend">Send</button>
          </div>
        </div>
      </form>
    </div>

  </div>
  <br>
  <br>
  <br>
  <?php
  if(isset($_POST["submit"]))
  {
      /*$recipient="roxydao97@gmail.com";
      $subject="Feedback about Asian Aroma";
      $sender=$_POST["sender"];
      $phone=$_POST["phonenum"];
      $senderEmail=$_POST["email"];
      $message=$_POST["message"];

      $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

      mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

      $thankYou="<p>Thank you! Your message has been sent.</p>";*/
      echo "<script>alert("Thank you for your feedback. Your message has been sent!");setTimeout(function(){ window.open(\"home.php\", \"_self\")}, 200);</script>";
  }
  ?>

<?php include "footer.php"; ?>
