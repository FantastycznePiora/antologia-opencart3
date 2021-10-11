<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="button" onclick="checkQuantity(1)" form="form-return" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i><?php echo $text_order_returns; ?></h3>
      </div>
	  <div class="panel-body">
		<form action="<?php echo $save_return_order; ?>" method="post" enctype="multipart/form-data" id="form-return" class="form-horizontal">
			<div class="form-group required">
                <label class="col-sm-2 control-label" for="input-order-id"><?php echo $entry_order_id; ?></label>
                <div class="col-sm-10">
                  <input type="text" name="order_id" value="<?php echo $order_id;?>" placeholder="<?php echo $entry_order_id; ?>" onblur="loadProducts()" id="input-order-id" class="form-control" />
				<?php if($error_order_id){?>
				<div class="text-danger"><?php echo $error_order_id?></div>
				<?php } ?>
				</div>
            </div>
			<div class="form-group required">
				<label class="col-sm-2 control-label" for="input-product"><?php echo $entry_product; ?></label>
                <div class="col-sm-10">
					<select class="form-control" id="product" name="product" onchange="loadSuppliers()">
						<option value=""><?php echo $entry_product; ?></option>
						<?php foreach($products as $product){?>
						<option value="<?php echo $product['id']; ?>" <?php if($product_id == $product['id']){ ?>selected="selected"<?php } ?>><?php echo $product['name']; ?></option>
						<?php } ?>
					</select>
					<?php if($product_error){?>
					<div class="text-danger"><?php echo $product_error; ?></div>
					<?php } ?>
                </div>
			</div>
			<div class="form-group required">
				<label class="col-sm-2 control-label" for="input-supplier"><?php echo $entry_supplier; ?></label>
                <div class="col-sm-10">
					<select class="form-control" id="append_supplier" name="supplier">
						<option value=""><?php echo $entry_supplier; ?></option>
						<?php foreach($suppliers as $supplier){?>
						<option value="<?php echo $supplier['id']; ?>" <?php if($supplier_id == $supplier['id']){ ?>selected="selected"<?php } ?>><?php echo $supplier['first_name'] . " " . $supplier['last_name']; ?></option>
						<?php } ?>
					</select>
					<?php if($supplier_error){?>
					<div class="text-danger"><?php echo $supplier_error; ?></div>
					<?php } ?>
                </div>
			</div>
			<div class="form-group required">
                <label class="col-sm-2 control-label" for="input-quantity"><?php echo $entry_quantity; ?></label>
                <div class="col-sm-10">
                  <input type="text" id="return_quantity" name="return_quantity" value="<?php echo $return_quantity; ?>" placeholder="<?php echo $entry_quantity; ?>" id="input-order-id" class="form-control" />
				  <?php if($quantity_error){?>
				  <div class="text-danger"><?php echo $quantity_error; ?></div>
				  <?php } ?>
				</div>
            </div>
			<div class="form-group required">
                <label class="col-sm-2 control-label" for="input-reason"><?php echo $entry_reason; ?></label>
                <div class="col-sm-10">
                  <input type="text" id="reason" name="reason" value="" placeholder="<?php echo $entry_reason; ?>" id="input-order-id" class="form-control" />
				  <?php if($reason_error){?>
				  <div class="text-danger"><?php echo $reason_error; ?></div>
				  <?php } ?>
				</div>
            </div>
		</form>
	  </div>
  </div>
</div>
<script type="text/javascript">
	function loadProducts()
	{
		var order_id = $('#input-order-id').val();
		$(document).ready(function()
		{
			$.ajax({
				url: 'index.php?route=purchase/return_orders/getProducts&token=<?php echo $token; ?>&order_id=' + order_id,
				type: 'post',
				dataType: 'json',
				data: 'order_id=' + order_id,
				success: function(json) {
					if(json == "nothing")
					{
						$('#product').children().nextAll().remove();	
						alert("This order no. does not exist or may not received yet");
						$('#input-order-id').val('');
						$('#input-order-id').focus();
					}
					else
					{
						$('#product').children().nextAll().remove();	
						var html = '';
						for(var key in json)
						{
							html += '<option value =' +json[key].id+ '>' + json[key].name + '</option>';
						}
						$('#product').append(html);	
					}
				}
			});
		});
	}
	
	
	function loadSuppliers()
	{
		var order_id = $('#input-order-id').val();
		var product_id = $('#product').val();
		$(document).ready(function()
		{
			$.ajax({
				url: 'index.php?route=purchase/return_orders/getSuppliers&token=<?php echo $token; ?>',
				type: 'post',
				dataType: 'json',
				data: 'order_id=' + order_id + '&product_id=' + product_id,
				success: function(json) {
					$('#append_supplier').children().nextAll().remove();
					var html = '';
						for(var key in json)
						{
							html += '<option value =' +json[key].id+ '>' + json[key].first_name + ' ' + json[key].last_name + '</option>';
						}
						$('#append_supplier').append(html);
				}
			});
		});
	}
	
	function checkQuantity(eventon)
	{
		var order_id = $('#input-order-id').val();
		var product_id = $('#product').val();
		var supplier_id = $('#append_supplier').val();
		var return_quantity = $('#return_quantity').val();
		if(order_id && product_id && supplier_id && return_quantity && product_id != "Product" && supplier_id != "Supplier")
		{
			$(document).ready(function()
			{
				$.ajax({
					url: 'index.php?route=purchase/return_orders/checkQuantity&token=<?php echo $token; ?>',
					type: 'post',
					dataType: 'json',
					data: 'order_id=' + order_id + '&product_id=' + product_id + '&supplier_id=' + supplier_id,
					success: function(received_quantity) {
						if(received_quantity < return_quantity)
						{
							alert('The present products are '+received_quantity+' in order but return quantity '+return_quantity+' is greater than the present');
							$('#return_quantity').focus();
						}
						else
						{
							$('#form-return').submit();
						}
					}
				});
			});
		}
		else
		{
			if(eventon ==1)
			{
				$('#form-return').submit();
			}
		}
	}
</script>
<?php echo $footer; ?>