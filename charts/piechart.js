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
