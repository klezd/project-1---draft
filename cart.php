<?php include "navigator.php"; ?>
<?php include "header_login.php"; ?>
<div style="text-align:center;">
  <br>
  <img src="icon/shopping_cart.png" alt="shopping cart" width="40px"> &nbsp; <span style="font-size:20px">Review Your Orders</span>
</div>
<form class="" action="purchase.php" method="post">
  <table id="cart_table">
    <tr>
      <th>Detail</th>
      <th>Name</th>
      <th>Quantity</th>
	    <th>Price</th>
      <th>Action</th>
    </tr>
    <!--php code -->
    <tr>
      <td style="text-align:right; padding-right:50px" colspan="3">Total Price &ensp;</td>
      <td colspan="2" style="text-align:left; padding-left:15px"><!--php code to get total price--></td>

    </tr>
  </table>
  <br />
  <div class="form-group">
    <div class="col-sm-offset-8 col-sm-8">

      <button type="submit" class="btn btn-info" name="btnPurchase">Purchase</button>
      &ensp;
      <button type="button" class="btn" name="btnCancel">Empty Cart</button>
    </div>
  </div>
</form>
<?php include "footer.php"; ?>
