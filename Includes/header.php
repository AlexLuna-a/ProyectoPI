<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administradores</title>

        <link rel="stylesheet" type="text/css" href="./Assets/css/basics.css">
        <link rel="stylesheet" type="text/css" href="./Assets/css/bootstrap.min.css">
        <script type="text/javascript" src="./Assets/JS/jquery-3.6.0.min.js" ></script>
        <script type="text/javascript" src="./Assets/JS/bootstrap.bundle.min.js" ></script>
        <script type="text/javascript" src="./Assets/JS/jquery-3.6.0.min.js" ></script>
        <script type="text/javascript" src="./Assets/JS/basics.js" ></script>
        <?php echo mainJS ?>


    </head>
    <body>
        <div class="container" align="center">
            <div id="cabecera" class="mt-3">
                <div id="titlesAppBack">
                    <div class="title">
                        <h2 class="mainFont">Sistema de administracion</h2>
                    </div>
                </div>
                <header>
                    <div class="container">
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                            <div id="logoAppBack" class="me-3">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve">
                                <path style="fill:#505968;" d="M208,408l-16,64h96l-16-64v-8h-64V408z"/>
                                <path style="fill:#ADF0FF;" d="M40,72h400c17.673,0,32,14.327,32,32v272c0,17.673-14.327,32-32,32H40c-17.673,0-32-14.327-32-32V104
                                      C8,86.327,22.327,72,40,72z"/>
                                <path style="fill:#A6ADB9;" d="M8,376c0,17.673,14.327,32,32,32h400c17.673,0,32-14.327,32-32v-16H8V376z"/>
                                <path style="fill:#EE2849;" d="M408,168v-48h-26.64c-2.836-12.909-7.947-25.211-15.096-36.328L385.136,64.8L351.2,30.864
                                      l-18.872,18.872C321.211,42.587,308.909,37.476,296,34.64V8h-48v26.64c-12.909,2.836-25.211,7.947-36.328,15.096L192.8,30.864
                                      L158.864,64.8l18.872,18.872c-7.149,11.117-12.26,23.419-15.096,36.328H136v48h26.64c2.836,12.909,7.947,25.211,15.096,36.328
                                      L158.864,223.2l33.936,33.936l18.864-18.872c11.12,7.149,23.424,12.261,36.336,15.096V280h48v-26.64
                                      c12.909-2.836,25.211-7.947,36.328-15.096l18.872,18.872l33.936-33.936l-18.872-18.864c7.149-11.12,12.261-23.424,15.096-36.336
                                      L408,168z M272,200c-30.928,0-56-25.072-56-56s25.072-56,56-56s56,25.072,56,56S302.928,200,272,200z"/>
                                <path style="fill:#FAA41B;" d="M208,248c-0.023-2.959-0.25-5.912-0.68-8.84l17.96-10.4l-24-41.6l-17.952,10.4
                                      c-4.673-3.652-9.832-6.635-15.328-8.864V168h-48v20.696c-5.498,2.241-10.657,5.238-15.328,8.904L86.72,187.2l-24,41.6l17.96,10.4
                                      c-0.907,5.858-0.907,11.822,0,17.68L62.72,267.2l24,41.6l17.952-10.4c4.671,3.666,9.83,6.663,15.328,8.904V328h48v-20.696
                                      c5.498-2.241,10.657-5.238,15.328-8.904l17.952,10.4l24-41.6l-17.96-10.4C207.748,253.886,207.975,250.945,208,248L208,248z
                                      M144,280c-17.673,0-32-14.327-32-32s14.327-32,32-32s32,14.327,32,32S161.673,280,144,280z"/>
                                <path d="M440,64h-47.024c-0.147-1.82-0.919-3.532-2.184-4.848L356.848,25.2c-3.174-3.001-8.138-3.001-11.312,0l-14.4,14.448
                                      c-8.546-4.859-17.661-8.643-27.136-11.264V8c0-4.418-3.582-8-8-8h-48c-4.418,0-8,3.582-8,8v20.384
                                      c-9.461,2.624-18.562,6.408-27.096,11.264l-14.4-14.448c-3.174-3.001-8.138-3.001-11.312,0l-33.984,33.952
                                      c-1.265,1.316-2.037,3.028-2.184,4.848H40C17.92,64.026,0.026,81.92,0,104v272c0.026,22.08,17.92,39.974,40,40h157.752
                                      l-13.512,54.064c-1.069,4.287,1.539,8.629,5.826,9.698C190.699,479.92,191.348,480,192,480h96c4.418-0.001,7.999-3.584,7.998-8.002
                                      c0-0.652-0.08-1.301-0.238-1.934L282.248,416H440c22.08-0.026,39.974-17.92,40-40V104C479.974,81.92,462.08,64.026,440,64L440,64z
                                      M183.392,78.016L170.176,64.8L192.8,42.168l13.208,13.224c2.661,2.668,6.823,3.118,9.992,1.08
                                      c10.315-6.638,21.731-11.385,33.712-14.016c3.672-0.804,6.289-4.057,6.288-7.816V16h32v18.64c-0.001,3.759,2.616,7.012,6.288,7.816
                                      c11.981,2.631,23.397,7.378,33.712,14.016c3.168,2.034,7.325,1.584,9.984-1.08L351.2,42.168l22.632,22.64l-13.216,13.208
                                      c-2.667,2.657-3.12,6.815-1.088,9.984c6.644,10.315,11.391,21.734,14.016,33.72c0.808,3.669,4.059,6.281,7.816,6.28H400v32h-18.64
                                      c-3.759-0.001-7.012,2.616-7.816,6.288c-2.626,11.983-7.373,23.4-14.016,33.712c-2.029,3.166-1.58,7.318,1.08,9.976l13.216,13.224
                                      L351.2,245.832l-13.208-13.224c-2.661-2.668-6.823-3.118-9.992-1.08c-10.315,6.638-21.731,11.385-33.712,14.016
                                      c-3.672,0.804-6.289,4.057-6.288,7.816V272h-32v-18.64c0.001-3.759-2.616-7.012-6.288-7.816c-8.051-1.791-15.857-4.547-23.248-8.208
                                      l2.816-1.6c3.826-2.209,5.137-7.102,2.928-10.928l-24-41.6c-2.209-3.826-7.102-5.137-10.928-2.928l-13.472,7.776
                                      c-2.505-1.669-5.113-3.179-7.808-4.52V168c0-4.418-3.582-8-8-8h-24v-32h18.64c3.759,0.001,7.012-2.616,7.816-6.288
                                      c2.626-11.983,7.373-23.4,14.016-33.712C186.506,84.832,186.056,80.675,183.392,78.016L183.392,78.016z M123.008,299.888
                                      c-4.809-1.959-9.323-4.573-13.416-7.768c-2.569-2.005-6.097-2.252-8.92-0.624l-11.024,6.352l-16-27.696l11.032-6.4
                                      c2.811-1.623,4.363-4.783,3.928-8c-0.811-5.142-0.811-10.378,0-15.52c0.435-3.217-1.117-6.377-3.928-8l-11.032-6.4l16-27.696
                                      l11.024,6.352c2.823,1.628,6.351,1.381,8.92-0.624c4.093-3.195,8.607-5.809,13.416-7.768c3.013-1.223,4.987-4.148,4.992-7.4V176h32
                                      v12.696c-0.001,3.258,1.973,6.191,4.992,7.416c4.809,1.959,9.323,4.573,13.416,7.768c2.569,2.005,6.097,2.252,8.92,0.624
                                      l11.024-6.352l16,27.696l-11.032,6.4c-2.811,1.623-4.363,4.783-3.928,8c0.811,5.142,0.811,10.378,0,15.52
                                      c-0.435,3.217,1.117,6.377,3.928,8l11.032,6.4l-16,27.696l-11.024-6.352c-2.823-1.628-6.351-1.381-8.92,0.624
                                      c-4.093,3.195-8.607,5.809-13.416,7.768c-3.019,1.225-4.993,4.158-4.992,7.416V320h-32v-12.696
                                      C128.001,304.046,126.027,301.113,123.008,299.888L123.008,299.888z M40,80h122.752l4.896,4.896
                                      c-4.859,8.535-8.642,17.639-11.264,27.104H136c-4.418,0-8,3.582-8,8v40h-8c-4.418,0-8,3.582-8,8v15.536
                                      c-2.695,1.344-5.303,2.856-7.808,4.528l-13.472-7.776c-3.826-2.209-8.719-0.898-10.928,2.928l-24,41.6
                                      c-2.209,3.826-0.898,8.719,2.928,10.928l13.448,7.768c-0.112,1.6-0.168,3.056-0.168,4.52s0.056,2.952,0.168,4.52L58.72,260.32
                                      c-3.797,2.208-5.104,7.065-2.928,10.88l24,41.6c2.209,3.826,7.102,5.137,10.928,2.928l13.472-7.776
                                      c2.505,1.672,5.113,3.184,7.808,4.528V328c0,4.418,3.582,8,8,8h48c4.418,0,8-3.582,8-8v-15.536c2.695-1.344,5.303-2.856,7.808-4.528
                                      l13.472,7.776c3.826,2.209,8.719,0.898,10.928-2.928l24-41.6c2.209-3.826,0.898-8.719-2.928-10.928l-13.448-7.768
                                      c0.064-0.88,0.064-1.696,0.096-2.544c7.646,4.096,15.718,7.339,24.072,9.672V280c0,4.418,3.582,8,8,8h48c4.418,0,8-3.582,8-8
                                      v-20.384c9.461-2.624,18.562-6.408,27.096-11.264l14.4,14.448c3.174,3.001,8.138,3.001,11.312,0l33.944-33.952
                                      c3.123-3.124,3.123-8.188,0-11.312l-14.4-14.4c4.861-8.545,8.645-17.66,11.264-27.136H408c4.418,0,8-3.582,8-8v-48
                                      c0-4.418-3.582-8-8-8h-20.384c-2.622-9.465-6.405-18.569-11.264-27.104L381.248,80H440c13.255,0,24,10.745,24,24v248H16V104
                                      C16,90.745,26.745,80,40,80L40,80z M277.752,464h-75.504l12-48h51.504L277.752,464z M440,400H40c-13.255,0-24-10.745-24-24v-8h448v8
                                      C464,389.255,453.255,400,440,400z"/>
                                <path d="M272,208c35.346,0,64-28.654,64-64s-28.654-64-64-64s-64,28.654-64,64C208.04,179.33,236.67,207.96,272,208z M272,96
                                      c26.51,0,48,21.49,48,48s-21.49,48-48,48s-48-21.49-48-48C224.026,117.501,245.501,96.026,272,96z"/>
                                <path d="M184,248c0-22.091-17.909-40-40-40s-40,17.909-40,40s17.909,40,40,40C166.08,287.974,183.974,270.08,184,248z M120,248
                                      c0-13.255,10.745-24,24-24s24,10.745,24,24c0,13.255-10.745,24-24,24S120,261.255,120,248z"/>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                </svg></div>

                            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                <li><a href="bienvenido.php" class="nav-link px-2 link-light">Bienvenido</a></li>
                                <li><a href="lista_administradores.php" class="nav-link px-2 link-light">Administradores</a></li>
                                <li><a href="#" class="nav-link px-2 link-light">seccion 2</a></li>
                                <li><a href="#" class="nav-link px-2 link-light">seccion 3</a></li>
                                <li><a href="#" class="nav-link px-2 link-light">seccion 4</a></li>
                            </ul>

                            <div class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                                <span id="userNameTag" ><?php echo $_SESSION['backUser']['nombre']; ?></span>
                            </div>

                            <div class="dropdown text-end">
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo './files/' . $_SESSION['backUser']['archivo']; ?>" alt="mdo" width="50" height="50" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                    <li><a class="dropdown-item" href="#">Detalle</a></li>
                                    <li><a class="dropdown-item" href="#">Actualizar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
            </div>