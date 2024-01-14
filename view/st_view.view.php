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
                <h2><?= $data['name']?> Details</h2>
                <a class="btn btn-sm btn-outline-info" href="st_list.php">Back</a>
              </div>
                <div class="card-body">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>:</th>
                                <td><?=$data['name']?></td>
                               
                            </tr>
                            <tr>
                                <th>Roll</th>
                                <th>:</th>
                                <td><?=$data['roll']?></td>
                               
                            </tr>
                            <tr>
                                <th>Registration</th>
                                <th>:</th>
                                <td><?=$data['registration']?></td>
                               
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <th>:</th>
                                <td><?=date('d,M,Y',strtotime($data['created_at']))?></td>
                               
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <th>:</th>
                                <td><?=($data['updated_at']) ? (date('d,M,Y',strtotime($data['updated_at']))) : "N/A" ?></td>
                               
                            </tr>
                        </thead>
                        <tbody>
                         
                           
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