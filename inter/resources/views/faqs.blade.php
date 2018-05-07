@extends('layouts.layoutf')

@section('content')

<div id="contenedor" class="container-fluid bg-3 text-center">
        <h3>FAQ</h3>
        <h5>Esta página "FAQ" es donde encontrarás de manera inmediata respuestas a las preguntas mas frequentes.</h5>
        <br><br>
        <h3 id="btn" onclick="checkClick('#faq1')" class="select">Qué lugar es esté?</h3>
        <h5 id="faq1">BAXKids es una web donde vendemos unos servicios de corte de pelo y productos los cuales se reservan por la web y se recogen y pagan en la tienda físicamente.</h5>
        <br>
        <h3 id="btn2" onclick="checkClick('#faq2')" class="select">En que pagina estoy?</h3>
        <h5 id="faq2">Hemos creado esta web con la finalidad de ver nuevas ofertas de productos y ver los servicios que ofrecemos.</h5>
        <br>
        <h3 onclick="checkClick('#faq3')" class="select">Cuales son las principales secciones?</h3>
        <h5 id="faq3">Nuestra web esta dividida en la sección de productos y ofertas y en la sección de cortes de pelos, que es el servicio que ofrecemos.</h5>
        <br>
        <h3 onclick="checkClick('#faq4')" class="select">No veo la web bien, que hago?</h3>
        <h5 id="faq4">BAXKids recomienda utilizar el navegador chrome en caso que algunos componentes no se vean de forma correcta.</h5>
        <br>
        <h3 onclick="checkClick('#faq5')" class="select">Puedo ver la web en un dispositivo móvil?</h3>
        <h5 id="faq5">Si, esta web esta diseñada para cualquier plataforma móvil o tableta.</h5>
        <br>
        <h3 onclick="checkClick('#faq6')" class="select">Sugerencia y consultas?</h3>
        <h5 id="faq6">En BAXKids estamos orgullosos de recibir nuevas sugerencias, con la finalidad de ir mejorando con nuestros servicios. <a href="/contactar">contacte.</a></h5>
        <br>
        <h3 onclick="checkClick('#faq7')" class="select">Quejas?</h3>
        <h5 id="faq7">Si crees que ahí algo que no a ido bien te invitamos a que nos contactes y nos expliques tu mala experiencia. <a href="/contactar">contacte.</a></h5>
        <br>
    </div>
    <!-- =================[PEU DE LA PÀGINA]=================== -->
    <footer class="container-fluid text-center">
      <p><strong>Grup 1: </strong>Jordi Simó, Enric Beltran, Diego Martinez </p>
      <p><strong>Professor:</strong> Alex Milian</p>
      <p>No siempre puedes controlar lo que sucede en el exterior. Pero siempre puedes controlar lo que sucede en el interior.</p>
    </footer>


@endsection
