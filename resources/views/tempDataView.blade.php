<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div
        class="container-fliud relative sm:flex sm:justify-center sm:items-center min-h-screen bg-gray-900 bg-dots-lighter bg-center text-white">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>machineID</th>
                    <th>measuredValue</th>
                    <th>unitOf...</th>
                    <th>dateOf...</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $m)
                    <tr>
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->machineID }}</td>
                        <td>{{ $m->measuredValue }}</td>
                        <td>{{ $m->unitOfMeasurement }}</td>
                        <td>{{ $m->dateOfMeasurement }}</td>
                    </tr>
                @endforeach
            </tbody>
    </div>
</body>

</html>
