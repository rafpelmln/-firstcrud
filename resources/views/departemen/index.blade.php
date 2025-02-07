@extends('layouts/app')
@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->

                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Data Departemen</h1>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold" id="departemen">Departemen Galactic</h6>
                            </div>
                            <div class="card-body">
                                <a class="btn mb-3" id="tambahdata" href="{{ route('departemen.create') }}">Tambah Data</a>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Departemen</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($departemen as $departemen)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $departemen->nama_departemen }}</td>
                                                    <td>
                                                        <a class="btn btn-sm"
                                                            id="editdata"
                                                            href="{{ url('departemen/' . $departemen->id . '/edit') }}">Edit</a>
                                                        <form
                                                            action="{{ url('departemen/' . $departemen->id) }}"
                                                            method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('Delete')
                                                            <button class="btn btn-danger"
                                                                onclick="return confirm ('apakah anda ingin menghapus data?')">Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
            @endsection
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->
            <style>
                #departemen {
                    color: #001F3F;
                }
                #tambahdata, #editdata {
                    color: #f2f2f2;
                    background-color: #3b627a;
                }
            </style>