let slideIndex0 = 1;
        showSlides0(slideIndex0);
        
        function plusSlides0(n) {
          showSlides0(slideIndex0 += n);
        }
        
        function currentSlide0(n) {
          showSlides0(slideIndex0 = n);
        }
        
        function showSlides0(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides0");
          if (n > slides.length) {slideIndex0 = 1}    
          if (n < 1) {slideIndex0 = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          slides[slideIndex0-1].style.display = "block";  
        }

let slideIndex1 = 1;
    showSlides1(slideIndex1);
    
    function plusSlides1(n) {
      showSlides1(slideIndex1 += n);
    }
    
    function currentSlide1(n) {
      showSlides1(slideIndex1 = n);
    }
    
    function showSlides1(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides1");
      if (n > slides.length) {slideIndex1 = 1}    
      if (n < 1) {slideIndex1 = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      slides[slideIndex1-1].style.display = "block";  
    }

let slideIndex2 = 1;
    showSlides2(slideIndex2);
    
    function plusSlides2(n) {
      showSlides2(slideIndex2 += n);
    }
    
    function currentSlide2(n) {
      showSlides2(slideIndex2 = n);
    }
    
    function showSlides2(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides2");
      if (n > slides.length) {slideIndex2 = 1}    
      if (n < 1) {slideIndex2 = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      slides[slideIndex2-1].style.display = "block";  
    }

let slideIndex3 = 1;
    showSlides3(slideIndex3);
    
    function plusSlides3(n) {
      showSlides3(slideIndex3 += n);
    }
    
    function currentSlide3(n) {
      showSlides3(slideIndex3 = n);
    }
    
    function showSlides3(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides3");
      if (n > slides.length) {slideIndex3 = 1}    
      if (n < 1) {slideIndex3 = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      slides[slideIndex3-1].style.display = "block";  
    }

    let slideIndex4 = 1;
    showSlides4(slideIndex4);
    
    function plusSlides4(n) {
      showSlides4(slideIndex4 += n);
    }
    
    function currentSlide4(n) {
      showSlides4(slideIndex4 = n);
    }
    
    function showSlides4(n) {
      let i;
      let slides4 = document.getElementsByClassName("mySlides4");
      if (n > slides4.length) {slideIndex4 = 1}    
      if (n < 1) {slideIndex4 = slides4.length}
      for (i = 0; i < slides4.length; i++) {
          slides4[i].style.display = "none";  
      }
      slides4[slideIndex4-1].style.display = "block";  
    }