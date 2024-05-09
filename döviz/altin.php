

<?php
    require_once "define.php";
    require_once "navbar.php";
    ?>
    <style>
     .table{
    display: inline-block;
    display: flex; 
    justify-content: center; 
    align-items: center;  
    margin-top: 20px;
     }
    </style>
    <div class="table">
    <table>
      <thead>
        <tr>
          <th>Döviz Cinsi</th>
          <th>Alış</th>
          <th>Satış</th>
          <th>Değişim</th>
      </thead>
      <tbody>
      <tr>
          <td><img src="img/ons.png" alt="" class="miniFlag">ONS</td>
          <td><?= ONSALİS ?></td>
          <td><?= ONSATİS ?></td>
          <td><?= ONSDEGİSİM ?></td>
        <tr>
          <td><img src="img/gram.png" alt="" class="miniFlag"> GRAM ALTIN</td>
          <td><?= GAALİS ?></td>
          <td><?= GASATİS ?></td>
          <td><?= GADEGİSİM ?></td>
   
        <tr>
          <td><img src="img/gram.png" alt="" class="miniFlag"> GRAM HAS ALTIN</td>
          <td><?= GAhALİS ?></td>
          <td><?= GAhSATİS ?></td>
          <td><?= GAhDEGİSİM ?></td>
   
        <tr>
          <td><img src="img/ceyrek.png" alt="" class="miniFlag"> ÇEYREK ALTIN</td>
          <td><?= CEYREKALİS ?></td>
          <td><?= CEYREKSATİS ?></td>
          <td><?= CEYREKDEGİSİM ?></td>
   
        <tr>
          <td><img src="img/ceyrek.png" alt="" class="miniFlag"> YARIM ALTIN</td>
          <td><?= YARİMALİS ?></td>
          <td><?= YARİMSATİS ?></td>
          <td><?= YARİMDEGİSİM ?></td>
   
        <tr>
          <td><img src="img/ceyrek.png" alt="" class="miniFlag"> TAM ALTIN</td>
          <td><?= TAMALİS ?></td>
          <td><?= TAMSATİS ?></td>
          <td><?= TAMDEGİSİM ?></td>
   
        <tr>
          <td><img src="img/ceyrek.png" alt="" class="miniFlag"> CUMHURİYET ALTINI</td>
          <td><?= CUMALİS ?></td>
          <td><?= CUMSATİS ?></td>
          <td><?= CUMDEGİSİM ?></td>
   
        <tr>
          <td><img src="img/ceyrek.png" alt="" class="miniFlag"> ATA ALTIN</td>
          <td><?= ATAALİS ?></td>
          <td><?= ATASATİS ?></td>
          <td><?= ATADEGİSİM ?></td>
          <tr>
   
          <td><img src="img/bilezik.png" alt="" class="miniFlag"> 14 AYAR BİLEZİK</td>
          <td><?= I14ALİS ?></td>
          <td><?= I14SATİS ?></td>
          <td><?= I14DEGİSİM ?></td>
          <tr>
   
          <td><img src="img/bilezik.png" alt="" class="miniFlag"> 18 AYAR BİLEZİK</td>
          <td><?= I18ALİS ?></td>
          <td><?= I18SATİS ?></td>
          <td><?= I18DEGİSİM ?></td>
   
          <tr>
          <td><img src="img/bilezik.png" alt="" class="miniFlag"> 22 AYAR BİLEZİK</td>
          <td><?= I22ALİS ?></td>
          <td><?= I22SATİS ?></td>
          <td><?= I22DEGİSİM ?></td>
          <tr>
          <td><img src="img/ceyrek.png" alt="" class="miniFlag"> 2,5 ALTIN</td>
          <td><?= I25ALİS ?></td>
          <td><?= I25SATİS ?></td>
          <td><?= I25DEGİSİM ?></td>
          <tr>
   
          <td><img src="img/ceyrek.png" alt="" class="miniFlag"> BEŞLİ ALTIN</td>
          <td><?= BESLİALİS ?></td>
          <td><?= BESLİSATİS ?></td>
          <td><?= BESLİDEGİSİM ?></td>
   
          <tr>
          <td><img src="img/ceyrek.png" alt="" class="miniFlag"> GREMSE ALTIN</td>
          <td><?= GREMSEALİS ?></td>
          <td><?= GREMSESATİS ?></td>
          <td><?= GREMSEDEGİSİM ?></td>
          
          <tr>
          <td><img src="img/ceyrek.png" alt="" class="miniFlag"> REŞAT ALTIN</td>
          <td><?= RESATALİS ?></td>
          <td><?= RESATSATİS ?></td>
          <td><?= RESATDEGİSİM ?></td>
          <tr>
   
          <td><img src="img/ceyrek.png" alt="" class="miniFlag"> HAMİT </td>
          <td><?= HAMİTALİS ?></td>
          <td><?= HAMİTSATİS ?></td>
          <td><?= HAMİTDEGİSİM ?></td>
   
          <tr>
          <td><img src="img/gumus.png" alt="" class="miniFlag"> Gümüş</td>
          <td><?= GUALİS ?></td>
          <td><?= GUSATİS ?></td>
          <td><?= GUDEGİSİM ?></td>
          
          
          
          
          
      </tbody>
    </table>
    </div>
    </div>
<?php require_once "footer.php"?>