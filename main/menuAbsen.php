<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style2.css" />
</head>



<body style="margin: 72px">

<div style="text-align:right;" class="item1"><label>Tanggal hari ini:</label> <p id='date-time'></p>
  
  <script>
    const d = new Date();
    day = d.getDate();
    month = d.toLocaleString('default', { month: 'long' });
    year = d.getFullYear();
    document.getElementById('date-time').innerHTML= day + "/" + month + "/" + year;
  </script>

</div>

<div>
    <h3> -Group Piket- </h3>
    <p>Piket Hadir: A </p>
    <p>Cadangan Piket: B</p>
    <p>Lepas Piket: C</p>
</div>

<div>
    <table cellspacing='5' cellpadding='2' border='1',class="table">
        <thead>
          <tr>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Status Piket</th>
          <th>Keterangan</th>
          </tr>
        </thead>
    
        <tbody>
          <?php
          
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "sistemAbsen";

        //Create Connection
          $con = new mysqli($servername, $username, $password, $dbname);

        //Check connection
          if($con->connect_error){
            die("connection error: " . $con->connect_error);
            }

          $sql = "SELECT * FROM `ANGGOTA` WHERE `GroupPiket` = 'A' OR `GroupPiket` = 'B'";
          $res = $con->query($sql);

          if(!$res){
            die ("invalid query" . $con->error);
            }

          while($row = $res->fetch_assoc()){
            echo"<tr>
                <td>" . $row["Nama"]. "</td>
                <td>" . $row["Jabatan"]. "</td>
                <td><select on>
                  <option value=0>Pilih absensi</option>
                  <option value=1>Piket Hadir</option>
                  <option value=2>Tidak hadir</option>
                  <option value=3>Cadangan Piket</option>
                </td>
                <td><input type=text id=alasan style.display=block></td>

                <script>
                
                </script>
            </tr>";
            }
        ?>
      </tbody>

    
    </table>
</div>

<div >
    <button>cancel</button>
        <span>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">submit</button>

</div>

<div id="id01" class= "modal" class="container" style="display: none; background-color: #f1f1f1;" >  
    
    <h3>GroupPiket</h3>
    <p>Piket hadir: A </p>
    <p>Cadangan Piket: B </p>
    <p>Lepas Piket: C </p>
    <p> <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Data Absen Hari Ini Telah di SUBMIT !!!</button>
    
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

//tutup modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>









</body>
</html>


