
<html><!-- Latest compiled and minified CSS -->

<head>    

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />   

    
</head>
    
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            
            <div class="col-sm-8">
                
                
                
                <?php
                include("form.php");
                ?>
                
            <form method="post" action="findcar.php" id="find_car">
                <input type="text" class="form-control" name="car_no" id="car_id" placeholder="Enter A Vehicle Registration Number">
                <input type="submit" class="btn btn-primary" name="submit" id="btn">
            </form>   
                
            </div>
            
            <div class="col-sm-2"></div>
        </div>
        
    
    </div>
    

<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script type='text/javascript'>
    
        swal('Connected');
        $('#btn').click(function(e){
            var car_id = $('#car_id').val();
            $.ajax({
            type: 'post',
            dataType: 'text',
            url: 'findcar.php',
            data: 'car_no='+car_id,
            success: function(result){
                swal(result);
            }
        })
        e.preventDefault();
        });
</script>

?>
</body>
</html>
