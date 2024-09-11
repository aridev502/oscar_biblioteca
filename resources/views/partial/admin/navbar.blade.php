<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('logos/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MENU</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
         </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
         <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">CERRAR SECION</button>
         </form>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
               <a href="{{route('home')}}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     CASA
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
            </li>

            <li class="nav-item">
               <a href="{{route('estu.inscribir')}}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     INSCRIBIR
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
            </li>



            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     PROFESORES
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{route('profe.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>INICIO</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('profe.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>REGISTRO</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('profe.grado_profesor_view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ASIGNAR GRADO</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('profe.reporte')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>REPORTE</p>
                     </a>
                  </li>
               </ul>
            </li>


            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     ESTUDIANTES
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{route('estu.index')}}" class=" nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>INICIO</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('estu.inscribir')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>INSCRIBIR</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('bole.boletines')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>BOLETINES</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('estu.reportes')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>REPORTES</p>
                     </a>
                  </li>
               </ul>
            </li>



            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     GRADOS
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{route('grado.index')}}" class=" nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>INICIO</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('grado.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>REGISTRO</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('grado.reporte')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>REPORTE</p>
                     </a>
                  </li>
                  @foreach (getGradosAll() as $g)
                  <li class="nav-item">
                     <a href="{{route('grado.show', $g->id)}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{$g->nombre}} / Seccion: {{$g->seccion}}</p>
                     </a>
                  </li>
                  @endforeach
               </ul>
            </li>




            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     CURSOS
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{route('materiaG.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>INICIO</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('materiaG.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>REGISTRO </p>
                     </a>
                  </li>
               </ul>
            </li>

            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     USUARIOS
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>USUARIOS</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('roles.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ROLES </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('permissions.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>PERMISOS </p>
                     </a>
                  </li>
               </ul>
            </li>




         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>