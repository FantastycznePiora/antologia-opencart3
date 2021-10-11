<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <h1><?php echo $inout_heading_title; ?></h1>
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
        <h3 class="panel-title"><i class="fa fa-bar-chart"></i> <?php echo $inout_text_list; ?></h3>
      </div>
      <div class="panel-body">
	  <form id="filter_form" action = "<?php echo $filter; ?>" method="post" enctype="multipart/form-data">
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
		</div>
		<div class="row">
			<div class="col-sm-6">
              <div class="form-group">
                <label class="control-label" for="input-product"><?php echo $entry_product; ?></label>
                <div class="input-group">
                  <span class="input-group-btn">
					<select class="form-control" name="product">
						<option value="">--product--</option>
						<?php foreach($products as $product){
						?>
						<option <?php if($product == $fproduct){?>selected="selected"<?php } ?>><?php echo $product; ?></option>
						<?php
						}?>
					</select>
                  </span></div>
              </div>
            </div>
		</div>
		  <div class="row">
				<div class="col-sm-12">
				  <button type="button" onclick="resetForm()" id="clear-filter" class="btn btn-primary pull-right"> <?php echo $button_clear; ?></button>
				  <button style="margin-right:10px;" type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i> <?php echo $button_filter; ?></button>
				</div>
		  </div>
        </div>
		</form>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
			  <tr>
                <td class="text-left"><?php echo $column_product_name; ?></td>
                <td class="text-left"><?php echo $column_instock; ?></td>
				<td class="text-right"><?php echo $column_outstock; ?></td>
              </tr>
            </thead>
            <tbody>
				<?php foreach($inout_details as $inout_detail){ ?>
				<tr>
					<td><span data-toggle="tooltip"><?php echo $inout_detail['name']; ?></span></td>
					<td><span data-toggle="tooltip"><?php echo $inout_detail['pquantities']; ?></span></td>
					<td><span data-toggle="tooltip"><?php echo $inout_detail['squantities']; ?></span></td>
				</tr>
				<?php } ?>
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
	var url = 'index.php?route=purchase/stock_report/stockInout&token=<?php echo $token; ?>';

	var date_start = $('input[name=\'date_start\']').val();

	if (date_start) {
		url += '&date_start=' + encodeURIComponent(date_start);
	}

	var date_end = $('input[name=\'date_end\']').val();

	if (date_end) {
		url += '&date_end=' + encodeURIComponent(date_end);
	}

	var product = $('select[name=\'product\']').val();

	if (product) {
		url += '&product=' + encodeURIComponent(product);
	}

	location = url;
});

$('#button-export').on('click', function() {
	var url = 'index.php?route=purchase/stock_report/stockInout&token=<?php echo $token; ?>&export=1';

	var date_start = $('input[name=\'date_start\']').val();

	if (date_start) {
		url += '&date_start=' + encodeURIComponent(date_start);
	}

	var date_end = $('input[name=\'date_end\']').val();

	if (date_end) {
		url += '&date_end=' + encodeURIComponent(date_end);
	}

	var product = $('select[name=\'product\']').val();

	if (product) {
		url += '&product=' + encodeURIComponent(product);
	}

	location = url;
});


function resetForm()
{
	$('[name=date_start]').val('');
	$('[name=date_end]').val('');
	$('[name=product]').prop('selectedIndex', 0);
}
//--></script></div>
<?php echo $footer; ?>