@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Greeting Message -->
        <div class="row mb-2 mt-4">
            <div class="col-lg-12">
                <h3>Halaman Utama</h3>
            </div>
        </div>

        <!-- About the Website Section -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">Tentang Website</h4>
                        <p class="card-text">
                            Website ini dibuat untuk mengelola berbagai data yang penting bagi pengguna. 
                            Fitur utama, seperti :
                        </p>
                        <ul>
                            <li>Manajemen data departemen.</li>
                            <li>Manajemen data karyawan.</li>
                            <li>Tempat menyimpan sebuah data-data perusahaan.</li>
                            <li>Antarmuka yang user-friendly dengan desain responsif.</li>
                        </ul>
                        <p class="card-text">
                            Dibangun dengan kerangka Laravel dan desain berbasis Bootstrap, 
                            website ini dirancang, dibuat untuk memberikan pengalaman terbaik, fitur yang berguna dan bermanfaat kepada pengguna. <br>
                            Jika Anda memiliki saran atau masukan, jangan ragu untuk memberikan komentar di bawah ini!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row with Comment Cards -->
        <div class="row mb-2">
            <div class="col-lg-12">
                <h3>Komentar</h3>
            </div>
        </div>

        <div class="row">
            <!-- Card for Comment 1 -->
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <h5 class="card-title">Adhnaan</h5>
                        <p class="card-text">Terimakasih Farrel sudah membuatkan website ini untuk mengelola data.</p>
                        <div class="text-right">
                            <small>Diposting pada: 2008-04-07</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card for Comment 2 -->
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <h5 class="card-title">Ryosuke</h5>
                        <p class="card-text">INI BAGUSS BANGETTT!!! TOPP DEHHH.</p>
                        <div class="text-right">
                            <small>Diposting pada: 2024-11-17</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card for Comment 3 -->
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <h5 class="card-title">Devrin</h5>
                        <p class="card-text">Jelek kurang fungsional.</p>
                        <div class="text-right">
                            <small>Diposting pada: 2024-11-16</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- More Rows or Cards as Needed -->
    </div>
@endsection
