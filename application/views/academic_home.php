<div class="col-lg-6 mb-lg-st">
<div class="admin-welcome-page">
     <div class="student-welcome-page">
    <div class="helper-ver">
        <div class="st-wel-content">
           
            <h2>FACULTY EVALUATION SYSTEM</h2>
<p><?php echo $anyMessage; ?></p>
            
            <P>Please fill up the form below</P>
        <form method="post" action="<?php echo base_url() ?>evaluation/startacademiceval">
            <input type="hidden" name="currentStep" value="1" >
            <div class="selector wlc-cl">
            <select name="faculty" class="ch-fc-st require_one">
              <option value="0" selected>Choose Faculty</option>
              <?php foreach($faculties as $faculty): ?>

                            <?php if($faculty->id == $facultyId): ?>
                                <option selected value="<?php echo $faculty->id; ?>"><?php echo $faculty->firstName ?> <?php echo $faculty->lastName?></option>
                            <?php else:  ?>
                                <option value="<?php echo $faculty->id; ?>"><?php echo $faculty->firstName ?> <?php echo $faculty->lastName?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
            </select>


            <br><br>
            <div class="selector">
            <input type="submit" value="Proceed" id="submit" class="sub-stud-code btn">
            </div>
            </div>





        </form>
        </div>
        
    
    </div><!--ends helper-ver-->
 
</div><!--ends student-welcome-page-->

</div>

</div>

<script type="text/javascript">


</script>