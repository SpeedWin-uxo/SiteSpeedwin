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
               <h2>Page Contact </h2>

             </header>
             <section class="tab-content">

               <!-- Example horizontal forms -->
               <!-- Tab #horizontal -->
               <div class="tab-pane active" id="horizontal">

                 <form class="form-horizontal"  action="{{url('contact')}}" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                   <fieldset>

                     <div class="control-group">
                       <label class="control-label" for="input">Nom de Showroom</label>
                       <div class="controls">
                         <input id="nom" name="nom" class="input-xlarge" type="text">

                       </div>
                     </div>

                     <div class="control-group">
                       <label class="control-label" for="input">Téléphonep</label>
                       <div class="controls">
                         <input id="tel" name="tel" class="input-xlarge" type="text">

                       </div>
                     </div>

                     <div class="control-group">
                       <label class="control-label" for="input">E-mail</label>
                       <div class="controls">
                         <input id="email" name="email" class="input-xlarge" type="text">

                       </div>
                     </div>

                     <div class="control-group">
                       <label class="control-label" for="input">Adresse</label>
                       <div class="controls">
                         <input id="adresse" name="adresse" class="input-xlarge" type="text">

                       </div>
                     </div>

                     <div class="control-group">
                       <label class="control-label" for="textarea">Iframe</label>
                       <div class="controls">
                         <textarea id="ifr" name="ifr"  class="input-xlarge" rows="7"></textarea>
                       </div>
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

                      <h3>Les Showrooms Speedwin</h3>
                      <table class="table table-striped table-bordered table-hover table-media">
                        <thead>
                          <tr>

                            <th class="span1">ID</th>
                            <th>Nom de Showroom</th>
                            <th>Numéro</th>
                            <th>E-mail</th>
                            <th>Adresse</th>
                            <th>Iframe</th>

                            <th>Actions</th>

                          </tr>
                        </thead>
                        <tbody>

@foreach($showrooms as $showroom)

    <tr>
                            <td>{{ $showroom->id }}</td>
                            <td>{{ $showroom->Nom }}</td>
                            <td>{{ $showroom->Telephone }}</td>
                            <td>{{ $showroom->email }}</td>
                            <td>{{ $showroom->adresse }}</td>
                            <td><iframe src="{{ $showroom->ifr }}" ></iframe></td>


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
