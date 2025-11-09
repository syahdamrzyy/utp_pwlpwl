<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
        }

        h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .row {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .card {
            flex: 1;
            min-width: 250px;
            border: 1px solid #ccc;
            padding: 15px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .card h4 {
            margin: 10px 0;
            color: #333;
        }

        .card p {
            margin: 0;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3>Dashboard</h3>

        <div class="row">
            <div class="card">
                <p>Total Kategori</p>
                <h4>5</h4>
            </div>
            <div class="card">
                <p>Total Barang</p>
                <h4>12</h4>
            </div>
            <div class="card">
                <p>Login Sebagai</p>
                <h4>Syahdam Rizky</h4>
            </div>
        </div>
    </div>

</body>
</html>
