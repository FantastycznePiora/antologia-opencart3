<style type="text/css">
	thead tr td{
		font-weight:bold;
	}
	.table-responsive thead td {
    background: #eeeeee none repeat scroll 0 0;
    padding: 5px !important;
    text-align: center;
	border-bottom:2px solid #cccccc;
}
.table-responsive tbody td {
    padding: 5px !important;
	line-height: 1.7;
}
.panel-heading {
    background: #eeeeee none repeat scroll 0 0;
}
.page-header{
	text-align:center;
}
.table.table-bordered tbody tr:nth-child(2n) {
    background-color: #eeeeee !important;
}


.header{
	width: 100%;
}
.logo{
	width: 25%;
	float:left;
	margin-top:20px !important;
}
.company{
	width: 72%;
	float:right;
	margin-top:20px !important;
}
.logo img, .company_info p{
	width:100%;
}
.company h2{
	float:right;
}
.panel-heading{
	display:none;
}
.table-bordered, .table-bordered td {
    border: 1px solid #dddddd;
	border-collapse:collapse;
}
.company_info p{
	width: 100%;
	font-weight: bold;
	margin:0px;
}
.company_info p span{
	font-size:12px;
}
.date span{
	float:right;
}

/*mail type*/
.mail_type{
	width:100%;
}
.mail{
	float:left;
	width:50%;
}
.type{
	float:right;
	width:30%;
	font-weight:bold;
	font-size:12px;
}
.type span{
	float:right;
	font-size:12px;
	font-weight:normal;
}
/*mail type*/

.owner-date{
	width: 100%;
}
.owner{
	float:left;
	width: 50%;
}
.date{
	float:right;
	width: 17%;
	font-weight: bold;
	font-size:12px;
}
.date span{
	float:right;
	font-size:12px;
	font-weight:normal;
}
table{
	margin:10px auto;
	width:100%;
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	text-align:center;
}
td{
	width:auto;
}
p{
	font-size:12px;
}
p span{
	font-weight:normal;
}
#content{
	font-family:Verdana, Geneva, sans-serif;
}
.footer{
	width:100%;
}
.address
{
	width:70%;
	float:left;
}
.pageno{
	width:4%;
	float:right;
}
</style>

<div id="content">
  
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bar-chart"></i> <?php echo $inout_text_list; ?></h3>
      </div>
	  
	  
	  <div class="company_info">
      	<p>Company Owner: <span><?php echo $company_owner?></span></p>
		<div class="mail_type">
			<div class="mail"><p>Company Email: <span><?php echo $company_email?></span></p></div>
			<div class="type">Report Type:<span><?php echo $inout_heading_title ;?></span></div>
		</div>
		<p>Date: <span><?php echo date('Y-m-d');?></span></p>
      </div><br />
	  
      <div class="panel-body">
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
					<td><?php echo $inout_detail['name']; ?></td>
					<td><?php echo $inout_detail['pquantities']; ?></td>
					<td><?php echo $inout_detail['squantities']; ?></td>
				</tr>
				<?php } ?>
            </tbody>
          </table>
		</div>
        
      </div>
    </div>
  </div>