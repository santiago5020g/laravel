@extends('layouts.login')


@section('content')
   
    <div class="container">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form  action="{{ url('autenticar') }}" method="post" class="form-horizontal">
              <h1>Ingreso al sistema</h1>
              <div class="form-group">
                <input name="usuario" value="{{ old('usuario') }}" type="text" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div class="form-group">
                <input name="clave" type="password" class="form-control" placeholder="Clave" required="" />
              </div>
               <div class="form-group">
                   <input style="margin-left:0" id="btnEnviar" class="btn btn-default" type="submit" name="" value="Ingresar">
               </div>
               <div class="form-group">
                   <div class="checkbox">
                        <label style="margin-right: 100%">
                          <input name="recuerdame" type="checkbox" value=""> Recuerdame
                        </label>
                    </div>
                </div>


              <div class="clearfix"></div>

              <div class="separator">
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            <div id="mensaje">
                @if(session('flash_message'))
                  <div id="mensaje" class="alert alert-danger">
                      {{session('flash_message')}}
                  </div>
                @endif
           
          </section>
        </div>
      </div>
    </div>


@endsection


