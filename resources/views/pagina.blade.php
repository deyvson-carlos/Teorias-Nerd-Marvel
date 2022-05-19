<!DOCTYPE html>
<html lang="pt-br">

<!-- cabecalho -->
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="sortcut icon" href="../imagens/pagina/eu001.png" type="image/x-icon"/>

    <link rel="stylesheet" href="<?php echo asset('css/pagina.css')?>" type="text/css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    <title>Blog: Teorias Nerd</title>

</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php echo asset('js/TeoriasNerd.js')?>"></script>


<body>



<div id="interface">
<header id="cabecalho">
<hgroup>

<h1>Teorias Nerd</h1>
<h2>Tudo Sobre filmes e séries da marvel</h2>
</hgroup>
            
<img id="logo" src="../imagens/pagina/eu001.png" />
           
<nav id="menu">
<h1>Menu Principal</h1>
<ul type="disc">
<li onmouseover="mudafoto('../imagens/menu/Home.png')"onmouseout="mudafoto('../imagens/pagina/eu001.png')"><a href="pagina">Home</a></li>
<li onmouseover="mudafoto('../imagens/menu/Cronologica.png')"onmouseout="mudafoto('../imagens/pagina/eu001.png')"><a href="ordem cronologica">Ordem Cronológica</a></li>
<li  onmouseover="mudafoto('../imagens/menu/podcast.png')"onmouseout="mudafoto('../imagens/pagina/eu001.png')"><a href="podcast">Podcast</a></li>
<li  onmouseover="mudafoto('../imagens/menu/sua teoria.png')"onmouseout="mudafoto('../imagens/pagina/eu001.png')"><a href="teoria">Sua Teoria</a></li>
<li  onmouseover="mudafoto('../imagens/menu/fotos.png')"onmouseout="mudafoto('../imagens/pagina/eu001.png')"><a href="fotos">Fotos</a></li>
<li  onmouseover="mudafoto('../imagens/menu/equipes.png')"onmouseout="mudafoto('../imagens/pagina/eu001.png')"><a href="equipe">Equipe</a></li>

<li>
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </li>

</nav>

</header>

<section id="corpo">
<article id="noticia-principal">
<header id="cabecalho-artigo">   
<hgroup>
<h1>Tudo sobre a Marvel</h1>
<br><h2>Últimas Notícias</h2><br>
</hgroup>
</header>

<!-- fim do cabecalho -->

<!-- primeira noticia -->
<article id="primeira-NT" >
<figure class="foto">
<figcaption class="Notícias">
<img class="aranha" src="../imagens/pagina/homem aranha3.jpg">
<h5>HOMEM-ARANHA 3: O QUE É FATO E O QUE É RUMOR SOBRE NOVO FILME DO TEIOSO </h5>
<h3>Afinal, o que é rumor e o que já foi confirmado no longa?</h3>
<h4>POR: Deyvson Carlos</h4>

Conforme o Universo Cinematográfico da Marvel se expande cada vez mais, o próximo filme do Homem-Aranha promete ser um grande evento que vai trazer ainda mais desenvolvimento para Peter Parker, <p><span id="pontos">...</span><span id="mais"> especialmente após os eventos nebulosos que aconteceram em seu último filme solo. Dessa vez, veremos um Amigão da Vizinhança bem aflito, que precisa lutar para provar sua inocência, já que sua identidade secreta foi exposta ao mundo, junto com a afirmação de que ele seria um assassino.

<br>Spider-Man: No Way Home (ainda sem título oficial em português) é o filme que muitos de nós esperamos – e se levarmos em conta todas as notícias e rumores que circulam a produção, é possível que tenhamos o melhor longa do Aranha nos cinemas. Porém, chegou a hora de desmistificar alguns anúncios sobre a trama e seus personagens. Aqui, você vai descobrir o que é rumor e o que já foi confirmado para o novo filme do Homem-Aranha!<br/>

    O que já sabemos

Ainda não sabemos quanto tempo terá se passado entre um filme e outro, mas No Way Home será uma sequência direta dos eventos de Homem-Aranha: Longe de Casa, o último filme do Amigão da Vizinhança que chegou aos cinemas em 2019. No filme, Peter Parker parte em uma excursão pela Europa e acaba se unindo ao Mysterio para deter criaturas multidimensionais conhecidas como Elementais.

Contudo, Peter logo descobre que esses Elementais são, na verdade, hologramas destrutivos utilizados pelo próprio Mysterio para gerar mais atenção para si. O vilão se ressente do Homem de Ferro (que já morreu), mas tenta usar de vários meios para manchar a reputação do herói, enquanto parte para um confronto direto com o Teioso. Ao fim do filme, Peter consegue até derrotá-lo, mas o antagonista deixa um último truque na manga…

Sem que Peter soubesse, Mysterio grava um de seus últimos confrontos com ele. O vídeo é editado e mandado para o tabloide Clarim Diário, de J. Jonah Jameson. E além de confirmar a identidade secreta do Aranha, o vídeo faz parecer que ele matou Mysterio a sangue frio. Agora, esse segredo está exposto ao mundo e cabe ao herói tentar se livrar de sua sina e da perseguição da mídia e de grandes vilões.

O terceiro filme da franquia do herói no Universo Cinematográfico da Marvel deve continuar exatamente de onde isso acabou, dando origem a uma nova era na história do Amigão da Vizinhança. Sabemos que ele vai precisar tentar livrar seu nome, ao mesmo tempo em que encontrará novos inimigos aqui e acolá. E enquanto o mundo desmorona ao seu redor, ele receberá a ajuda de seus amigos e de um grande herói da Casa das Ideias.

O que já foi confirmado
Aqui está um apanhado de todas as notícias que já foram confirmadas pela Marvel ou por fontes por trás do longa. E é importante lembrar que todas essas notícias foram divulgadas publicamente nos perfis oficiais do filme ou através de entrevistas e anúncios.

Os vilões
Por enquanto, sabemos já da participação de dois grandes vilões em Spider-Man: No Way Home, e ambos foram trazidos de duas franquias anteriores do Amigão da Vizinhança, antes de sua inclusão no Universo Cinematográfico da Marvel. O primeiro deles é o Electro de Jamie Foxx, cuja primeira aparição se deu no longa O Espetacular Homem-Aranha 2, de 2014.

Electro começa como Max Dillon, um fã de Peter. Lentamente isso se transforma em obsessão. Em um acidente na Oscorp, ele acaba caindo em um tanque cheio de enguias elétricas e é transformado em Electro, um ser composto de energia que se alia ao Duende Verde e acaba trazendo vários problemas para a cidade de Nova York e para o herói. Ainda não sabemos se Foxx interpretará a mesmíssima versão do personagem aqui.

O segundo inimigo confirmado é o Doutor Octopus de Alfred Molina, o principal vilão de Homem-Aranha 2, lançado em 2004. De acordo com o próprio ator, ele está interpretando a mesma versão do filme de Sam Raimi, já que o diretor de No Way Home, Jon Watts, disse a ele que “ninguém morre de verdade no Universo Marvel“. Isso é uma das pistas que leva à “comprovação” do Multiverso sendo explorado no longa.

O aliado
Assim que o filme foi anunciado, a Marvel Studios também confirmou a presença de um grande herói, atuando como mentor de Peter Parker assim como o Homem de Ferro e Nick Fury (que, na verdade, era o Skrull Talos) nos filmes anteriores. Trata-se do Doutor Estranho, que será mais uma vez vivido por Benedict Cumberbatch, um pouco antes do segundo filme solo do Mestre das Artes Místicas.

Ainda não sabemos quanto tempo de tela o herói terá no filme e nem qual será seu papel, mas as suspeitas apontam que ele vai ajudar Peter a entender um pouco mais sobre o conceito do Multiverso e talvez auxiliar nas aventuras do personagem enquanto ele tenta livrar seu nome de todas as fake news e polêmicas que circulam por aí. E não só isso, mas No Way Home será também o “segundo capítulo da trilogia do Multiverso”, seguindo WandaVision.

O resultado deve desembocar literalmente em Doutor Estranho no Multiverso da Loucura, o filme onde o Mago Supremo precisará lidar com outros heróis para enfrentar uma ameaça crescente. A história está sendo criada delicadamente e ainda deve incorporar elementos de outras produções do MCU, como Loki, que também explorará um pouco do conceito do Multiverso.

Outros retornos esperados
O filme ainda vai trazer de volta alguns atores e personagens que já se destacaram nessa franquia do Homem-Aranha em particular. Zendaya e Jacob Batalon voltam aos papéis de Michelle Jones e Ned Leeds, respectivamente. Os dois são amigos de escola de Peter Parker e aliados do Homem-Aranha. Além disso, MJ já se tornou a namorada oficial do herói, após os eventos de Longe de Casa.

Tony Revolori volta ao papel de Flash Thompson, enquanto Marisa Tomei reprisa a interpretação de Tia May – dando continuidade ao que já foi estabelecido nos filmes anteriores. Outros atores confirmados são J.B. Smoove (Julius, um professor de Parker), Hannibal Buress (Wilson, o professor de educação física do herói) e Angourie Rice (Betty Brant, uma colega de classe de Peter e ex-namorada de Ned Leeds).

O que ainda é rumor
Aqui, reunimos as notícias que ainda não foram oficialmente confirmadas para o filme. Esses anúncios vieram dos sites que alegam ter contato com fontes internas da produção, mas o conteúdo das notícias ainda não foi tornado público pela Marvel Studios, pela Disney ou pela Sony.

Aranhaverso em live-action
O maior rumor a respeito desse novo filme trata do retorno de Tobey Maguire e Andrew Garfield, que viveram versões diferentes do Homem-Aranha nas franquias anteriores à inclusão do personagem no MCU. A ideia é que eles estarão presentes no filme para auxiliar o Peter Parker de Tom Holland a enfrentar uma extensa galeria de vilões que querem destruí-lo.

E supostamente, não apenas esses atores voltariam como também personagens de suas respectivas franquias, como a Mary Jane Watson de Kirsten Dunst ou a Gwen Stacy de Emma Stone. Por ora, a Sony e a Marvel Studios estão tentando esconder a sete chaves esse “segredo”, embora algumas pistas apontem para a veracidade de todas essas informações.

Vale lembrar também que rumores indicam que outros vilões dessas franquias seriam incorporados ao MCU, como o Duende Verde de Willem Dafoe, que foi o antagonista de Homem-Aranha, de 2002. Embora essa ideia continue ativa, já é mais difícil encontrar pistas que liguem a união dessas várias franquias, por questões envolvendo contratos e outros detalhes burocráticos.

Aliados inusitados
Com a identidade de Peter Parker exposta para que qualquer vilão possa atacá-lo por vingança, o Herói Aracnídeo vai precisar de alguém que o defenda e tente provar que ele não é quem todos pensam. Por isso, outro rumor aponta para a participação de Charlie Cox no papel de Matt Murdock, tentando auxiliar Peter a livrar seu nome nos tribunais e processos.

Charlie foi o protagonista da série solo do Demolidor, uma co-produção da Marvel Television e da Netflix. Até o presente momento, todas essas séries do streaming não foram reconhecidas como parte integrante do Universo Cinematográfico da Marvel, e caso o Demolidor fosse incorporado aqui, seria a primeira vez que teríamos uma ligação clara entre essas mídias diferentes.

Porém, caso isso aconteça mesmo, não há informações concretas de que Murdock aparecerá como Demolidor. Os boatos inclusive indicam que, apesar de ser o ator de volta ao seu papel, trata-se de uma versão bem diferente do personagem – e muito provavelmente, isso se dá porque as séries da Marvel/Netflix tinham um conteúdo muito adulto que não se “encaixa” na proposta family-friendly do MCU.

Conexão com o Universo da Sony
Especula-se muito que o filme também fará a primeira ligação entre essa franquia do Homem-Aranha do MCU e o universo de filmes da Sony, adaptando histórias de vários vilões do Amigão da Vizinhança. Esse “universo” começou em 2018 com o lançamento de Venom, e vai retornar ativamente com Venom: Tempo de Carnificina e o filme de Morbius (que aparentemente terá uma participação do Abutre, de acordo com o trailer).

Além disso, outras produções já foram confirmadas, como um filme solo para Kraven, o Caçador e uma série da Amazon focada na heroína Teia de Seda. Há inclusive especulações de que, após No Way Home, a Sony utilizará o Aranha de Andrew Garfield como principal “herói” dentro dessa franquia à parte do MCU, enquanto o Aranha de Tom Holland continuará ganhando filmes solo inseridos no contexto desse universo.</span></p>

<!-- foto do redator -->
<a class="archive_entry_details_autor"  href="equipe"> 
    <img id="eu" src="../imagens/equipe/deyvsonfotos.png"    data-src="" alt="Deyvson Carlos" class="" data-was-processed="true">
    Deyvson Carlos
    </a>
<!-- fi do foto redator -->

<!-- botão leia mais e leia menos -->
<button class="btnLeiamaiS btnLeiamenoS" onclick="leiaMais()" id="btnLeiaMais">Leia Mais</button>
<!-- fim do botão leia mais e leia menos -->
</figcaption>
</figure>
</article>
<!-- fim da primeira noticia -->

<!-- segunda noticia -->
<article id="segunda-NT">
    <figure class="fotos">
    <figcaption class="NotíciasLo">
    <img class="rei" src="../imagens/pagina/gaviao.jpeg">
    <h5>Rei do Crime pode aparecer na série do ‘Gavião Arqueiro’ e ter conexão com ‘Homem-Aranha 3’</h3>
    <h4>POR: Deyvson Carlos</h4>

    <p>De acordo com um usuário do Reddit, Vincent D’Onofrio vai reprisar seu papel como Rei do Crime na série do ‘Gavião Arqueiro‘.<span id="loki">...</span><span id="segunda"> Além disso, a publicação diz que a trama da atração terá conexões com ‘Homem-Aranha: Sem Volta para Casa‘, por isso a estreia da série será na mesma época do lançamento do filme.

    Por enquanto, ainda não há nada confirmado… Mas, se for verdade, a informação se alinha com os rumores sobre a participação de Charlie Cox como Matt Murdock no novo filme do Cabeça de Teia.
        
    Infelizmente, o autor do texto não revela como será a participação do Rei do Crime e de Murdock na série do Gavião.

    No entanto, é possível que os personagens façam apenas participações especiais, já que também devem aparecer na vindoura série da ‘Echo‘, personagem já confirmada em ‘Gavião Arqueiro’.

    Há algumas semanas, fontes do Giant Freakin Robot já haviam dito que o Demolidor terá um grande papel na série da Echo, então faria total sentido apresentarem o Homem sem Medo na série do Gavião.

    Também foi dito que o Mercenário da 3ª temporada de ‘Demolidor‘ também deve ser intregrado no futuro do MCU, junto com outros membros d’Os Defensores, mas não foram revelados quais deles.

  Lembrando que rumores já apontaram que Cox também fará uma participação especial em ‘Homem-Aranha: Sem Volta para Casa‘.
  </span></p>

    <a class="archive_entry_details_autor"  href="equipe"> 
    <img id="eu" src="./imagens/equipe/deyvsonfotos.png"    data-src="" alt="Deyvson Carlos" class="" data-was-processed="true">
    Deyvson Carlos
    </a>
                
    <button class="btnLeiamaiS btnLeiamenoS" onclick="leiaMaisSeg()" id="segundaNoticia">Leia Mais</button>
                
                
    </figcaption>
    </figure>
    </article>
<!-- fim da segunda noticia -->

<!-- terceira noticia -->
<article id="terceira-NT">
<figure class="fotoss">
<figcaption class="NotíciasX">
<img class="X-Men" src="../imagens/pagina/k0YhVnXSR0GjhHRMdmLTsRdDSUj.jpg">
<h5>Viúva Negra: Todos os easter eggs e referências a outros filmes da Marvel</h3>
<h4>POR: Deyvson Carlos</h4>

<p><br><b></br></b> 1. QUEM É URSA? Quando vemos Alexei (David Harbour) disputando lutas de braço na prisão, um dos adversários que aparece é chamado de Ursa.<span id="Xmen">...</span><span id="terceira"> O personagem faz referência a um mutante que existe nas histórias em quadrinhos e se chama Ursa Maior. Trata-se de um herói russo, assim como o Guardião Vermelho, que se transforma em um urso, graças a seus superpoderes. Em Viúva Negra, Alexei chega a brincar dizendo que o rival é um urso.


 2. QUEM É O DÍNAMO VERMELHO?
Em um dos diálogos entre Yelena (Florence Pugh) e Alexei, vemos a espiã fazer uma provocação, chamando o “pai” de Dínamo Vermelho - um nome que não foi inventado por ela e também já existe nos quadrinhos. Originalmente, o personagem é um dos vilões do Homem de Ferro chamado Anton Vanko - que aparece no início de Homem de Ferro 2, filme que marcou a estreia da Viúva Negra no MCU.
    
3. TREINADOR NOS QUADRINHOS

Uma das mudanças mais surpreendentes em Viúva Negra foi a identidade do vilão Treinador, mas, ainda assim, o filme faz uma referência ao personagem original. No longa, a filha de Dreykov (Ray Winstone) se chama Antonia, enquanto nos quadrinhos, o vilão, que também tem o poder de imitar os movimentos dos adversários, se chama Anthony. 

4. GOLPES DO TREINADOR
Vale ainda observar que alguns dos golpes que o Treinador usa já apareceram nas lutas de outros heróis no MCU, indicando que a personagem também os estudou. Entre os que mais chamam atenção estão as garras que ela coloca para fora, em um movimento idêntico ao do Pantera Negra (Chadwick Boseman); e o uso de uma faca, espelhando o movimento do Soldado Invernal (Sebastian Stan). 

5. COLETE CHEIO DE BOLSOS

No filme, Yelena é uma grande fã de seu colete cheio de bolsos e, em uma prova de afeto, presenteia Natasha com o item no final. Em Vingadores: Guerra Infinita, que vem após Viúva Negra na ordem cronológica dos filmes da Marvel, Natasha aparece usando a peça.

6. CONVERSA ENTRE LOKI E NATASHA REVELOU TRAMA DO FILME
Em 2012, no primeiro filme dos Vingadores, Loki (Tom Hiddleston) tenta desestabilizar Natasha ao citar a filha de Dreykov, indicando que a heroína tinha algum envolvimento na morte dela. No novo filme, a história é contada mais detalhadamente e descobrimos que Antonia, quando criança, foi vítima da explosão armada pela S.H.I.E.L.D para aniquilar o general. 

7. O QUE É O INSTITUTO NORTE?
No início do filme, descobrimos que Alexei estava nos Estados Unidos disfarçado trabalhando para o Instituto Norte, com a missão de roubar informações sobre os experimentos nos supersoldados - Bucky Barnes, inclusive, é citado. Nos quadrinhos, essa organização também existe e foi responsável por uma caça a Natasha e outras viúvas negras.

8. BOND, JAMES BOND

A grande espiã da Marvel é fã de um grande espião do cinema: em Viúva Negra, vemos Natasha assistir a 007 Contra o Foguete da Morte em seu trailer, pouco antes do blackout. No filme de 1979, James Bond vai a uma estação espacial secreta - assim como Natasha vai à Sala Vermelha, escondida nos céus.

9. PARTICIPAÇÃO DO GAVIÃO ARQUEIRO
 Além de finalmente revelar o que aconteceu entre a Viúva Negra e o Gavião Arqueiro em Budapeste, o filme também tem uma mini-participação de Jeremy Renner. Segundo o Screen Rant, é a voz do ator que pede autorização a Natasha para detonar os explosivos na sala em que está o General Dreykov.

10. CENA PÓS-CRÉDITOS

Por fim, a cena pós-créditos também já deu boas pistas sobre o que aguarda a nova Viúva Negra no futuro da Marvel. No trecho, Yelena encontra a Condessa Valentina Allegra de la Fontaine (Julia Louis-Dreyfus, personagem apresentada em Falcão e o Soldado Invernal. A vilã mostra à heroína uma foto do Gavião Arqueiro, indicando que ele será seu próximo alvo - a boa notícia é que não demoraremos muito para descobrir os detalhes, já Florence Pugh está confirmada em Hawkeye, série do personagem que tem estreia prevista ainda para 2021 no Disney+.</span></p>

<a class="archive_entry_details_autor"  href="equipe"> 
    <img id="eu" src="./imagens/equipe/deyvsonfotos.png"    data-src="" alt="Deyvson Carlos" class="" data-was-processed="true">
    Deyvson Carlos
    </a>

    <button class="btnLeiamaiS btnLeiamenoS" onclick="leiaMaisTer()" id="terceiraNoticia">Leia Mais</button>

</figcaption>
</figure>
</article>

<!-- editando botão próxima página -->
<br><br><br><br>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
      <li class="page-item disabled">

        <a class="page-link">Anterior</a>
      </li>
      <li class="page-item"><a class="page-link" href="pagina2">2</a></li>
      <li class="page-item"><a class="page-link" href="pagina3">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item">
        <a class="page-link" href="javascript:history.go(+1)">Próxima</a>
      </li>
    </ul>
  </nav>
<!-- fim do editando botão próxima página -->

</article>
</section>
<!-- fim da terceira noticia -->


<!-- propaganda -->
<aside id="propaganda">
    <img class="the" src="../imagens/NLateral/daily-bugle-tt-desktop.png">
    <h2>Site: Clarín Diário, entre no <a href="clarin diario" target="blank">Link</a></h2>
 
    <img class="gif" src="../imagens/NLateral/gif.gif" >
    <h2>O Homem-Aranha é uma ameaça!</h2>
    <img class="jornal" src="../imagens/NLateral/Diseño-sin-título-74-370x260.jpg">
    </aside>
<!-- fim da propaganda -->

<!-- segunda parte -->
<aside id="lateralS">
    <h1>ARANHAVERSO</h1>
    <h2>Acesse as notícias pelo <a href="aranhaverso" target="blank">Link</a></h2>
    <img class="sony" src="../imagens/NLateral/b3075835f06fe623609bb515d4d4c7462243ad09r1-1280-720v2_hq.jpg"><br>
       
    
    <br><img class="kraven" src="../imagens/NLateral/IMG_20210526_193659.jpg">
    <br><h2>KRAVEN, O CAÇADOR: FILME DA SONY PODE TER CONEXÃO COM O UNIVERSO CINEMATOGRÁFICO MARVEL</h2>

    <p>Nessa última quarta-feira, foi anunciado que Aaron Taylor-Johnson será Kraven, O Caçador no filme solo do vilão para a Sony. Agora, foi notado que a descrição oficial do filme, divulgado pela Sony quando o filme foi anunciado, faz uma referência ao Pantera Negra.<br>

    <b>“Um dos personagens do universo da Marvel da Sony Pictures, Kraven é um dos anti-heróis mais icônicos e notórios, tendo encontrado o Venom e o Pantera Negra, entre vários outros, além de ser um dos inimigos mais conhecidos e formidáveis do Homem-Aranha”.</b></br><br>
    </p>


    <br><img class="aranha" src="../imagens/NLateral/aranhaverso-696x450.jpg">
    <h2>Homem-Aranha deve aparecer no Universo Marvel da Sony, diz chefe do estúdio</h2>
    <p>”Na verdade, há um plano. Talvez nesse momento esteja ficando um pouco mais claro para as pessoas, para onde estamos indo. E sinto que, quando “No Way Home”‎‎ chegar, ainda mais será revelado.”‎</p>

    
    </aside>
<!-- fim da segunda parte -->

<!-- outras noticas na barra lateral -->
<aside id="lateral">
<h1>Game Marvel</h1>
<h2>Tente vencer o Venom</h2>
   
<img class="gif" src="../imagens/NLateral/h-a gif.gif" >

<a href="game" target="_blank"><button id="jogar" type="button" class="btn btn-outline-primary">Jogar</button></a>

</aside>
<!-- fim de outras noticias na barra lateral -->

<!-- propaganda+ -->
<aside id="Pros">
    <br><br><img class="Pro" src="../imagens/Propaganda/20210608_230235-min.gif"><br>

    <!-- <br><img class="Pro" src="img/Propaganda/star.gif"><br> -->
    </aside>

    
 <!-- fim da propaganda+ -->
</div>


<!-- rodapé -->
<footer id="myFooter">
    <div class="container">
    <div class="row">
    <div class="col-sm-3">

    <a href="#"> <img class="eu" src="../imagens/rodape/eu001.png"/></a>
    </div>

    <div class="col-sm-2">
    <h5>Início</h5>
    <ul>
    <li><a href="pagina1.html">Home</a></li>
    <li><a href="http://drive.google.com/file/d/1SqmogepxbeCzHVgLNTsklQs2nnnfkTDU/preview" target="_blank">Downloads</a></li>
    <li><a href="#">HQ</a></li>
    </ul>
    </div>

    <div class="col-sm-2">
    <h5>Sobre-nós</h5>
    <ul>
    <li><a href="#">Portfólio</a></li>
    <li><a href="#">Contato</a></li>
    <li><a href="#">Projetos</a></li>
    
    </ul>
    </div>

    <div class="col-sm-2">
    <h5>Suporte</h5>
    <ul>
    <li><a href="#">Telefones</a></li>
    <li><a href="#">Chat</a></li>
    </ul>
    </div>

    <div class="col-sm-3">
    <div class="social-networks">

    <a href="https://www.linkedin.com/feed/" class="twitter"><img class="icons" src="../imagens/rodape/linkedin.png" alt="linkedin"></a>

    <a href="https://github.com/deyvson-silva" class="facebook"><img class="icons" src="../imagens/rodape/2048px-Octicons-mark-github.svg.png" alt="github"></a>

    <a href="https://instagram.com/dk_dayvson_?utm_medium=copy_link" class="instagram"><img class="icons" src="../imagens/rodape/instagram.png" alt="instagram"></a>

    <a href="https://www.facebook.com/dayvson.karlos.5" class="facebook"><img class="icons" src="../imagens/rodape/facebook.png" alt="facebook"></a>

    </div>

    <a href="https://wa.me/qr/T2QBVOUA4DLJJ1">
    <button type="button" class="btn btn-default">Contato</button>
    </a>
    </div>
    </div>
    </div>

    <div class="footer-copyright">
    <p>© 2021 Copyright - by Deyvson Carlos</p>
    </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- fim do rodape -->

    <script type="text/javascript" src="<?php echo asset('js/TeoriasNerd.js')?>"></script>

</body>
</html>



<!-- css -->

<style>
  @charset "UTF-8";
@font-face {
    font-family: 'fontelogo';
    src: url("../fonts/bubblegum-sans-regular.otf");
}


/* parte principal */
body{
    font-family: arial, sans-serif;
    background-color: white;
    background-image: url(../imagens/pagina/fundo.jpg);
}

div#interface {
width: 1150px;
margin: -20px auto 0px auto;
padding: 10px; 
box-shadow: 0px 0px 10px rgba(0,0,0,.5);
background-color: rgb(179, 197, 245);
}
/* fim da parte principal */

/* cabecalho */
header#cabecalho img#logo {
position: absolute;
left: 980px ;
top: 20px;  
}

header#cabecalho {
height: 150px;
background: url("")no-repeat 10px 50px;
    
}

header#cabecalho h1 {
font-family: 'fontelogo', sans-serif;
font-size: 30pt;
color: black;
text-shadow: 1px 1px 1px white;
padding: 0px;
margin-bottom: 0px;
margin-top: 10px;
}

header#cabecalho h2 {
font-family: 'fontelogo', sans-serif;
color: rgba(0, 0, 0, 0.363); 
font-size: 15pt;
padding: 0px;
margin-top: 0px;
}

header#cabecalho-artigo h1 {
font-family: 'fontelogo', sans-serif;
font-size: 20pt;
color: black;
margin-bottom: 0px;
margin-top: 0px;
text-shadow: 2px 2px 2px white;
}
       
.direita {
text-align: right;
}
       
header#cabecalho-artigo h2 {
font-size: 13pt;
color:black ;
background-color: white;
margin: 0px ;
}
      
header#cabecalho-artigo h3 {
font-size: 12pt;
}

p{
font-family:arial, sans-serif;
text-align: justify;
text-indent: 50px;
}

a {
color: black;
text-decoration: none;
}

a:hover {
text-decoration: underline;
}

#logo{
width: 150px;
}
/* formatação do menu */

nav#menu {
display: block;
}

nav#menu ul {
list-style: none;
text-transform: uppercase;
position: absolute;
top: -8px;
left: 350px;
}

nav#menu li {
display: inline-block;
background-color: rgb(179, 197, 245);
padding: 10px;
margin: 3px;
-webkit-transition: background-color 1s;
-moz-transition: background-color 1s;
-o-transition: background-color 1s;
-ms-transition:background-color 1s;
transition: background-color 1s;
}

nav#menu li:hover {
background-color:rgb(16, 16, 73);
}

nav#menu h1 {
display: none;
}

nav#menu a {
color:rgb(16, 16, 73);
text-decoration: none;
}

nav#menu a:hover {
color: white;
text-decoration: underline;
}
/* fim da formatação do menu */

/* corpo da pagina */
section#corpo {
display: block;
width: 700px;
float: left;
padding-right: 30px;
margin-top: 10px;
}
article#primeira-NT h2 {
font-size: 13pt;
color: black;
background-color: white;
padding: 5px 0px 5px 10px;
margin: 10px 0px 10px 0px ;
}
    /* fim do corpo da pagina */

    /* <!-- primeira noticia --> */
figure.foto img.aranha{
width: 100%;
height: 500px;
}
figure figcaption.Notícias h5{
color: black;
font-family: 'fontelogo', sans-serif;
font-size: 25px;
}
figure figcaption p{
margin: 7px;
text-align: justify;
color: black;
}
figure figcaption h3{
color: gray;
font-size: 20px;
}
figure figcaption h4{
color: rgb(116, 114, 114);
font-size: 15px;
}
video#Venom{
display: block;
position: relative;
left:80px;
top: 1px;
width: 455px;
}

figure.foto figcaption #Notícias {
    opacity: 0px;
    position: absolute;
    top:0px;
    background-color: rgba(0,0,0,.4);
    color: white;
    width: 100%;
    height:100%;
    padding: 10px;
    box-sizing: border-box;
    transition: opacity 1s;
    margin-left: -10px;
}
figure.foto:hover figcaption #Notícias {
opacity: 1;
}
figure.foto {
position: relative;
border: 8px solid white;
box-shadow: 1px 1px 4px black;
position: relative;
background-color: white;
} 
/* fim da primeira noticia

/* segunda noticia */
figure.fotos img.rei{
width: 100%;
height: 500px;
}
figure figcaption.NotíciasLo h5{
color: black;
font-family: 'fontelogo', sans-serif;
font-size: 25px;
}
figure figcaption p{
margin: 7px;
text-align: justify;
color: black;
border-bottom: 1px solid rgb(190, 188, 188);
}
figure figcaption h3{
color: gray;
font-size: 20px;
}
figure figcaption h4{
color: rgb(116, 114, 114);
font-size: 15px;
}
video#loki{
display: block;
position: relative;
left:90px;
top: -2px;
width: 455px;
}

figure.fotos figcaption #NotíciasLo {
opacity: 0px;
position: absolute;
top:0px;
background-color: rgba(0,0,0,.4);
color: white;
width: 100%;
height:100%;
padding: 10px;
box-sizing: border-box;
transition: opacity 1s;
margin-left: -10px;
}
figure.fotos:hover figcaption #NotíciasLo {
opacity: 1;
}
figure.fotos {
position: relative;
border: 8px solid white;
box-shadow: 1px 1px 4px black;
position: relative;
background-color: white;
} 
/* foto com link abaixo da notocia*/
.archive_entry_details_autor{
    display: flex;
    align-items:center;
    font-weight: 700;
    text-transform: uppercase;
    padding: 4px 6px;
    border-radius: 3px;
    margin: 0 -6px;
    transition: .2s ease;
    background-color: white;
    font-size: -15rem;
    color: rgb(16, 16, 73);
}
/* foto do redator */
img#eu{
    width: 7%;
}
/* fim do foto do redator */

/* terceira noticia */
figure.fotoss img.X-Men{
width: 100%;
height: 500px;
}
figure figcaption.NotíciasX h5{
color: black;
font-family: 'fontelogo', sans-serif;
font-size: 25px;
}
figure figcaption p{
margin: 7px;
text-align: justify;
color: black;
}
figure figcaption h3{
color: gray;
font-size: 20px;
}
figure figcaption h4{
color: rgb(116, 114, 114);
font-size: 15px;
}

figure.fotoss figcaption #NotíciasX {
opacity: 0px;
position: absolute;
top:0px;
background-color: rgba(0,0,0,.4);
color: white;
width: 100%;
height:100%;
padding: 10px;
box-sizing: border-box;
transition: opacity 1s;
margin-left: -10px;
}
figure.fotoss:hover figcaption #NotíciasX {
opacity: 1;
}
figure.fotoss {
position: relative;
border: 8px solid white;
box-shadow: 1px 1px 4px black;
position: relative;
background-color: white;
} 
/* fim da terceira noticia */


/* configurando o botão leia mais */
#mais{
display: none;
}

#segunda{
display: none;
}

#terceira{
display: none;
}

button.btnLeiamaiS{
font-family: arial, sans-serif;
font-size: 10px;
text-transform: uppercase;
font-weight: 70;
border-radius: 100px;
border-color: #00BFFF;
padding: 10px;
cursor: pointer;
display: inline-block;
text-decoration: none;
width: 80px;
height: 40px;
position: relative;
margin-left: 520px;
top: -5px;
}
    
.btnLeiamenoS{
background: white;
color: #00BFFF;
}
    
.btnLeiamenoS:hover{
background: rgb(16, 16, 73);
color: white;
 }
    
    .btnLeiamenoS:active{
    position: relative;
    box-shadow:none;
    top: 5px;
    
    }
    /* fim da configuração do botão */

   

/* outras noticias na barra lateral */
aside#lateral {
display: block;
width: 350px;
float: right;
background-color: white;
padding: 10px;
margin-top: 10px;
box-shadow: 2px 2px 2px black .5;
}
aside#lateral h1 {
font-family: 'fontelogo',sans-serif;
font-size: 20pt;
color: black;
margin-top: 0px;
}
aside#lateral h2{
background-color:rgb(179, 197, 245);
font-size: 13pt;
color: black;
padding: 5px ;
}

/* botão jogar */
button#jogar{
    margin-left: 150px;
    margin-top: 10px;
}
/* fim do botão jogar */

/* fim de outras noticias na barra lateral */


/* propaganda+ */
aside#Pros{
    display: block;
    width: 350px;
    float: right;
    padding: 10px;
    margin-top: 10px;
    box-shadow: 2px 2px 2px black .5;
}

img.Pro{
    width: 100%;
    height: 300px;
}

/* fim da propaganda+ */

/* segunda parte */
aside#lateralS {
display: block;
width: 350px;
float: right;
background-color: white;
padding: 10px;
margin-top: 10px;
box-shadow: 2px 2px 2px black .5;
}
aside#lateralS h1 {
font-family: 'fontelogo',sans-serif;
font-size: 20pt;
color: black;
margin-top: 0px;
}
aside#lateralS h2{
background-color:rgb(179, 197, 245);
font-size: 13pt;
color: black;
padding: 5px ;
}

img.sony{
width: 100%;
height: 200px;
}
img.kraven{
width: 100%;
height: 200px;
}

img.aranha{
width: 100%;
height: 200px;
}
    /* fim da segunda parte  */

/* propaganda */

aside#propaganda {
display: block;
width: 350px;
float: right;
background-color: white;
padding: 10px;
margin-top: 30px;
box-shadow: 2px 2px 2px black .5;
}

aside#propaganda h1 {
font-family: 'fontelogo',sans-serif;
font-size: 20pt;
color: black;
margin-top: 0px;
}
aside#propaganda h2{
background-color:rgb(179, 197, 245);
font-size: 13pt;
color: black;
padding: 5px ;
}
img.the{
text-align: center;
padding: 5px;
width: 100%;
height: 100px;           
}        
img.gif{
text-align: center;
padding: 5px;
width: 100%;
height: 200px;           
}
img.jornal{
width: 100%;
height: 200px;
}
/* fim da propaganda */
    
/* rodape */
#myFooter {
border-top: 2px solid #00BFFF;
background-color: rgb(179, 197, 245);
color: white;
padding-top: 30px;
width: 1150px;
margin: -20px auto 0px auto;
padding: 10px; 
}

#myFooter .footer-copyright {
    background-color: black;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
}

#myFooter .row {
    margin-bottom: 60px;
}

#myFooter .navbar-brand {
    margin-top: 45px;
    height: 65px;
}

#myFooter .footer-copyright p {
    text-align: center;
    margin: 10px;
    color: #ccc;
}

#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 20px;
    color: black;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter h2 a{
    font-size: 50px;
    text-align: center;
    color: #fff;
}

#myFooter a {
    color: rgb(51, 51, 51);
    text-decoration: none;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}

#myFooter .social-networks {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 16px;
}

#myFooter .social-networks a {
    font-size: 32px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

#myFooter .social-networks a:hover {
    text-decoration: none;
}

#myFooter .facebook:hover {
    color: #0077e2;
}

#myFooter .instagram:hover {
    color: purple;
}

#myFooter .twitter:hover {
    color: #00aced;
}

#myFooter .btn {
    color: white;
    background-color: #00BFFF;
    border-radius: 20px;
    border: none;
    width: 150px;
    display: block;
    margin: 0 auto;
    margin-top: 10px;
    line-height: 25px;
}

@media screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }
}


/* CSS utilizado para posicionar o rodapé no final da página. */
/* Você pode remover isso. */

html{
    height: 100%;
}

body{
    display: flex;
    display: -webkit-flex;
    flex-direction: column;
    -webkit-flex-direction: column;
    height: 100%;
}

.content{
   flex: 1 0 auto;
   -webkit-flex: 1 0 auto;
   min-height: 200px;
}

#myFooter{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}

img.icons{
    width: 30px;
    height: 30%;
    padding: 2px;
}

img.eu{
    width: 100%;
    height: 90%;
    padding: 2px;
    margin-left: -50px;
}
/* fim do rodape */
</style>