
<!DOCTYPE html>
<html>
	<?php
	include('../../log/session.php');  
	include('../../template/header.php')
	?>
<body>
    <?php
        // Fetch all users data from database
        $result = mysqli_query($conn, "SELECT * FROM  MEMBER");
      ?>

	<!-- navbar atau Header -->
	<?php include('../../template/nav.php')?>
	<!-- end navbar-->
	<div class="badan">	
	<!-- Ini SideBar  -->
	<?php include('../../template/sidebar.php')?>
	<!-- end SideBar-->		
	<div class="content">
		<div class="container">
			<div class="card height-content">
  <a href="tambah-absen.php" class><i class="fa fa-plus"></i> Tambah </a>


<form   action="" method="post">
   
   <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete=>
   <button type="submit" name="cari">cari!</button>

</form>
<br>
  <div
	</table>

				<table class="tabel">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tanggal lahir</th>
                      <th>contact number</th>
                      <th>nama trainer</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php

                  $no= 1;
                  while($user_data = mysqli_fetch_array($result)) {         
		              ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $user_data['nama']; ?></td>
                      <td><?php echo $user_data['tanggal_lahir']; ?></td>
                      <td><?php echo $user_data['contact_number']; ?></td>
                      <td><?php echo $user_data['nama_trainer']; ?></td>
      
                      <td>
                      <a href="edit-UM.php?id=<?php echo $user_data['id'];?>"><i class="fa fa-edit"></i></a> |
                      <a href="hapus-absen.php?id=<?php echo $user_data['id'];?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                  }
                    ?>
                  </tbody>
                </table>
			</div>
      <div>
   
      
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