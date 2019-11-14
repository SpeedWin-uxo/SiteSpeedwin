@extends('layouts.masteradmin')


@section('content1')


<section class="content-block" role="main">

<div class="row-fluid">

          <!-- Data block -->
          <article class="span12 data-block">
            <section>

              <h3>Les Emails Enregistrées</h3>
              <table class="table table-striped table-bordered table-hover table-media">
                <thead>
                  <tr>

                    <th class="span1">ID</th>
                    <th>Email</th>

                    <th>Actions</th>

                  </tr>
                </thead>
                <tbody>

                  @foreach($newsletters as $newsletter)

                                    <tr>
                                        <td>{{ $newsletter->id }}</td>
                                        <td> {{ $newsletter->email }}  </td>

                                        <td>



                                          <div class="btn-group">
                                            <button class="btn btn-small"><span class="icon-eye-open"></span></button>

                                            <a href="/deletenews/{{ $newsletter->id }}"><button   class="btn btn-small"><span class="icon-trash"></span></button></a>
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
