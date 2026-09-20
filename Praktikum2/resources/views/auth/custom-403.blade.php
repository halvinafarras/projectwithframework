<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>403 - Akses Ditolak</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full text-center">
        <div class="w-16 h-16 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
            403
        </div>
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Akses Ditolak!</h1>
        <p class="text-gray-600 mb-6">
            Maaf, Anda tidak memiliki hak akses untuk membuka halaman ini.
        </p>
        <a href="/dashboard" class="inline-block bg-indigo-600 text-white px-5 py-2 rounded-md">
            Kembali ke Dashboard
        </a>
    </div>
</body>

</html>