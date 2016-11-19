
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
									  <?php if($profTotal >0): ?>
								<div>Total/Items <br> Overall Rate: <?php echo $profTotal ?>/9  = <?php echo round($profTotal/9,2); ?>(<?= ComputePercentage(round($profTotal/9,2))?>%)</div>

							<?php endif; ?>

								</div> <!--ends table-responsive-->


						      </div>

						    </div><!--ends col-md-6-->

						    <div class="col-md-6">



							     <div class="table-responsive" style="border:1px solid #cccccc;border-radius:5px; padding:15px; background:#fff; ">
									  <table class="table">
									  <h3>ADMINISTRATIVE RESPONSIBILITIES - (Faculty)</h3>

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
										<?php $adminTotal = 0; ?>

										<?php foreach($faculty->adminiAnswers as $adminiAnswer): ?>
										<tr>
											<td><?php echo $counter; ?></td>

											<td style="color:#333"><?php echo $adminiAnswer[0]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswer[1]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswer[2]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswer[3]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswer[4]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswer[5]; ?></td>
											<?php $adminTotal+= array_sum($adminiAnswer); ?>
											<td style="color:#333"><?php echo array_sum($adminiAnswer); ?></td>
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
											<th><?php echo $adminTotal; ?></th>
										</tr>
									  </table>
									  <?php if($adminTotal>0): ?>
								<div style="color:#000000;">Total/Items <br> Overall Rate: <?php echo $adminTotal ?>/10= <?php echo round($adminTotal/10,2); ?>(<?= ComputePercentage(round($adminTotal/10,2)) ?>%)</div>
							<?php endif; ?>

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
									  <?php if($instructTotal>0): ?>
							<div>Total/Items <br> Overall Rate: <?php echo $instructTotal ?>/28 =<?php echo round($instructTotal/28,2); ?>(<?= ComputePercentage(round($instructTotal/28,2)); ?>%)</div>
						<?php endif; ?>
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
									  <?php if($profTotalStudent >0): ?>
								<div>Total/Items/Students <br> Overall Rate: <?php echo $profTotalStudent ?>/9/<?php echo $faculty->totalEvaluator; ?> = <?php echo round($profTotalStudent/9/$faculty->totalEvaluator,2); ?>(<?= ComputePercentage(round($profTotalStudent/9/$faculty->totalEvaluator,2))?>%)</div>
							<?php endif; ?>

								</div> <!--ends table-responsive-->


						      </div>

						    </div><!--ends col-md-6-->


						     <div class="col-md-6">



							     <div class="table-responsive" style="border:1px solid #cccccc;border-radius:5px; padding:15px; background:#fff; ">
									  <table class="table">
									  <h3>ADMINISTRATIVE RESPONSIBILITIES - (Student)</h3>

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
										<?php $adminTotalStudent =0; ?>

										<?php foreach($faculty->adminiAnswersStudent as $adminiAnswerStudent): ?>
										<tr>
											<td><?php echo $counter; ?></td>

											<td style="color:#333"><?php echo $adminiAnswerStudent[0]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswerStudent[1]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswerStudent[2]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswerStudent[3]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswerStudent[4]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswerStudent[5]; ?></td>
											<?php $adminTotalStudent += array_sum($adminiAnswerStudent); ?>
											<td style="color:#333"><?php echo array_sum($adminiAnswerStudent); ?></td>
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
											<th><?php echo $adminTotalStudent; ?></th>
										</tr>
									  </table>
									  <?php if($adminTotalStudent >0): ?>
								<div style="color:#000000;">Total/Items/Students <br> Overall Rate: <?php echo $adminTotalStudent ?>/10/<?php echo $faculty->totalEvaluator; ?> = <?php echo round($adminTotalStudent/10/$faculty->totalEvaluator,2); ?>(<?= ComputePercentage(round($adminTotalStudent/10/$faculty->totalEvaluator,2)) ?>%)</div>
							<?php endif; ?>

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

									  <?php if($instructTotalStudent >0): ?>
							<div>Total/Items/Students <br> Overall Rate: <?php echo $instructTotalStudent ?>/28/<?php echo $faculty->totalEvaluator; ?> =<?php echo round($instructTotalStudent/28/$faculty->totalEvaluator,2); ?>(<?= ComputePercentage(round($instructTotalStudent/28/$faculty->totalEvaluator,2)); ?>%)</div>
						<?php endif; ?>
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
									  <?php if($profTotalAcad >0): ?>
								<div>Total/Items/Academic Heads <br> Overall Rate: <?php echo $profTotalAcad ?>/9/<?php echo $faculty->totalEvaluatorAcad; ?> = <?php echo round($profTotalAcad/9/$faculty->totalEvaluatorAcad,2); ?>(<?= ComputePercentage(round($profTotalAcad/9/$faculty->totalEvaluatorAcad,2)) ?>%)</div>
							<?php endif; ?>

								</div> <!--ends table-responsive-->


						      </div>

						    </div><!--ends col-md-6-->

						    <div class="col-md-6">



							     <div class="table-responsive" style="border:1px solid #cccccc;border-radius:5px; padding:15px; background:#fff; ">
									  <table class="table">
									  <h3>ADMINISTRATIVE RESPONSIBILITIES - (Academic Head)</h3>

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
										<?php $adminTotalAcad =0; ?>

										<?php foreach($faculty->adminiAnswersAcad as $adminiAnswerAcad): ?>
										<tr>
											<td><?php echo $counter; ?></td>

											<td style="color:#333"><?php echo $adminiAnswerAcad[0]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswerAcad[1]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswerAcad[2]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswerAcad[3]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswerAcad[4]; ?></td>
											<td style="color:#333"><?php echo $adminiAnswerAcad[5]; ?></td>
											<?php $adminTotalAcad += array_sum($adminiAnswerAcad); ?>
											<td style="color:#333"><?php echo array_sum($adminiAnswerAcad); ?></td>
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
											<th><?php echo $adminTotalAcad; ?></th>
										</tr>

									  </table>

									  <?php if($adminTotalAcad >0): ?>
									  <div style="color:#000000">Total/Items/Academic Heads <br> Overall Rate: <?php echo $adminTotalAcad ?>/10/<?php echo $faculty->totalEvaluatorAcad; ?> = <?php echo round($adminTotalAcad/10/$faculty->totalEvaluatorAcad,2); ?>(<?= ComputePercentage( round($adminTotalAcad/10/$faculty->totalEvaluatorAcad,2)) ?>%)</div>

									<?php endif; ?>

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
									  <?php if($instructTotalAcad>0): ?>
							<div>Total/Items/Academic Heads <br> Overall Rate: <?php echo $instructTotalAcad ?>/28/<?php echo $faculty->totalEvaluatorAcad; ?> =<?php echo round($instructTotalAcad/28/$faculty->totalEvaluatorAcad,2); ?>(<?= ComputePercentage(round($instructTotalAcad/28/$faculty->totalEvaluatorAcad,2))?>%)</div>
						<?php endif; ?>
								</div> <!--ends table-responsive-->


						    </div><!--ends col-md-6-->
						    </div>
						  </div>
						</div>


 


        <br>

    <div class="pr-inp">

    <?php 

        	$overAllEvaluator = $faculty->totalEvaluator ;

        	if($profTotal > 0 && $adminTotal > 0 && $instructTotal > 0){
        		$overAllEvaluator +=1;	
        	}

        	$overAllEvaluator += $faculty->totalEvaluatorAcad;

        ?>
    


			

			<div class="ovll-rslt-div">
				<div class="ovll-rslt-con">
					<h1>Overall Result</h1>
				</div>
				<?php 

						$profTotalOverall = 0;
$adminTotalOverall = 0;
$instructTotalOverall = 0;


				if( ($profTotal+$profTotalStudent+$profTotalAcad) >0 && ($adminTotal+$adminTotalStudent+$adminTotalAcad) >0 && ($instructTotal + $instructTotalStudent + $instructTotalAcad) >0){

						$profTotalOverall = round((($profTotal+$profTotalStudent+$profTotalAcad)/9)/$overAllEvaluator,2);
						$adminTotalOverall = round((($adminTotal+$adminTotalStudent+$adminTotalAcad)/10)/$overAllEvaluator,2);
						$instructTotalOverall = round((($instructTotal + $instructTotalStudent + $instructTotalAcad)/28)/$overAllEvaluator,2);

						}

						$profPercentage = ComputePercentage($profTotalOverall);
						$adminPercentage = ComputePercentage($adminTotalOverall);
						$instructPercentage= ComputePercentage($instructTotalOverall);



				?>

				<?php 

	function ComputePercentage($decimal){


		return round(100 - (((6-$decimal) / 6) * 100),2) ;


	}
	function PercentageToString($percentage){


		$str= '';


		switch(true){

			case $percentage > 90:
				$str='Always/Almost Always';

				break;

			case $percentage > 75:

				$str = 'Most of the Time';

				break;

			case $percentage > 50:

				$str = 'Often';

				break;

			case $percentage > 25:

				$str = 'Sometimes';

				break;

			case $percentage > 10:

				$str = 'Seldome';

				break;

			default:

				$str = 'Never/Almost Never ';
				break;

		}


		return $str;

	}

?>
				<div class="ovr-rslt-divi">
					<p>Professional Responsibilites : <?= $profTotalOverall ?> with the percentage of <?= $profPercentage ?>% = <?= PercentageToString($profPercentage)?></p>
				</div>

				<div class="ovr-rslt-divi">
					<p>Administrative Responsibilites :  <?= $adminTotalOverall ?> with the percentage of <?= $adminPercentage ?>% = <?= PercentageToString($adminPercentage) ?></p>
				</div>

				<div class="ovr-rslt-divi">
					<p>Instructional Responsibilites :  <?= $instructTotalOverall ?> with the percentage of <?= $instructPercentage  ?>% = <?= PercentageToString($instructPercentage) ?></p>
				</div>

			</div>