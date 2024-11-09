<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Polling Units for Ward {{ $wardId }}</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800">Polling Units for Ward {{ $wardId }}</h2>

        <table class="min-w-full table-auto mt-6">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="px-4 py-2 border">Polling Unit ID</th>
                    <th class="px-4 py-2 border">Polling Ward ID</th>
                    <th class="px-4 py-2 border">Polling LGA ID</th>
                    <th class="px-4 py-2 border">Polling Unit Number</th>
                    <th class="px-4 py-2 border">Polling Unit Name</th>
                    <th class="px-4 py-2 border">Polling Unit Description</th>
                    <th class="px-4 py-2 border">Latitude</th>
                    <th class="px-4 py-2 border">Longitude</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pollingUnits as $unit)
                    <tr class="text-gray-700">
                        <td class="px-4 py-2 border">{{ $unit->polling_unit_id }}</td>
                        <td class="px-4 py-2 border">{{ $unit->ward_id }}</td>
                        <td class="px-4 py-2 border">{{ $unit->lga_id }}</td>
                        <td class="px-4 py-2 border">{{ $unit->polling_unit_number }}</td>
                        <td class="px-4 py-2 border">{{ $unit->polling_unit_name }}</td>
                        <td class="px-4 py-2 border">{{ $unit->polling_unit_description }}</td>
                        <td class="px-4 py-2 border">{{ $unit->lat }}</td>
                        <td class="px-4 py-2 border">{{ $unit->long }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-6 flex justify-center"> 
            {{ $pollingUnits->links('pagination::tailwind') }}
        </div>
    </div>
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-gray-800 mt-8">Announced Results for Polling Units</h3>

        <table class="min-w-full table-auto mt-6">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="px-4 py-2 border">Polling Unit Unique ID</th>
                    <th class="px-4 py-2 border">Party Abbreviation</th>
                    <th class="px-4 py-2 border">Party Score</th>
                    <th class="px-4 py-2 border">Entered By</th>
                    <th class="px-4 py-2 border">Date Entered</th>
                    <th class="px-4 py-2 border">User IP Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pollingUnits as $unit)
                    @foreach ($unit->announcedPuResults as $result)
                        <tr class="text-gray-700">
                            <td class="px-4 py-2 border">{{ $result->polling_unit_uniqueid }}</td>
                            <td class="px-4 py-2 border">{{ $result->party_abbreviation }}</td>
                            <td class="px-4 py-2 border">{{ $result->party_score }}</td>
                            <td class="px-4 py-2 border">{{ $result->entered_by_user }}</td>
                            <td class="px-4 py-2 border">{{ $result->date_entered }}</td>
                            <td class="px-4 py-2 border">{{ $result->user_ip_address }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
        
        <table class="min-w-full table-auto mt-6">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="px-4 py-2 border">Party Abbreviation</th>
                    <th class="px-4 py-2 border">Total Votes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($partyTotals as $party => $totalScore)
                    <tr class="text-gray-700">
                        <td class="px-4 py-2 border">{{ $party }}</td>
                        <td class="px-4 py-2 border">{{ $totalScore }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

</body>
</html>
