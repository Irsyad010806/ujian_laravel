<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Barang</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Daftar Barang</h1>
            
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 bg-white rounded shadow">
                    <thead>
                        <tr>
                            <th class="py-3 px-4 bg-gray-200 text-left font-semibold text-gray-700">Kode Barang</th>
                            <th class="py-3 px-4 bg-gray-200 text-left font-semibold text-gray-700">Nama Barang</th>
                            <th class="py-3 px-4 bg-gray-200 text-left font-semibold text-gray-700">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($barang as $item)
                            <tr class="border-b">
                                <td class="py-2 px-4">{{ $item->kode_barang }}</td>
                                <td class="py-2 px-4">{{ $item->nama }}</td>
                                <td class="py-2 px-4 text-red-600 font-bold">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-4 text-center text-gray-400">Tidak ada barang tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </body>    
</html>
