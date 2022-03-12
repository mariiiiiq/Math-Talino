<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="../assets/img/logo-sm.ico" rel="icon">
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Math-Talino</title>
    <style>
        .bi-patch-question{
          color: #3066a0;
          font-size: 1.5rem;
        }
        .bi-forward-fill, .bi-chevron-double-right{
          color: #ef7d96;
          font-size: 1.3rem;
        }
        body{
          text-align:justify;
        }
        .numbers{
          background-color:#77a7d8;
          padding:10px;
          float:right;
          border-radius: 3px;
        }
        .crd{
          background-color: #3066a0;
          width:50px;
          height:40px;
          text-align: center;
          color: #fff;
          font-size: 1.2rem;
          padding-top:5px;
          border-radius: 3px;
          display:inline-block;
        }
        .circle{
          position: absolute;
          display:block;
          margin-left: 10px;
          margin-top:-3px;
          width:30px;
        }
        .exis{
          position: absolute;
          margin-left: -30px;
          margin-top:3px;
          width:30px;
        }
        .q{
          position:absolute;
          width:100px;
          margin-top:-25px;
          margin-left: 280px;
          z-index:-1;
        }
        .pic{
          margin:auto;
          width:70%;
        }
        .start{
          margin-bottom:300px;
        }
        .ross{
          position:absolute;
          width:100px;
          margin-top:-100px;
          margin-left: -60px;
        }
        @media only screen and (max-width: 576px) { 
    
        .q{
          margin-top:-50px;
              margin-left: 230px;
        }
        .ross{
          display:block;
          width:100%;
          margin-top:-40px;
          margin-left: -60px;
        }
        .start{
        margin-bottom:110px;
        }

        .pic{
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid mx-5">
      <a class="navbar-brand bold w-50" href="pre-test.php"><img src="../assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php session_start();
            echo $_SESSION['user'];?>
          </a>
          <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-itaem text-danger" href="../index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid p-5">
      <!--content here-->
      <div class="start">
        <h3>Lesson 1: <b>Prime and Composite Number</b></h3>
        <p>Let us start learning the new concept with the help of this problem.<br>
          Read and understand the problem, then answer the questions that follow.
        </p>
        
        <img src = "../assets/img/Ross.png" class="ross w-100">
      </div>
      <div class="">
        <p>What is asked in the Problem?<br>
          <span><i class="bi bi-patch-question mx-2 ps-4"></i>The number of ways that Marlo can arrange his cards.
          What are the given facts that can help you solve the problem?
          </span>
        </p>
        <p>What are the given facts that can help you solve the problem?<br>
          <span><i class="bi bi-patch-question mx-2 ps-4"></i>10 Cards</span>
        </p>
        <p>In how many ways can he arrange them?<br>
          <span><i class="bi bi-patch-question mx-2 ps-4"></i>Try to answer the problem, you can solve the problem by drawing a picture. Have patience and have fun!</span>
        </p>
      </div>
      <div>
        <p class="bold">We will find out on the next part of this module whether you answered the problem properly and correctly.</p>
        <div class="row">
          <div class="col-7 pic">
          <img src = "../assets/img/cards.png" class="w-100"> 
          </div>
          <div class="col">
            <h5 class="bold pt-5">Observe the picture</h5>
            <p>
              This picture show the different ways by which Ross can arrange his cards.
              As shown in the picture, Ross can arrange his cards in rowsof 1, 2, 5 and 10.
              <div class="mt-3">
              We can check if our answer is correct with the use of factors and multiples. These pictures show the different ways by which Ross can arrange his cards.
              <img src = "../assets/img/factors.png" class="w-100">  
              </div>
            </p>
          </div>
        </div>
      </div>
      <div>
        <p class="pt-5">Let us check if 1, 2, 5 and 10 are factors of 10.</p>
        <div class="pic">
        <img src = "../assets/img/table 1.5.jpg" class="w-100"></div>
        <p>Therefore, 1, 2, 5 and 10 are the factors of 10.</p>
        <div class="pic">
        <img src = "../assets/img/table 1.png" class="w-100">  </div>
        <p class="bold">The table above shows that 10 is present in the multiples of 1, 2, 5 and 10. Therefore, 10 is a multiple of 1, 2, 5 and 10. So, we can finally say that Ross can arrange his cards in 4ways (by 1, 2, 5 and 10).</p>
      </div>
      <div class="row">
          <div class="col-7 pic">
            <img src = "../assets/img/table 2.png" class="w-100"> 
          </div>
          <div class="col">
            Notice that 7 and 23 have 2 factors each.
            <ul style="list-style-type:none;">
              <li><i class="bi bi-chevron-double-right"></i>The factors of 7 are 1 and itself. </li>
              <li><i class="bi bi-chevron-double-right"></i>The factors of 23 are 1 and itself.
              <li><i class="bi bi-chevron-double-right"></i>Notice that 9 and 12 have more than 2 factors each.
              <li><i class="bi bi-chevron-double-right"></i>The factors of 9 are 1, 3 and 9.
              <li><i class="bi bi-chevron-double-right"></i>The factors of 12 are 1, 2, 3, 4, 6, and 12.
            </ul>
            <p style="text-indent:30px;">A number greater than 1 with only 2 factors is a Prime Number. 
              The numbers 7 and 23 are examples of prime numbers. A number with more than 2 factors is a Composite Number.
            The numbers 9 and 12 are examples of composite numbers. The numbers 1 and 0 are neither prime nor composite. They
            are considered as special numbers.The only even prime number is 2.</p>
          </div>
      </div>
      <h6 class="mt-3">Let us try the next activity for mastery. Use the given table and follow the instructions.</h6>
      <div class="row">
        <div class="col-7 pic">
          <div class="numbers">
            <!-- 1 - 10 kopyahin mula rito-->
            <div>
              <div class="crd">
                <img src = "../assets/img/circle.png" class="circle" style="display:none;">
                <div id="btn1">1</div>
              </div>
              <div class="crd">
                <div id="2">2</div>
              </div>
              <div class="crd">
                <div id="3">3</div>
              </div>
              <div class="crd">
                <div id="4">4</div>
              </div>
              <div class="crd">
                <div id="5">5</div>
              </div>
              <div class="crd">
                <div  id="6">6</div>
              </div>
              <div class="crd">
                <div id="7">7</div>
              </div>
              <div class="crd">
                <div id="8">8</div>
              </div>
              <div class="crd">
                <div id="9">9</div>
              </div>
              <div class="crd">
                <div  id="10">10</div>
              </div>
            </div> <!-- hanggang dito sa div -->
            <!-- 11 - 20 -->
            <div class="mt-2">
              <div class="crd">
                <div id="11">11</div>
              </div>
              <div class="crd">
                <div id="12">12</div>
              </div>
              <div class="crd">
                <div id="13">13</div>
              </div>
              <div class="crd">
                <div id="14">14</div>
              </div>
              <div class="crd">
                <div id="15">15</div>
              </div>
              <div class="crd">
                <div  id="16">16</div>
              </div>
              <div class="crd">
                <div id="17">17</div>
              </div>
              <div class="crd">
                <div id="18">18</div>
              </div>
              <div class="crd">
                <div id="19">19</div>
              </div>
              <div class="crd">
                <div  id="20">20</div>
              </div>
            </div>

            <!-- 21 - 30 -->
            <div class="mt-2">
              <div class="crd">
                <div id="21">21</div>
              </div>
              <div class="crd">
                <div id="22">22</div>
              </div>
              <div class="crd">
                <div id="23">23</div>
              </div>
              <div class="crd">
                <div id="24">24</div>
              </div>
              <div class="crd">
                <div id="25">25</div>
              </div>
              <div class="crd">
                <div  id="26">26</div>
              </div>
              <div class="crd">
                <div id="27">27</div>
              </div>
              <div class="crd">
                <div id="28">28</div>
              </div>
              <div class="crd">
                <div id="29">29</div>
              </div>
              <div class="crd">
                <div  id="30">30</div>
              </div>
            </div>

            <!-- 31 - 40 -->
            <div class="mt-2">
              <div class="crd">
                <div id="31">31</div>
              </div>
              <div class="crd">
                <div id="32">32</div>
              </div>
              <div class="crd">
                <div id="33">33</div>
              </div>
              <div class="crd">
                <div id="34">34</div>
              </div>
              <div class="crd">
                <div id="35">35</div>
              </div>
              <div class="crd">
                <div  id="36">36</div>
              </div>
              <div class="crd">
                <div id="37">37</div>
              </div>
              <div class="crd">
                <div id="38">38</div>
              </div>
              <div class="crd">
                <div id="39">39</div>
              </div>
              <div class="crd">
                <div  id="40">40</div>
              </div>
            </div>

            <!-- 41 - 50 -->
            <div class="mt-2">
              <div class="crd">
                <div id="41">41</div>
              </div>
              <div class="crd">
                <div id="42">42</div>
              </div>
              <div class="crd">
                <div id="43">43</div>
              </div>
              <div class="crd">
                <div id="44">44</div>
              </div>
              <div class="crd">
                <div id="45">45</div>
              </div>
              <div class="crd">
                <div  id="46">46</div>
              </div>
              <div class="crd">
                <div id="47">47</div>
              </div>
              <div class="crd">
                <div id="48">48</div>
              </div>
              <div class="crd">
                <div id="49">49</div>
              </div>
              <div class="crd">
                <div  id="50">50</div>
              </div>
            </div>

            <!-- 51 - 60 -->
            <div class="mt-2">
              <div class="crd">
                <div id="51">51</div>
              </div>
              <div class="crd">
                <div id="52">52</div>
              </div>
              <div class="crd">
                <div id="53">53</div>
              </div>
              <div class="crd">
                <div id="54">54</div>
              </div>
              <div class="crd">
                <div id="55">55</div>
              </div>
              <div class="crd">
                <div  id="56">56</div>
              </div>
              <div class="crd">
                <div id="57">57</div>
              </div>
              <div class="crd">
                <div id="58">58</div>
              </div>
              <div class="crd">
                <div id="59">59</div>
              </div>
              <div class="crd">
                <div  id="60">50</div>
              </div>
            </div>

            <!-- 61 - 70 -->
            <div class="mt-2">
              <div class="crd">
                <div id="61">61</div>
              </div>
              <div class="crd">
                <div id="62">62</div>
              </div>
              <div class="crd">
                <div id="63">63</div>
              </div>
              <div class="crd">
                <div id="64">64</div>
              </div>
              <div class="crd">
                <div id="65">65</div>
              </div>
              <div class="crd">
                <div  id="66">66</div>
              </div>
              <div class="crd">
                <div id="67">67</div>
              </div>
              <div class="crd">
                <div id="68">68</div>
              </div>
              <div class="crd">
                <div id="69">69</div>
              </div>
              <div class="crd">
                <div  id="70">70</div>
              </div>
            </div>

            <!-- 71 - 80 -->
            <div class="mt-2">
              <div class="crd">
                <div id="71">71</div>
              </div>
              <div class="crd">
                <div id="72">72</div>
              </div>
              <div class="crd">
                <div id="73">73</div>
              </div>
              <div class="crd">
                <div id="74">74</div>
              </div>
              <div class="crd">
                <div id="75">75</div>
              </div>
              <div class="crd">
                <div  id="76">76</div>
              </div>
              <div class="crd">
                <div id="77">77</div>
              </div>
              <div class="crd">
                <div id="78">78</div>
              </div>
              <div class="crd">
                <div id="79">79</div>
              </div>
              <div class="crd">
                <div  id="80">80</div>
              </div>
            </div>
            
            <!-- 81 - 90 -->
            <div class="mt-2">
              <div class="crd">
                <div id="81">81</div>
              </div>
              <div class="crd">
                <div id="82">82</div>
              </div>
              <div class="crd">
                <div id="83">83</div>
              </div>
              <div class="crd">
                <div id="84">84</div>
              </div>
              <div class="crd">
                <div id="85">85</div>
              </div>
              <div class="crd">
                <div  id="86">86</div>
              </div>
              <div class="crd">
                <div id="87">87</div>
              </div>
              <div class="crd">
                <div id="88">88</div>
              </div>
              <div class="crd">
                <div id="89">89</div>
              </div>
              <div class="crd">
                <div  id="90">90</div>
              </div>
            </div>

            <!-- 91 - 100 -->
            <div class="mt-2">
              <div class="crd">
                <div id="91">91</div>
              </div>
              <div class="crd">
                <div id="92">92</div>
              </div>
              <div class="crd">
                <div id="93">93</div>
              </div>
              <div class="crd">
                <div id="94">94</div>
              </div>
              <div class="crd">
                <div id="95">95</div>
              </div>
              <div class="crd">
                <div  id="96">96</div>
              </div>
              <div class="crd">
                <div id="97">97</div>
              </div>
              <div class="crd">
                <div id="98">98</div>
              </div>
              <div class="crd">
                <div id="99">99</div>
              </div>
              <div class="crd">
                <div  id="100">100</div>
              </div>
            </div>

          </div>
        </div>
        <div class="col">
          <ol> 
            <li>  Click 1 to circle
            <li>  Click all multiples of 2 except 2 to cross out
            <li>  Click all multiples of 3 except 3 to cross out
            <li>  Click all multiples of 5 except 5 to cross out
            <li>  Click all multiples of 7 except 7 to cross out
          </ol>
        </div>ss
      </div>
      <div>
        <h6 class="bold">Try to observe the results.</h6><img src = "../assets/img/q.png" class="q"> 
        <p class="pt-5">What can you say about the results?<br>
        The circled number which is 1 is neither prime nor composite. It is considered as special number. The remaining numbers are prime numbers.</p>
        <h5>Now you already know the difference between prime and
              composite numbers.</h5>
      </div>
    </div>
    <div class="footer" id="footer">
      <div class="footercontent">
          &copy; Copyright <strong><span>Math-Talino</span></strong>. All Rights Reserved
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/js/pre-test.js"></script>
    <script>
      $(document).ready(function() {
        if ($("body").height() > $(window).height()) {
          $("#footer").css("position", "relative");
        }
        
      });
      $(document).ready(function () {
          $('#btn1').click(function(){
            $('.circle').css("display", "block");
          });
          let exis = "<img src = '../assets/img/exis.png' class='exis'>";
          for(let i=1;i<=100;i++){
              if(i%2==0 && i!=2){
                $('#'+i).click(function(){
                  $('#'+i).append(exis);
                });
              }
              if(i%3==0 && i!=3){
                $('#'+i).click(function(){
                  $('#'+i).append(exis);
                });
              }
              if(i%5==0 && i!=5){
                $('#'+i).click(function(){
                  $('#'+i).append(exis);
                });
              }
              if(i%7==0 && i!=7){
                $('#'+i).click(function(){
                  $('#'+i).append(exis);
                });
              }
          }
      });
    </script>
  </body>
</html>