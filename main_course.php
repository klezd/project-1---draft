<?php include "navigator.php"; ?>
<?php include "header_login.php"; ?>
<?php include "add_to_cart.php"; ?>
<div class="container" style="width:700px;">
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
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                          </tr>
                          <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                               }
                          ?>
                          <tr>
                               <td colspan="3" align="right">Total</td>
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>
                               <td></td>
                          </tr>
                          <?php
                          }
                          ?>
                     </table>
                </div>
                <h3 align="center">Simple PHP Mysql Shopping Cart</h3><br />
                <?php
                $query = "SELECT * FROM menu WHERE type='main course' ORDER BY dish_id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                     while($row = mysqli_fetch_array($result))
                     {
                ?>


                <div class="col-md-4">
                     <form method="post" action="index.php?action=add&id=<?php echo $row["dish_id"]; ?>">
                          <div style="width:200px; height: 230px; display: inline-block; padding:10px; margin:10px;
                                      border: 1px solid #994d00; text-align:center; background-color:#CCFFE5;">
                               <div id="dish"><img src="<?php echo $row["image"]; ?>" class="img-responsive" /></div>
                               <div style="padding:3px, margin:auto;">
                               <h5 class="text-info"><?php echo $row["dname"]; ?></h4>
                               <p><strong>Price :</strong> € <?php echo $row["price"]; ?></p>
                               </div>
                               <div style="padding:3px, margin:auto;">
                               <input type="text" name="quantity" value="1" size="2" />
                               <input type="hidden" name="hidden_name" value="<?php echo $row["dname"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="" value="Add to Cart" />
                               </div>
                          </div>
                     </form>
                 </div>
                <?php
                     }
                }
                ?>
                <div style="clear:both"></div>
                <br />


           </div>
           <br />
<?php include "footer.php"; ?>
