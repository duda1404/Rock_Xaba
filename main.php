<?php
// Define que o arquivo terá a codificação de saída no formato CSS
header("Content-type: text/css");

?>
/* O body que será usado especificamente para a página principal e das bandas, sem o background-image */
.principal, .bandas, .login{
    background-color: black;
     width:100%;
     height: 100%;
     margin: 0 auto;
     font-family:'Josefin Sans';
     color: #e92eed;
}
/* O body das páginas que contém o background image*/
body{
    
    width:100%;
    height: 100%;
    margin: 0 auto;
    font-family:'Josefin Sans';
    color: #e92eed;
    background-image:url(../img/bgcontactus.png);
}

/* ***************************************************** */

/*Estilização do Menu*/
.menu-principal{
    width: 100%;
    background-color: black;
    height: 17%;  
}

main{
    margin: 0 auto;    
    position: relative;
}

.menu-1{
    position: absolute;
    width: 90%;
    padding-left: 0%;
    padding-top: 2%;
    font-family: 'Staatliches', cursive;
    text-align: center;
    
}
.menu-1  ul li{
    display: inline-block;
    list-style: none;
    color: white;
    height: 100%;
}

.menu-1  ul li:hover{
    border-bottom: 1px solid #fb9afc;
}

.menu-1  ul li a:hover{
    color: #fb9afc;
}

.menu-1  ul li a{
    display: inline-block;
    list-style: none;
    color: white;
    text-decoration: none;
    font-size: 130%;
    margin-left: 15px;
    text-transform: uppercase;
}

.col-100{
    width: 100%;
    float: left;
    position: relative;
}

/* ***************************************************** */

/* Estlização da logo, para ela ficar à esquerda do menu */
.logo{
    position: absolute; 
    top: 0; 
    left: 2%;
    text-align: start;
}

/* ***************************************************** */

/* Aqui começa os slides, configurados para preencher toda a tela*/
.mySlides {display:flex}

img {vertical-align: middle;}

.slideshow-container {
  position: relative;
  width: 100%;
  }
  
  /* Botões de próximo e anterior */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 45%;
    width: auto;
    padding-top: 0%;
    margin-top: 0%;
    color: #fb9afc;
    font-weight: bold;
    font-size: 50px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  
  /* O quão pra direita vai ficar o botão "próximo"*/
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* Hover dos botões */
  .prev:hover, .next:hover {
    color: #e92eed;;
  }
  
  /* Os indicadores de slide, embaixo da imagem a ser exibida*/
  .dot {
    cursor: pointer;
    position: relative;
    height: 12px;
    width: 12px;
    margin: 10 2px;
    background-color: #fb9afc;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
    .active, .dot:hover {
    background-color: #e92eed;
  }
  
  /* Animação da transição */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
    @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  /* Diminuir a fonte em telas menores */
  @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
  }

/* ***************************************************** */

/* Estlização da página Sobre */  
.about {
    width: 100%;
    padding: 20px 0px;
}

.about img{
    height: auto;
    width: 430px;
}

.about-text{
    width: 550px;
}

.main-about{
    width: 1130px;
    max-width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.about-text h2{
    font-size: 75px;
    text-transform: capitalize;
    margin-bottom: 20px;
    font-family: 'Staatliches', cursive;
    text-align: justify;
}

.about-text h2 span{
    color: white;
}

.about-text p span{
    color: #57B7F2;
}

.about-text p{
    line-height: 28px;
    letter-spacing: 1px;
    font-size: 18px;
    margin-bottom: 45px;
    font-family:'Times New Roman', Times, serif;
    text-align: justify;
}

/* ***************************************************** */

/* Estlização da página Siga-Nos*/
.follow-text  ul li{
    display: inline-block;
    list-style: none;
    margin-left: 20px;
    max-width: 100%;
    padding-top: 100px;
    padding-right: 40px;    
}

.follow {

  width: 100%;
  padding: 40px 0px;

}

.follow img{
  height: auto;
}

.follow img:hover{
  -moz-transform: scale(1.1);
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
}

.main-follow{
  margin: 0 auto;
  justify-content: space-around;
  display: flex;
}

.follow-text h2{
  font-size: 50px;
  text-transform: capitalize;
  margin-bottom: 20px;
  font-family: 'Staatliches', cursive;
  text-align: center;
}

.follow-text h2 span{
  color: white;
}

.waves-effect.waves-light
{background-color: #d200f2;}

/* ***************************************************** */

/* Página de Login */

.right-login{

  justify-content: center;
  align-items: center;
  width: auto;
  height: auto;
}

.card-login{

    width: 50%;
    height: 80%;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    display: flex;
    padding: 100px 100px;
    background-color: black;
    margin: auto;
    border-radius: 12px;
    box-shadow: 0px 10px 40px #00000056;
    box-sizing: border-box;

}

.card-login h1{

  font-family: 'Staatliches', cursive;

}

/* ***************************************************** */

/* Estilização da página Contato */
.contato img{
  height: auto;
  width: 430px;
  
}


.main-contato{
  width: 35%;

 
  align-items: center;
}

/* ***************************************************** */

/* Estilzação da página Artistas */
.bandas-text  ul li{
  display: inline-block;
  list-style: none;
  margin-left: 20px;
  max-width: 100%;
  padding-top: 50px;
  padding-right: 40px;
}

.main-bandas{
  margin: 0 auto;
  justify-content: space-around;
  display: flex;
}

.bandas-text h2{
  font-size: 50px;
  text-transform: capitalize;
  margin-bottom: 20px;
  font-family: 'Staatliches', cursive;
  text-align: center;
}

.bandas img{
  width: 300px;
  height: 300px;
	-moz-transition: all 0.3s;
	-webkit-transition: all 0.3s;
  transition: transform 0.5s, filter 0.5s ease-in-out;
  filter: grayscale(0);
}

.bandas img:hover{
  filter: grayscale(100%);
  -moz-transform: scale(1.1);
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
}

.bandas-text h2 span{
  color: white;

}

/* ***************************************************** */

/* Estilização da sub-página do Pink Floyd */
.pink {

  width: 100%;
  padding: 100px 0px;
  background-color: black;
}

.pink img{
  height: auto;
  width: 430px;
}

.pink-text{
  width: 550px;
}

.main-pink{
  width: 1130px;
  max-width: 95%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.pink-text h2{
  font-size: 75px;
  text-transform: capitalize;
  margin-bottom: 20px;
  font-family: 'Staatliches', cursive;
  text-align: justify;
}

.pink-text h2 span{
  color: white;
}

.pink-text p span{
  color: #57B7F2;
}

.pink-text p{
  line-height: 28px;
  letter-spacing: 1px;
  font-size: 18px;
  margin-bottom: 45px;
  font-family:'Times New Roman', Times, serif;
  text-align: justify;
}

/* ***************************************************** */

/* Estilização da sub-página do Red Hot Chili Peppers */
.redd {
  width: 100%;
  padding: 10px 0px;
  background-color: black;
}

.redd img{
  height: auto;
  

}

.redd-text{
  width: 550px;
}

.main-redd{
  width: 1130px;
  max-width: 95%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.redd-text h2{
  font-size: 75px;
  text-transform: capitalize;
  margin-bottom: 20px;
  font-family: 'Staatliches', cursive;
  text-align: center;
  color: red;
  letter-spacing: 1px;
}

.redd-text h2 span{
  letter-spacing: 1px;
  color: white;
}

.redd-text p span{
  color: #ffffff;
}

.redd-text p{
  line-height: 28px;
  letter-spacing: 1px;
  font-size: 18px;
  margin-bottom: 45px;
  font-family:'Times New Roman', Times, serif;
  text-align: justify;
  color: red;
}

/* ***************************************************** */
/* Estilização da sub-página do Red Hot Chili Peppers */
.rexx {
  width: 100%;
  padding: 10px 0px;
  background-color: black;
}

.rexx img{
  height: auto;
  width: 430px;
  

}

.rexx-text{
  width: 550px;
}

.main-rexx{
  width: 1130px;
  max-width: 95%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.rexx-text h2{
  font-size: 75px;
  text-transform: capitalize;
  margin-bottom: 20px;
  font-family: 'Staatliches', cursive;
  text-align: center;
  color: red;
  letter-spacing: 1px;
}

.rexx-text h2 span{
  letter-spacing: 1px;
  color: white;
}

.rexx-text p span{
  color: #ffffff;
}

.rexx-text p{
  line-height: 28px;
  letter-spacing: 1px;
  font-size: 18px;
  margin-bottom: 45px;
  font-family:'Times New Roman', Times, serif;
  text-align: justify;
  color: red;
}

/* Semi-estilização do embed do Spotify */

.spotify{
  max-width: 300px;
}
.spotify_1{
  left: 0; 
  width: 184%; 
  height: 0; 
  position: relative; 
  padding-bottom: 100%; 
  padding-top: 80px;
}






