<?php
//membuat koneksi ke database
$servername = "localhost";
$username = "id10963848_stbi";
$password = "aditampan";
$dbname = "id10963848_stbi";

$connection = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
   <meta charset="UTF-8">
   <title>TOKENISASI & STEMMING</title>
   <?php include 'navbar.php';?>
</head>
<body>
<html>
  
    <head>
        
       <h2><center>TOKENISASI DAN STEMMING PORTER</center></h2>
        
    </head>
    <body>
        <?php


        ?>
 


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->
    
 <table id="rowhover" class="isi"> 
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter </th>
</tr>

<?php  
// Perintah untuk menampilkan data
$query="SELECT * FROM dokumen" ;  //menampikan SEMUA

 $sql = mysqli_query($connection, $query);

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($sql)) {
$id = $data['dokid'];
?>
<tr>
                 
        <td>
            <?php echo $data['nama_file']; ?>
        </td>
        <td>
            <?php echo $data['token']; ?>
        </td>
        <td>
            <?php echo $data['tokenstem']; ?>
        </td>

 
 <?php       
}

?>

</table>
</div>

</div>
</body>
</html>