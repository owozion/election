<?php
session_start();
// require_once "classes/Unit.php";
require_once "classes/Lga.php";





$t = new Lga;
$lgas =$t->fetch_lga();


$punit=$_SESSION['lganamed'];

$p = new Lga;
$party =$p->fetch_party();
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
                    <form action="process/process_total.php" method="POST">
                    <label for="" class="col-6 text-white">Choose LGA</label>
                    <select name="lga" id="lga" class="form-select">
                        <option value="">Select One</option>
                        <?php
                        foreach($lgas as $lga){
                            $lganame = $lga['lga_name'];
                            $lgaid = $lga['lga_id'];
                            echo "<option value='$lgaid'>$lganame</option>";
                           
                        }
                        ?>
                        </select>
                        <label for="" class="col-6 text-white">Choose Party</label>
                    <select name="party" id="party" class="form-select">
                        <option value="">Select One</option>
                        <?php
                        foreach($party as $part){
                            $partname = $part['partyname'];
                            $partid = $part['partyid'];
                            echo "<option value='$partid'>$partname</option>";
                        }
                        ?>
                        </select>
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
                               &nbsp;&nbsp; 
                               <?php
                               if(isset($_SESSION['errormsg'])){
                                echo "<div class='alert alert-danger'>". $_SESSION['errormsg'] ."</div>";
                                unset($_SESSION['errormsg']);
                               }
                             
                               ?>
                               <h1 class="profile" style="color:green; text-align:centre;">Results By LGA</h1>
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
                                        <th scope="col">Total Party Vote</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(is_array($punit) ){
                                        $counter = 1;
                                        foreach($punit as $pro){
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $counter;?></th>
                                        <td scope="font-weight-bolder"><?php echo htmlspecialchars($pro);?></td>
                                    
                                    </tr>
                                    <?php
                                    $counter ++;
                                        }
                                        }
                                        
                                        ?>
                                        
                                        
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