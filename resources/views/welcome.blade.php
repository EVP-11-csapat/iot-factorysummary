<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Factory</title>
    @vite('resources/js/app.js')
    @vite('node_modules/chart.js/dist/chart.js')
</head>

<body>
<canvas id="myChart"></canvas>
<script type="module">
    Chart.register(...registerables);

    var data = @json($data);
    var labels = data.map(function (d) {
        return d.dateOfMeasurement;
    });
    var values = data.map(function (d) {
        return d.valueSum;
    });

    var chartData = {
        labels: labels,
        datasets: [{
            label: 'Power Consumption',
            data: values,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    window.onload = function () {
        var ctx = document.getElementById("myChart").getContext("2d");
        var chart = new Chart(ctx, {
            type: 'line',
            data: chartData,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    };
</script>
</body>

</html>
