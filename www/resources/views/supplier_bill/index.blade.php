@include('includes.header')
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <div class="pull-right m-b-30">
              <a href="{{url('/supplier_bill/create')}}">
                <button class="btn btn-success">Create New Supplier Bill</button>
              </a>
            </div>
            <div class="row">
              <div class="col-md-12">               
                <div class="panel panel-default">
                	<div class="panel-heading">
                		<div class="panel-title">
		                  Supplier Bills
		                </div>
                	</div>
	                <div class="panel-body">
	                	<h5>A table of all your supplier bills</h5>
	                	<table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Customer Name</th>
                          <th>Supplier Name</th>
                          <th>Amount</th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>  
                      <tbody>
                        @foreach($supplier_bills as $supplier_bill)
                        <tr>
                          <td>{{$supplier_bill->id}}</td>
                          <td>{{$supplier_bill->customer->name}}</td>
                          <td>{{$supplier_bill->supplier->name}}</td>
                          <td>£0.00</td>
                          <td class="text-right">
                            <a href="{{url('/supplier_bill/edit/'.$supplier_bill->id)}}">
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