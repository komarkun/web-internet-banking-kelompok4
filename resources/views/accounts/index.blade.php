<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
    <!-- Tambahkan tautan CSS atau stylesheet Anda di sini -->
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 style="font-weight: bold; font-size: 3rem; color: #333; text-align:center ">Daftar Pengguna</h2>
                    <a href="{{ route('dashboard') }}" class="text-blue-500 hover:text-blue-700">Kembali</a>
                    <br><br>
                    <table style="border-collapse: collapse; width: 100%;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #000;">ID</th>
                                <th style="border: 1px solid #000;">Nama</th>
                                <th style="border: 1px solid #000;">Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $account)
                            <tr>
                                <td style="border: 1px solid #000;">{{ $account->id }}</td>
                                <td style="border: 1px solid #000;">{{ $account->nama }}</td>
                                <td style="border: 1px solid #000;">{{ $account->saldo }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
