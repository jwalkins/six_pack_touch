	$('.ets-btn').click(function(){
		var $this = $(this);
		$this.toggleClass('ets-btn');
		if($this.hasClass('ets-btn')){
			$this.text('Show Six Pack Fixtures & Results 2017');
		} else {
			$this.text('Hide Six Pack Fixtures & Results 2017');
		}
	});
