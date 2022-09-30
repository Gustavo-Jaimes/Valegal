<!DOCTYPE html>
<?=$headGNRL?>

<link rel="icon" href="./img/design/favicon.png">
<body>
  
<?=$header?>

<div class="uk-text-center somos" uk-grid>
    <div class="uk-width-1-1@m" style="height: 45em;">
        <div class="imageDiv">
            <img class="bannersomos" src="./img/design/banner3.jpg" alt="">
        </div>
        <div class="imageDiv bottomDivCarousel">
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-auto@m"></div>
                <div class="uk-width-expand@m">
                    <div class="equipo">
                        <h2 class="uk-flex uk-flex-left">Nuestro equipo</h2>
                        <hr style="">
                    </div>

                    <div class="uk-position-relative uk-visible-toggle uk-light container-carousel">

                        <div uk-slider="center: false; autoplay: true; autoplay-interval: 2000;">

                            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-3@m uk-ligh uk-flex uk-flex-middle uk-flex-center">
                                <li>
                                    <div class="uk-panel img uk-flex uk-flex-middle uk-flex-center carousel">
                                        <a href="#francisco" uk-toggle> <img src="./img/design/foto1.jpg" width="400" height="600" alt=""></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel img uk-flex uk-flex-middle uk-flex-center carousel">
                                        <a href="#luisZ" uk-toggle><img src="./img/design/foto2.jpg" width="400" height="600" alt=""></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel img uk-flex uk-flex-middle uk-flex-center carousel">
                                        <img src="./img/design/foto3.jpg" width="400" height="600" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel img uk-flex uk-flex-middle uk-flex-center carousel">
                                        <a href="#luis" uk-toggle><img src="./img/design/foto4.jpg" width="400" height="600" alt=""></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel img uk-flex uk-flex-middle uk-flex-center carousel">
                                        <a href="#brenda" uk-toggle><img src="./img/design/foto5.jpg" width="400" height="600" alt=""></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel img uk-flex uk-flex-middle uk-flex-center carousel">
                                        <a href="#wendy" uk-toggle><img src="./img/design/foto6.jpg" width="400" height="600" alt=""></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel img uk-flex uk-flex-middle uk-flex-center carousel">
                                        <img src="./img/design/foto7.jpg" width="400" height="600" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel img uk-flex uk-flex-middle uk-flex-center carousel">
                                        <img src="./img/design/foto8.jpg" width="400" height="600" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-auto@m"></div>
            </div>
        </div>
    </div>
</div> 

<div class="uk-text-center uk-margin-remove acerca" uk-grid>
    <div class="uk-width-1-5@m"></div>
    <div class="uk-width-expand@m container-valegal">
        <div class="acercaDe">
            <h1 class="uk-margin-remove">Acerca de</h1>
            <hr>
        </div>
        <div class="uk-card uk-card-body logo">
            <img src="./img/design/logo.png" alt="">

            <p class="uk-text-justify texto">VALEGAL, S.C., somos una firma de abogados especializados en materia laboral con una trayectoria de más de 20
                años de experiencia, en la que hemos colaborado con diversos sectores empresariales, proporcionando asesoría para
                la implementación de estrategias que permitan identificar, prevenir y resolver contingencias legales relacionadas con
                el manejo de su talento humano.</p>

            <div class="mision" >
                <h1 class="uk-flex uk-flex-center">Misión</h1>
                <hr>
            </div>
            
            <p class="uk-text-justify texto">Ser un aliado de nuestros clientes, generando vínculos a largo plazo, proporcionándoles soluciones eficientes dentro del
                marco legal, basado en la experiencia profesional de los especialistas que integramos esta firma.</p>
            
            <div class="mision" >
                <h1 class="uk-flex uk-flex-center">Visión</h1>
                <hr>
            </div>
            <p class="uk-text-justify texto">Mantener la confianza en nuestros clientes, basada en el resultado de nuestros servicios, fomentando una cultura
                previsora y conciliadora en el manejo de sus relaciones laborales.</p>

            <div class="mision" >
                <h1 class="uk-flex uk-flex-center">Valores</h1>
                <hr>
            </div>
            <div class="uk-text-center valores"uk-grid>
                <div class="uk-width-1-5@m uno"></div>
                <div class="uk-width-1-3@m tres">
                    <p class="uk-margin-remove uk-text-justify">Servicio</p>
                    <p class="uk-margin-remove uk-text-justify">Honestidad</p>
                    <p class="uk-margin-remove uk-text-justify">Imparcialidad</p>
                    <p class="uk-margin-remove uk-text-justify">Calidad</p>
                    <p class="uk-margin-remove uk-text-justify">Trabajo en equipo</p>
                    <p class="uk-margin-remove uk-text-justify">Comunicación</p>
                </div>
                
                <div class="uk-width-1-3@m cinco">
                    <p class="uk-margin-remove uk-text-justify">Ética</p>
                    <p class="uk-margin-remove uk-text-justify">Compromiso</p>
                    <p class="uk-margin-remove uk-text-justify">Confidencialidad</p>
                    <p class="uk-margin-remove uk-text-justify">Responsabilidad</p>
                    <p class="uk-margin-remove uk-text-justify">Integridad</p>
                    <p class="uk-margin-remove uk-text-justify">Profesionalismo</p>
                </div>
                <div class="uk-width-auto@m"></div>
            </div>
        </div>
    </div>
    <div class="uk-width-1-5@m"></div>
</div>

<!-- MODALES -->

<div id="francisco" class="uk-modal-full cv" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle container" uk-grid>
            <div class="uk-background-cover img" style="background-image: url('./img/design/foto1.jpg');"></div>
            <div class="uk-padding-large texto uk-background-cover" style="background-image: url(./img/design/fondo.png);">
                <h1 class="titulo">Francisco Javier Valencia Camacho</h1>
                <p class="profesion">Licenciado en Derecho</p>
                <p class="item"><b>Contacto: </b>j.valencia@valegal.mx</p>
                <p class="contexto">Abogado especialista en asesoría legal laboral, litigio y prevención laboral. Experto en diseño de ingenierías laborales, procesos de contratación, sustitución y terminación de relaciones laborales individuales y colectivas.</p>
                <h2 class="educacion">EDUCACIÓN</h2>
                <p class="item"><b>Licenciatura en Derecho </b>Universidad Panamericana (1995-1999)</p>
                <p class="item"><b>Especialidad en Derecho Laboral </b>Universidad Panamericana</p>
                <p class="item"><b>Maestría en Derecho Público </b>Universidad Panamericana</p>
                <p class="item"><b>Miembro activo de: </b></p>
                <p class="item">•	Barra Mexicana de Abogados</p>
                <p class="item">•	COPARMEX</p>
                <p class="item">•	Anade Jalisco</p>

            </div>
        </div>
    </div>
</div>

<div id="luis" class="uk-modal-full cv" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle container" uk-grid>
            <div class="uk-background-cover img" style="background-image: url('./img/design/foto4.jpg');"></div>
            <div class="uk-padding-large texto uk-background-cover" style="background-image: url(./img/design/fondo.png);">
                <h1 class="titulo">Luis Eduardo Espinosa García</h1>
                <p class="profesion">Licenciado en Derecho</p>
                <p class="profesion">Abogado Laboral</p>
                <p class="item"><b>Contacto: </b>e.espinosa@valegal.mx</p>
                <h2 class="educacion">EDUCACIÓN</h2>
                <p class="item"><b>Licenciatura en Derecho </b>Universidad Enrique Díaz de León</p>
                <p class="item"><b>Maestría en Derecho Constitucional y Amparo </b>Universidad Enrique Díaz de León</p>
                <h2 class="educacion">CURSOS ACADÉMICOS</h2>
                <p class="item"><b>•	Catedra Universitaria </b></p>
                <p class="item">o	Retos y perspectiva del Derecho Fiscal en México (2017)</p>
                <p class="item">o	Catedra Universitaria: Retos y Perspectivas de la Oralidad en los Juicios (2016)</p>
                <p class="item"><b>•	Congresos</b></p>
                <p class="item">o	Eficacia de los Medios Alternos de Solución de Conflicto en la Impartición de Justicia en México (2017)</p>
                <p class="item">o	Retos del Derecho Procesal en México (2016)</p>
                <p class="item">o	Internacional del Sistema Interamericano de Derechos Humanos (2015)</p>
                <p class="item"><b>•	Diplomado</b></p>
                <p class="item">o	Juicio de Amparo (Casa de la Cultura Jurídica SCJN) (2021)</p>
                <p class="item">o	Líderes en Desarrollo. (Universidad Iberoamericana) (2012)</p>
                <p class="item">o	Generador de Negocios (Formación Ejecutiva Empresarial) (2010)</p>
                <p class="item">o	Vendiendo el Servicio (Formación Ejecutiva Empresarial) (2009) </p>
            </div>
        </div>
    </div>
</div>

<div id="luisZ" class="uk-modal-full cv" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle container" uk-grid>
            <div class="uk-background-cover img" style="background-image: url('./img/design/foto2.jpg');"></div>
            <div class="uk-padding-large texto uk-background-cover" style="background-image: url(./img/design/fondo.png);">
                <h1 class="titulo">Luis Alberto Zambrano Flores</h1>
                <p class="profesion">Licenciado en Derecho</p>
                <p class="profesion">Abogado Litigio</p>
                <p class="item"><b>Contacto: </b>l.zambrano@valegal.mx</p>
                <h2 class="educacion">EDUCACIÓN</h2>
                <p class="item"><b>Licenciatura en Derecho </b>Universidad</p>
                <p class="item"><b>Maestría en Derecho Constitucional y Amparo </b>Universidad</p>
            </div>
        </div>
    </div>
</div>

<div id="brenda" class="uk-modal-full cv" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle container" uk-grid>
            <div class="uk-background-cover img" style="background-image: url('./img/design/foto5.jpg');"></div>
            <div class="uk-padding-large texto uk-background-cover" style="background-image: url(./img/design/fondo.png);">
                <h1 class="titulo">Brenda Pacheco González</h1>
                <p class="profesion">Licenciado en Derecho</p>
                <p class="item"><b>Contacto: </b>b.pacheco@valegal.mx</p>
                <h2 class="educacion">EDUCACIÓN</h2>
                <p class="item"><b>Licenciatura en Derecho </b>Universidad del Valle de Atemajac</p>
            </div>
        </div>
    </div>
</div>

<div id="wendy" class="uk-modal-full cv" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle container" uk-grid>
            <div class="uk-background-cover img" style="background-image: url('./img/design/foto6.jpg');"></div>
            <div class="uk-padding-large texto uk-background-cover" style="background-image: url(./img/design/fondo.png);">
                <h1 class="titulo">Jamy Wendy Guerra Cadenas</h1>
                <p class="profesion">Licenciado en Contaduría Pública</p>
                <h2 class="profesion">Administradora</h2>
                <p class="item"><b>Contacto: </b>administracion@valegal.mx</p>
                <h2 class="educacion">EDUCACIÓN</h2>
                <p class="item"><b>Licenciatura en Contaduría pública con especialidad en auditoria </b>Universidad del Valle de Atemajac</p>
                <h2 class="educacion">CURSOS ACADÉMICOS</h2>
                <p class="item">*	Reforma fiscal 2021-2022</p>
                <p class="item">*	Mod. V Certif. Valuad Eq. Pesado Parte I Relaciones Humanas</p>
                <p class="item">*	Criterios de valuación en carrocería</p>
                <p class="item">*	Técnicas Básicas de Fotografía</p>
                <p class="item">*	12 errores más comunes al conducir</p>
                <p class="item">*	Seguridad vial modular</p>
                <p class="item">*	Gestión de taller nivel 3</p>
                <p class="item">*	Formación y Desarrollo de Instructores</p>
                <p class="item">*	Gestión de Calidad</p>
                <p class="item">*	Declaración de Operaciones a Terceros IVA (2007)</p>
                <p class="item">*	¿Qué es una empresa?</p>
                <p class="item">*	Seminario de 5 S’s + 1</p>
                <p class="item">* ISO 9000</p>
                <p class="item">* Curso de STOP</p>
                <p class="item">*	Sentimientos (Servicio de Calidad hoy y siempre) CERCANIA 360°</p>
                <p class="item">*	Seminario de Cobranza y Seguimiento al Servicio</p>
                <p class="item">*	Liderazgo para Jefatura, Gerencia y Supervisor</p>
                <p class="item">*	Desarrollo de Supervisores</p>
                <p class="item">*	Excel Avanzado 2000</p>
                <p class="item">*	Diplomado en Cobranza Morosa</p>
                <p class="item">*	SCEE Curso Básico de Informática</p>
                <p class="item">*	Desarrollo Humano Integral</p>
            </div>
        </div>
    </div>
</div>

<div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style="">
    <a id="WhatsApp-button" href="" target="_blank" class="phoneJs" title="">
        <div class="cbh-ph-circle"></div>
        <div class="cbh-ph-circle-fill"></div>
        <div class="cbh-ph-img-circle1"></div>
    </a>
</div>

<?=$footer?>

<?=$scriptGNRL?>

</body>
</html>