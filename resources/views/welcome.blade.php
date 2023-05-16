<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Factory</title>
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center">Status Page</h1>
        <div class="grid grid-cols-3 gap-4 mt-8">
            <div class="col-span-1">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
            <div class="col-span-1">
                <canvas id="myChart2" width="400" height="400"></canvas>
            </div>
            <div class="col-span-1">
                <canvas id="myChart3" width="400" height="400"></canvas>
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <span class="font-bold mr-1">Current water consumption: </span> {{ $waterConsumption }}
        </div>
        <div class="flex justify-center mt-4">
            <span class="font-bold mr-1">Number of sections: </span> {{ $numberOfSections }}
        </div>
        <div class="flex justify-center mt-4">
            <span class="font-bold mr-1">Number of machines: </span> {{ $numberOfMachines }}
        </div>
        <div class="flex justify-center mt-4">
            <a href="/test" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go to
                Measurements Table</a>
        </div>
    </div>
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

    var data2 = @json($data2);
    var labels2 = data2.map(function (d) {
        return d.dateOfMeasurement;
    });
    var values2 = data2.map(function (d) {
        return d.valueSum;
    });

    var chartData2 = {
        labels: labels2,
        datasets: [{
            label: 'Total pieces produced',
            data: values2,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    var data3 = @json($data3);
    var labels3 = data3.map(function (d) {
        return d.dateOfMeasurement;
    });
    var values3 = data3.map(function (d) {
        return d.valueSum;
    });

    var chartData3 = {
        labels: labels3,
        datasets: [{
            label: 'Total m3',
            data: values3,
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

        var ctx2 = document.getElementById("myChart2").getContext("2d");
        var chart2 = new Chart(ctx2, {
            type: 'line',
            data: chartData2,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctx3 = document.getElementById("myChart3").getContext("2d");
        var chart3 = new Chart(ctx3, {
            type: 'line',
            data: chartData3,
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
