<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Import Data
		</h3>
	</div>
	<div class="table-responsive">

		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">File Excel</label>
					<div class="col-sm-6">
						<input type="file" class="form-control" id="file" name="file" placeholder="" required>
					</div>
				</div>



			</div>
			<div class="card-footer">
				<input type="submit" name="import" value="Import" class="btn btn-info">
				<a href="?page=data-pend" title="Kembali" class="btn btn-secondary">Batal</a>
			</div>
		</form>
	</div>

	<?php

	if (isset($_POST['Simpan'])) {
		//mulai proses simpan data
		$sql_simpan = "INSERT INTO tb_pdd (nik, nama, tempat_lh, tgl_lh, jekel, desa, rt, rw, agama, kawin, pekerjaan, status) VALUES (
            '" . $_POST['nik'] . "',
            '" . $_POST['nama'] . "',
			'" . $_POST['tempat_lh'] . "',
			'" . $_POST['tgl_lh'] . "',
            '" . $_POST['jekel'] . "',
            '" . $_POST['desa'] . "',
			'" . $_POST['rt'] . "',
			'" . $_POST['rw'] . "',
			'" . $_POST['agama'] . "',
			'" . $_POST['kawin'] . "',
			'" . $_POST['pekerjaan'] . "',
            'Ada')";
		$query_simpan = mysqli_query($koneksi, $sql_simpan);
		mysqli_close($koneksi);

		if ($query_simpan) {
			echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'dashboard.php?page=data-pend';
          }
      })</script>";
		} else {
			echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'dashboard.php?page=add-imp';
          }
      })</script>";
		} //selesai proses simpan data
	} else if (isset($_POST['import'])) {
		require 'vendor/autoload.php';

		$sumber = $_FILES['file']['tmp_name'];


		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($sumber);
		$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);



		for ($index = 2; $index <= count($sheetData); $index++) {
			$row = $sheetData[$index];


			$sql_simpan = "INSERT INTO tb_pdd (nik, nama, tempat_lh, tgl_lh, jekel, desa, rt, rw, agama, kawin, pekerjaan, status) VALUES (
            '" . $row['A'] . "',
            '" . $row['B'] . "',
			'" . $row['C'] . "',
			'" . $row['D'] . "',
            '" . $row['E'] . "',
            '" . $row['F'] . "',
			'" . $row['G'] . "',
			'" . $row['H'] . "',
			'" . $row['I'] . "',
			'" . $row['J'] . "',
			'" . $row['K'] . "',
			'" . $row['L'] . "'
			)";
			$query_simpan = mysqli_query($koneksi, $sql_simpan);
		}

		$file = $_FILES['file']['name'];
		$ekstensi = explode(".", $file);

		$file_name = "file-" . round(microtime(true)) . "." . end($ekstensi);
		$target_dir = "";
		$cek = move_uploaded_file($sumber, '_file/' . $file_name);

		if ($query_simpan) {
			echo "<script>
		Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		}).then((result) => {if (result.value){
			window.location = 'dashboard.php?page=data-pend';
			}
		})</script>";
		} else {
			echo "<script>
		Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {if (result.value){
			window.location = 'dashboard.php?page=add-imp';
			}
		})</script>";
		}
	}
