@include('includes.header')
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <div class="row">
              <div class="col-md-12">               
                <div class="panel panel-default">
                	<div class="panel-heading">
                		<div class="panel-title">
		                Edit Project
		                </div>
                	</div>
	                <div class="panel-body">
	                	<h5>Pages default style</h5>
	                	<form action="" method="POST" class="" role="form">
			                <div class="form-group form-group-default required ">
			                  <label>Customer</label>
			                  <select class="form-control" name="customer_id">
			                  	@foreach($customers as $customer)
			                  	<option value="{{$customer->id}}">{{$customer->name}}</option>
			                  	@endforeach
			                  </select>
			                </div>
			                <input type="hidden" name="id" value="{{$project->id}}"/>
		                	{{csrf_field()}}
		                	<div class="pull-right">
		                		<button type="submit" class="btn btn-primary">Save</button>
		                	</div>
	                	</form>
	                	<form action="/project/destroy/" method="POST">
			                <input type="hidden" name="id" value="{{$project->id}}"/>
			                <div class="pull-left">
		                		<button type="submit" class="btn btn-danger">Delete</button>
		                	</div>
	                	</form>
	                </div>
                </div>               
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
@include('includes.footer')