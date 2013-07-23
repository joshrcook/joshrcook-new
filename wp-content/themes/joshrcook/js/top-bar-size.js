jQuery(function($) {
	$minHeight = 70;
	$topBar = $('.l-top-bar');
	$menuItems = $('.l-header-internal .menu-item');
	$image = $('#logo');
	$imageContainer = $('div.logo');
	$startingHeight = $topBar.height();

	// change the height on scroll, down to the minHeight
	$(document).scroll(function() {
		$scrollTop = $(document).scrollTop();
		$totalHeight = calculateTotalHeight();

		// if the min height of the outside box hasn't been 
		// reached, go ahead and bring them down on scroll, 
		// or up, if you are scrolling up.
		if(!(calculateTotalHeight() < $minHeight)) {
			// change the height of the top bar
			changeHeight($topBar, $totalHeight);

			// change the height of the logo
			changeHeight($image, $totalHeight * (2/3));

			// change the line height of the logo container
			changeLineHeight($imageContainer, $totalHeight);

			// change the line height of the nav menu
			changeLineHeight($menuItems, $totalHeight);
		} else {
			// change the height of the top bar
			changeHeight($topBar, $minHeight);

			// change the height of the logo
			changeHeight($image, $minHeight * (2/3));

			// change the line height of the logo container
			changeLineHeight($imageContainer, $minHeight);

			// change the line height of the nav menu
			changeLineHeight($menuItems, $minHeight);
		}
	});

	// calculates the new total height when scrolled
	function calculateTotalHeight() {
		return $startingHeight - ($scrollTop / 3);
	}

	// change the height of an object
	function changeHeight($object, $height) {
		$object.css('height', $height);
	}

	// change the line height of an object
	function changeLineHeight($object, $lineHeight) {
		$object.css('lineHeight', $lineHeight + 'px');
	}
});