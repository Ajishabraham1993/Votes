		<div class="form-group" style="display: flex;">
			<h3>Dashboard</h3>
			<input class="right" style="right: 5px;top: 15px;position: absolute;" id="dash_date" value="<?= date('d-m-Y',time()); ?>" name="dash_date"/>
		</div>
		
		<p style="color: #00ff00" id="success_message"></p>
		<p style="color: #ff0000" id="error_message"></p>
		<div class="container-fluid pt-4 px-4">
		<div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Multiple Bar Chart</h6>
                <span id="chartsspan">
                <canvas id="worldwide-sales"></canvas>
                </span>
            </div>
        </div>
        </div>
		<script src="<?php echo base_url() ?>assets/build/jquery.datetimepicker.full.js"></script>
	 <script src="<?php echo base_url() ?>assets/chart/chart.min.js"></script>
<script>
	// Worldwide Sales Chart
	let labels = [];
	let ans1 = [];
	let ans2 = [];
	let ans3 = [];
	let ans4 = [];
	set_dashboard_chart();
	function set_dashboard_chart(){
		let dash_date = $('#dash_date').val();
		$('#worldwide-sales').remove(); // this is my <canvas> element
  		$('#chartsspan').append('<canvas id="worldwide-sales"><canvas>');
		$.post("<?=base_url('user/get_vote_by_date'); ?>",
		  {
		    dash_date: dash_date,
		  },
		  function(data, status){
		  	let res = JSON.parse(data);
		  	res.forEach( function(el){
		  		labels.push(el.question);
		  		let ans = (el.vote_json)?JSON.parse(el.vote_json):[];
		  		ans1.push((ans.answer1)?ans.answer1.length:0);
		  		ans2.push((ans.answer2)?ans.answer2.length:0);
		  		ans3.push((ans.answer3)?ans.answer3.length:0);
		  		ans4.push((ans.answer4)?ans.answer4.length:0);
		  	});
		  	
		  	var ctx1 = $("#worldwide-sales").get(0).getContext("2d");
		    var myChart1 = new Chart(ctx1, {
		        type: "bar",
		        data: {
		            labels: labels,
		            datasets: [{
		                    label: "Answer1",
		                    data: ans1,
		                    backgroundColor: "rgba(235, 22, 22, .8)"
		                },
		                {
		                    label: "Answer2",
		                    data: ans2,
		                    backgroundColor: "rgba(235, 22, 22, .6)"
		                },
		                {
		                    label: "Answer3",
		                    data: ans3,
		                    backgroundColor: "rgba(235, 22, 22, .4)"
		                },
		                {
		                    label: "Answer4",
		                    data: ans4,
		                    backgroundColor: "rgba(235, 22, 22, .2)"
		                }
		            ]
		            },
		        options: {
		            responsive: true
		        }
		    });
		  });
	}
	$('#dash_date').datetimepicker({
		 timepicker:false,
		viewMode: 'days',
        format: 'd-m-Y'
});
    $(function() {
    	$(document).on('change','#dash_date',function(e) {
    		 labels = [];
			 ans1 = [];
			 ans2 = [];
			 ans3 = [];
			 ans4 = [];
    		set_dashboard_chart();
		});
	});
	
</script>
