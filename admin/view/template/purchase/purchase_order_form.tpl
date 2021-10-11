<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="button" onclick="submit_mail()" form="form-product" data-toggle="tooltip" title="<?php echo "Save Button"; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo "Cancel Button"; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if (isset($_SESSION['errors'])) { ?>
    <div class="alert alert-danger">
		<i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION['errors']; unset($_SESSION['errors']);?>
		<br/><i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION['quantity_error']; unset($_SESSION['quantity_error']);?>
		<br/><i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION['manual_product_error']; unset($_SESSION['manual_product_error']);?>
		<br/><i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION['required']; unset($_SESSION['required']);?>
	 <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $form_caption; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" name="order_form" id="form-product" class="form-horizontal">
          <div class="tab-content">
            <div class="tab-pane" style="display:block; visibility: visible;" id="tab-discount">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-lg-3 pull-right form-group">
						<label><?php echo $supplier_text; ?></label>
						<select class="form-control" id="input-supplier" name="supplier_id">
							<option>--Supplier--</option>
							<?php foreach($suppliers as $supplier){ ?>
							<option value="<?php echo $supplier['id']?>" <?php if(isset($supplier_id)){ if($supplier_id == $supplier['id']){ ?>selected = "selected"<?php } } ?>><?php echo $supplier['first_name'] . " " . $supplier['last_name']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
              <div class="table-responsive">
                <table id="discount" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left required"><?php echo $product_text; ?></td>
                      <td class="text-right required"><?php echo $quantity_text; ?></td>
                      <td class="text-right"><?php echo $option_text; ?></td>
                      <td class="text-right"><?php echo $option_value_text; ?></td>
					  <td class="text-right"></td>
                      <td></td>
                    </tr>
                  </thead>
				  <?php if(!isset($error_bit)){?>
                  <tbody>
                    <tr id="discount-row">
                      <td class="text-left dynamic-rowspan">
					  <input type="text" data-validate="required" onfocus="autoComplete(this,this.id)" name="product[1][name]" value="" placeholder="Product" id="1" class="form-control" />
					  </td>
					  <td class="text-right dynamic-rowspan"><input data-validate="required" type="text" name="product[1][quantity]" value=""placeholder="" class="form-control" /></td>
                      <td class="text-left">
					  <select name="product[1][options][]" class="form-control" onchange="loadRelatedOptionValues(this)">
                          <option value="" selected="selected">--Product Options--</option>
						  <?php
							foreach($all_options as $all_option)
							{
						  ?>
								<option value="<?php echo $all_option['option_id'] .'_'. $all_option['name']; ?>"><?php echo $all_option['name']; ?></option>
						  <?php
							}
						  ?>
                      </select>
					  
					  </td>
                      <td class="text-left">
					  <select name="product[1][option_values][]" class="form-control attribute">
                          <option value="" selected="selected">--Option Values--</option>
                      </select>
					  </td>
					  <td class=""><button type="button" id="1" onclick="addAttribute(this,this.id);" data-toggle="tooltip" title="<?php echo "Add Attribute Button"; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>
                      <td class=""><button type="button" onclick="removeProduct(this)" data-toggle="tooltip"  title="<?php echo "Remove Product Button" ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
					</tr>
                  </tbody>
				  <?php }else{ ?>
				  <?php $product_count = 1;?>
				  <?php foreach($products as $product){?>
				   <tr id="discount-row">
                      <td class="text-left dynamic-rowspan">
					  <input type="text" data-validate="required" onfocus="autoComplete(this,this.id)" name="product[<?php echo $product_count; ?>][name]" value="<?php if(!empty($product['name'])) echo $product['name']; ?>" placeholder="Product" id="<?php echo $product_count; ?>" class="form-control" />
					  <?php if(!empty($product['id'])){ ?>
					  <input type="hidden" name="product[<?php echo $product_count;?>][id_name]" value="<?php echo $product['id'] . "_" . $product['name']; ?>">
					  <?php } ?>
					  </td>
					  <td class="text-right dynamic-rowspan"><input data-validate="required" type="text" name="product[<?php echo $product_count; ?>][quantity]" value="<?php echo $product['quantity']; ?>"placeholder="" class="form-control" /></td>
                      <td class="text-left">
					  <select name="product[<?php echo $product_count; ?>][options][]" class="form-control" onchange="loadRelatedOptionValues(this)">
                          <option value="" selected="selected">--Product Options--</option>
						  <?php
							foreach($all_options as $all_option)
							{
						  ?>
								<option value="<?php echo $all_option['option_id'] .'_'. $all_option['name']; ?>" <?php if($product['options'][0]==$all_option['option_id']){ ?>selected="selected"<?php } ?>><?php echo $all_option['name']; ?></option>
						  <?php
							}
							?>
                      </select>
					  
					  </td>
					  <td class="text-left">
					  <select name="product[<?php echo $product_count; ?>][option_values][]" class="form-control attribute">
                          <option value="">--Option Values--</option>
							<?php foreach($product['all_options_values'][0] as $all_option_value){ ?>
						  <option value="<?php echo $all_option_value['option_value_id'] .'_'. $all_option_value['name']; ?>" <?php if($all_option_value['option_value_id']==$product['option_values'][0]){ ?>  selected="selected" <?php } ?>><?php echo $all_option_value['name']; ?></option>
						  <?php } ?>
					  </select>
					  </td>
					  <td class="">
					  <?php
						if (count($product['options']) != 1) {
					  ?>
						<button type="button" onclick="removeAttributes(this)" data-toggle="tooltip" title="Remove Button" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>
					  <?php
						}else{
						?>
						<button type="button" id="<?php echo $product_count; ?>" onclick="addAttribute(this,this.id)" data-toggle="tooltip" title="Add Button" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>
					<?php
						}
					  ?>
					  </td>
                      <td class=""><button type="button" onclick="removeProduct(this)" data-toggle="tooltip"  title="<?php echo "Remove Product Button" ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
					</tr>
				  
				  <?php $count = count($product['options'])-1;?>
				  <?php for($i=1; $i<=$count; $i++){ ?>
				  <tr id="option-row">
					  <td class="text-left" style="border-width:0px; background-color:white;"></td>  
					  <td class="text-left" style="border-width:0px; background-color:white;"></td>
					  <td class="text-left">
						  <select name="product[<?php echo $product_count; ?>][options][]" class="form-control" onchange="loadRelatedOptionValues(this)">
							  <option value="">--Product Options--</option>
							   <?php
								foreach($all_options as $all_option)
								{
								?>
								<option value="<?php echo $all_option['option_id'] .'_'. $all_option['name']; ?>" <?php if($product['options'][$i]==$all_option['option_id']){ ?>selected="selected"<?php } ?>><?php echo $all_option['name']; ?></option>
								<?php
								}
								?>
						  </select>
					  </td>
					  <td class="text-left">
						  <select name="product[<?php echo $product_count; ?>][option_values][]" class="form-control attribute">
							<option value="">--Option Values--</option>
							<?php foreach($product['all_options_values'][$i] as $all_option_value){ ?>
						  <option value="<?php echo $all_option_value['option_value_id'] .'_'. $all_option_value['name']; ?>" <?php if($all_option_value['option_value_id']==$product['option_values'][$i]){ ?>  selected="selected" <?php } ?>><?php echo $all_option_value['name']; ?></option>
						  <?php } ?>
						  </select>
					  </td>
					  <td class="">
						<?php if($i==$count){ ?>
						<button type="button" id="<?php echo $product_count; ?>" onclick="addAttribute(this,this.id)" data-toggle="tooltip" title="Add Button" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>
						<?php }else{
						?>
						<button type="button" onclick="removeAttributes(this)" data-toggle="tooltip" title="Remove Button" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>
						<?php
						} ?>
					  </td>
				  </tr>
				  <?php } ?>
				  
				  
				  <?php $product_count++; ?>
				  <?php } ?>
				  <?php } ?>
                  <tfoot>
					
					<tr>
                      <td colspan="5" style="text-align:right;"><b><?php echo $add_text;?></b></td>
                      <td class=""><button type="button" onclick="addProduct();" data-toggle="tooltip" title="<?php echo $add_text; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  <?php if(isset($products)){ ?>
  var products = <?php echo count($products); ?>;
  <?php }else{ ?>
  var products = 1;
  <?php } ?>
function addProduct() {
	products++;
    html  = '<tr id="discount-row">';
    html += '  <td class="text-left dynamic-rowspan"><input type="text" data-validate="required" onfocus="autoComplete(this,this.id)" name="product['+products+'][name]" value="" placeholder="Product" id="'+products+'" class="form-control" /></td>';
	html += '  <td class="text-right dynamic-rowspan"><input data-validate="required" type="text" name="product['+products+'][quantity]" value="" placeholder="" class="form-control" /></td>';
    html += '  <td class="text-left"><select name="product['+products+'][options][]" class="form-control" onchange="loadRelatedOptionValues(this)">';
    html += '<option value="">--Product Options--</option>'
	<?php foreach($all_options as $all_option){
	?>
	html += '    <option value="<?php echo $all_option['option_id'] .'_'. $all_option['name']; ?>"><?php echo $all_option['name']; ?></option>';
	<?php
	}
	?>
    html += '  </select></td>';
	html += '  <td class="text-left"><select name="product['+products+'][option_values][]" class="form-control attribute">';
    html += '    <option value="">--Option Values--</option>';
    html += '  </select></td>';
	html += '<td class=""><button type="button" id="'+products+'" onclick="addAttribute(this,this.id);" data-toggle="tooltip" title="<?php echo "Add Product Button"; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';
	html += '  <td class="text-left dynamic-rowspan"><button type="button" onclick="removeProduct(this)" data-toggle="tooltip" title="<?php echo "Remove Button" ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
	html += '</tr>';
	html += '<tr>';
	html += '</tr>';

	$('#discount tbody').append(html);
}
  function autoComplete(evnt,product){
	  $(evnt).autocomplete({
		'source': function(request, response) {
			$.ajax({
				url: 'index.php?route=purchase/purchase_order/autocomplete&token=<?php echo $token; ?>&product_name=' +  encodeURIComponent(request),
				dataType: 'json',
				success: function(json) {
					response($.map(json, function(item) {
						return {
							label: item['name'],
							value: item['product_id']
						}
					}));
				}
			});
		},
		'select': function(item) {
			$(evnt).val(item['label']);
			$(evnt).after('<input type="hidden" name="product['+product+'][id_name]" value="'+item['value'] +'_'+item['label']+'">');
		}
	});
}
function removeAttributes(evnt)
{
	$(document).ready(function()
    {
	   var attribute = '';
	   if($(evnt).parent().prev().prev().prev().children('input').attr('name'))
	   {
		   attribute = $(evnt).parent().prev().prev().prev().children('input').attr('name');
	   }
	   else
	   {
		   attribute = $(evnt).parent().prev().prev().prev().prev().prev().children('input').attr('name');
	   }
	   if(attribute)
	   {
		   var col2 =$(evnt).parent().parent().next().children('td:eq( 2 )').html();
		   var col3 =$(evnt).parent().parent().next().children('td:eq( 3 )').html();
		   var col4 =$(evnt).parent().parent().next().children('td:eq( 4 )').html();
		   $(evnt).parent().parent().next().remove();
		   $(evnt).parent().prev().prev().html(col2);
		   $(evnt).parent().prev().html(col3);
		   $(evnt).parent().html(col4);
		   
		}
	   else{
		   $(evnt).parent().parent().remove();
	   }
    });
}
function removeProduct(evnt)
{
	$(document).ready(function()
    {
	   $(evnt).parent().parent().nextUntil("#discount-row").remove();
	   $(evnt).parent().parent().remove();
	});
}
//add attributes function

function addAttribute(evnt,product)
{
	html = '';
	html  = '<tr id="option-row">';
    html += '  <td class="text-left" style="border-width:0px; background-color:white;"></td>';
	html += '  <td class="text-left" style="border-width:0px; background-color:white;"></td>';
	html += '  <td class="text-left"><select name="product['+product+'][options][]" class="form-control" onchange="loadRelatedOptionValues(this)">';
    html += '<option value="">--Product Options--</option>';
	<?php
		foreach($all_options as $all_option)
		{
	?>
	html += '	<option value="<?php echo $all_option['option_id'] .'_'. $all_option['name']; ?>"><?php echo $all_option['name']; ?></option>'	;
	<?php
		}
	?>
	html += '  </select></td>';
	html += '  <td class="text-left"><select name="product['+product+'][option_values][]" class="form-control attribute">';
    html += '    <option value="">--Option Values--</option>';
    html += '  </select></td>';
    html += '  <td class=""><button type="button" id="'+product+'" onclick="addAttribute(this,this.id);" data-toggle="tooltip" title="<?php echo "Add Attribute Button" ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';
    html += '  <td class="text-left" style="border-width:0px;></td>';
	html += '  <td class="text-left" style="border-width:0px;></td>';
	html += '</tr>';
	$(evnt).parent().parent().after(html);
	button = '<button type="button" onclick="removeAttributes(this)" data-toggle="tooltip" title="<?php echo "Remove Button" ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>';
	$(evnt).parent().html(button);
}
/*load related option values starts here*/

function loadRelatedOptionValues(evnt)
{
	$(document).ready(function()
    {
		var option_id = $(evnt).val();
		$.ajax({
		url: 'index.php?route=purchase/purchase_order/getRelatedOptionValues&token=<?php echo $token; ?>&option_id=' + option_id,
		type: 'post',
		dataType: 'json',
		data: 'option_id=' + option_id,
		success: function(json) {
			var option_values = new Array();
			var option_value_ids = new Array();
			var html = '<option value="">--Option Values--</option>';
			var i = 0;
			var j = 0;
			for(var option_value in json.option_values)
			{
				option_values[i] = json.option_values[option_value];
				i++;
			}
			for(var option_value_id in json.option_value_ids)
			{
				option_value_ids[j] = json.option_value_ids[option_value_id];
				j++;
			}
			for(var i = 0; i < option_values.length; i++)
			{
				html += '<option value="'+option_value_ids[i]+"_"+option_values[i]+'">'+option_values[i]+'</option>';
			}
			if(json == "0")
			{
				$(evnt).parent().parent().children('td').children('select.attribute').children().remove();
				$(evnt).parent().parent().children('td').children('select.attribute').append(html);
			}
			else
			{
				$(evnt).parent().parent().children('td').children('select.attribute').children().remove();
				$(evnt).parent().parent().children('td').children('select.attribute').append(html);
			}
		}
	});
    });
}

/*load related option values ends here*/
</script>
  <script type="text/javascript">
  function submit_mail()
  {
	  /*var supplier_id = $("#input-supplier").val();
	  if(supplier_id != "--Supplier--")
	  {
			if (confirm('Do you want to mail the order?')) 
			{
				$("#form-product").append("<input type='hidden' name='mail_bit' value='1'>");
			} 
			else
			{
				alert('Mail is not sent');
			}
	  }*/
	  
	  $("#form-product").submit();
  }
</script>
  <script type="text/javascript"><!--
$('#language a:first').tab('show');
$('#option a:first').tab('show');
//--></script></div>
<?php echo $footer; ?>
