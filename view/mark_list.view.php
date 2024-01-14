<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>



    <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="card mt-5">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Marks List</h2>
                <a class="btn btn-sm btn-outline-info" href="mark_create.php">Add Student</a>
              </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Student Name</th>
                                <th>Bangla</th>
                                <th>English</th>
                                <th>Math</th>
                                <th>Physics</th>
                                <th>Chemistry</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($marks as $key=>$mark){

                            ?>
                                <tr>
                                    <td><?= $key+1 ?></td>
                                    <td><?= $mark['name'] ?></td>
                                    <td><?= $mark['bangla'] ?></td>
                                    <td><?= $mark['english'] ?></td> 
                                    <td><?= $mark['math'] ?></td> 
                                    <td><?= $mark['physics'] ?></td> 
                                    <td><?= $mark['chemistry'] ?></td> 
                                    <td>
                                      <div class="btn-group" role="group" >
                                          <a href="st_view.php?id=<?=base64_encode($mark['id'])?>" class="btn btn-sm btn-primary">View</a>

                                          <a href="st_edit.php?id=<?=base64_encode($mark['id'])?>" class="btn btn-sm btn-warning">Edit</a>

                                          <a href="st_delete.php?id=<?=base64_encode($mark['id'])?>" class="btn btn-sm btn-danger">Delete</a>
                                      </div>
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
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>