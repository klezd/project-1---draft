<?php include "navigator.php"; ?>
<?php include "header_login.php"; ?>
<?php include "add_to_cart.php"; ?>

<h3>Order Details</h3>
     <div class="table-responsive">
          <table class="table table-bordered">
               <tr>
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
               </tr>
               <?php
               if(!empty($_SESSION["shopping_cart"]))
               {
                    $total = 0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                    {
               ?>
               <tr>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td><?php echo $values["item_quantity"]; ?></td>
                    <td>$ <?php echo $values["item_price"]; ?></td>
                    <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                    <td><a href="main_course.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
               </tr>
               <?php
                         $total = $total + ($values["item_quantity"] * $values["item_price"]);
                    }
               ?>
               <tr>
                    <td colspan="3" align="right">Total</td>
                    <td colspan="2" align="left">$ <?php echo number_format($total, 2); ?></td>

               </tr>
               <tr>
                   <td colspan="5" align="right">
                     <a href="purchase.php"><button type="submit" class="btn btn-info" name="btnPurchase">Purchase</button></a>
                     &nbsp;
                     <a href="home.php"><button type="button" class="btn" name="btnCancel">Cancel</button></a>
                   </td>
               </tr>
               <?php
               }
               ?>
          </table>
     </div>

<?php include "footer.php"; ?>
