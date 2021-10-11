<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bar-chart"></i> <?php echo $text_list; ?></h3>
      </div>
      <div class="panel-body">
	  <form id="filter_form" action = "<?php echo $filter; ?>" method="get" enctype="multipart/form-data">
        <div class="well">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="control-label" for="input-date-start"><?php echo $entry_date_start; ?></label>
                <div class="input-group date">
                  <input onkeypress="return false" type="text" name="date_start" value="<?php echo $date_start; ?>" placeholder="<?php echo $entry_date_start; ?>" data-date-format="YYYY-MM-DD" id="input-date-start" class="form-control" />
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                  </span></div>
              </div>
			</div>
			<div class="col-sm-6">
              <div class="form-group">
                <label class="control-label" for="input-date-end"><?php echo $entry_date_end; ?></label>
                <div class="input-group date">
                  <input onkeypress="return false;" type="text" name="date_end" value="<?php echo $date_end; ?>" placeholder="<?php echo $entry_date_end; ?>" data-date-format="YYYY-MM-DD" id="input-date-end" class="form-control" />
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                  </span></div>
              </div>
            </div>
			<div class="col-sm-6">
              <div class="form-group">
                <label class="control-label" for="input-date-end"><?php echo $entry_supplier; ?></label>
                <div class="input-group">
                  <span class="input-group-btn">
					<select class="form-control" name="supplier">
						<option value="">--supplier--</option>
						<?php foreach($suppliers as $supplier){ ?>
						<option <?php if($fsupplier==$supplier['supplier_name']){ ?>selected="selected"<?php } ?>><?php echo $supplier['supplier_name']; ?></option>
						<?php
						}?>
					</select>
                  </span></div>
              </div>
            </div>
			<div class="col-sm-6">
              <div class="form-group">
                <label class="control-label" for="input-date-end"><?php echo $entry_product; ?></label>
                <div class="input-group">
                  <span class="input-group-btn">
					<select class="form-control" name="product">
						<option value="">--product--</option>
						<?php foreach($products as $product){
						?>
						<option <?php if($fproduct == $product){?>selected="selected"<?php } ?>><?php echo $product; ?></option>
						<?php
						}?>
					</select>
                  </span></div>
              </div>
            </div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="input-return-id" class="control-label"><?php echo $entry_order_id; ?></label>
					<input type="text" class="form-control" id="input-return-id" placeholder="<?php echo $entry_order_id; ?>" value="<?php echo $order_id;?>" name="order_id">
				</div>
			</div>
		  </div>
		  <div class="row">
				<div class="col-sm-12">
					<button type="button" onclick="reset_form();" id="clear-filter" class="btn btn-primary pull-right"> <?php echo $button_clear; ?></button>
					<button style="margin-right:10px;" type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i> <?php echo $button_filter; ?></button>
				</div>
		  </div>
        </div>
		</form>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
			  <tr>
                <td class="text-left"><?php echo $column_order_id; ?></td>
                <td class="text-left"><?php echo $column_date_start; ?></td>
                <td class="text-left"><?php echo $column_date_end; ?></td>
				<td class="text-right"><?php echo $column_product; ?></td>
                <td class="text-right"><?php echo $column_supplier; ?></td>
				<td class="text-right"><?php echo $column_quantity; ?></td>
				<td class="text-right"><?php echo $column_price; ?></td>
				<td class="text-right"><?php echo $column_total_products; ?></td>
                <td class="text-right"><?php echo $column_total; ?></td>
              </tr>
            </thead>
            <tbody>
			<?php foreach($received_orders as $received_order){ ?>
				<tr>
					<td><?php echo $received_order['order_id']; ?></td>
					<td><?php echo $received_order['order_date'];?></td>
					<td><?php echo $received_order['receive_date'];?></td>
					<td>
					<?php foreach($received_order['product'] as $product){ ?>
					<?php echo implode('<br />',$product) . "<br />";?>
					<?php } ?>
					</td>
					<td>
					<?php foreach($received_order['sname'] as $supplier){ ?>
					<?php echo implode('<br />',$supplier) . "<br />";?>
					<?php } ?>
					</td>
					<td>
					<?php foreach($received_order['squantity'] as $quantity){ ?>
					<?php echo implode('<br />',$quantity) . "<br />";?>
					<?php } ?>
					</td>
					<td>
					<?php foreach($received_order['price'] as $price){ ?>
					<?php echo implode('<br />',$price) . "<br />";?>
					<?php } ?>
					</td>
					<td><?php echo $received_order['quantity'];?></td>
					<td><?php echo $received_order['total'];?></td>
				</tr>
				<?php } ?>
			  <tr>
                <td class="text-right" colspan ="8"><b><?php echo $grand_total_text; ?></b></td>
				<td class="text-left" ><?php echo $grand_total;?></td>
              </tr>
			</tbody>
          </table>
		</div>
        <div class="row">
          <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
          <div class="col-sm-6 text-right"><?php echo $results; ?></div>
        </div>
      </div>
    </div>
  </div>
 <script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});
$('#button-filter').on('click', function() {
	var url = 'index.php?route=purchase/received_orders&token=<?php echo $token; ?>';

	var date_start = $('input[name=\'date_start\']').val();

	if (date_start) {
		url += '&date_start=' + encodeURIComponent(date_start);
	}

	var date_end = $('input[name=\'date_end\']').val();

	if (date_end) {
		url += '&date_end=' + encodeURIComponent(date_end);
	}

	var supplier = $('select[name=\'supplier\']').val();
	if (supplier) {
		url += '&supplier=' + encodeURIComponent(supplier);
	}

	var product = $('select[name=\'product\']').val();

	if (product) {
		url += '&product=' + encodeURIComponent(product);
	}

	var order_id = $('input[name=\'order_id\']').val();

	if (order_id) {
		url += '&order_id=' + encodeURIComponent(order_id);
	}
	location = url;
});

$('#button-export').on('click', function() {
	var url = 'index.php?route=purchase/received_orders&token=<?php echo $token; ?>&export=1';

	var date_start = $('input[name=\'date_start\']').val();

	if (date_start) {
		url += '&date_start=' + encodeURIComponent(date_start);
	}

	var date_end = $('input[name=\'date_end\']').val();

	if (date_end) {
		url += '&date_end=' + encodeURIComponent(date_end);
	}

	var supplier = $('select[name=\'supplier\']').val();
	if (supplier) {
		url += '&supplier=' + encodeURIComponent(supplier);
	}

	var product = $('select[name=\'product\']').val();

	if (product) {
		url += '&product=' + encodeURIComponent(product);
	}

	var order_id = $('input[name=\'order_id\']').val();

	if (order_id) {
		url += '&order_id=' + encodeURIComponent(order_id);
	}
	location = url;
});

function reset_form()
{
	$('[name=date_start]').val('');
	$('[name=date_end]').val('');
	$('[name=supplier]').prop('selectedIndex', 0);
	$('[name=product]').prop('selectedIndex', 0);
	$('[name=order_id]').val('');
	
}
//--></script></div>
<?php echo $footer; ?>