$(document).ready(function(){
	$("ul.col-lg-10 ul").parent().addClass("dropdown");
	$("<b class='caret'></b>").appendTo(".dropdown a:first");
	$(".dropdown a:first").addClass("dropdown-toggle");
	$(".dropdown a:first").attr("data-toggle","dropdown");
	$("ul.col-lg-10 ul").addClass("dropdown-menu");
	$("#search .form-group a.sub").hover(function(){
		$('.iconsearbg').css('display', 'block');
		$('.iconsear').css('display', 'none');
	}, function(){
		$('.iconsearbg').css('display', 'none');
		$('.iconsear').css('display', 'block');
	});
	$("#accessories li").hover(function(){
		$(this).addClass('hover');
	}, function(){
		$(this).removeClass('hover');
	});
	$("#accessories-title").hover(function(){
		$('.all-side',this).css('display','block');
	}, function(){
		$('.all-side',this).css('display','none');
	});
	// $("#pro-color li").click(function(){
	// 	var color = $(this).attr('color-data');
	// 	$("#pro-color li").removeClass('active');
	// 	$(this).addClass('active');
	// 	$("#pro_form_color").val(color);
	// });
	$('#pro-info .list-inline').on('click', 'li', function(event) {
		$(this).addClass('active').siblings().removeClass('active')
		event.preventDefault();
	});
	var cc1h = $("#carousel-generic-s").height();
	$('.carousel-control-1').css('height', cc1h);
	//Carousel
	$('.carousel').carousel({
		interval: 3000
	});
	$('#post-menu li').tooltip();
	$('body').scrollspy({ target: '#navbar-spy' });
	//发票信息
	jQuery("#invoice_1").click(function(){
		jQuery("#invoice_head").css('display','none');
	});
	jQuery("#invoice_2").click(function(){
		jQuery("#invoice_head").css('display','block');
	});
	//使用新收货地址
	$("#new_add_btn").click(function(){
		$('#checkout_info').css('display','block');
		$('#checkout_info_now').css('display','none');
		$('#new_add').val(1);
		$(this).css('display','none');
	});
});

//内容页导航
$(function(){
	$.fn.scrollToTop2=function(){
		var scrollDiv2=$(this);
		$(window).scroll(function(){
			if($(window).scrollTop()<"900"){
				$(scrollDiv2).removeClass("navbar-fixed-top")
			}else{
				$(scrollDiv2).addClass("navbar-fixed-top")
			}
		});
	}
});
$(function() {
	$("#navbar-spy").scrollToTop2();
});

//平滑滚动到锚点
$(".pro-con-nav li a").click(function() {
        var gotop = $($(this).attr("href")).offset().top-80;
        $("html, body").animate({
            scrollTop: gotop + "px"
        }, {
            duration: 500,
            easing: "swing"
        });
        return false;
    });

//评分计数
$(".rating a").hover(function(){
	var rating = $(this).attr('rating-data');
		if(rating==1) {
			$(this).parent().css('background-position','1px -120px');
		}
		if(rating==2) {
			$(this).parent().css('background-position','1px -90px');
		}
		if(rating==3) {
			$(this).parent().css('background-position','1px -60px');
		}
		if(rating==4) {
			$(this).parent().css('background-position','1px -30px');
		}
		if(rating==5) {
			$(this).parent().css('background-position','1px 0px');
		}
	});
	$("#rating1 a").hover(function(){
		var rating = $(this).attr('rating-data');
		$("#rating_val_1").val(rating);
	});
	$("#rating2 a").hover(function(){
		var rating = $(this).attr('rating-data');
		$("#rating_val_2").val(rating);
	});
	$("#rating3 a").hover(function(){
		var rating = $(this).attr('rating-data');
		$("#rating_val_3").val(rating);
	});