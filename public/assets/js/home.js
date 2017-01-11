$(document).ready(function() {
    
    var mobile = $("input[name=client]").val() == "mobile";
	var contextPath = $("input[name=context_path]").val();
    var look = 0;
    
    $(".info-text").each(function() {
        $(this).dotdotdot({
        	after: 'a.readmore'
        });
    });

    $(".info").on("click", function() {
        $(".big-txt .modal-title").html($(this).find(".info-div").children("div").html());
        $(".big-txt .modal-body").html($(this).find(".original-text").html());
        $("html").addClass("overflow-hidden");
        $(".big-txt").data("building", $(this).parent().data("id"));
        $(".big-txt").modal('show');
    });

    // $(".big-txt").on("scroll", function(evt) {
    //     if (look == 0 && $(".big-txt").scrollTop() + window.innerHeight > $(".big-txt .modal-content")[0].scrollHeight - 20) {
    //         look = 1;
    //         addClick("post", $(this).data("building"));
    //     }
    // });

    // $(".big-txt").on("shown.bs.modal", function() {
    //     if ($(".big-txt .modal-content")[0].scrollHeight < window.innerHeight) {
    //         look = 1;
    //         addClick("post", $(this).data("building"));
    //     } else
    //         look = 0;
    // });


    $(".slider").on("click", function() {
            addClick("slide", $(this).data("value"));
    });

    $(".building-data").on("click", function() {
            addClick("post", $(this).data("value"));
    });

    $(".phone").on("click", function() {
        var type = "phone";
        $.ajax({
            method: "POST",
            url: $("input[name=context_path]").val() + "/home/addClicks",
            data: {
                click: "call",
                type: type
            },
            success: function() {}
        });
    });

    $(".whatsapp").on("click", function() {
        var type =  "whatsapp";
        $.ajax({
            method: "POST",
            url: $("input[name=context_path]").val() + "/home/addClicks",
            data: {
                click: "call",
                type: type
            },
            success: function() {}
        });
    });


    $(".big-txt").on("hide.bs.modal", function() {
        $("html").removeClass("overflow-hidden");
    });

    var addClick = function(type, building_id) {
        if (building_id == 3)
            building_id = "3-1";
        else if (building_id == 4)
            building_id = "3-2";
        $.ajax({
            method: "POST",
            url: $("input[name=context_path]").val() + "/home/addClicks",
            data: {
                click: "building",
                type: type,
                building_info: "building " + building_id
            },
            success: function() {}
        });
    }
    
    $(".gallery").each(function(i, e) {
    	$(this).css("width", $(e).parents(".data").find(".info").width() + "px");
    	if (mobile)
    		$(this).css("height", ($(e).parents(".data").find(".info").height() + 50) + "px");
    	else
    		$(this).css("height", $(e).parents(".data").find(".info").height() + "px");
    	
    	$(this).children("div[data-u=slides]").css("width", $(e).parents(".data").find(".info").width() + "px");
    	$(this).children("div[data-u=slides]").css("height", $(e).parents(".data").find(".info").height() + "px");
    	
    	$(this).children("div[data-u=thumbnavigator]").css("width", $(e).parents(".data").find(".info").width() + "px");
    });
    
    var jssor_1_GalleryTransitions = [
      {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
      {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
    ];

    var jssor_1_gallery_options = {
      $AutoPlay: true,
      $SlideshowOptions: {
        $Class: $JssorSlideshowRunner$,
        $Transitions: jssor_1_GalleryTransitions,
        $TransitionsOrder: 1
      },
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$
      },
      $ThumbnailNavigatorOptions: {
        $Class: $JssorThumbnailNavigator$,
        $Cols: 20,
        $SpacingX: 4,
        $SpacingY: 4,
        $Align: parseInt($("#jssor_gallery1").width()) / 2 - 15
      }
    };

    var jssor_gallery1 = new $JssorSlider$("jssor_gallery1", jssor_1_gallery_options);
    var jssor_gallery2 = new $JssorSlider$("jssor_gallery2", jssor_1_gallery_options);
    var jssor_gallery3 = new $JssorSlider$("jssor_gallery3", jssor_1_gallery_options);
    var jssor_gallery4 = new $JssorSlider$("jssor_gallery4", jssor_1_gallery_options);
    
    ScaleSlider = function() {
		refSize = jssor_gallery1.$Elmt.parentNode.clientWidth;
		if (refSize) {
			refSize = Math.min(refSize, 800);
			jssor_gallery1.$ScaleWidth(refSize);
		}
		else {
			window.setTimeout(ScaleSlider, 30);
		}
        
		refSize = jssor_gallery2.$Elmt.parentNode.clientWidth;
		if (refSize) {
			refSize = Math.min(refSize, 800);
			jssor_gallery2.$ScaleWidth(refSize);
		}
		else {
			window.setTimeout(ScaleSlider, 30);
		}
        
		refSize = jssor_gallery3.$Elmt.parentNode.clientWidth;
		if (refSize) {
			refSize = Math.min(refSize, 800);
			jssor_gallery3.$ScaleWidth(refSize);
		}
		else {
			window.setTimeout(ScaleSlider, 30);
		}
		
		$(".slider-big-img").parent().css('text-align', 'center');
    	$(".jssort01").find("div[data-u=slides]").each(function(i, e) {
    		$(this).css("width", $(this).parent().css("width"));
    		$(this).css("left", "0");
    	});
    }
    
    ScaleSlider();
    $(window).bind("load", ScaleSlider);
    $(window).bind("orientationchange", function() {
    	location.reload();
    });
    
    
    $("img[data-u=image]").on("click", function() {
    	var i = $(this).data("i"),
    		j = $(this).data("j");
        var src = $(this).data("big-img");
        var total = $("#jssor_gallery" + i).find("img[data-u=image]").length;
        var building_info = $(this).parents(".data").data("id");
        console.log(building_info);
        if (building_info == 3)
            building_info = "3-1";
        else if (building_info == 4)
            building_info = "3-2";
        
        $(".big-img .modal-title").html(j + " / " + total);
        $("#big-image").attr('src', contextPath + "/assets/images/" + i + "/big/" + j + ".jpg");
        $("#big-image").attr("data-i", i);
        $("#big-image").attr("data-j", j);
        $("#big-image").attr("data-total", total);
        $(".big-img").modal('show');
        $.ajax({
            method: "POST",
            url: $("input[name=context_path]").val() + "/home/addClicks",
            data: {
                click: "building",
                type: "slide",
                building_info: "building " + building_info
            },
            success: function() {}
        });
    });
    
    $(".big-prev").on("click", function() {
    	var i = $("#big-image").data("i"),
    		j = $("#big-image").data("j"),
    		total = $("#big-image").data("total");
    	j = j == 1 ? total : j - 1;
    	
    	$("#big-image").attr("src", contextPath + "/assets/images/" + i + "/big/" + j + ".jpg");
    	$(".big-img .modal-title").html(j + " / " + total);
    });
    
    $(".big-next").on("click", function() {
    	var i = $("#big-image").data("i"),
    		j = $("#big-image").data("j"),
    		total = $("#big-image").data("total");
    	j = j == total ? 1 : j + 1;
    	
    	$("#big-image").attr("src", contextPath + "/assets/images/" + i + "/big/" + j + ".jpg");
    	$(".big-img .modal-title").html(j + " / " + total);
        $("#big-image").data("j", j);
    });
    
    $(".big-img").on("show.bs.modal", function() {
    	$("html").addClass("overflow-hidden");
    });
    
    $(".big-img").on("hide.bs.modal", function() {
    	$("html").removeClass("overflow-hidden");
    });

    // $(".phone").on("click", function() {
    //     alert('s0');
    //     var type = $(this).hasClass("whatsapp") ? "whatsapp" : "phone";
    //     $.ajax({
    //         method: "POST",
    //         url: $("input[name=context_path]").val() + "/home/addClicks",
    //         data: {
    //             click: "call",
    //             type: type
    //         },
    //         success: function() {}
    //     });
    // });
});
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-88424951-1', 'auto');
ga('send', 'pageview');