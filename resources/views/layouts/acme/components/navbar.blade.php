<nav class="navbar has-background-primary p-5   " role="navigation" aria-label="main navigation">
 

  <div id="navbarBasicExample" class="navbar-menu p-5">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        
      <a class="navbar-link mx-4 ">
      <i class="fas fa-city"></i>
          Ciudades
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item "  href={{route('ciudad.index')}}>
            Mostrar Ciudades
          </a>
          <a class="navbar-item " href={{route('ciudad.create')}}>
            Crear Ciudad
          </a>
        </div>
      </div>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link mx-4 ">
        <i class="fas fa-user-secret"></i>
          Propietarios
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item " href={{route('propietario.index')}}>
            Mostrar Propietarios
          </a>
          <a class="navbar-item " href={{route('propietario.create')}}>
            Crear Propietario
          </a>
        </div>
      </div>
    </div>


    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable" >
        <a class="navbar-link mx-4 ">
        <i class="fas fa-user-alt"></i>
          Conductores
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item " href={{route('conductor.index')}}>
            Mostrar Conductores
          </a>
          <a class="navbar-item " href={{route('conductor.create')}}>
            Crear Conductor
          </a>
        </div>
      </div>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link mx-4">
        <i class="fas fa-palette"></i>
          Colores
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item " href={{route('color.index')}}>
          
            Mostrar Colores
          </a>
          <a class="navbar-item " href={{route('color.create')}}>
            Crear Color
          </a>
        </div>
      </div>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link mx-4">
        <i class="fas fa-car-side"></i>
          Marcas
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item " href={{route('marca.index')}}>
            Mostrar Marcas
          </a>
          <a class="navbar-item " href={{route('marca.create')}}>
            Crear Marca
          </a>
        </div>
      </div>
    </div>


    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link mx-4" >
        <i class="fas fa-caravan"></i>
          Tipo de Vehículos 
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item " href={{route('tipo_vehiculo.index')}}>
            Mostrar Tipo de Vehículos
          </a>
          <a class="navbar-item " href={{route('tipo_vehiculo.create')}}>
            Crear Tipo de Vehículos
          </a>
        </div>
      </div>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link mx-4" >
        <i class="fas fa-car"></i>
         Vehículos
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item " href={{route('vehiculo.index')}}>
            Mostrar Vehículos
          </a>
          <a class="navbar-item " href={{route('vehiculo.create')}}>
            Crear Vehículo
          </a>
        </div>
      </div>
    </div>










    
      </div>
    </div>
  </div>
</nav>

