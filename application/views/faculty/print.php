<table>
	<tbody>
		<tr>
				<td>Name: <?php  echo $faculty->firstName .' ' . substr($faculty->middleName,0,1). '. ' . $faculty->lastName ?></td>
				</tr>
				 <tr>
				 <td>School Year / Semester :

			<?php foreach($faculty->semester as $semester): ?>

				<?=$semester->name; ?>st Semester,

<?php endforeach; ?>
</td>
</tr>

    <tr><td>Subject Handled : 
		<?php foreach($faculty->subjects as $subject): ?>

		<?= $subject->name; ?>,

	<?php endforeach; ?>
	</td>
      </tr>

       <tr>
    <td>Course Handled :
			<?php foreach($faculty->courses as $course): ?>

				<?=$course->name; ?>,

			<?php endforeach; ?>
			</td>
		 </tr>
    <tr>
    <td>Section Handled :

			<?php foreach($faculty->sections as $section): ?>

				<?= $section->name; ?>,

			<?php endforeach; ?>
		</td>	
		</tr>
	</tbody>

</table>
 <label for="subject">Faculty Evaluation Result : </label>

						<!-- Modal -->
						<div class="modal fade bs-example-modalb-lg" id="myModal<?php echo $faculty->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

						  <div class="modal-dialog modal-lg" style="width:1300px;">
						    <div class="modal-content" style="color:#000;">

						    <div class="col-md-6">



							     <div class="table-responsive" style="border:1px solid #cccccc;border-radius:5px; padding:15px; background:#fff; ">
									  <table class="table">
									  <h3>PROFESSIONAL RESPONSIBILITIES - (Faculty)</h3>

										<tr style="background:#428bca;">
											<th>Qeustion #</th>
											<th>Never</th>
											<th>Strongly Disagree</th>
											<th>Disagree</th>
											<th>Neutral</th>
											<th>Agree</th>
											<th>Strongly Agree</th>
											<th>Total</th>
										</tr>
										<?php $counter = 1; ?>
										<?php $profTotal = 0; ?>

										<?php foreach($faculty->profAnswers as $profAnswer): ?>
										<tr>
											<td><?php echo $counter; ?></td>

											<td style="color:#333"><?php echo $profAnswer[0]; ?></td>
											<td style="color:#333"><?php echo $profAnswer[1]; ?></td>
											<td style="color:#333"><?php echo $profAnswer[2]; ?></td>
											<td style="color:#333"><?php echo $profAnswer[3]; ?></td>
											<td style="color:#333"><?php echo $profAnswer[4]; ?></td>
											<td style="color:#333"><?php echo $profAnswer[5]; ?></td>
											<?php $profTotal+= array_sum($profAnswer); ?>
											<td style="color:#333"><?php echo array_sum($profAnswer); ?></td>
											<?php $counter++; ?>

										</tr>
										<?php endforeach; ?>
										<tr style="background:#428bca;">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>Total</td>
											<th><?php echo $profTotal; ?></th>
										</tr>
									  </table>
								<div>Total/Items <br> Overall Rate: <?php echo $profTotal ?>/15 = <?php echo $profTotal/15; ?></div>

								</div> <!--ends table-responsive-->


						      </div>

						    </div><!--ends col-md-6-->

						    <div class="col-md-6">


						      <div class="modal-body" style="color:#000;">


								  </div>
						      	<div class="table-responsive" style="border:1px solid #cccccc;border-radius:5px; padding:15px;color:#000; background: #fff; ">
									  <table class="table">
									  <h3>INSTRUCTIONAL RESPONSIBILITIES - (Faculty)</h3>

									  <tr style="background:#428bca;">

											<th>Qeustion #</th>
											<th>Never</th>
											<th>Strongly Disagree</th>
											<th>Disagree</th>
											<th>Neutral</th>
											<th>Agree</th>
											<th>Strongly Agree</th>
											<th>Total</th>
										</tr>
										<?php $counter = 1; ?>
										<?php $instructTotal = 0; ?>
										<?php foreach($faculty->instructAnswers as $instructAnswer): ?>
										<tr>
											<td style="color:#333"><?php echo $counter; ?></td>
											<td style="color:#333"> <?php echo $instructAnswer[0]; ?></td>
											<td style="color:#333"><?php echo $instructAnswer[1]; ?></td>
											<td style="color:#333"><?php echo $instructAnswer[2]; ?></td>
											<td style="color:#333"><?php echo $instructAnswer[3]; ?></td>
											<td style="color:#333"><?php echo $instructAnswer[4]; ?></td>
											<td style="color:#333"><?php echo $instructAnswer[5]; ?></td>
											<?php $instructTotal+= array_sum($instructAnswer); ?>
											<td style="color:#333"><?php echo array_sum($instructAnswer); ?></td>
											<?php $counter++; ?>

										</tr>
										<?php endforeach; ?>
										<tr style="background:#428bca;">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>

											<td>Total</td>
											<th><?php echo $instructTotal; ?></th>
										</tr>



						      </div>

									  </table>
							<div>Total/Items <br> Overall Rate: <?php echo $instructTotal ?>/15 =<?php echo $instructTotal/15; ?></div>
								</div> <!--ends table-responsive-->


						    </div><!--ends col-md-6-->
						    </div>
						  </div>

						</div>

<!-Student evaluation hereee.------------------------------->
						<div class="modal fade bs-example-modalb-lg" id="myModal<?php echo $faculty->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

						  <div class="modal-dialog modal-lg" style="width:1300px;">
						    <div class="modal-content" style="color:#000;">

						    <div class="col-md-6">



							     <div class="table-responsive" style="border:1px solid #cccccc;border-radius:5px; padding:15px; background:#fff; ">
									  <table class="table">
									  <h3>PROFESSIONAL RESPONSIBILITIES - (Student)</h3>

										<tr style="background:#428bca;">
											<th>Qeustion #</th>
											<th>Never</th>
											<th>Strongly Disagree</th>
											<th>Disagree</th>
											<th>Neutral</th>
											<th>Agree</th>
											<th>Strongly Agree</th>
											<th>Total</th>
										</tr>
										<?php $counter = 1; ?>
										<?php $profTotalStudent =0; ?>

										<?php foreach($faculty->profAnswersStudent as $profAnswerStudent): ?>
										<tr>
											<td><?php echo $counter; ?></td>

											<td style="color:#333"><?php echo $profAnswerStudent[0]; ?></td>
											<td style="color:#333"><?php echo $profAnswerStudent[1]; ?></td>
											<td style="color:#333"><?php echo $profAnswerStudent[2]; ?></td>
											<td style="color:#333"><?php echo $profAnswerStudent[3]; ?></td>
											<td style="color:#333"><?php echo $profAnswerStudent[4]; ?></td>
											<td style="color:#333"><?php echo $profAnswerStudent[5]; ?></td>
											<?php $profTotalStudent += array_sum($profAnswerStudent); ?>
											<td style="color:#333"><?php echo array_sum($profAnswerStudent); ?></td>
											<?php $counter++; ?>

										</tr>
										<?php endforeach; ?>
										<tr style="background:#428bca;">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>Total</td>
											<th><?php echo $profTotalStudent; ?></th>
										</tr>
									  </table>
								<div>Total/Items/Students <br> Overall Rate: <?php echo $profTotalStudent ?>/15/<?php echo $faculty->totalEvaluator ?> = <?php echo $profTotalStudent/15/$faculty->totalEvaluator; ?></div>

								</div> <!--ends table-responsive-->


						      </div>

						    </div><!--ends col-md-6-->

						    <div class="col-md-6">


						      <div class="modal-body" style="color:#000;">


								  </div>
						      	<div class="table-responsive" style="border:1px solid #cccccc;border-radius:5px; padding:15px;color:#000; background: #fff; ">
									  <table class="table">
									  <h3>INSTRUCTIONAL RESPONSIBILITIES - (Student)</h3>

									  <tr style="background:#428bca;">

											<th>Qeustion #</th>
											<th>Never</th>
											<th>Strongly Disagree</th>
											<th>Disagree</th>
											<th>Neutral</th>
											<th>Agree</th>
											<th>Strongly Agree</th>
											<th>Total</th>
										</tr>
										<?php $counter = 1; ?>
										<?php $instructTotalStudent = 0; ?>

										<?php foreach($faculty->instructAnswersStudent as $instructAnswerStudent): ?>
										<tr>
											<td style="color:#333"><?php echo $counter; ?></td>
											<td style="color:#333"> <?php echo $instructAnswerStudent[0]; ?></td>
											<td style="color:#333"><?php echo $instructAnswerStudent[1]; ?></td>
											<td style="color:#333"><?php echo $instructAnswerStudent[2]; ?></td>
											<td style="color:#333"><?php echo $instructAnswerStudent[3]; ?></td>
											<td style="color:#333"><?php echo $instructAnswerStudent[4]; ?></td>
											<td style="color:#333"><?php echo $instructAnswerStudent[5]; ?></td>
											<?php $instructTotalStudent += array_sum($instructAnswerStudent); ?>
											<td style="color:#333"><?php echo array_sum($instructAnswerStudent); ?></td>
											<?php $counter++; ?>

										</tr>
										<?php endforeach; ?>
										<tr style="background:#428bca;">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>

											<td>Total</td>
											<th><?php echo $instructTotalStudent; ?></th>
										</tr>



						      </div>

									  </table>
							<div>Total/Items/Students <br> Overall Rate: <?php echo $instructTotalStudent ?>/15/<?php echo $faculty->totalEvaluator ?> =<?php echo $instructTotalStudent/15/$faculty->totalEvaluator; ?></div>
								</div> <!--ends table-responsive-->


						    </div><!--ends col-md-6-->
						    </div>
						  </div>
						</div>
						<!-head evaluation hereee.------------------------------->
						<div class="modal fade bs-example-modalb-lg" id="myModal<?php echo $faculty->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

						  <div class="modal-dialog modal-lg" style="width:1300px;">
						    <div class="modal-content" style="color:#000;">

						    <div class="col-md-6">



							     <div class="table-responsive" style="border:1px solid #cccccc;border-radius:5px; padding:15px; background:#fff; ">
									  <table class="table">
									  <h3>PROFESSIONAL RESPONSIBILITIES - (Academic Head)</h3>

										<tr style="background:#428bca;">
											<th>Qeustion #</th>
											<th>Never</th>
											<th>Strongly Disagree</th>
											<th>Disagree</th>
											<th>Neutral</th>
											<th>Agree</th>
											<th>Strongly Agree</th>
											<th>Total</th>
										</tr>
										<?php $counter = 1; ?>
										<?php $profTotalAcad =0; ?>

										<?php foreach($faculty->profAnswersAcad as $profAnswerAcad): ?>
										<tr>
											<td><?php echo $counter; ?></td>

											<td style="color:#333"><?php echo $profAnswerAcad[0]; ?></td>
											<td style="color:#333"><?php echo $profAnswerAcad[1]; ?></td>
											<td style="color:#333"><?php echo $profAnswerAcad[2]; ?></td>
											<td style="color:#333"><?php echo $profAnswerAcad[3]; ?></td>
											<td style="color:#333"><?php echo $profAnswerAcad[4]; ?></td>
											<td style="color:#333"><?php echo $profAnswerAcad[5]; ?></td>
											<?php $profTotalAcad += array_sum($profAnswerAcad); ?>
											<td style="color:#333"><?php echo array_sum($profAnswerAcad); ?></td>
											<?php $counter++; ?>

										</tr>
										<?php endforeach; ?>
										<tr style="background:#428bca;">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>Total</td>
											<th><?php echo $profTotalAcad; ?></th>
										</tr>
									  </table>
								<div>Total/Items/Academic Heads <br> Overall Rate: <?php echo $profTotalAcad ?>/15/<?php echo $faculty->totalEvaluatorAcad ?> = <?php echo $profTotalAcad/15/$faculty->totalEvaluatorAcad; ?></div>

								</div> <!--ends table-responsive-->


						      </div>

						    </div><!--ends col-md-6-->

						    <div class="col-md-6">


						      <div class="modal-body" style="color:#000;">


								  </div>
						      	<div class="table-responsive" style="border:1px solid #cccccc;border-radius:5px; padding:15px;color:#000; background: #fff; ">
									  <table class="table">
									  <h3>INSTRUCTIONAL RESPONSIBILITIES - (Academic Heads)</h3>

									  <tr style="background:#428bca;">

											<th>Qeustion #</th>
											<th>Never</th>
											<th>Strongly Disagree</th>
											<th>Disagree</th>
											<th>Neutral</th>
											<th>Agree</th>
											<th>Strongly Agree</th>
											<th>Total</th>
										</tr>
										<?php $counter = 1; ?>
										<?php $instructTotalAcad = 0; ?>

										<?php foreach($faculty->instructAnswersAcad as $instructAnswerAcad): ?>
										<tr>
											<td style="color:#333"><?php echo $counter; ?></td>
											<td style="color:#333"> <?php echo $instructAnswerAcad[0]; ?></td>
											<td style="color:#333"><?php echo $instructAnswerAcad[1]; ?></td>
											<td style="color:#333"><?php echo $instructAnswerAcad[2]; ?></td>
											<td style="color:#333"><?php echo $instructAnswerAcad[3]; ?></td>
											<td style="color:#333"><?php echo $instructAnswerAcad[4]; ?></td>
											<td style="color:#333"><?php echo $instructAnswerAcad[5]; ?></td>
											<?php $instructTotalAcad += array_sum($instructAnswerAcad); ?>
											<td style="color:#333"><?php echo array_sum($instructAnswerAcad); ?></td>
											<?php $counter++; ?>

										</tr>
										<?php endforeach; ?>
										<tr style="background:#428bca;">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>

											<td>Total</td>
											<th><?php echo $instructTotalAcad; ?></th>
										</tr>



						      </div>

									  </table>
							<div>Total/Items/Academic Heads <br> Overall Rate: <?php echo $instructTotalAcad ?>/15/<?php echo $faculty->totalEvaluatorAcad ?> =<?php echo $instructTotalAcad/15/$faculty->totalEvaluatorAcad; ?></div>
								</div> <!--ends table-responsive-->


						    </div><!--ends col-md-6-->
						    </div>
						  </div>
						</div>


 


        <br>
        <?php 

        	$overAllEvaluator = $faculty->totalEvaluator ;

        	if($profTotal > 0 && $instructTotal > 0){
        		$overAllEvaluator +=1;	
        	}

        	$overAllEvaluator += $faculty->totalEvaluatorAcad;

        ?>
        <?php if(($profTotal+$profTotalStudent+$profTotalAcad) > 0 && ($instructTotal + $instructTotalStudent+$instructTotalAcad)> 0): ?>
    <label for="subject">Overall Result : PROFESSIONAL RESPONSIBILITIES (<?php echo $profTotal+$profTotalStudent+$profTotalAcad; ?>/15/<?php echo $overAllEvaluator; ?>) = <?php echo round(($profTotal + $profTotalStudent+$profTotalAcad)/15/$overAllEvaluator,2); ?> | INSTRUCTIONAL RESPONSIBILITIES (<?php echo $instructTotal + $instructTotalStudent + $instructTotalAcad ?>/15/<?php echo $overAllEvaluator ?>) = <?php echo round(($instructTotal + $instructTotalStudent+$instructTotalAcad)/15/$overAllEvaluator,2) ?> </label>
    	<?php else: ?>

    <label for="subject">Overall Result : </label>
    <?php endif; ?>

    <br>
    <div class="pr-inp">