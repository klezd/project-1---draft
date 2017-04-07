<?php include "navigator.php"; ?>
  <h2> Feedback for Asian Aroma </h2>
  <div class="feedback">
    <div class="form-group">
      <label for="comment">Write Your Comment Here:</label>
      <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
    </div>
    <div class="rate">
      <p><b>How would you like to rate our service?</b></p>
      <form class="" action="index.html" method="post">
        <table class="rateIcon">
          <tr>
            <td><img src="icon/happy.png" alt="" width="30px" height="30px"></td>
            <td><img src="icon/smile.png" alt="" width="30px" height="30px"></td>
            <td><img src="icon/normal.png" alt="" width="30px" height="30px"></td>
            <td><img src="icon/sad.png" alt="" width="30px" height="30px"></td>
            <td><img src="icon/totallysad.png" alt="" width="30px" height="30px"></td>
          </tr>

          <tr style="text-align:center;">
            <td><br><input type="radio" name="verySastified" value=""></td>
            <td><br><input type="radio" name="sastified" value=""></td>
            <td><br><input type="radio" name="normal" value=""></td>
            <td><br><input type="radio" name="unsastified" value=""></td>
            <td><br><input type="radio" name="totalyUnsastified" value=""></td>
          </tr>
        </table>
      </form>
    </div>
    <hr>
    <div class="infoForm">
      <h5 style="font-weight:bold;">Fill you info here: <br></h5>
      <form class="" action="index.html" method="post">
        <div class="form-group row">
          <label class="control-label col-sm-2" for="uname">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter your name here" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-sm-2" for="phonenum">Telephone</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="phonenum" placeholder="Enter your phone number here">
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-sm-2" for="email">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter your email here" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-10 col-sm-3">
            &nbsp; &ensp;
            <button type="submit" class="btn btn-primary" name="btnSend">Send</button>
          </div>
        </div>
      </form>
    </div>

  </div>
  <br>  <br>
<?php include "footer.php"; ?>
