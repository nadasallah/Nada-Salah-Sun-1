<?php
     $employees =[
     'ali hasan'  =>['position'=>'Full Stack','experience' => '4 Years of Experince '],
     'mohammed shaker'=>['position'=>'front end developer','experience' =>  '3 Years of Experince '],
     'ahmed hamdy'   =>['position'=>'Back End developer','experience' => '2 Years of Experince '],
            ];  ?>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">

  
</head>
<body>
    <div class="container mt-5 ">
        <div class="row">
     <?php foreach ($employees as $employee => $data) { ?>

             <div class="card col-md-3  m-auto ">

             <h5 class="card-title mt-4 "><?php echo $employee ?></h5>
                    <h6 class="card-text mb-2 text-muted"><?php echo $data['position'] ?></h6>
                    <span class="card-exp mb-4"><?php echo $data['experience'] ?></span>
            </div>

     <?php } ?>
     </div>
     </div>
     
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
  <!-- 6- write a script that displays data in bootstrap cards   -->

</html>

