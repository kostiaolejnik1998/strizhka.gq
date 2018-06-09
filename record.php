<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Запись на стрижку</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="lib/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="style.css">
    <<link rel="stylesheet" type="text/css" href="tcal.css" />
    <link rel="stylesheet" href="css/recordRESP.css">
    
    
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="page">
	<div class="page__row">
    		<div class="page__cell">
    			<header class="header">
                    <div class="header__logo">
                        <a href="index.php" class="logo">
                        <img class="logo__picture" src="images/logo1.png" alt="">
                        </a>                        
                    </div>

    				<div class="header__contact">
                       <div class="header__phone-number">
                            <a href="tel:+380681356772" class="phone-number">
                            +380681356772
                            </a>  
                        </div>                     
                        <div class="header__email-address">                     
                            <a href="mailto:kostia.olejnik1998@gmail.com" class="email-address">
                            kostia.olejnik1998@gmail.com
                            </a>  
                       </div>

                      				
    			</header>
    		</div>            
    	</div>
        <div class="page__row">
            <div class="page__cell">
                <nav class="nav">
                    <div class="nav__btn">
                        <button data-target="#nav-main" type="button" class="btn-nav">
                            <span class="btn-nav__line"></span>
                            <span class="btn-nav__line"></span>
                            <span class="btn-nav__line"></span>
                            
                        </button>
                    </div>
                    <ul class="nav__list" id="nav-main">
                        <li class="nav_item">
                            <a href="index.php" class="nav__link link">
                                Главная
                            </a>                            
                        </li>

                        

                        

                        <li class="nav_item">
                            <a href="record.php" class="nav__link link">
                                Запись на стрижку
                            </a>                            
                        </li>
                        <li class="nav_item">
                            <a href="aboutUs.php" class="nav__link link">
                                О нас
                            </a>                            
                        </li>

                       
                                        
                    </ul>
                    
                </nav>                
            </div>            
        </div>

		<div class="page__row">
			<div class="page__cell">
                
                <section class="section__form" ">
                    <h2 class="headline">Запись на стрижку</h2>
                    <p>
                        Определитесь с датой вашего визита и оставте нам ваши контакты. В течении часа наш оператор обязательно свяжется с вами для уточнения подробностей и подтверждения вашего заказа
                    </p>


                    <?php


                    require "db.php";
                    $data = $_POST;
                    if( isset($data['do_order']))
                    {
                        $errors = array();
                        if($data['login']=='')
                        {
                            $errors[] = "1";
                        }
                        if($data['tel']=='')
                        {
                            $errors[] = "1";
                        }

                        if( empty($errors)){
                             $order = R::dispense('zakaz');
                        $order->login = $data['login'];
                        $order->tel = $data['tel'];
                        R::store($order);


                        echo '<div style="color:orange; text-align: center; font-size: 22px;">Ваша заявка будет обработана в ближайшее время</div>';

                        }                     

                    }

                    ?>


                    <form action="record.php" method="POST" class="form" >
                            <p class="name">Ваше имя:  </p>
                                <input type="text" class="input" name="login" id="seo_name" onchange="localStorage.setItem('name', this.value);">
                           
                            
                            <p class="line1">Телефон в формате 380xx-xxx-xx-xx: </p> 
                                <input class="input" type="tel" name="tel" 
                                pattern="380[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" id="seo_number" onchange="localStorage.setItem('number', this.value);" >
                            
                            <p>
                                <button type="submit"  name="do_order" id="button1"  >
                               Отправить
                                </button>                          
                            </p>
                        
                    </form>
                </section>
				
            </div>
        </div>

		
		<br><br><br><br><br><br>

         <div class="page__row page__row--footer"> 
            <div class="page__cell">
                <footer class="footer">
                    <div class="footer__copyright">
                        Olejnik Kostia &copy; <br>
                        <a class="footer__link" href="http://its.kpi.ua">its.kpi.ua</a>
                    </div>
                </footer>
            </div>
        </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/js.js"></script>
    </body>
</html>