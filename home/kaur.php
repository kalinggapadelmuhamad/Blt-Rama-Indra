<?php

$sql = $koneksi->query("SELECT COUNT(id_pend) as pend  from tb_pdd where status='Ada'");
while ($data = $sql->fetch_assoc()) {
	$pend = $data['pend'];
}

$sql = $koneksi->query("SELECT COUNT(id_kk) as kartu  from tb_kk");
while ($data = $sql->fetch_assoc()) {
	$kartu = $data['kartu'];
}

$sql = $koneksi->query("SELECT COUNT(id_pend) as laki  from tb_pdd where jekel='LK'");
while ($data = $sql->fetch_assoc()) {
	$laki = $data['laki'];
}

$sql = $koneksi->query("SELECT COUNT(id_pend) as prem  from tb_pdd where jekel='PR'");
while ($data = $sql->fetch_assoc()) {
	$prem = $data['prem'];
}

$sql = $koneksi->query("SELECT COUNT(id_mskn) as mskn  from tb_mkn where status='Ada'");
while ($data = $sql->fetch_assoc()) {
	$mskn = $data['mskn'];
}

$sql = $koneksi->query("SELECT COUNT(id_umkm) as umkm  from tb_umk where status='Ada'");
while ($data = $sql->fetch_assoc()) {
	$umkm = $data['umkm'];
}

?>

<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $pend;  ?>
				</h3>

				<p>Penduduk</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="dashboard.php?page=data-pend" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>


	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $mskn;  ?>
				</h3>

				<p>Bantuan Langsung Tunai Masyarakat Miskin</p>
			</div>
			<div class="icon">
				<i class="ion ion-arrow-graph-down-right"></i>
			</div>
			<a href="dashboard.php?page=data-miskin" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $umkm;  ?>
				</h3>

				<p>Bantuan Langsung Tunai UMKM</p>
			</div>
			<div class="icon">
				<i class="ion ion-ios-briefcase"></i>
			</div>
			<a href="dashboard.php?page=data-umkm" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>



</div>