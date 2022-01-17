<?php

// Deklarasi Variabel
session_start();
$username = 'root';
$password = 'root';

// Kondisi Percabangan (Scanning Masukkan Setelah klik 'submit' pada Kotak 'username' & 'password')
if (isset($_POST['submit'])) {

    // 1
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        $_SESSION["username"] = $username;  
        
        echo "Anda Berhasil Login sebagai '$username' ";
        echo "<a  href=\"PORTFOLIO/index.html\">GO TO MAIN PAGE</p></a>"; 
    }
    // 2
    elseif ($_POST['username'] <> $username && $_POST['password'] == $password){
        display_login_form();
        echo  '<p class="warning" style="color:red" align="center">Username salah, Mohon coba lagi</p>';
    }
    // 3
    elseif ($_POST['username'] == $username && $_POST['password'] <> $password){
        display_login_form();
        echo  '<p class="warning" style="color:red" align="center">Password salah, Mohon coba lagi</p>'; }
    // 4
    else {  
        display_login_form();
        echo '<p class="warning" align="center">Username Atau Password salah, Mohon coba lagi</p>';
    }
}
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <link rel="stylesheet" href="style.css">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <section class="contact">
		<div class="container">
			<div class="contact-form">
				<form>
					<h2>Please Login</h2>
					<div class="input-box">
						<span> Username </span><input type="text" name="username" required="required" id="username">
						
					</div>

					<div class="input-box">
						<span>Password</span><input type="password" name="password" required="required" id="password">
						
					</div>
					<div class="input-box">
						<input href="www.google.com" type="submit" name="submit" value="LOGIN"><p> Username &amp; Password default is : root</p>
					</div>
				</form>
			</div>

		</div>
	</section>
    </form>    
<?php } ?>