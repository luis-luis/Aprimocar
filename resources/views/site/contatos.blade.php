@extends ('layouts.main')

@section('content')

<link rel="stylesheet" href="css/form-style.css">

<section id="hero" class="hero section dark-background">
  <img src="PZS.gif" alt="" data-aos="fade-in" class="img-fluid">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Fale Conosco</h1>
        <p>Ficou interessado em nosso trabalho? Nos mande um e-mail ou entre em contato pelo Whatsapp</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <form>
          <div class="form-group">
            <label for="name">Seu Nome</label>
            <input type="text" class="form-control" id="name" placeholder="Qual seu nome?">
          </div>
          <br>
          <div class="mb-3">
            <label for="phone">Whatsapp para contato</label>
            <input type="tel" class="form-control" id="phone" name="phone" maxlength="15" placeholder="(99)99999-9999">
          </div>
          <div class="form-group">
            <label for="message">Mensagem</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Digite sua mensagem"></textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-success">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection