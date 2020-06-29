<!DOCTYPE html>
<html lang="en">
<title>Dokumentasi INDO API</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script defer src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
<style>
  html,body,h1,h2,h3,h4,h5,h6 {
    font-family: "Roboto", sans-serif;
  }
  .w3-sidebar {
    z-index: 3;
    width: 250px;
    top: 43px;
    bottom: 0;
    height: inherit;
  }
  code, h3 {
    font-weight: bold;
  }
  pre {
    font-size: 80%;
  }
</style>
<body>
  <div class="w3-top">
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1"
        href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
      <a class="w3-bar-item w3-theme-l1">Dokumentasi Indo API</a>
    </div>
  </div>
  <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
      class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
      <i class="fa fa-remove"></i>
    </a>
    <h4 class="w3-bar-item"><b>Menu</b></h4>    
      <a class="w3-bar-item w3-button w3-hover-black" href="../home.php">Home</a>
      
  </nav>
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
    id="myOverlay"></div>
  <div class="w3-main" style="margin-left:250px">
    <div class="w3-padding-64">
      <div class="w3-row w3-container">
        <h3 class="w3-text-black">Introduction</h3>
        <p>Ini merupakan API Lokasi daerah yang ada di Indonesia. Akan menampilkan data daerah dari seluruh wilayah indonesia baik dari Provinsi, Kabupaten/Kota, Kecamatan maupun Desa/Kelurahan</p>
        <hr>
        <h3 class="w3-text-black">Contoh Request</h3>
        <ul>
          <li><strong>cURL</strong> (<a target="_blank" href="https://www.php.net/manual/en/curl.examples.php">PHP CURL</a>)</li>
<pre class="prettyprint">
curl --location --request GET 'http://localhost/api/indoapi/provinsi.php' \
--header 'Authorization: Token 08b8076534eb01a47fe4ada8ba6e49b6'
</pre>
      
        <hr>
        <h3 class="w3-text-black">Endpoint:</h3>
        <h4>Menampilkan Data Provinsi</h4>
        <div class="w3-bar w3-border-white w3-round">
          <div class="w3-bar-item">
            <div class="w3-tag w3-round w3-green">
              <div class="w3-tag w3-round w3-green w3-border w3-border-white">GET</div>
            </div>
            http://localhost/api/indoapi/provinsi.php
          </div>
        </div>
        <ul>
          <li>Description: mengambil data semua provinsi.</li>
          <li>Example request:</li>
<pre class="prettyprint">
curl --location --request GET 'http://localhost/api/indoapi/provinsi.php' \
--header 'Authorization: Token 08b8076534eb01a47fe4ada8ba6e49b6'
</pre>
          <li>Example response: <button onclick="accordion('provinsilist')" class="w3-padding-small w3-tiny w3-button w3-round w3-teal">Show/hide</button></li>
          <div id="provinsilist" class="w3-hide">
<pre class="prettyprint lang-js">
// 20200629091348
// http://localhost/api/indoapi/provinsi.php

{
  "statusCode": 200,
  "item": [
    {
      "ID": "1",
      "Provinsi": "BANTEN"
    },
    {
      "ID": "2",
      "Provinsi": "DKI JAKARTA"
    },
    {
      "ID": "3",
      "Provinsi": "JAWA BARAT"
    },
    {
      "ID": "4",
      "Provinsi": "JAWA TENGAH"
    },
    {
      "ID": "5",
      "Provinsi": "DI YOGYAKARTA"
    },
    {
      "ID": "6",
      "Provinsi": "JAWA TIMUR"
    },
    {
      "ID": "7",
      "Provinsi": "BALI"
    },
    {
      "ID": "8",
      "Provinsi": "NANGGROE ACEH DARUSSALAM (NAD)"
    },
    {
      "ID": "9",
      "Provinsi": "SUMATERA UTARA"
    },
    {
      "ID": "10",
      "Provinsi": "SUMATERA BARAT"
    },
    {
      "ID": "11",
      "Provinsi": "RIAU"
    },
    {
      "ID": "12",
      "Provinsi": "KEPULAUAN RIAU"
    },
    {
      "ID": "13",
      "Provinsi": "JAMBI"
    },
    {
      "ID": "14",
      "Provinsi": "BENGKULU"
    },
    {
      "ID": "15",
      "Provinsi": "SUMATERA SELATAN"
    },
    {
      "ID": "16",
      "Provinsi": "BANGKA BELITUNG"
    },
    {
      "ID": "17",
      "Provinsi": "LAMPUNG"
    },
    {
      "ID": "18",
      "Provinsi": "KALIMANTAN BARAT"
    },
    {
      "ID": "19",
      "Provinsi": "KALIMANTAN TENGAH"
    },
    {
      "ID": "20",
      "Provinsi": "KALIMANTAN SELATAN"
    },
    {
      "ID": "21",
      "Provinsi": "KALIMANTAN TIMUR"
    },
    {
      "ID": "22",
      "Provinsi": "KALIMANTAN UTARA"
    },
    {
      "ID": "23",
      "Provinsi": "SULAWESI BARAT"
    },
    {
      "ID": "24",
      "Provinsi": "SULAWESI SELATAN"
    },
    {
      "ID": "25",
      "Provinsi": "SULAWESI TENGGARA"
    },
    {
      "ID": "26",
      "Provinsi": "SULAWESI TENGAH"
    },
    {
      "ID": "27",
      "Provinsi": "GORONTALO"
    },
    {
      "ID": "28",
      "Provinsi": "SULAWESI UTARA"
    },
    {
      "ID": "29",
      "Provinsi": "MALUKU"
    },
    {
      "ID": "30",
      "Provinsi": "MALUKU UTARA"
    },
    {
      "ID": "31",
      "Provinsi": "NUSA TENGGARA BARAT (NTB)"
    },
    {
      "ID": "32",
      "Provinsi": "NUSA TENGGARA TIMUR (NTT)"
    },
    {
      "ID": "33",
      "Provinsi": "PAPUA BARAT"
    },
    {
      "ID": "34",
      "Provinsi": "PAPUA"
    }
  ]
}
</pre>
          </div>
        </ul>
        <hr>
        <h4>Data Kabupaten/Kota</h4>
        <div class="w3-bar w3-green w3-round">
          <div class="w3-bar-item">
            <div class="w3-tag w3-round w3-green">
              <div class="w3-tag w3-round w3-green w3-border w3-border-white">GET</div>
            </div>
            http://localhost/api/indoapi/kabkota.php?id=1 (berdasarkan ID Provinsi)
          </div>
        </div>
        <ul>
          <li>Mengambil data Kabupaten/Kota berdasarkan id Provinsi</li>
          <li>URL Parameter: <strong>ID Provinsi</strong>.</li>
          <li>Example request:</li>
<pre class="prettyprint">
curl --location --request GET 'http://localhost/api/indoapi/kabkota.php?id=1'
</pre>
          <li>Example response: <button onclick="accordion('kabkota')" class="w3-padding-small w3-tiny w3-button w3-round w3-teal">Show/hide</button></li>
          <div id="kabkota" class="w3-hide">
<pre class="prettyprint">
// 20200629092012
// http://localhost/api/indoapi/kabkota.php?id=1

{
  "statusCode": 200,
  "item": [
    {
      "ID": "1",
      "Kab/Kota": "CILEGON"
    },
    {
      "ID": "2",
      "Kab/Kota": "LEBAK"
    },
    {
      "ID": "3",
      "Kab/Kota": "PANDEGLANG"
    },
    {
      "ID": "4",
      "Kab/Kota": "SERANG"
    },
    {
      "ID": "5",
      "Kab/Kota": "TANGERANG"
    },
    {
      "ID": "6",
      "Kab/Kota": "TANGERANG SELATAN"
    }
  ]
}
</pre>
          </div>
        </ul>
        <hr>
        
    <footer id="myFooter">
      <div class="w3-container w3-theme-l1">
        <p>Powered by <a href="http://localhost/api/home.php" target="_blank">MUHAMMAD YUSRIL ZAENAL(42517004) & NUR AYU FARAHGTA FANSAB(42517043)</a></p>
      </div>
    </footer>
  </div>
  <script>
    var mySidebar = document.getElementById("mySidebar");
    var overlayBg = document.getElementById("myOverlay");
    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
      } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
      }
    }
    function w3_close() {
      mySidebar.style.display = "none";
      overlayBg.style.display = "none";
    }
    function accordion(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else { 
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
</body>
</html>