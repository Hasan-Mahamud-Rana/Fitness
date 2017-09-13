function ShowLiteAccordion(containerWidth, containerHeight, headerWidth)
{

if($('.campaign.liteAccordion').length > 0){
  $('.campaign.liteAccordion').liteAccordion("destroy");
}
$('.campaign').liteAccordion({
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
var containerWidth = $(".campaign-container").width();
  ShowLiteAccordion(containerWidth, 150, 170);
  function dynamicSizing(){
    var containerWidth = $(window).width();
    containerWidth = Math.min(containerWidth, 1029);
    var containerHeight = (containerWidth/1029) * 150; // dyncmic
    var headerWidth = (containerWidth/1029) * 170; // dynamic
    ShowLiteAccordion(containerWidth, containerHeight, headerWidth);
  }
  $(window).ready(function(){
    dynamicSizing();
  });
  $(window).resize(function(){
    dynamicSizing();
  });

function ShowLiteAccordion1(containerWidth, containerHeight, headerWidth)
{

if($('.campaign1.liteAccordion').length > 0){
  $('.campaign1.liteAccordion').liteAccordion("destroy");
}
$('.campaign1').liteAccordion({
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
var containerWidth = $(".campaign1-container").width();
  ShowLiteAccordion1(containerWidth, 150, 170);
  function dynamicSizing1(){
    var containerWidth = $(window).width();
    containerWidth = Math.min(containerWidth, 1029);
    var containerHeight = (containerWidth/1029) * 150; // dyncmic
    var headerWidth = (containerWidth/1029) * 170; // dynamic
    ShowLiteAccordion1(containerWidth, containerHeight, headerWidth);
  }
  $(window).ready(function(){
    dynamicSizing1();
  });
  $(window).resize(function(){
    dynamicSizing1();
  });

