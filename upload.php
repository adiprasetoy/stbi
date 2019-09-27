<html>
<title>UPLOAD FILE PDF</title>
<?php include 'navbar.php';?>
<body>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>

</form>
<?php
$servername = "localhost";
$username = "id10963848_stbi";
$password = "aditampan";
$dbname = "id10963848_stbi";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
$query = mysqli_query($connection,"SELECT * FROM upload ORDER BY tgl_upload DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama File</th>
            <th>Deskripsi</th>
            <th>Tanggal Upload</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><a href="files/<?php echo $data["nama_file"];?>"><?php echo $data["nama_file"];?></a></td>
            <td><?php echo $data["deskripsi"];?></td>
            <td><?php echo $data["tgl_upload"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>