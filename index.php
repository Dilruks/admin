<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

       $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];

        
        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_district = $row_admin['admin_district'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];


        
        $get_place = "select * from place";
        
        $run_place = mysqli_query($con,$get_place);
        
        $count_place = mysqli_num_rows($run_place);
        
        $get_tbl_customer = "select * from tbl_customer";
        
        $run_tbl_customer = mysqli_query($con,$get_tbl_customer);
        
        $count_tbl_customer = mysqli_num_rows($run_tbl_customer);
        
        $get_guide = "select * from guide ";
        
        $run_guide  = mysqli_query($con,$get_guide);
        
        $count_guide = mysqli_num_rows($run_guide );
        
        $get_category = "select * from category";
        
        $run_category = mysqli_query($con,$get_category);
        
        $count_category = mysqli_num_rows($run_category);

        $get_pending_request = "select * from pending_request";

        $run_pending_request = mysqli_query($con,$get_pending_request);

        $count_pending_request= mysqli_num_rows($run_pending_request);
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./admin_images/favicon-3.png" type="image/x-icon" />
    <title>Jet Set Go</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }

                if(isset($_GET['insert_place'])){
                        
                    include("insert_place.php");
                    
                }

                if(isset($_GET['view_place'])){
                        
                    include("view_place.php");
                    
                }

                if(isset($_GET['delete_place'])){
                        
                    include("delete_place.php");
                    
                }

                if(isset($_GET['edit_place'])){
                        
                    include("edit_place.php");
                    
                }
                if(isset($_GET['view_p_cats'])){
                        
                    include("view_p_cats.php");
                    
                }
              
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>

<?php } ?>
