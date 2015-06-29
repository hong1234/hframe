
<!DOCTYPE html>
<html>
  
  <head>
    <title>HFrame_0615</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css"  href="css/format.css" />   
  </head>
  
  <body>
  <div id="Wrapper">
  
   <div id="head">
      {include file="head.tpl"}
   </div>

   <div id="menu1">
      <div id="mn1">
         {include file=$menu1}
      </div>
   </div>
   
   <div id="main">
      <div id="menu2">
         <div id="mn2">
            {include file=$menu2}
         </div>
      </div>
   
      <div id="content">
         <div id="ct">
            <h4>Content</h4>
            {include file=$main}
         </div>
      </div>
   </div>
   
   <div id="foot">
      {include file="foot.tpl"}
   </div> 
 </div>    
  </body>
  
</html>
