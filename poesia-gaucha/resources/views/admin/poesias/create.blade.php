<x-layout title="Nova Poesia">

  <form action="{{ route('admin.poesias.store') }}" method="post">
      @csrf
      {{-- Titulo da Poesia--}}
      <div class="container-fluid">
          <div class="<div class="d-flex justify-content-around">
              <div class="col-5">
                  <label for="titulo" class="form-label">Poesia: </label>
                  <input type="text" autofocus
                      id="titulo"
                      name="titulo"
                      class="form-control"
                      value="{{ old('titulo') }}">
              </div>
              <div class="col-5">
                  <select class="form-select" aria-label="Default select example">
                      <option value="" disabled> Open this select menu </option>
                      @foreach ( $editions as $edition )
                          <option value="{{$edition->id}}"> {{$edition->numero_edicao}} </option>
                      @endforeach
                  </select>
              </div>
          </div>
          <button type="submit" class="btn btn-primary"> Adcionar </button>
      </div>
  </form>

  <div class="container-fluid">
    <div class="row" style="margin:4%;">
      <div class="alert">
        <h3 class="text-center">Inserir Poema</h3>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
              <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
               <label for="autor">Autor</label>
                <input type="text" class="form-control" name="autor" id="autor" value="">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
              <label for="link_pdf">Nome Pdf</label>
              <input type="text" class="form-control" name="link_pdf" id="link_pdf" value="">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
              <label for="link_audio">Link Audio</label>
              <input type="text" class="form-control" name="link_audio" id="link_audio" value="">
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
              <label for="link_video">link video</label>
              <input type="text" class="form-control" name="link_video" id="link_video" value="">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
              <label for="foto">Foto</label>
              <input type="text" class="form-control" name="foto" id="foto" value="">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
              <label for="edicao">Edição</label>
              <input type="text" class="form-control" name="edicao" id="edicao" value="">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
              <label for="texto">Texto</label>
              <textarea type="text" class="form-control" name="texto" rows="12" id="texto"></textarea>
            </div>
            <div class="col-xs-3 form-group">
                <button type="submit" class="form-control btn- btn-success" name="enviar" id="enviar">Enviar</button>
            </div>
          </div>
        </div>
      </form>

</x-layout>
