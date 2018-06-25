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
        <h4>Summary for the Day - <span id="date"></span></h4>
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
                                    echo "<td id=\"numofopen\">" . $row['open_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>15</td>
                                <?php
                                $sql = "SELECT open_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td id=\"openScore\">" . getOpenPercentage($row['open_ticket_day']) . "</td>";
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
                                    echo "<td id=\"numofpickup\">" . $row['pickup_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>15</td>
                                <?php
                                $sql = "SELECT pickup_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td id=\"pickupScore\">" . getPickUpPercentage($row['pickup_ticket_day']) . "</td>";
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
                                    echo "<td id=\"numofrma\">" . $row['rma_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>5</td>
                                <?php
                                $sql = "SELECT rma_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td id=\"rmaScore\">" . getRMAPercentage($row['rma_ticket_day']) . "</td>";
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
                                    echo "<td id=\"numoforderedpart\">" . $row['orderedpart_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>5</td>
                                <?php
                                $sql = "SELECT orderedpart_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td id=\"orderedpartScore\">" . getOrderedPartsPercentage($row['orderedpart_ticket_day']) . "</td>";
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
                                    echo "<td id=\"numofoverdue\">" . $row['overdue_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>0</td>
                                <?php
                                $sql = "SELECT overdue_ticket_day FROM ticketsday ORDER BY td_id DESC LIMIT 1";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td id=\"overdueScore\">" . getOverduePercentage($row['overdue_ticket_day']) . "</td>";
                                }
                            ?>
                        </tr>
                        <tr>
                            <td>All</td>
                            <td id="totalunitsday"></td>
                            <td>40</td>
                            <td id="aveScore"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Total number of units today</div>
                    <div class="card-body display-4" style="font-size:35px;"></div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">Overall Average Units/day</div>
                    <div id="totalunitsday" class="card-body display-4" style="font-size:35px;">SAMPLE</div>
                </div>

            </div>
        </div>
        <br>
        <div class="header">
            <h4>Summary for the Month of <span id="date2"></span></h4>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Ticket Type</th>
                            <th>No. of Tickets of the Month</th>
                            <th>Threshold</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Open</td>
                            <?php
                            include_once 'connectDB.php';
                            include_once 'test.php';
                            $sql = "SELECT open_ticket_day, date FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE);";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $sumopentickets = 0;
                            foreach ($data as $row){
                                $sumopentickets = $sumopentickets + $row['open_ticket_day'];
                            }
                            echo "<td id=\"sumopentickets\">" . $sumopentickets . "</td>";
                            ?>
                                <td>50</td>
                                <td></td>
                        </tr>
                        <tr>
                            <td>Pick Up</td>
                            <?php
                            include_once 'connectDB.php';
                            include_once 'test.php';
                            $sql = "SELECT pickup_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE);";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $sumpickuptickets = 0;
                            foreach ($data as $row){
                                $sumpickuptickets = $sumpickuptickets + $row['pickup_ticket_day'];
                            }
                            echo "<td id+\"sumpickuptickets\">" . $sumpickuptickets . "</td>";
                            ?>
                                <td>50</td>
                                <td></td>
                        </tr>
                        <tr>
                            <td>RMA</td>
                            <?php
                            include_once 'connectDB.php';
                            include_once 'test.php';
                            $sql = "SELECT rma_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE);";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $sumrmatickets = 0;
                            foreach ($data as $row){
                                $sumrmatickets = $sumrmatickets + $row['rma_ticket_day'];
                            }
                            echo "<td id=\"sumrmatickets\">" . $sumrmatickets . "</td>";
                            ?>
                                <td>25</td>
                                <td></td>
                        </tr>
                        <tr>
                            <td>Ordered Parts</td>
                            <?php
                            include_once 'connectDB.php';
                            include_once 'test.php';
                            $sql = "SELECT orderedpart_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE);";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $sumorderedpartstickets = 0;
                            foreach ($data as $row){
                                $sumorderedpartstickets = $sumorderedpartstickets + $row['orderedpart_ticket_day'];
                            }
                            echo "<td id=\"sumorderedpartstickets\">" . $sumorderedpartstickets . "</td>";
                            ?>
                                <td>25</td>
                                <td></td>
                        </tr>
                        <tr>
                            <td>Overdue</td>
                            <?php
                            include_once 'connectDB.php';
                            include_once 'test.php';
                            $sql = "SELECT overdue_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE);";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $sumoverduetickets = 0;
                            foreach ($data as $row){
                                $sumoverduetickets = $sumoverduetickets + $row['overdue_ticket_day'];
                            }
                            echo "<td id=\"sumoverduetickets\">" . $sumoverduetickets . "</td>";
                            ?>
                                <td>0</td>
                                <td></td>
                        </tr>
                        <tr>
                            <td>All</td>
                            <td id="totalsummonth"></td>
                            <td>150</td>
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
    <script type="text/javascript" src="../js/addUnitsDay.js" async></script>
    <script type="text/javascript" src="../js/overallSummary.js" async></script>
    <script type="text/javascript" src="../js/aveScoreDay.js" async></script>
    <script type="text/javascript" src="../js/addUnitsMonth.js" async></script>
</body>

</html>
