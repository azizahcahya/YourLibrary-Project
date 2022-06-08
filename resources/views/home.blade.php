@extends('layouts.header')

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
<link rel="stylesheet" href="<?php echo asset('css/home.css')?>" type="text/css">


@section('Container')
    <div id="slider">
        <ul id="slideWrap"> 
        <li><img src="https://1.bp.blogspot.com/-GgceYGYr2pk/YPCQp8loxqI/AAAAAAAACXU/Y795AFD-cN8PMV0V2__z2n1B3KFagE8qgCNcBGAsYHQ/s16000/1.jpg" alt=""></li>
        <li><img src="https://1.bp.blogspot.com/-pl0VR_xS5Cw/YPCQp1scezI/AAAAAAAACXc/oB9xc6k8RuY5rPksMSy01f3iUn8zSIFzwCNcBGAsYHQ/s16000/2.jpg" alt=""></li>
        <li><img src="https://1.bp.blogspot.com/-dt6CL2fiBq0/YPCQp0zmK6I/AAAAAAAACXY/0PevDL7pvx87mefb4oCnO613N1UitdicQCNcBGAsYHQ/s16000/3.jpg" alt=""></li>
        <li><img src="https://1.bp.blogspot.com/-T_V-s57aVDo/YPCQrWayswI/AAAAAAAACXg/h1ifJGnBuXovvBdGDNvmhg-DXIVK4Xw9QCNcBGAsYHQ/s16000/4.jpg" alt=""></li>
        <li><img src="https://1.bp.blogspot.com/-TNT1a5M1v3o/YPCQrWmn_fI/AAAAAAAACXk/p8nx_OB2R6Aw172WIv5vuB8jF-qWDsHlwCNcBGAsYHQ/s16000/5.jpg" alt=""></li>
        </ul>
        <a id="prev" href="#">&#8810;</a>
        <a id="next" href="#">&#8811;</a>
    </div>
    
    <script>
        var responsiveSlider = function() {
    
        var slider = document.getElementById("slider");
        var sliderWidth = slider.offsetWidth;
        var slideList = document.getElementById("slideWrap");
        var count = 1;
        var items = slideList.querySelectorAll("li").length;
        var prev = document.getElementById("prev");
        var next = document.getElementById("next");
        
        window.addEventListener('resize', function() {
        sliderWidth = slider.offsetWidth;
        });
        
        var prevSlide = function() {
        if(count > 1) {
            count = count - 2;
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
        }
        else if(count = 1) {
            count = items - 1;
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
        }
        };
        
        var nextSlide = function() {
        if(count < items) {
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
        }
        else if(count = items) {
            slideList.style.left = "0px";
            count = 1;
        }
        };
        
        next.addEventListener("click", function() {
        nextSlide();
        });
        
        prev.addEventListener("click", function() {
        prevSlide();
        });
        
        setInterval(function() {
        nextSlide()
        }, 5000);
        
        };
        
        window.onload = function() {
        responsiveSlider();  
        }
    
    
    </script>
@endsection