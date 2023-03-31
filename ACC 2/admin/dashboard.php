<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <!-- table -->
    <link rel="stylesheet" href="css/table.css">

    <title>Open VPN</title>
</head>

<body>


    <?php include_once('includes/header.php'); ?>

    <!-- content -->

    <div class="row m-3">

        <div class="table-responsive">
            <div class="table-wrapper rounded">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">

                            <a href="server_add.php" class="btn btn-primary" role="button">Add Server</a>

                        </div>


                    </div>

                    <table class="table table-striped table-hover table-bordered m-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Server Name</th>
                                <th>IP</th>
                                <th>Status</th>
                                <th>Action</th>
                                  
                            </tr>

                        </thead>
                        <tbody>

                            <?php
                            include '../config.php';
                            $q = "SELECT * FROM `servers`";
                            $fire = mysqli_query($conn, $q);

                            while ($d = mysqli_fetch_assoc($fire)) {

                                $id = $d['server_id'];
                                $name = $d['HostName'];

                    
                              $type =  $d['IP'];
                              $status= $d['Type']
                               
                              
                            
                            
                            ?>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $name ?></td>
                                     <td><?php echo $type ?></td>
                                       <td><?php 
                                        if($status=="1"){
                                   
                                  $status= "Free";
                               }
                               else{
                                   
                                  $status= "Paid";
                               }
                                       echo $status ?></td>
                                    <td id="action">

                                          <a class="edit" href="server_view.php?id=<?php echo $id ?>"><i class="far fa-edit"></i></a>
                                        <a class="delete" onclick="deleteServer(<?php echo $id ?>);"><i class="fa fa-trash"></i></a>

                                    </td>
                                </tr>


                            <?php
                            }
                            ?>




                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <?php include_once('includes/footer.php'); ?>


        <script>
            function deleteServer(id) {

                if (confirm('Are you sure you want to delete?')) {
                    window.location = "server_delete.php?id=" + id;
                    alert("Deleted..");
                } else {
                    alert("Cancelled..");
                }
            }
        </script>


</body>

</html>