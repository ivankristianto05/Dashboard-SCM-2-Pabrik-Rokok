<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Laporan Gudang Bahan</title>
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
    <h3 align="center">Laporan Data Gudang Bahan</h3>
    <div class="line"></div><br>
    <table>
        <thead style="background-color: #5bc0de;">
            <tr>
                <th>ID</th>
                <th>Nama Bahan</th>
                <th>Jumlah Bahan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gudangbahan as $item)
                <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RBahan->nama_bahan}}</td>
                <td>{{ $item->jumlah_bahan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
