<?php
  require_once "header.php";
  require_once "navbar.php";
  ?>
  <style>
      
  .kurlakonum{
      width: 100%;
  display: inline-block;
  display: flex; 
  justify-content: center; 
  align-items: center;
  padding-top: 20px;
  }
  </style>
  <div class="kurlakonum">
  <table>
    <tr>
      <th> Döviz Cinsi</th>
      <th>Alış</th>
      <th>Satış</th>
      <th>Değişim</th>
    </tr>
    <?php
  
    $defines = array(
      array("ABD DOLARI", $veri["USD"]["Alış"], $veri["USD"]["Satış"], $veri["USD"]["Değişim"]),
      array("EURO", $veri["EUR"]["Alış"], $veri["EUR"]["Satış"], $veri["EUR"]["Değişim"]),
      array("STERLİN", $veri["GBP"]["Alış"], $veri["GBP"]["Satış"], $veri["GBP"]["Değişim"]),
      array("İSVİÇRE FRANGI", $veri["CHF"]["Alış"], $veri["CHF"]["Satış"], $veri["CHF"]["Değişim"]),
      array("KANADA DOLARI", $veri["CAD"]["Alış"], $veri["CAD"]["Satış"], $veri["CAD"]["Değişim"]),
      array("RUBLE", $veri["RUB"]["Alış"], $veri["RUB"]["Satış"], $veri["RUB"]["Değişim"]),
      array("BAE DİRHEMİ", $veri["AED"]["Alış"], $veri["AED"]["Satış"], $veri["AED"]["Değişim"]),
      array("AVUSTURALYA DOLARI", $veri["AUD"]["Alış"], $veri["AUD"]["Satış"], $veri["AUD"]["Değişim"]),
      array("DANİMARKA KRONU", $veri["DKK"]["Alış"], $veri["DKK"]["Satış"], $veri["DKK"]["Değişim"]),
      array("İSVEÇ KRONU", $veri["SEK"]["Alış"], $veri["SEK"]["Satış"], $veri["SEK"]["Değişim"]),
      array("NORVEÇ KRONU", $veri["NOK"]["Alış"], $veri["NOK"]["Satış"], $veri["NOK"]["Değişim"]),
      array("JAPON YENİ", $veri["JPY"]["Alış"], $veri["JPY"]["Satış"], $veri["JPY"]["Değişim"]),
      array("KUVEYT DİNARI", $veri["KWD"]["Alış"], $veri["KWD"]["Satış"], $veri["KWD"]["Değişim"]),
      array("GÜNEY AFRİKA RANDI", $veri["ZAR"]["Alış"], $veri["ZAR"]["Satış"], $veri["ZAR"]["Değişim"]),
      array("BAHREYN DİNARI", $veri["BHD"]["Alış"], $veri["BHD"]["Satış"], $veri["BHD"]["Değişim"]),
      array("LİBYA DİNARI", $veri["LYD"]["Alış"], $veri["LYD"]["Satış"], $veri["LYD"]["Değişim"]),
      array("SUUDİ ARABİSTAN RİYALİ", $veri["SAR"]["Alış"], $veri["SAR"]["Satış"], $veri["SAR"]["Değişim"]),
      array("IRAK DİNARI", $veri["IQD"]["Alış"], $veri["IQD"]["Satış"], $veri["IQD"]["Değişim"]),
      array("İRAN DİNARI", $veri["IRR"]["Alış"], $veri["IRR"]["Satış"], $veri["IRR"]["Değişim"]),
      array("HİNDİSTAN RUPİSİ", $veri["INR"]["Alış"], $veri["INR"]["Satış"], $veri["INR"]["Değişim"]),
      array("MEKSİKA PEZOSU", $veri["MXN"]["Alış"], $veri["MXN"]["Satış"], $veri["MXN"]["Değişim"]),
      array("AZERBAYCAN MANATI", $veri["AZN"]["Alış"], $veri["AZN"]["Satış"], $veri["AZN"]["Değişim"]),
      array("MACAR FORİNTİ", $veri["HUF"]["Alış"], $veri["HUF"]["Satış"], $veri["HUF"]["Değişim"]),
      array("YENİ ZELANDA DOLARI", $veri["NZD"]["Alış"], $veri["NZD"]["Satış"], $veri["NZD"]["Değişim"]),
      array("BREZİLYA REALİ", $veri["BRL"]["Alış"], $veri["BRL"]["Satış"], $veri["BRL"]["Değişim"]),
      array("ENDONEZYA RUPIYASI", $veri["IDR"]["Alış"], $veri["IDR"]["Satış"], $veri["IDR"]["Değişim"]),
      array("ÇEKKORUNASI", $veri["CZK"]["Alış"], $veri["CZK"]["Satış"], $veri["CZK"]["Değişim"]),
      array("POLONYA ZLOTİSİ", $veri["PLN"]["Alış"], $veri["PLN"]["Satış"], $veri["PLN"]["Değişim"]),
      array("ROMANYA LEYİ", $veri["RON"]["Alış"], $veri["RON"]["Satış"], $veri["RON"]["Değişim"]),
      array("ÇİN YUANI", $veri["CNY"]["Alış"], $veri["CNY"]["Satış"], $veri["CNY"]["Değişim"]),
      array("ARJANTİN PEZOSU", $veri["ARS"]["Alış"], $veri["ARS"]["Satış"], $veri["ARS"]["Değişim"]),
      array("ARNAVUTLUK LEKI", $veri["ALL"]["Alış"], $veri["ALL"]["Satış"], $veri["ALL"]["Değişim"]),
      array("BOSNA-HERSEK MARKASI", $veri["BAM"]["Alış"], $veri["BAM"]["Satış"], $veri["BAM"]["Değişim"]),
      array("ŞİLİ PEZOSU", $veri["CLP"]["Alış"], $veri["CLP"]["Satış"], $veri["CLP"]["Değişim"]),
      array("KOLOMBİYA PEZOSU", $veri["COP"]["Alış"], $veri["COP"]["Satış"], $veri["COP"]["Değişim"]),
      array("KOSTA RİKA KOLONU", $veri["CRC"]["Alış"], $veri["CRC"]["Satış"], $veri["CRC"]["Değişim"]),
      array("CEZAYİR DİNARİ", $veri["DZD"]["Alış"], $veri["DZD"]["Satış"], $veri["DZD"]["Değişim"]),
      array("MISIR LİRASI", $veri["EGP"]["Alış"], $veri["EGP"]["Satış"], $veri["EGP"]["Değişim"]),
      array("HONG KONG DOLARI", $veri["HKD"]["Alış"], $veri["HKD"]["Satış"], $veri["HKD"]["Değişim"]),
      array("HIRVAT KUNASI", $veri["HRK"]["Alış"], $veri["HRK"]["Satış"], $veri["HRK"]["Değişim"]),
      array("ÜRDÜN DİNARI", $veri["JOD"]["Alış"], $veri["JOD"]["Satış"], $veri["JOD"]["Değişim"]),
      array("GÜNEY KORE WONU", $veri["KRW"]["Alış"], $veri["KRW"]["Satış"], $veri["KRW"]["Değişim"]),
      array("KAZAK TENGESİ", $veri["KZT"]["Alış"], $veri["KZT"]["Satış"], $veri["KZT"]["Değişim"]),
      array("LÜBNAN LİRASI", $veri["LBP"]["Alış"], $veri["LBP"]["Satış"], $veri["LBP"]["Değişim"]),
      array("SİRİLANKA RUPİSİ", $veri["LKR"]["Alış"], $veri["LKR"]["Satış"], $veri["LKR"]["Değişim"]),
      array("FAS DİRHEMİ", $veri["MAD"]["Alış"], $veri["MAD"]["Satış"], $veri["MAD"]["Değişim"]),
      array("MOLDOVA LEYİ", $veri["MDL"]["Alış"], $veri["MDL"]["Satış"], $veri["MDL"]["Değişim"]),
      array("MAKEDONYA DİNARI", $veri["MKD"]["Alış"], $veri["MKD"]["Satış"], $veri["MKD"]["Değişim"]),
      array("MALEYZYA RİNGGİTİ", $veri["MYR"]["Alış"], $veri["MYR"]["Satış"], $veri["MYR"]["Değişim"]),
      array("UMMAN RİYALİ", $veri["OMR"]["Alış"], $veri["OMR"]["Satış"], $veri["OMR"]["Değişim"]),
      array("PERU SOLU", $veri["PEN"]["Alış"], $veri["PEN"]["Satış"], $veri["PEN"]["Değişim"]),
      array("FİLİPİNLER PEZOSU", $veri["PHP"]["Alış"], $veri["PHP"]["Satış"], $veri["PHP"]["Değişim"]),
      array("PAKİSTAN RUPİSİ", $veri["PKR"]["Alış"], $veri["PKR"]["Satış"], $veri["PKR"]["Değişim"]),
      array("KATAR RİYALİ", $veri["QAR"]["Alış"], $veri["QAR"]["Satış"], $veri["QAR"]["Değişim"]),
      array("SIRBİSTAN DİNARI", $veri["RSD"]["Alış"], $veri["RSD"]["Satış"], $veri["RSD"]["Değişim"]),
      array("SİNGAPUR DOLARI", $veri["SGD"]["Alış"], $veri["SGD"]["Satış"], $veri["SGD"]["Değişim"]),
      array("SURİYE LİRASI", $veri["SYP"]["Alış"], $veri["SYP"]["Satış"], $veri["SYP"]["Değişim"]),
      array("TAYLAND BAHTI", $veri["THB"]["Alış"], $veri["THB"]["Satış"], $veri["THB"]["Değişim"]),
      array("TAYVAN DOLARI", $veri["TWD"]["Alış"], $veri["TWD"]["Satış"], $veri["TWD"]["Değişim"]),
      array("UKRAYNA GRİVNASI", $veri["UAH"]["Alış"], $veri["UAH"]["Satış"], $veri["UAH"]["Değişim"]),
      array("URUGUAY PEZOSU", $veri["UYU"]["Alış"], $veri["UYU"]["Satış"], $veri["UYU"]["Değişim"]),
      array("GÜRCİSTAN LARİSİ", $veri["GEL"]["Alış"], $veri["GEL"]["Satış"], $veri["GEL"]["Değişim"]),
      array("TUNUS DİNARI", $veri["TND"]["Alış"], $veri["TND"]["Satış"], $veri["TND"]["Değişim"]),
      array("BULGAR LEVASI", $veri["BGN"]["Alış"], $veri["BGN"]["Satış"], $veri["BGN"]["Değişim"])
    
    );
  
    foreach ($defines as $define) {
      echo "<tr>";
      // Her döviz cinsi için bayrak resmini ve adını ekle
      echo "<td><img src='img/{$define[0]}.png' class='miniFlag' alt='{$define[0]}'>   {$define[0]}</td>";
      // Döviz alış, satış ve değişim bilgilerini ekle
      for ($i = 1; $i < count($define); $i++) {
          echo "<td>{$define[$i]}</td>";
      }
      echo "</tr>";
  }
    ?>
  </table>
  
  </div>
<?php
require_once "footer.php";
?>