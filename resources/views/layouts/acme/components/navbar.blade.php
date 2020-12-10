<nav class="navbar has-background-info p-5 " role="navigation" aria-label="main navigation">
 

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link ">
          Ciudades
          
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item has-background-danger"  href={{route('ciudad.index')}}>
            Mostrar Ciudades
          </a>
          <a class="navbar-item has-background-info" href={{route('ciudad.create')}}>
            Crear Ciudad
          </a>
        </div>
      </div>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link ">
          Propietarios
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item has-background-danger" href={{route('propietario.index')}}>
            Mostrar Propietarios
          </a>
          <a class="navbar-item has-background-info" href={{route('propietario.create')}}>
            Crear Propietario
          </a>
        </div>
      </div>
    </div>


    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable" >
        <a class="navbar-link ">
          Conductores
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item " href={{route('conductor.index')}}>
            Mostrar Conductores
          </a>
          <a class="navbar-item has-background-info" href={{route('conductor.create')}}>
            Crear Conductor
          </a>
        </div>
      </div>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link ">
          Colores
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item has-background-danger" href={{route('color.index')}}>
            Mostrar Colores
          </a>
          <a class="navbar-item has-background-info" href={{route('color.create')}}>
            Crear Color
          </a>
        </div>
      </div>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Marcas
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item has-background-danger" href={{route('marca.index')}}>
            Mostrar Marcas
          </a>
          <a class="navbar-item has-background-info" href={{route('marca.create')}}>
            Crear Marca
          </a>
        </div>
      </div>
    </div>


    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" >
          Tipo de Vehículos
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item has-background-danger" href={{route('tipo_vehiculo.index')}}>
            Mostrar Tipo de Vehículos
          </a>
          <a class="navbar-item has-background-info" href={{route('tipo_vehiculo.create')}}>
            Crear Tipo de Vehículos
          </a>
        </div>
      </div>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" >
         Vehículos
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item has-background-danger" href={{route('vehiculo.index')}}>
            Mostrar Vehículos
          </a>
          <a class="navbar-item has-background-info" href={{route('vehiculo.create')}}>
            Crear Vehículo
          </a>
        </div>
      </div>
    </div>










    
      </div>
    </div>
  </div>
</nav>

