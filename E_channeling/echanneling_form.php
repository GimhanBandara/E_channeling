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
      .form-select{
      background: #22776B ;
      color: white;
      border-radius: 8px 8px 8px 8px;
    }
    </style>
      <script>
      $(document).ready(function(){
          $(("#btn")).click(function(){
            alert("Successfully added");
          });
        });

        function show(){
          document.getElementById('show').innerHTML = "Bank name:BOC <br> Name:R.A.G.W.M.G.L.Bandara <br> Account no:0009786467";
        }
    </script>
</head>
<body>
    <div class="container">
    <h1 id="heading">E Medical centre <img src="logo_0.jpeg" height="50px" width="50px"></h1>
    <form action="doctors_function/doctor1.php" method="POST">
    <h4>Fill the form</h4>
            <hr>
    <div class="container text-center">
          <div class="row">
          <div class="col">
          <div class="mb-3">
            <h5>Full name:</h5>
            <input type="text" name="full_name" class="form-control" id="formGroupExampleInput" placeholder="Full name">
          </div>
          <div class="mb-3">
            <h5>First name:</h5>
            <input type="text" name="first_name" class="form-control" id="formGroupExampleInput" placeholder="First name">
          </div>
          <div class="mb-3">
              <h5>Last name:</h5>
              <input type="text" name="last_name" class="form-control" id="formGroupExampleInput" placeholder="Last name">
      </div>
        </div>
            <div class="col">
      <div class="mb-3">
            <h5>Email:</h5>
            <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="email">
          </div>
          <div class="mb-3">
            <h5>NIC Number:</h5>
            <input type="text" name="NIC_no" class="form-control" id="formGroupExampleInput" placeholder="NIC number">
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Payment reciept</label>
            <input type="file" name="reciept" class="form-control" id="inputGroupFile01">
          </div>
        </div></div>
        </div>
        <?php
            require_once 'connection_database/connection.php';
            $doctor_id = $_GET['id'];
            $time_type = $_GET['t_type'];
            $time_id = $_GET['t_id'];

            //test 

            echo "<input type='hidden' name=$doctor_id >";
            echo "<input type='hidden' name=$time_id >";
            echo "<input type='hidden' name=$time_type>";
            ?>
      <center>
        <button class="btn btn-success" id="btn" type="submit">Submit</button>
      </center>
    </form>
    <center>
    <p id="show"></p>
    <button class="btn btn-primary" onclick="show()">show bank details</button><br><br>
    </center>
    <h2><i>`Get well soon`</i></h2>
    </div>
    </div>
</body>
</html>