<?php include "navigator.php"; ?>
<?php include "header_login.php"; ?>
<h2> Purchase Your Order </h2>
<form name="payment" class="contact_form" action="index.html" method="post">
  <fieldset>
    <legend>Please fill your delivery information</legend>
    <div class="form-group row">
      <label class="control-label col-sm-3" for="name">Your name</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required="">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-3" for="phone">Telephone</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="phone" placeholder="Enter your telephone" name="phone" required="">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-3" for="email">Email</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" placeholder="Enter your name" name="email" required="">
      </div>
    </div>
  </fieldset>
</form>
<br>
<div class="payment_field">
  <span onclick="showpayment1()">&#9660;</span> Cash on delivery
  <div id="paybyCash" class="payment_method_hide" >
    You will pay your order when you receive dishes <br>
    <div style="float:right; font-size:10px">
      <form  name="payment" action="purchase.php" method="post">
        <button class="btn btn-primary" type="submit" name="buttonAccept">Agree and Submit</button>
        <button class="btn btn-primary" type="submit" name="buttonCancel">Cancel</button>
      </form>
    </div>
  </div>
  <br> <br>
  <span onclick="showpayment2()">&#9660;</span> Pay by card
  <div id="paybyCard" class="payment_method_hide" >
    <img src="icon/credit.png" alt="" width="55" height="50"> <img src="icon/visa.png" alt="" width="55" height="50">
    <br>
    <form class="cardpayment" action="index.html" method="post">
      <div class="form-group row">
        <label class="control-label col-sm-5" for="card_number">Card number</label>
        <div class="col-sm-7">
          <input type="text" size="9" maxlength="12" class="form-control" id="cardnum" placeholder="Enter card number" name="cardnum" required="">
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-sm-5" for="">Expire date</label>
        <div class="col-sm-3">
          <input  class="form-control" type="date" name="dateexpired" placeholder="__/__" size="6" maxlength="7" required="">
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-sm-5" for="">CVV</label>
        <div class="col-sm-3">
          <input  class="form-control" type="date" name="dateexpired" placeholder="CVV" size="3" maxlength="5" required="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3">
          <button class="btn btn-primary" type="submit" name="buttonProceed">Proceed</button>
          <button class="btn btn-primary" type="submit" name="buttonCancel">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
  function showpayment1() {
    var x = document.getElementById("paybyCash").classList;
    if (x.contains("payment_method_hide"))
    {
      x.remove("payment_method_hide");
      x.add("payment_method_show");
    }
    else if (x.contains("payment_method_show")) {
      x.remove("payment_method_show");
      x.add("payment_method_hide");
    }
  };
  function showpayment2() {
    var y = document.getElementById("paybyCard").classList;
    if (y.contains("payment_method_hide"))
    {
      y.remove("payment_method_hide");
      y.add("payment_method_show");
    }
    else if (y.contains("payment_method_show")) {
      y.remove("payment_method_show");
      y.add("payment_method_hide");
    }
  };

</script>

<?php
if(isset($_POST['buttonAccept']))
{
  echo "<script>";
  echo "window.alert(\"You have successfull order!\");";
  echo "setTimeout(function(){ window.open(\"home.php\", \"_self\")}, 500);";
  echo "</script>";
}
if(isset($_POST['buttonProceed']))
{
  echo "<script>";
  echo "window.alert(\"You will be directed to the bank page!\");";
  echo "setTimeout(function(){ window.open(\"home.php\", \"_self\")}, 500);";
  echo "</script>";
}
if(isset($_POST['buttonCancel']))
{
  echo "<script>";
  echo "window.alert(\"You have cancelled your order!\");";
  echo "setTimeout(function(){ window.open(\"home.php\", \"_self\")}, 500);";
  echo "</script>";
}
?>
<br>
<?php include "footer.php"; ?>
