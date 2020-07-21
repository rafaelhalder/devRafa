@extends('adminlte::page')

@section('title', 'Vegas')

@section('content_header')
<meta name="_token" content="{{csrf_token()}}" />
    <h1>Vegas</h1>
@stop

@section('content')
<section class ="content">
<!-- Modal -->
<form method="post" action="{{url('pedidos')}}" id="form">
@csrf
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
      <div class="row">
            <div class="form-group col-md-4">
              <label for="Name">Name:</label>
              <input type="text" class="form-control" name="pedidos_nome" id="pedidos_nome">
            </div>
          </div>
          <div class="row">
              <div class="form-group col-md-4">
                <label for="Club">Club:</label>
                <input type="text" class="form-control" name="pedido_numero" id="pedido_numero">
              </div>
          </div>
          <div class="row">
             <div class="form-group col-md-4">
                <label for="Country">Country:</label>
                <input type="text" class="form-control" name="pedido_qtda" id="pedido_qtda">
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  class="btn btn-success" id="ajaxSubmit">Save changes</button>
      </div>
    </div>

  </div>
</div>
</form>

  <section class="col-12">
    <div class = "row">

    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>Novo</h3>
            <p>Pedido</p>
          </div>
          <div class="icon">
            <i class="fas fa-plus-circle"></i>
          </div>
          <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal">
            Fazer Pedido <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>150</h3>
            <p>Em Andamento</p>
          </div>
          <div class="icon">
            <i class="fas fa-hamburger"></i>
          </div>
          <a href="#" class="small-box-footer">
            Pedidos <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>250</h3>
            <p>Todos Pedidos</p>
          </div>
          <div class="icon">
            <i class="fas fa-clipboard"></i>
          </div>
          <a href="#" class="small-box-footer">
            Visualizar <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>4</h3>
            <p>Reclamações</p>
          </div>
          <div class="icon">
            <i class="fas fa-angry"></i>
          </div>
          <a href="#" class="small-box-footer">
            Verificar <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>




    </div>
  </section>
  <section class="col-lg-12 connectedSortable ui-sortable">
<!-- Custom tabs (Charts with tabs)-->
    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-12 col-12">
        <div class="card card-dark">
          <div class="card-header">
            <h3 class="card-title">Pedidos em Andamento</h3>
              <div class="card-tools">
                <!-- This will cause the card to maximize when clicked -->
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                <!-- This will cause the card to collapse when clicked -->
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body teste">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class=" tabela_pedidos card-body table-responsive p-0 ">
                    <table class="table table-hover table-head-fixed text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>User</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Reason</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>183</td>
                          <td>John Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-success">Approved</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>219</td>
                          <td>Alexander Pierce</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-warning">Pending</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>657</td>
                          <td>Bob Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-primary">Approved</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                <!-- /.card-body -->
                </div>
              <!-- /.card -->
              </div>
            </div>
            <div class="card-footer" style="text-align:right;">
              <b>3 PEDIDOS</b>
              <i class="fas fa-heart"></i>
            </div>
          <!-- /.card-body -->
          </div>
        <!-- /.card -->
        </div>



        <!-- /.CARD A DIREITA -->


        <div class="col-lg-5 col-md-5 col-sm-12 col-12">
        <div class="card card-dark">
          <div class="card-header">
            <h3 class="card-title">Pedidos em Andamento</h3>
              <div class="card-tools">
                <!-- This will cause the card to maximize when clicked -->
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                <!-- This will cause the card to collapse when clicked -->
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class=" tabela_pedidos card-body table-responsive p-0 ">
                    <table class="table table-hover table-head-fixed text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>User</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Reason</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>183</td>
                          <td>John Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-success">Approved</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>219</td>
                          <td>Alexander Pierce</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-warning">Pending</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>657</td>
                          <td>Bob Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-primary">Approved</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td>Mike Doe</td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger">Denied</span></td>
                          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                <!-- /.card-body -->
                </div>
              <!-- /.card -->
              </div>
            </div>
            <div class="card-footer" style="text-align:right;">
              <b>3 PEDIDOS</b>
              <i class="fas fa-heart"></i>
            </div>
          <!-- /.card-body -->
          </div>
        <!-- /.card -->
        </div>
      </div>
    </div>
  </section>

  
</section>
    @stop
    @section('footer')
    <h1>Vegas</h1>
    @stop

@section('css')

@stop

@section('js')
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/pedidos') }}",
                  method: 'post',
                  data: {
                    pedidos_nome: jQuery('#pedidos_nome').val(),
                    pedido_numero: jQuery('#pedido_numero').val(),
                    pedido_qtda: jQuery('#pedido_qtda').val(),
                  },
                  success: function(result){
                  	if(result.errors)
                  	{
                  		jQuery('.alert-danger').html('');

                  		jQuery.each(result.errors, function(key, value){
                  			jQuery('.alert-danger').show();
                  			jQuery('.alert-danger').append('<li>'+value+'</li>');
                  		});
                  	}
                  	else
                  	{
                  		jQuery('.alert-danger').hide();
                  		$('#open').hide();
                  		$('#myModal').modal('hide');
                      $('.modal-backdrop').remove();
                  	}
                  }});
               });
            });
      </script>
      @stop