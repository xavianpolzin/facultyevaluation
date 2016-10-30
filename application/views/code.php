


			  
			</div>
         
        </div><!--ends login_form-->



<div class="admin-welcome-page">
    <div class="helper-ver">
        <div class="st-wel-admin">
           <div class="ad-frm-con">
           		<h4>Code Generator </h4>
           		<h5><a href="" data-toggle="modal" data-target=".bs-example-modal-sm" >+ Generate Code</a></h5>
           		<form role="form" action="<?php echo base_url().'code/search_code'; ?>" method="post">
					<div class="form-group">
						<input type="text" class="form-contorl" name="search" id="search" placeholder="Search by Code ">
					</div>


					<button type="submit" class="btn btn-info" name="submit">Search</button>
				</form>

				<div class="prc-bu">
				<input type="button" value="Print Code" name="">
           		</div>
           		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-sm">
				    <div class="modal-content" id="generateFormWrapper" style="padding:50px;background:transparent;border:none;background:#f3f3f3;">
					    <div id = "generateFormWrapper">
					    <form role="form" id="generateForm"  action="<?php echo base_url() ?>code/generate" method="get">
						  <div class="form-group">
						    <label for="exampleInputValueofCode">Value of Codes</label>
						    <input type="text" class="form-control" id="count" name="count" placeholder="Enter value here">
						    <center>
						    <input type="submit" value="Generate" style="border:none;background:#428bca; margin:10px; padding:10px 25px; color:#fff; font-size:12px;">
						    </center>
						  </div><!--ends form-group-->
					  </form><!--ends form-->
				   </div>

				    </div><!--ends modal-content-->
				  </div><!--ends modal-dialog-->
				</div>
				<div style="overflow-x: auto;">
					<table>
					  <tr>
						<th>#</th>
						<th>Code</th>
						<th>Date</th>
						<th>Status</th>
			
					  </tr>
					  <?php $counter = 1; ?>
				<?php foreach($codes as $code): ?>
				<tr>
					<td><?php echo $counter; ?></td>
					<td><?php echo $code->code; ?></td>
					<td><?php echo $code->createdOn; ?></td>
					<td><?php echo $code->status; ?></td>
				</tr>	
				<?php $counter++; ?>
			<?php endforeach; ?>

					</table>
					<center>
				  	<ul class="pagination">

					 	 <p><?php echo $links; ?></p>

					</ul>
				</center>
			   </div>
           </div>
        </div>
        
        <div class="con-fo">
    	<h2>&copy;Faculty Evaluation 2016</h2>	
   	  </div>
    </div>
</div><!--ends admin-welcome-page-->





<script src="<?php echo base_url() ?>public/js/jquery.form.js"></script> 
<script>


 $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#generateForm').ajaxForm(function() { 
            	 $('#generateFormWrapper').hide();
            	 //$('#finalizeFormWrapper').show();
                    ajax_download('<?php echo base_url() ?>code/printpreview', {'para1': 1, 'para2': 2}, 'dataname');

            }); 
        }); 



function ajax_download(url, data, input_name) {
    var $iframe,
        iframe_doc,
        iframe_html;

    if (($iframe = $('#download_iframe')).length === 0) {
        $iframe = $("<iframe id='download_iframe'" +
                    " style='display: none' src='about:blank'></iframe>"
                   ).appendTo("body");
    }

    iframe_doc = $iframe[0].contentWindow || $iframe[0].contentDocument;
    if (iframe_doc.document) {
        iframe_doc = iframe_doc.document;
    }

    iframe_html = "<html><head></head><body><form method='POST' action='" +
                  url +"'>" +
                  "<input type=hidden name='" + input_name + "' value='" +
                  JSON.stringify(data) +"'/></form>" +
                  "</body></html>";

    iframe_doc.open();
    iframe_doc.write(iframe_html);
    $(iframe_doc).find('form').submit();
}
</script>
