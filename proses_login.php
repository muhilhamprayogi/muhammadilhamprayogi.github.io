<?php
session_start();
$username = 'admin';
$password = 'admin';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["username"] = $username; 
        
        /*Jika Ingin Pindah Ke Halaman Lain*/
         header("Location: home.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
     
        echo '<p>Username Atau Password Salah</p>';
    }
}    
else { 
    
}
?>