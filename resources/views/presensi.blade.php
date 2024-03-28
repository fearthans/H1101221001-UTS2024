<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="bg-indigo-500 text-white py-8">
        <h1 class="text-3xl font-bold text-center">Presensi Pegawai</h1>
        <p class="text-lg text-center mt-2">Selamat datang di sistem presensi pegawai. Silakan isi presensi Anda.</p>
    </div>
    <div class="container mx-auto py-8">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <form>
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Pegawai</label>
                            <input type="text" id="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-500">
                        </div>
                        <div class="mb-4">
                            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                            <input type="date" id="tanggal" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="mb-4">
                            <label for="jam" class="block text-sm font-medium text-gray-700">Jam Masuk</label>
                            <input type="time" id="jam" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="mb-4">
                            <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                            <select id="lokasi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="" disabled selected>Pilih Lokasi</option>
                                <option value="Gedung A">Gedung A</option>
                                <option value="Gedung B">Gedung B</option>
                                <option value="Gedung C">Gedung C</option>
                                <option value="Gedung D">Gedung D</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300">Presensi Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
