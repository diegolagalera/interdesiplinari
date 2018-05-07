@extends('layouts.layoutf')

@section('content')

<div id="contenedor" class="container-fluid bg-3 text-center">
        <h3>FAQ</h3>
        <h5>Aquesta pàgina "FAQ" és on trobaràs de manera inmediata respostes a preguntes freqünts.</h5>
        <br><br>
        <h3 id="btn" onclick="checkClick('#faq1')" class="select">Quin lloc és aquest?</h3>
        <h5 id="faq1">FiruIoga és una web per a poder veure les classes que tenim, algunes innovacions i poder contactar amb nosaltres amb facilitat.</h5>
        <br>
        <h3 id="btn2" onclick="checkClick('#faq2')" class="select">En quina pàgina estic?</h3>
        <h5 id="faq2">Hem creat aquetsa web per tal de facilitar la navegació i així utilitzant el menú superior és podrà visitar el nostre catàleg  de classes de manera ràpida.</h5>
        <br>
        <h3 onclick="checkClick('#faq3')" class="select">Quines són les principal seccions?</h3>
        <h5 id="faq3">A la nostra web tenim diferents seccions, tenim un index on pots accedir per a veure de que trecta aquesta web, un apartat de apuntat per a poder apuntarte a les classes i un altre de FAQ per a poder resoldre alguns dubtes sense posarte amb contacte amb nosaltres.</h5>
        <br>
        <h3 onclick="checkClick('#faq4')" class="select">No veig correctament la web, què puc fer?</h3>
        <h5 id="faq4">Firuioga recomana navegar amb Chrome per a una millor experiència i un correcte funcionament.</h5>
        <br>
        <h3 onclick="checkClick('#faq5')" class="select">Puc veure la web al mòbil?</h3>
        <h5 id="faq5">Sí, aquesta web està dissenyada de manera que és pugui tenir la millor experiència tant en el navegador d'escriptori com des del smartphone.</h5>
        <br>
        <h3 onclick="checkClick('#faq6')" class="select">Suggeriments? consultes?</h3>
        <h5 id="faq6">A Firuioga estem encantats de rebre suggeriments que ens permetin millorar, a més si tens qualsevol dubte que no estigui resolt en aquesta página et convidem a que ens ho comuniquis, i per tal de fer-ho possible ús convidem a utilitzar el nostre formulari de <a href="contacte.html">contacte.</a></h5>
        <br>
        <h3 onclick="checkClick('#faq7')" class="select">Queixes?</h3>
        <h5 id="faq7">Si creus que hi ha alguna cosa que no funciona correctament o has tingut algún problema, et convidem  aque ens ho cominiquis mitjançant el formulari  de <a href="contacte.html">contacte.</a></h5>
        <br>
    </div>
    <!-- =================[PEU DE LA PÀGINA]=================== -->
    <footer class="container-fluid text-center">
      <p><strong>Grup 1: </strong>Jordi Simó, Enric Beltran, Diego Martinez </p>
      <p><strong>Professor:</strong> Alex Milian</p>
      <p>No siempre puedes controlar lo que sucede en el exterior. Pero siempre puedes controlar lo que sucede en el interior.</p>
    </footer>


@endsection
