
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Pesan Mobil</title>
    @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.left-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#"></a></li> --}}
              <li class="breadcrumb-item active">Data Mobil</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route ('create-mobil')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                
            </div>
        </div>
        
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Merk</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($dtMobil as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->merk }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>
                      <a href="{{ url ('edit-mobil',$item->id) }}" class="btn btn-success">Edit</a>
                      {{-- <a href="{{ url ('edit-dokter',$item->id) }}"><i class="fas fa-user-edit"></i></a>  --}}
                      {{-- | --}}
                      <a href="{{ url ('delete-mobil',$item->id) }}" class="btn btn-danger">Delete</a>
                      {{-- <a href="{{ url ('delete-dokter',$item->id) }}"><i class="fas fa-trash" style="color: red"></i></a> --}}
                    </td>
                </tr> 
                @endforeach
                
            </table>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('template.footer');
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('template.script');
@include('sweetalert::alert')

</body>
</html>
