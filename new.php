<?php
session_start();
require_once "classes/Unit.php";


// $t = new Unit;
// $punit=$t->search_polling_unit($polling);
// $punit=$_SESSION["named"];
// print_r($punit);
// die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polling Unit Result</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container bg-primary">
        <div class="row">
            <h1 class="text-warning align-center">Check Election Results</h1>
            <div class="col-12 my-4">
                <div class="col-6 m">
                    <form action="process/process_index.php" method="POST">
                    <label for="" class="col-6 text-white">Polling Unit Name</label>
                    <input type="text" class="form-control col-6" name="name" placeholder="Please provide polling unit name">
                    <input type="submit" id="btn" name="btn" class="btn btn-success" value="Generate Result">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <main>
                <div class="container-fluid px-4">
                    <div class="card mb-4">
                        <div class="card-body">
                               <h1 class="profile" style="color:green; text-align:centre;">Results for New Polling Unit</h1>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                
                        </div>
                            <div class="card-body">
                               <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Polling Unit Name</th>
                                        <th scope="col">Party</th>
                                        <th scope="col">Vote</th>
                                        <th scope="col">Date/Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <th scope="col"></th>
                                        <td scope="col"></td>
                                        <td scope="col"></td>
                                        <td scope="col"></td>
                                        <td scope="col"></td>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>