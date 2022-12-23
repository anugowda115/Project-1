
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
    <link rel="stylesheet" href="css/sgbhs-style.css">
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="css/style-sheet.css">
<style>

.custom-coursepage-title {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 400px;
  margin-top: -30px;
  color: #FFF;
}

.items{
  height: 350px;
  background: transparent;
  margin: 0 auto;
  overflow-x: hidden;
  overflow-y: hidden;
  cursor: pointer;
  position: relative;
}

.item {
  width: 400px;
  height: 120px;
  background: #343F53;
  margin-bottom: 22px;
  margin-left: auto;
  margin-right: auto;
  transition: all 2s ease;
  transform: translateY(142px) scale(0.9);
  display: flex;
  justify-content: center;
  border-radius: 10px;
  align-items: center;
  padding: 20px;
}

.item > div{
  opacity: 0;
  transition: all 2s ease;
}

.active{
  opacity: 1;
}

.active > div{
  opacity: 1;
}

.custom-profilepic-wrapper {
  flex:1;
}
.custom-profilepic {
  width: 50px;
  height: 50px;
  background: #D8D8D8;
  border-radius: 100px;
  /* margin: 4px auto;  */
}

.custom-testimonial-content{
  flex:4;

}

.custom-testimonial-content p{color:#fff;}

.custom-testimonial-title{
  font-size: 16px;
  line-height: 1.5;
  margin-top: 2px;
  
}


.custom-testimonial-author{
  opacity: 0.5;
  
}

@media screen and (max-width: 480px){ 
  .item {
    width: unset;
    flex-direction: column;
  }
   .item {
    width: 300px;
  }
}
@media screen and (max-width: 360px){  .item {
    width: 200px;
  }}
    </style>
</head>

<body>
    <section class="latest-news-frame-container">
    <div class="custom-coursepage-banner">
    <div class="container">
      <div class="row">
     
      <div class="items col-md-6">
    <div class="item active testimonial2">
          <div class="custom-profilepic-wrapper">
            <div class="custom-profilepic"><img src="images/face1.jpg" alt=""></div>
          </div>
          <div class="custom-testimonial-content">
            <p class="custom-testimonial-title">Brilliant Course, there’s so much i learnt from watching just a couple of videos</p>
            <p class="custom-testimonial-author">Kushagra Agarwall, Founder of Coneapp.io</p>
          </div> 
     </div>
        <div class="item testimonial2">
            <div class="custom-profilepic-wrapper">
        <div class="custom-profilepic"><img src="images/face1.jpg" alt=""></div>
      </div>
      <div class="custom-testimonial-content">
        <p class="custom-testimonial-title">Brilliant Course, there’s so much i learnt from watching just a couple of videos</p>
        <p class="custom-testimonial-author">Kushagra Agarwall, Founder of Coneapp.io</p>
      </div> 
        
        
        </div>
        <div class="item testimonial3">
            <div class="custom-profilepic-wrapper">
        <div class="custom-profilepic"><img src="images/face1.jpg" alt=""></div>
      </div>
      <div class="custom-testimonial-content">
        <p class="custom-testimonial-title">Brilliant Course, there’s so much i learnt from watching just a couple of videos</p>
        <p class="custom-testimonial-author">Kushagra Agarwall, Founder of Coneapp.io</p>
      </div> 
        
        </div>
        <div class="item testimonial4">
            <div class="custom-profilepic-wrapper">
        <div class="custom-profilepic"><img src="images/face1.jpg" alt=""></div>
      </div>
      <div class="custom-testimonial-content">
        <p class="custom-testimonial-title">Brilliant Course, there’s so much i learnt from watching just a couple of videos</p>
        <p class="custom-testimonial-author">Kushagra Agarwall, Founder of Coneapp.io</p>
      </div> 
        
        
        </div>
        <div class="item testimonial5">
            <div class="custom-profilepic-wrapper">
        <div class="custom-profilepic"><img src="images/face1.jpg" alt=""></div>
      </div>
      <div class="custom-testimonial-content">
        <p class="custom-testimonial-title">Brilliant Course, there’s so much i learnt from watching just a couple of videos</p>
        <p class="custom-testimonial-author">Kushagra Agarwall, Founder of Coneapp.io</p>
      </div> 
        
        </div>
      </div>
      </div>
    </div>
  </div>
  
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    const slider = document.querySelector('.items');
let sliderNodes = document.querySelectorAll('.item');
let intervalFn = "";
let iterator = 1;

let initialize = () => {
  let x, y = getTransformValue(sliderNodes[0])
  sliderNodes[0].style.transform = `translateY(${y}px)  scale(1)`
}
  

let animateItems = (index) => {
  console.log(index)
  sliderNodes[index].classList.add('active');
  sliderNodes[index-1].classList.remove('active');
  moveUp(index);
}

let moveUp = (index) => {
  sliderNodes.forEach((node, i) => {
    let x, y = getTransformValue(node)
    node.style.transform = `translateY(${y-142}px)  scale(0.9)`
    if(i == index) node.style.transform = `translateY(${y-142}px)  scale(1)`
  })
}

let getTransformValue = (node) => {
  cssTransform = window.getComputedStyle(node).getPropertyValue('transform')
  let matrix = cssTransform.replace(/[^0-9\-.,]/g, '').split(',');
  let transformX = matrix[12] || matrix[4];
  let transformY = matrix[13] || matrix[5];
  return transformX, transformY
}

let startAnimation = () => {
 
  
  
  intervalFn = setInterval(() => {
   
      animateItems(iterator)
      iterator++  
      if (iterator == sliderNodes.length) resetAnimation()  
    }, 3000)
}

let resetAnimation = () => {
  clearInterval(intervalFn)
  iterator=1;

  setTimeout(() => 
  {
    sliderNodes.forEach((node, i) => {
      node.classList.remove('active')
      node.style.transform = `translateY(142px) scale(0.9)`
      if(i==0) {
        node.style.transform = `translateY(142px) scale(1)`
        setTimeout(() => {
          node.classList.add('active')
        }, 500)
        
      }
      })
    startAnimation();
    
    
  }, 3000)
}

 initialize()
startAnimation()



  </script>