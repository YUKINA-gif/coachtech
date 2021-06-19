@extends('layout.layout')
@section('title','Index')
    
@section('main')

<div id="mainimage">
    <p id="main">機械ではできない仕事を</p>

    <div class="news_box1">
      <p class="news_day">2019/01/01</p>
      <p class="news_title">ニュースタイトルがここには入ります。3月の決算報告書</p>
    </div>
    <div class="news_box2">
      <p class="news">news</p>
    </div>
  </div>
  
<!--ミッション詳細ここから-->
    <div id="mission">


      <div id="mission_img">
        <p></p>
      </div>

      <div id="container">
      <h2>お客様のために進化する成長企業であり続ける</h2>
      <p>顧客主導型サービスを提供する企業として、お客様の会社経営に必要なサービスと情報を提供し続ける企業支援会社を目指します。企業が現在直面している「勝ち残るため」の顧客を提供できる会社として、ホームページをはじめ、各種マーケティングをご提供いたします。</p>

      <div id="mission_detail">
        <p><a href="#">ミッション詳細</a></p>
      </div>

      </div>

    </div>

<!--サービスここから-->
    <div id="service">
      <h2>service</h2>
      <div id="service_img1"></div>

      <div id="container1">
        <h3>web制作事業</h3>
        <p class="service_p">コーチングのミッション</p>
        <p class="service_p2">ユーザーが求める物を分析し、ユーザビリティを備えた最適なサイトを提供。建設業から美容、ブライダル、飲食店まで多種多様な業種の制作実績があります</p>

        <div class="service_detail"><p><a href="#">サービス詳細</a></p></div>
      </div>

      <div id="service_img2"></div>

      <div id="container2">
        <h3>web制作事業</h3>
        <p class="service_p">コーチングのミッション</p>
        <p class="service_p2">ユーザーが求める物を分析し、ユーザビリティを備えた最適なサイトを提供。建設業から美容、ブライダル、飲食店まで多種多様な業種の制作実績があります</p>
      
        <div class="service_detail">
          <p><a href="#">サービス詳細</a></p>
        </div>
      </div>
    </div>

<!--会社概要、採用情報ここから-->
  <div class="wrapper">
    <div class="flex" id="company">
      <a href="#">
      <h2>company</h2>
      <p>会社概要</p>
      </a>
    </div>

    <div class="flex" id="recruit">
      <a href="#">
      <h2>recruit</h2>
      <p>採用情報</p>
      </a>
    </div>
  </div>

<!--FAQここから-->

  <div id="faq">
    <a class="a" href="#">
    <h2>FAQ</h2>
    <p>良くある質問</p>
    </a>
  </div>

<!--お問い合わせここから-->

  <div id="contact">
    <div id="contact_text">
      <h2 class="ct">contact</h2>
      <p class="ct" id="contact_text1">お問い合わせ</p>
      <span class="ct">お気軽にお問い合わせください。</span>
      <p class="ct" id="contact_text2">資料請求・お問い合わせなどなんでも気軽にお問い合わせください。お仕事のご連絡もお問い合わせページに飛んでいただいて、入力フォームにご記入お願いいたします。</p>

      <p class="ct" id="contact_text3"><a href="#" method=post>お問い合わせへ</a></p>
    </div>
  </div>
  @endsection