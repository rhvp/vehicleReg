<?php 

session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $conn = mysqli_connect("localhost", "root", "", "cars");
    $query = "SELECT * FROM users WHERE id = '$id'";
    $make_query = mysqli_query($conn, $query);
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
            
            <div class="profile"><a class="welcome" href="dashboard.php">Welcome <?php echo $firstname; ?></a></div>
        </header>
        <div class="row">
            <div class="sidebar col-3">
                <ul>
                    <li><a href="dashboard.php?addcars">Add New Vehicle</a></li>
                    <li><a href="dashboard.php?viewcars">See <?php echo $firstname."'s"; ?> Cars</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="main_page col-9">
            
            
                        <?php if(isset($_GET['addcars'])){
        
                            include("new_car_form.php");
        
                        } else if (isset($_GET['viewcars'])) {
                            include ("viewcars.php");
                        }
                        ?>
            
            
            </div>
        </div>
        
        
    
    </body>


</html>
    
<?php    
    
}else{
    header("location: index.php");
}

?>