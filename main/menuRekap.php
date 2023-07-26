<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style2.css" />
</head>

<body>
<div style="margin: 72px;">
    <label>Pilih tanggal:</label>

    <input type="date" id="start" name="trip-start"
       value="2023-06-20"
       min="2023-06-20" max="2023-06-25">
    </input>

</div>

<div style= "margin: 72px;">
    <table>
        <tr style="text-align:justify; margin: 8px;">
            <th>Total Piket Hadir:</th>
            <th> 2 </th>
            <th>Total Lepas Piket:</th>
            <th> 2 </th>
        </tr>
        <tr style="text-align: justify; margin: 8px;">
            <th>Total Cadangan Piket:</th>
            <th> 2 </th>
            <th>Total Izin/Sakit: </th>
            <th> 2 </th>
        </tr>

    </table>

    <br>
    <h4>Total piket hadir</h4>
    <table cellspacing='5' cellpadding='2' border='1'>
        <thead>
            <tr>
                <th> Nama</th>
                <th> Jabatan</th>
                <th> Group Piket</th>
                <th> Keterangan </th>
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
  
                $sql = "SELECT ag.PersonID, ag.Nama, ag.Jabatan, ag.GroupPiket, al.Izin,al.Tanggal FROM ALASAN al JOIN ANGGOTA ag on al.PersonID = ag.PersonID;";
                $res = $con->query($sql);
  
                if(!$res){
                    die ("invalid query" . $con->error);
    
                }

                while($row = $res->fetch_assoc()){
                    echo"
                    <tr>
                        <td>" .$row["Nama"]."</td>
                        <td>" .$row["Jabatan"]."</td>
                        <td>" .$row["GroupPiket"]."</td>
                        <td>" .$row["Izin"]."</td>
                    </tr>";
                }
            ?>


            
        </tbody>
    </table>
</div>
