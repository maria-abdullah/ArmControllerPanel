<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link href="bootstrap.min.css" rel="stylesheet">

<style>

body {
  background-color: #dce6ea;
}

h4 {
  text-align: center;
  font-size: 28px;
}

.wave{
	position: fixed;
	bottom: 20px;
	left: 3.8in;
	height: 50%;
	z-index: -1;
}

th {
  text-align: center;

}

td {
  text-align: center;
  color: #00acee;
}

</style>
</head>

 <body>
 <img class="wave" src="AI.svg">
    <div class="container">
         <div class="row justify-content-ceneter">
             <div class="col-md-12">
                 <div class="card mt-5">
                 <div class="card-header">
                         <h4> Arm started to run with these Values </h4>
                     </div>
                     
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="table table-bordered">
                                 <thead>
                                     <tr>
                                        
                                        <th>Engine 1</th>
                                        <th>Engine 2</th>
                                        <th>Engine 3</th>
                                        <th>Engine 4</th>
                                        <th>Engine 5</th>
                                        <th>Engine 6</th>
                                        </tr>
                                 </thead>

                                 <tbody>

                                    <?php

                                    define("DB_SERVER", "localhost");
                                    define("DB_USER"  , "root");
                                    define("DB_PASS"  , "");
                                    define("DB_NAME"  , "arm");
                       
                                   $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
                                   if ($conn->connect_error) {
                                   die("Connection failed: " . $conn->connect_error);
                                    }
      
                                  $query = "SELECT * FROM engines ORDER BY id DESC LIMIT 1";
                                  $query_run = mysqli_query($conn, $query);

                                 if(mysqli_num_rows($query_run)>0)

                                  {
                                  foreach($query_run as $row)
                                     {

                                     ?>
                                     <tr>
                                      
                                      <td> <?= $row['engine1'] ?>  </td>
                                      <td> <?= $row['engine2'] ?>  </td>
                                      <td> <?= $row['engine3'] ?>  </td>
                                      <td> <?= $row['engine4'] ?>  </td>
                                      <td> <?= $row['engine5'] ?>  </td>
                                      <td> <?= $row['engine6'] ?>  </td>
                                    
                                     </tr>
                                     <?php
                                      }
                                      }

                                    else {
                                     ?>
                                      <td>
                                        No Record Found 
                                      </td> 
                                     <?php  }

                                     ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                 </div>
             </div>
          </div>
      </div>
  </body>
</html> 

