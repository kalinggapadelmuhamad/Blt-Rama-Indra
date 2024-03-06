<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data BLT UMKM</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-umkm" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
				<a href="?page=add-impk" class="btn btn-primary">
					<i class="fa fa-folder"></i> Import Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>JK</th>
						<th>Dusun</th>
						<th>Agama</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT p.id_umkm, p.nik, p.nama, p.jekel, p.desa, p.rt, p.rw, p.agama, k.no_kk, k.kepala from 
			  tb_umk p left join tb_anggota a on p.id_umkm=a.id_pend 
			  left join tb_kk k on a.id_kk=k.id_kk where status='Ada'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nik']; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['jekel']; ?>
						</td>
						<td>
							<?php echo $data['desa']; ?>
					
						</td>
						<td>
							<?php echo $data['agama']; ?>
						</td>

						<td>
							<a href="?page=view-umkm&kode=<?php echo $data['id_umkm']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-user"></i>
							</a>
							<a href="?page=edit-umkm&kode=<?php echo $data['id_umkm']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-umkm&kode=<?php echo $data['id_umkm']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
								</>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->