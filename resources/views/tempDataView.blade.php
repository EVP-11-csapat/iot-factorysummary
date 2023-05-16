<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Test</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div
        class="container-fluid relative sm:flex sm:justify-center sm:items-center min-h-screen bg-gray-900 bg-dots-lighter bg-center text-white">

        <div class="grid xl:grid-cols-4 grid-cols-1 gap-4 p-4">

            <div class="xl:h-full h-96 overflow-auto xl:col-span-2">
                <h1 class="text-4xl font-normal tracking-tighter leading-normal mb-2 mt-0">All measurements</h1>
                <table class="table-auto border-collapse border border-gray-600 w-full">
                    <thead>
                        <tr>

                            <th class="p-2 bg-gray-800">id</th>
                            <th class="p-2 bg-gray-800">machineID</th>
                            <th class="p-2 bg-gray-800">measuredValue</th>
                            <th class="p-2 bg-gray-800">unitOf...</th>
                            <th class="p-2 bg-gray-800">dateOf...</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $m)
                            <tr>

                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">{{ $m->id }}
                                </td>
                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">{{ $m->machineID }}
                                </td>
                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">{{ $m->measuredValue }}
                                </td>
                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">
                                    {{ $m->unitOfMeasurement }}</td>
                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">
                                    {{ $m->dateOfMeasurement }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="xl:h-full h-96 overflow-auto">
                <h1 class="text-4xl font-normal tracking-tighter leading-normal mb-2 mt-0">All States</h1>
                <table class="table-auto border-collapse border border-gray-600 w-full">
                    <thead>
                        <tr>

                            <th class="p-2 bg-gray-800">id</th>
                            <th class="p-2 bg-gray-800">machineID</th>
                            <th class="p-2 bg-gray-800">isOpen</th>
                            <th class="p-2 bg-gray-800">dateOf...</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data1 as $m)
                            <tr>

                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">{{ $m->id }}
                                </td>
                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">{{ $m->machineID }}
                                </td>
                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">
                                    {{ $m->isOpen }}</td>
                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">
                                    {{ $m->dateOfState }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="xl:h-full h-96 overflow-auto">
                <h1 class="text-4xl font-normal tracking-tighter leading-normal mb-2 mt-0">All Machines</h1>
                <table class="table-auto border-collapse border border-gray-600 w-full">
                    <thead>
                        <tr>

                            <th class="p-2 bg-gray-800">id</th>
                            <th class="p-2 bg-gray-800">Section ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data2 as $m)
                            <tr>

                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">{{ $m->id }}
                                </td>
                                <td class="p-2 {{ $loop->odd ? 'bg-gray-700' : 'bg-gray-600' }}">{{ $m->sectionID }}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>
