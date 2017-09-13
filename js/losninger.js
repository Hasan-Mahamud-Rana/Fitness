function ShowLiteAccordion1(containerWidth, containerHeight, headerWidth)
{ 
if($('.solution1.liteAccordion').length > 0){
  $('.solution1.liteAccordion').liteAccordion("destroy");
}
$('.solution1').liteAccordion({
      containerWidth : containerWidth,
      containerHeight : containerHeight,                  
      headerWidth: headerWidth,                       

      activateOn : 'mouseover',               
      firstSlide : 1,                         
      slideSpeed : 500,                       
      onTriggerSlide : function() {},        
      onSlideAnimComplete : function() {},    

      autoPlay : false,                       
      pauseOnHover : false,                  
      cycleSpeed : 1000,                   
      easing : 'swing',                      

      theme : 'basic',                      
      rounded : false,                    
      enumerateSlides : false,              
      linkable : false                     
    });
}
var containerWidth = $(".solution1-container").width();
  ShowLiteAccordion1(containerWidth, 320, 340);
  function dynamicSizing1(){
    var containerWidth = $(window).width();
    containerWidth = Math.min(containerWidth, 1029);
    var containerHeight = (containerWidth/1029) * 320; // dyncmic
    var headerWidth = (containerWidth/1029) * 340; // dynamic
    ShowLiteAccordion1(containerWidth, containerHeight, headerWidth);
  }
  $(window).ready(function(){
    dynamicSizing1();
  });
  $(window).resize(function(){
    dynamicSizing1();
  });

function ShowLiteAccordion2(containerWidth, containerHeight, headerWidth)
{ 
if($('.solution2.liteAccordion').length > 0){
  $('.solution2.liteAccordion').liteAccordion("destroy");
}
$('.solution2').liteAccordion({
      containerWidth : containerWidth,
      containerHeight : containerHeight,                  
      headerWidth: headerWidth,                       

      activateOn : 'mouseover',               
      firstSlide : 2,                         
      slideSpeed : 500,                       
      onTriggerSlide : function() {},        
      onSlideAnimComplete : function() {},    

      autoPlay : false,                       
      pauseOnHover : false,                  
      cycleSpeed : 1000,                   
      easing : 'swing',                      

      theme : 'basic',                      
      rounded : false,                    
      enumerateSlides : false,              
      linkable : false                     
    });
}
var containerWidth = $(".solution2-container").width();
  ShowLiteAccordion2(containerWidth, 320, 340);
  function dynamicSizing2(){
    var containerWidth = $(window).width();
    containerWidth = Math.min(containerWidth, 1029);
    var containerHeight = (containerWidth/1029) * 320; // dyncmic
    var headerWidth = (containerWidth/1029) * 340; // dynamic
    ShowLiteAccordion2(containerWidth, containerHeight, headerWidth);
  }
  $(window).ready(function(){
    dynamicSizing2();
  });
  $(window).resize(function(){
    dynamicSizing2();
  });

function ShowLiteAccordion3(containerWidth, containerHeight, headerWidth)
{ 
if($('.solution3.liteAccordion').length > 0){
  $('.solution3.liteAccordion').liteAccordion("destroy");
}
$('.solution3').liteAccordion({
      containerWidth : containerWidth,
      containerHeight : containerHeight,                  
      headerWidth: headerWidth,                       

      activateOn : 'mouseover',               
      firstSlide : 1,                         
      slideSpeed : 500,                       
      onTriggerSlide : function() {},        
      onSlideAnimComplete : function() {},    

      autoPlay : false,                       
      pauseOnHover : false,                  
      cycleSpeed : 1000,                   
      easing : 'swing',                      

      theme : 'basic',                      
      rounded : false,                    
      enumerateSlides : false,              
      linkable : false                     
    });
}
var containerWidth = $(".solution3-container").width();
  ShowLiteAccordion3(containerWidth, 320, 340);
  function dynamicSizing3(){
    var containerWidth = $(window).width();
    containerWidth = Math.min(containerWidth, 1029);
    var containerHeight = (containerWidth/1029) * 320; // dyncmic
    var headerWidth = (containerWidth/1029) * 340; // dynamic
    ShowLiteAccordion3(containerWidth, containerHeight, headerWidth);
  }
  $(window).ready(function(){
    dynamicSizing3();
  });
  $(window).resize(function(){
    dynamicSizing3();
  });
$('a.reWrite').each(function() {
    $(this).attr("href", function(index, old) {
    return old.replace("solution/", "");
  });
});