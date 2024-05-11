<!DOCTYPE html>
<head>
    <title>E-Medical Centre</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      #heading{
    color: rgb(0, 120, 138);
    }.form-select{
      background: #22776B ;
      color: white;
      border-radius: 8px 8px 8px 8px;
    }
    </style>
</head>
<body>
  <?php 
   require_once 'connection_database/connection.php';
     $doctor_id = $_GET['id'];
     $doctor_firstname;
     $doctor_lastname;
     $doctor_fullname;
     $doctor_popular_name;
     $doctor_charge;
     $doctor_grade;
     $doctor_picture;
     $doctor_qualifications;

      $sql = "SELECT * FROM doctor_information where `doctor_id` = $doctor_id";
      $result = $conn->query($sql);

      if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
          $doctor_firstname =  $row["doctor_firstname"];
          $doctor_lastname = $row["doctor_lastname"];
          $doctor_fullname = $row["doctor_fullname"];
          $doctor_popular_name = $row["popular_name"];
          $doctor_grade = $row["doctor_grade"];
          $doctor_charge = $row["doctor_charges"];
          $doctor_qualifications = $row["qualifications"];

        }
      }
?>
  <div class="container">
    <h1 id="heading">E Medical centre <img src="logo_0.jpeg" height="50px" width="50px"></h1>
              <!-- back to home -->
              <!-- <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="public information.html">
                Back
                <svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
              </a><br> -->
              <hr>
    <h2> Dr.<?= $doctor_popular_name;?> </h2><br>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <img src="doctor.jpeg" width="250px" height="250px">
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Dr_First Name:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="<?= $doctor_firstname;?>" disabled>
            </div>
        </div><div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Dr_Last Name:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="<?= $doctor_lastname;?>" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Dr_Full name:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="<?= $doctor_fullname;?>" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Dr_qualifications:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="<?= $doctor_qualifications;?>" disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Dr_grade:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="<?= $doctor_grade;?>" disabled>
            </div> 
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">charges:</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword" value="<?= $doctor_charge;?>" disabled>
          </div>
      </div>
        </div>
        </div>
        </div>
        <br><br><center>
        <div class="alert alert-danger" role="alert">
          If you have serious illness like heart attarke etc, You can select time from emergancy time
        </div></center>
          <br><br>
          
           <!-- <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Step 4</i></a>
                                </li>
                            </ul>
                        </div>
        
                        <form role="form" action="index.html" class="login-box">
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 class="text-center">Step 1</h4>
                                    <h4>Time type:</h4>
                                        <select class="form-select" aria-label="Default select example" name="t_type">
                                            <option selected>Select your time type</option>
                                            <option value="Normal">Normal time</option>
                                            <option value="Emergancy">Emergancy time</option>
                                            </select>   
                                        </div> 
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <h4 class="text-center">Step 2</h4>
                                    <h4>Date:</h4>
                                        <select class="form-select" aria-label="Default select example" name="date">
                                          <option selected>Select date</option>
                                          <option value="2024-04-25">2024-04-25 </option>
                                          <option value="2024-04-30">2024-04-30</option>
                                          <option value="2024-04-31">2024-04-31</option>
                                        </select><br>
                                    
                                    
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <h4 class="text-center">Step 3</h4>
                                    <h4>time:</h4>
                                          <select class="form-select" aria-label="Default select example" name="time">
                                            <option selected>Select yourtime</option>
                                            <option value="7.00 - 7.20">7.00 - 7.20</option>
                                            <option value="7.20 - 7.40">7.20 - 7.40</option>
                                            <option value="7.40 - 8.00">7.40 - 8.00</option>
                                          </select><br>
                                    </div>
                                       </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <h4 class="text-center">Step 4</h4>
                                    <div class="mb-3">
                                    <div class="row">
              <div class="col">
            <h4>Full name:</h4>
            <input type="text" name="full_name" class="form-control" id="formGroupExampleInput" placeholder="Full name">
          </div>
          <div class="mb-3">
            <h4>First name:</h4>
            <input type="text" name="first_name" class="form-control" id="formGroupExampleInput" placeholder="First name">
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <div class="mb-3">
              <h4>Last name:</h4>
              <input type="text" name="last_name" class="form-control" id="formGroupExampleInput" placeholder="Last name">
            </div>
            <h4>Email:</h4>
            <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="email">
          </div>
          <div class="mb-3">
            <h4>NIC Number:</h4>
            <input type="text" name="NIC_no" class="form-control" id="formGroupExampleInput" placeholder="NIC number">
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Payment reciept</label>
            <input type="file" name="reciept" class="form-control" id="inputGroupFile01">
          </div>
        </div></div>
        <p id="show"></p>
        <button class="btn btn-primary" onclick="show()">show bank details</button><br><br>
        </div>
    </section>  -->
    <?php
          require_once 'connection_database/connection.php';
          $do_id = $_GET['id'];
    echo "<a href='emergancy_time.php?id=$do_id'&name='$doctor_popular_name' class='btn btn-primary'>Do you want emergancy time</a>"
    ?>
    <br>
          <h2>Channel the doctor</h2><hr>
          <table class="table">
                  <thead>
                    <tr class="table-primary">
                      <th scope="col">No</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">channel</th>
                    </tr>
                  </thead>

          <?php
          require_once 'connection_database/connection.php';
          $doctor_id = $_GET['id'];

          $sql = "SELECT * FROM `normal_time` WHERE doctor_id =$doctor_id AND	state='not' ";
          $result = $conn->query($sql);

        if($result->num_rows > 0){
          //Output data of each row

          while($row = $result->fetch_assoc()){
            echo "<tr>";
            $id = $row["doctor_id"];
            $time_id = $row["normaltime_id"];
            echo "<td>".$row["normaltime_id"]."</td>";
            echo "<td>".$row["date"]."</td>";
            echo "<td>".$row["time"]."</td>";
            echo  "<td>"."<a href='echanneling_form.php?id=$id&t_id=$time_id&t_type=normal' type='button' class='btn btn-primary'>Channel the doctor</a>"."</td>";
            echo "</tr>";
          }
        } else{
          echo "0 results";
        }
          ?>
          </table>

          <!-- <form action="echanneling_record.php" method="POST">
          <h4>Time type:</h4>
          <select class="form-select" aria-label="Default select example" name="t_type">
            <option selected>Select your time type</option>
            <option value="Normal">Normal time</option>
            <option value="Emergancy">Emergancy time</option>
            </select> -->
            
            <!-- <center><button type="submit" class="btn btn-success">Next page</button></center> -->
            <!-- <h4>Date:</h4>
          <select class="form-select" aria-label="Default select example" name="date">
            <option selected>Select date</option>
            <option value="2024-04-25">2024-04-25 </option>
            <option value="2024-04-30">2024-04-30</option>
            <option value="2024-04-31">2024-04-31</option>
          </select><br>
          <h4>time:</h4>
          <select class="form-select" aria-label="Default select example" name="time">
            <option selected>Select yourtime</option>
            <option value="7.00 - 7.20">7.00 - 7.20</option>
            <option value="7.20 - 7.40">7.20 - 7.40</option>
            <option value="7.40 - 8.00">7.40 - 8.00</option>
          </select><br>
          <div class="mb-3">
            <h4>Full name:</h4>
            <input type="text" name="full_name" class="form-control" id="formGroupExampleInput" placeholder="Full name">
          </div>
          <div class="mb-3">
            <h4>First name:</h4>
            <input type="text" name="first_name" class="form-control" id="formGroupExampleInput" placeholder="First name">
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <div class="mb-3">
              <h4>Last name:</h4>
              <input type="text" name="last_name" class="form-control" id="formGroupExampleInput" placeholder="Last name">
            </div>
            <h4>Email:</h4>
            <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="email">
          </div>
          <div class="mb-3">
            <h4>NIC Number:</h4>
            <input type="text" name="NIC_no" class="form-control" id="formGroupExampleInput" placeholder="NIC number">
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Payment reciept</label>
            <input type="file" name="reciept" class="form-control" id="inputGroupFile01">
          </div>
        </div></div>
        <p id="show"></p>
        <button class="btn btn-primary" onclick="show()">show bank details</button><br><br>
        <button class="btn btn-success" id="btn" type="submit">Submit</button><br> -->
    <!-- Footer -->
    <footer>
        <div class="footercontainer">
          <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-google-plus"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
          </div>
          <div class="footerBottom">
            <h5 id="footerH">Contact Number:0773064826</h5>
          <h5 id="footerH">Email:gimhanbandara20@gmail.com</h5>
            <p>Copyright &copy; 2024 Designed by <span class="designer">Gimhan Bandara</span></p>
          </div>
        </div>
        </footer>
        </div>
</body>
</html>