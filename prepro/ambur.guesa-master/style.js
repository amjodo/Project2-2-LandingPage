    $.fx.step.textShadowBlur = function(fx) {
        $(fx.elem).css({textShadow: '0 0 ' + Math.floor(fx.now) + 'px gold'});
    };
    

setInterval(function() {
    
    $("#seconds").animate({textShadowBlur:20}, {duration: 300, complete: function() { 
        $("#seconds").animate({textShadowBlur:0}, {duration: 300}); 
    }});
}, 1000);
