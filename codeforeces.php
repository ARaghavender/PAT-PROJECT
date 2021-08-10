<html>
<head>
  
  <?php
  include('simple_html_dom.php');
  $cse=file_get_html("https://codeforces.com/profile/raghavender_19");
  ?>

</head>
<body>
<ul>
       <li> <h2>Name</h2>
        <p style="font-size: 2em"><?php  for($i=0;$i<2;$i++){
         echo $cse->find('.main-info h1 a',$i)->innertext;
         error_reporting(0);    
       }?>
     </p>
   </li>

   
   <li>
    <h2>Solved For </h2>
    <h2>All Time</h2>
    <p style="font-size: 2em"> <?php  for($i=0;$i<1;$i++){
     echo $cse->find('._UserActivityFrame_counterValue',$i)->innertext;
     error_reporting(0);    
   }?></p>
 </li>

 
 <li>
  <h2>solved for</h2>
  <h2>last year</h2>
  <p style="font-size: 2em"><?php  for($i=1; $i<2;$i++){
   echo $cse->find('._UserActivityFrame_counterValue',$i)->innertext;
   error_reporting(0);    
 }?></p>
</li>


<li>
  <h2>solved for </h2>
  <h2>last month</h2>
  <p style="font-size: 2em">
    <?php  for($i=2; $i<3;$i++){
     echo $cse->find('._UserActivityFrame_counterValue',$i)->innertext;
     error_reporting(0);    
   }?>
 </p>
</li>


<li>
  <h2>in a row max.</h2>
  <p style="font-size: 2em"><?php  for($i=3; $i<4;$i++){
   echo $cse->find('._UserActivityFrame_counterValue',$i)->innertext;
   error_reporting(0);    
 }?></p>
</li>


<li>
  <h2>in a row for</h2>
  <h2>the last year</h2>
  <p style="font-size: 2em"><?php  for($i=4; $i<5;$i++){
   echo $cse->find('._UserActivityFrame_counterValue',$i)->innertext;
   error_reporting(0);    
 }?></p>
</li>


<li>
  <h2>in a row for</h2>
  <h2>the last month</h2>
  <p style="font-size: 2em"><?php  for($i=5; $i<6;$i++){
   echo $cse->find('._UserActivityFrame_counterValue',$i)->innertext;
   error_reporting(0);    
 }?></p>
</li>


<li>
  <h2>Contest Rating</h2>
  <p style="font-size: 2em;margin-left: 300px;">
    <?php
 for($i=7; $i<8;$i++){
     echo $cse->find('.user-gray',$i)->innertext;
   }?></p>
</li>


</ul>

</body>
</html>