
              <?php
  include 'connect.php';
              $catNewCount = $_POST['catNewCount'];
              $nr1_query ="SELECT * FROM `flower_list` LIMIT $catNewCount" ;
            $res = mysqli_query($conn, $nr1_query);
            while ($row = mysqli_fetch_assoc($res)){
                        ?>
              <div class="col-xl-4 grid-item cat<?php echo $row['cat_id'];?>">
                  <div class="single_case animated wobble duration-4000s">
                      <div class="case_thumb">
                        <a href="single-product.php?id=<?php echo $row['id'];?>">
                          <img src="img/product/<?php echo $row['photo'];?>" alt="" width="362" height="240">
                        </a>
                          </div>
                      <div class="case_heading">
                          <span><?php echo $row['price'];?></span>
                        <h3><a href="single-product.php?id=<?php echo $row['id'];?>"><?php echo $row['flower_name'];?></a></h3>
                      </div>
                      <p class="buttons text-center">
                        <a href="single-product.php?id=<?php echo $row['id'];?>" class ="genric-btn info-border radius">View Detail </a>
                      </p>
                  </div>
              </div>
              <?php
         }
         ?>

    <!-- /case_study_area  -->
