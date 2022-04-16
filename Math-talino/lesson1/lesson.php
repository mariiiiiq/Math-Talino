<?php
 session_start();
  if(!isset($_SESSION['user'])){
    header('Location: ../index.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.cdnfonts.com/css/meticula" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/wicked-mouse" rel="stylesheet">   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="../assets/img/logo-sm.ico" rel="icon">
    <link href="../assets/css/s.css" rel="stylesheet">
    <link href="../assets/css/mobile.css" rel="stylesheet">
    <link href="../assets/css/animations.css" rel="stylesheet">
    <title>Math-Talino</title>
    <style>
      .c{
        width:40px;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid">
      <a class="navbar-brand bold w-50" href="#"><img src="../assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../student.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../map.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../game.php">Games</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['name'];?>
          </a>
          <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item text-danger" href="../index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<img src="../assets/img/objleaves1.png" class="objl1" alt="">
<div class="container-fluid">
    <div class="pt-3 ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../map.php">Lesson List</a></li>
                <li class="breadcrumb-item active">Lesson 1</li>
                <li class="breadcrumb-item"><a href="objective.php">Objective</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Pre-test</a></li>
                <li class="breadcrumb-item"><a href="drill.php">Drill</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lesson</li>
            </ol>
        </nav>
    </div>
    <div class="content slideLeft">
      <div class="px-3 pt-3">
          <h3 class="title">Lesson 1: Prime and Composite Number</h3>
      </div>
      <section id="content" class="px-3 ">      
        <p class="intro1" ><h5><b>Let us start learning the new concept with the help of this problem.</b></h5>
            Read and understand the problem.
        </p>
        <center><img src = "../assets/img/Ross.png" class="prob"></center>
        <div class="">
          <p>What is asked in the Problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>The number of ways that Ross can arrange his cards.
            </span>
          </p>
          <p>What are the given facts that can help you solve the problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>10 Cards</span>
          </p>
        </div>
        <p class="m-0">In how many ways can he arrange them?<br><span style="color:#F05161">Let's try to solve it!</p> 
        <center><img src = "../assets/img/cards.png" class="prob"></center>
        <p class="m-0">
          Ross can arrange his cards in <span class="title yel">1</span>, 
          <span class="title yel">2</span>, 
          <span class="title yel">5</span>, and 
          <span class="title yel">10</span> rows.
        </p>
        <p class="m-0">We can check if our answer is correct with the use of 
          <span class="title yel">Factors&nbsp;</span> and 
          <span class="title red">Multiples&nbsp;</span> .</p>
        <div class="row g-sm-1">
          <div class="col-lg-6">
            <div class="box mx-0">
              <span class="title yel">Factors&nbsp;</span> 
              are numbers that we multiply to get a product. 
            </div>
            <div class="box mx-0">
              <span class="title red">Multiples&nbsp;</span> 
              are the products of a number multiplied by other whole numbers.
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box mx-0">
              <p class="ex" style="margin:0px;padding:0px;padding-bottom:2px;">
                <span class="title yel">4&nbsp;</span>
                x&nbsp;
                <span class="title yel">4</span>
                =<span class="title red">16</span><i class="bi bi-arrow-right"></i>
                <span class="title factmul red">Multiples</span> 
                <br><i class="bi bi-arrow-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-arrow-down"></i>
                <br><span class="title factmul ms-2 yel">Factors</span>
              </p> 
            </div>
          </div>
        </div>
        <div>
          <p class="m-0">
            Let us check if 
            <span class="title yel">1</span>,
            <span class="title yel">2</span>, 
            <span class="title yel">5</span>, and
            <span class="title yel">10</span> are
            <span class="title yel">Factors&nbsp;</span>of <span class="title red">10</span>.
          </p>
          <div class="row">
            <div class="col-sm-6 text-center">
              <div class="d-flex justify-content-center">
                <div class="ex fact">
                <span class="title red">10&nbsp;</span> = <span class="title yel">&nbsp;1&nbsp;</span> x <span class="title yel">&nbsp;10</span>
                </div>
              </div>
              <div><p>
              <span class="title yel">1</span> is a factor of <span class="title red">10</span>.<br>
              <span class="title yel">10</span> is a factor of <span class="title red">10</span>.</p></div>
            </div>
            <div class="col-sm-6 text-center">
              <div class="d-flex justify-content-center">
                <div class="ex fact">
                <span class="title red">10&nbsp;</span> = <span class="title yel">&nbsp;2&nbsp;</span> x <span class="title yel">&nbsp;5</span>
                </div>
              </div>
              <div><p>
              <span class="title yel">2</span> is a factor of <span class="title red">10</span>.<br>
              <span class="title yel">5</span> is a factor of <span class="title red">10</span>.</p></div>
            </div>
          </div>
          <p class="m-0">Therefore, <span class="title yel">1</span>,
            <span class="title yel">2</span>, 
            <span class="title yel">5</span>, and
            <span class="title yel">10</span> are the 
            <span class="title yel">Factors&nbsp;</span>of 
            <span class="title red">10</span>.</p>
        </div>
        <div>
          <p class="m-0">Let us now check if 
            <span class="title red">10</span> is a 
            <span class="title factmul red">multiples</span> of 
            <span class="title yel">1</span>,
            <span class="title yel">2</span>, 
            <span class="title yel">5</span>, and
            <span class="title yel">10</span>. Let us multiply these numbers by the numbers
            <span class="title blue">0</span>,
            <span class="title blue">1</span>,
            <span class="title blue">2</span>, 
            <span class="title blue">3</span>, . . .</p>
          <center> <img src = "../assets/img/table1.png" class="prob"></center>
          <p class="mb-0">Therefore, <span class="title red">10</span> is a 
            <span class="title factmul yel">multiples</span> of 
            <span class="title yel">1</span>,
            <span class="title yel">2</span>, 
            <span class="title yel">5</span>, and
            <span class="title yel">10</span>.</p>
        </div>
        <div class="d-flex justify-content-center">
          <div class="fact"><p class="mb-0">
            So, we can finally say that Ross can arrange his cards in <span class="title blue">4</span>
            ways (by <span class="title blue">1</span>, <span class="title blue">2</span>, <span class="title blue">5</span>, and <span class="title blue">10</span>
            ). </p>
          </div>
        </div>
        <div>
          <center> <img src = "../assets/img/table 2.png" class="prob"></center>
          <div class="row g-1">
            <div class="col-md-6 d-flex justify-content-center text-center"> 
              <div class="fact mx-0"><p class="mb-0">
                Notice that 7 and 23 have 2 factors each.<br>
                The factors of 7 are 1 and itself.<br>
                The factors of 23 are 1 and itself.<br>
                <span class="title yel">Prime Numbers</span></p>
              </div>
            </div>
            <div class="col-md-6 justify-content-center text-center">
              <div class="fact mx-0"><p class="mb-0">
                Notice that 9 and 12 have more than 2 factors each.<br>
                The factors of 9 are 1, 3 and 9.<br>
                The factors of 12 are 1, 2, 3, 4, 6, and 12.<br>
                <span class="title red">Composite Numbers</span></p>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="fact text-center mx-0"><p class="mb-0">
              A number greater than 1 with only 2 factors is a <span class="title yel">Prime Numbers</span> ex. 7 and 23<br>
              A number with more than 2 factors is a <span class="title red">Composite Numbers</span> ex. 9 and 12<br>
              The numbers <u>1 and 0</u> are <u>neither prime nor composite</u>.<br>They
              are considered as <u>special numbers</u>.The only even prime number is 2.</p>
            </div>
          </div>
        </div>
        <p class="mb-0 mt-3 pt-3" style="border-top:2px solid #9b9b7a">
        Let us try the this activity!</p>
        <div class="row">
          <div class="col  order-2 order-sm-1 d-flex justify-content-center">
            <div class="numbers ">
              <table class="tblnum d-flex justify-content-center">
                <tr>
                  <td>
                    <div class="crd">
                    <img src = "../assets/img/circle.png" class="circle" style="display:none;">
                    <div id="btn1">1</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="2">2</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="3">3</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="4">4</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="5">5</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="6">6</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="7">7</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="8">8</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="9">9</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="10">10</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="crd">
                    <div id="11">11</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="12">12</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="13">13</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="14">14</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="15">15</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="16">16</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="17">17</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="18">18</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="19">19</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="20">20</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="crd">
                      <div id="21">21</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="22">22</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="23">23</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="24">24</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="25">25</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="26">26</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="27">27</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="28">28</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="29">29</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="30">30</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="crd">
                      <div id="31">31</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="32">32</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="33">33</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="34">34</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="35">35</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="36">36</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="37">37</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="38">38</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="39">39</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="40">40</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="crd">
                      <div id="41">41</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="42">42</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="43">43</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="44">44</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="45">45</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="46">46</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="47">47</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="48">48</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="49">49</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="50">50</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="crd">
                      <div id="51">51</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="52">52</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="53">53</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="54">54</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="55">55</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="56">56</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="57">57</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="58">58</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="59">59</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="60">60</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="crd">
                      <div id="61">61</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="62">62</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="63">63</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="64">64</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="65">65</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="66">66</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="67">67</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="68">68</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="69">69</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="70">70</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="crd">
                      <div id="71">71</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="72">72</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="73">73</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="74">74</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="75">75</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="76">76</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="77">77</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="78">78</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="79">79</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="80">80</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="crd">
                      <div id="81">81</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="82">82</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="83">83</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="84">84</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="85">85</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="86">86</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="7">87</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="88">88</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="89">89</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="90">90</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="crd">
                      <div id="91">91</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="92">92</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="93">93</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="94">94</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="95">95</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="96">96</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="97">97</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="98">98</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="99">99</div>
                    </div>
                  </td>
                  <td>
                    <div class="crd">
                      <div id="100">100</div>
                    </div>
                  </td>
                </tr>
              </table>
              <div class="see" style="display:none"> 
                <button class="btn primary mt-2" name="btnshow" id="btnshow">See result</button>
                <span class="py-5"><i class="bi bi-arrow-left" style="font-size:25px;"></i>
                Click to show it all</span>
              </div>
            </div>
          </div>
          <div class="col order-1 order-md-2">
            <h5><b>Instruction:</b></h5>
            <ol> 
              <li>  Click 1 to circle
              <li>  Click all multiples of 2 except 2 to cross out
              <li>  Click all multiples of 3 except 3 to cross out
              <li>  Click all multiples of 5 except 5 to cross out
              <li>  Click all multiples of 7 except 7 to cross out
            </ol>   
          </div>
        </div>
        <!-- last part -->
        <div class="row g-1">
          <div class="col-md-6"> 
            <div class="box mx-0">
              <img src = "../assets/img/circle.png" class="c" >The circled number which is 1 is neither prime nor composite. It is considered as special number. 
            </div>
          </div>
          <div class="col-md-6"> 
            <div class="box mx-0">
              <img src = '../assets/img/exis.png' class='c' id="cross">The numbers that were crossed out are composite numbers. The remaining numbers are prime numbers.
            </div>
          </div>
        </div>
      </div>
    </section>
        <a href="drill.php" class="title btnback btn btns">Back</a>
        <a href="lesson-video.php" class="title btnnext btn btns">Next</a>
  </div>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(".next").mouseenter(function(){
          $('.next').addClass('floating');
        });
        $(".next").mouseleave(function(){
          $('.next').removeClass('floating');
        });
        $(document).ready(function() {
        $('.numbers').click(function(){
          $('.see').css('display', 'block');
        });
        $('.see').click(function(){
          $('.summary').css('display', 'block');
        });
        $('.circle').click(function(){
          $('#circle').css('display', 'block');
        });;
      });
      $(document).ready(function () {
          $('#btn1').click(function(){
            $('.circle').css("display", "block");
          });
          let exis = "<img src = '../assets/img/exis.png' class='exis'>";
          
          for(let i=1;i<=100;i++){
            
            $('#'+i).click(function(){
              composite(i);
            });
            $('#btnshow').click(function(){
              $('.circle').css("display", "block");
              composite(i);
            });
          }
          function composite(i){
            let composite = false;
            if(i%2==0 && i!=2){
              composite = true;
            }
            if(i%3==0 && i!=3){
              composite = true;
            }
            if(i%5==0 && i!=5){
              composite = true;
            }
            if(i%7==0 && i!=7){
              composite = true;
            }
            if(composite==true){
              $('#'+i).append(exis);
            }
          }
      });
    </script>
  </body>
</html>