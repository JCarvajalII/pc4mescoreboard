<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            margin: 0px;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        #sump {
            display: inline-block;
        }

    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- Ionicons  -->
    <script src="https://unpkg.com/ionicons@4.2.0/dist/ionicons.js"></script>
    <title>Scoreboard</title>
</head>

<body>
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class=" text-center">
                    <ion-icon name="trending-up"></ion-icon>Scoreboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="overall" class="container-fluid tab-pane active"><br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4" style="background-color: white; padding: 20px;">
                                    <div class="card">
                                        <h1 class="card-header">Total Score</h1>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card-header">Today</div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card-header">This Month</div>
                                        </div>
                                    </div>
                                    <?php
                                        include_once 'php/connectDB.php';
                                        include_once 'php/test.php';
                                        $sql = "SELECT openticket_score, overdueticket_score, pickupticket_score, orderedpartticket_score, rmaticket_score FROM ticketsday ORDER BY td_id DESC LIMIT 1;";
                                        $result = $db_con->query($sql);
                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($data as $row){
                                            $totalScore = ($row['openticket_score'] + $row['overdueticket_score'] + $row['pickupticket_score'] + $row['orderedpartticket_score'] + $row['rmaticket_score'])/5;
                                            if ($totalScore > 50) {
                                                echo "<p class=\"display-1 text-success\" style=\"font-size: 110px;\">" . $totalScore . "%</p>";
                                            } else if($totalScore == 50) {
                                                echo "<p class=\"display-1 text-warning\" style=\"font-size: 110px;\">" . $totalScore . "%</p>";
                                            } else {
                                                echo "<p class=\"display-1 text-danger\" style=\"font-size: 110px;\">" . $totalScore . "%</p>";
                                            }
                                        }
                                    ?>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:77.2%;">77.2%</div>
                                        </div>
                                        <!--
                                    <p>Very Good!
                                        <ion-icon name="happy"></ion-icon>
                                    </p>
-->
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header">Yesterday</div>
                                                </div>
                                                <p class="display-4">ASD</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header">Last Month</div>
                                                </div>
                                                <p class="display-4">ASD</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-sm-8" style="background-color: white; padding: 20px;">
                                    <div class="card">
                                        <h1 class="card-header" style="background: ;">Summary</h1>
                                    </div>
                                    <br>
                                    <div class="row ">
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-header h4" style="background: #4dff4d;">
                                                    <ion-icon name="open"></ion-icon>&nbsp;Open
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                        $sql = "SELECT td_id ,open_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1;";
                                                        $result = $db_con->query($sql);
                                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach($data as $row){
                                                            $sqlUpdateOpenScore = "UPDATE `ticketsday` SET `openticket_score`='" . getOpenPercentage($row['open_ticket_day']) . "', `date`=NOW() WHERE td_id='" . $row['td_id'] . "';";
                                                            $stmt = $db_con->prepare($sqlUpdateOpenScore);
                                                            $stmt->execute();
                                                            echo "<h5 id=\"sump\" class=\"text-left\">Score:<span id=\"OPENScore\">&nbsp;" . getOpenPercentage($row['open_ticket_day']) . "</span></h5>";      
                                                        }
                                                    ?>

                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-header h4" style="background: #4d4dff;">
                                                    <ion-icon name="thumbs-up"></ion-icon>Pick Up
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                        $sql = "SELECT td_id ,pickup_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1;";
                                                        $result = $db_con->query($sql);
                                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach($data as $row){
                                                            $sqlUpdatePickUPScore = "UPDATE `ticketsday` SET `pickupticket_score`='" . getPickUpPercentage($row['pickup_ticket_day']) . "', `date`=NOW() WHERE td_id='" . $row['td_id'] . "';";
                                                            $stmt = $db_con->prepare($sqlUpdatePickUPScore);
                                                            $stmt->execute();
                                                            echo "<h5 id=\"sump\" class=\"text-left\">Score:<span id=\"PICKUPScore\">&nbsp;" . getPickUpPercentage($row['pickup_ticket_day']) . "</span></h5>";  
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-header h4" style="background: #ff704d;">
                                                    <ion-icon name="cart"></ion-icon>Ordered Parts
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                        $sql = "SELECT td_id ,orderedpart_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1;";
                                                        $result = $db_con->query($sql);
                                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach($data as $row){
                                                            $sqlUpdateOrderedPartScore = "UPDATE `ticketsday` SET `orderedpartticket_score`='" . getOrderedPartsPercentage($row['orderedpart_ticket_day']) . "', `date`=NOW() WHERE td_id='" . $row['td_id'] . "';";
                                                            $stmt = $db_con->prepare($sqlUpdateOrderedPartScore);
                                                            $stmt->execute();
                                                            echo "<h5 id=\"sump\" class=\"text-left\">Score:<span id=\"ORDEREDPARTScore\">&nbsp;" . getOrderedPartsPercentage($row['orderedpart_ticket_day']) . "</span></h5>";  
                                                        }
                                                    ?>

                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header h4" style="background: #ffff4d;">
                                                    <ion-icon name="alert"></ion-icon>&nbsp;Overdue
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                        $sql = "SELECT td_id ,overdue_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1;";
                                                        $result = $db_con->query($sql);
                                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach($data as $row){
                                                            $sqlUpdateOverdueScore = "UPDATE `ticketsday` SET `overdueticket_score`='" . getOverduePercentage($row['overdue_ticket_day']) . "', `date`=NOW() WHERE td_id='" . $row['td_id'] . "';";
                                                            $stmt = $db_con->prepare($sqlUpdateOverdueScore);
                                                            $stmt->execute();
                                                            echo "<h5 id=\"sump\" class=\"text-left\">Score:<span id=\"OVERDUEScore\">&nbsp;" . getOverduePercentage($row['overdue_ticket_day']) . "</span></h5>";   
                                                        }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-header h4" style="background: #ffc34d;">
                                                    <ion-icon name="return-left"></ion-icon>RMA
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                        $sql = "SELECT td_id , rma_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1;";
                                                        $result = $db_con->query($sql);
                                                        $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        foreach($data as $row){
                                                            $sqlUpdateRMAScore = "UPDATE `ticketsday` SET `rmaticket_score`='" . getRMAPercentage($row['rma_ticket_day']) . "', `date`=NOW() WHERE td_id='" . $row['td_id'] . "';";
                                                            $stmt = $db_con->prepare($sqlUpdateRMAScore);
                                                            $stmt->execute();
                                                            echo "<h5 id=\"sump\" class=\"text-left\">Score:<span id=\"RMAScore\">&nbsp;" . getRMAPercentage($row['rma_ticket_day']) . "</span></h5>";  
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card-footer">
                                        <a href="php/overallSummary.php">
                                            <h4>View Details</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/open.js"></script>

</body>

</html>
