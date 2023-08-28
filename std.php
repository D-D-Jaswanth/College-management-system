<?php
include 'connection.php';
include './includes/navbar1.php';
include './includes/header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewreport" context="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles\style2.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <!-- <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Abscent',      2],
          ['Present', 2],
        ]);

        var options = {
          title: 'Attendance Tracking'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script> -->

</head>
<body>
    
    <section class="std-dashboard">

        <div class="dashboard-content">

            <div class="top-content">
                <span class="title">STUDENT DASHBOARD</span>
            </div>

            <div class="card">

                <div class="card1">

                    <div class="title">
                        <span>Attendance Tracking</span>
                    </div>
                    <div class="card-content">
                        <div id="piechart"></div>
                    </div>

                </div>

                <div class="card2">

                    <div class="title">
                        <span>Behaviour Tracking</span>
                    </div>
                    <div class="card-content">
                        <div id="linechart_material"></div>
                    </div>

                </div>

                <div class="card3">

                    <div class="title">
                        <span>Examination Tracking</span>
                    </div>
                    <div class="card-content">
                        <div id="barchart_material"></div>
                    </div>

                </div>

                <!-- <div class="card4">

                    <div class="title">
                        <span>Assignments Tracking</span>
                    </div>
                    <div class="card-content">
                    
                    </div>

                </div> -->

            </div>

        </div>

    </section>
    <script src="charts\piechart.js"></script>
    <script src="charts\linechart.js"></script>
    <script src="charts\barchart.js"></script>
</body>
</html>