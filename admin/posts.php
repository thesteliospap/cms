<?php
ob_start();
?>
<?php include "includes/admin_header.php"; ?>
<?php include "functions.php"; ?>

<div id="wrapper">

    <?php if ($connection) echo "conn"; ?>
    <!-- Navigation -->


    <div id="page-wrapper">
        <?php include "includes/admin_navigation.php"; ?>

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12"> 
                <h1 class="page-header">
                        Welcome to admin's panel
                        <small>Author</small>
                </h1>
                <?php 
                if(isset($_GET['source'])){
                    $source = $_GET['source'];
                } else{
                    $source = '';
                }
                switch($source){
                    case '34';
                        echo 'NICE';
                    break;

                    case '100';
                        echo 'NICE 100';
                    break;

                    case '200';
                        echo 'NICE 200';
                    break;

                    default:
                        include "includes/view_all_posts.php";
                    break;

                }
                ?>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>