<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}


ob_start();
    session_start();
    if(!isset($_SESSION['user_id'])) header("location: signup.html");
    include "/config.php";
  
?>

<html>

    <head>
        <title>FISIKA SMA KELAS X-XII</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="utskelompok1.css" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Urbanist&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&family=Urbanist&display=swap" rel="stylesheet">

        <script type='text/javascript'>

setTimeout(function () {
       window.location.href = "logout.php";
    }, 600000);
    </script>

    </head>

    <body>

        <div id="atas">

            <div id="navbar2" class="btn-group dropright">
                <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false">
                </button>
                <div id="navbar3" class="dropdown-menu">
                  <a class="dropdown-item" href="UAS_Kelompok_1.php">
                    <svg style="fill: #494d50;" focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M"><path d="M12 3L4 9v12h16V9l-8-6zm6 16h-3v-6H9v6H6v-9l6-4.5 6 4.5v9z"></path></svg>
                   <div id="perataan" style="color: #494d50;"> Kelas</div></a>
                   
                  <a class="dropdown-item" target="_blank" href="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=Asia%2FJakarta&showCalendars=1&showTabs=1&title=Calender&src=ZGVycmVuLjUzNTIxMDA5NEBzdHUudW50YXIuYWMuaWQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4uaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23039BE5&color=%2333B679&color=%230B8043">
                    <svg style="fill: #494d50;" focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M"><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"></path></svg>
                    <div id="perataan" style="color: #494d50;"> Kalender</div></a>
                  <div class="dropdown-divider"></div>
                  <span id="perataan2">Terdaftar</span>
                  <br><br>
                  <a class="dropdown-item" href="Mat.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1LXdzz5BxRs7EQOOaX5WJ1Go_Mf1lD9Ql" alt="Jerome Polin Sijabat, S.T." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> MATEMATIKA</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>
                
                <a class="dropdown-item" href="Inggris.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1GxhzbvFJlcFCDiRi34LV_oowYLgmXdT3" alt="Ayunda Faza Maudya, B.A., M.A., M.B.A." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> BAHASA INGGRIS</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>
                
                <a class="dropdown-item" href="Komputer.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1vCZmZZ9P1OI3Gv7E7xQfwKHi8XrBLRdI" alt="Nadiem Anwar Makarim, B.A., M.B.A." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> KOMPUTER</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>
                
                <a class="dropdown-item" href="Ekonomi.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1kxiVxcJ3cwG2b5zOPsTZHbpNELgZj4PM" alt="Shafa Tasya Kamila, S.E., MPA." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> EKONOMI</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>
                
                <a class="dropdown-item" href="Pkwu.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=159PBYdLlPPPvfJ9GftC3QDrB-kokMNQW" alt="Dr. H. Sandiaga Salahuddin Uno, BBA., MBA." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> PENDIDIKAN KEWIRAUSAHAAN</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>
                
                <a class="dropdown-item" href="Bi.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1zjMji9dxCjmyU0bc8nPkHS3Zb6Rhth-w" alt="Najwa Shihab, S.H., LL.M." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> BAHASA INDONESIA</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>
                
                <a class="dropdown-item" href="Pkn.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1EPJpevPB_o2DQbT0aYFVXzkA1SISI1HW" alt="Dr. Hotman Paris Hutapea, S.H., LL.M., M.Hum." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> PENDIDIKAN KEWARGANEGARAAN</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>
                
                <a class="dropdown-item" href="Or.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1scAT2DxSEZirioX4KsTf_9GYEx_8lgEC" alt="Deodatus Andreas Deddy Cahyadi Sunjoyo, S.Psi., M.Psi." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> PENDIDIKAN JASMANI DAN ROHANI</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>

                <a class="dropdown-item" href="Senbud.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1F8j5plJx_U2FPgr87VAT0fTvBUJzMvGD" alt="Diandra Paramitha Sastrowardoyo, S.Fil., M.M." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> SENI BUDAYA</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>

                <a class="dropdown-item" href="Fisika.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1TnzWP6CNuTeI_hbuFhcccEpX6DvGxgd0" alt="Rizki Syarif, S.Si., M.Fis., PhD." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> FISIKA</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>

                <a class="dropdown-item" href="Sejarah.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1UP498hopt8HsipsshoymXd976tVCngs6" alt="JJ Rizal, S.S." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> SEJARAH</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>

                <a class="dropdown-item" href="Musik.php">
                    <img id="photopro" aria-hidden="true" src="https://drive.google.com/uc?id=1rZgJxQLWahhZOM5gbzUr4dLSyNsF9LdS" alt="Rizki Rahmahadian Pamungkas, S.Ds." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> MUSIK</div>
                <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div></a>
            </div>
                </div>

              <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" id="navbar"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
            
            <div id="matnama"> <span>FISIKA</span> </div>

            <a style="text-decoration: none;" target="_self" href="Fisika.php">
            <div id="streammat">
                <div id="kotstreamm">
                
                <div id="streamm" style="font-size: 13px;"> Streaming</div> 
            </div> 
        </a>
            
        <a style="text-decoration: none;" target="_self" href="orgfisika.php">
                <div id="kotmat">
                <div id="orangmat" style="font-size: 13px;"> Orang</div>
                </div>
            </a>
            </div>

            <a style="text-decoration: none;" target="_self" href="logout.php?id=22" onclick="return confirm('Log Out?')">
            <button id="logoakun" type="button" class="btn btn-outline-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
</svg>
<?= htmlspecialchars($user["name"]) ?> </button></a>

            <div id="matkelas"> <span> FISIKA SMA KELAS X-XII</span> </div>
                <div id="garismat"></div>
                
            </div>

            <div id="walfisika">
                <div id="namamat"> <div id="namamat1">FISIKA</div></div>
                <div id="namamatkelas"> <div id="namamatkelas">SMA KELAS X-XII</div></div>
                
            </div>

            <a style="text-decoration: none;" target="_self" href="Tgsfisika.php">
            <div id="kottugmat" target="_self" href="Tgsfisika.php">

<div id="namatgsmat" style="color: black;">Rizki Syarif memposting materi baru: RELATIVITAS</div>

<div id="tglpostmat" style="color: #6e7176;">10 Okt 2022</div>

<div id="gambukmat" style="background-color: #4167b2;"></div>      
    
<svg id="logbukmat" focusable="false" width="24" height="24" viewBox="0 0 24 24"><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 18H6V4h2v8l2.5-1.5L13 12V4h5v16z"></path></svg>
 </div> </a>

 <br><br><br><br>

 <a style="text-decoration: none;" target="_self" href="Tgsfisika2.php">
            <div id="kottugmat" target="_self" href="Tgsfisika2.php">

<div id="namatgsmat" style="color: black;">Rizki Syarif memposting materi baru: HAMBATAN</div>

<div id="tglpostmat" style="color: #6e7176;">1 Des 2022</div>

<div id="gambukmat" style="background-color: #4167b2;"></div>
    
<svg id="logbukmat" focusable="false" width="24" height="24" viewBox="0 0 24 24"><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 18H6V4h2v8l2.5-1.5L13 12V4h5v16z"></path></svg>
 </div> </a>

    </body>

</html>
<?php
mysqli_close($koneksi);
ob_end_flush();
?>