<?php 
    $conection = mysqli_connect('localhost','root','','score');
    if(isset($_POST['simpan']))
    {
        $query = "SELECT * FROM nilai";
        $score = mysqli_query($conection, $query);

        $row = mysqli_fetch_array($score);
        $nilai1 = $row['agen_pertama'];

        $nama    = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $kegiatan = $_POST['kegiatan'];

    
        $query = "INSERT INTO data(nama, jabatan, kegiatan\) VALUES ('$nama', '$jabatan', '$kegiatan')";
        mysqli_query($conection, $query);
    }
?>

<html>
<head>
</head>
<body>

    <form method="post">
        <input type="text" name="nama" value="kegiatan">
        <br>
        
    </select>

    <input type="submit" name="simpan" value="simpan"/>
    </form>
    <table>
           <tr>
                <th>nama</th>
                <th>action</th>
           </tr>
           <tr>
                <td>dinas dalam</td>
                <td><a href="nilai.html">+nilai</a></td>
           </tr>
    </table>
   
</body>
</html>