google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['SEM', 'MID 1', 'MID 2', 'PRACTICALS'],
          ['1', 1000, 400, 200],
          ['2', 1170, 460, 250],
          ['3', 660, 1120, 300],
          ['4', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Examination Tracking',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }