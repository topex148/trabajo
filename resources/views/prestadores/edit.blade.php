@extends('layouts.menuInicio')

@section('content')
<!-- CONTACT -->
			<section id="contact">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Formulario Prestador</h2>
						<p class="lead font-lato">Ingresa los datos del Prestador.</p>
						<hr />
					</header>


					<div class="row">

						<!-- FORM -->
						<div class="col-md-12 col-sm-12">

							<h3>Verifica los datos antes de seleccionar <strong><em>Actualizar!</em></strong></h3>

            <form enctype="multipart/form-data" action="/Trabajo/public/prestadores/{{$prestadore->RIF}}" method="POST" role="form">

              {{method_field('PATCH')}}
              {{csrf_field()}}

							<div class="row">
									<div class="col-md-4">
										<label for="">RIF*</label>
										<input required type="text" maxlength="9" value="{{$prestadore->RIF}}"  data-format="99-999999-9" data-placeholder="X" class="form-control  masked" name="RIF" placeholder="Ingrese el RIF">
									</div>
									<div class="col-md-4">
										<label for="">RTN</label>
										<input required type="text" maxlength="5" value="{{$prestadore->RTN}}" class="form-control masked" name="RTN" data-format="99999" data-placeholder="X" placeholder="Ingrese el RTN" >
									</div>
									<div class="col-md-4">
										<label for="">Teléfono </label>
										<div class="fancy-form">
										<i class="fa fa-phone-square"></i>
										<input required type="text"  maxlength="10" class="form-control masked" value="{{$prestadore->Telefono}}" data-format="(999) 999-9999" data-placeholder="X" name="Telefono" placeholder="Ingrese el Teléfono">
										</div>
									</div>
								<!--	<div class="col-md-4">
										<label for="">Teléfono </label>
										<input required type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"  value="{{old('Telefono')}}" class="form-control" name="Telefono" placeholder="Ingrese el Teléfono">
									</div>-->
							</div>



							<div class="row">



								<div class="col-md-6">
									<label for="">Nombre</label>
									<input required type="text"  maxlength="30" value="{{$prestadore->Nombre}}" class="form-control" name="Nombre" placeholder="Ingrese el Nombre">
								</div>

										<div class="col-md-6">
											<!-- custom file upload -->
										<label for="">Imagen Perfil Prestador</label>
										<input class="custom-file-upload"  value="{{$prestadore-> imagen}}" type="file" name="imagen"  data-btn-text="Seleccionar Archivo" />
										<small class="text-muted block">Tamaño de Archivo Maximo: 10Mb (zip/pdf/jpg/png)</small>

									</div>

							</div>

							<div class="row">

								<div class="col-md-12">
									<label for="">Descripcion del Servicio</label>
									<input required type="text"  maxlength="500" value="{{$prestadore->DescripcionServicio}}" class="form-control" name="DescripcionServicio" placeholder="Ingrese la Descripcion del Servicio">
								</div>

							</div>

							<div class="row">

								<div class="col-md-12">
									<label for="">Descripcion del Prestador</label>
									<input required type="text"  maxlength="500" value="{{$prestadore->DescripcionPrestador}}" class="form-control" name="DescripcionPrestador" placeholder="Ingrese la Descripcion del Prestador">
								</div>

							</div>




							<div class="row">
									<div class="col-md-4">
										<label for="">Facebook</label>
										<input required type="email" value="{{$prestadore->Facebook}}" class="form-control" name="Facebook" placeholder="Ingrese el Facebook" >
									</div>
									<div class="col-md-4">
										<label for="">Twitter</label>
										<input required type="email" value="{{$prestadore->Twitter}}" class="form-control" name="Twitter" placeholder="Ingrese el Twitter">
									</div>
									<div class="col-md-4">
										<label for="">Instagram</label>
										<input required type="email" value="{{$prestadore->Instagram}}" class="form-control" name="Instagram" placeholder="Ingrese el Instagram" >
									</div>
							</div>


							<!--	</fieldset>-->

								<div class="row">
									<div class="col-md-12">
										  <br /><br />
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Actualizar</button>
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
      <a href="/Trabajo/public/prestadores" rel="nofollow" class="btn btn-xlg btn-warning fs-20 fullwidth m-0 rad-0 p-40">
        <span class="font-lato fs-30">
          Si no esta seguro sobre esta accion!
          <strong>Regresar &raquo;</strong>
        </span>
      </a>

      <!-- BUTTON CALLOUT -->

@endsection
