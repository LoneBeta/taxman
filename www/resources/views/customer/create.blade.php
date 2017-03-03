@include('includes.header')
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <div class="row">
              <div class="col-md-12">               
                <div class="panel panel-default">
                	<div class="panel-heading">
                		<div class="panel-title">
		                Create Customer
		                </div>
                	</div>
	                <div class="panel-body">
	                	<h5>Pages default style</h5>
	                	<form action="" method="POST" class="" role="form">
			                <div class="form-group form-group-default required ">
			                  <label>Name</label>
			                  <input type="text" class="form-control" required="" name="name">
			                </div>
			                <div class="form-group form-group-default required">
			                  <label>Customer Type</label>
			                  <select class="form-control" name="type_id">
			                  	@foreach($customer_types as $customer_type)
			                  	<option value="{{$customer_type->id}}">{{$customer_type->name}}</option>
			                  	@endforeach
			                  </select>
			                </div>
			                <input type="hidden" name="account_id" value="1"/>
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