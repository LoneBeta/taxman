@include('includes.header')
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <div class="pull-right m-b-30">
              <a href="{{url('/supplier/create')}}">
                <button class="btn btn-success">Create New Supplier</button>
              </a>
            </div>
            <div class="row">
              <div class="col-md-12">               
                <div class="panel panel-default">
                	<div class="panel-heading">
                		<div class="panel-title">
		                  Suppliers
		                </div>
                	</div>
	                <div class="panel-body">
	                	<h5>A table of all your suppliers</h5>
	                	<table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>  
                      <tbody>
                        @foreach($suppliers as $supplier)
                        <tr>
                          <td>{{$supplier->id}}</td>
                          <td>{{$supplier->name}}</td>
                          <td class="text-right">
                            <a href="{{url('/supplier/edit/'.$supplier->id)}}">
                              <button class="btn btn-primary">Edit</button>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
	                </div>
                </div>               
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
@include('includes.footer')