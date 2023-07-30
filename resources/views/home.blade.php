<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>

  body{
width:100%;
max-width:100%;
  }


 *{

padding:0;
margin:0;
box-sizing: border-box;
}





.custom-select {
  position: relative;
  display: inline-block;
}

.selected-option {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.selected-option img {
  width: 16px;
  height: 16px;
  margin-right: 5px;
}

.custom-options {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 5px;
  z-index: 1;
}

.custom-option {
  display: flex;
  align-items: center;
  padding: 5px;
  cursor: pointer;
}

.custom-option:hover {
  background-color: #f0f0f0;
}

.custom-select.open .custom-options {
  display: block;
}






  header{
background-color: #262626;
}

li{
list-style:none;
font-family: Trebuchet MS;

}

a{
color:white;
text-decoration:none;

}

.navbar{
      min-height: 70px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 24px;
}

.nav-menu {
     display: flex;
     justify-content: space-between;
     align-items: center;
     gap:60px;
}

.nav-branding{
font-size: 2rem;

}

.nav-link{
   transition: 0.7s ease;


}

.nav-link:hover{
   color: dodgerblue;
}

.hamburger{
   display:none;
   cursor:pointer;
 
    
}

.bar{
    display:block;
    width:25px;
    height:3px;
    margin:5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: white;
}
/*end of language switch*/






#about{
width:100%;
font-family: Trebuchet MS;
font-weight:300;
justify-content:center;
}

.team{
  width:100%;
  max-width:100%;
  }

  #container{
    width: 100%; /* Example width for the container */
    max-width:100%;
  }
.ul .li{

    display:inline-block;
    font-family: Trebuchet MS;
} 

ul li a::after {
  content: '';
  display: block;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 5px;
  background-color:#de1936;
  transition: width 0.5s ease-in-out;
}

ul li a:hover::after {
  width: 100%;
}

#service:hover {
  background-color:#de1936;
  border:0px;
  transition: width 0.7s ease-in-out;
}

#services:hover {
 /* background-color:darkgray;
  border:0px;
  transition: width 0.7s ease-in-out;*/
}


.bg-black{
  overflow-x: hidden;
  height:350px;
  width:100%;
  background-image:url(' {{ asset('image/actuary30a.jpg') }}');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}

.bg-blackk{
  overflow-x: hidden;
  height:250px;
  background-image:url(' {{ asset('image/actuary29.jpg') }}');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}

.nav{
  position:relative;
  left:70%;
  font-size:13px;
  top:5%;
 
}

  .jumbotron::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 95%;
    background-image:url(' {{ asset('image/actuary17.jpg') }}');
    filter: brightness(0.5);
    background-position: center;
    background-size: cover;
    opacity: 0.9;
    z-index: -3;
  }

  .jumbotron h2 {
    color: white;
    font-family: Trebuchet MS;
  }

  .jumbotron {
    height: 100vh;
    width: 100%;

  }

  .jumbotron-fluid {
    height: 100vh;
   
  }
 

  #col-lg-4{
    background-color:rgb(235,234,235);
    /*  border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 30px;
    border-radius: 2px;
    margin: 15px;
    width:30%;*/
    justify-content: center;
    margin: 20px;
    width:30%;
    font-family: Trebuchet MS;

  }

  #col-lg-9{
    background-color:rgb(235,234,235);
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 30px;
    border-radius: 2px;
    margin: 15px;
    width:30%;
    font-family: Trebuchet MS;
  }


  
 
  #col-lg-4:hover {
  background-color: #010081;
}

.card-text{
color:gray;
font-size:15px;
}

#col-lg-4:hover ul li{
color:darkgray;
  }




  #col-lg-4:hover > .card-text {
  color: #fff;
}

  #col-lg-4:hover > h5 {
  color: darkgray;
}

#our-team img {
  display: block;
  margin: 0 auto;
  border: 1px solid #ccc;
}


.nav-scrolled {
  background-color: white;
  color: black;
}




footer {
  padding: 30px 0;
}

footer h3 {
  font-size: 24px;
  margin-bottom: 20px;
}

footer p {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 0;
}

footer ul li {
  margin-right: 20px;
}

footer ul li:last-child {
  margin-right: 0;
}

footer ul li a {
  color: #fff;
}

footer ul li a:hover {
  color: #ccc;
}




*{
/*padding:0;
margin:0;
box-sizing: border-box;*/


}

#row{

display: flex;
flex-wrap: wrap;
padding: 2em 1em ;
text-align: center;
}

.column{

width:100%;
/*padding: 0.5em 0;*/
flex: 0 0 33.33%;
max-width: 33.33%;
padding:0 1em;
left:5%;

}

h1{
width: 100;
text-align:center;
font-size:3.5em;
color: #1f003b;
}

h4{
font-family: Trebuchet MS;
}

h6{
width: 100%
}
.card{
cursor: pointer;
border: 1px solid darkgray;
border-radius: 0.1em;
color: #1f003b;
cursor:pointer;
background-color:white;
padding: 1em 1em;
overflow: hidden;


}

.card .img-container {
width: 18em;
height: 22em;
background-color:white;
padding: 0.1em;
border-radius: 50%;
margin: 0 auto 2em auto;
}

.card img {
width: 100%;
border-radius: 0%;
height: 100%;
}

.card h3{

  font-weight: 500;
}

.card p{
  font-weight: 300;
  text-transform: uppercase;
  margin: 0.5em 0 2em 0;
letter-spacing: 2px;
}

.icons {
  width: 10%;
  min-width: 100%;
  margin:auto;
  display:flex;
  justify-content: center;


}

.card a{
text-decoration: none;
color: inherit;
font-size: 1.4em;

}



.card:hover{
background: linear-gradient(
      white,  white);
      
color:black;
transition: 0.7s ease;


}

.card:hover .img-container{

  filter: brightness(0.5);
}


.img-container img {
  width: 100%;
  transition: transform 0.5s;
}

.card:hover .img-container img {
  transform: scale(1.1);
}

.hidden {
  display: none;
}

.card:hover p {
  display: block;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -60%);
  z-index: 1;
  color: white;
  text-align: center;
}




.section{
  text-align: center;

}

#burgers{
position: relative;
justify-content:center;
visibility:hidden;
}

.nav-item {
   color: black;
}

#close{
  visibility:hidden;
}











@media (min-width: 768px) and (max-width: 992px) {
section{
     padding: 1em 7em;
  }
#col-lg-4{
justify-content: center;
width:100%;
margin: 30px;
}


#row{
width:100%;
padding: 2em 1em ;
text-align: center;
justify-content: center;
}

.column{
width:100%;
flex: 50% 50%;
max-width: 100%;
margin-left:30px; /****************/
padding-bottom: 20px;
padding: 0 1em 

}
.card  {
  width: 100%
}
.nav-menu{
  position:relative;
  left:0;
  font-size:13px;
  top:5%;
}
#about{
width:100%;
}

.popup{
 font-size: 14px;
 text-align: center;
justify-content: center;
left:5%;
}
.column:nth-of-type(1) {

}

.hidden{
  font-size: 14px;
}
}











@media (min-width: 992px) and (max-width: 1279px) {
section{
     padding: 1em 7em;
  }

.nav{
  position:relative;
  left:64%;
  font-size:13px;
  top:5%;
}




.column{
width:100%;
flex: 50% 50%;
max-width: 100%;
margin-left:30px; /****************/
padding-bottom: 20px;
padding: 0 1em 

}
.card  {
  width: 100%;
  
}

#row{
width:100%;
padding: 2em 1em ;
text-align: center;
justify-content: center;
}


#col-lg-4{
width:100%;
margin: 10px;
}

.popup{

  font-size:14px;
  left:5%;
 
}
 
}










@media screen and (max-width: 768px){

.hamburger{
  display:block;
  position: fixed;
  max-width:100%;
  width:100%;
  height:8%;
  top:0;
  background-color:black;
  left:0;
 
}

.hamburger.active .bar:nth-child(2){
  opacity:0;
}

.hamburger.active .bar:nth-child(1){
 transform: translateY(8px) rotate(45deg);
}

.hamburger.active .bar:nth-child(3){
    transform: translateY(-8px) rotate(-45deg);
}

.nav-menu{
   position:fixed;
   left: -100%;
   top: 50px;
   gap:0;
   flex-direction: column;
   background-color: #262626;
   width:100%;
   text-align: center;
   transition: 0.3s;
}

.nav-item{
    margin: 16px 0;
}

.nav-menu.active{
    left: 0;
}
.bar{
   margin-right:5%;
   
}


  #col-lg-4{

    justify-content: center;
    width:95%;
    margin: 20px;
  
  }

  #about{

    font-size:14px;
    font-weight:300;
  }

.popup{
left:5%;
}

#about{
  width:100%;
}
ul li {
  font-weight: 300;
}

ul li:hover {
 
}

ul li a::after {

}


.mb-3 {
    display: block;
}

#text{
width:90%;
text-align:center;
display:none;
}

.column{
width:100%;
flex: 33.33 33.33 33.33%;
max-width: 100%;
padding:0 1em ;
margin-left:30px;
padding-bottom: 30px;

}
#service{
display:none;

}

#close{
position:absolute;
visibility:hidden;
left:0px;
top:0%;
cursor: pointer;
width:7%;

}

#title{
visibility:hidden;
}

#paragraph{
visibility:hidden;
}

.custom-select{
  position:relative;
  top:35px;
  right:25px;
  display:block;
  border-radius: 0;
  
}


#email a
{
position:relative;
top:-5px

}




}















.blue-section {
      background-color: #007bff; /* electric blue color */
      color: #fff; /* text color */
      padding: 50px 0; /* add some padding for content */
      width:100%;    
}



.popup {

      display: none;
    }


.column:nth-of-type(1):hover .popup {

display: block;
text-align: center;
justify-content: center;
color:white;
position:absolute;
width:90%;
top:102px;
background-color:  #010081;
font-weight: 300; 
right:25px;


}

.column:nth-of-type(2):hover .popup{
  display: block;
  position:absolute;
  width:90%;
  top:30px;
  background-color:  #010081;
  color:white;
  font-weight: 300; 
  right:25px;

}


.column:nth-of-type(3):hover .popup{
  display: block;
  position:absolute;
  width:90%;
  top:50px;
  background-color:  #010081;
  color:white;
  font-weight: 300; 
  right:25px;

}


.hidden{
  display: none;
}



.one {
       width:500px;
       height:90%;
       background-color:rgb(235,234,235);
       position:fixed;
       top: 50%;  
       left: 50%;
       transform: translate(-50%,-50%) scale(0.1);
       text-align: center;
       padding:0 30px 30px;
       color:black;
       visibility:hidden;
       transition: transform 0.4s, top 0.4s;
    }

.open-popup
    {
        visibility:visible;
        top: 50%;
        transform:  translate(-50%, -50%) scale(1);
    }
  

.one #img{
    width:100%;
    margin-top: 50px;
    padding: 10px 0;
    background:black;
    color:#fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor:pointer;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    
}


#textPopup{

    background-color:rgb(235,234,235);
    margin-bottom: 30px;
    margin: 15px;
    width:100%;
    font-family: Trebuchet MS;
    transition: background-color 0.5s;
    overflow: auto; 
    position:relative;
    right:10px;

}

.centered {
  text-align: center;
}

.centered a {
  font-size: 16px;
  font-family: Arial, sans-serif;
  font-weight:100;
}

.centered a:hover {
  color:  #010081;
  text-decoration: underline;
}
 




</style>
    </head>
    <body style="overflow-x: hidden;" id="body">  
    <div class="container" id="container">



    <!-- Brief Intro Section 
    <ul class="nav" style="position:absolute;left:70%;font-size:13px;top:5%">
      <li class="nav-item active" >
        <a class="nav-link" href="/home"  style="color:black"><b>HOME</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"  style="color:black"><b>ABOUT</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index"  style="color:black"><b>BLOG</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index"  style="color:black"><b>OUR TEAM</b></a>
      </li>
</ul>
<h2  style="position:absolute;font-size:25px;top:25%;color:darkblue;"><b><center> WE ARE ACTUARIES,</center><br><center>WE APPLY FINANCIAL AND STATISTICAL THEORIES TO SOLVE PROBLEMS<center> </b></h2>
<button type="button" class="btn btn-dark" style="position:absolute;font-size:25px;left:25%;top:40%">OUR SERVICES</button>-->

   
<div class="jumbotron jumbotron-fluid">
      
<!--<img src="{{ asset('image/actuary3.jpg') }}" style="border-radius: 0%;width:100%;height:100%;opacity:0.4;"> -->
      
<nav class="navbar"> 
<div class="custom-select" style="">
    <select class="form-select changeLang"  id="language-select" onchange="changeLanguage(this.value)">
      <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>EN</option>
      <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>FR</option>
    </select>
</div>


<div class="custom-options">
<div class="custom-option" data-value="fr">
    <img src="{{ asset('image/uk.png') }}" style="width:30px;height:30px" > 
</div>
<div class="custom-option" data-value="fr">
    <img src="{{ asset('image/france.png') }}" style="width:30px;height:30px">
</div>
</div>






<ul class="nav-menu" >
      <li class="nav-item active" >
        <a class="nav-link" id="nav1" href="" style="color: white;"><b>{{ GoogleTranslate::trans('ACCUEIL', app()->getLocale()) }}</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about" style="color: white;" ><b>{{ GoogleTranslate::trans('À PROPOS', app()->getLocale()) }}</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services"  style="color: white;"><b>SERVICES</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#team" style="color: white;"><b>{{ GoogleTranslate::trans('EQUIPE', app()->getLocale()) }}</b></a>
      </li>
</ul>


<div class="hamburger">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</div>

</div>

<!--<div class="hamburgers">
<img src="{{ asset('image/burger.png') }}" id="burgers" onclick="openBurger()" >
<img src="{{ asset('image/closeclose.png') }}" id="close" onclick="closeBurger()" >
</div>-->


<div class="icon"  style="text-align:center">
<i class="fa fa-bars" style="color:white;visibility:hidden"></i>
</div>
<!--Hidden-->











</div>
    <!-- Work Experience Section 
    <div class="row my-5">
      <div class="col-12">

      <h2 class="text-center" style="color:white"><b>Work Experience</b></h2>
        <ul class="list-group">
          <li class="list-group-item">
            <h3>Position 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia malesuada tellus, a scelerisque odio consectetur ac. Proin vel libero vel libero tincidunt molestie vel vel velit. Aliquam id malesuada enim. Aenean efficitur varius aliquet.</p>
          </li>
          <li class="list-group-item">
            <h3>Position 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia malesuada tellus, a scelerisque odio consectetur ac. Proin vel libero vel libero tincidunt molestie vel vel velit. Aliquam id malesuada enim. Aenean efficitur varius aliquet.</p>
          </li>
        </ul>
      </div>
    </div>-->

    <h2 style="position:absolute;left:12%;top:50%;font-size:80px; font-family: Trebuchet MS;color:#de1936" id="title"><b>{{ GoogleTranslate::trans('NOUS SOMMES ACTUAIRES', app()->getLocale())}}</b></h2>
   <h4 style="position:absolute;left:5%;top:65%;color:white;font-family:Pacifico, cursive; font-weight: bold; font-style: italic;" id="paragraph">{{ GoogleTranslate::trans('Nous facilitons les décisions financières grâce au pouvoir des chiffres et des probabilitéss', app()->getLocale())}}</h4>







    
<div class="about" id="about">
    <!-- Skills Section -->
    <br>
       <div class="section" style="align-items:center;">
       <h2 style="font-size:40px; font-family: Trebuchet MS;color:#de1936"><center><b>{{ GoogleTranslate::trans('ABOUT', app()->getLocale())}}</b></center></h2>
<p class="text-center" id="about" >

<div class="center" style="position:relative;align-items:center;width:50%;left:25%">
{{ GoogleTranslate::trans('Genesis Actuarial Consulting vise à fournir des services actuariels complets aux particuliers et aux entreprises.Nous nous engageons à fournir à nos clients un service personnalisé et à adapter nos produits actuariels pour répondre à leurs besoins spécifiques.
  Notre cabinet de conseil offre une large gamme de produits et services actuariels y compris des services de conseil en assurance-vie , assurance maladie , assurance automobile , assurance habitation , services IFRS-17 et assurance des entreprises.
  Notre objectif principal sera d établir des relations à long terme avec nos clients et de leur fournir la meilleure couverture de services actuariels possible', app()->getLocale())}}
</div>


 </p>
 </div>
  




</div>



 <div class="bg-black">


</div> 
<br><br><br>
     


 <section id="services">
 <h2 style="font-size:40px; font-family: Trebuchet MS;color:#de1936" class="service"><center><b>{{ GoogleTranslate::trans('SERVICES', app()->getLocale())}}</b></center></h2>
 <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-8 col-sm-12" id="col-lg-4">
      <img src="{{ asset('image/life.png') }}" style="width:50px;height:50px">
            <h5>{{ GoogleTranslate::trans('ASSURANCE', app()->getLocale())}}</h5><br>
            <p class="card-text">
            {{ GoogleTranslate::trans('ASSURANCE MALADIE et ASSURANCE GENERALE', app()->getLocale())}}<br>
            <ul>
<li>{{ GoogleTranslate::trans('Évaluation actuarielle des sinistres et des réserves de primes', app()->getLocale())}}</li>
<li>{{ GoogleTranslate::trans('Modélisation du capital et des risques', app()->getLocale())}}</li>
<li>{{ GoogleTranslate::trans('Analyse des calculs d excédent', app()->getLocale())}}</li>
<li>{{ GoogleTranslate::trans('Élaboration et révision des politiques et procédures de gestion', app()->getLocale())}}</li></p>
</ul>

<p class="card-text">
{{ GoogleTranslate::trans('ASSURANCE VIE', app()->getLocale())}} <br>
      <ul>
<li>{{ GoogleTranslate::trans('Actuarial Valuations of Life Funds', app()->getLocale())}}</li>
<li>{{ GoogleTranslate::trans('Modélisation du capital et des risques', app()->getLocale())}}</li>
<li>{{ GoogleTranslate::trans('Fourniture et support sur les systèmes actuariels', app()->getLocale())}}</li>
<li>{{ GoogleTranslate::trans('Développement et révision de produits', app()->getLocale())}}</li>
</ul>
</p>

</div>

    
     
      <div class="col-lg-4 col-md-8 col-sm-12" id="col-lg-4">
      <img src="{{ asset('image/risk-management-68.png') }}" style="width:50px;height:50px">
            <h5>{{ GoogleTranslate::trans('GESTION DES RISQUES', app()->getLocale())}}</h5><br>
            <p class="card-text">
{{ GoogleTranslate::trans('Notre perspective vous offre une meilleure compréhension de la situation financière de vos régimes 
: toujours tourné vers l avenir, en vue d identifier les facteurs clés qui peuvent influencer et dicter les opportunités et les résultats futurs, 
tels que la croissance du marché du transfert de risque,  la volatilité des marchés financiers, les exigences de capital des assureurs et le risque de longévité associé à vos régimes.
Élaboration d une politique d appétit pour le risque
analyse optimale du type de réassurance et du niveau de rétention
explication claire de l impact de la réassurance
Préparation du rapport ORSA', app()->getLocale())}}
    </p>
      </div>


      <div class="col-lg-4 col-md-8 col-sm-12" id="col-lg-4">
      <img src="{{ asset('image/security.png') }}" style="width:50px;height:50px">
            <h5>{{ GoogleTranslate::trans(' MODÉLISATION', app()->getLocale())}}</h5><br>
            <p class="card-text">
            {{ GoogleTranslate::trans('MODÉLISATION DU CAPITAL 

  Nos actuaires utilisent un générateur de scénarios basé sur la probabilité pour estimer les résultats financiers futurs d une organisation d assurance. Nous vous permettons ainsi de faire des choix commerciaux plus intelligents grâce à la modélisation du capital. Notre équipe d experts dans le domaine de l assurance générale et vie fourniront à votre organisation un objectif spécifique de modèles génériques à l échelle de l entreprise pour prendre de meilleures décisions.
  ', app()->getLocale())}}
  <ul>
  <li>{{ GoogleTranslate::trans('Optimisation des modèles de capital réglementaire et économique ', app()->getLocale())}}</li>
  <li>{{ GoogleTranslate::trans('Modélisation des pertes importantes et des catastrophes', app()->getLocale())}}</li>
</ul>
</p>


<!--<p class="card-text">
MODÉLISATION PRÉDICTIVE
  La modélisation prédictive, ou Predictive Modeling en anglais, regroupe un ensemble de méthodes permettant de collecter et d’analyser des données définies, de manière à les interpréter pour en déduire des pronostics concernant des tendances futures, des événements à venir ou bien le comportement des consommateurs à l’avenir

<ul>
  <li>Analyse des réclamations pour une atténuation efficace des ces dernières</li>
  <li>Affinement de la souscription, de la tarification et de la probabilité du segment d'activité</li>
  <li>Extraire de la valeur des données internes et externes</li>
</ul>

            </p>-->
            <a id="learn-more-bt" href="#" style="color:#de1936" onclick="openPopup()"><i>{{ GoogleTranslate::trans('Learn More ', app()->getLocale())}}></i></a>
      </div>
</div>
  









 <div class="row">
 <div class="col-lg-4 col-md-8 col-sm-12" id="col-lg-4">
        
      <img src="{{ asset('image/pension.png') }}" style="width:50px;height:50px">
<h5>{{ GoogleTranslate::trans('CONSULTATION EN REGIMES DE RETRAITE ET AVANTAGES SOCIAUX', app()->getLocale())}}</h5><br>
            <p class="card-text">

{{ GoogleTranslate::trans('Conscient du mal qu ont certaines organisations à trouver le juste équilibre entre offrir des programmes de retraite efficaces et compétitifs tout en gérant les coûts et les risques.
Notre équipe accompagne différentes organisations pour déterminer comment aborder la conception, le financement, la gouvernance, l administration et la communication des régimes de retraite.

Nos services incluent :', app()->getLocale())}}<br>

<!--<ul>
<li>Évaluation actuarielle des régimes de retraite et des fonds de prévoyance pour se conformer aux exigences de la loi sur les prestations de retraite.</li>
<li>stratégie et conception du régime de retraite </li>
<li>Risk management </li>
<li>Examens actuariels pour les régimes à cotisations définies et conseils sur l'allocation d'intérêts aux membres et formulation de politiques de réserve et d'allocation d'intérêts.</li>
<li>Conseils stratégiques sur la conception, l'analyse comparative et la mise en œuvre des systèmes de prestations de retraite.</li>
<li>Gestion financière du régime de retraite
</ul>-->
</p>

<!--<p class="card-text">
AVANTAGES SOCIAUX <br>
GENESIS ACTUARIAL CONSULTING offre une gamme de services pour aider votre entreprise à gérer vos responsabilités en matière d'indemnisation des accidents du travail.
Nous évaluons constamment les plans et les politiques de financement pour expliquer les problèmes qui pourraient survenir, tenir les clients informés et éliminer les surprises.

</p>-->
<a id="learn-more-bt" href="#" style="color:#de1936" onclick="openPopup()"><i>{{ GoogleTranslate::trans('Learn More', app()->getLocale())}}></i></a>
</div>
    
     
        
         
      <div class="col-lg-4 col-md-8 col-sm-12" id="col-lg-4">
      <img src="{{ asset('image/ifrs.png') }}" style="width:50px;height:50px">
            <h5 >{{ GoogleTranslate::trans('IFRS 17  consulting', app()->getLocale())}} </h5><br>
            <p class="card-text">
        
            {{ GoogleTranslate::trans('Nous utilisons nos compétences en actuariat et gestion des risques, et en technologies actuarielles pour garantir que votre mise en œuvre d IFRS 17 est efficace, efficiente et rentable.', app()->getLocale())}}
  <ul>
  <li>{{ GoogleTranslate::trans('Mise en œuvre de bout en bout de la norme IFRS 17', app()->getLocale())}}</li>
  <li>{{ GoogleTranslate::trans('Construire et automatiser les modèles pris en charge par l outil IFRS 17', app()->getLocale())}} </li>
  <li>{{ GoogleTranslate::trans('Construction, simplification et automatisation de l IFRS 17', app()->getLocale())}}</li>
  <li>{{ GoogleTranslate::trans('Accompagnement audit IFRS 17', app()->getLocale())}}</li>
</ul>

            </p>
     
      </div>


<div class="col-lg-4 col-md-8 col-sm-12" id="col-lg-4">
      <img src="{{ asset('image/assessment.png') }}" style="width:50px;height:50px">
            <h5>{{ GoogleTranslate::trans('PROVISIONS MATHÉMATIQUES ET TECHNIQUES', app()->getLocale())}}</h5><br>
            <p class="card-text">
{{ GoogleTranslate::trans('              
Nous vous accompagnons dans l établissement de vos provisions techniques ,lesquelles feront office de défense pour votre compagnie  contre la matérialisation des probabilités de risque.  
Nos calculs dépendent des prévisions de modèles d incertitude et d événements liés au risque susceptibles de se produire dans un avenir proche et aident ainsi votre société à élaborer des meilleurs planifications .  
Nos calculs sont préparés par des experts actuaires agréés pour vous conformer aux normes internationales.', app()->getLocale())}}

    <!-- <ul> 
<li>Elaboration et mise en place d'un manuel de provisions </li>
<li>Évaluations de l'adéquation des provisions</li>
<li>Méthodes de provisions traditionnelles
  <ol>
  <li> Modèles déterministes </li>
  <li> Modèles Stochastiques y compris la gamme statistique des estimations</li>
</ol>
  </li> 
<li>Tarification et Provisionnement</li>
<li>Construire et automatiser des modèles sur mesure pour le client</li>
<li>Reserves basées sur l’apprentissage automatique (Machine learning)</li>
</ul>-->
<a id="learn-more-bt" href="#" style="color:#de1936" onclick="openPopup()"><i>{{ GoogleTranslate::trans('Learn More', app()->getLocale())}}></i></a>
    </p>
      </div>

    </div>




    

 <div class="row">
       
       <div class="col-lg-4 col-md-8 col-sm-12" id="col-lg-4">
              
            <img src="{{ asset('image/batch.png') }}" style="width:50px;height:50px">
                  <h5>{{ GoogleTranslate::trans('AD-HOC CONSULTATION ', app()->getLocale())}}</h5><br>
                  <p class="card-text">
{{ GoogleTranslate::trans(' Ad hoc Consulting 

Dans le monde des affaires au rythme effréné d aujourd hui, les gens veulent des réponses le plus rapidement possible.
 Pour les organisations axées sur les données, cela signifie qu un outil de reporting ad hoc est un élément essentiel de leur stratégie de données .
 Un rapport ad hoc fait référence à la création de rapports dynamiques visuellement riches selon les besoins, ils sont conçus pour répondre à une question commerciale spécifique, généralement en réponse à un événement.  Lorsqu une solution ne peut être trouvée dans vos rapports statiques traditionnels .
 Nous créons un rapport ponctuel en utilisant les ensembles de données les plus pertinents pour le problème .
 Nos rapports seront unique et spécifique à votre requête commerciale et permettront ainsi d obtenir certaines informations en cas d incertitude.  Nos rapports sont précis , faciles à comprendre et partageables afin de prendre des décisions fondées sur des données aussi rapidement et avec succès que possible.', app()->getLocale())}}
<!--<ul>  
<li> Budgétisation et prévisions</li>
<li>Examens actuariels indépendants </li>
<li> Validation des modèles actuariels </li>
<li> Documentation des processus et modèles actuariels </li>
<li> Former le personnel du client </li>
<li>Management d'équipes actuarielles </li>
<li> Accompagnement actuariel audits IFRS 17</li>
</ul>-->
<a id="learn-more-btn" href="#" style="color:#de1936" onclick="openPopup()"><i>{{ GoogleTranslate::trans(' Learn More', app()->getLocale())}}></i></a> 
      </p>
                </div>
          
           
              
               
<div class="col-lg-4 col-md-8 col-sm-12" id="col-lg-4">
<img src="{{ asset('image/banking-64.png') }}" style="width:50px;height:50px">
<h5 >{{ GoogleTranslate::trans('BANK', app()->getLocale())}}</h5><br>
<p class="card-text">
{{ GoogleTranslate::trans('Notre équipe d actuaires vous accompagne dans la prédication et l évaluation de vos risques .
Nous analysons vos données pour prévoir les risques émergents pour votre entreprise , ainsi nous vous aideront à mettre en place des garanties financières pour réduire ces risques.  
Nos experts s attaquent aux risques et aux incertitudes auxquels votre banque est confrontée et nous travaillons dans l intérêt à la fois de vos clients et de votre entité financière.
', app()->getLocale())}}
<ul>  
<li>{{ GoogleTranslate::trans('Modélisation du capital', app()->getLocale())}} </li>
<li>{{ GoogleTranslate::trans('Développement du modèle de provision', app()->getLocale())}} </li>
<li>{{ GoogleTranslate::trans(' Gestion du risque de crédit', app()->getLocale())}} </li>
<li>{{ GoogleTranslate::trans('Analyse de la rentabilité des clients et des produits', app()->getLocale())}} </li>
<li> {{ GoogleTranslate::trans('Modélisation des risques de marché', app()->getLocale())}} </li>
<li> {{ GoogleTranslate::trans('Conception et tarification du produit bancaire', app()->getLocale())}} </li>
</ul>
</p>
           
</div>
      
      
      <div class="col-lg-4 col-md-8 col-sm-12" id="col-lg-4">
            <img src="{{ asset('image/assessment.png') }}" style="width:50px;height:50px">
                  <h5>{{ GoogleTranslate::trans('TARIFICATION ET DÉVELOPPEMENT DE PRODUITS', app()->getLocale())}}  </h5><br>
                  <p class="card-text">
                  {{ GoogleTranslate::trans('Conscient de la complicité dernière le développement de vos produits d assurance.
Nous vous accompagnons dans la stratégie; la conception et l ingénierie de ces derniers.
Nos examinons les tendances du marché ;les besoins des clients, les concepts de produits ou la satisfaction des clients.', app()->getLocale())}}
        <ul>       
<li>{{ GoogleTranslate::trans('Conception de produits pour les risques émergents', app()->getLocale())}} </li>
<li>{{ GoogleTranslate::trans('Analyse du facteur de notation des tarifs premium et support de dépôt de tarif', app()->getLocale())}} </li>
<li>{{ GoogleTranslate::trans('Comparaisons des tarifs avec la concurrence', app()->getLocale())}} </li>
<li>{{ GoogleTranslate::trans('Analyse de la performance de la politique et des réclamations', app()->getLocale())}}</li>
</ul>
<a id="learn-more-btn" href="#" style="color:#de1936" onclick="openPopup()"><i>{{ GoogleTranslate::trans('Learn More', app()->getLocale())}}></i></a> 
</p>

<!--<p class="card-text">
CONSEIL EN INVESTISSEMENT
<ul>
<li> Développement de la politique d'investissement</li>
<li>Modélisation actif/passif </li>
<li>Portfolio analysis </li>
</ul>

</p>--> 
</div>    
</div>
</div>




<div class="bg-blackk">

</div>
</section>




<div class="one" id="one">
<img src="image/close3.png" style="height:50px;width:50px;position:relative;top:-15px" onclick="closePopup()">
<div class="col-lg-4 col-md-8 col-sm-12" id="textPopup">
            <img src="{{ asset('image/assessment.png') }}" style="width:50px;height:50px">
                  <h5>{{ GoogleTranslate::trans('TARIFICATION ET DÉVELOPPEMENT DE PRODUITS', app()->getLocale())}}  </h5><br>
                  <p class="card-text">
                  {{ GoogleTranslate::trans('Conscient de la complicité dernière le développement de vos produits d assurance.
Nous vous accompagnons dans la stratégie; la conception et l ingénierie de ces derniers.
Nos examinons les tendances du marché ;les besoins des clients, les concepts de produits ou la satisfaction des clients.', app()->getLocale())}}
        <ul>       
<li> {{ GoogleTranslate::trans('Conception de produits pour les risques émergents', app()->getLocale())}} </li>
<li> {{ GoogleTranslate::trans('Analyse du facteur de notation des tarifs premium et support de dépôt de tarif', app()->getLocale())}} </li>
<li> {{ GoogleTranslate::trans('Comparaisons des tarifs avec la concurrence', app()->getLocale())}} </li>
<li>{{ GoogleTranslate::trans(' Analyse de la performance de la politique et des réclamations', app()->getLocale())}}</li>
</ul>
</p>

<p class="card-text">
{{ GoogleTranslate::trans('CONSEIL EN INVESTISSEMENT', app()->getLocale())}}
<ul>
<li> {{ GoogleTranslate::trans('Développement de la politique d investissement', app()->getLocale())}}</li>
<li>{{ GoogleTranslate::trans('Modélisation actif/passif', app()->getLocale())}} </li>
<li>{{ GoogleTranslate::trans('Portfolio analysis', app()->getLocale())}} </li>
</ul>

</p>   
</div>
</div>





      
      
      














<div class="team" id="team">
<div class="row" id="row">
<h2 style="font-size:40px; font-family: Trebuchet MS;color:#de1936"><center><b>{{ GoogleTranslate::trans('EQUIPE', app()->getLocale())}}</b></center></h2>
</div>


<div class="row" id="row">

<div class="column">
<div class="card"  style="height:96%">

<div class="img-container">
<img src="image/jonathan.jpg" alt="Team member 1" style="width:180%;position:relative;right:112px">
</div>
<h4>jonathan MAPATANO</h4>
<p class="hidden" style="top:5%;font-size:20px;"><b>C.E.O</b></p>


<div class="icons">
<!-- Facebook -->
<a style="color: #0072b1;" href="#!" role="button"
  ><i class="fa fa-linkedin"></i></i
></a>


<!-- Instagram -->


</div>
<br>
<h6>
<div id="popup" class="popup" >{{ GoogleTranslate::trans('
Jonathan Mapatano est un professionnel affirmé et assidu qui bâtit une carrière en vue d être Fellow actuary .
En tant que diplômé en sciences actuarielles avec une expérience professionnelle dans une entreprise de sécurité sociale, il possède des connaissances techniques en probabilités, statistiques, pensions, risques, mathematics, modélisation, finances et comptabilité. Il possède un sens aigu de la responsabilité sociale ,il est prêt à s engager et à servir.
Il a conduit des recherches qui ont portées sur l examination de la gestion des flux de trésorerie par le secteur de l assurance en incorporant ses interactions avec la gestion des risques et la gestion des investissements après avoir identifié et capturé les relations dynamiques entre elles et cela en utilisant des modèles à facteurs dynamiques (Dynamic-factor models ).', app()->getLocale())}}
</div>
</h6>
</div>
</div>









<div class="column">
<div class="card" style="height:96%">
<div class="img-container">
<img src="image/photo1.jpg" alt="Team member 2">
</div>
<h4>Dr. Joab Odhiambo</h4>
<p class="hidden" style="top:1%;font-size:20px;width:100%"><b>{{ GoogleTranslate::trans('ACTUARY EN CHEF', app()->getLocale())}}</b></p>
<br>
<div class="icons">
<!-- Facebook -->
<a style="color: #0072b1;" href="#!" role="button"
  ><i class="fa fa-linkedin"></i></i
></a>

<!-- Instagram -->


</div>
<br>
<h6>


 <div id="popup" class="popup">
 {{ GoogleTranslate::trans('
Dr. Joab Odhiambo est un conférencier, un actuaire, un analyste financier certifié et 
un chercheur en sciences actuarielles. Il est titulaire d un Doctorat, d une maîtrise 
et d un B.Sc en actuariat à l Université de Nairobi.
Il est spécialisé dans la modélisation stochastique Risque de mortalité systématique 
en vertu des données collatérales avec des applications dans les prix des produits 
actuariels. Il a fait de nombreux œuvres de conseil pour de nombreuses entreprises 
d assurance sur le marché kenyan Il est un expert en études scientifiques actuarielles,
 de modélisation financière et d analyse de données statistiques utilisant Python, 
 R-Programmes, Excel et SPSS. Son intérêt de la recherche est dans le domaine de la 
 science actuarielle, spécialisée dans la modélisation stochastique des risques de 
 mortalité et de longévité dans la structure de données collatérales. Ses recherches 
 antérieures ont été publiées dans plusieurs revues arbitrales, dont Journal of Applied 
 Mathematics , Journal of Mathematical Finance et Journal of Actuarial Science.

 ', app()->getLocale())}}
  </div>






</h6>
</div>
</div>




<div class="column">
<div class="card"  style="height:96%;width:100%">

<div class="img-container">
<img src="image/actuary100.jpg" alt="Team member 3">
</div>
<h4>Destin Ashuza, PhD</h4>
<p class="hidden" style="top:2%;font-size:20px;"><b>CONSULTANT </b></p>




<div class="icons">
<!-- Facebook -->
<a style="color:  #0072b1;" href="#!" role="button"
  ><i class="fa fa-linkedin"></i></i></a>

<!-- Instagram -->




</div>
<br>
<h6>
  
<div id="popup" class="popup">
Destin Ashuza
{{ GoogleTranslate::trans('
Titulaire d une licence en mathématiques et d un Master en mathématiques appliquées et Data Science, il est actuellement chercheur doctorant en statistique au laboratoire de mathématiques Jean Leray de Nantes Université. Les centres d intérêt de ses recherches doctorales portent essentiellement sur  les statistiques bayesiennes, l apprentissage statistique et les réseaux de neurones pour faire de la modélisation chronologique et prédictive. 
Parallèlement, il assure des missions d enseignement à la faculté des sciences de Nantes Université, pour des cours de mathématiques au niveau licence et des cours orientés statistiques, analyse de données et machine learning au niveau Master. 
Il a eu travaillé aussi comme Data Scientist en entreprise. Valorisant cette expérience professionnelle, j interviens en tant que consultant indépendant au près des entreprises pour la mise en œuvre des solutions basées sur la Data Science et de l intelligence artificielle.', app()->getLocale())}}
</div>


</h6>
</div>



</div>
</div>
</div>

</body>

<br><br><br><br><br>










<section class="blue-section">
<div class="section">
    <h2 style="font-size:40px; font-family: Trebuchet MS;color:#de1936"><center><b> {{ GoogleTranslate::trans('OBJECTIFS', app()->getLocale())}}</b></center></h2>
<p class="text-center"  style="font-weight:300; font-family: Trebuchet MS;text-align:center;">
{{ GoogleTranslate::trans('Les principaux objectifs de Genesis Actuarial Consulting sont :', app()->getLocale())}}<br><br>

  {{ GoogleTranslate::trans('1. Conseil en produits de qualité - pour créer suffisamment de prospérité pour que les clients aient un style de vie sûr et confortable.
2. Croissance de la qualité des services – aider les entreprises à développer leur activité à un rythme à la fois stimulant et gérable les
clients d abord lors de l offre de conseil – pour être un atout social pour la communauté et contribuer à ceux qui sont moins fortunés.', app()->getLocale())}}

 </p>
 </div>







      <div class="blue">
       

      </div>
    </section>
<footer class="bg-dark text-white">
  <div class="container"  style="font-family: Trebuchet MS;font-size:12px; font-weight: 100;">
    <div class="row">
    <h2 class="text-center"  style="font-family: Trebuchet MS;color:#de1936"><b> {{ GoogleTranslate::trans('CONTACTEZ NOUS', app()->getLocale())}}</b></h2>
      <div class="col-lg-4 col-md-6 col-sm-12 " style="position: relative;margin-top:175px; ">
        <p>Mt Street<br> Nairobi, KENYA<br> Phone: (254) 700-7000<br> Email:<a href="mailto:genesisactuarialconsulting001@gmail.com"> genesisactuarialconsulting001@gmail.com</a></p>
      </div>



<div class="col-lg-4 col-md-6 col-sm-12 centered" id="email">
<i class="fa fa-envelope" style="font-size:24px;color:#de1936;margin-right: 7px"></i><a href="mailto:genesisactuarialconsulting001@gmail.com">genesisactuarialconsulting001@gmail.com</a>
</div>


      
      <div class="col-lg-4 col-md-6 col-sm-12" style="position: relative;margin-top:175px; left:230px">
        <h3> {{ GoogleTranslate::trans('Follow Us', app()->getLocale())}}</h3>
        <ul class="list-inline">
      
        <a style="color:  white;font-size:18px;padding:7px;" href="#!" role="button"><i class="fa fa-linkedin"></i></i></a>
        <a style="color:  white;font-size:18px;padding:7px;" href="#!" role="button"><i class="fa fa-facebook"></i></i></a>
        <a style="color:  white;font-size:18px;padding:7px;" href="#!" role="button"><i class="fa fa-twitter"></i></i></a>
        <a style="color:  white;font-size:18px;padding:7px;" href="#!" role="button"><i class="fa fa-instagram"></i></i></a>
        </ul>
      </div>
    </div>
    <hr>
    <p class="text-center">&copy;  {{ GoogleTranslate::trans('2023 Genesis Actuarial Consulting. All rights reserved.', app()->getLocale())}}</p>
  </div>
</footer>

</html>


















 


<script>
let pop = document.getElementById("one");
/*const burger = document.getElementById('burgers');
const close = document.getElementById('close');
const nav = document.querySelector('.nav');*/
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

const links = document.querySelectorAll('a[href*="#"]');
const card = document.querySelector('.card');
const popup = document.querySelector('.popup');
const popupContent = document.querySelector('.popup-content');
const sections = document.getElementById('services');



const learnMoreBtn = document.getElementById('learn-more-btn');
const expandedText = document.getElementById('expanded-text');




// language switch start

function changeLanguage(value) {
  var flagImage = document.getElementById('selected-flag');
  var languageText = document.getElementById('selected-language');
  
  // Update the flag image and language text based on the selected value
  if (value === 'en') {
    flagImage.src = 'english_flag.png';
    languageText.textContent = 'English';
  } else if (value === 'fr') {
    flagImage.src = 'french_flag.png';
    languageText.textContent = 'French';
  }
}

// language switch ends






// Add event listener to the button/link
learnMoreBtn.addEventListener('click', function(event) {
  event.preventDefault(); // Prevent default link behavior

  expandedText.classList.toggle('hidden');
  // Toggle the visibility of the expanded text
});






window.addEventListener('scroll', function() {
    if (window.pageYOffset > 100) {
        document.getElementByClassName('nav').classList.add('nav-scrolled');
  }
});








function showPopup() {
        document.getElementById("popup").style.display = "block";
    }

    function hidePopup() {
      document.getElementById("popup").style.display = "none";
    }
















  // Select all links with hashes


  // Loop through each link and add a click event listener
  links.forEach(link => {
    link.addEventListener('click', function(e) {
      // Prevent default behavior
      e.preventDefault();

      // Get the section ID from the href attribute
      const href = this.getAttribute('href');
      const sectionID = href.slice(1);
      // Get the section element
      const section = document.getElementById(sectionID);
      // Calculate the distance from the top of the page to the section
      const sectionTop = section.getBoundingClientRect().top + window.pageYOffset;
      // Scroll to the section
      window.scrollTo({
        top: sectionTop,
        behavior: 'smooth'
      });
    });
  });







  
function openPopup() {
    event.preventDefault();
    document.body.style.overflow = 'hidden';
    pop.classList.add("open-popup");
    pop.style.display = 'block';
    document.body.style.visibility='hidden';
 
}

function closePopup() {
    pop.classList.remove("open-popup");
    document.body.style.visibility='visible';
    document.body.style.overflowY = 'scroll';
}



/*

function openPopup() {
    event.preventDefault();
    document.body.style.overflow = 'hidden';
    pop.classList.add("open-popup1");
    pop.style.display = 'block';
    document.body.style.visibility='hidden';
}

function closePopup() {
    pop.classList.remove("open-popup1");
    document.body.style.visibility='visible';
    document.body.style.overflowY = 'scroll';
}

*/


/*

function openPopup() {
    event.preventDefault();
    document.body.style.overflow = 'hidden';
    pop.classList.add("open-popup2");
    pop.style.display = 'block';
    document.body.style.visibility='hidden';
 
}

function closePopup() {
    pop.classList.remove("open-popup2");
    document.body.style.visibility='visible';
    document.body.style.overflowY = 'scroll';
}*/






hamburger.addEventListener("click", () => {
 hamburger.classList.toggle("active");
 navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => 
n.addEventListener("click", () => {
hamburger.classList.remove("active");
navMenu.classList.remove("active");


}))









/*var url = "{{ route('changeLang') }}";
var changeLang = document.querySelector(".changeLang");

changeLang.addEventListener("change", function() {
    window.location.href = url + "?lang=" + this.value;
});*/



var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>

