<?php
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
$user = new App\front\auth\Auth();
$users = $user->index();
?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                BASIC EXAMPLE
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">                 <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sl = 1;
                            foreach ($users as $user){
                        ?>
                        <tr>
                            <td><?= $user['id']?></td>
                            <td><?= $user['name']?></td>
                            <td><?= $user['email']?></td>
                            <td>0<?= $user['phone']?></td>
                            
                            <td class="text-center">                                

                            <a href="" class="btn btn-success">view</a>

                            <a href="" class="btn btn-warning">Edit</a>

                            <a data-toggle="modal" data-target="#myModal" data-id="" class="btn btn-danger delete" href="javaScript:void(0)" >Delete</a>
                        </td>
                        </tr 
                        <?php } ?>                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- #END# Basic Examples -->
<?php
include_once '../include/footer.php'
?>