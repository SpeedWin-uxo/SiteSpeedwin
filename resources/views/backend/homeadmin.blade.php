@extends('layouts.masteradmin')


@section('content1')

<!-- Right (content) side -->
<section class="content-block" role="main">

  <!-- Widget container -->

  <!-- /Widget container -->

  <!-- Breadcrumbs -->

  <!-- Breadcrumbs -->
  <div class="row-fluid">

    <!-- Data block -->
    <article class="span12 data-block">
      <div class="data-container">
        <header>
          <h2>Slides</h2>
        </header>
        <section>

          <!-- Bootstrap file upload plugin -->
          <form action="{{url('homeadmin')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <fieldset>



              <div class="control-group">
                <label class="control-label" for="fileInput">Selectioner une image de taille 1000 * 667</label>
                <p> Vous pouvez changer les photos qui apparessent dans la rebrique slide  </p>

                <div class="row-fluid">

                  <div class="span6">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <h4></h4>
                      <div class="fileupload-new fileupload-large thumbnail"><img src="assets/img/sample_content/upload-250x150.png" alt="Upload preview"></div>
                      <div class="fileupload-preview fileupload-exists fileupload-large flexible thumbnail"></div>
                      <div>
                        <span class="btn btn-alt btn-file">
                          <span class="fileupload-new">Select image</span>
                          <span class="fileupload-exists">Change</span>

                          <input type="file" name="image" id="image">
                        </span>

                              <input type="submit" class="btn btn-alt btn-file"  value="enregistrer">

                        <a class="btn btn-alt btn-danger fileupload-exists" data-dismiss="fileupload" href="#">Remove</a>

                      </div>
                    </div>


                  </div>
                </div>
              </div>

            </fieldset>
          </form>
          <!-- /Bootstrap file upload plugin -->

        </section>
        <div class="data-container">
        <header>
          <h2>slides déja existé </h2>
        </header>
        <section>

          <div class="row-fluid">

                    <!-- Data block -->
                    <article class="span12 data-block">
                      <section>

                        <h3>Postes publiés</h3>
                        <table class="table table-striped table-bordered table-hover table-media">
                          <thead>
                            <tr>

                              <th class="span1">ID</th>

                              <th>Images</th>
                              <th>Actions</th>

                            </tr>
                          </thead>
                          <tbody>

  @foreach($slides as $slide)

                          <tr>
                              <td>{{ $slide->id }}</td>
                              <td>  <a class="thumbnail" href="{{asset('storage/' . $slide->image)}}"

                                rel="lightbox"><img alt="" src="{{asset('storage/' . $slide->image)}}"  ></a></td>

                              <td>

                                <!--form action="{{ url('homeadmin'.$slide->id) }}" methode="post">
                                                     {{ csrf_field() }}

                                                    {{ csrf_field('DELETE') }}-->

                                <div class="btn-group">
                                  <button class="btn btn-small"><span class="icon-eye-open"></span></button>

                                  <a href="/deleteslide/{{ $slide->id }}"><button   class="btn btn-small"><span class="icon-trash"></span></button></a>
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
      </div>
      </div>
    </article>


  </div>

  <div class="row-fluid">


    <article class="span12 data-block nested">
      <div class="data-container">
        <header>
          <h2>Capacité de l'entreprise </h2>

        </header>
        <section class="tab-content">


          <div class="tab-pane active" id="horizontal">

            <form class="form-horizontal" action="{{url('cap')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
              <fieldset>
                <legend>Capacité de l'entreprise</legend>
                <div class="control-group">
                  <label class="control-label" for="input">Fenetres instalées</label>
                  <div class="controls">
                    <input id="fenetre" name="fenetre"   class="input-xlarge" type="text">

                  </div>
                </div>

                  <div class="control-group">
                  <label class="control-label" for="input">Solutions Proposés</label>
                  <div class="controls">
                    <input id="solutiont" name="solution" class="input-xlarge" type="text">

                  </div>
                </div>
                  <div class="control-group">
                  <label class="control-label" for="input">Nombre de Client</label>
                  <div class="controls">
                    <input id="client" name="client" class="input-xlarge" type="text">

                  </div>
                </div>
                  <div class="control-group">
                  <label class="control-label" for="input">Nombre de ShowRoom</label>
                  <div class="controls">
                    <input id="showroom" name="showroom" class="input-xlarge" type="text">

                  </div>
                </div>



        <input type="submit" class="btn btn-alt btn-file"  value="enregistrer">
              </fieldset>
            </form>

          </div>

          <div class="tab-pane" id="vertical">

            <form>
              <fieldset>
                <legend>Vertical form</legend>
                <div class="control-group">
                  <label class="control-label" for="input">Text input</label>
                  <div class="controls">
                    <input id="input" class="input-xlarge" type="text">
                    <p class="help-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="optionsCheckbox">Checkbox</label>
                  <div class="controls">
                    <label class="checkbox">
                      <input id="optionsCheckbox" type="checkbox" value="option1">
                      Curabitur vehicula porttitor suscipit
                    </label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="optionsRadios">Radio</label>
                  <div class="controls">
                    <label class="radio">
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Option one is this and that—be sure to include why it's great
                    </label>
                    <label class="radio">
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one
                    </label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inlineCheckbox">Inline checkbox</label>
                  <div class="controls">
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                    </label>
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                    </label>
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                    </label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="select">Select list</label>
                  <div class="controls">
                    <select id="select">
                      <option>Google</option>
                      <option>Apple</option>
                      <option>Samsung</option>
                      <option>Intel</option>
                      <option>Microsoft</option>
                      <option>Facebook</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="selectMultiple">Multiple select list</label>
                  <div class="controls">
                    <select id="selectMultiple" multiple="multiple">
                      <option>Google</option>
                      <option>Apple</option>
                      <option>Samsung</option>
                      <option>Intel</option>
                      <option>Microsoft</option>
                      <option>Facebook</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="textarea">Textarea</label>
                  <div class="controls">
                    <textarea id="textarea" class="input-xlarge" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-actions">
                  <button class="btn btn-alt btn-large btn-primary" type="submit">Save changes</button>
                </div>
              </fieldset>
            </form>

          </div>


        </section>
      </div>
    </article>


  </div>



<div class="row-fluid">


    <article class="span12 data-block">
      <div class="data-container">
        <header>
          <h2>Derniéres instalations</h2>
        </header>
        <section>


          <form    action="{{url('inst')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
            <fieldset>



              <div class="control-group">
                <label class="control-label" for="fileInput">Selectioner une image de taille 570 * 350</label>
                <p> Vous pouvez changer les photos qui apparessent dans la rebrique derniéres instalations  </p>

                <div class="row-fluid">
                  <div class="control-group">
                  <label class="control-label" for="input">Titre de l'image</label>
                  <div class="controls">
                    <input id="titre" name="titre" class="input-xlarge" type="text">

                  </div>
                </div>
                  <div class="span6">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <h4></h4>
                      <div class="fileupload-new fileupload-large thumbnail"><img src="assets/img/sample_content/upload-250x150.png" alt="Upload preview"></div>
                      <div class="fileupload-preview fileupload-exists fileupload-large flexible thumbnail"></div>
                      <div>
                        <span class="btn btn-alt btn-file">
                          <span class="fileupload-new">Select image</span>
                          <span class="fileupload-exists">Change</span>
                          <input type="file" id="image" name="image">
                        </span>
                          <input type="submit" class="btn btn-alt btn-file"  value="enregistrer" >
                        <a class="btn btn-alt btn-danger fileupload-exists" data-dismiss="fileupload" href="#">Remove</a>
                      </div>
                    </div>


                  </div>
                </div>
              </div>

            </fieldset>
          </form>


        </section>

        <div class="row-fluid">

                  <!-- Data block -->
                  <article class="span12 data-block">
                    <section>

                      <h3>derniéres instalations publiées</h3>
                      <table class="table table-striped table-bordered table-hover table-media">
                        <thead>
                          <tr>

                            <th class="span1">ID</th>
                           <th>Titre</th>
                            <th>Images</th>
                            <th>Actions</th>

                          </tr>
                        </thead>
                        <tbody>

@foreach($instalations as $instalation)

                        <tr>
                            <td>{{ $instalation->id }}</td>
                              <td>{{ $instalation->titre }}</td>
                            <td>  <a class="thumbnail" href="{{asset('storage/' . $instalation->image)}}"

                              rel="lightbox"><img alt="" src="{{asset('storage/' . $instalation->image)}}"  ></a></td>


                            <td>
                              <div class="btn-group">
                                <button class="btn btn-small"><span class="icon-eye-open"></span></button>

                                <a href="/deleteinst/{{ $instalation->id }}">  <button class="btn btn-small"><span class="icon-trash"></span></button></a>
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


      </div>
    </article>






  </div>

  <div class="row-fluid">


      <article class="span12 data-block">
        <div class="data-container">
          <header>
            <h2>Les références</h2>
          </header>
          <section>


            <form    action="{{url('ref')}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
              <fieldset>



                <div class="control-group">
                  <label class="control-label" for="fileInput">Selectioner une image de taille 350 * 40</label>
                  <p> Vous pouvez changer les photos qui apparessent dans la rebrique derniéres instalations  </p>

                  <div class="row-fluid">

                    <div class="span6">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <h4></h4>
                        <div class="fileupload-new fileupload-large thumbnail"><img src="assets/img/sample_content/upload-250x150.png" alt="Upload preview"></div>
                        <div class="fileupload-preview fileupload-exists fileupload-large flexible thumbnail"></div>
                        <div>
                          <span class="btn btn-alt btn-file">
                            <span class="fileupload-new">Select image</span>
                            <span class="fileupload-exists">Change</span>
                            <input type="file" id="image" name="image">
                          </span>
                            <input type="submit" class="btn btn-alt btn-file"  value="enregistrer" >
                          <a class="btn btn-alt btn-danger fileupload-exists" data-dismiss="fileupload" href="#">Remove</a>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>

              </fieldset>
            </form>


          </section>

          <div class="row-fluid">

                    <!-- Data block -->
                    <article class="span12 data-block">
                      <section>

                        <h3>Postes publiés</h3>
                        <table class="table table-striped table-bordered table-hover table-media">
                          <thead>
                            <tr>

                              <th class="span1">ID</th>

                              <th>Images</th>
                              <th>Actions</th>

                            </tr>
                          </thead>
                          <tbody>

  @foreach($references as $reference)

                          <tr>
                              <td>{{ $reference->id }}</td>
                              <td>  <a class="thumbnail" href="{{asset('storage/' . $reference->image)}}"

                                rel="lightbox"><img alt="" src="{{asset('storage/' . $reference->image)}}"  ></a></td>


                              <td>

                                <div class="btn-group">
                                  <button  type="submit"  class="btn btn-small"><span class="icon-eye-open"></span></button>

                                <a href="/deleteref/{{ $reference->id }}">   <button type="submit"   class="btn btn-small"><span class="icon-trash"></span></button></a>
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


        </div>
      </article>






    </div>


</section>

@endsection
