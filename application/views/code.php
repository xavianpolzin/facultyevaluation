
<section> <!--for demo wrap-->



<div class="col-3-mx">
<div class="search-inp-h-ri-gen">
	
	<!--<input type="button" name="" placeholder="Search Code">--><img data-toggle="modal" data-target=".bs-example-modal-sm" src="public/images/gen-c.png">
</div>
</div>

<div class="col-3-mx">	
<h1>Code Generator</h1>  
</div>

<div class="col-3-mx">
<!--
<div class="search-inp-h">
<form class="searchbox" role="form" action="<?php echo base_url().'code/search_code'; ?>" method="post">
        <input type="search" placeholder="Search by name......" name="search" id="search" class="searchbox-input" onkeyup="buttonUp();" required>
        <input type="submit" class="searchbox-submit" >
        <span class="searchbox-icon"><img src="public/images/search-icon.png"></span>
    </form>
</div>-->
</div>

<div class="clearFixed"></div>


<div  class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
  <thead>
					  <tr>
						<th>#</th>
						<th>Name</th>
						<th>Description</th>
						<th>Option</th>
					  </tr>
  </thead>
</table>
</div>
<div  class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>

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

  </tbody>
</table>
</div>

</section>

<div class="dl-btn-co">
	<button>Download All For Printing Code</button>
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


  $(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }
</script>
