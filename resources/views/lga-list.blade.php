<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select LGA</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-12 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Select a LGA</h2>
        
        <p class="text-gray-600 mb-6">Select a Local Government Area (LGA) from the list below to view its wards.</p>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($lgas as $lga)
                <div>
                    <a href="{{ route('lga.wards', ['stateId' => $stateId, 'lgaId' => $lga->lga_id]) }}" 
                       class="block text-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        {{ $lga->lga_name }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
