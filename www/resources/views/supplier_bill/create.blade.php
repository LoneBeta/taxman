@include('includes.header')
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <div class="row">
              <div class="col-md-12">               
                <div class="panel panel-default">
                	<div class="panel-heading">
                		<div class="panel-title">
		                	Create Supplier
		                </div>
                	</div>
	                <div class="panel-body">
	                	<h5>Pages default style</h5>
	                	<form action="" method="POST" class="" role="form">
			                <div class="form-group form-group-default required ">
			                  <label>Project</label>
			                  <select class="form-control" name="customer_id">
			                  	@foreach($projects as $project)
			                  	<option value="{{$project->id}}">{{$project->id}}</option>
			                  	@endforeach
			                  </select>
			                </div>
			                <div class="form-group form-group-default required ">
			                  <label>Supplier</label>
			                  <select class="form-control" name="supplier_id">
			                  	@foreach($suppliers as $supplier)
			                  	<option value="{{$supplier->id}}">{{$supplier->name}}</option>
			                  	@endforeach
			                  </select>
			                </div>
			                <input type="hidden" name="type_id" value="1"/>
		                	<button type="submit" class="btn btn-primary">Save</button>
		                	{{csrf_field()}}
	                	</form>
	                </div>
                </div>               
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
@include('includes.footer')