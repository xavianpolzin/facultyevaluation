<!--<table>
	<tr>
		<th>
				<h1 style="margin:0;font-family:Helvetica;font-weight:normal;font-size:30px; text-align:center;margin-left:196px;">STI-COLLEGE DIPOLOG</h1>
				<p style="margin:0;font-family:Helvetica;font-weight:normal;font-size:12px;text-align:center;margin-left:180px;">FACULTY EVALUATION</p>
		</th>
	</tr>
</table>

<table>
	<tr style="margin:0; font-family:Helvetica;font-weight:normal;font-size:12px;background:#0084ff;padding:10px 20px;">>
	<td>
		<p style="color:#fff;">Faculty Details:</p>
	</td>
	</tr>

	<tr>
	<td>
		<p>Name:<?php  echo $faculty->firstName .' ' . substr($faculty->middleName,0,1). '. ' . $faculty->lastName ?></p>
	</td>
		
	</tr>

	<tr>
		<td>
		<p>Semester:
			<?php foreach($faculty->semester as $semester): ?>

				<?=$semester->name; ?>st Semester,

			<?php endforeach; ?></p>
		</td>

	</tr>

	<tr>
		<td>
		<p>Subject Handled: 
			<?php foreach($faculty->subjects as $subject): ?>

				<?= $subject->name; ?>,

			<?php endforeach; ?></p>
		</td>
	</tr>
	<tr>
		<td>
		<p>Section Handled:
			<?php foreach($faculty->sections as $section): ?>

				<?= $section->name; ?>,

			<?php endforeach; ?></p>
		</td>
	</tr>


</table>

<table>

	<tr>
		<th>
			Rank Guide:
		</th>
	</tr>
	<tr>
		<td>
			<p>(6) Always/Almost Always = 91% to 100% of the time</p>
			<p>(5) Most of the Time = 76% to 90% of the time</p>
			<p>(4) Often = 51% to 75% of the time</p>
		</td>

		<td>
			<p>(3) Sometimes = 26% to 50% of the time</p>
			<p>(2) Seldome = 11% to 25% of the time</p>
			<p>(1) Never/Almost Never = 0% to 10% of the time</p>
		</td>
	</tr>
</table>




-->

<div class="tes" style="width:100%; height:30px; background:#0084ff;">
	
</div>

<div class="prnt-title-hd" style="text-align:center;">
	<h1 style="color:#333; padding:15px 0 15px 0; font-family:Helvetica;font-size:30px;">STI-COLLEGE DIPOLOG</h1>
	<p style="font-size:14px; margin:0; position:relative;top:-40px;font-family:helvetica;">FACULTY EVALUATION</p>
</div>


<div class="title-hd-prof">
	<h1 style="font-family:Helvetica;color:#fff;font-size:12px;background:#0084ff;padding:10px 20px;font-weight:normal;text-transform:uppercase; margin:0;">Faculty Details</h1>				
</div>


<div class="details-hd-prof" style="color:#333;padding:0px 20px;font-size:12px;font-family:Helvetica;font-weight:normal;border-right:1px solid #dcdcdc; border-bottom:1px solid #dcdcdc; border-left:1px solid #dcdcdc;">
	<p>Name:<?php  echo $faculty->firstName .' ' . substr($faculty->middleName,0,1). '. ' . $faculty->lastName ?></p>
</div>

<div class="details-hd-prof" style="color:#333;padding:0px 20px;font-size:12px;font-family:Helvetica;font-weight:normal;background:#f3f3f3; border-right:1px solid #dcdcdc; border-bottom:1px solid #dcdcdc; border-left:1px solid #dcdcdc;">
	<p>Semester:<?php foreach($faculty->semester as $semester): ?>

				<?=$semester->name; ?>st Semester,

<?php endforeach; ?></p>
</div>

<div class="details-hd-prof" style="color:#333;padding:0px 20px;font-size:12px;font-family:Helvetica;font-weight:normal; border-right:1px solid #dcdcdc; border-bottom:1px solid #dcdcdc; border-left:1px solid #dcdcdc;">
	<p>Subject Handled:<?php foreach($faculty->subjects as $subject): ?>

		<?= $subject->name; ?>,

	<?php endforeach; ?></p>
</div>


<div class="details-hd-prof" style="color:#333;padding:0px 20px;font-size:12px;font-family:Helvetica;font-weight:normal;background:#f3f3f3;border-right:1px solid #dcdcdc; border-bottom:1px solid #dcdcdc; border-left:1px solid #dcdcdc;">
	<p>Section:<?php foreach($faculty->sections as $section): ?>

				<?= $section->name; ?>,

			<?php endforeach; ?></p>
</div>
<div style="border:1px solid #dcdcdc;margin:20px 0;">
	<div class="hd-rt">
		<h1 style="margin:0;color:#585858;font-size:12px; font-weight:normal;font-family:Helvetica;background:#e6e6e6; padding:20px;">Rating Guide:</h1>
	</div>




<div>
	<div style="width:49%;float:left;margin:0;padding:20px;">
		<p style="margin:0;font-size:12px;font-family:Helvetica;font-weight:normal;">(6) Always/Almost Always = 91% to 100% of the time</p>
		<p style="margin:0;font-size:12px;font-family:Helvetica;font-weight:normal;">(5) Most of the Time = 76% to 90% of the time</p>
		<p style="margin:0;font-size:12px;font-family:Helvetica;font-weight:normal;">(4) Often = 51% to 75% of the time</p>
	
		<p style="margin:0;font-size:12px;font-family:Helvetica;font-weight:normal;">(3) Sometimes = 26% to 50% of the time</p>
		<p style="margin:0;font-size:12px;font-family:Helvetica;font-weight:normal;">(2) Seldome = 11% to 25% of the time</p>
		<p style="margin:0;font-size:12px;font-family:Helvetica;font-weight:normal;">(1) Never/Almost Never = 0% to 10% of the time</p>
	</div>

	<div style="clear:both;"></div>
</div>
</div>

<div style="height:370px;"></div>

<div class="prnt-title-hd" style="text-align:center;">
	<h1 style="color:#333; padding:15px 0 15px 0; font-family:Helvetica;font-size:30px;">FACULTY EVALUATION</h1>
	<p style="font-size:14px; margin:0; position:relative;top:-40px;font-family:helvetica;">(ITSELF)</p>
</div>	
<div style="border:1px solid #dcdcdc;margin-bottom:10px;">
<p style="margin:0; font-size:12px; font-weight:normal;font-family:helvetica;color:#fff;background:#0084ff;padding:10px;">PROFESSIONAL RESPONSIBILITIES</p>
<table style="">

	<tr style="background:#eee;border-bottom:1px solid #dcdcdc;">
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Question</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Never</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Neutral</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Agree</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Agree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Total</th>
	</tr>
	<?php $counter = 1; ?>
	<?php $profTotal = 0; ?>
	<?php foreach($faculty->profAnswers as $profAnswer): ?>
	
	<tr>
		<td style="text-align:center;"><?php echo $counter; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswer[0]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswer[1]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswer[2]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswer[3]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswer[4]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswer[5]; ?></td>
		<?php $profTotal+= array_sum($profAnswer); ?>
		<td style="text-align:center;color:#333"><?php echo array_sum($profAnswer); ?></td>
		<?php $counter++; ?>
	</tr>
	<?php endforeach; ?>
	<tr style="background:#eee;">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;color:#333;">Total</td>
		<th style="text-align:center;color:#333;"> <?php echo $profTotal; ?></th>
	</tr>
	
	<?php if($profTotal >0): ?>
	<div style="padding:20px; text-align:center; font-family:helvetica;font-weight:normal;font-size:12px;">Total/Items <br> Overall Rate: <?php echo $profTotal ?>/9  = <?php echo round($profTotal/9,2); ?>(<?= ComputePercentage(round($profTotal/9,2))?>%)</div>
	<?php endif; ?>
</table>
</div>

<div style="border:1px solid #dcdcdc;margin-bottom:20px;">
<p style="margin:0; font-size:12px; font-weight:normal;font-family:helvetica;color:#fff;background:#0084ff;padding:10px;">ADMINISTRATIVE RESPONSIBILITIES</p>
<table style="">

	<tr style="background:#eee;border-bottom:1px solid #dcdcdc;">
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Question</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Never</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Neutral</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Agree</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Agree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Total</th>
	</tr>
	<?php $counter = 1; ?>
	<?php $adminTotal = 0; ?>
	<?php foreach($faculty->adminiAnswers as $adminiAnswer): ?>
	
	<tr>
		<td style="text-align:center;"><?php echo $counter; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswer[0]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswer[1]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswer[2]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswer[3]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswer[4]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswer[5]; ?></td>
		<?php $adminTotal+= array_sum($adminiAnswer); ?>
		<td style="text-align:center;color:#333"><?php echo array_sum($adminiAnswer); ?></td>
		<?php $counter++; ?>
	</tr>
	<?php endforeach; ?>
	<tr style="background:#eee;">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;color:#333;">Total</td>
		<th style="text-align:center;color:#333;"> <?php echo $adminTotal; ?></th>
	</tr>
	
	<?php if($adminTotal >0): ?>
	<div style="padding:20px; text-align:center; font-family:helvetica;font-weight:normal;font-size:12px;">Total/Items <br> Overall Rate: <?php echo $adminTotal ?>/10= <?php echo round($adminTotal/10,2); ?>(<?= ComputePercentage(round($adminTotal/10,2)) ?>%)</div>
	<?php endif; ?>
</table>
</div>


<div style="border:1px solid #dcdcdc;margin-bottom:20px;">
<p style="margin:0; font-size:12px; font-weight:normal;font-family:helvetica;color:#fff;background:#0084ff;padding:10px;">INSTRUCTIONAL RESPONSIBILITIES</p>
<table style="">

	<tr style="background:#eee;border-bottom:1px solid #dcdcdc;">
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Question</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Never</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Neutral</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Agree</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Agree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Total</th>
	</tr>
	<?php $counter = 1; ?>
	<?php $instructTotal = 0; ?>
	<?php foreach($faculty->instructAnswers as $instructAnswer): ?>
	
	<tr>
		<td style="text-align:center;"><?php echo $counter; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswer[0]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswer[1]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswer[2]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswer[3]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswer[4]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswer[5]; ?></td>
		<?php $instructTotal+= array_sum($instructAnswer); ?>
		<td style="text-align:center;color:#333"><?php echo array_sum($instructAnswer); ?></td>
		<?php $counter++; ?>
	</tr>
	<?php endforeach; ?>
	<tr style="background:#eee;">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;color:#333;">Total</td>
		<th style="text-align:center;color:#333;"> <?php echo $instructTotal; ?></th>
	</tr>
	
	<?php if($instructTotal >0): ?>
	<div style="padding:20px; text-align:center; font-family:helvetica;font-weight:normal;font-size:12px;">Total/Items <br> Overall Rate: <?php echo $instructTotal ?>/28 =<?php echo round($instructTotal/28,2); ?>(<?= ComputePercentage(round($instructTotal/28,2)); ?>%)</div>
	<?php endif; ?>
</table>
</div>



<div class="prnt-title-hd" style="text-align:center; margin-top:50px;">
	<h1 style="color:#333; padding:15px 0 15px 0; font-family:Helvetica;font-size:30px;">FACULTY EVALUATION</h1>
	<p style="font-size:14px; margin:0; position:relative;top:-40px;font-family:helvetica;">(STUDENT)</p>
</div>	
<div style="border:1px solid #dcdcdc;margin-bottom:10px;">
<p style="margin:0; font-size:12px; font-weight:normal;font-family:helvetica;color:#fff;background:#0084ff;padding:10px;">PROFESSIONAL RESPONSIBILITIES</p>
<table style="">

	<tr style="background:#eee;border-bottom:1px solid #dcdcdc;">
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Question</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Never</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Neutral</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Agree</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Agree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Total</th>
	</tr>
	<?php $counter = 1; ?>
	<?php $profTotalStudent = 0; ?>
	<?php foreach($faculty->profAnswersStudent as $profAnswerStudent): ?>
	
	<tr>
		<td style="text-align:center;"><?php echo $counter; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerStudent[0]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerStudent[1]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerStudent[2]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerStudent[3]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerStudent[4]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerStudent[5]; ?></td>
		<?php $profTotalStudent+= array_sum($profAnswerStudent); ?>
		<td style="text-align:center;color:#333"><?php echo array_sum($profAnswerStudent); ?></td>
		<?php $counter++; ?>
	</tr>
	<?php endforeach; ?>
	<tr style="background:#eee;">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;color:#333;">Total</td>
		<th style="text-align:center;color:#333;"> <?php echo $profTotalStudent; ?></th>
	</tr>
	
	<?php if($profTotalStudent >0): ?>
	<div style="padding:10px; text-align:center; font-family:helvetica;font-weight:normal;font-size:12px;">Total/Items/Students <br> Overall Rate: <?php echo $profTotalStudent ?>/9/<?php echo $faculty->totalEvaluator; ?> = <?php echo round($profTotalStudent/9/$faculty->totalEvaluator,2); ?>(<?= ComputePercentage(round($profTotalStudent/9/$faculty->totalEvaluator,2))?>%)</div>
	<?php endif; ?>
</table>
</div>

<div style="border:1px solid #dcdcdc;margin-bottom:10px;">
<p style="margin:0; font-size:12px; font-weight:normal;font-family:helvetica;color:#fff;background:#0084ff;padding:10px;">ADMINISTRATIVE RESPONSIBILITIES</p>
<table style="">

	<tr style="background:#eee;border-bottom:1px solid #dcdcdc;">
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Question</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Never</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Neutral</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Agree</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Agree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Total</th>
	</tr>
	<?php $counter = 1; ?>
	<?php $adminTotalStudent = 0; ?>
	<?php foreach($faculty->adminiAnswersStudent as $adminiAnswerStudent): ?>
	
	<tr>
		<td style="text-align:center;"><?php echo $counter; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerStudent[0]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerStudent[1]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerStudent[2]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerStudent[3]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerStudent[4]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerStudent[5]; ?></td>
		<?php $adminTotalStudent+= array_sum($adminiAnswerStudent); ?>
		<td style="text-align:center;color:#333"><?php echo array_sum($adminiAnswerStudent); ?></td>
		<?php $counter++; ?>
	</tr>
	<?php endforeach; ?>
	<tr style="background:#eee;">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;color:#333;">Total</td>
		<th style="text-align:center;color:#333;"> <?php echo $adminTotalStudent; ?></th>
	</tr>
	
	<?php if($adminTotalStudent >0): ?>
	<div style="padding:10px; text-align:center; font-family:helvetica;font-weight:normal;font-size:12px;">Total/Items/Students <br> Overall Rate: <?php echo $adminTotalStudent ?>/10/<?php echo $faculty->totalEvaluator; ?> = <?php echo round($adminTotalStudent/10/$faculty->totalEvaluator,2); ?>(<?= ComputePercentage(round($adminTotalStudent/10/$faculty->totalEvaluator,2)) ?>%)</div>
	<?php endif; ?>
</table>
</div>


<div style="border:1px solid #dcdcdc;margin-bottom:10px;">
<p style="margin:0; font-size:12px; font-weight:normal;font-family:helvetica;color:#fff;background:#0084ff;padding:10px;">INSTRUCTIONAL RESPONSIBILITIES</p>
<table style="">

	<tr style="background:#eee;border-bottom:1px solid #dcdcdc;">
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Question</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Never</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Neutral</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Agree</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Agree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Total</th>
	</tr>
	<?php $counter = 1; ?>
	<?php $instructTotalStudent = 0; ?>
	<?php foreach($faculty->instructAnswersStudent as $instructAnswerStudent): ?>
	
	<tr>
		<td style="text-align:center;"><?php echo $counter; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerStudent[0]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerStudent[1]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerStudent[2]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerStudent[3]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerStudent[4]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerStudent[5]; ?></td>
		<?php $instructTotalStudent+= array_sum($instructAnswerStudent); ?>
		<td style="text-align:center;color:#333"><?php echo array_sum($instructAnswerStudent); ?></td>
		<?php $counter++; ?>
	</tr>
	<?php endforeach; ?>
	<tr style="background:#eee;">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;color:#333;">Total</td>
		<th style="text-align:center;color:#333;"> <?php echo $instructTotalStudent; ?></th>
	</tr>
	
	<?php if($instructTotalStudent >0): ?>
	<div style="padding:10px; text-align:center; font-family:helvetica;font-weight:normal;font-size:12px;">Total/Items/Students <br> Overall Rate: <?php echo $instructTotalStudent ?>/28/<?php echo $faculty->totalEvaluator; ?> =<?php echo round($instructTotalStudent/28/$faculty->totalEvaluator,2); ?>(<?= ComputePercentage(round($instructTotalStudent/28/$faculty->totalEvaluator,2)); ?>%)</div>
	<?php endif; ?>
</table>
</div>



<div class="prnt-title-hd" style="text-align:center; margin-top:50px;">
	<h1 style="color:#333; padding:15px 0 15px 0; font-family:Helvetica;font-size:30px;">FACULTY EVALUATION</h1>
	<p style="font-size:14px; margin:0; position:relative;top:-40px;font-family:helvetica;">(ACADEMIC HEAD)</p>
</div>	
<div style="border:1px solid #dcdcdc;margin-bottom:10px;margin-top:-20px;">
<p style="margin:0; font-size:12px; font-weight:normal;font-family:helvetica;color:#fff;background:#0084ff;padding:10px;">PROFESSIONAL RESPONSIBILITIES</p>
<table style="">

	<tr style="background:#eee;border-bottom:1px solid #dcdcdc;">
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Question</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Never</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Neutral</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Agree</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Agree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Total</th>
	</tr>
	<?php $counter = 1; ?>
	<?php $profTotalAcad = 0; ?>
	<?php foreach($faculty->profAnswersAcad as $profAnswerAcad): ?>
	
	<tr>
		<td style="text-align:center;"><?php echo $counter; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerAcad[0]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerAcad[1]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerAcad[2]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerAcad[3]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerAcad[4]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $profAnswerAcad[5]; ?></td>
		<?php $profTotalAcad+= array_sum($profAnswerAcad); ?>
		<td style="text-align:center;color:#333"><?php echo array_sum($profAnswerAcad); ?></td>
		<?php $counter++; ?>
	</tr>
	<?php endforeach; ?>
	<tr style="background:#eee;">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;color:#333;">Total</td>
		<th style="text-align:center;color:#333;"> <?php echo $profTotalAcad; ?></th>
	</tr>
	
	<?php if($profTotalAcad >0): ?>
	<div style="padding:20px; text-align:center; font-family:helvetica;font-weight:normal;font-size:12px;">Total/Items/Students <br> Overall Rate: <?php echo $profTotalAcad ?>/9/<?php echo $faculty->totalEvaluator; ?> = <?php echo round($profTotalAcad/9/$faculty->totalEvaluator,2); ?>(<?= ComputePercentage(round($profTotalAcad/9/$faculty->totalEvaluator,2))?>%)</div>
	<?php endif; ?>
</table>
</div>


<div style="border:1px solid #dcdcdc;margin-bottom:10px;">
<p style="margin:0; font-size:12px; font-weight:normal;font-family:helvetica;color:#fff;background:#0084ff;padding:10px;">ADMINISTRATIVE RESPONSIBILITIES</p>
<table style="">

	<tr style="background:#eee;border-bottom:1px solid #dcdcdc;">
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Question</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Never</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Neutral</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Agree</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Agree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Total</th>
	</tr>
	<?php $counter = 1; ?>
	<?php $adminTotalAcad = 0; ?>
	<?php foreach($faculty->adminiAnswersAcad as $adminiAnswerAcad): ?>
	
	<tr>
		<td style="text-align:center;"><?php echo $counter; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerAcad[0]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerAcad[1]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerAcad[2]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerAcad[3]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerAcad[4]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $adminiAnswerAcad[5]; ?></td>
		<?php $adminTotalAcad+= array_sum($adminiAnswerAcad); ?>
		<td style="text-align:center;color:#333"><?php echo array_sum($adminiAnswerAcad); ?></td>
		<?php $counter++; ?>
	</tr>
	<?php endforeach; ?>
	<tr style="background:#eee;">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;color:#333;">Total</td>
		<th style="text-align:center;color:#333;"> <?php echo $adminTotalAcad; ?></th>
	</tr>
	
	<?php if($adminTotalAcad >0): ?>
	<div style="padding:20px; text-align:center; font-family:helvetica;font-weight:normal;font-size:12px;">Total/Items/Students <br> Overall Rate: <?php echo $adminTotalAcad ?>/10/<?php echo $faculty->totalEvaluator; ?> = <?php echo round($adminTotalAcad/10/$faculty->totalEvaluator,2); ?>(<?= ComputePercentage(round($adminTotalAcad/10/$faculty->totalEvaluator,2)) ?>%)</div>
	<?php endif; ?>
</table>
</div>
	



<div style="border:1px solid #dcdcdc;margin-bottom:10px;">
<p style="margin:0; font-size:12px; font-weight:normal;font-family:helvetica;color:#fff;background:#0084ff;padding:10px;">INSTRUCTIONAL RESPONSIBILITIES</p>
<table style="">

	<tr style="background:#eee;border-bottom:1px solid #dcdcdc;">
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Question</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Never</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Disagree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Neutral</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Agree</th>
		<th style="color:#333; padding:10px; font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Strongly Agree</th>
		<th style="color:#333;padding:10px;  font-family:helvetica;font-weight:normal;font-size:12px;border:none;margin:0;outline:0;">Total</th>
	</tr>
	<?php $counter = 1; ?>
	<?php $instructTotalAcad = 0; ?>
	<?php foreach($faculty->instructAnswersAcad as $instructAnswerAcad): ?>
	
	<tr>
		<td style="text-align:center;"><?php echo $counter; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerAcad[0]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerAcad[1]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerAcad[2]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerAcad[3]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerAcad[4]; ?></td>
		<td style="text-align:center;color:#333"><?php echo $instructAnswerAcad[5]; ?></td>
		<?php $instructTotalAcad+= array_sum($instructAnswerAcad); ?>
		<td style="text-align:center;color:#333"><?php echo array_sum($instructAnswerAcad); ?></td>
		<?php $counter++; ?>
	</tr>
	<?php endforeach; ?>
	<tr style="background:#eee;">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;color:#333;">Total</td>
		<th style="text-align:center;color:#333;"> <?php echo $instructTotalAcad; ?></th>
	</tr>
	
	<?php if($instructTotalAcad >0): ?>
	<div style="padding:20px; text-align:center; font-family:helvetica;font-weight:normal;font-size:12px;">Total/Items/Students <br> Overall Rate: <?php echo $instructTotalAcad ?>/28/<?php echo $faculty->totalEvaluator; ?> =<?php echo round($instructTotalAcad/28/$faculty->totalEvaluator,2); ?>(<?= ComputePercentage(round($instructTotalAcad/28/$faculty->totalEvaluator,2)); ?>%)</div>
	<?php endif; ?>
</table>
</div>		
						
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
					<h1 style="margin:0;font-family:helvetica;font-weight:normal;font-size:12px;padding:10px; color:#fff;background:#0084ff">Overall Result</h1>
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
					<p style="margin:0;font-family:helvetica;font-weight:normal;font-size:12px;padding:10px;border-bottom:1px solid #dcdcdc;border-left:1px solid #dcdcdc;border-right:1px solid #dcdcdc;">Professional Responsibilites : <?= $profTotalOverall ?> with the percentage of <?= $profPercentage ?>% = <?= PercentageToString($profPercentage)?></p>
				</div>

				<div class="ovr-rslt-divi">
					<p style="margin:0;font-family:helvetica;font-weight:normal;font-size:12px;padding:10px;border-bottom:1px solid #dcdcdc;border-left:1px solid #dcdcdc;border-right:1px solid #dcdcdc;">Administrative Responsibilites :  <?= $adminTotalOverall ?> with the percentage of <?= $adminPercentage ?>% = <?= PercentageToString($adminPercentage) ?></p>
				</div>

				<div class="ovr-rslt-divi">
					<p style="margin:0;font-family:helvetica;font-weight:normal;font-size:12px;padding:10px;border-bottom:1px solid #dcdcdc;border-left:1px solid #dcdcdc;border-right:1px solid #dcdcdc;">Instructional Responsibilites :  <?= $instructTotalOverall ?> with the percentage of <?= $instructPercentage  ?>% = <?= PercentageToString($instructPercentage) ?></p>
				</div>

			</div>