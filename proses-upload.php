<?php           
            require "excel-reader.php";
            require "koneksi.php";
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            foreach ($_FILES['files']['name'] as $j => $name) {
                if (strlen($_FILES['files']['name'][$j]) > 1) {
                    if (move_uploaded_file($_FILES['files']['tmp_name'][$j],$name)) {

                        chmod($_FILES['files']['name'][$j],0777);
                
                  $data = new Spreadsheet_Excel_Reader($_FILES['files']['name'][$j],$name,false);
                  echo $name;
                
            //    menghitung jumlah baris file xls
                  $baris = $data->rowcount($sheet_index=0);
                  $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;
                   if($drop == 1){
            //             kosongkan tabel pegawai
                      $truncate ="TRUNCATE TABLE kelompok_mhs";
                       mysql_query($truncate);
                   };
                  echo "<table border = '1'>
        
          <tbody>";

          //    data Header
                $baris = $data->rowcount($sheet_index=0);
                for ($i=1; $i<2; $i++)
                {
            //       membaca data (kolom ke-1 sd terakhir)
                  $nim           = $data->val($i, 1,0);
                  $nama           = $data->val($i, 2,0);
                  $prov            = $data->val($i, 3,0);
                  $univ         = $data->val($i, 4,0);
                  $prodi     = $data->val($i, 5,0);
                  echo "<tr>
                <th>".$nim."</th>
                  <th>".$nama."</th>
                  <th>".$prov."</th>
                  <th>".$univ."</th>
                  <th>".$prodi."</th>
              </tr>";
              }
                
            //    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
                $baris = $data->rowcount($sheet_index=0);
                for ($i=2; $i<=$baris; $i++)
                {
            //       membaca data (kolom ke-1 sd terakhir)
                  $nim           = $data->val($i, 1,0);
                  $nama          = $data->val($i, 2,0);
                  $prov          = $data->val($i, 3,0);
                  $univ          = $data->val($i, 4,0);
                  $prodi       = $data->val($i, 5,0);
                  echo "<tr>
                <td>".$nim."</th>
                  <td>".$nama."</td>
                  <td>".$prov."</td>
                  <td>".$univ."</td>
                  <td>".$prodi."</td>
              </tr>";
                 $query = "INSERT into kelompok_mhs (
                        nim,
                        nama,
                        prov,
                        univ,
                        prodi)values('$nim','$nama','$prov','$univ','$prodi')";
                  $hasil = mysql_query($query);
            //      setelah data dibaca, masukkan ke tabel pegawai sql
                }
                
                
                
            //    hapus file xls yang udah dibaca
                
            
          echo "</tbody>
      </table>";
                    }
                }
            }    
                
    }
   ?>