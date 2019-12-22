@extends('layouts.masteradmin')


@section('content1')


<section class="content-block" role="main">

<div class="row-fluid">

          <!-- Data block -->
          <article class="span12 data-block">
            <section>

              <h3>Les CV Enregistrés</h3>
              <table class="table table-striped table-bordered table-hover table-media">
                <thead>
                  <tr>

                    <th class="span1">ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Numéro</th>
                    <th>Offre</th>
                    <th>Message</th>
                 

                    <th>Actions</th>

                  </tr>
                </thead>
                <tbody>

                  @foreach($cvemplois as $cvemploi)

                                    <tr>
                                        <td>{{ $cvemploi->id }}</td>
                                        <td> {{ $cvemploi->Nom }}  </td>
                                        <td> {{ $cvemploi->mail }}  </td>
                                        <td> {{ $cvemploi->Numéro }}  </td>
                                        <td> {{ $cvemploi->offre }}  </td>
                                        <td> {{ $cvemploi->message }}  </td>


                                        <td>



                                          <div class="btn-group">
                                      <a href="/downloadcv/{{ $cvemploi->id }}">  <button class="btn btn-small"><span class="icon-download-alt"></span></button> </a>

                                            <a href="/deletecv/{{ $cvemploi->id }}"><button   class="btn btn-small"><span class="icon-trash"></span></button></a>
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
