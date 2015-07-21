<html>
<head>
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(window).load(function() {           
  var i =0; 
  var j;
  var imagesbox1 = ['image2_ADT.png','image3_ADT.png','image1_LS.png'];
  var imagesbox2 = ['image4.png','image5.png'];
  
  var image1b = $('#box1image'); //box 1 image variable
  var image2b = $('#box2image'); //box 2 image variable
                //Initial Background image setup
  image1b.css('background-image', 'url(image2_ADT.png)');
  image2b.css('background-image', 'url(image4.png)');

                //Change image at regular intervals
  setInterval(function(){
  image1b.fadeOut(500, function () {
    image2b.fadeOut(500);
    j = i++;
    console.log(j);
    image1b.css('background-image', 'url(' + imagesbox1 [j] +')'); 
      console.log(j);
      if((imagesbox1[j].match(/ADT/g)) == "ADT")
      {
        console.log(j);
        console.log((imagesbox1[j].match(/ADT/g)));
        image2b.css('background-image', 'url(image4.png)');
      }
      else if((imagesbox1[j].match(/LS/g)) == "LS")
      {
        console.log(j);
        console.log((imagesbox1[j].match(/LS/g)));
        image2b.css('background-image', 'url(image5.png)');
      }
   });
   if(i == imagesbox1.length)
    i = 0;
  }, 5000);            
 });
</script>
</head>
<body>
      <div id="box1image" style="width:400px;height:200px;">  
      </div>
      <br/>
      <div id="box2image" style="width:400px;height:100px;">  
      </div>
</body>
</html>