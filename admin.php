<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
    
  <section class="section">
      <div class="container">
          <div class="row">
            <div class="col-lg-4">
                <h1 class="text-center"> Item list</h1>
            </div>
          </div>
        <div class="row">

            <?php
                   include "php/connection.php";
                    error_reporting(0);

                    $sql = "SELECT * FROM donate_save";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                  
                    while($row = $result->fetch_assoc()) {
                      ?>

                        <div class="col-lg-6">
                            <div class="itembox">
                              <div class="row">
                                  <div class="col-lg-7">
                                      <p><b>Type:</b>  <?php echo $row['type'] ?></p>
                                      <p><b>Name:</b>  <?php echo $row['name'] ?></p>
                                      <p><b>Phone:</b>  <?php echo $row['phone'] ?></p>
                                      <p><b>Location:</b>  <?php echo $row['location'] ?></p>
                                      <p><b>Description:</b>  <?php echo $row['description'] ?></p>
                            
                                  </div>
                                  <div class="col-lg-5">
                                      <?php echo $row['checkboxes'] ?>
                                  </div>
                              </div>

                              <div class="row p-3">
                                    <a href="php/delete.php?id=<?php echo $row['id']; ?>">Delete</a>&nbsp;||&nbsp;
                                      <a href="" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">Edit</a>
                              </div>
                        
                            </div>
                        </div>
                                    

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body">
                                <?php 
                                   $formid = $row['id'];
                                   $formsql = "SELECT * FROM donate_save WHERE id=$formid";

                                   $formresult = $conn->query($formsql);
               
                                   if ($formresult->num_rows > 0) {
                                 
                                   while($row = $formresult->fetch_assoc()) {
                                     ?>

                                         <form method="POST" action="php/update.php?id=<?php echo $row['id']; ?>" id="contactForm" name="contactForm" class="contactForm">
                                         <div class="form-group">
                                            Name:  <input type="text" name="name" value="<?php echo $row['name'] ?>" required placeholder="Item Name">
                                         </div>

                                      

                                         <div class="form-group">
                                           Phone:  <input type="text" name="phone" value="<?php echo $row['phone'] ?>" placeholder="Phone">
                                         </div>

                                         <div class="form-group">
                                           Location:  <input type="text" name="location" value="<?php echo $row['location'] ?>" placeholder="Location">
                                         </div>

                                         <div class="form-group">
Description:
                                           <textarea name="description">
                                              <?php echo $row['description']; ?>
                                           </textarea>
                                         </div>

                                         <div class="form-group">
                                          Type:  <select name="type">
                                                <option disabled selected><?php echo $row['type'] ?></option>
                                                <option>Request</option>
                                                    <option>Donate</option>
                                            </select>
                                         </div>
                                          


                                           <input type="submit" value="Update" class="btn btn-primary">

                                    
                                        </form>
                                     
                                     <?php
                                            }
                                            } else {
                                            echo "0 results";
                                            }
                                        ?>
                                
                               
                            </div>

                           
                            </div>
                        </div>
                        </div>
        

                     <?php
                        }
                        } else {
                        echo "0 results";
                        }
                     ?>
       </div>
      </div>

  </section>


</body>
</html>