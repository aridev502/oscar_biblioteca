@extends('layouts.admin')


@section('styles')
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
    });
    calendar.render();
  });
</script>



@endsection

@section('content')



<div class="container">
  <div class="row">
    <div class="col text-center">
      <img src="{{asset('logos/logo.png')}}" class="img-fluid rounded-circle" width="40%" alt="">
    </div>
  </div>



  <div class="grey-bg container-fluid">
    <section id="minimal-statistics">
      <div class="row">
        <div class="col-12 mt-3 mb-1">
          <h4 class="text-uppercase">RESUMEN DE SISTEMA</h4>
          <!-- <p>Statistics on minimal cards.</p> -->
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-pencil primary font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3>{{$user}}</h3>
                    <span> MAESTROS REGISTRADOS</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-speech warning font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3>{{$estu}}</h3>
                    <span>ESTUDIANTES REGISTRADOS</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-graph success font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3>{{$profe}}</h3>
                    <span>PROFESORES REGISTRADOS</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="align-self-center">
                    <i class="icon-pointer danger font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-right">
                    <h3>{{$materias}}</h3>
                    <span>MATERIAS REGISTRADAS</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-12">
        <div id='calendar'></div>
      </div>

  </div>


</div>


@endsection