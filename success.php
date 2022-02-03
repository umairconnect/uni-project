<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	
  
</head>
<body>
<br/><br/>

<span style = "float:right;">  
 <form  method="GET" action="searchee.php">
 <input type="text" name="roll_no" placeholder="Search roll no.." style="width: 20; color:black;">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
</form>
</span>



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