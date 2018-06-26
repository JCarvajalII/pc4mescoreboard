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

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="#">PIC</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="overallSummary.php">Summary</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid bg-light">
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <h1 class="card-header">Overall Summary</h1>
                </div>
            </div>
        </div>
        <br>
        <h4>Summary for the Day - <span id="date"></span></h4>
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
                                include_once 'getPercentage.php';
                                $sql = "SELECT open_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE) AND DAY(date) = DAY(CURRENT_DATE);";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                $numopen = 0;
                                foreach ($data as $row){
                                    $numopen = $row['open_ticket_day'];
                                }
                                if(empty($numopen)){
                                    echo "<td id=\"numofopen\">0</td>";
                                }else {
                                    echo "<td id=\"numofopen\">" . $row['open_ticket_day'] . "</td>";
                                }
                            ?>
                                <td>15</td>
                                <?php
                                $sql = "SELECT open_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE) AND DAY(date) = DAY(CURRENT_DATE);";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                $openscore = 0;
                                foreach ($data as $row){
                                    $openscore = $row['open_ticket_day'];
                                }
                                if(empty($openscore)) {
                                    echo "<td id=\"openScore\">" . getOpenPercentage(0) . "</td>";
                                } else {
                                    echo "<td id=\"openScore\">" . getOpenPercentage($openscore) . "</td>";   
                                }
                            ?>

                        </tr>
                        <tr>
                            <td>Pick Up</td>
                            <?php
                                $sql = "SELECT pickup_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE) AND DAY(date) = DAY(CURRENT_DATE);";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                $numpickup = 0;
                                foreach ($data as $row){
                                    $numpickup = $row['pickup_ticket_day'];
                                }
                                if (empty($numpickup)) {
                                    echo "<td id=\"numofpickup\">0</td>";
                                } else {
                                    echo "<td id=\"numofpickup\">" . $row['pickup_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>15</td>
                                <?php
                                $sql = "SELECT pickup_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE) AND DAY(date) = DAY(CURRENT_DATE);";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                $pickupscore = 0;
                                foreach ($data as $row){
                                    $pickupscore = $row['pickup_ticket_day'];
                                }
                                if (empty($pickupscore)) {
                                    echo "<td id=\"pickupScore\">" . getPickUpPercentage(0) . "</td>";
                                } else {
                                    echo "<td id=\"pickupScore\">" . getPickUpPercentage($row['pickup_ticket_day']) . "</td>";
                                }
                            ?>
                        </tr>
                        <tr>
                            <td>RMA</td>
                            <?php
                                $sql = "SELECT rma_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE) AND DAY(date) = DAY(CURRENT_DATE);";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td id=\"numofrma\">" . $row['rma_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>5</td>
                                <?php
                                $sql = "SELECT rma_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE) AND DAY(date) = DAY(CURRENT_DATE);";
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
                                $sql = "SELECT orderedpart_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE) AND DAY(date) = DAY(CURRENT_DATE);";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td id=\"numoforderedpart\">" . $row['orderedpart_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>5</td>
                                <?php
                                $sql = "SELECT orderedpart_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE) AND DAY(date) = DAY(CURRENT_DATE);";
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
                                $sql = "SELECT overdue_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE) AND DAY(date) = DAY(CURRENT_DATE);";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td id=\"numofoverdue\">" . $row['overdue_ticket_day'] . "</td>";
                                }
                                
                            ?>
                                <td>0</td>
                                <?php
                                $sql = "SELECT overdue_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE) AND DAY(date) = DAY(CURRENT_DATE);";
                                $result = $db_con->query($sql);
                                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($data as $row){
                                    echo "<td id=\"overdueScore\">" . getOverduePercentage($row['overdue_ticket_day']) . "</td>";
                                }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">Total units today</div>
                            <div class="card-body" id="totalunitsday" style="font-size:35px;"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">Ave. Score</div>
                            <div class="card-body" id="aveScoreDay" style="font-size:35px;"></div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body"></div>
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
                            $sql = "SELECT open_ticket_day, date FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE);";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $sumopentickets = 0;
                            foreach ($data as $row){
                                $sumopentickets = $sumopentickets + $row['open_ticket_day'];
                            }
                            echo "<td id=\"sumopentickets\">" . $sumopentickets . "</td>";
                            ?>
                                <td id="openMonthThre">50</td>
                                <td id="openMonthPer">0%</td>
                        </tr>
                        <tr>
                            <td>Pick Up</td>
                            <?php
                            $sql = "SELECT pickup_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE);";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $sumpickuptickets = 0;
                            foreach ($data as $row){
                                $sumpickuptickets = $sumpickuptickets + $row['pickup_ticket_day'];
                            }
                            echo "<td id=\"sumpickuptickets\">" . $sumpickuptickets . "</td>";
                            ?>
                                <td id="pickupMonthThres">50</td>
                                <td id="pickupMonthPer">0%</td>
                        </tr>
                        <tr>
                            <td>RMA</td>
                            <?php
                            $sql = "SELECT rma_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE);";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $sumrmatickets = 0;
                            foreach ($data as $row){
                                $sumrmatickets = $sumrmatickets + $row['rma_ticket_day'];
                            }
                            echo "<td id=\"sumrmatickets\">" . $sumrmatickets . "</td>";
                            ?>
                                <td id="rmaMonthThres">25</td>
                                <td id="rmaMonthPer">0%</td>
                        </tr>
                        <tr>
                            <td>Ordered Parts</td>
                            <?php
                            $sql = "SELECT orderedpart_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE);";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $sumorderedpartstickets = 0;
                            foreach ($data as $row){
                                $sumorderedpartstickets = $sumorderedpartstickets + $row['orderedpart_ticket_day'];
                            }
                            echo "<td id=\"sumorderedpartstickets\">" . $sumorderedpartstickets . "</td>";
                            ?>
                                <td id="orderedpartMonthThres">25</td>
                                <td id="orderedpartMonthPer">0%</td>
                        </tr>
                        <tr>
                            <td>Overdue</td>
                            <?php
                            $sql = "SELECT overdue_ticket_day FROM ticketsday WHERE YEAR(date) = YEAR(CURRENT_DATE) AND MONTH(date) = MONTH(CURRENT_DATE);";
                            $result = $db_con->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            $sumoverduetickets = 0;
                            foreach ($data as $row){
                                $sumoverduetickets = $sumoverduetickets + $row['overdue_ticket_day'];
                            }
                            echo "<td id=\"sumoverduetickets\">" . $sumoverduetickets . "</td>";
                            ?>
                                <td id="overdueMonthThres">0</td>
                                <td id="overdueMonthPer">0%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">Total units this month</div>
                            <div class="card-body" id="totalsummonth" style="font-size:35px;"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">Ave. Score</div>
                            <div class="card-body" id="aveScoreMonth" style="font-size:35px;">0%</div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body"></div>
                </div>
            </div>

        </div>

    </div>
    <script type="text/javascript" src="../js/main.js" async></script>
</body>

</html>
