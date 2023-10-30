<br><br><br>
<?php
 


 include("root/db.php");
 ?>
<div class="container-fluid" style="background-color: var(--blue);color:white;padding:10px"><h4> Edit/Delete Blog</h4></div>

<div class="blog-content">
<div class="container">
<?php
include("root/db.php");
              $sql ="SELECT * FROM  blog";
              $result =$mysqli->query($sql);
              if ($result->num_rows > 0){
                  while ($row=$result -> fetch_assoc())
              {
              ?>
             
				  <div class="card">
					<div class="card__header">
					  <img src="gallery/<?php echo $row ["image"]; ?>" alt="card__image" class="card__image" width="600">
					</div>
					<div class="card__body">
					  <h4><?php echo $row ["title"]; ?></h4>
					  <p><?php echo $row ["description"]; ?></p>
					</div>
					<div class="card__footer">
					  <div class="user">
						<div class="user__info">
						  <h5><?php echo $row ["author"]; ?></h5>
						  <small><?php echo $row ["date"]; ?></small>
						</div>
					  </div>
                      <input  name="content" type="hidden" value="<?php echo $row ["content"]; ?>">
					  <div class="button-div">
                        <a href="blog_update.php?sa=<?php echo $row["id"];?>" style="margin-right: 5px;"><button>Edit</button></a>
                        <a href="blog_delete.php?sa=<?php echo $row["id"];?>"><button>Delete</button></a>
							
							
					  </div>
                      </div>
                      </div>
                  <?php
              }
            }
	
                ?>
                
				