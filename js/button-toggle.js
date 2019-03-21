	$('.fixtures-btn').click(function(){
		var $this = $(this);
		$this.toggleClass('fixtures-btn');
		if($this.hasClass('fixtures-btn')){
			$this.text('Show Six Pack Fixtures & Results 2017');
		} else {
			$this.text('Hide Six Pack Fixtures & Results 2017');
		}
	});
