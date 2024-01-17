<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marksheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="card mt-5">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h2><?= $data['name']?></h2>
                <a class="btn btn-sm btn-outline-info" href="mark_list.php">Back</a>
              </div>
                <div class="card-body">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Mark</th>
                                <th>Grade</th>
                                <th>GPA</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sum_gpa = 0;
                        foreach($marks as $subject=>$mark) {
                          if($mark >=80 && $mark <=100){
                              $grade = 'A+';
                              $gpa = '5.00';
                          }
                          elseif($mark >=70 && $mark <80){
                              $grade = 'A';
                              $gpa = '4.00';
                          }
                          elseif($mark >=60 && $mark <70){
                              $grade = 'A-';
                              $gpa = '3.50';
                          }
                          elseif($mark >=50 && $mark <60){
                              $grade = 'B';
                              $gpa = '3.00';
                          }
                          elseif($mark >=40 && $mark <50){
                              $grade = 'C';
                              $gpa = '2.50';
                          }
                          elseif($mark >=33 && $mark <40){
                              $grade = 'D';
                              $gpa = '2.00';
                          }
                          elseif($mark >=0 && $mark <33){
                              $grade = 'F';
                              $gpa = '0.00';
                          }else{
                              $grade = 'Invalid Mark';
                              $gpa = 'Invalid Mark';
                          }

                          if($gpa == '0.00'){
                            $sum_gpa = 0.00;
                          }else{
                            $sum_gpa += $gpa;
                          }

                          

                        ?>
                            <tr>
                                <td><?= $subject ?></td>
                                <td><?= $mark ?></td>
                                <td><?= $grade ?></td>
                                <td><?= $gpa ?></td>
                            </tr>

                        <?php
                          }

                          $total_gpa = $sum_gpa/5;
                        ?>  
                        <tr>
                                <th colspan="3" class="text-center">Total GPA</th>
                                <th><?= number_format($total_gpa, 2) ?></th>
                        </tr>
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