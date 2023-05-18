<!DOCTYPE html>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <form>
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">nama pasien</label> 
                    <input id="nama" name="nama" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="hts" class="col-4 col-form-label">tanggal periksa</label> 
                    <input id="hts" name="hts" placeholder="" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="usia" class="col-4 col-form-label">ummur</label> 
                    <input id="usia" name="usia" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-4">gender</label> 
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="laki"> 
                      <label for="gender_0" class="custom-control-label">cewe</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="perempuan"> 
                      <label for="gender_1" class="custom-control-label">cowo/label>
                    </div>
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">periksa</button>
                  </div>
                </div>
              </form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<table class="table">
				<thead>
					<tr>
						<th>
							nomor
						</th>
						<th>
							jenis tes
						</th>
						<th>
							hasil 
						</th>
						<th>
							normal
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							tekanandarah
						</td>
						<td>
							2
						</td>
						<td>
							40
						</td>
					</tr>
					<tr class="table-active">
						<td>
							2
						</td>
						<td>
							asamurat
						</td>
						<td>
							45
						</td>
						<td>
							30
						</td>
					</tr>
					<tr class="table-success">
						<td>
							3
						</td>
						<td>
							kolestrol
						</td>
						<td>
							4
						</td>
						<td>
							50
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							4
						</td>
						<td>
							gula darah
						</td>
						<td>
							78
						</td>
						<td>
							20
						</td>
					</tr>
					
		<div class="col-md-4">
		</div>
	</div>
</div>
</html>

Route::get('/formtugaws', function () {
    return view('periksa');
});