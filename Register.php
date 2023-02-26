<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   
</head>
<body>
     <!--Hederi fillon ketu-->

     <header class="header">
        <div class="header-1">
            <a href="../index.php" class="logo"><img src="../img/plazalogo.png" id="LOGO"></a>
                <form action="" class="search-form">
    
                    <input type="search" name="" placeholder="Kërko këtu..." id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </form>
        </div>
        <div class="header-2">

            <nav class="navbar">
                <a href="../index.php">Home</a>
            </nav>
		</div>
        </div>
    </header>
        <!--Hederi mbaron ketu -->
           <!---bottom navbar-->
           <nav class="bottom-navbar">
            <a href="#home" class="fas fa-home"></a>
        </nav>
        <div class="register-container">
            <div class="title">Rregjistrimi</div>
            <div class="register-content">
              <form action="registerform.php" method="post" >
                <div class="user-details">
                  <div class="register-input-box">
                    <span class="details">Emri i përdoruesit</span>
                    <input type="text" placeholder="Shtypni emrin tuaj" id="emri" name="name" required>
                  </div>
                  <div class="register-input-box">
                    <span class="details">Mbiemri i përdoruesit</span>
                    <input type="text" placeholder="Shtypni mbiemrin tuaj" id="mbiemri" name="mbiemri" required>
                  </div>
                  <div class="register-input-box">
                    <span class="details">Emaili i përdoruesit</span>
                    <input type="email" placeholder="Shtypni emailin tuaj" id="email" name="email" required>
                  </div>
                  <div class="register-input-box">
                    <span class="details">Numri i telefonit të përdoruesit</span>
                    <input type="number" placeholder="Shtypni numrin tuaj të telefonit" id="nrtel" name="nrtel" required>
                  </div>
				  <div class="register-input-box">
                    <span class="details">Shenoni fjalekalimin</span>
                    <input type="password" placeholder="Shenoni fjalekalimin tuaj" id="pass" name="pass" required>
                  </div>
                </div>
                <input type="submit" value="Rregjistrohu" class="button">
              </form>
            </div>
          </div>

          <script src="script.js"></script>

</body>
</html>
