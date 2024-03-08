var backgroundImageArray = [
    'J11_SJ_S.jpg',
    'J10.jpg',
    'max97T.jpg',
    'J11S.jpg',
    'P1S.jpg',
    'pfps.jpg'
    
    
   ];
   var currentImageIndex = 0;
   var intervalTime = 3500; // Time in milliseconds (3.5seconds in this case)
   
   function changeBackgroundImage() {
     var bodyElement = document.getElementById("myBody");
     bodyElement.style.backgroundImage = "url(" + backgroundImageArray[currentImageIndex] + ")";
     
     // Increment the current image index
     currentImageIndex++;
     
     // If the current image index exceeds the length of the array, reset it to 0
     if (currentImageIndex >= backgroundImageArray.length) {
       currentImageIndex = 0;
     }
   }
   
   // Call the changeBackgroundImage function initially
   changeBackgroundImage();
   
   // Set the interval to change the background image every specified time
   setInterval(changeBackgroundImage, intervalTime);
    