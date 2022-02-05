<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Murat Duman Anasayfa</title>
    <meta name="keywords" content="html, css">
    <!-- chromeden mobil versiyonları görmek icin   -->
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Murat Duman Anasayfa">
    <!-- CSS -->
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="main.css">
    
    <link rel="stylesheet" media="(max-width:768px)" href="tablet.css" />
    <link rel="stylesheet" media="(max-width:560px)" href="mobile.css" />
    
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Open+Sans:wght@400;700&family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
    
    
    
</head>
<body>
    <header class="bg-color-dark-blue nav">
    
        <div class="container">
            <div class="navbar">
                <h1 class="heading-small color-white">Murat Duman</h1>        
            
                <ul>
                    <li><a href="#">Anasayfa</a></li>
                    <li><a href="#training">Egitimler</a></li>
                    <li><a href="#courses">Kurslar</a></li>
                    <li><a href="#footer">İletişim</a></li>
                </ul>
            </div>
        </div>                
    </header>
       
       
    <section class="home" id="home">
        <img src="20210727_192633%20copy%20copy.jpg" alt="">
        <div class="name">
            <h2 class="heading-medium">Murat Duman </h2>
            <p>Computer Engineer | Frontend Devoloper</p>
        </div>
        <a class="btn-type btn-hover" href="#">Kurslara Git</a>
        
    </section>
       
    <section class="training bg-color-dark-blue color-white" id="training">
        <h1>Eğitimler</h1>
        <div class="items">
            <article>
            <i class="fa fa-pencil"></i>
            <h1 class="heading-small">HTML5</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, reiciendis.</p>
        </article>
        <article>
           <i class="fa fa-pencil"></i>
            <h1 class="heading-small">CSS</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, reiciendis.</p>
        </article>
        <article>
           <i class="fa fa-pencil"></i>
            <h1 class="heading-small">JavaScript</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, reiciendis.</p>
        </article>
        </div>
    </section>
       
       <section class="courses" id="courses">
           <h1 class="text-center">Kurslar</h1>
           <div class="container">
               <div class="java display-flex flex-direction">
                  <div class="image">
                      <img src="java.jpg" alt="">
                      <div class="discount">%90 İndirim</div>
                      
                  </div>
                  <div class="course-info">
                     <div class="title">Komple Java Geliştirici Kursu </div>
                     <div class="description opacity-text"> Geliştirici Kursu | Sıfırdan Java Öğrenin </div>
                      <div class="instructor opacity-text">Murat Duman</div>
                      <div class="rating opacity-text">4.6 | (19990 Oylama)</div>
                  </div>
                                      
               </div>
               
                <div class="python display-flex flex-direction">
                  <div class="image">
                      <img src="python.jpg" alt="">
                      <div class="discount">%90 İndirim</div>
                      
                  </div>
                  <div class="course-info">
                     <div class="title">(40+ Saat) Python | Sıfırdan İleri Seviye Programlama (2020)</div>
                     <div class="description opacity-text"> (40+ Saat) Python | Sıfırdan İleri Seviye Programlama (2020) </div> 
                      <div class="instructor opacity-text">Murat Duman</div>
                      <div class="rating opacity-text">4.6 | (19990 Oylama)</div>
                  </div>
                                      
               </div>
               
                <div class="javascript display-flex flex-direction">
                  <div class="image">
                      <img src="javascript.jpg" alt="">
                      <div class="discount">%90 İndirim</div>
                      
                  </div>
                  <div class="course-info">
                     <div class="title">Komple Modern JavaScript Kursu</div>
                     <div class="description opacity-text"> Komple Modern JavaScript Kursu - ES6+</div>
                      <div class="instructor opacity-text" >Murat Duman</div>
                      <div class="rating opacity-text">4.6 | (19990 Oylama)</div>
                  </div>
                                      
               </div>
           </div>
           
       </section>
       
       <footer class="footer bg-color-dark-blue" id="footer">
          <h2 class="color-white text-center ">Bana Ulaşın</h2>
           <section class="forms">
               <div class="form color-white ">
                   <label for="">İsim</label>
                   <input type="text" placeholder="İsim">
                   <label for="">Email</label>
                   <input type="email" placeholder="E-mail">
                   <label for="">Mesaj</label>
                   <textarea name="" id="" cols="30" rows="10" placeholder="Mesajınız..."></textarea>
                   <button type="submit" >Gönder</button>
               </div>
            </section>
            <section class="icons">
            <ul>
                <li><a href="https://www.facebook.com/mrtdmn6/" target="_blank"><i class="fab fa-facebook" ></i> </a></li>
                <li><a href="https://twitter.com/MuratDu36367207?t=gy1m6wqmUvMPu1smykmiIQ&s=08" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/murat_dumann_/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                
            </ul>
            
           
            
            </section>
           
           
       </footer>
        
       
</body>
</html>
