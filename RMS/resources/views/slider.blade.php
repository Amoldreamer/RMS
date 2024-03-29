<!DOCTYPE html>
<html>
    <head>
        <title>FullScreen Slider</title>
        <link rel="stylesheet" href="{{URL::asset('css/slider.css')}}">
    </head>
    <body>
       <div class="wrap">
           <div id="arrow-left" class="arrow"></div>
            <div id="slider">
                <div class="slide slide1">
                    <div class="slide-content">
                        <span></span>
                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-content">
                       <span></span>
                </div>
                </div>
                <div class="slide slide3">
                    <div class="slide-content">
                       <span></span>
                    </div>
                </div>
            </div>
           <div id="arrow-right" class="arrow"></div>
       </div>
       <script>
           let sliderImages = document.querySelectorAll('.slide'),
                arrowLeft = document.querySelector('#arrow-left'),
                arrowRight = document.querySelector('#arrow-right'),
                current = 0;

            //Clear all images
            function reset(){
                for(let i = 0; i < sliderImages.length; i++){
                    sliderImages[i].style.display = 'none';
                }
            }

            //Initializes slider
            function startSlide(){
                reset();
                sliderImages[0].style.display = 'block';
            }

            //Show prev
            function slideLeft(){
                reset();
                sliderImages[current - 1].style.display = 'block';
                current--;
            }

            //Show next
            function slideRight(){
                reset();
                sliderImages[current + 1].style.display = 'block';
                current++;
            }

            //Left arrow click
            arrowLeft.addEventListener('click',function(){
                if(current === 0){
                    current = sliderImages.length;
                }
                slideLeft();
            });

            //Right arrow click
            arrowRight.addEventListener('click',function(){
                if(current === sliderImages.length - 1){
                    current = -1;
                }
                slideRight();
            });
            startSlide();
        </script>
    </body>
</html>