@extends('layouts.app', ['title' => 'Home | Pencatatan Infaq'])

@section('content')
    <div class="container">
        <div class="mt-4 border">
            <header>
                <div class="p-3 bg-white">
                    <h3 class="text-center mb-0 text-success fw-semibold">Yayasan Masjid Agung Baiturrahman Banyuwangi</h3>
                </div>
                <div class="py-2 px-3 bg-success">
                    <p class="fs-5 mb-0 text-white text-center">Jl.Jenderal Sudirman No.237 Banyuwangi</p>
                </div>
            </header>

            <div class="p-3 bg-white">
                <form>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nama_donatur" class="form-label">Nama Donatur <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama_donatur">
                        </div>
                        <div class="col mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal">
                            <div id="emailHelp" class="form-text fst-italic">Jika kosong maka otomatis menggunakan
                                tgl hari ini</div>
                        </div>
                        <div class="col mb-3">
                            <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="alamat">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="jumlah" class="form-label">Jumlah <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="jumlah" aria-describedby="emailHelp">

                        </div>
                        <div class="col mb-3">
                            <label for="penerima" class="form-label">Ditunjukan Untuk</label>
                            <input type="email" class="form-control" id="penerima">
                            <div id="emailHelp" class="form-text fst-italic">Hamba ALLAH akan otomatis digunakan apabila
                                tidak di isi
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" rows="3" placeholder="cth: Mohon kesembuhan untuk..."></textarea>
                        <div id="emailHelp" class="form-text fst-italic">Anda bisa mengkosongkan bagian ini</div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
        <div class="mt-4 border">
            <header class="py-2 px-3 bg-light border-bottom">
                <h4 class="text-center text-gray fw-medium mb-0">Daftar Nama Donatur</h4>
            </header>
            <div class="p-3 bg-white">
                <form class="row g-2">
                    <div class="col-auto">
                        <input type="text" class="bg-light form-control" id="cari_nama_donatur"
                            placeholder="Cari nama donatur">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-success mb-3">Cari</button>
                    </div>
                </form>
                <div class="table-responsive p-0">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Donatur</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">No Bukti</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Ditunjukan Untuk</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Samsul Arifin</td>
                                <td>Banyuwangi</td>
                                <td>Rp.100,000</td>
                                <td>12097</th>
                                <td>1 Agustus 2023</td>
                                <td>Hamba ALLAH</td>
                                <td>Semoga amal jariyahnya diterima dan mendapatkan balasan oleh ALLAH SWT</td>
                                <td>
                                    <button class="btn border text-secondary btn-light btn-sm">Lihat</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Samsul Arifin</td>
                                <td>Banyuwangi</td>
                                <td>Rp.100,000</td>
                                <td>12097</th>
                                <td>1 Agustus 2023</td>
                                <td>Hamba ALLAH</td>
                                <td>Semoga amal jariyahnya diterima dan mendapatkan balasan oleh ALLAH SWT</td>
                                <td>
                                    <button class="btn border text-secondary btn-light btn-sm">Lihat</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ahmad Zainun Ramadhan</td>
                                <td>Banyuwangi</td>
                                <td>Rp.100,000</td>
                                <td>62899</th>
                                <td>1 Agustus 2023</td>
                                <td>Hamba ALLAH</td>
                                <td>Semoga amal jariyahnya diterima dan mendapatkan balasan oleh ALLAH SWT</td>
                                <td>
                                    <button class="btn border text-secondary btn-light btn-sm">Lihat</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Agus Santoso</td>
                                <td>Rogojampi</td>
                                <td>Rp.380,000</td>
                                <td>12099</th>
                                <td>4 Agustus 2023</td>
                                <td>Hamba ALLAH</td>
                                <td>Semoga amal jariyahnya diterima dan mendapatkan balasan oleh ALLAH SWT</td>
                                <td>
                                    <button class="btn border text-secondary btn-light btn-sm">Lihat</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Muhammad Fajar</td>
                                <td>Glagah</td>
                                <td>Rp.500,000</td>
                                <td>12101</th>
                                <td>5 Agustus 2023</td>
                                <td>Hamba ALLAH</td>
                                <td>Semoga amal jariyahnya diterima dan mendapatkan balasan oleh ALLAH SWT</td>
                                <td>
                                    <button class="btn border text-secondary btn-light btn-sm">Lihat</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="mt-3 d-flex justify-content-end">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
