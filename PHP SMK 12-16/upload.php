<form action="" method="post" enctype="multipart/form-data">

    Pilih file Gambar : 
    <input type="file" name="upload">
    <input type="submit" name="kirim" value="Simpan">
</form>
<?php 
    if (isset($_POST['kirim'])) {
        // var_dump($_FILES['upload']);  



        $file = $_FILES['upload'];
       
        foreach ($file as $key => $value) {
            echo $key.' = '.$value.'<br>';
        
        }
        
        $name= $_FILES['upload']['name'];
        $temp = $_FILES['upload']['tmp_name'];
        echo $name.' = '.$temp;

        move_uploaded_file($temp,'gambar/'.$name);
    }

?>