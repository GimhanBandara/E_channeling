<html>
<head>
    <title>E-Medical Centre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        #heading{
    color: rgb(0, 120, 138);
    }#int{
      text-align: left;
    }.pub{
      border-radius: 8px 8px 8px 8px;
    }
    </style>
</head>
<body>
    <div class="container">
            <!-- Heading -->
            <h1 id="heading">E Medical centre <img src="logo_0.jpeg" height="50px" width="50px"></h1>
              <!-- back to home -->
              <!-- <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="index.html">
                Back to home
                <svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
              </a><br> -->
              <center><img src="publicinfoimg.jpeg" height="200px" class="pub" width="200px"></center>
              <h4>Doctors' list </h4>
              <p>You can channel any doctor by considering this information. You can find more by click "more" button</p>
              <!-- <div class="hero">
                <h4 class="intro" id="back_img "><font size="6" >Reminder</h4></font>
                <p id="back_img " class="para"><font size="5">You can see public information with or without an accout but you can't done echanneling without an account</p></font>
                </div><br><br>  -->
                <!-- Information -->
                <!-- On tables -->
                <center>
                <div class="alert alert-danger" role="alert">
              If you have any problem please contanct this 0773064826 number
            </div></center>
                <table class="table">
                  <thead>
                    <tr class="table-primary">
                      <th scope="col">No</th>
                      <th scope="col">Dr-First_Name</th>
                      <th scope="col">Dr-Last_Name</th>
                      <th scope="col">Dr-Full_Name</th>
                      <th scope="col">Dr-Popular name</th>
                      <th scope="col">Dr-qualifications</th>
                      <th scope="col">Find more</th>
                    </tr>
                  </thead>
                  <?php

                        require_once 'connection_database/connection.php';
                        $branch = $_POST['branch'];
                        $category = $_POST['category'];

                        $sql = "SELECT * FROM doctor_information WHERE `hospital_branch` = $branch AND `doctor_category` = $category AND 	state='active' ";
                        $result = $conn->query($sql);

                      if($result->num_rows > 0){
                        //Output data of each row

                        while($row = $result->fetch_assoc()){
                          echo "<tr>";
                          $id = $row["doctor_id"];
                          echo "<td>".$row["doctor_id"]."</td>";
                          echo "<td>".$row["doctor_firstname"]."</td>";
                          echo "<td>".$row["doctor_lastname"]."</td>";
                          echo "<td>".$row["doctor_fullname"]."</td>";
                          echo "<td>".$row["popular_name"]."</td>";
                          echo "<td>".$row["qualifications"]."</td>";
                          echo  "<td>"."<a href='doctors_profile1.php?id=$id' type='button' class='btn btn-primary'>Find more</a>"."</td>";
                          echo "</tr>";
                        }
                      } else{
                        echo "0 results";
                      }
                    

                      //close the connection

                      $conn->close();
                  ?>
                  <!-- <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Kamal perera</td>
                      <td>Bsc Degree</td>
                      <td></td>
                      <td><a href="doctors-profile1.html" type="button" class="btn btn-primary">Find more</a></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Pasan Bandara</td>
                      <td>Bsc Degree</td>
                      <td></td>
                      <td><a href="doctors-profile2.html" type="button" class="btn btn-primary">Find more</a></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Nimal Karunathilaka</td>
                      <td>Bsc Degree</td>
                      <td></td>
                      <td><a href="doctors-profile3.html" type="button" class="btn btn-primary">Find more</a></td>
                    </tr>                   
                  </tbody>-->
                </table>
                <br>
                <form><br>
    <!-- footer -->
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