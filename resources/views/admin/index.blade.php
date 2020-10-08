@extends ('admin.master')
@section('admincontent')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengiriman Barang</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Pengiriman Barang</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahData">Tambah</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="databarang" class="table table-hover">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
		                    <th>Asal</th>
				            <th>Tujuan</th>
							<th>Layanan</th>
				   	        <th>Jenis Kiriman</th>
			                <th>Jalur</th>
			                <th>Tarif / Kg</th>
			               <th>Minimum Charge</th>
				            <th>Estimasi</th>
				            <th>Keterangan</th>
				            <th>Aksi</th>                            
                          </tr>
                        </thead>
                        @foreach($datas as $data)
                        <tbody>
							<tr>
								<td>{{ $loop->index+1 }}</td>
								<td>{{$data -> asal}}</td>
								<td>{{$data -> tujuan}}</td>
								<td>{{$data -> nama_layanan}}</td>
								<td>{{$data -> jenis_kiriman}}</td>
								<td>{{ $data->jalur == "1" ? 'Darat' : ($data->jalur == "2" ? 'Laut' : 'Udara') }}</td>
								<td>Rp. {{ $data->tarif }}</td>
								<td>{{ $data->minimum_charge }} kg</td>
								<td>{{ $data->estimasi }} hari</td>
								<td>{{ $data->keterangan }}</td>
								<td><a href="/PengirimanBarang/{{$data->id}}/update" class="btn btn-warning btn-sm">Update</a>
									<a href="/PengirimanBarang/{{$data->id}}/delete" class="btn btn-danger btn-sm"
										onclick="return confirm('Apa anda yakin?')">Delete</a></td>
									
							</tr>                        	
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahData" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahData">Input Data Pengiriman</h5>
					<div class="right">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
					</div>
			</div>
			<div class="modal-body">
				<form action="/PengirimanBarang/create" method="POST">
					{{csrf_field()}}
				<div class="form-row">
					<div class="form-group col-md-6">
      					<label for="asal">Asal</label>
      					<input name="asal" type="text" class="form-control" id="kotaasal" placeholder="Kota Asal">
    				</div>
    				<div class="form-group col-md-6">
      					<label for="tujuan">Tujuan</label>
      					<input name="tujuan" type="text" class="form-control" id="kotatujuan" placeholder="Kota Tujuan">
    				</div>
	                <div class="form-group col-md-6">
		                <label for="nama_layanan">Layanan</label>
							<select name="nama_layanan" class="form-control" id="nama_layanan" required>
	                        	<option value="" selected disabled>Pilih salah satu</option>
	                        	<option value="Regular">Regular</option>
	                        	<option value="Express">Express</option>
	                        </select>
	                </div>
	                <div class="form-group col-md-6">
	                	<label for="jenis_kiriman">Jenis Kiriman</label>
	                    <select class="form-control" id="jenis_kiriman" name="jenis_kiriman" required>
	                    	<option value="" selected disabled>Pilih salah satu</option>
	                        <option value="Paket">Paket</option>
	                        <option value="Mobil">Mobil</option>
	                        <option value="Motor">Motor</option>
	                        <option value="Alat Berat">Alat Berat</option>
	                    </select>
	                </div>                
					<div class="form-group col-md-6">
						<label for="jalur">Jalur</label>
	                    	<select name="jalur" class="form-control" id="jalur" required>
	                        	<option value="" selected disabled>Pilih salah satu</option>
	                        	<option value="1">Darat</option>
				            	<option value="2">Laut</option>
	            				<option value="3">Udara</option>
							</select>
	                </div>
	                <div class="form-group col-md-6">
                    	<label for="tarif">Tarif / Kg</label>
                        	<div class="input-group">
                            	<span class="input-group-addon">Rp</span>
                            	<input name="tarif" type="number" class="form-control" min="0" id="tarif" placeholder="Masukan tarif / kg" required>
                        	</div>
               		</div>
	                <div class="form-group col-md-6">
	                    <label for="minimum_charge">Minimum Charge</label>
	                        <div class="input-group">
	                            <input name="minimum_charge" type="number" class="form-control" min="0" id="minimum_charge" placeholder="Masukan minimum charge" required>
	                            <span class="input-group-addon">Kg</span>
	                        </div>
	                </div>               		
	                <div class="form-group col-md-6">
	                    <label for="estimasi">Estimasi</label>
	                        <div class="input-group">
	                            <input name="estimasi" type="text" class="form-control" id="estimasi" placeholder="Masukan estimasi" required>
	                            <span class="input-group-addon">hari</span>
	                        </div>
	                </div>
	                <div class="form-group">
	                	<label for="keterangan">Keterangan</label>
	                    	<textarea name="keterangan" class="form-control" id="keterangan" rows="3" placeholder="Masukan Keterangan" required></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
	        		<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
      			</div>
			</form>
			</div>
		</div>
	</div>
</div>
@endsection

