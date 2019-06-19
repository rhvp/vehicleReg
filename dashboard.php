<?php 

session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $conn = mysqli_connect("localhost", "root", "", "cars");
    $query = "SELECT * FROM users WHERE id = '$id'";
    $make_query = mysqli_query($conn, $query);
    $car_query = "SELECT * FROM car WHERE user_id = '$id'";
    $get_cars = mysqli_query($conn, $car_query);
    while ($this_user = mysqli_fetch_assoc($make_query)) {
        $firstname = $this_user['firstname'];
    }

 ?>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />   
        
    </head>
    <body>
        <header>
            <div class="row">
            <div class="col-md-3 col-xs-12 profile"><p class="welcome">Welcome <?php echo $firstname; ?></p></div>    
            </div>
            
        </header>
        <div class="container">
            
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="#home" class="nav-link active" data-toggle="tab">Home</a></li>
                    <li class="nav-item"><a href="#new" class="nav-link" data-toggle="tab">Add New Vehicle</a></li>
                    <li class="nav-item"><a href="#view" class="nav-link" data-toggle="tab">See <?php echo $firstname."'s"; ?> Cars</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            <div class="row">
                <div class="col-xs-12 col-md-9 col-centered">
                        
                        <div class="tab-content">
                            <div class="tab-pane show active" id="home">
                                <h1>Home Page</h1>
                            </div>
                            <div class="tab-pane" id="new">
                                <form method="post" action="php_scripts/new_car.php">
                                    <h4 class="text-center"> Add New Vehicle </h4>
                                    <input type="text" name="car_no" placeholder="Car No" class="form-control" required/>
                    
                                    <input type="text" name="chasis_no" placeholder="Chasis No" class="form-control" required/>
                    
                                    <input type="text" name="brand" placeholder="Brand" class="form-control" required/>

                                    <input type="text" name="model" placeholder="Model" class="form-control" required/>
                                    
                                    <input type="number" maxlength="4" name="year" placeholder="Year" class="form-control" required/>

                                    <input type="submit" name="submit" class="form-control"/>
                                </form>
                            </div>
                            <div class="tab-pane" id="view">
                                            
                                            
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Vehicle Brand</th>
                                                        <th>Vehicle Model</th>
                                                        <th>Vehicle Year</th>
                                                        <th>Vehicle No </th>
                                                        <th>Vehicle Chasis No</th>
                                                    </tr>
                                                </thead>

                                            <?php 
                                            echo "<br/>";
                                           
                                           $counter = 1;
                                            
                                            while($this_car = mysqli_fetch_assoc($get_cars)) {
                                                $car_brand = $this_car['brand'];
                                                $car_year = $this_car['year'];
                                                $car_number = $this_car['car_no'];
                                                $car_model = $this_car['model'];
                                                $car_chasis = $this_car['chasis_no'];

                                                echo "<tr>
                                                    <td>".$counter."</td>
                                                    <td>".$car_brand."</td>
                                                    <td>".$car_model."</td>
                                                    <td>".$car_year."</td>
                                                    <td>".$car_number."</td>
                                                    <td>".$car_chasis."</td>
                                                </tr>";
                                                $counter++;
                                                
                                            }

                                        
                                            ?>
                                        </table>
                            </div>
                        </div>
            
            
                </div>
            </div>
            
        </div>
        <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            // let bar = document.querySelector('.nav');
            // let list = document.querySelectorAll('li');
            // bar.addEventListener('click', function(e){
            //     e.preventDefault();
            //     for(let i=0; i<list.length; i++) {
            //         list[i].classList.remove('active');
            //     }
            //     e.target.classList.add('active');
            // });
            $(document).ready(function() {
                $("li a").click(function(e) {
                    $(".tab-content div").removeClass("show");
                    // e.preventDefault();
                    $(this).tab("show");
                })
            })
        </script>
        
    
    </body>


</html>
    
<?php    
    
}else{
    header("location: index.php");
}

?>