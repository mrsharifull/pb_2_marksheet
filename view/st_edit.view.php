<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>



    <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="card mt-5">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Student Edit</h2>
                <a class="btn btn-sm btn-outline-info" href="st_list.php">Back</a>
              </div>
                <div class="card-body">
                  
                  <form action="st_update.php?id=<?=$data['id']?>" method="POST">
                    <!-- <div class="form-group mb-3">
                      <input type="hidden" name="id" value="<?=$data['id']?>" class="form-control" >
                    </div> -->
                    <div class="form-group mb-3">
                      <input type="text" name="name" value="<?=$data['name']?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                      <input type="number" name="roll" value="<?=$data['roll']?>"  class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                      <input type="number" name="registration" value="<?=$data['registration']?>"  class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                      <input class="btn btn-sm btn-info" type="submit" name="submit" value="Submit">
                    </div>
                  </form>
                </div>
            </div>
           </div>
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>