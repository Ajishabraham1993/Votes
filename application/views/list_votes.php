<style>
	
.ac-label {
  font-weight: 700;
  position: relative;
  padding: .5em 1em;
  margin-bottom: .5em;
  display: block;
  cursor: pointer;
  background-color: whiteSmoke;
  transition: background-color .15s ease-in-out;
}

.ac-input:checked + label, .ac-label:hover {
  background-color: #999;
}

.ac-label:after, .ac-input:checked + .ac-label:after {
  content: "˅";
  position: absolute;
  display: block;
  right: 0;
  top: 0;
  width: 2em;
  height: 100%;
  line-height: 2.25em;
  text-align: center;
  background-color: #e5e5e5;
  transition: background-color .15s ease-in-out;
}

.ac-label:hover:after, .ac-input:checked + .ac-label:after {
  background-color: #b5b5b5;
}

.ac-input:checked + .ac-label:after {
  content: "-";
}

.ac-input {
  display: none;
}

.ac-text, .ac-sub-text {
  opacity: 0;
  height: 0;
  margin-bottom: .5em;
  transition: opacity .5s ease-in-out;
  overflow: hidden;
}

.ac-input:checked ~ .ac-text, .ac-sub .ac-input:checked ~ .ac-sub-text { 
  opacity: 1;
  height: auto;
}

.ac-sub .ac-label {
  background: none;
  font-weight: 600;
  padding: .5em 2em;
  margin-bottom: 0;
}

.ac-sub .ac-label:checked {
  background: none;
  border-bottom: 1px solid whitesmoke;
}

.ac-sub .ac-label:after, .ac-sub .ac-input:checked + .ac-label:after {
  left: 0;
  background: none;
}

.ac-sub .ac-input:checked + label, .ac-sub .ac-label:hover {
  background: none;
}

.ac-sub-text {
  padding: 0 1em 0 2em;
}

.mm-survey {
  margin-top: 75px;
  margin-bottom: 50px;
}

.mm-survey-container {
  width: 100%;
  min-height: 600px;
  background: #fafafa;
}

.mm-survey-results-container {
  width: 100%;
  min-height: 600px;
  background: #fafafa;
}

.mm-survey-page {
  display: none;
  font-family: 'Raleway';
  font-weight: 100;
  padding: 40px;
}

.mm-survey-page.active {
  display: block;
}

.mm-survey-controller {
  position: relative;
    height: 60px;
    background: #333;
    padding: 12px 14px;
}

.mm-survey-results-controller {
  position: relative;
    height: 60px;
    background: #333;
    padding: 12px 14px;
}

.mm-back-btn {
  display: inline-block;
    position: relative;
    float: left;
}

.mm-prev-btn {
  display: inline-block;
    position: relative;
    float: left;
}

.mm-next-btn {
  display: inline-block;
  opacity: 0.25;
    position: relative;
    float: right;
}

.mm-finish-btn {
  display: none;
    position: relative;
    float: right;
}

.mm-finish-btn button {
  background: #3DD2AF !important;
    color: #fff;
}

.mm-survey-controller button {
  background: #fff;
    border: none;
    padding: 8px 18px;
    font-family: 'Raleway';
    font-weight: 300;
}

.mm-survey-results-controller button {
  background: #fff;
  border: none;
  padding: 8px 18px;
}

.mm-survey-progress {
  width: 100%;
  height: 30px;
  background: #f5f5f5;
  overflow: hidden;
}

.mm-progress {
  transition: width 0.5s ease-in-out;
}

.mm-survey-progress-bar {
  height: 30px;
    width: 0%;
    background: linear-gradient(to left, #4CB8C4, #3CD3AD);
}

.mm-survey-q {
  list-style-type: none;
  padding: 0px;
}

.mm-survey-q li {
  display: block;
  /*padding: 20px 0px;*/
  margin-bottom: 10px;
  width: 100%;
  background: #fff;
}

.mm-survey-q li input {
  width: 100%;
}

.mm-survery-content label {
  width: 100%;
  padding: 10px 10px;
  margin: 0px !important;
}

.mm-survery-content label:hover {
  cursor: pointer;
}

.mm-survey-question {
  min-height: 100px;
}

.mm-survey-question p {
  font-size: 22px;
    font-weight: 200;
    margin-bottom: 20px;
    line-height: 40px;
}

.mm-survery-content label p {
  display: inline-block;
    position: absolute;
    top: 12px;
    left: 50px;
    margin: 0px;
    color: #000;
}

.mm-survery-content label b {
  display: inline-block;
    position: absolute;
    top: 12px;
    left: 1050px;
    margin: 0px;
    color: #000;
}

input[type="radio"] {
  display: none;
}

input[type="radio"] + label {
  color: #292321;
    font-family: 'Raleway';
    font-weight: 300;
    font-size: 16px;
}

input[type="radio"] + label span {
  display: inline-block;
  width: 30px;
  height: 30px;
  margin: 2px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  -moz-border-radius: 50%;
  border-radius: 50%;
}

input[type="radio"] + label span {
  background-color: #333;
}

input[type="radio"]:checked + label span {
  border: 2px solid #000;
  background: transparent;
}

input[type="radio"] + label span,
input[type="radio"]:checked + label span {
  -webkit-transition: background-color 0.20s ease-in-out;
  -o-transition: background-color 0.20s ease-in-out;
  -moz-transition: background-color 0.20s ease-in-out;
  transition: background-color 0.20s ease-in-out;
}

.mm-survey-item {
  background: #fff;
  margin-bottom: 15px;
  border-bottom: 1px solid rgba(33,33,33,0.15);
    border-radius: 0px 0px 4px 4px;
}

.mm-prev-btn button:focus, .mm-next-btn button:focus, .mm-finish-btn button:focus {
  outline: none;
  border: none;
}

.mm-survey.okay .mm-next-btn {
  display: inline-block;
  opacity: 1;
}

.mm-finish-btn.active {
  display: inline-block;
}

.mm-survey-results {
  display: none;
}

.mm-survey-results-score {
  margin: 0px;
    padding: 0px;
    padding-top: 40px;
    padding-bottom: 40px;
    text-align: center;
    font-size: 80px;
    font-family: 'Raleway';
    font-weight: 600;
    letter-spacing: -6px;
}

.mm-survey-results-list {
  list-style-type: none;
  padding: 0px 15px;
    margin: 0px;
}

.mm-survey-results-item {
  color: #fff;
    margin-top: 10px;
    padding: 15px 15px 15px 0px;
    font-family: 'Raleway';
    font-weight: 300;
}

.mm-survey-results-item.correct {
  background: linear-gradient(to left, #4CB8C4, #3CD3AD);
}

.mm-survey-results-item.incorrect {
  background: linear-gradient(to left, #d33c62, #dc1144);
}

.mm-item-number {
  height: 40px;
  position: relative;
  padding: 17px;
  background: #333;
  color: #fff;
}

.mm-item-info {
  float: right;
}
.mm-survey-item input[type="radio"]:checked + label span:before {
  content: '\2713';
  display: inline-block;
  color: #000;
  font-weight: bold;
  padding: 2px 6px 0 7px;
}
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
.disable_clk{
	pointer-events: none;
}
.dlt_votecnf{
	position: absolute;
    z-index: 9999;
    right: 0px;
    background: #8dc5f7;
    padding: 10px;
    top: 40px;
    display: none;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section style="overflow-y:scroll;height: 85vh;" class="container">

  <h1>All Votes</h1>
  <div class="vote_lst">
  <?php foreach($all_votes as $key=>$vote){ ?>
  <div style="position: relative;" class="main_cnt">
  <div class="ac" data-v_id="<?= $vote->q_id; ?>" data-exp_date="<?= date('M d, Y H:i:s',$vote->exp_date); ?>">
    
    <input class="ac-input" id="ac-<?= $key; ?>" name="ac-<?= $key; ?>" type="checkbox" />
    <label class="ac-label" for="ac-<?= $key; ?>"><?= $vote->question; ?> <span class="right mr-2 expdte"></span><?php if($vote->user_id==$this->session->userdata("user_id")){ ?><span class="right mr-1 vote_option"><button class="btn btn-sm btn-info mr-1"><i class="fa fa-edit"></i></button><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></span><?php } ?></label>
    
    <article class="ac-text">
      
      <div class="ac-sub">
        <div class="mm-survery-content">
        	<?php
        		$answers = json_decode($vote->answer);
        		foreach($answers as $key2=>$answer){
        			$cls = "";
        			$ans = "";
        			$vper = array();$tvot = $vote->vote_count;
        			if($vote->exp_date<time()){
						$cls ='disable_clk w3-blue';
					}
					if(!empty($vote->vote_json)){
						$votes = json_decode($vote->vote_json,true);
						
						foreach($votes as $k=>$vval){
							if($ans==''){
								$ans = in_array($this->session->userdata("user_id"),$vval)?$k:'';
							}							
							$vper[$k] = $vval;
						}
						if(!empty($ans)){
							$cls ='disable_clk';
							if($ans==$key2){
								$cls .=' w3-green';
							}else{
								$cls .=' w3-blue';
							}
						}
					}
					if(!empty($vper)){
						$aper['answer1'] = !empty($vper['answer1'])?round((count($vper['answer1'])/$tvot)*100, 2):0;
						$count['answer1'] = !empty($vper['answer1'])?count($vper['answer1']):0;
						$count['answer2'] = !empty($vper['answer2'])?count($vper['answer2']):0;
						$count['answer3'] = !empty($vper['answer3'])?count($vper['answer3']):0;
						$count['answer4'] = !empty($vper['answer4'])?count($vper['answer4']):0;
						$aper['answer2'] = !empty($vper['answer2'])?round((count($vper['answer2'])/$tvot)*100, 2):0;
						$aper['answer3'] = !empty($vper['answer3'])?round((count($vper['answer3'])/$tvot)*100, 2):0;
						$aper['answer4'] = !empty($vper['answer4'])?round((count($vper['answer4'])/$tvot)*100, 2):0;
					}else{
						$count['answer1'] = $count['answer2'] = $count['answer3'] = $count['answer4'] = $aper['answer1'] = $aper['answer2'] = $aper['answer3'] = $aper['answer4'] = 0;
					}
        	 ?>
                <div data-perc="<?= $count[$key2]; ?>" data-tot="<?= $tvot; ?>" class="mm-survey-item  w3-light-grey">
                  <input type="radio" id="radio<?= $key.$key2; ?>" <?= ($ans==$key2)?'checked':''; ?> data-item="<?= $key.$key2; ?>" name="radio<?= $key; ?>" value="<?= $vote->q_id.'_'.$key2; ?>" />
                  <label class="vote_sngle <?= $cls; ?>" style="position:relative; <?=  ($cls!="")?"width:".$aper[$key2]."%":""; ?>" for="radio<?= $key.$key2; ?>"><span></span><p><?= $answer; ?></p><b style="<?= ($cls=="")?"display:none;":"" ?>" class="right"><?= $aper[$key2]."%"; ?></b></label>
                </div>
                <?php } ?>
                
              </div>
      </div>
      
    </article>
    
  </div>
<div class="dlt_votecnf" style="position: absolute;">Are you sure <a style="margin-right: 5px;" class="text-danger dlt-yes" href="#">Yes</a><a class="text-info dlt-no" href="#">No</a></div>
</div>
  <?php } ?>
</div>  

</section>
 <div class="text-center">
  <div class="pagination">
	  <a href="#" class="prev">&laquo;</a>
	  <?php
		$pages = $total_votes/15;
		$curr = !empty($_GET['curr_page'])?$_GET['curr_page']:0;
		for($i=0;$i<$pages;$i++){
	   ?>
	  <a href="<?= base_url('user/show_vote?curr_page=').$i; ?>" <?php if($curr == $i){ ?> class="active" <?php } ?>><?= $i+1; ?></a>
	  <?php } ?>
	  <a href="#" class="nxt">&raquo;</a>
	</div>
</div>
<script>
	$(function() {
    	$('.nxt').click(function(e) {
    		window.location.href = $('.pagination').find('.active').next().attr('href');
		});
    	$('.prev').click(function(e) {
    		window.location.href = $('.pagination').find('.active').prev().attr('href');
		});
		
    	$(document).on('click','.vote_option .btn-info',function(e) {
    		let v_id = $(this).closest('.ac').data('v_id');
    		window.location.href = "<?= base_url('user/edit_vote/') ?>"+v_id;
		});
    	$(document).on('click','.dlt-yes',function(e) {
    		let v_id = $(this).closest('.main_cnt').find('.ac').data('v_id');
    		$(this).closest('.main_cnt').find('.dlt_votecnf').hide(); 
    		let ans = $(this).siblings('input').val();
    		let elm = $(this).closest('.main_cnt').find('.ac');
    		$.post("<?=base_url('user/delete_vote'); ?>",
			  {
			    v_id: v_id,
			  },
			  function(data, status){
			  	elm.remove();
			  });   		
		});
    	$(document).on('click','.dlt-no',function(e) {
    		$(this).closest('.main_cnt').find('.dlt_votecnf').hide();    		
		});
    	$(document).on('click','.vote_option .btn-danger',function(e) {
    		$(this).closest('.main_cnt').find('.dlt_votecnf').show();
    		
		});
    	$(document).on('click','.vote_sngle',function(e) {
    		$(this).closest('.mm-survery-content').find('.mm-survey-item label').addClass('disable_clk w3-blue');
    		let ans = $(this).siblings('input').val();
    		let elm = $(this);
    		$.post("<?=base_url('user/update_vote'); ?>",
			  {
			    ans: ans,
			  },
			  function(data, status){
			  	
			  	let tot = parseInt(elm.closest('.mm-survey-item').data('tot'));
			  	let item_val = elm.closest('.mm-survey-item').find('input').val().trim();
			  	let totnw = tot+1;
			  	
			  	elm.closest('.mm-survery-content').find('.mm-survey-item').each( function(el){
			  		
			  		let per = parseInt($(this).data('perc'));
			  		let pernw = (per/totnw)*100;
			  		let cls = 'w3-blue';
			  		if($(this).find('input').val().trim()==item_val){
						 cls = 'w3-green';
						 pernw = ((per+1)/totnw)*100;
					}
			  		$(this).find('label').removeClass('w3-blue').addClass(cls);
			  		$(this).find('.vote_sngle').css('width',pernw+'%');
			  		$(this).find('.vote_sngle b').show().text(pernw.toFixed(2)+"%");
				});
			  	
			  });
		});
		
		$('.vote_lst').find('.ac').each( function(el){
			// Set the date we're counting down to
			
			let elm = $(this);
			// Update the count down every 1 second
			var x = setInterval(function() {
				var countDownDate = new Date(elm.data('exp_date')).getTime();
			  // Get today's date and time
			  var now = new Date().getTime();

			  // Find the distance between now and the count down date
			  var distance = countDownDate - now;

			  // Time calculations for days, hours, minutes and seconds
			  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			  // If the count down is finished, write some text
			  if (distance < 0) {
			    clearInterval(x);
			    elm.find('.mm-survey-item label').addClass('disable_clk');
			    elm.find('.expdte').text("Expired");
			  }else{
			  	elm.find('.expdte').text(days + "days " + hours + ": "+ minutes + ": " + seconds + "");
			  }
			}, 1000);
		});
	});
</script>
