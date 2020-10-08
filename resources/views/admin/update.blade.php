@extends ('admin.master')

@section('admincontent')

<div class="main">
    <div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if(session('berhasil'))
                    <div class="alert alert-success" role="alert">
                        {{session('berhasil')}}
                    </div>
                @endif
                <!-- INPUTS -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inputs</h3>
                    </div>
                    <div class="panel-body">
               <form action="/PengirimanBarang/{{$data->id}}/ProcessUpdate" method="POST">
                    {{csrf_field()}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="asal">Asal</label>
                        <input name="asal" type="text" class="form-control" id="kotaasal" placeholder="Kota Asal" value="{{$data->asal}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tujuan">Tujuan</label>
                        <input name="tujuan" type="text" class="form-control" id="kotatujuan" placeholder="Kota Tujuan" value="{{$data->tujuan}}">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="nama_layanan">Layanan</label>
                        <select name="nama_layanan" class="form-control" id="nama_layanan" required value="{{$data->nama_layanan}}">
                            <option value="" selected disabled>Pilih salah satu</option>
                            <option value="Regular" @if($data->nama_layanan == "Regular") selected @endif>Regular</option>
                            <option value="Express" @if($data->nama_layanan == "Express") selected @endif>Express</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="jenis_kiriman">Jenis Kiriman</label>
                    <select class="form-control" id="jenis_kiriman" name="jenis_kiriman" required value="{{$data->jenis_kiriman}}">
                        <option value="" selected disabled>Pilih salah satu</option>
                        <option value="Paket" @if($data->jenis_kiriman == "Paket") selected @endif>Paket</option>
                        <option value="Mobil" @if($data->jenis_kiriman == "Mobil") selected @endif>Mobil</option>
                        <option value="Motor" @if($data->jenis_kiriman == "Motor") selected @endif>Motor</option>
                        <option value="Alat Berat" @if($data->jenis_kiriman == "Alat Berat") selected @endif>Alat Berat</option>
                    </select>
                </div>                
                <div class="form-group col-md-6">
                    <label for="jalur">Jalur</label>
                        <select name="jalur" class="form-control" id="jalur" required value="{{$data->jalur}}">
                            <option value="" selected disabled>Pilih salah satu</option>
                            <option value="1" @if($data->jalur == "1") selected @endif>Darat</option>
                            <option value="2" @if($data->jalur == "2") selected @endif>Laut</option>
                            <option value="3" @if($data->jalur == "3") selected @endif>Udara</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="tarif">Tarif / Kg</label>
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input name="tarif" type="number" class="form-control" min="0" id="tarif" placeholder="Masukan tarif / kg" value="{{$data->tarif}}" required>
                        </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="minimum_charge">Minimum Charge</label>
                        <div class="input-group">
                            <input name="minimum_charge" type="number" class="form-control" min="0" id="minimum_charge" placeholder="Masukan minimum charge" value="{{$data->minimum_charge}}" required>
                            <span class="input-group-addon">Kg</span>
                        </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="estimasi">Estimasi</label>
                        <div class="input-group">
                            <input name="estimasi" type="text" class="form-control" id="estimasi" placeholder="Masukan estimasi" value="{{$data->estimasi}}" required>
                            <span class="input-group-addon">hari</span>
                        </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="keterangan" rows="3" placeholder="Masukan Keterangan" required>{{$data->keterangan}}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                    <input type="submit" value="Cancel" class="btn btn-danger">
                        <a href="/PengirimanBarang"></a>
                </div>
            </form>
                    </div>
                </div>
                <!-- END INPUTS -->
            </div>
        </div>
    </div>
</div>
</div>



@stop

@section('admincontent1')
        <div class="container">
            <h2>Update Data Pengiriman Barang</h2>
            @if(session('berhasil'))
            <div class="alert alert-success" role="alert">
                {{session('berhasil')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                <form action="/PengirimanBarang/{{$data->id}}/ProcessUpdate" method="POST">
                    {{csrf_field()}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="asal">Asal</label>
                        <input name="asal" type="text" class="form-control" id="kotaasal" placeholder="Kota Asal" value="{{$data->asal}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tujuan">Tujuan</label>
                        <input name="tujuan" type="text" class="form-control" id="kotatujuan" placeholder="Kota Tujuan" value="{{$data->tujuan}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_layanan">Layanan</label>
                        <select name="nama_layanan" class="form-control" id="nama_layanan" required value="{{$data->nama_layanan}}">
                            <option value="" selected disabled>Pilih salah satu</option>
                            <option value="Regular" @if($data->nama_layanan == "Regular") selected @endif>Regular</option>
                            <option value="Express" @if($data->nama_layanan == "Express") selected @endif>Express</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="jenis_kiriman">Jenis Kiriman</label>
                    <select class="form-control" id="jenis_kiriman" name="jenis_kiriman" required value="{{$data->jenis_kiriman}}">
                        <option value="" selected disabled>Pilih salah satu</option>
                        <option value="Paket" @if($data->jenis_kiriman == "Paket") selected @endif>Paket</option>
                        <option value="Mobil" @if($data->jenis_kiriman == "Mobil") selected @endif>Mobil</option>
                        <option value="Motor" @if($data->jenis_kiriman == "Motor") selected @endif>Motor</option>
                        <option value="Alat Berat" @if($data->jenis_kiriman == "Alat Berat") selected @endif>Alat Berat</option>
                    </select>
                </div>                
                <div class="form-group">
                    <label for="jalur">Jalur</label>
                        <select name="jalur" class="form-control" id="jalur" required value="{{$data->jalur}}">
                            <option value="" selected disabled>Pilih salah satu</option>
                            <option value="1" @if($data->jalur == "1") selected @endif>Darat</option>
                            <option value="2" @if($data->jalur == "2") selected @endif>Laut</option>
                            <option value="3" @if($data->jalur == "3") selected @endif>Udara</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="tarif">Tarif / Kg</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input name="tarif" type="number" class="form-control" min="0" id="tarif" placeholder="Masukan tarif / kg" value="{{$data->tarif}}" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="minimum_charge">Minimum Charge</label>
                        <div class="input-group mb-3">
                            <input name="minimum_charge" type="number" class="form-control" min="0" id="minimum_charge" placeholder="Masukan minimum charge" value="{{$data->minimum_charge}}" required>
                                <div class="input-group-append"><span class="input-group-text">Kg</span></div>
                        </div>
                </div>
                <div class="form-group">
                    <label for="estimasi">Estimasi</label>
                        <div class="input-group mb-3">
                            <input name="estimasi" type="text" class="form-control" id="estimasi" placeholder="Masukan estimasi" value="{{$data->estimasi}}" required>
                                <div class="input-group-append"><span class="input-group-text">hari</span></div>
                        </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="keterangan" rows="3" placeholder="Masukan Keterangan" required>{{$data->keterangan}}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning btn-block">Update</button>
                </div>
            </form>
        </div>
            </div>
        </div>
@endsection