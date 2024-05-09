<?php
   require_once 'define.php';
   require_once 'header.php';
   require_once 'navbar.php';     
   ?>
   <style>
       /* Import Google Font - Poppins */
     
     *{
  box-sizing: border-box;
     }
     ::selection{
  color: #fff;
  background: #675AFE;
     }
     .kapsayici{
 width: 100%;
  display: inline-block;
  display: flex; 
  justify-content: center; 
  align-items: center;
  padding-top: 40px;
     }
     .wrapper{
  width: 500px;
  padding: 30px;
  border-radius: 7px;
  background: #e4e2e2;
  box-shadow: 7px 7px 20px rgba(0, 0, 0, 0.05);
     }
     .wrapper header{
  font-size: 28px;
  font-weight: 500;
  text-align: center;
     }
     .wrapper form{
  margin: 40px 0 20px 0;
     }
     form :where(input, select, button){
  width: 100%;
  outline: none;
  border-radius: 5px;
  border: none;
     }
     form p{
  font-size: 18px;
  margin-bottom: 5px;
     }
     form input{
  height: 50px;
  font-size: 17px;
  padding: 0 15px;
  border: 1px solid #999;
     }
     form input:focus{
  padding: 0 14px;
  border: 2px solid #009819;
     }
     form .drop-list{
  display: flex;
  margin-top: 20px;
  align-items: center;
  justify-content: space-between;
     }
     .drop-list .select-box{
  display: flex;
  width: 175px;
  height: 45px;
  align-items: center;
  border-radius: 5px;
  justify-content: center;
  border: 1px solid #999;
     }
     .select-box img{
  max-width: 21px;
     }
     .select-box select{
  width: auto;
  font-size: 20px;
  background: none;
  margin: 0 -5px 0 5px;
     }
     .select-box select::-webkit-scrollbar{
  width: 8px;
     }
     .select-box select::-webkit-scrollbar-track{
  background: #fff;
     }
     .select-box select::-webkit-scrollbar-thumb{
  background: #888;
  border-radius: 8px;
  border-right: 2px solid #ffffff;
     }
     .drop-list .icon{
  cursor: pointer;
  margin-top: 30px;
  font-size: 22px;
     }
     form .exchange-rate{
  border: 1px dotted gray;
  border-radius: 5px;
  padding: 7px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 19px;
  margin: 20px 0 30px;
     }
     form button{
  height: 52px;
  color: #fff;
  font-size: 17px;
  cursor: pointer;
  background: #009819;
  transition: all 0.5s;
     }
     form button:hover{
  background: #00af1d;

     }
     .footer .footer-text{
  text-decoration: none;
  font-size: 14px;
  font-weight: 400;
  color: #024359;
  transition: all 0.5s;
     }
     .footer .footer-text:hover{
  color: #035c7a;
     }
     @media (max-width: 700px){ 
     .wrapper{
  width: 370px;
     }
     .drop-list .select-box{
  width: 115px;
  height: 45px;
     }
     }
   </style>
   <div class="kapsayici">
    <div class="wrapper">
      <header>Dolar Ne Kadar?</header>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="amount">
          <p>Miktar Giriniz</p>
          <input type="text" name="miktar" value="1">
        </div>
        <div class="drop-list">
          <div class="from">
            <p>Alış</p>
            <div class="select-box">
            <span><?= USDALİS ?></span>
            </div>
          </div>

          <div class="to">
            <p>Satış</p>
            <div class="select-box">
            <span><?= USDSATİS ?></span>
            </div>
          </div>
        </div>
        <div class="exchange-rate" ><span >
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $miktar = $_POST['miktar'];
        $clearUsd = str_replace(',', '.', USDSATİS); echo $clearUsd * $miktar;
        }?>
        </span></div>
        <button>Hesapla</button>
      </form>

    </div>
    </div>
   <?php
   require_once 'footer.php'
?>



