<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comic Lists</title>
    <!-- Optional: Include Bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Manchaster United Player Lists</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pemain</th>
                    <th>No Punggung</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_mu_player as $mu_player)
                <tr>
                    <td>{{ $mu_player->id }}</td>
                    <td>{{ strtoupper($mu_player->nama_pemain) }}</td>
                    <td>{{ $mu_player->no_punggung }}</td>
                    <td>{{ $mu_player->posisi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Optional: Include Bootstrap JS for styling -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
