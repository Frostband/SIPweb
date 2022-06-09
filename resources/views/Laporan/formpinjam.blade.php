|<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial scale=1.0">
    <meta hhtp-equiv="X-UA_Compatible" content="ie=edge">
    <title>Peminjaman</title>
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
        			<a class="nav-link active" onclick="window.location='/sip/pinjam'" >Peminjaman</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" onclick="window.location='/sip/pengembalian'" >Pengembalian</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" onclick="window.location='/sip/lihatlaporan'" >Laporan</a>
      			</li>      			
    		</ul>			
			<img src="{{ asset('outline_account_circle_white_36.png')}}" style="width:40px; height:40px; float:right;"> 
		</div>
	</nav>	
    
    @if (session('msg'))
    {{ session('msg') }}        
    @endif
    <form method="POST" action="{{ url('/sip/simpan') }}">
        @csrf        
        <div class="container-md fw-bold text-dark">
            <div class="mb-3 mt-3 px-4 py-2">
                <label for="trans_id" class="form-label">ID Transaksi</label>
                <input type="text" class="form-control" id="trans_id" name="trans_id" required>
            </div>
            <div class="mb-3 mt-3 px-4 py-2">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3 mt-3 px-4 py-2">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>
            <div class="mb-3 mt-3 px-4 py-2">
                <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
            </div>
            <div class="mb-3 mt-3 px-4 py-2">
                <label for="tgl_kembali" class="form-label">DEADLINE</label>
                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
            </div>
            <div class="d-flex justify-content-center"><button type="submit" class="btn btn-secondary text-white mx-4 mb-3" name="submit">Submit</button></div>
        </div>
    </form>
</body>
