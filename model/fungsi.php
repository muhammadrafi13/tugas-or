<?php 
    $koneksi = mysqli_connect("localhost","root","","gym");

    function lihat($query)
    {
        global $koneksi;
        
        $hasil = mysqli_query($koneksi,$query);
        $tampungData = [];
        while ( $data = mysqli_fetch_assoc($hasil) ) {
            $tampungData[] = $data;
        }
        return $tampungData;

    }
    
    function tambah($data)
    {

        global $koneksi;
        $nama = $data ["nama"];
        $tanggal_lahir= $data["tanggal_lahir"];
        $contact_number= $data["contact_number"];
        $nama_trainer = $data ["nama_trainer"];
     

        
        
        $query =  "INSERT INTO MEMBER VALUES ('','$nama','$tanggal_lahir','$contact_number','$nama_trainer')" ;
         

        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);
    }

    
    
    

    function hapus_absen($data)
    {
        global $koneksi;

        $query =  "DELETE FROM MEMBER WHERE id='$data' ";
        
        mysqli_query($koneksi,$query);
        
        return mysqli_affected_rows($koneksi);
    }

     
   

    function edit($data)
    {
        global $koneksi;
        
        $id = $data["id"];
        $nama = $data ["nama"];
        $tanggal_lahir= $data["tanggal_lahir"];
        $contact_number = $data["contact_number"];
        $nama_trainer = $data ["nama_trainer"];
        
        $query = "UPDATE MEMBER SET nama='$nama',tanggal_lahir='$tanggal_lahir',contact_number='$contact_number',nama_trainer='$nama_trainer' WHERE id=$id" ;
        mysqli_query($koneksi,$query);
    
        return mysqli_affected_rows($koneksi); 
    
    }    
        


      
        function tambah_trainer($data)
        {
    
            global $koneksi;
            $nama = $data ["nama"];
            $age= $data["age"];
            $contact_number= $data["contact_number"];
            
         
    
            
            
            $query =  "INSERT INTO trainer VALUES ('','$nama','$age','$contact_number')" ;
             
    
            mysqli_query($koneksi,$query);
            return mysqli_affected_rows($koneksi);
        }
    
        
        
        
    
        function hapus_trainer($data)
        {
            global $koneksi;
    
            $query =  "DELETE FROM MEMBER WHERE id='$data' ";
            
            mysqli_query($koneksi,$query);
            
            return mysqli_affected_rows($koneksi);
        }
    
         
       
    
        function edittrainer ($data)
        {
            global $koneksi;
            
            $id = $data["id"];
            $nama = $data ["nama"];
            $age= $data["age"];
            $contact_number = $data["contact_number"];
            
            $query = "UPDATE MEMBER SET nama='$nama',age='$age',contact_number='$contact_number' WHERE id=$id" ;
    
            mysqli_query($koneksi,$query);
    
            return mysqli_affected_rows($koneksi); 
        }
       
        
    

   

?>