/**
 * @author Paulund
 */
if (jQuery) {
	$(document).ready(function(){
		
		//Check to see if the window is top if not then display button
		$(window).scroll(function(){
			if ($(this).scrollTop() > 200) {
				$('.scrollToTop').animate({'bottom':'-10px'}, 350);
			} else {
				$('.scrollToTop').animate({'bottom':'-100px'}, 350);
			}
		});
		
		//Click event to scroll to top
		$('.scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
	});
}