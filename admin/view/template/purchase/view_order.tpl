<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
	<div class="page-header">
    <div class="container-fluid">
      <div class="pull-right"><!--<button onclick ="print_order()" data-toggle="tooltip" title="<?php echo "Print Order"; ?>" class="btn btn-info"><i class="fa fa-print"></i></button>--><!--<a href="<?php echo $shipping; ?>" target="_blank" data-toggle="tooltip" title="<?php echo $button_shipping_print; ?>" class="btn btn-info"><i class="fa fa-truck"></i></a> <a href="<?php echo $edit; ?>" data-toggle="tooltip" title="<?php echo $button_edit; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>--> <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo "Cancel Button"; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo "Orders"; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="panel panel-default" id = "print_div">
	<div class="panel-heading">
		<h3 class="panel-title">
			<i class="fa fa-info-circle"></i>
			<?php echo "Order # " . $order['order_info']['order_id']; ?>
		</h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-3">
				<label>Ordered By:</label>
			</div>
			<div class="col-lg-9"><?php echo $order['order_info']['order_by']; ?></div>
		</div>
		<div class="row">
			<div class="col-lg-3">
			<label>
				Purchase order date:
			</label>
			</div>
			<div class="col-lg-9">
				<?php echo $order['order_info']['order_date']; ?>
			</div>
		</div>
		<?php if($order['order_info']['receive_date'] != '0000-00-00'){ ?>
		<div class="row">
			<div class="col-lg-3">
				<label>Received On:</label>
			</div>
			<div class="col-lg-9">
				<?php echo $order['order_info']['receive_date']; ?>
			</div>
		</div>
		<?php } ?>
		<table class="table table-bordered" id="print_table" border="1">
          <thead>
            <tr>
              <td class="text-left" style="width: 11.11%;">Product Name</td>
              <td class="text-left" style="width: 11.11%;">Option Values</td>
			  <td class="text-left" style="width: 11.11%;">Demand</td>
			  <td class="text-left" style="width: 11.11%;">Total Received Quantity</td>
			  <td class="text-left remaining_quantity" style="width: 11.11%;">Remaining Quantity</td>
			  <td class="text-left" style="width: 11.11%;">Supplier</td>
			  <td class="text-left" style="width: 11.11%;">Quantity from supplier</td>
			  <td class="text-left" style="width: 11.11%;">Price</td>
			  <td class="text-left" style="width: 11.11%;">Total Price</td>
			</tr>
          </thead>
          <tbody>
		  <?php
			foreach($order['products'] as $product)
			{
		  ?>
            <tr>
              <td class="text-left"><?php echo $product['product_name']; ?></td>
			  <td class="text-left">
				<?php echo implode("<br />",$product['option_value_name']); ?>
			  </td>
			  <td class="text-left"><?php echo $product['quantity']; ?></td>
			  <td class="text-left"><?php if($product['received_products']!=0) echo $product['received_products']; ?></td>
			  <td class="text-left remaining_quantity"><?php echo $product['rq']; ?></td>
			  <td class="text-left">
				<?php foreach($product['suppliers'] as $supplier_id => $supplier){?>
					<?php if($supplier_id != -1){ ?>
						<?php echo $supplier . "<br />"; ?>
					<?php } ?>
				<?php } ?>
			  </td>
			  <td class="text-left">
				<?php foreach($product['squantity'] as $supplier_id => $squantity){?>
					<?php if($supplier_id != -1){ ?>
						<?php echo $squantity . "<br />"; ?>
					<?php } ?>
				<?php } ?>
			  </td>
			  <td class="text-left">
				<?php echo implode("<br />", $product['prices']); ?>
			  </td>
			  <td class="text-left">
				<?php echo implode("<br />", $product['total_sprice']); ?>
			  </td>
			</tr>
			<?php } ?>
			<tr>
				<td class="text-right" id="set_colspan" colspan="8"><b>Grand Total:</b></td>
				<td class ="text-left"><?php echo $order['order_info']['total']; ?></td>
			</tr>
			</tbody>
        </table>
		</div>
	
  </div>
  
</div>
<script type="text/javascript">
	function print_order()
	{
		var prtContent = document.getElementById("print_div");
		var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
		
		WinPrint.document.writeln('<!DOCTYPE html>');
        WinPrint.document.writeln('<html><head><title></title>');
        WinPrint.document.writeln('<style>table{border:1px; border-collapse:collapse;}');
        WinPrint.document.writeln('table, td, th {border: 1px solid black;}');
		WinPrint.document.writeln('label{font-weight:bold}');
		WinPrint.document.writeln('.text-right{text-align:right;}');
		WinPrint.document.writeln('.remaining_quantity{display:none;}');
		document.getElementById('set_colspan').setAttribute('colspan','7');
		WinPrint.document.writeln('</style></head><body>');
		WinPrint.document.write(prtContent.innerHTML);
		WinPrint.document.writeln('</body></html>');
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
	}
	
	function download_pdf()
	{
		var doc = new jsPDF();
		doc.fromHTML($('#print_div').get(0),20,20,{
			'width':5000
		});
		doc.save('test.pdf');
	}
	
	function print_order()
	{
		document.getElementById("download_pdf").style.display = "none";
        var printContents = document.getElementById('print_div').innerHTML;
        var originalContents = document.body.innerHTML;
		document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
		document.getElementById("download_pdf").style.display = "block";
    }
	
	
	function demoFromHTML() {
    var pdf = new jsPDF('l', 'pt', 'letter',true);
	//pdf.setFontSize(8);
	source = $('#print_div')[0];
	specialElementHandlers = {
        '#bypassme': function (element, renderer) {
            return true
        }
    };
    margins = {
        top: 100,
        bottom: 80,
        left: 80,
        width:1000
    };
    pdf.fromHTML(
    source,
    margins.left,
    margins.top, {
        'width': margins.width,
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {
        pdf.save('Test.pdf');
    }
	);
}
</script>
<?php echo $footer; ?>