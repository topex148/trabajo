@extends('layouts.menuInicio')

@section('content')
<!-- CONTACT -->
			<section id="contact">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Formulario Actividades</h2>
						<p class="lead font-lato">Ingresa los datos de la actividad.</p>
						<hr />
					</header>


					<div class="row">

						<!-- FORM -->
						<div class="col-md-12 col-sm-12">

							<h3>Verifica los datos antes de seleccionar <strong><em>Registrar!</em></strong></h3>


							<form action="/Trabajo/public/actividades/store" method="POST" role="form">

                {{csrf_field()}}

							  <!--<fieldset>-->
									<!--<input type="hidden" name="action" value="contact_send" />-->

									<div class="row">

											<div class="col-md-6">
	                      <h5>Titulo</h5>
	                      <!-- date picker -->
	                      <input type="text" value="{{old('titulo')}}" class="form-control" name="titulo"  placeholder="Ingrese el Titulo">

	                    </div>

	                    <div class="col-md-6">
	                      <h5>Descripcion</h5>
	                      <!-- date picker -->
	                      <input type="text" value="{{old('descripcion')}}" class="form-control" name="descripcion"  placeholder="Ingrese la Descripcion">

	                    </div>
									</div>



							<!--	</fieldset>-->

								<div class="row">
									<div class="col-md-12">
										  <br /><br />
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Registrar</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->




					</div>

				</div>
			</section>
			<!-- /CONTACT -->
			<!-- BUTTON CALLOUT -->
			<a href="/Trabajo/public/actividades" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
				<span class="font-lato fs-30">

					<strong>Regresar &raquo;</strong>
				</span>
			</a>

			<!-- BUTTON CALLOUT -->
@endsection
