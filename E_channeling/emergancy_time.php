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
<?php
          require_once 'connection_database/connection.php';
          $doctor_id = $_GET['id'];
          $name = $_GET['name'];
          ?>
    <div class="container">
    <h1 id="heading">E Medical centre <img src="logo_0.jpeg" height="50px" width="50px"></h1>
        <h3>Emergancy times of Dr.<?= $name;?></h3>
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

          $sql = "SELECT * FROM `emergancy_time` WHERE doctor_id =$doctor_id AND	state='not' ";
          $result = $conn->query($sql);

        if($result->num_rows > 0){
          //Output data of each row

          while($row = $result->fetch_assoc()){
            echo "<tr>";
            $id = $row["doctor_id"];
            $time_id = $row["emergancytime_id"];
            echo "<td>".$row["emergancytime_id"]."</td>";
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
    </div>
</body>
</html>