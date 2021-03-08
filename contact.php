<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
</head>
<body>
    
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.html" class="w3-bar-item w3-button"><b>MS</b> WORKS</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.html" class="w3-bar-item w3-button">Projects</a>
      <a href="About.html" class="w3-bar-item w3-button">About</a>
      <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="w3-bar-item w3-button" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

