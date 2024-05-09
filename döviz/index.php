<?php
   require_once "define.php";
   require_once "navbar.php";
   
    ?>
       <div class="hisse2014Bar" style="position: static; padding: 0px; box-shadow: none; top: 0px; z-index: 9999999;">
       <ul class="bar">
               <li class="item up bistLi" data-item="642">
                   <a href="#">
                       <span class="col1 bistSpn">
                           <span class="name">DOLAR</span>
                           <span class="value1"><?= USDALİS ?></span>
                       </span>
                       <span class="col2">
                           <span class="s2 arrow"></span>
                       </span>
                       <span class="col3">
                           <span class="value2"><?= USDDEGİSİM ?></span>
                           <span class="value3"><?= USDSATİS ?></span>
                       </span>
                   </a>
               </li> 
               <li class="item up" data-item="1302">
                   <a href="#">
                       <span class="col1">
                           <span class="name">EURO</span>
                           <span class="value1"><?= EURALİS ?></span>
                       </span>
                       <span class="col2">
                           <span class="s2 arrow"></span>
                       </span>
                       <span class="col3">
                           <span class="value2"><?= EURDEGİSİM ?></span>
                           <span class="value3"><?= EURSATİS ?></span>
                       </span>
                   </a>
               </li>
               <li class="item up" data-item="1639">
                   <a href="#">
                       <span class="col1">
                           <span class="name">STERLİN</span>
                           <span class="value1"><?= STRALİS ?></span>
                       </span>
                       <span class="col2">
                           <span class="s2 arrow"></span>
                       </span>
                       <span class="col3">
                           <span class="value2"><?= STRDEGİSİM ?></span>
                           <span class="value3"><?= STRSATİS ?></span>
                       </span>
                   </a>
               </li>
               <li class="item up" data-item="2199">
                   <a href="#">
                       <span class="col1">
                           <span class="name">ONS</span>
                           <span class="value1"><?= ONSALİS ?></span>
                       </span>
                       <span class="col2">
                           <span class="s2 arrow"></span>
                       </span>
                       <span class="col3">
                           <span class="value2"><?= ONSDEGİSİM ?></span>
                           <span class="value3"><?= ONSATİS ?></span>
                       </span>
                   </a>
               </li>
               <li class="item up" data-item="80">
                   <a href="#">
                       <span class="col1">
                           <span class="name">ÇEYREK</span>
                           <span class="value1"><?= CEYREKALİS?></span>
                       </span>
                       <span class="col2">
                           <span class="s2 arrow"></span>
                       </span>
                       <span class="col3">
                           <span class="value2"><?= CEYREKDEGİSİM ?></span>
                           <span class="value3"><?= CEYREKSATİS ?></span>
                       </span>
                   </a>
               </li>
               <li class="item st bistLlst" data-item="516">
                   <a href="#">
                       <span class="col1">
                           <span class="name">GÜMÜŞ</span>
                           <span class="value1"><?= GUALİS ?></span>
                       </span>
                       <span class="col2">
                           <span class="s2 arrow"></span>
                       </span>
                       <span class="col3">
                           <span class="value2"><?= GUDEGİSİM ?></span>
                           <span class="value3"><?= GUSATİS ?></span>
                       </span>
                   </a>
               </li>
   
       </ul>
   </div>
   <!-- dövizler start -->
   <div class="dovizBar mBot20">
   
               <a href="#" title="" class="dbItem up" style="margin-left: 0px;">
                   <span class="line1">
                       <span class="name">ABD Doları</span>
                       <span class="value"><?= USDDEGİSİM ?></span>
                   </span>
                   <span class="box bFirst">
                       <span class="name">ALIŞ(TL)</span>
                       <span class="value"><?= USDALİS ?></span>
                   </span>
                   <span class="box">
                       <span class="name">SATIŞ(TL)</span>
                       <span class="value"><?= USDSATİS ?></span>
                   </span>
               </a>
               <a href="#" title="" class="dbItem up">
                   <span class="line1">
                       <span class="name">Euro</span>
                       <span class="value"><?= EURDEGİSİM ?></span>
                   </span>
                   <span class="box bFirst">
                       <span class="name">ALIŞ(TL)</span>
                       <span class="value"><?= EURALİS ?></span>
                   </span>
                   <span class="box">
                       <span class="name">SATIŞ(TL)</span>
                       <span class="value"><?= EURSATİS ?></span>
                   </span>
               </a>
               <a href="#" title="" class="dbItem up">
                   <span class="line1">
                       <span class="name">İngiliz Sterlini</span>
                       <span class="value">STRDEGİSİM</span>
                   </span>
                   <span class="box bFirst">
                       <span class="name">ALIŞ(TL)</span>
                       <span class="value"><?= STRALİS ?></span>
                   </span>
                   <span class="box">
                       <span class="name">SATIŞ(TL)</span>
                       <span class="value"><?= STRSATİS ?></span>
                   </span>
               </a>
       </div>
    
     
   <!-- dövizler end -->
   <!-- kurlar start  -->
   <div class="konumm">
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
         <td><img src="img/ABD DOLARI.png" alt="" class="miniFlag"> ABD Doları</td>
         <td><?= USDALİS ?></td>
         <td><?= USDSATİS ?></td>
         <td><?= USDDEGİSİM ?></td>
       <tr>
         <td><img src="img/EURO.png" alt="" class="miniFlag"> Euro</td>
         <td><?= EURALİS ?></td>
         <td><?= EURSATİS ?></td>
         <td><?= EURDEGİSİM ?></td>
   
       <tr>
         <td><img src="img/STERLİN.png" alt="" class="miniFlag"> Sterlin</td>
         <td><?= STRALİS ?></td>
         <td><?= STRSATİS ?></td>
         <td><?= STRDEGİSİM ?></td>
   
       <tr>
         <td><img src="img/İSVİÇRE FRANGI.png" alt="" class="miniFlag"> İsviçre Frangı</td>
         <td><?= CHFALİS ?></td>
         <td><?= CHFSATİS ?></td>
         <td><?= CHFDEGİSİM ?></td>
   
       <tr>
         <td><img src="img/KANADA DOLARI.png" alt="" class="miniFlag"> Kanada Doları</td>
         <td><?= CADALİS ?></td>
         <td><?= CADSATİS ?></td>
         <td><?= CADDEGİSİM ?></td>
   
       <tr>
         <td><img src="img/RUBLE.png" alt="" class="miniFlag"> Ruble</td>
         <td><?= RUBALİS ?></td>
         <td><?= RUBSATİS ?></td>
         <td><?= RUBDEGİSİM ?></td>
   
       <tr>
         <td><img src="img/SUUDİ ARABİSTAN RİYALİ.png" alt="" class="miniFlag"> Suudi Arabistan Riyali</td>
         <td><?= SARALİS ?></td>
         <td><?= SARSATİS ?></td>
         <td><?= SARDEGİSİM ?></td>
   
       <tr>
         <td><img src="img/AVUSTURALYA DOLARI.png" alt="" class="miniFlag"> Avusturya Doları</td>
         <td><?= AUDALİS ?></td>
         <td><?= AUDSATİS ?></td>
         <td><?= AUDDEGİSİM ?></td>
         <tr>
   
         <td><img src="img/JAPON YENİ.png" alt="" class="miniFlag"> Japon Yeni</td>
         <td><?= JPYALİS ?></td>
         <td><?= JPYSATİS ?></td>
         <td><?= JPYDEGİSİM ?></td>
         <tr>
   
         <td><img src="img/DANİMARKA KRONU.png" alt="" class="miniFlag"> Danimarka Kronu</td>
         <td><?= DKKALİS ?></td>
         <td><?= DKKSATİS ?></td>
         <td><?= DKKDEGİSİM ?></td>
   
         <tr>
         <td><img src="img/NORVEÇ KRONU.png" alt="" class="miniFlag"> Norveç Kronu</td>
         <td><?= NOKALİS ?></td>
         <td><?= NOKSATİS ?></td>
         <td><?= NOKDEGİSİM ?></td>
     </tbody>
   </table>
   </div>
   <!-- kurlar end  -->
<?php 
require_once "footer.php";

?>

