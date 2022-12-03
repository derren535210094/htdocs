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
    <title>Indo Classroom</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">

    <link rel="stylesheet" href="utskelompok1.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Urbanist&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&family=Urbanist&display=swap" rel="stylesheet">

    <script type='text/javascript'>
        setTimeout(function () {
            window.location.href = "logout.php";
        }, 15000);
    </script>

    <style>



    </style>

</head>

<body>

    <div id="atas">

        <div id="navbar2" class="btn-group dropright">
            <button type="button" id="btnn" class="btn" data-toggle="dropdown" aria-expanded="false">
            </button>
            <div id="navbar3" class="dropdown-menu" style="">
                <a class="dropdown-item" href="UAS_Kelompok_1.php">
                    <svg style="fill: #494d50;" focusable="false" width="24" height="24" viewBox="0 0 24 24"
                        class=" NMm5M">
                        <path d="M12 3L4 9v12h16V9l-8-6zm6 16h-3v-6H9v6H6v-9l6-4.5 6 4.5v9z"></path>
                    </svg>
                    <div id="perataan" style="color: #494d50;"> Kelas</div>
                </a>

                <a class="dropdown-item" target="_blank"
                    href="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=Asia%2FJakarta&showCalendars=1&showTabs=1&title=Calender&src=ZGVycmVuLjUzNTIxMDA5NEBzdHUudW50YXIuYWMuaWQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4uaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23039BE5&color=%2333B679&color=%230B8043">
                    <svg style="fill: #494d50;" focusable="false" width="24" height="24" viewBox="0 0 24 24"
                        class=" NMm5M">
                        <path
                            d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z">
                        </path>
                    </svg>
                    <div id="perataan" style="color: #494d50;"> Kalender</div>
                </a>
                <div class="dropdown-divider"></div>
                <span id="perataan2">Terdaftar</span>
                <br><br>
                <a class="dropdown-item" href="Mat.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1LXdzz5BxRs7EQOOaX5WJ1Go_Mf1lD9Ql"
                        alt="Jerome Polin Sijabat, S.T." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> MATEMATIKA</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Inggris.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1GxhzbvFJlcFCDiRi34LV_oowYLgmXdT3"
                        alt="Ayunda Faza Maudya, B.A., M.A., M.B.A." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> BAHASA INGGRIS</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Komputer.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1vCZmZZ9P1OI3Gv7E7xQfwKHi8XrBLRdI"
                        alt="Nadiem Anwar Makarim, B.A., M.B.A." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> KOMPUTER</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Ekonomi.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1kxiVxcJ3cwG2b5zOPsTZHbpNELgZj4PM"
                        alt="Shafa Tasya Kamila, S.E., MPA." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> EKONOMI</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Pkwu.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=159PBYdLlPPPvfJ9GftC3QDrB-kokMNQW"
                        alt="Dr. H. Sandiaga Salahuddin Uno, BBA., MBA." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> PENDIDIKAN KEWIRAUSAHAAN</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Bi.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1zjMji9dxCjmyU0bc8nPkHS3Zb6Rhth-w"
                        alt="Najwa Shihab, S.H., LL.M." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> BAHASA INDONESIA</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Pkn.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1EPJpevPB_o2DQbT0aYFVXzkA1SISI1HW"
                        alt="Dr. Hotman Paris Hutapea, S.H., LL.M., M.Hum." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> PENDIDIKAN KEWARGANEGARAAN</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Or.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1scAT2DxSEZirioX4KsTf_9GYEx_8lgEC"
                        alt="Deodatus Andreas Deddy Cahyadi Sunjoyo, S.Psi., M.Psi." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> PENDIDIKAN JASMANI DAN ROHANI</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Senbud.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1F8j5plJx_U2FPgr87VAT0fTvBUJzMvGD"
                        alt="Diandra Paramitha Sastrowardoyo, S.Fil., M.M." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> SENI BUDAYA</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Fisika.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1TnzWP6CNuTeI_hbuFhcccEpX6DvGxgd0"
                        alt="Rizki Syarif, S.Si., M.Fis., PhD." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> FISIKA</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Sejarah.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1UP498hopt8HsipsshoymXd976tVCngs6" alt="JJ Rizal, S.S."
                        data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> SEJARAH</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>

                <a class="dropdown-item" href="Musik.php">
                    <img id="photopro" aria-hidden="true"
                        src="https://drive.google.com/uc?id=1rZgJxQLWahhZOM5gbzUr4dLSyNsF9LdS"
                        alt="Rizki Rahmahadian Pamungkas, S.Ds." data-atf="false" loading="lazy">
                    <div id="perataan3" style="color: #494d50;"> MUSIK</div>
                    <div id="perataan4" style="color: #494d50;">SMA KELAS X-XII</div>
                </a>
            </div>
        </div>

        <svg width="24" height="24" viewBox="0 0 24 24" focusable="false" id="navbarss">
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
        </svg>

        <div id="judul2">
            <span style="color:#4285f4">I</span>
            <span id="test" style="color:#ea4335">n</span>
            <span id="test" style="color:#fbbc05">d</span>
            <span id="test" style="color:#34a852">o</span>
        </div>
        <div id="judul">Classroom</div>

        <a style="text-decoration: none;" target="_self" href="logout.php?id=22" onclick="return confirm('Log Out?')">
            <button id="logoakun" type="button" class="btn btn-outline-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
                    </path>
                </svg>
                <?= htmlspecialchars($user["name"]) ?> </button></a>

        <div id="garis"></div>

    </div>

    <a style="text-decoration: none" target="_blank"
        href="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%234285F4&ctz=Asia%2FJakarta&showCalendars=1&showTabs=1&title=Calender&src=ZGVycmVuLjUzNTIxMDA5NEBzdHUudW50YXIuYWMuaWQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4uaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23039BE5&color=%2333B679&color=%230B8043"
        style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no">
        <div id="kotcal">
            <svg focusable="false" width="18" height="18" viewBox="0 0 24 24" id="calender">
                <path
                    d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z">
                </path>
            </svg>
            <span id="kalenderss" aria-hidden="true">Kalender</span>
        </div>
    </a>

    <a style="text-decoration: none; color: white;" target="_self" href="Mat.php">
        <div draggable="true" id="kelas1">
            <div id="putih" class="kelas1"
                style="background-image: url(https://gstatic.com/classroom/themes/Math_thumb.jpg);">
                <div>

                    <div id="mat"> MATEMATIKA</div>

                    <div id="kelas1part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group1">
        <div id="jer">Jerome Polin</div>
    </div>

    <img id="photo1" aria-hidden="true" src="https://drive.google.com/uc?id=1LXdzz5BxRs7EQOOaX5WJ1Go_Mf1lD9Ql"
        alt="Jerome Polin Sijabat, S.T." data-atf="false" loading="lazy">

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo1');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah1">

        <div id="hr1">


        </div>
    </div>
    </div>
    </div>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/jeromepolin/">
        <button id="igjer" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>


    <a style="text-decoration: none; color: white;" target="_self" href="Inggris.php">
        <div draggable="true" id="kelas2">
            <div id="putih2" class="kelas2"
                style="background-image: url(https://gstatic.com/classroom/themes/USHistory_thumb.jpg);">
                <div>
                    <div id="ekonomi">BAHASA INGGRIS</div>

                    <div id="kelas2part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group2">
        <div id="maud">Maudy Ayunda</div>
    </div>

    <img id="photo2" aria-hidden="true" src="https://drive.google.com/uc?id=1GxhzbvFJlcFCDiRi34LV_oowYLgmXdT3"
        alt="Ayunda Faza Maudya, B.A., M.A., M.B.A." data-atf="false" loading="lazy">

    <div id="myModal1" class="modal1">
        <span class="close1">&times;</span>
        <img class="modalcontent" id="img02">
        <div id="caption1"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal1');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo2');
        var modalImg = document.getElementById("img02");
        var captionText = document.getElementById("caption1");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close1")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah2">

        <div id="hr2">

        </div>
    </div>
    </div>
    </div>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/maudyayunda/">
        <button id="igmaud" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>



    <a style="text-decoration: none; color: white;" target="_self" href="Komputer.php">
        <div draggable="true" id="kelas3">
            <div id="putih3" class="kelas3"
                style="background-image: url(https://gstatic.com/classroom/themes/img_code_thumb.jpg);">
                <div>

                    <div id="komp">KOMPUTER</div>

                    <div id="kelas3part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group3">
        <div id="nad">Nadiem Makarim</div>
    </div>

    <img id="photo3" aria-hidden="true" src="https://drive.google.com/uc?id=1vCZmZZ9P1OI3Gv7E7xQfwKHi8XrBLRdI"
        alt="Nadiem Anwar Makarim, B.A., M.B.A." data-atf="false" loading="lazy">

    <div id="myModal2" class="modal2">
        <span class="close2">&times;</span>
        <img class="modalcontent" id="img03">
        <div id="caption2"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal2');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo3');
        var modalImg = document.getElementById("img03");
        var captionText = document.getElementById("caption2");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close2")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah3">

        <div id="hr3">

        </div>
    </div>
    </div>
    </div>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/nadiemmakarim/">
        <button id="ignadi" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>




    <a style="text-decoration: none; color: white;" target="_self" href="Ekonomi.php">
        <div draggable="true" id="kelas4">
            <div id="putih4" class="kelas4"
                style="background-image: url(https://gstatic.com/classroom/themes/Economics_thumb.jpg);">
                <div>

                    <div id="ekon">EKONOMI</div>

                    <div id="kelas4part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group4">
        <div id="tas">Tasya Kamila</div>
    </div>

    <img id="photo4" aria-hidden="true" src="https://drive.google.com/uc?id=1kxiVxcJ3cwG2b5zOPsTZHbpNELgZj4PM"
        alt="Shafa Tasya Kamila, S.E., MPA." data-atf="false" loading="lazy">

    <div id="myModal3" class="modal3">
        <span class="close3">&times;</span>
        <img class="modalcontent" id="img04">
        <div id="caption3"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal3');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo4');
        var modalImg = document.getElementById("img04");
        var captionText = document.getElementById("caption3");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close3")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah4">

        <div id="hr4">

        </div>
    </div>
    </div>
    </div>

    <style>
        #igtas {
            position: absolute;
            margin-left: 85px;
            margin-top: -29px;
        }

        #igtas:hover {
            color: #30ad71;
        }
    </style>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/tasyakamila/">
        <button id="igtas" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>




    <a style="text-decoration: none; color: white;" target="_self" href="Pkwu.php">
        <div draggable="true" id="kelas5">
            <div id="putih5" class="kelas5"
                style="background-image: url(https://gstatic.com/classroom/themes/img_breakfast_thumb.jpg);">
                <div>

                    <div id="pkwu">PENDIDIKAN KEWIRAUSAHAAN</div>

                    <div id="kelas5part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group5">
        <div id="san">Sandiaga Uno</div>
    </div>

    <img id="photo5" aria-hidden="true" src="https://drive.google.com/uc?id=159PBYdLlPPPvfJ9GftC3QDrB-kokMNQW"
        alt="Dr. H. Sandiaga Salahuddin Uno, BBA., MBA." data-atf="false" loading="lazy">

    <div id="myModal4" class="modal4">
        <span class="close4">&times;</span>
        <img class="modalcontent" id="img05">
        <div id="caption4"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal4');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo5');
        var modalImg = document.getElementById("img05");
        var captionText = document.getElementById("caption4");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close4")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah5">

        <div id="hr5">

        </div>
    </div>
    </div>
    </div>

    <style>
        #igsan {
            position: absolute;
            margin-left: 85px;
            margin-top: -29px;
        }

        #igsan:hover {
            color: #fe8b66;
        }
    </style>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/sandiuno/">
        <button id="igsan" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>



    <a style="text-decoration: none; color: white;" target="_self" href="Bi.php">
        <div draggable="true" id="kelas6">
            <div id="putih6" class="kelas6"
                style="background-image: url(https://gstatic.com/classroom/themes/LanguageArts_thumb.jpg);">
                <div>

                    <div id="bi">BAHASA INDONESIA</div>

                    <div id="kelas6part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group6">
        <div id="naj">Najwa Shihab</div>
    </div>

    <img id="photo6" aria-hidden="true" src="https://drive.google.com/uc?id=1zjMji9dxCjmyU0bc8nPkHS3Zb6Rhth-w"
        alt="Najwa Shihab, S.H., LL.M." data-atf="false" loading="lazy">

    <div id="myModal5" class="modal5">
        <span class="close5">&times;</span>
        <img class="modalcontent" id="img06">
        <div id="caption5"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal5');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo6');
        var modalImg = document.getElementById("img06");
        var captionText = document.getElementById("caption5");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close5")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah6">

        <div id="hr6">

        </div>
    </div>
    </div>
    </div>

    <style>
        #ignaj {
            position: absolute;
            margin-left: 85px;
            margin-top: -29px;
        }

        #ignaj:hover {
            color: #0d8490;
        }
    </style>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/najwashihab/">
        <button id="ignaj" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>



    <a style="text-decoration: none; color: white;" target="_self" href="Pkn.php">
        <div draggable="true" id="kelas7">
            <div id="putih7" class="kelas7"
                style="background-image: url(https://gstatic.com/classroom/themes/img_reachout_thumb.jpg);">
                <div>

                    <div id="pkn">PENDIDIKAN KEWARGANEGARAAN</div>

                    <div id="kelas7part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group7">
        <div id="par">Hotman Paris</div>
    </div>

    <img id="photo7" aria-hidden="true" src="https://drive.google.com/uc?id=1EPJpevPB_o2DQbT0aYFVXzkA1SISI1HW"
        alt="Dr. Hotman Paris Hutapea, S.H., LL.M., M.Hum." data-atf="false" loading="lazy">

    <div id="myModal6" class="modal6">
        <span class="close6">&times;</span>
        <img class="modalcontent" id="img07">
        <div id="caption6"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal6');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo7');
        var modalImg = document.getElementById("img07");
        var captionText = document.getElementById("caption6");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close6")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah7">

        <div id="hr7">

        </div>
    </div>
    </div>
    </div>

    <style>
        #ighotman {
            position: absolute;
            margin-left: 85px;
            margin-top: -29px;
        }

        #ighotman:hover {
            color: #029687;
        }
    </style>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/hotmanparisofficial/">
        <button id="ighotman" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>


    <a style="text-decoration: none; color: white;" target="_self" href="Or.php">
        <div draggable="true" id="kelas8">
            <div id="putih8" class="kelas8"
                style="background-image: url(https://gstatic.com/classroom/themes/img_boxing_thumb.jpg);">
                <div>

                    <div id="or">PENDIDIKAN JASMANI DAN ROHANI</div>

                    <div id="kelas8part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group8">
        <div id="ded">Deddy Corbuzier</div>
    </div>

    <img id="photo8" aria-hidden="true" src="https://drive.google.com/uc?id=1scAT2DxSEZirioX4KsTf_9GYEx_8lgEC"
        alt="Deodatus Andreas Deddy Cahyadi Sunjoyo, S.Psi., M.Psi." data-atf="false" loading="lazy">

    <div id="myModal7" class="modal7">
        <span class="close7">&times;</span>
        <img class="modalcontent" id="img08">
        <div id="caption7"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal7');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo8');
        var modalImg = document.getElementById("img08");
        var captionText = document.getElementById("caption7");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close7")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah8">

        <div id="hr8">

        </div>
    </div>
    </div>
    </div>

    <style>
        #igded {
            position: absolute;
            margin-left: 85px;
            margin-top: -29px;
        }

        #igded:hover {
            color: #646464;
        }
    </style>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/mastercorbuzier/">
        <button id="igded" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>



    <a style="text-decoration: none; color: white;" target="_self" href="Senbud.php">
        <div draggable="true" id="kelas9">
            <div id="putih9" class="kelas9"
                style="background-image: url(https://gstatic.com/classroom/themes/img_arts_thumb.jpg);">
                <div>

                    <div id="sen">SENI BUDAYA</div>

                    <div id="kelas9part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group9">
        <div id="dian">Dian Sastrowardoyo</div>
    </div>

    <img id="photo9" aria-hidden="true" src="https://drive.google.com/uc?id=1F8j5plJx_U2FPgr87VAT0fTvBUJzMvGD"
        alt="Diandra Paramitha Sastrowardoyo, S.Fil., M.M." data-atf="false" loading="lazy">

    <div id="myModal8" class="modal8">
        <span class="close8">&times;</span>
        <img class="modalcontent" id="img09">
        <div id="caption8"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal8');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo9');
        var modalImg = document.getElementById("img09");
        var captionText = document.getElementById("caption8");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close8")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah9">

        <div id="hr9">

        </div>
    </div>
    </div>
    </div>

    <style>
        #igdian {
            position: absolute;
            margin-left: 85px;
            margin-top: -29px;
        }

        #igdian:hover {
            color: #90a4ad;
        }
    </style>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/therealdisastr/">
        <button id="igdian" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>



    <a style="text-decoration: none; color: white;" target="_self" href="Fisika.php">
        <div draggable="true" id="kelas10">
            <div id="putih10" class="kelas10"
                style="background-image: url(https://gstatic.com/classroom/themes/Physics_thumb.jpg);">
                <div>

                    <div id="fis">FISIKA</div>

                    <div id="kelas10part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group10">
        <div id="riz">Rizki Syarif</div>
    </div>

    <img id="photo10" aria-hidden="true" src="https://drive.google.com/uc?id=1TnzWP6CNuTeI_hbuFhcccEpX6DvGxgd0"
        alt="Rizki Syarif, S.Si., M.Fis., PhD." data-atf="false" loading="lazy">

    <div id="myModal9" class="modal9">
        <span class="close9">&times;</span>
        <img class="modalcontent" id="img10">
        <div id="caption9"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal9');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo10');
        var modalImg = document.getElementById("img10");
        var captionText = document.getElementById("caption9");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close9")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah10">

        <div id="hr10">

        </div>
    </div>
    </div>
    </div>

    <style>
        #igriz {
            position: absolute;
            margin-left: 85px;
            margin-top: -29px;
        }

        #igriz:hover {
            color: #4167b2;
        }
    </style>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/p/BvJRz1KHn3d/">
        <button id="igriz" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>


    <a style="text-decoration: none; color: white;" target="_self" href="Sejarah.php">
        <div draggable="true" id="kelas11">
            <div id="putih11" class="kelas11"
                style="background-image: url(https://gstatic.com/classroom/themes/SocialStudies_thumb.jpg);">
                <div>

                    <div id="sej">SEJARAH</div>

                    <div id="kelas11part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group11">
        <div id="jj">JJ Rizal</div>
    </div>

    <img id="photo11" aria-hidden="true" src="https://drive.google.com/uc?id=1UP498hopt8HsipsshoymXd976tVCngs6"
        alt="JJ Rizal, S.S." data-atf="false" loading="lazy">

    <div id="myModal10" class="modal10">
        <span class="close10">&times;</span>
        <img class="modalcontent" id="img11">
        <div id="caption10"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal10');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo11');
        var modalImg = document.getElementById("img11");
        var captionText = document.getElementById("caption10");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close10")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah11">

        <div id="hr11">

        </div>
    </div>
    </div>
    </div>

    <style>
        #igjj {
            position: absolute;
            margin-left: 85px;
            margin-top: -29px;
        }

        #igjj:hover {
            color: #faa824;
        }
    </style>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/jalanjalanrizal/">
        <button id="igjj" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>



    <a style="text-decoration: none; color: white;" target="_self" href="Musik.php">
        <div draggable="true" id="kelas12">
            <div id="putih12" class="kelas12"
                style="background-image: url(https://gstatic.com/classroom/themes/img_learninstrument_thumb.jpg);">
                <div>

                    <div id="mus">MUSIK</div>

                    <div id="kelas12part2"> SMA KELAS X-XII </div>
    </a>
    <div id="group12">
        <div id="pam">Pamungkas</div>
    </div>

    <img id="photo12" aria-hidden="true" src="https://drive.google.com/uc?id=1rZgJxQLWahhZOM5gbzUr4dLSyNsF9LdS"
        alt="Rizki Rahmahadian Pamungkas, S.Ds." data-atf="false" loading="lazy">

    <div id="myModal11" class="modal11">
        <span class="close11">&times;</span>
        <img class="modalcontent" id="img12">
        <div id="caption11"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal11');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('photo12');
        var modalImg = document.getElementById("img12");
        var captionText = document.getElementById("caption11");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close11")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>

    <div id="bawah12">

        <div id="hr12">

        </div>
    </div>
    </div>
    </div>

    <style>
        #igpam {
            position: absolute;
            margin-left: 85px;
            margin-top: -29px;
        }

        #igpam:hover {
            color: #673bb8;
        }
    </style>

    <a style="text-decoration: none" target="_blank" href="https://www.instagram.com/pamunqkas/">
        <button id="igpam" type="button" class="btn">
            <svg width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                </path>
            </svg>
            Instagram
        </button></a>
    </div>


    <script>
        function handleDragStart(e) {
            this.style.opacity = '0.4';
        }

        function handleDragEnd(e) {
            this.style.opacity = '1';
        }

        let items = document.querySelectorAll(
            '#kelas1, #kelas2, #kelas3, #kelas4, #kelas5, #kelas6, #kelas7, #kelas8, #kelas9, #kelas10, #kelas11, #kelas12'
        );
        items.forEach(function (item) {
            item.addEventListener('dragstart', handleDragStart);
            item.addEventListener('dragend', handleDragEnd);
        });


        document.addEventListener('DOMContentLoaded', (event) => {

            function handleDragStart(e) {
                this.style.opacity = '0.4';
            }

            function handleDragEnd(e) {
                this.style.opacity = '1';

                items.forEach(function (item) {
                    item.classList.remove('over');
                });
            }

            function handleDragOver(e) {
                e.preventDefault();
                return false;
            }

            function handleDragEnter(e) {
                this.classList.add('over');
            }

            function handleDragLeave(e) {
                this.classList.remove('over');
            }

            let items = document.querySelectorAll(
                '#kelas1, #kelas2, #kelas3, #kelas4, #kelas5, #kelas6, #kelas7, #kelas8, #kelas9, #kelas10, #kelas11, #kelas12'
            );
            items.forEach(function (item) {
                item.addEventListener('dragstart', handleDragStart);
                item.addEventListener('dragover', handleDragOver);
                item.addEventListener('dragenter', handleDragEnter);
                item.addEventListener('dragleave', handleDragLeave);
                item.addEventListener('dragend', handleDragEnd);
                item.addEventListener('drop', handleDrop);
            });
        });

        function handleDragStart(e) {
            this.style.opacity = '0.4';

            dragSrcEl = this;

            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/html', this.innerHTML);
        }

        function handleDrop(e) {
            e.stopPropagation();

            if (dragSrcEl !== this) {
                dragSrcEl.innerHTML = this.innerHTML;
                this.innerHTML = e.dataTransfer.getData('text/html');
            }

            return false;
        }
    </script>


</body>

</html>
<?php
mysqli_close($koneksi);
ob_end_flush();
?>