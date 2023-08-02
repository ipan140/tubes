<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Produk</title>
    <style>
        html {
            font-size: 12px;
        }

        .table {
            border-collapse: collapse !important;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            padding: 0.5rem;
            border: 1px solid black !important;
        }
    </style>
</head>
<body>
    <h1>Data Produk</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $index => $product)
                <tr>
                    <td align="center">{{ $index + 1 }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>{{ $product->product_deskripsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
