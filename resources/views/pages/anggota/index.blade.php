@extends('layouts.app')
@section('content')
    <div class="position-relative overflow-hidden p-3 bg-body-tertiary">
        <h5>Data Anggota Karang Taruna Muda Mahardika</h5>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="row">
                <div class="col-2">
                    <select name="divisi" id="divisi" class="form-select mb-2">
                        <option value="">Pilih Divisi</option>
                        <option value="">Ketua</option>
                        <option value="">Wakil</option>
                        <option value="">Sekretaris</option>
                        <option value="">Bendahara</option>
                        <option value="">Infokom</option>
                        <option value="">Minat & Bakat</option>
                    </select>
                </div>
                <div class="col-3">
                    <div class="input-group">
                        <input type="search" class="form-control form-contol-sm">
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>QR Code</th>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>QR Code</td>
                        <td>Safrizal Husen</td>
                        <td>Ketua</td>
                        <td>Foto</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>QR Code</td>
                        <td>Fachri Raihan Al Biruni</td>
                        <td>Wakil Ketua</td>
                        <td>Foto</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>QR Code</td>
                        <td>Aninditya Mulqie</td>
                        <td>Sekertaris 1</td>
                        <td>Foto</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>QR Code</td>
                        <td>Ratih Ratipah</td>
                        <td>Sekertaris 2</td>
                        <td>Foto</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>QR Code</td>
                        <td>Fachrurizal Yusuf</td>
                        <td>Bendahara 1</td>
                        <td>Foto</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>QR Code</td>
                        <td>Bunga Rasya</td>
                        <td>Bendahara 2</td>
                        <td>Foto</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>QR Code</td>
                        <td>Adam Wildan</td>
                        <td>Ketua Infokom</td>
                        <td>Foto</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>QR Code</td>
                        <td>Rifki Firmansyah</td>
                        <td>Infokom</td>
                        <td>Foto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
