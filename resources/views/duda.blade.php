@extends('layout.masterpage')
@section('titulo')
Dudas
@endsection
@section('contenido')
<h2>Duda</h2>
    <p>Aquí podrás crear una duda</p>
                </div>
                <form role="form" id="formduda" action="{{route('duda.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                            <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                            <div class="input-group mb-3">

                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Escribe aquí el asunto" aria-label="Escribe aquí el asunto" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Asunto</span>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Contenido</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea" placeholder="Escribe aquí el contenido"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Adjuntar archivo</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>

                    </div>
                </form>
            </div>
@endsection
