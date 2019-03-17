<!DOCTYPE html>
<html>
	<?php
	include('../../log/session.php');	
	include('../../template/header.php')
	?>
<body>
	<!-- navbar atau Header -->
	<?php include('../../template/nav.php')?>
	<!-- end navbar-->
	<div class="badan">	
	<!-- Ini SideBar  -->
	<?php include('../../template/sidebar.php')?>
	<!-- end SideBar-->	


	<form action="../../controller/tambah-trainer.php" method="post" enctype="multipart/form-data">
	<div class="content">
		<div class="container">
			<div class="card height-content">

		  <div class="field">
            <td><label for="nama" class="label">Nama</label></td>
            <td><input class="input" type="text" name="nama" id="nama" required></td>
          </div> 

          <div class="field">
            <td><label for="age" class="label">age</label></td>
            <td><input class="input" type="text" name="age" id="age"></td>
          </div>
          <div class="field">
            <td><label for="contact_number" class="label">contact number</label></td>
            <td><input class="input" type="text" name="contact_number" id="contact_number"></td>
          </div>
				
          <div class="field">
            <button type="submit" name="tambah" class="button is-primary">Simpan Data</button>
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