@extends('plantilla')
@section('contenido')
<section class="vh-80 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
            <form action="{{ route('register') }}" method="post">
    @csrf
    <h2 class="fw-bold mb-2 text-uppercase">Registrate</h2>
    <p class="text-white-50 mb-5">Rellena el formulario</p>

    <div class="form-outline form-white mb-4">
        <input type="text" id="username" class="form-control form-control-lg" name="name" />
        <label class="form-label" for="username">Nombre</label>
    </div>

    <div class="form-outline form-white mb-4">
        <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
        <label class="form-label" for="typeEmailX">Email</label>
    </div>

    <div class="form-outline form-white mb-4">
        <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
        <label class="form-label" for="typePasswordX">Contraseña</label>
    </div>

    <div class="form-outline form-white mb-4">
        <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password_confirmation" />
        <label class="form-label" for="typePasswordX">Confirmar Contraseña</label>
    </div>

    <button class="btn btn-outline-light btn-lg px-5" type="submit">Registrarse</button>

    <div class="d-flex justify-content-center text-center mt-4 pt-1">
        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
    </div>
</form>

            </div>

            <div>
              <p class="mb-0"><a href="{{route('login')}}" class="text-white-50 fw-bold">Volver al login </a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
