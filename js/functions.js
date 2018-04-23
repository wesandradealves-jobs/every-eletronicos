jQuery(document).ready(function(){
 	$( "#menu > li" ).each(function() {
		var text = $(this).first().children('a').text();
		if(text == "produtos" || text == "Produtos"){
			$(this).attr("href","javascript:void(0)");
			$(this).click(function() {
				if ($(window).width() > 767 && $(window).width() < 1280) {
					$(this).toggleClass("hover");
				}
			});
		}
	});

	$(".accordion > *:first-child").addClass("opened");

 	$( ".accordion > *" ).each(function() {
		$(this).first().children('*').click(function() {
			$(".accordion .opened").not(this).removeClass("opened");
			$(this).parent().toggleClass("opened");
		});
	});

	$("#menu").click(function() {
		if ($(window).width() < 769) {
			$(this).toggleClass("on");
			$("#mobileMenu,header").toggleClass("on");
		}
	});

	$( "footer ul li" ).each(function() {
		var text = $(this).first().children('a').text();
		if(text == "produtos" || text == "Produtos"){
			$(this).hide();
		}
	}); 

 	$( "#onde-comprar ul:last-of-type li[data-value='loja-fisica']" ).each(function() {
		$(this).click(function() {
			if ($(window).width() > 279 && $(window).width() < 1280) {
				$(this).toggleClass("hover");
			}
		});
	});

 	$( "#onde-comprar ul:first-of-type li" ).each(function() {
		$(this).click(function() {
			$(this).parent().find("li").not(this).removeClass("hover");
			$(this).toggleClass("hover");
			var data_type = $(this).attr("data-type");
			$("#onde-comprar ul:last-of-type").find(".off").removeClass("off");
			$("#onde-comprar ul:last-of-type li").not("[data-value='"+data_type+"']").addClass("off");
		});
	});

	$(window).resize(function(){
		$(".hover").removeClass("hover");
		$(".opened").removeClass("opened");
		$(".off").removeClass("off");
		$(".on").removeClass("on");
		$(".lightTheme").removeClass("lightTheme");
	});
});
