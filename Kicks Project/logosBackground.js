var HeaderImageArray = [
    "addidasLogo.jpeg",
    "airJordanLogo.jpeg",
    "IversonLogo.jpeg",
    "pennyLogo.jpeg",
    "nikeLogo.jpeg",
    "jordanJumpmanLogo.jpeg"
  ];
  
  var currentImageIndex = 0;
  var intervalTime = 3500; // Time in milliseconds (3.5 seconds in this case)
  
  function changeHeaderImage() {
    var Image = document.getElementById("logo");
Image.src = HeaderImageArray[currentImageIndex];
  
    // Increment the current image index
    currentImageIndex++;
  
    // If the current image index exceeds the length of the array, reset it to 0
    if (currentImageIndex >= HeaderImageArray.length) {
      currentImageIndex = 0;
    }
  }
  
  // Call the changeHeaderImage function initially
  changeHeaderImage();
  
  // Set the interval to change the header image every specified time
  setInterval(changeHeaderImage, intervalTime);
  
  
    