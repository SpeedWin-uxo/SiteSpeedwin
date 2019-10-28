@extends('layouts.masteradmin')


@section('content1')

<section class="content-block" role="main">

				<!-- Widget container -->

				<!-- /Widget container -->

				<!-- Breadcrumbs -->

			 <div class="row-fluid">

					<!-- Data block -->
					<article class="span12 data-block nested">
						<div class="data-container">
							<header>
								<h2>Page Recrutement </h2>

							</header>
							<section class="tab-content">

								<!-- Example horizontal forms -->
								<!-- Tab #horizontal -->
								<div class="tab-pane active" id="horizontal">

									<form class="form-horizontal"  action="{{url('recrutadmin')}}" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
										<fieldset>

											<div class="control-group">
												<label class="control-label" for="input">Titre de poste</label>
												<div class="controls">
													<input id="titre" name="titre" class="input-xlarge" type="text">

												</div>
											</div>


											<div class="control-group">
												<label class="control-label" for="textarea">Description de poste (deux lignes)</label>
												<div class="controls">
													<textarea id="descreption" name="descreption"  class="input-xlarge" rows="5"></textarea>
												</div>
											</div>
												<div class="form-group"> Ajouter votre fiche technique de poste
								                     <input type="file" id="file" name="file" accept="image/*,.pdf">
								                </div>
											<div class="form-actions">
												<button class="btn btn-alt btn-large btn-primary" type="submit">Enregistrer</button>
											</div>
										</fieldset>
									</form>

								</div>
								<!-- Tab #horizontal -->

								<!-- Example vertical forms -->
								<!-- Tab #vertical -->

								<!-- Tab #vertical -->

							</section>
						</div>
					</article>
					<!-- /Data block -->

				</div>
				<!-- Breadcrumbs -->

				<!-- Grid row -->

				<!-- /Grid row -->


        <div class="row-fluid">

                  <!-- Data block -->
                  <article class="span12 data-block">
                    <section>

                      <h3>Postes publiés</h3>
                      <table class="table table-striped table-bordered table-hover table-media">
                        <thead>
                          <tr>

                            <th class="span1">ID</th>
                            <th>Titre de poste</th>
                            <th>Description</th>
                            <th>Fiche Technique</th>
                            <th>Actions</th>

                          </tr>
                        </thead>
                        <tbody>

@foreach($recrutements as $recrutement)

    <tr>
                            <td>{{ $recrutement->id }}</td>
                            <td>{{ $recrutement->titre }}</td>

                            <td> {{ $recrutement->description }}</td>
                            <td>{{ $recrutement->file }}</td>
                            <td>
                              <div class="btn-group">
                                <button class="btn btn-small"><span class="icon-eye-open"></span></button>

                                <button class="btn btn-small"><span class="icon-trash"></span></button>
                              </div>
                            </td>
                              </tr>

    @endforeach




                        </tbody>
                      </table>

                    </section>
                  </article>
                  <!-- /Data block -->

                </div>


			</section>





@endsection
