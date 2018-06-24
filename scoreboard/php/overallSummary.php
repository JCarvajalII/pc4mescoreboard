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
            width: 88.4px;
        }

    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/ionicons@4.2.0/dist/ionicons.js"></script>
    <title>Summary</title>
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
                <div class="card">
                    <h1 class="card-header">
                        <a href="../index.php">
                            <ion-icon name="arrow-round-back"></ion-icon>
                        </a>Overall Summary</h1>
                </div>
            </div>
        </div>
        <br>
        <h4>As of <span id="date"></span></h4>
        <script type="text/javascript" src="../js/overallSummary.js" async></script>
        <div class="row">
            <div class="col-sm-8">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Ticket Type</th>
                            <th>No. of Tickets of the Day</th>
                            <th>Threshold</th>
                            <th>Score</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Open</td>
                            <?php
                                include_once 'connectDB.php';
                                include_once 'test.php';
                                $sql = "SELECT open_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td>" . $row['open_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>15</td>
                                <?php
                                $sql = "SELECT openticket_score FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td>" . $row['openticket_score'] . "%</td>";
                                }
                            ?>
                        </tr>
                        <tr>
                            <td>Pick Up</td>
                            <?php
                                include_once 'connectDB.php';
                                include_once 'test.php';
                                $sql = "SELECT pickup_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td>" . $row['pickup_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>15</td>
                                <?php
                                $sql = "SELECT pickupticket_score FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td>" . $row['pickupticket_score'] . "%</td>";
                                }
                            ?>
                        </tr>
                        <tr>
                            <td>RMA</td>
                            <?php
                                include_once 'connectDB.php';
                                include_once 'test.php';
                                $sql = "SELECT rma_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td>" . $row['rma_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>5</td>
                                <?php
                                $sql = "SELECT rmaticket_score FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td>" . $row['rmaticket_score'] . "%</td>";
                                }
                            ?>
                        </tr>
                        <tr>
                            <td>Ordered Parts</td>
                            <?php
                                include_once 'connectDB.php';
                                include_once 'test.php';
                                $sql = "SELECT orderedpart_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td>" . $row['orderedpart_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>5</td>
                                <?php
                                $sql = "SELECT orderedpartticket_score FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td>" . $row['orderedpartticket_score'] . "%</td>";
                                }
                            ?>
                        </tr>
                        <tr>
                            <td>Overdue</td>
                            <?php
                                include_once 'connectDB.php';
                                include_once 'test.php';
                                $sql = "SELECT overdue_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td>" . $row['overdue_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>0</td>
                                <?php
                                $sql = "SELECT overdueticket_score FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td>" . $row['overdueticket_score'] . "%</td>";
                                }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Total number of units today</div>
                    <?php
                        $sql = "";
                    ?>
                        <div class="card-body"></div>
                </div>

            </div>
        </div>
        <h4>As of <span id="date2"></span></h4>
        <script type="text/javascript" src="../js/overallSummary.js" async></script>
        <div class="row">
            <div class="col-sm-8">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Ticket Type</th>
                            <th>No. of Tickets of the Month</th>
                            <th>Threshold</th>
                            <th>Score</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Open</td>
                            <?php
                            include_once 'connectDB.php';
                            include_once 'test.php';
                            $sql = "SELECT open_ticket_day FROM ticketsday;";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($data as $row){
                                $sum = $sum + $row['open_ticket_day'];
                            }
                            echo "<td>" . $sum . "</td>";
                            ?>
                                <td></td>
                                <td></td>
                        </tr>
                        <tr>
                            <td>Pick Up</td>
                            <?php
                            include_once 'connectDB.php';
                            include_once 'test.php';
                            $sql = "SELECT pickup_ticket_day FROM ticketsday;";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($data as $row){
                                $sum2 = $sum2 + $row['pickup_ticket_day'];
                            }
                            echo "<td>" . $sum2 . "</td>";
                            ?>
                                <td></td>
                                <td></td>
                        </tr>
                        <tr>
                            <td>RMA</td>
                            <?php
                            include_once 'connectDB.php';
                            include_once 'test.php';
                            $sql = "SELECT rma_ticket_day FROM ticketsday;";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($data as $row){
                                $sum3 = $sum3 + $row['rma_ticket_day'];
                            }
                            echo "<td>" . $sum3 . "</td>";
                            ?>
                                <td></td>
                                <td></td>
                        </tr>
                        <tr>
                            <td>Ordered Parts</td>
                            <?php
                            include_once 'connectDB.php';
                            include_once 'test.php';
                            $sql = "SELECT orderedpart_ticket_day FROM ticketsday;";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($data as $row){
                                $sum4 = $sum4 + $row['orderedpart_ticket_day'];
                            }
                            echo "<td>" . $sum4 . "</td>";
                            ?>
                                <td></td>
                                <td></td>
                        </tr>
                        <tr>
                            <td>Overdue</td>
                            <?php
                            include_once 'connectDB.php';
                            include_once 'test.php';
                            $sql = "SELECT overdue_ticket_day FROM ticketsday;";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($data as $row){
                                $sum5 = $sum5 + $row['overdue_ticket_day'];
                            }
                            echo "<td>" . $sum5 . "</td>";
                            ?>
                                <td></td>
                                <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Total number of units this month</div>
                    <div class="card-body"></div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>
