|<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial scale=1.0">
    <meta hhtp-equiv="X-UA_Compatible" content="ie=edge">
    <title>Data Laporan</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>
<body>   
    <nav  class ="navbar navbar-expand-sm darkblue navbar-dark">
  
		<div class="container-fluid darkblue">
			<ul class="navbar-nav">				
				<li class="nav-item">
					<a class="nav-link" onclick="window.location='/sip/home'" >Home</a>
				</li>
				<li class="nav-item">
        			<a class="nav-link" onclick="window.location='/sip/pinjam'" >Peminjaman</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" onclick="window.location='/sip/pengembalian'" >Pengembalian</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link active" onclick="window.location='/sip/lihatlaporan'" >Laporan</a>
      			</li>      			
    		</ul>			
			<img src="{{ asset('outline_account_circle_white_36.png')}}" style="width:40px; height:40px; float:right;"> 
		</div>
	</nav>	

    <form method="POST">
<div class="container-md fw-bold text-dark">
	<div class="mb-3 mt-3 px-4 py-2">
        <label for="IDTrans" class="form-label">ID Transaksi</label>
        <input type="text" class="form-control" id="IDTrans" name="IDTrans" required>
        
	</div>
    <div class="d-flex justify-content-center"><button type="submit" class="btn btn-secondary text-white mx-4 mb-3" name="submit">Lihat</button></div> 
        <table>        
            <thead>
                <th>ID Transaksi</th>
                <th>ISBN</th>
                <th>NIM</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Set Tanggal Kembali</th>
            </thead>
            <tbody>
                @foreach ($dataLaporan as $dL)
                    <tr>
                        
                        <td>{{ $dL->trans_id}}</td>
                        <td>{{ $dL->isbn}}</td>
                        <td>{{ $dL->nim}}</td>
                        <td>{{ $dL->tgl_pinjam}}</td>
                        <td>{{ $dL->tgl_kembali}}</td>
                        <td>{{ $dL->set_tgl_kembali}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
