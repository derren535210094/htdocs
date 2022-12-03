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
        <title>MANUSIA PURBA</title>

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
            
            <a style="text-decoration: none;  color: #404447;" target="_self" href="Sejarah.php">
            <div id="matnama"> <span>SEJARAH</span>  </a> </div>

            <div id="streammat">
                
            </div> 

            </div>

            <a style="text-decoration: none;" target="_self" href="logout.php?id=22" onclick="return confirm('Log Out?')">
            <button id="logoakun" type="button" class="btn btn-outline-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
</svg>
<?= htmlspecialchars($user["name"]) ?> </button></a>

<style>
                #logbukmat2{
    margin-top: 28px;
    margin-left: 175px;
    filter: invert(100%);
}

#gambukmat2{
    z-index: -1;
    background-color: #5f6368;
    position: absolute;
  flex: none;
  width: 41px;
  height: 40px;
  border-radius: 50%;
  border: 0px transparent;
  margin-top: 21px;
  margin-left: 167px;
}
                </style>

            <a style="text-decoration: none;  color: #404447;" target="_self" href="Sejarah.php">
            <div id="matkelas"> <span> SEJARAH SMA KELAS X-XII</span> </a> </div>
                <div id="garismat"></div>
                
            </div>

            <div id="gambukmat2" style="background-color: #faa824;"></div>
            <svg id="logbukmat2" focusable="false" width="24" height="24" viewBox="0 0 24 24"><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 18H6V4h2v8l2.5-1.5L13 12V4h5v16z"></path></svg>
            <div id="titletgsmat"  style="color: #faa824;">MANUSIA PURBA</div>
            <div id="namaorgmat">JJ Rizal <span style="font-size: 20px; position: relative;">&bull;</span> 10 Okt 2022</div>
            <div id="garisnamaorgmat" style="color: #faa824;"></div>
            <div id="soalmat">Halo anak-anak, coba kalian jelaskan dan sebutkan jenis manusia purba di masa praaksara?
                <br>
                <div style="line-height: 2;">
                (Tulis pada kolom komentar)
                </div>
            </div>
            <div id="garisnamaorgmat2"></div>
            <span id="logsiswamat"><svg focusable="false" width="24" height="24" viewBox="0 0 24 24" class=" NMm5M"><path d="M15 8c0-1.42-.5-2.73-1.33-3.76.42-.14.86-.24 1.33-.24 2.21 0 4 1.79 4 4s-1.79 4-4 4c-.43 0-.84-.09-1.23-.21-.03-.01-.06-.02-.1-.03A5.98 5.98 0 0 0 15 8zm1.66 5.13C18.03 14.06 19 15.32 19 17v3h4v-3c0-2.18-3.58-3.47-6.34-3.87zM9 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2m0 9c-2.7 0-5.8 1.29-6 2.01V18h12v-1c-.2-.71-3.3-2-6-2M9 4c2.21 0 4 1.79 4 4s-1.79 4-4 4-4-1.79-4-4 1.79-4 4-4zm0 9c2.67 0 8 1.34 8 4v3H1v-3c0-2.66 5.33-4 8-4z"></path></svg></span>
            <div id="komensiswamat">Komentar kelas</div>

            <div id="gariskotjawmat"></div>
            <div id="kotjawmat"></div>
            <div>
                <input type="text" style="width:800px" maxlength="10000" id ="jawabansejarah" name="jawabanmat" class="jawabanmat" required>
                <span class="floating-label-mat">Tambahkan komentar kelas...</span>
            </div>

            
      <button type="button" id="itemAddmat" onclick="addItem()">
         Add
      </button>
      <button type="button" id="itemRemovemat" onclick="removeItem()">
         Remove
      </button>

      <style>
        #list {
    width: 50%;
    margin-left: 250px;
    line-height: 2;
 }
      </style>

            <script>
                function addItem() {
	// Check if the list exists
   // If not, create the list <ul> in a <div>
   if (!document.getElementById("list")) {
   	// Create new <ul>
      const ul = document.createElement("ul");
      ul.id = "itemList";
      
      // Create new <div>
      const div = document.createElement("div");
      div.id = "list";
      
      // Append <ul> to the <div>
      div.appendChild(ul);
      
      // Append <div> to the body
      document.body.appendChild(div);
   }
   
   // Add new item <li>
   const li = document.createElement("li");
   const text = document.createTextNode(
   	document.getElementById("jawabansejarah").value
   );
   li.appendChild(text);
   
   // Find the <ul> and append <li> into it
   const ul = document.getElementById("itemList");
   ul.appendChild(li);
}

function removeItem() {
	// Check whether <div id="list"> exists
   if (document.getElementById("list")) {
   	// Get <ul>
      const ul = document.getElementById("itemList");
      
      // Get a list of <li>s
      const li = document.getElementsByTagName("li");
      const len = li.length;
      
      // Remove last <li>
      ul.removeChild(li[len - 1]);
      
      // Check if the list is empty, then remove <div>
      if (len - 1 === 0) {
      	const div = document.getElementById("list");
         document.body.removeChild(div);
      }
   }
}
            </script>
            
    </body>

</html>
<?php
mysqli_close($koneksi);
ob_end_flush();
?>