function mudafoto (foto)
{
    document.getElementById("logo").src = foto; 
}

// botão leia mais primeira
function leiaMais(){
  var pontos=document.getElementById("pontos");
  var maisTexto=document.getElementById("mais");
  var btnLeiaMais=document.getElementById("btnLeiaMais");

  if(pontos.style.display === "none"){
    pontos.style.display="inline";
    maisTexto.style.display="none";
  btnLeiaMais.innerHTML="Leia Mais";
  }

  else{
  pontos.style.display="none";
  maisTexto.style.display="inline";
  btnLeiaMais.innerHTML="Leia Menos";
  }
}
// fim botão leia mais primeira

// botão leia mais segunda
function leiaMaisSeg (){
  var loki=document.getElementById("loki");
  var segundaTexto=document.getElementById("segunda");
  var segundaNoticia=document.getElementById("segundaNoticia");

  if (loki.style.display === "none"){
     loki.style.display="inline";
     segundaTexto.style.display="none";
     segundaNoticia.innerHTML="Leia Mais";
  }

  else{
    loki.style.display="none";
    segundaTexto.style.display="inline";
    segundaNoticia.innerHTML="Leia Menos"
  }

}
// fim botão leia mais segunda

// botão leia mais terceira
function leiaMaisTer(){
  var Xmen=document.getElementById("Xmen");
  var terceiraTexto=document.getElementById("terceira");
  var terceiraNoticia=document.getElementById("terceiraNoticia");

  if (Xmen.style.display === "none"){
    Xmen.style.display="inline";
    terceiraTexto.style.display="none";
    terceiraNoticia.innerHTML="Leia Mais";
  }

  else{
    Xmen.style.display="none";
    terceiraTexto.style.display="inline";
    terceiraNoticia.innerHTML="Leia Menos";
  }
}
// fim botão leia mais terceira

// ordem cronolígica

function umClique() {
  document.getElementById("cronologia") .src="../imagens/ordem cr/vingadores-ultimato.gif"
}

function doisCliques(){
  document.getElementById("cronologia") .src="../imagens/ordem cr/thanos-icegif-6.gif"
}

function umClique1() {
  document.getElementById("cronologia2") .src="../imagens/ordem cr/Nick-Fury.jpg"
}

function doisCliques2(){
  document.getElementById("cronologia2") .src="../imagens/ordem cr/tumblr_pj6z84AxvL1vjdt8po1_540.gif"
}

// fim de ordem cronológica