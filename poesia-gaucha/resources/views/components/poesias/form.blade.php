    <form action="{{ $action }}" method="post">
        @csrf

        @if($update)
            @method('PUT')
        @endif

       <div class="container-fluid">
            <div class="row" style="margin:4%;">
                <div class="alert">
                    <h3 class="text-center">Atualizar Poema</h3>
                    <div class="row">

                        {{-- Titulo da Poesia--}}
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="titulo">Título</label>
                            <input type="text" autofocus
                            id="titulo"
                            name="titulo"
                            class="form-control"
                            @isset ($titulo) value="{{ $titulo }}" @endisset >
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="autor">Autor</label>
                            <input type="text" autofocus
                            id="autor"
                            name="autor"
                            class="form-control"
                            @isset ($autor) value="{{ $autor }}" @endisset >
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
                            <label for="link_pdf">PDF</label>
                            <input type="text"
                            class="form-control"
                            name="pdf"
                            id="pdf"
                            @isset ($pdf) value="{{ $pdf }}" @endisset >
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
                            <label for="link_audio">Link Audio</label>
                            <input type="text"
                            class="form-control"
                            name="audio"
                            id="audio"
                            @isset ($audio) value="{{ $audio }}" @endisset >
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
                            <label for="link_video">link video</label>
                            <input type="text"
                            class="form-control"
                            name="video"
                            id="video"
                            @isset ($video) value="{{ $video }}" @endisset >
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
                            <label for="foto">Foto</label>
                            <input type="text"
                            class="form-control"
                            name="foto"
                            id="foto"
                            @isset ($foto) value="{{ $foto }}" @endisset >
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 form-group">
                            <label for="edição">Edição</label>
                            <input type="text"
                            class="form-control"
                            name="edition"
                            id="edition"
                            @isset ($edition) value="{{ $edition }}" @endisset >

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <label for="texto">Texto</label>
                                <textarea type="text"
                                class="form-control"
                                name="texto"
                                rows="12"
                                id="texto"
                                @isset ($texto) value="{{ $texto }}" @endisset >{{ $texto }}
                                </textarea>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-primary btn-sm"> Alterar </button>
                            <a class="class btn btn-danger btn-sm" href="{{url()->previous()}}" > Voltar </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </form>
