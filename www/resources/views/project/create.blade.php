@include('includes.header')
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
          	<form action="" method="POST" class="" role="form">
          	<div class="row">
          		<div class="col-md-12">
		          	<div class="pull-left">
		          		<h2 class="page-title">Create Project</h2>
		          	</div>
		          	<div class="pull-right">
		          		<button type="submit" class="btn btn-primary">Save Project</button>
		          		<button type="button" class="btn btn-success"><i class="fa fa-print"></i></button>
		          		<div class="btn-group dropdown-default"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Options <span class="caret"></span> </a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="fa fa-file-o"></i> &nbsp; Invoice</a></li>
								<li><a href="#"><i class="fa fa-archive"></i> &nbsp; Archive</a></li>
								<li><a href="#"><i class="fa fa-times"></i> &nbsp; Cancel</a></li>
							</ul>
						</div>
		          	</div>
		        </div>
          	</div>
            <div class="row">
              <div class="col-md-8">               
                <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
		                	<div class="col-md-6">
				                <div class="form-group form-group-default required ">
				                  <label>Customer</label>
				                  <select class="form-control select2" name="customer_id">
				                  	@foreach($customers as $customer)
				                  	<option value="{{$customer->id}}">{{$customer->name}}</option>
				                  	@endforeach
				                  </select>
				                </div>
			                </div>
		                	<div class="col-md-6">
				                <div class="form-group form-group-default required ">
				                  <label>Account</label>
				                  <select class="form-control">
				                  	<option>GBP Accounts Receivable</option>
				                  </select>
				                </div>
			                </div>
		                </div>
	                	<div class="row">
		                	<div class="col-md-6">
				                <div class="form-group form-group-default required ">
				                  <label>Status</label>
				                  <select class="form-control" name="status">
				                  	<option value="1">In Progress</option>
				                  	<option value="2">On Hold</option>
				                  	<option value="3">Complete</option>
				                  	<option value="4">Cancelled</option>
				                  </select>
				                </div>
			                </div>
		                	<div class="col-md-6">
				                <div class="form-group form-group-default required ">
				                  <label>Currency</label>
				                  <select class="form-control" name="currency">
				                  	<option value="1">£ GBP</option>
				                  </select>
				                </div>
			                </div>
		                </div>
	                </div>
                </div>               
              </div>
              <div class="col-md-4">   
	              <div class="panel panel-default">
	              	<div class="panel-body">
	              		<table class="table table-condensed">
	              			<thead>
	              				<tr>
	              					<th>&nbsp;</th>
	              					<th>Amount</th>
	              				</tr>
	              			</thead>
	              			<tbody>
	              				<tr>
	              					<td>Sub Total</td>
	              					<td>£10.00</td>
	              				</tr>
	              				<tr>
	              					<td>Discount (10%)</td>
	              					<td>-£1.00</td>
	              				</tr>
	              				<tr>
	              					<td>Tax (20%)</td>
	              					<td>£5.00</td>
	              				</tr>
	              			</tbody>
	              			<tbody>
	              				<tr>
	              					<td><b>Total</b></td>
	              					<td><b>£14.00</b></td>
	              				</tr>
	              			</tbody>
	              		</table>
	              	</div>
	              </div>
              </div>
            </div>
            <div class="row">
            	<div class="col-md-12">
					<div class="panel panel-default">
						<ul class="nav nav-tabs nav-tabs-simple hidden-xs" role="tablist" data-init-reponsive-tabs="collapse">
							<li class="active"><a href="#order_line_items" data-toggle="tab" role="tab" aria-expanded="true">Order Items</a></li>
							<li class=""><a href="#order_financial_info" data-toggle="tab" role="tab" aria-expanded="false">Financial</a></li>						</li>
							<li class=""><a href="#tab2Inspire" data-toggle="tab" role="tab" aria-expanded="false">Hello Three</a></li>
						</ul>
						<div class="panel-group visible-xs" id="K1Jst-accordion"></div>
						<div class="tab-content hidden-xs">
							<div class="tab-pane active" id="order_line_items">
								<table class="table table-condensed table-hover order-items-table">
									<thead>
										<tr>
											<th>Item</th>
											<th>Quantity</th>
											<th>Price Per Unit</th>
											<th>Tax</th>
											<th>Discount</th>
											<th>Total</th>
											<th>&nbsp;</th>
										</tr>
									</thead>
									<tbody></tbody>
									<tfoot>
										<tr>											
											<th>&nbsp;</th>
											<th>&nbsp;</th>
											<th>&nbsp;</th>
											<th>&nbsp;</th>
											<th>&nbsp;</th>
											<th>&nbsp;</th>
											<th align="right"><button type="button" class="btn btn-success" onclick="add_order_item_row(this)">Add New Order Item</button></th>
										</tr>
									</tfoot>
								</table>
							</div>
							<div class="tab-pane" id="order_financial_info">

							</div>
							<div class="tab-pane" id="tab2Inspire">

							</div>
						</div>
					</div>
            	</div>
            </div>
            <input type="hidden" name="type_id" value="2"/>            
            {{csrf_field()}}
        	</form>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
<div class="utility-container" style="display:none">
	<table>
		<tbody>
			<tr class="order-item-row">
				<td>
					<select class="order-item-field order-item-type full-width" name="orderItem[item_id][]">
						<option value="0" data-item-price="0.00">Choose Item...</option>
						@foreach($items as $item)
						<option value="{{$item->id}}" data-item-price="{{$item->price}}">{{$item->name}}</option>
						@endforeach
					</select>
				</td>
				<td><input class="form-control order-item-field order-item-quantity" name="orderItem[quantity][]"></td>
				<td><input class="form-control order-item-field order-item-price" name="orderItem[price_per_unit][]" readonly></td>
				<td>
					<select name="orderItem[tax][]" class="full-width order-item-field order-item-tax">
						<option value="0">N/A: 0%</option>
						<option value="0.20">VAT: 20%</option>
					</select>
				</td>
				<td>
					<select name="orderItem[discount][]" class="full-width order-item-field order-item-discount">
						<option value="0">0%</option>
						<option value="0.10">10%</option>
						<option value="0.20">20%</option>
						<option value="0.30">30%</option>
						<option value="0.40">40%</option>
						<option value="0.50">50%</option>
					</select>
				</td>
				<td><input class="form-control order-item-total" name="orderItem[total][]" readonly></td>
				<td align="right"><button type="button" class="btn btn-danger" onclick="remove_order_item_row(this)">Remove</button></td>
			</tr>
		</tbody>
	</table>
</div>
@include('includes.footer')
<script type="text/javascript">
	var number_of_order_items = 0;

	attach_order_item_select();

	$('.order-item-type').on('change',function()
	{
		var order_item_price = $(this).find("option:selected").attr("data-item-price");
		$('.order-item-price').val(order_item_price);
	});

	$(document).on('change','.order-item-field',function()
	{
		calculate_order_item_total($(this).closest(".order-item-row"));
	});

	$(document).on('keyup','.order-item-field',function()
	{
		calculate_order_item_total($(this).closest(".order-item-row"));
	});

	function calculate_order_item_total(order_item_row)
	{
		var order_item_quantity = order_item_row.find(".order-item-quantity").val();
		var order_item_price    = order_item_row.find(".order-item-price").val();
		var order_item_tax      = order_item_row.find(".order-item-tax").val();
		var order_item_discount = order_item_row.find(".order-item-discount").val();

		var order_item_total = Math.round( order_item_quantity * order_item_price * (1+order_item_tax) * (1-order_item_discount) * 100) / 1000;

		order_item_row.find(".order-item-total").val(order_item_total);
	}

	function add_order_item_row()
	{
		$('.order-items-table tbody').append($('.utility-container .order-item-row').clone());

		attach_order_item_select();
	}

	function attach_order_item_select()
	{
		var order_item_select = $('.order-item-row select');

		if(order_item_select)
		{
			order_item_select.select2('destroy'); 
		}
		order_item_select.select2();
	}

	function remove_order_item_row(button)
	{
		$(button).closest('.order-item-row').remove();
	}
</script>