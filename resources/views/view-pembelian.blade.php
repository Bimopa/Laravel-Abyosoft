<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, th, td {
      border:1px solid black;
    }
    </style>
<body>
    <h2>Data Pembelian</h2>
    <form action="dashboard" method="GET">

        <button>kembali</button>
    </form>
    <table style="width:100%">
        <tr>
          <th>Nomor Transaksi</th>
          <th>Kode Suplier</th>
          <th>Tanggal Pembelian</th>
        </tr>
      

    <form action="/create-pembelian-view" method="GET">
        @csrf
        @foreach($hbeli as $key => $data)

            <tr>
                <td>{{$data->notransaksi}}</td>
                <td>{{$data->kodespl}}</td>
                <td>{{$data->createdat}}</td>
            </tr>
        
        @endforeach
        
    <button style="background-color: #e7e7e7; color: black;">tambah pembelian</button>
    </form>

</table>
</body>
</html>

{{-- <tr>
    
  </tr> --}}