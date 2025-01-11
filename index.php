<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POLIKLINIK</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap");

:root { 
  --h2-font-size: 1.25rem;
  --normal-font-size: .938rem;
  --smaller-font-size: .75rem;
}

@media screen and (min-width: 968px) {
  :root {
    --h2-font-size: 2rem;
    --normal-font-size: 1rem;
    --smaller-font-size: .875rem;
  }
}

*, ::before, ::after {box-sizing: border-box;}

html {scroll-behavior: smooth;}

video {border-radius: 18px;}

::-webkit-scrollbar{-webkit-appearance:none;width:5px;height:5px}::-webkit-scrollbar-track{background:transparent}::-webkit-scrollbar-thumb{background:rgba(0,0,0,.15);border-radius:10px}::-webkit-scrollbar-thumb:hover{background:rgba(0,0,0,.35)}::-webkit-scrollbar-thumb:active{background:rgba(0,0,0,.35)}

body {
    
    /* margin: 3rem 0 0 0; */
    font-family: 'Poppins', sans-serif;
    font-size: var(--normal-font-size);
    /* color: hsl(224, 56%, 12%); */
    background-image: url("./components/img/glusian3.png");
    background-size: cover;
    /* scroll-behavior: smooth; */
}

h1, h2, p {margin: 0;}

ul {margin: 0;padding: 0;list-style: none;}

a {text-decoration: none;}

img {max-width: 100%;height: auto;display: block;}

.section-title {position: relative;font-size: var(--h2-font-size);color: #243763;margin-top: 1rem;margin-bottom: 2rem;text-align: center;}

.section-title::after {position: absolute;content: '';width: 64px;height: 0.18rem;left: 0;right: 0;margin: auto;top: 2rem;background-color: #243763;}

.section {padding-top: 3rem;padding-bottom: 2rem;}

.section:nth-child(odd){background:#fff}
.section:nth-child(even){background:#f5f5f5}

/* ngatur panjang navbar */
/* .bd-grid {
    max-width: 1024px;
    display: grid;
    margin-left: 1rem;
    margin-right: 1rem; 
}  */

.l-header {
    width: 100%;
    position: fixed;
    /* top: 1px; */
    left: 0;
    z-index: 100;
}

.nav {
    padding:0 15px;
    /* border-radius:5px; */
    background-color: #003B73;
    box-shadow: 0 0 15px rgba(0,0,0,.5);
    height: 3rem;display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 500;}

@media screen and (max-width: 768px) {
    .nav {
        border-radius:0;
        height: 5rem;
    }
    .l-header {
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 100;
}
  .nav__menu {
    position: fixed;
    top: calc(3rem + 30px);
    right: -100%;
    width: 50%;
    height: 100%;
    padding: 2rem;
    border-radius:30px 0;
    background-color: #87221d;
    transition: .5s;}

    
}

.nav__item {margin-bottom: 2rem;}

.nav__link {position: relative;color: #fff;text-shadow: 0px 2px 2px rgba(0, 0, 0, .5);padding: 7px 15px;}

.nav__logo {color: #fff;text-shadow: 0px 2px 2px rgba(0, 0, 0, .5);}

.nav__toggle {color: #fff;font-size: 1.5rem;cursor: pointer;}

.active {background-color: rgba(0, 0, 0, 0.2);border-radius: 50px;}

.show {right: 0;}

section.homes{
    padding-block:2rem 6rem;
    width:100%;}

.mainL{
    margin-inline: auto;
    margin-top:100px;
    padding-inline: 22px;
    /* max-width: 1024px; */
    max-width: 1280px;
    /* align-items: center;
    justify-content: center; */
}

.homeL {display:flex;/*color:#fff;text-shadow: 0px 2px 2px rgba(0, 0, 0, .5);*/gap:40px;flex-direction: column;}
h1.t{font-size: 20px;margin-bottom: 20px;}
h1.r{
    font-size: 60px;
    color: #003B73;
}
h1.r{
    font-family: sans-serif;
    /* background: linear-gradient(-45deg, #8c52ff,#5e17eb,#004aad,#cb6ce6);
    color:transparent ;
    background-size: 400% 400%;
    background-clip: text;
    animation: gradient 5s ease infinite; */
}
/* @keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
} */


.homeR {display:flex;gap:15px;align-self:flex-start;width: 50%;align-items: center;justify-content: center;margin-left:auto;margin-right: auto;}

@keyframes componentAnim{0%{transform:translate(0)}30%{transform:translateY(-10px)}50%{transform:translateY(4px)}70%{transform:translateY(-15px)}to{transform:translate(0)}}

.homeR img{height:170px; margin-top:-50px} 
.homeR img:nth-child(1){animation:componentAnim 15s ease infinite} 
.homeR img:nth-child(2){animation:componentAnim 13s ease infinite reverse; margin-top:70px} 
.homeR img:nth-child(3){animation:componentAnim 18s ease infinite}

.button {
  display: inline-block;
  background-color: #003B73;
  color: #fff;
  padding: .75rem 2.5rem;
  font-weight: 600;
  border-radius: 1.5rem;
  transition: .3s;
  text-shadow: none;
}

.button:hover {
  box-shadow: 0px 10px 36px rgba(0, 0, 0, 0.15);
}

.about__container {
  row-gap: 2rem;
  text-align: center;
}

.about__subtitle {
  margin-bottom: 1rem;
}

.about__img {
  justify-self: center;
}

.about__img img {
  width: 200px;
  border-radius: .5rem;
}

.footer {
  background-color: #003B73;
  color: #fff;
  /* text-align: center; */
  font-weight: 600;
  padding: 2rem;
}

.footer__title {
  font-size: 1.5rem;
  margin-bottom: 1.5rem;
  margin-left: 10px;
}

.footer__social {
  margin-bottom: 2rem;
}

.footer__icon {
  font-size: 1.5rem;
  color: #fff;
  margin: 0 1rem;
}

.footer__copy {
  font-size: 14px;
  font-weight: 400;
}
.row{
    display: flex;
    flex-wrap: wrap;
}
.footer-col{
    width: 25%;
    margin-bottom:15px;
}
.footer-col ul{
    list-style: none;
}
.footer-col h4{
    font-size:14px;
    color: #fff;
    text-transform: capitalize;
    margin-left: 10px;
}
.footer-col ul li a{
    font-size: 14px;
    color: #fff;
    text-decoration: none;
}

/* RESPONSIF */
@media screen and (max-width: 320px) {
  .homeR img{height:150px;}
  .content p {
        font-size: 15px;
    }
    .about-us h1 {
        font-size: 24px;
    }
}

@media screen and (min-width: 512px){
    .homeR img{height:290px;}
    .footer-col{
    width: 50%;
    }

    .wrapper {
        padding: 0px 30px;
    }
    .content p {
        font-size: 16px;
    }
}

@media screen and (min-width: 576px) {
  .about__container {grid-template-columns: repeat(2, 1fr);align-items: center;text-align: initial;}
  .content p {
        font-size: 16px;
    }
}


@media screen and (min-width: 768px) {
  body {margin: 0;}
  .section {/*padding-top: 4rem;*/padding-bottom: 6rem;}
  section.homes{padding-block:3rem 6rem;}
  .section-title {margin-top: 2em;margin-bottom: 3rem;}
  .section-title::after {width: 80px;top: 3rem;}
  .nav {height: calc(3rem + 1.5rem);}
  .nav__list {display: flex;padding-top: 0;}
  .nav__item {margin-left: 2.5rem;margin-bottom: 0;}
  .nav__toggle {display: none;}
  .nav__link {color: #fff;}
  .home {padding: 8rem 0 2rem;}
  .home__img {width: 400px;bottom: 18%;}
  .about__container {padding-top: 2rem;}
  .about__img img {width: 375px;}

  .mainL{display:flex;
    flex-wrap: wrap;
    margin-top: calc(3rem + 100px);}
  .homeL{width: 50%;}
  .homeR{margin-left:unset;margin-right: unset;}

  .wrapper {
        padding: 0px 50px;
    }
    .content, .gambar {
        width: 48%; /* 2 kolom layout */
        padding: 0px 15px;
    }
    .content {
        text-align: left;
    }
    .gambar {
        text-align: center;
    }
}

@media screen and (min-width: 992px) {
  .bd-grid {margin-left: auto;margin-right: auto;}
  h1.t{font-size: 20px;}
  .homeR img{height:450px;}

  .wrapper {
        padding: 0px 100px;
        flex-direction: row; /* Atur elemen dalam satu baris */
        justify-content: space-between;
        align-items: center; /* Vertically center items */
    }
    .content {
        width: 50%; /* Teks di kiri */
        order: 1; /* Urutan konten teks */
        text-align: left;
        padding-right: 30px;
    }
    .gambar {
        width: 50%; /* Gambar di kanan */
        order: 2; /* Urutan konten gambar */
        text-align: center; /* Center gambar di dalam kolom */
        padding-left: 30px;
    }
  
  
}

.button{position: relative;z-index: 1;transition: all 0.2s;display:inline-flex;align-items:center;cursor:pointer; margin:10px 0;padding:12px 25px;outline:0;border:0; border-radius:25px;line-height:20px; font-size:14px;font-family:var(--fontB); white-space:nowrap;overflow:hidden;max-width:320px} .button.ln{color:inherit;background:transparent; border:1px solid #989b9f} 
.button.ln:hover{border-color:#fff;box-shadow:0 0 0 1px #243763; inset} .btnF{display:flex;justify-content:center; margin:10px 0;width:calc(100% + 12px);left:-6px;right:-6px;position:relative} .btnF >*{margin:0 6px} .button.ln:after, .button.ln:before{background:transparent;}
.button.alt{margin-left:18px;background:#fff;border:2px solid #243763;color:#243763}
.icon{flex-shrink:0;display:inline-flex} .icon::before{content:'';width:18px;height:18px;background-size:18px;background-repeat:no-repeat;background-position:center} .icon::after{content:'';padding:0 6px} .icon.dl::before, .drK .button.ln .icon.dl::before{background-image:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23fefefe' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5'><polyline points='8 17 12 21 16 17'/><line x1='12' y1='12' x2='12' y2='21'/><path d='M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29'/></svg>")} .icon.demo::before{background-image:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23fefefe' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5'><path d='M7.39999 6.32003L15.89 3.49003C19.7 2.22003 21.77 4.30003 20.51 8.11003L17.68 16.6C15.78 22.31 12.66 22.31 10.76 16.6L9.91999 14.08L7.39999 13.24C1.68999 11.34 1.68999 8.23003 7.39999 6.32003Z'/><path d='M10.11 13.6501L13.69 10.0601'/></svg>")} .button.ln .icon.dl::before{background-image:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2308102b' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5'><polyline points='8 17 12 21 16 17'/><line x1='12' y1='12' x2='12' y2='21'/><path d='M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29'/></svg>")}

.icn{flex-shrink:0;display:inline-flex}
.icn::before{content:'';width:24px;height:24px;}
.icn.tiktok::before{background-image:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><path d='M24,3H8A5,5,0,0,0,3,8V24a5,5,0,0,0,5,5H24a5,5,0,0,0,5-5V8A5,5,0,0,0,24,3Zm3,21a3,3,0,0,1-3,3H8a3,3,0,0,1-3-3V8A3,3,0,0,1,8,5H24a3,3,0,0,1,3,3Z'/><path d='M22,12a3,3,0,0,1-3-3,1,1,0,0,0-2,0V19a3,3,0,1,1-3-3,1,1,0,0,0,0-2,5,5,0,1,0,5,5V13a4.92,4.92,0,0,0,3,1,1,1,0,0,0,0-2Z'/></svg>")}
.icn.instagram::before{background-image:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><path d='M22,3H10a7,7,0,0,0-7,7V22a7,7,0,0,0,7,7H22a7,7,0,0,0,7-7V10A7,7,0,0,0,22,3Zm5,19a5,5,0,0,1-5,5H10a5,5,0,0,1-5-5V10a5,5,0,0,1,5-5H22a5,5,0,0,1,5,5Z'/><path d='M16,9.5A6.5,6.5,0,1,0,22.5,16,6.51,6.51,0,0,0,16,9.5Zm0,11A4.5,4.5,0,1,1,20.5,16,4.51,4.51,0,0,1,16,20.5Z'/><circle cx='23' cy='9' r='1'/></svg>")}
.icn.github::before{background-image:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><g><path d='M16,3a13,13,0,0,0-3.46,25.53,1,1,0,1,0,.53-1.92,11,11,0,1,1,7-.4,15.85,15.85,0,0,0-.3-3.92A6.27,6.27,0,0,0,24.68,16a6.42,6.42,0,0,0-1.05-3.87,7.09,7.09,0,0,0-.4-3.36,1,1,0,0,0-1.1-.67,8,8,0,0,0-3.37,1.28A11.35,11.35,0,0,0,16,9a13.09,13.09,0,0,0-3,.43A5.74,5.74,0,0,0,9.62,8.25a1,1,0,0,0-1,.66,7.06,7.06,0,0,0-.37,3.19A7.15,7.15,0,0,0,7.2,16a6.66,6.66,0,0,0,5,6.28,7.43,7.43,0,0,0-.15.79c-1,.06-1.58-.55-2.32-1.48a3.45,3.45,0,0,0-1.94-1.53,1,1,0,0,0-1.15.76A1,1,0,0,0,7.35,22c.16,0,.55.52.77.81a4.74,4.74,0,0,0,3.75,2.25,4.83,4.83,0,0,0,1.3-.18h0a1,1,0,0,0,.29-.14l0,0a.72.72,0,0,0,.18-.21.34.34,0,0,0,.08-.09.85.85,0,0,0,.06-.17,1.52,1.52,0,0,0,.06-.2v0a4.11,4.11,0,0,1,.46-1.91,1,1,0,0,0-.76-1.65A4.6,4.6,0,0,1,9.2,16a4.84,4.84,0,0,1,.87-3,1,1,0,0,0,.24-.83,5,5,0,0,1,0-1.85,3.59,3.59,0,0,1,1.74.92,1,1,0,0,0,1,.23A12.49,12.49,0,0,1,16,11a9.91,9.91,0,0,1,2.65.43,1,1,0,0,0,1-.18,5,5,0,0,1,2-1,4.11,4.11,0,0,1,0,1.91,1.05,1.05,0,0,0,.32,1A4,4,0,0,1,22.68,16a4.29,4.29,0,0,1-4.41,4.46,1,1,0,0,0-.94.65,1,1,0,0,0,.28,1.11c.59.51.5,4,.47,5.36a1,1,0,0,0,.38.81,1,1,0,0,0,.62.21,1.07,1.07,0,0,0,.25,0A13,13,0,0,0,16,3Z'></path></g></svg>")}

.action {
    display: flex;
    gap: 18px;
    flex-direction: column;
}

.link {
    display: flex;
    gap: 18px;
}

.button.ln svg{margin-right: 8px;}
svg{width:24px;height:24px; fill:#000} svg.line, svg .line{fill:none; stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.25}
.extL::after{content:''; display:inline-block; width:14px;height:14px;margin-inline-start:5px; background: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23989b9f' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><line x1='7' y1='17' x2='17' y2='7'/><polyline points='7 7 17 7 17 17'/></svg>") center / 16px no-repeat}

.flexIn.baseline {
    display: flex;
    gap: 18px;
    align-items: baseline;
    font-size: .93em;
}

.swal2-title {
  font-size: 1.5rem;
}
 
.menu-icon{
    display: none;
}
.btn1 {
  background:none;
  color: #003B73;
  padding: 7px 15px;
  font-size: 19px;
  font-weight:bold;
  border-radius: 30px;
  cursor: pointer;
  border: 0;
  outline: 0;
}
.btn2 {
  background:none;
  color: #003B73;
  padding: 7px 15px;
  font-size: 19px;
  font-weight:bold;
  border-radius: 30px;
  cursor: pointer;
  border: 0;
  outline: 0;
}
a{
  text-decoration: none;
  /* color: inherit; */
  line-height: 1;
  cursor: pointer;
  text-align: center;
  
}

/* BARU */
nav{
    width: 100%;
    background-color: transparent;
    /* background-color: #003B73; */
    backdrop-filter: blur(10px);
    color: darkgray;
    padding: 4px 0;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 10;
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
}
.logo{
    max-width: 80px;
    padding: 20px;
    /* align-items: left;
    justify-content: left; */

}
nav ul,li {
    display: inline-block;
    list-style: none;
    margin: 5px 10px;
    font-size: 16px;
    align-items: center;
}
.l-main{
    min-height:100vh;
}

/* .dark-nav{
    background: #325577;
    transition: 0.5s ease-in;
    transition: 0.5 ease-out;
} */

/* ABOUT CSS */
/* .about{
    align-items: center;
    display: flex;
    justify-content: center;
    gap: 6rem;
}
.card{
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
    padding: 1.5rem;
    margin: 12px;
    text-align: center;
    
} */
/* .card img{
    position: relative; */
    /* left: 50px;
    right: 50px; */
    /* width: 80px;
    align-items: center;
    justify-content: center;
} */

/* about */
.about {
    width: 100%;
    padding: 40px 0;
    min-height:100vh;
}
.about-us{
    width: 100%;
    text-align: center;
}
.about-us h1{
    text-align: center;
    font-size: 30px;
    color: #003B73;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-bottom: 20px;
}
.about-us h1:after{
    content: "";
    height: 5px;
    width: 180px;
    background-color: #003B73;
    border-radius: 10px;
    display: block;
    margin: auto;
}
.wrapper{
    padding: 0px 20px;
    margin: 60px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.content{
    width: 100%;
    /* float: left; */
    text-align: left;
    padding: 0px 15px;
    margin-bottom: 20px;
}
.content h3{
    color:#003B73 ;
    letter-spacing: 1px;
}
.content p{
    font-family: sans-serif;
    font-size:17px ;
    letter-spacing: 1px;
    margin-bottom: 20px;
}
.gambar{
    width: 100%;
    /* float: right; */
    padding: 0px 15px;
    text-align: center;
    margin-bottom: 20px; /* Berikan margin bawah */
}
.gambar img{
    max-width: 100%;
    height: auto;
}

/* @media screen and (min-width: 320px) {
    .gambar img{
        display: none;
    }
    .wrapper{
    padding: 0px 10px;
    margin: 10px auto;
    display: flex;
    
    }
    .content h3{
    color:#003B73 ;
    letter-spacing: 1px;
    font-size: 12px;
    }
    .content p{
    font-family: sans-serif;
    font-size:10px ;
    letter-spacing: 1px;
    }
}
  


@media screen and (min-width: 512px){
    .gambar img{
        display: none;
    }
}

@media screen and (min-width: 712px){
    .gambar{
    width: 35%;
    float: right;
    padding: 0px 30px;
    flex: 1;
}
.gambar img{
    max-width: 100%;
    height: auto;
}
} */



</style>
<body>
    <!-- FIKS -->
    <nav>
        <img src="./components/img/dokter.png" alt="" class='logo'/>
        <ul>
            <li><a href="index.php"><button class='btn1'>Home</button></a></li>
            <li><a href="loginPasien.php"><button class='btn1'>Login</button></a></li>
            <!-- <li><button class='btn'>Login</button></li> -->
            
        </ul>
    </nav>
    
    <main class="l-main">

        <section class="homes" id="Beranda">
            <div class="mainL">
           
                <div class="homeL">
                    <div class="slogan">
                    <h1 class="r">Sistem Poliklinik BK</h1>
                    <h1 class="t">"Kesehatan Anda, Prioritas Kami. Temui Dokter dengan Mudah!"</h1>
                    <p>Sistem poliklinik BK memungkinkan pasien menemukan jadwal bertemu dengan dokter.</p>
                    </div>
                    <div class="action">
                        <div class="link">
                            <a href="loginPasien.php" class="button">Masuk</a>
                            <a href="registerPasien.php" class="button ln">Daftar</a>
                        </div>
                    </div>
                </div>
                

                <div class="homeR">
                    <img alt="Pics" src="./components/img/dokterr.png">
                </div>

            </div>
        </section>

    

        
    </main>
    
    
    <!-- /.login-box -->
    <!-- <?php require 'components/footer.php'; ?> -->
    <!-- jQuery -->
    <script src="assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>


</html>