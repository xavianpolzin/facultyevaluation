<div class="row">
	<div class="col-md-4">
<center>

</center>
	</div><!--ends col-md-6-->

	<div class="prf-st-n">

		<ul class="nav nav-tabs" style="margin-bottom: 15px;">
		  <li style="width: 49%;" class=""><a href="<?php echo base_url()?>faculty/profile/<?php echo $faculty->firstName . '.'  . $faculty->id ?>" >Profile</a></li>
		  <li class="active"><a href="<?php echo base_url()?>faculty/schedule/<?php echo $faculty->firstName . '.'  . $faculty->id ?>">Schedule</a></li>
		</ul>

<div id="myTabContent" class="tab-content">


<!--Profile content-->





  <!--Schedule content-->
  <div class="tab-pane fade active in" id="Schedule" >



            <div class="form-group sch-a">
             	 <div class="table-responsive" style="border:1px solid #cccccc;border-radius:5px; padding:15px; ">
			  <table class="table">
			  <h3>Schedule</h3>
			 	 <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="float:left!important;background:transparent;border:none;">
			 	 	<span class="glyphicon glyphicon-plus">

			 	 	</span> Add
			 	 </a>




					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
				  <div class="modal-dialog" >

				  	  <div class="modal-content" style="padding:20px;width:575px;color:#000;">
					    <div class="row">

							   <div class="col-md-12">

									<form role="form" method="post" action="">

									  <div class="form-group">
									  	<div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Add Schedule</h4>
						      </div>
									    <label for="daysinput">Days</label>

									    <br>
									    <label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox1" name="days[]" value="1"> Monday
										</label>

										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox2" name="days[]" value="2"> Tuesday
										</label>

										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox3" name="days[]" value="4"> Wednesday
										</label>

										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox4" name="days[]" value="8"> Thursday
										</label>

										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox5" name="days[]" value="16"> Friday
										</label>

										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox6" name="days[]" value="32"> Saturday
										</label>

									  </div>

									  <div class="form-group" style="margin-top:40px;">




									   <div class="form-group" style="margin-top:40px;">
									   	<i style="color:rgb(255, 158, 158)">Please dont forget to put AM or PM</i>

									  	 <div>

									  	 	<div class="time-holder">
											    <label for="time">From Time</label>
											    <input type="text" class="form-control" id="from_time" name="from_time" placeholder="Input Time">
											</div>

											<div class="time-holder">
											    <label for="time">To Time</label>
											    <input type="text" class="form-control" id="to_time" name="to_time" placeholder="Input Time">
											</div>
											<br>
											  <input type="submit" class="btn btn-default" value="Submit" style="position:relative; top:5px;"></input>

											</div>
										</div>
									</form>


					   </div><!--ends row-->
				    </div><!--ends modal-content-->
				  </div><!--ends modal-dialog-->
				</div>


				<tr style="background:#428bca;">
					<th>#</th>
					<th>Days</th>
					<th>Time</th>
					<th>Option</th>
				</tr>

				<?php $i = 1;?>

				<?php foreach($schedules as $sched): ?>
				<tr>
					<td style="color: #333;"><?php echo $i; ?></td>

					<?php $i++; ?>

					<td>

						<?php
							$daysName = '';


							if((1 & $sched->days) > 0) $daysName .= 'MON - ';


							if((2 & $sched->days) > 0) $daysName .= 'TUE - ';


							if((4 & $sched->days) > 0) $daysName .= 'WED - ';

							if((8 & $sched->days) > 0) $daysName .= 'TH - ';

							if((16 & $sched->days) > 0) $daysName .= 'FRI - ';


							if((32 & $sched->days) > 0) $daysName .= 'SAT - ';

							echo substr($daysName,0,-2);

						?>


					</td>
					<td><?php echo $sched->from_time .' - ' . $sched->to_time ?></td>

					<td>



					<!--MODAL FOR EDIT SCHEDULE-->

						<a href="" class="" data-toggle="modal" data-target="#schedModal<?php echo $sched->id; ?>" >
							Edit
							</a>-

					<a href="<?php echo base_url() ?>schedule/delete/	<?= $fnameId ?>?id=<?=$sched->id ?>">Delete</a>
						<!-- Modal -->
						<div class="modal fade" id="schedModal<?php echo $sched->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content" style="padding:20px;width:575px;color:#000;">
						    <form role="form" method="post" action="">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Edit Schedule</h4>
						      </div>






						      <label for="daysinput">Days</label>

									    <br>
									    <label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox1" <?php if((1 & $sched->days) > 0) echo "checked" ;?> name="days[]" value="1"> Monday
										</label>

										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox2"  <?php if((2 & $sched->days) > 0) echo "checked" ;?> name="days[]" value="2"> Tuesday
										</label>

										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox3"  <?php if((4 & $sched->days) > 0) echo "checked" ;?> name="days[]" value="4"> Wednesday
										</label>

										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox4"  <?php if((8 & $sched->days) > 0) echo "checked" ;?> name="days[]" value="8"> Thursday
										</label>

										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox5"  <?php if((16 & $sched->days) > 0) echo "checked" ;?> name="days[]" value="16"> Friday
										</label>

										<label class="checkbox-inline">
										  <input type="checkbox" id="inlineCheckbox6"  <?php if((32 & $sched->days) > 0) echo "checked" ;?>  name="days[]" value="32"> Saturday
										</label>










									   <div class="form-group" style="margin-top:40px;">
									   	<i style="color:rgb(255, 158, 158)">Please dont forget to put AM or PM</i>

									  	 <div>

									  	 	<div class="time-holder">
											    <label for="time">From Time</label>
											    <input type="text" class="form-control" id="from_time" name="from_time" placeholder="Input Time" value="<?php echo $sched->from_time?>">
											</div>

											<div class="time-holder">
											    <label for="time">To Time</label>
											    <input type="text" class="form-control" id="to_time" name="to_time" placeholder="Input Time" value="<?php echo $sched->to_time?>">
											</div>
											<br>
											  <input type="submit" class="btn btn-default" value="Submit" style="position:relative; top:5px;"></input>

											</div>
										</div>
									</form>





						      </div>

						    </div>
						  </div>
						</div>


					</td>

					</tr>
				<?php endforeach; ?>
			  </table>
			</div>

  </div>

</div>
	</div><!--ends col-md-6-->
</div>
 <link href="<?php echo base_url(); ?>/public/css/jquery.timepicker.css" rel="stylesheet" media="screen">
<script src="<?php echo base_url() ?>/public/js/jquery.timepicker.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){


		$('#from_time').timepicker();
		$('#from_time').on('changeTime', function() {
		    //$('#onselectTarget').text($(this).val());
		});

		$('#to_time').timepicker();
		$('#to_time').on('changeTime', function() {
		    //$('#onselectTarget').text($(this).val());
		});



	});

</script>
