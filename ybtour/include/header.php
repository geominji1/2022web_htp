<?php
 include './include/header.php';
 ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>노랑풍선</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.4/swiper-bundle.css" integrity="sha512-303pOWiYlJMbneUN488MYlBISx7PqX8Lo/lllysH56eKO8nWIMEMGRHvkZzfXYrHj4j4j5NtBuWmgPnkLlzFCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/jquery.bxslider.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.4/swiper-bundle.min.js" integrity="sha512-Hvn3pvXhhG39kmZ8ue3K8hw8obT4rfLXHE5n+IWNCMkR6oV3cfkQNUQqVvX3fNJO/JtFeo/MfLmqp5bqAT+8qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
     


        $(document).ready(function(){
            $("#sdate1,#edate1,#sdate2,#edate2,#sdate3,#edate3,#sdate4,#edate4").datepicker({
                dateFormat: 'yy/mm/dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                dayNames: ['일','월','화','수','목','금','토'],
                dayNamesShort: ['일','월','화','수','목','금','토'],
                dayNamesMin: ['일','월','화','수','목','금','토'],
                showMonthAfterYear: true,

                yearSuffix: '년'
            })




            var slide = $(".slide01").bxSlider({
                controls:false,
                pagerCustom:".slideTap",
                mode:"vertical",
                touchEnabled: false
                
            });

        })


      

    </script>


    





</head>
<body>
<header>
    <div class="headerWrap">
        <img src="images/04aiY.jpg" alt="">
        <div class="header">
            <ul class="clearfix">
                <li>
                    <a href="./index.html"><img src="images/logo.jpg" alt=""></a>
                </li>
                <li>
                    <form action="#">
                    <input type="text" name="search" placeholder="검색어를 입력하세요" class="inp"></form>
                    <p class="title">SEARCH</p>
                    <div class="icon">
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                </li>
                <li>
                    <h4>+051 713 0710</h4>
                    <div class="sns">
                     <a href="#"><img src="images/01sns.png" alt=""></a>
                     <a href="#"><img src="images/02sns.png" alt=""></a>
                     <a href="#"><img src="images/03sns.png" alt=""></a>
                     <a href="#"><img src="images/04sns.png" alt=""></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>



<nav>
    <div class="mainMenu">
        <ul class="clearfix">
            <li><a href="sb01_citytour.html"><h4>여행도시</h4></a></li>
            <li><a href="sb02_hotel.html"><h4>호텔예약</h4></a></li>
            <li><a href="sb03_rental.html"><h4>렌트카</h4></a></li>
            <li><a href="sb04_travel.html"><h4>여행TIP</h4></a></li>
            <li><a href="sb05_company.html"><h4>회사소개</h4></a></li>
            <li><a href="sb06_community.html"><h4>커뮤니티</h4></a></li>
        </ul>
    </div>
</nav>

<section>
<div class="line01"></div>





<div class="contentsMaie">
    <div class="sec01 clearfix">
        <div class="form">
            <div class="formSlideWrap">
                <ul class="slide01 claerfix">

                

                    <li>
                        <form action="#">
                            <fieldset>
                                <div class="field">
                                    <label for="gogo">가고싶은 나라를 선택하세요.</label>
                                    <select name="golo">
                                        <option value="">선택하세요</option>
                                        <option value="일본">일본</option>
                                        <option value="미국">미국</option>
                                    </select>
                                </div>
                                <div class="field date">
                                    <div class="left">
                                        <label for="sdate">출발일</label>
                                        <input type="text" id="sdate1" class="inp-field">
                                    </div>
                                    <div class="right"> 
                                        <label for="edate">도착일</label>
                                        <input type="text" id="edate1" class="inp-field">
                                    </div>
                                   
                                </div>
                                <div class="field air">
                                    <div>
                                        <label for="userseat">좌석등급</label>
                                        <select name="userseat" id="userseat">
                                            <option value="최고">최고</option>
                                            <option value="일반">일반</option>
                                            
                                        </select>
                                    </div>
                                    <div>
                                        <label for="usernum">인원</label>
                                        <input type="number" name="usernum" id="usernum" class="inp-field">
                                    </div>
                                </div>
                            </fieldset>
                            <button>검색하기</button>
                        </form>
                    </li>
    
                    <li>
                        <form action="#">
                            <fieldset>
                                <div class="field">
                                    <label for="gogo">가고싶은 나라를 선택하세요.</label>
                                    <select name="golo">
                                        <option value="">선택하세요</option>
                                        <option value="일본">일본</option>
                                        <option value="미국">미국</option>
                                    </select>
                                </div>
                                <div class="field date">
                                    <div class="left">
                                        <label for="sdate">출발일</label>
                                        <input type="text" id="sdate2" class="inp-field">
                                    </div>
                                    <div class="right"> 
                                        <label for="edate">도착일</label>
                                        <input type="text" id="edate2" class="inp-field">
                                    </div>
                                   
                                </div>
                                <div class="field air">
                                    <div>
                                        <label for="userseat">좌석등급</label>
                                        <select name="userseat" id="userseat">
                                            <option value="최고">최고</option>
                                            <option value="일반">일반</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="usernum">인원</label>
                                        <input type="number" name="usernum" id="usernum" class="inp-field">
                                    </div>
                                </div>
                            </fieldset>
                            <button>검색하기</button>
                        </form>
                    </li>
    
                    <li>
                        <form action="#">
                            <fieldset>
                                
                                <div class="field">
                                    <label for="gogo">가고싶은 나라를 선택하세요.</label>
                                    <select name="golo">
                                        <option value="">선택하세요</option>
                                        <option value="일본">일본</option>
                                        <option value="미국">미국</option>
                                    </select>
                                </div>
                                <div class="field date">
                                    <div class="left">
                                        <label for="sdate">출발일</label>
                                        <input type="text" id="sdate3" class="inp-field">
                                    </div>
                                    <div class="right"> 
                                        <label for="edate">도착일</label>
                                        <input type="text" id="edate3" class="inp-field">
                                    </div>
                                   
                                </div>
                                <div class="field air">
                                    <div>
                                        <label for="userseat">좌석등급</label>
                                        <select name="userseat" id="userseat">
                                            <option value="최고">최고</option>
                                            <option value="일반">일반</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="usernum">인원</label>
                                        <input type="number" name="usernum" id="usernum" class="inp-field">
                                    </div>
                                </div>
                            </fieldset>
                            <button> 검색하기</button>
                        </form>
                    </li>
    
    
    
                     <li>
                        <form action="#">
                            <fieldset>
                                <div class="field">
                                    <label for="gogo">가고싶은 나라를 선택하세요.</label>
                                    <select name="golo">
                                        <option value="">선택하세요</option>
                                        <option value="일본">일본</option>
                                        <option value="미국">미국</option>
                                    </select>
                                </div>
                                <div class="field date">
                                    <div class="left">
                                        <label for="sdate">출발일</label>
                                        <input type="text" id="sdate4" class="inp-field">
                                    </div>
                                    <div class="right"> 
                                        <label for="edate">도착일</label>
                                        <input type="text" id="edate4" class="inp-field">
                                    </div>
                                   
                                </div>
                                <div class="field air">
                                    <div>
                                        <label for="userseat">좌석등급</label>
                                        <select name="userseat" id="userseat">
                                            <option value="최고">최고</option>
                                            <option value="일반">일반</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="usernum">인원</label>
                                        <input type="number" name="usernum" id="usernum" class="inp-field">
                                    </div>
                                </div>
                            </fieldset>
                            <button>검색하기</button>
                        </form>
                    </li>
    
    
                    
                </ul>
            </div>
           
            <div class="slideTap">
                <a href="#" data-slide-index="0">공항예약</a>
                <a href="#" data-slide-index="1">호텔예약</a>
                <a href="#" data-slide-index="2">렌트카</a>
                <a href="#" data-slide-index="3">휴양지</a>
            </div>

        </div>

        <div class="textWrap">
            <img src="images/content2.png" alt="" class="balloon01">
                <div class="text">
                 <h1>TRAVEL GO</h1>
                    <div class="line02"></div>
                    <h3>지금,여행이 떠나고 싶다면? <br>
                    노랑풍선과 여행을 떠나자!</h3>
                </div>


            
        </div>
        
        <div class="content">
            <a href="#"><img src="images/03ttt01.jpg" alt=""></a>
            <div class="box">
                <ul class="clearfix">
                    <li><h3>프랑스</h3></li>
                    <li><h4>￦1,900,000~</h4></li>
                </ul>
                <img src="images/arrow.png" alt="">
            </div>
        </div>

        <div class="content">
            <a href="#"><img src="images/03ttt02.jpg" alt=""></a>
            <div class="box">
                <ul class="clearfix">
                    <li><h3>일본</h3></li>
                    <li><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￦890,000~</h4></li>
                </ul>
                <img src="images/arrow.png" alt="">
            </div>
        </div>
    </div>


    <div class="sec02">
        <div class="travel">
            <div class="sliderWrap">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide swiper1st">
                        <img src="images/03ttt03.jpg" alt="" class="slider01">
                            <div class="sliderbox">
                                <ul class="clearfix">
                                    <li><h3>HILLTON HOTEL</h3></li>
                                    <li><img src="images/star.png" alt=""></li>
                                </ul>
                            </div>
                      </div>
                    </div>
    
                    <div class="swiper-button-next">
                    </div>
                    <div class="swiper-button-prev">
                    </div>
                </div>
            </div>

        </div>



        <div class="travel">
            <div class="sliderWrap">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide swiper1st">
                        <img src="images/03ttt02.jpg" alt="" class="slider02">
                            <div class="sliderbox">
                                <ul class="clearfix">
                                    <li><h3>HILLTON HOTEL</h3></li>
                                    <li><img src="images/star.png" alt=""></li>
                                </ul>
                            </div>
                      </div>
                    </div>
    
                    <div class="swiper-button-next">
                    </div>
                    <div class="swiper-button-prev">
                    </div>
                </div>
            </div>

        </div>



        <div class="travel">
            <a href="#"><img src="images/03ttt01.jpg" alt=""></a>
            <div class="box">
                <ul class="clearfix">
                    <li><h3>프랑스</h3></li>
                    <li><h4>￦1,900,000~</h4></li>
                </ul>
                <img src="images/arrow.png" alt="">
            </div>        
        </div>


        
        <div class="travel">
            <a href="#"><img src="images/03ttt01.jpg" alt=""></a>
            <div class="box">
                <ul class="clearfix">
                    <li><h3>프랑스</h3></li>
                    <li><h4>￦1,900,000~</h4></li>
                </ul>
                <img src="images/arrow.png" alt="">
            </div>        
        </div>     
            
            <div class="travel">
                <a href="#"><img src="images/03ttt01.jpg" alt=""></a>
                <div class="box">
                    <ul class="clearfix">
                        <li><h3>프랑스</h3></li>
                        <li><h4>￦1,900,000~</h4></li>
                    </ul>
                    <img src="images/arrow.png" alt="">
                </div>        
            </div>

            <div class="travel">
                <a href="#"><img src="images/03ttt01.jpg" alt=""></a>
                <div class="box">
                    <ul class="clearfix">
                        <li><h3>프랑스</h3></li>
                        <li><h4>￦1,900,000~</h4></li>
                    </ul>
                    <img src="images/arrow.png" alt="">
                </div>        
            </div>


            <div class="travel">
                <a href="#"><img src="images/03ttt02.jpg" alt=""></a>
                <div class="box">
                    <ul class="clearfix">
                        <li><h3>프랑스</h3></li>
                        <li><h4>￦1,900,000~</h4></li>
                    </ul>
                    <img src="images/arrow.png" alt="">
                </div>        
            </div>


            <div class="travel">
                <a href="#"><img src="images/03ttt03.jpg" alt=""></a>
                <div class="box">
                    <ul class="clearfix">
                        <li><h3>프랑스</h3></li>
                        <li><h4>￦1,900,000~</h4></li>
                    </ul>
                    <img src="images/arrow.png" alt="">
                </div>        
            </div>

            
            
               


    </div>   