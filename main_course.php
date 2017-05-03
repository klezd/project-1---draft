<?php include "navigator.php"; ?>
<?php include "header_login.php"; ?>
<?php include "add_to_cart.php"; ?>
<div class="container" style="width:700px;">
           
                <h3 align="center" class="title">Main Course</h3>
                <hr style="width:60%">
                <?php
                $query = "SELECT * FROM menu WHERE type='main course' ORDER BY dish_id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                     while($row = mysqli_fetch_array($result))
                     {
                ?>


                <div class="col-md-4">
                     <form method="post" action="main_course.php?action=add&id=<?php echo $row["dish_id"]; ?>">
                          <div style="width:200px; height: 250px; display: inline-block; padding:15px; margin:10px;
                                      border: 2px outset #ffd9b3; text-align:center; background-color:#e6ffcc;">
                               <div id="dish"><img src="<?php echo $row["image"]; ?>" class="img-responsive" /></div>
                               <div style="padding:3px, margin:auto;">
                               <h5 class="text-info"><?php echo $row["dname"]; ?></h4>
                               <p><strong>Price :</strong> €<?php echo $row["price"]; ?></p>
                               </div>
                               <div style="padding:3px, margin:auto;">
                               <input type="text" style="margin-top:5px; border: 1px solid #809fff;" name="quantity" value="1" size="2" />
                               <input type="hidden" name="hidden_name" value="<?php echo $row["dname"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px; border: 1px solid #809fff;background-color:#e6f2ff;color:#6b82c7;" class="" value="Add to Cart" />
                               </div>
                          </div>
                     </form>
                 </div>
                <?php
                     }
                }
                ?>
                <h3 align="center">Dessert</h3><hr style="width:45%">
                <?php
                $query = "SELECT * FROM menu WHERE type='dessert' ORDER BY dish_id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                     while($row = mysqli_fetch_array($result))
                     {
                ?>


                <div class="col-md-4">
                     <form method="post" action="main_course.php?action=add&id=<?php echo $row["dish_id"]; ?>">
                          <div style="width:200px; height: 250px; display: inline-block; padding:15px; margin:10px;
                                      border: 2px outset #ffd9b3; text-align:center; background-color:#e6ffcc;">
                               <div id="dish"><img src="<?php echo $row["image"]; ?>" class="img-responsive" /></div>
                               <div style="padding:3px, margin:auto;">
                               <h5 class="text-info"><?php echo $row["dname"]; ?></h4>
                               <p><strong>Price :</strong> €<?php echo $row["price"]; ?></p>
                               </div>
                               <div style="padding:3px, margin:auto;">
                               <input type="text" name="quantity" value="1" size="2" />
                               <input type="hidden" name="hidden_name" value="<?php echo $row["dname"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;border: 1px solid #809fff;background-color:#e6f2ff;color:#6b82c7;" class="" value="Add to Cart" />
                               </div>
                          </div>
                     </form>
                 </div>
                <?php
                     }
                }
                ?>
                <div style="clear:both"></div>
           </div>
<?php include "footer.php"; ?>
