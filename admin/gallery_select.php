 <!--image table-->
 
    <!-- dashboard contact area -->
    <?php

   
    include("root/db.php");
    ?>
<div style="background: #00000003;    margin-top: 50px;" class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                
                                
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th style="text-align:center;">Name</th>
                                             <th style="text-align:center;">images</th>
                                             <th style="text-align:center;">Update</th>
                                             <th style="text-align:center;">delete</th>
                                          </tr>
                                       </thead>
                                       
              <?php
              $sql ="SELECT * FROM  gallery";
              $result =$mysqli->query($sql);
              if ($result->num_rows > 0){
                  while ($row=$result -> fetch_assoc())
              {
              ?>
              <tr>
                  
                  <td style="vertical-align:middle;text-align: center;"><?php echo $row['img_name'];?></td>
                 
                 
      
                  <td style="vertical-align:middle;text-align: center;"><img src="gallery/<?php echo $row ['image'];?>" width ="120" height ="100"/></td>
                  <td align ="center" style="vertical-align:middle;"><a style="color: #ffffff;background: #14b0a9;padding: 9px;vertical-align: center !importent;text-decoration: none;border-radius: 5px;" href="gallery_update.php?sa=<?php echo $row["id"];?>">update</a></td>
                  <td align ="center" style="vertical-align:middle;"><a style="color: #ffffff;background: #14b0a9;padding: 9px;vertical-align: center !importent;text-decoration: none;border-radius: 5px;" href="gallery_delete.php?sa=<?php echo $row["id"];?>">delete</a></td>
                 
              </tr>
              
              <?php
              }
          }
          ?>
                         
                                    </table>
                                 </div>
                              </div>
                           </div>
                   