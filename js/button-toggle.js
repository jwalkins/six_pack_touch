	$('.ets-btn').click(function(){
		var $this = $(this);
		$this.toggleClass('ets-btn');
		if($this.hasClass('ets-btn')){
			$this.text('Show Edinburgh Touch Superleague Fixtures & Results 2017');			
		} else {
			$this.text('Hide Edinburgh Touch Superleague Fixtures & Results 2017');
		}
	});