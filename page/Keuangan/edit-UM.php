<!DOCTYPE html>
<html>
	<?php
	include('../../template/header.php');
	include('../../log/session.php');

	require $root .'/controller/lihat.php';
	?>
<body>
	<!-- navbar atau Header -->
	<?php include('../../template/nav.php')?>
	<!-- end navbar-->
	<div class="badan">	
	<!-- Ini SideBar  -->
	<?php include('../../template/sidebar.php')?>
	<!-- end SideBar-->	


	 <form action="../../controller/edit_um.php?id=<?php echo $_GET["id"]?>" method="post" enctype="multipart/form-data">
	<div class="content">
		<div class="container">
			<div class="card height-content">

		  <div>
		  <input class="input" type="hidden" name="id" id="id" value="<?php echo $member["id"]; ?>">
          </div>

		  <div class="field">
            <label for="nama" class="label">Nama</label>
            <input class="input" type="text" name="nama" id="nama" value="<?php echo $member["nama"]; ?>">
          </div>

          <div class="field">
            <label for="tanggal_lahir" class="label">Tanggal_lahir</label>
            <input class="input" type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $member["tanggal_lahir"]; ?>">
          </div>

          <div class="field">
            <label for="contact_number" class="label">contact_number </label>
            <input class="input" type="number" name="contact_number" id="contact_number" value="<?php echo $member["contact_number"]; ?>">
          </div>

					<div class="field">
            <label for="nama_trainer" class="label">nama_trainer</label>
            <input class="input" type="text" name="nama_trainer" id="nama_trainer" value="<?php echo $member["nama_trainer"]; ?>">
          </div>


          <div class="field">
            <button type="submit" name="ubah" class="button is-primary">Simpan Data</button>
          </div>
        </div>
      </form>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	</div>
	<!-- ini Footer -->
	<?php
	include('../../template/footer.php')
	?>
	<!-- end Footer -->
</body>
</html>