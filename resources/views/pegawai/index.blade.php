<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
 
    <div class="container">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-6">
            <h1>Data Pegawai</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Data
                </button>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>TANGGAL LAHIR</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_pegawai as $pegawai)
                <tr>
                    <td>{{$pegawai->nama}}</td>
                    <td>{{$pegawai->alamat}}</td> 
                    <td>{{$pegawai->tgllhr}}</td>
                    <td>
                    <a href="/pegawai/{{$pegawai->id}}/edit" class = "btn btn-warning bgn-sm">Edit</a>
                    <a href="/pegawai/delete/{{$pegawai->id}}" class = "btn btn-danger bgn-sm" onclick="return confirm('Yakin Mau Dihapus?')">delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form action="/pegawai/create" method="POST">
            {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
             <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="Alamat">
        </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Tanggal Lahir</label>
    <textarea name="tgllhr" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
 
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" datadismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   </div>
 </div>
</div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="an
onymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.m
in.js" integrity="sha384-
ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="an
onymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.
js" integrity="sha384-
ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="an
onymous"></script>
    </body>
 
</html>