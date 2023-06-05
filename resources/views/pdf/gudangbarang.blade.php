<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Laporan Gudang Barang</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        h1 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table thead th {
            padding: 8px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            text-align: left;
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }
        table tbody td {
            padding: 8px;
            border: 1px solid #ddd;
            font-size: 12px;
            color: #333;
        }
        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .line {
        width: 100%;
        height: 2px;
        background-color: black;
        align: center;
        }
    </style>
</head>
<body>
    <h1 align="center">PT.Sejahtera</h1>
    <h3 align="center">Laporan Data Gudang Barang</h3>
    <div class="line"></div><br>
    <table>
        <thead style="background-color: #5bc0de;"e>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gudangbarang as $item)
                <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RBarang->nama_barang}}</td>
                <td>{{ $item->jumlah_barang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
