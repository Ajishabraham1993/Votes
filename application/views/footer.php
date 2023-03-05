	
	</div>
</div>	
</body>
<script>
	

	function log_out() {
		$.post("<?=base_url('user/log_out'); ?>",
		  {
		  },
		  function(data, status){
		  	if(data=='success'){
				window.location.href = "<?=base_url('register'); ?>";
			}
		  });
	}
	
</script>

</html>