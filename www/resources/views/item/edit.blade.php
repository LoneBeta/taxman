@include('includes.header')
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
	        <form action="" method="POST" class="" role="form">
	            <div class="row">
	              <div class="col-md-12">               
	                <div class="panel panel-default">
	                	<div class="panel-heading">
	                		<div class="panel-title">
			                	Create Item
			                </div>
	                	</div>
		                <div class="panel-body">
		                	<h5>Pages default style</h5>
		                		<div class="row">
			                		<div class="col-md-6">
						                <div class="form-group form-group-default required ">
						                  <label>Name</label>
						                  <input type="text" class="form-control" required="" name="name" value="{{$item->name}}">
						                </div>
			                		</div>
			                		<div class="col-md-6">
						                <div class="form-group form-group-default required ">
						                  <label>Supplier</label>
						                  <select class="form-control" name="supplier_id" data-selected-option="{{$item->supplier_id}}">
						                  	@foreach($suppliers as $supplier)
						                  	<option value="{{$supplier->id}}">{{$supplier->name}}</option>
						                  	@endforeach
						                  </select>
						                </div>
			                		</div>
		                		</div>
		                		<div class="row">
			                		<div class="col-md-6">
						                <div class="form-group form-group-default required">
						                  <label>Price</label>
						                  <input type="text" class="form-control" required="" name="price" value="{{$item->price}}">
						                </div>
			                		</div>
			                		<div class="col-md-6">
						                <div class="form-group form-group-default required ">
						                  <label>Item Type</label>
						                  <select class="form-control" name="item_type_id" data-selected-option="{{$item->item_type_id}}">
						                  	@foreach($item_types as $item_type)
						                  	<option value="{{$item_type->id}}">{{$item_type->name}}</option>
						                  	@endforeach
						                  </select>
						                </div>
			                		</div>
		                		</div>
			                	<button type="submit" class="btn btn-primary">Save</button>
		                </div>
	                </div>               
	              </div>
	            </div>
            	{{csrf_field()}}
        	</form>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
@include('includes.footer')