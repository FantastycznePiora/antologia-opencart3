<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
	<div class="page-header">
    <div class="container-fluid">
	<?php if (isset($_SESSION['empty_fields_error'])) { ?>
    <div class="alert alert-danger">
		<i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION['empty_fields_error']; unset($_SESSION['empty_fields_error']);?>
		<br/><i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION['numeric_error']; unset($_SESSION['numeric_error']);?>
		<br /><i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION['required']; unset($_SESSION['required']);?>
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
	<?php if (isset($_SESSION['receive_success_message'])) {		?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $_SESSION['receive_success_message']; unset($_SESSION['receive_success_message']);?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
      <div class="pull-right"><a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo "Cancel Button"; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo "Receive Order"; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">
			<i class="fa fa-info-circle"></i>
			<?php echo "Order # " . $order['order_info']['order_id']; ?>
		</h3>
	</div>
	<div class="panel-body">
	<form action="<?php echo $action . "&order_id=".$order_id; ?>" method="post" enctype="multipart/form-data" id="form-order-receive" class="form-horizontal">
		<table class="table table-bordered">
          <thead>
            <tr>
              <td class="text-left" style="width: 20%;">Product Name</td>
              <td class="text-left" style="20%">Option Values</td>
			  <td class="text-left" style="width:20%;">Quantity</td>
			  <td class="text-left" style="widht:20%">Supplier</td>
			  <td class="text-left" style="widht:20%">Remaining Quantity</td>
            </tr>
          </thead>
          <tbody>
			<?php foreach($order['products'] as $product_id => $product){?>
			<tr>
				<td><?php echo $product['product_name']; ?></td>
				<td><?php echo implode("<br />",$product['option_value_name']); ?></td>
				<td><?php echo $product['quantity']; ?></td>
				<td class="text-left" style="width: 20%;">
					<?php $count = count($product['supplier_ids']); ?>
					<?php for($i = 0; $i<$count; $i++){ ?>
					<select <?php if($order['order_info']['received'] == 1){ ?>disabled<?php } ?> class="form-control" name="product[<?php echo $product_id; ?>][supplier][]" >
						<?php
							foreach($suppliers as $supplier)
							{
						?>
						<option value="<?php echo $supplier['id']; ?>" <?php if($product['supplier_ids'][$i]==$supplier['id']){ ?>selected="selected"<?php } ?>><?php echo $supplier['supplier_name']; ?></option>
						<?php
							}
						?>
					</select>
					<input <?php if($order['order_info']['received'] == 1){ ?>disabled<?php } ?> style="float:left;width:50%;" id="<?php echo $product_id; ?>" onblur="getRemainingQuantity(this,this.id)" name="product[<?php echo $product_id; ?>][receive_quantity][]" value="<?php echo $product['receive_quantities'][$i]; ?>" placeholder="Receive Quantity" class="form-control receive_quantity" type="text"><input style="width:50%;" <?php if($order['order_info']['received'] == 1){ ?>disabled<?php } ?> name="product[<?php echo $product_id; ?>][price][]" value="<?php echo $product['prices'][$i]; ?>" placeholder="Price" class="form-control price" type="text">							
					<br />
					<?php } ?>
				</td>
				<td class="remaining_quantity"><span id="remaining_quantity"><?php echo $product['rq']; ?></span>|<span><button onclick="skipQuantity(this)" class="btn btn-primary" type="button">Skip Quantity</button></span>
					<input type="hidden" class="rq" value="<?php echo $product['rq']; ?>" name="product[<?php echo $product_id; ?>][rq]">
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td class="text-right" colspan="4" style="width: 80%;"><b>Ordered By:</b></td>
				<td class="text-left" style="width: 20%;"><?php echo $order['order_info']['order_by']; ?></td>
			</tr>
			<tr>
				<td class="text-right" colspan="4" style="width: 80%;"><b>Date Added:</b></td>
				<td class="text-left" style="width: 20%;"><?php echo $order['order_info']['order_date']; ?></td>
			</tr>
			<tr>
				<td class="text-right" colspan="4" style="width: 80%;"><b>Order Receive Date:</b></td>
				<td class="text-left" style="width: 20%;"><div class="input-group date">
				<input <?php if($order['order_info']['received'] == 1){ ?>disabled<?php } ?> type="text" name="order_receive_date" value="<?php if($order['order_info']['order_receive_date']!='0000-00-00') echo $order['order_info']['order_receive_date']; ?>" placeholder="Order Receive Date" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                  </span></div></td>
			</tr>
			<tr>
				<td class="text-right" colspan="5" style="width: 100%;"><span class="input-group-btn">
                    <button type="button" id="button-filter" class="btn btn-primary pull-right" onclick="submit_form()"><?php echo "Receive Order"; ?></button>
            </span></td>
			</tr>
			</tbody>
        </table>
		</form>
	</div>
  </div>
</div>

<script type="text/javascript">
	
	window.skipQuantity = function(evnt){
		var quantity = parseInt($(evnt).parent().parent().prev().prev().text());
		var remaining_quantity = parseInt($(evnt).parent().prev().text());
		
		var receive_quantity = quantity - remaining_quantity;
		$(evnt).parent().prev().text('0');
		var rq = 0;
		$(evnt).parent().parent().prev().children('input.receive_quantity').each(function(){
			
			if($(this).val())
			{
				rq = rq + parseInt($(this).val());
			}
			if(receive_quantity == rq)
			{
				$(this).next().nextAll().remove();
				return false;
			}
		});
	}
	
</script>
<script type="text/javascript">
	function getRQuantity(evnt)
	{
		var quantity = parseInt($(evnt).parent().prev().text());
		var receive_quantity = parseInt($(evnt).val());
		if(receive_quantity>quantity)
		{
			alert("Receive quantity should be less than the quantity");
		}
		else
		{
			var remaining_quantity = quantity - receive_quantity;
			$(evnt).parent().next().children('#remaining_quantity').text(remaining_quantity);
			$(evnt).parent().next().children('input.rq').val(remaining_quantity);
		}
	}
	function getRemainingQuantity(evnt,product_id)
	{
		if($(evnt).val())
		{
			var quantity = parseInt($(evnt).parent().prev().text());
			var receive_quantity = 0;
			var remaining_quantity = 0;
			var no_value = '';
			$(evnt).parent().children('input.receive_quantity').each(function(){
				if($(this).val())
				{
					receive_quantity += parseInt($(this).val());
				}
				if(receive_quantity >= quantity)
				{
					$(evnt).next().nextAll().remove();
					return false;
				}
			});
			if(receive_quantity > quantity)
			{
				alert("Receive quantity should be less than the quantity");
				setTimeout(function() { $(evnt).focus(); }, 100);
				$(evnt).val("");
				return false;
			
			}
			else
			{
				
				remaining_quantity = quantity - receive_quantity;
			}
			if(remaining_quantity > 0)
			{
				$(evnt).next().nextAll().remove();
				var html = '';
					html += '<br />';
					html +='<select class="form-control" name="product['+product_id+'][supplier][]">';
				<?php foreach($suppliers as $supplier){ ?>
					html += '<option value="<?php echo $supplier['id']; ?>"><?php echo $supplier['supplier_name']; ?></option>';
				<?php } ?>
					html += '</select>';
					html += '<input type="text" id="'+product_id+'" style="float:left;width:50%" onblur="getRemainingQuantity(this,this.id)" name="product['+product_id+'][receive_quantity][]" value="" placeholder="Receive Quantity" class="form-control receive_quantity" /><input type="text" style ="width:50%;" name="product['+product_id+'][price][]" value="" placeholder="Price" class="form-control price" />';
					$(evnt).parent().next().children('#remaining_quantity').text(remaining_quantity);
					$(evnt).parent().next().children('input.rq').val(remaining_quantity);
					$(evnt).parent().append(html);
			}
			else if(remaining_quantity == 0)
			{
				$(evnt).parent().next().children('#remaining_quantity').text(remaining_quantity);
				$(evnt).parent().next().children('input.rq').val(remaining_quantity);
			}
		}
		else{
			return false;
		}
	}
	
</script>
<script type="text/javascript">
	function submit_form()
	{
		$('#form-order-receive').submit();
	}
</script>
<script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});
//--></script>
<?php echo $footer; ?> 
