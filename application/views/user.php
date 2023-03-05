
		<h3>Question / Answer</h3>
		<p style="color: #00ff00" id="success_message"></p>
		<p style="color: #ff0000" id="error_message"></p>
		<div class="form-group">
			<label for="question">Question</label>
			<textarea class="form-control" id="question"><?= !empty($quiz)?$quiz->question:''; ?></textarea>
		</div>
		<div class="form-group">
			<label for="question">Expired Date</label>
			<input id="exp_date" value="<?= !empty($quiz)?date('Y/m/d H:i',$quiz->exp_date):''; ?>" name="exp_date"/>
		</div>
		<?php 
		$answers = array();
		if(!empty($quiz)){
			$answers = json_decode($quiz->answer,true);
		}
			
		?>
		<div class="form-group">
			<label for="question">Answer</label>
			<input id="ans1" placeholder="Answer 1" class="form-control mn-2" value="<?= !empty($answers)?$answers['answer1']:'' ?>" name="ans1"/>
			<input id="ans2" placeholder="Answer 2" value="<?= !empty($answers)?$answers['answer2']:'' ?>" class="form-control mn-2" name="ans2"/>
			<input id="ans3" placeholder="Answer 3" value="<?= !empty($answers)?$answers['answer3']:'' ?>" class="form-control mn-2" name="ans3"/>
			<input id="ans4" placeholder="Answer 4" value="<?= !empty($answers)?$answers['answer4']:'' ?>" class="form-control mn-2" name="ans4"/>
		</div>
		<div class="form-group">
			<input type="button" class="btn btn-info right" onclick="add_quiz()" id="sav" value="Submit" name="sav"/>
		</div>
		
	<script src="<?php echo base_url() ?>assets/build/jquery.datetimepicker.full.js"></script>

<script>
	$('#exp_date').datetimepicker({
});

	function add_quiz() {
		$('#error_message').hide();
		$('#success_message').hide();
		let question = $('#question').val();
		let exp_date = $('#exp_date').val();
		let ans1 = $('#ans1').val();
		let ans2 = $('#ans2').val();
		let ans3 = $('#ans3').val();
		let ans4 = $('#ans4').val();
		if(!ans1 && !ans2 && !ans3 && !ans4){
			$('#error_message').show();
			$('#error_message').html('Answer is required!');
			return false;	
		}
		if(!question){
			$('#error_message').show();
			$('#error_message').html('Question is required!');
			return false;
		}
		if(!exp_date){
			$('#error_message').show();
			$('#error_message').html('Expiry date is required!');
			return false;
		}
		let answer = {};
		answer.answer1 = ans1;
		answer.answer2 = ans2;
		answer.answer3 = ans3;
		answer.answer4 = ans4;
		let edit_fld = false;
		<?php if(!empty($quiz)){ ?>	
			edit_fld = <?= $quiz->q_id ?>;
		<?php } ?>			
		
		$.post("<?=base_url('user/add_quiz'); ?>",
		  {
		    question: question,
		    exp_date: exp_date,
		    answer:answer,
		    edit_fld:edit_fld,
		  },
		  function(data, status){
		  	$('#success_message').show();
		  	if(edit_fld){
				$('#success_message').html('Quiz updated successfully!');
			}else{
				$('#success_message').html('Quiz added successfully!');
			}			
		  	if(data=='no_err'){
				$('#error_message').show();
				$('#error_message').html('User name or Password is not correct!');
			    return false;
			}
		  });
	}
	
</script>