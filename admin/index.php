<?php 

session_start();
require('config.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <?php require('master/link.php')?>
    </head>
    <body class="sb-nav-fixed">
        
<?php if(isset($_SESSION['name']) && !empty($_SESSION['name'])){?>





    <?php require('master/header.php')?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <?php require('master/sidenav.php')?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Enquire's
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Serial No.</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                          
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Serial No.</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                          
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $records = mysqli_query($conn, "SELECT * FROM `contact`");
                                        while($data = mysqli_fetch_array($records)){
                                        ?>
                                        <tr>
                                            <td><?php echo $data['id'];?></td>
                                            <td><?php echo $data['fullname'];?></td>
                                            <td><?php echo $data['email'];?></td>
                                            <td>
                                                <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['id'];?>"><img width="20" height="20" src="https://img.icons8.com/ios-filled/20/visible--v1.png" alt="visible--v1"/></a>
                                                <a href="delete_contact_enquire.php?id=<?php echo $data['id'];?>" onclick="return confirm('Are you sure?')"><img width="20" height="20" src="https://img.icons8.com/ios-glyphs/20/filled-trash.png" alt="filled-trash"/></a>
                                            </td>
                                           
                                        </tr>

                                        <div class="modal fade" id="exampleModal<?php echo $data['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $data['fullname'];?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Fullname: <?php echo $data['fullname'];?> </p>
                                                <p>email: <?php echo $data['email'];?> </p>
                                                <p>Subject: <?php echo $data['phone'];?> </p>
                                                <p>message: <?php echo $data['Cname'];?> </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                        <?php }?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require('master/footer.php')?>

            <?php }else{
                echo 'please login first';
            }?>
    </body>
</html>
