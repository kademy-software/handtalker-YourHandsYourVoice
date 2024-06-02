<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:wght@100&display=swap" rel="stylesheet">
  <title>Dashboard  - HandTalker</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">HandTalker</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">Mới</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Bạn có 1 thông báo mới
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Chào mừng học sinh khối 10 thử nghiệm sản phẩm !</h4>
                <p>Mong bạn thích nó ^^</p>
                <p>30 phút trước</p>
              </div>
            </li>

       

           

         

            

            

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Xem tất cả thông báo</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="https://scontent.fvca4-1.fna.fbcdn.net/v/t39.30808-6/375907648_316179414417716_977231850479357311_n.jpg?stp=cp6_dst-jpg&_nc_cat=105&ccb=1-7&_nc_sid=a2f6c7&_nc_ohc=ysrySoEos9cAX_KAj8J&_nc_ht=scontent.fvca4-1.fna&oh=00_AfA8m-8jr2z4KRsl2csBIBgfaoo0zDQhikJmOmREBehflQ&oe=650AB327" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Student</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Học sinh</h6>
              <span>THPT Tịnh Biên</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Hồ sơ của tôi</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Cài đặt</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Đăng xuất</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

 
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Khoá Học</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Ngôn ngữ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="lang=vi.html">
              <i class="bi bi-circle"></i><span>Tiếng Việt</span>
            </a>
          </li>
          <li>
            <a href="lang=vi.html">
              <i class="bi bi-circle"></i><span>English</span>
            </a>
          </li>
          
         
         
        </ul>
      </li><!-- End Components Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Luyện tập</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="quizHome.html">
              <i class="bi bi-circle"></i><span>Luyện tập trắc nghiệm</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Tables Nav -->

    

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Trí tuệ nhân tạo</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="nhandang.html">
              <i class="bi bi-circle"></i><span>Nhận diện ngôn ngữ kí hiệu</span>
            </a>
          </li>
          <li>
            <a href="nhandienabc.html">
              <i class="bi bi-circle"></i><span>Nhận diện ngôn ngữ kí hiệu (Bảng chữ cái)</span>
            </a>
          </li>
          <li>
            <a href="textToSpeech.html">
              <i class="bi bi-circle"></i><span>Chuyển văn bản thành giọng nói</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Icons Nav -->
      <li class="nav-item">
        <a class="nav-link " href="https://kademy-software.github.io/tu-dien-ngon-ngu-ki-hieu/">
          <i class="bi bi-grid"></i>
          <span>Từ điển ngôn ngữ kí hiệu </span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-heading">Mục khác</li>



      

      

     

      

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="container">
      <div class="quiz">
          <h1 class="quiz-title">Quiz</h1>
          <div class="question-container">
              <h5 id="question"></h5>
          </div>
          <div class="video-container">
              <video id="quiz-video" width="80%" controls>
                  <source src="cl.mov" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          </div>
          <div class="options-container">
              <button id="choice-A" onclick="checkAnswer('A')" type="button" class="btn btn-primary"></button>
              <button id="choice-B" onclick="checkAnswer('B')" type="button" class="btn btn-primary"></button>
          </div>
          <div class="result-container">
              <p id="result"></p>
              <button id="next-button" onclick="nextQuestion()" type="button" class="btn btn-primary">Tiếp theo</button>
          </div>
      </div>
  </div>
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Kademy</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     
      Designed by <a href="#">Tuấn Kiệt âhhahaha</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 1, 2023 15:37:25").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
    
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      // Display the result in the element with id="demo"
      document.getElementById("demo").innerHTML = days + " ngày " + hours + " giờ "
      + minutes + " phút " + seconds + " giây ";
    
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>

    <script>
      let currentQuestion = 0;
      let score = 0;
      let questions = [];
      
      function loadVideo(videoSrc) {
          const quizVideo = document.getElementById("quiz-video");
          quizVideo.src = videoSrc;
          quizVideo.load();
      }
      
      function checkAnswer(userChoice) {
          const correctAnswer = questions[currentQuestion].correctAnswer;
      
          if (userChoice === correctAnswer) {
              score++;
          }
      
          document.getElementById("result").innerHTML = userChoice === correctAnswer ? "Đúng!" : "Sai!";
          document.getElementById("options-container").style.display = "none";
          document.getElementById("result-container").style.display = "block";
      }
      
      function nextQuestion() {
          currentQuestion++;
          if (currentQuestion < questions.length) {
              loadQuestion();
          } else {
              document.getElementById("question").textContent = `Kết quả: ${score}/${questions.length}`;
              document.getElementById("options-container").style.display = "none";
              document.getElementById("result-container").style.display = "none";
          }
      }
      
      function loadQuestion() {
          const currentQuestionData = questions[currentQuestion];
          document.getElementById("question").textContent = currentQuestionData.question;
          loadVideo(currentQuestionData.videoSrc);
      
          const choices = currentQuestionData.choices;
      
          document.getElementById("choice-A").textContent = `A. ${choices.A}`;
          document.getElementById("choice-B").textContent = `B. ${choices.B}`;
      
          document.getElementById("options-container").style.display = "block";
          document.getElementById("result-container").style.display = "none";
          document.getElementById("result").innerHTML = "";
      }
      
      fetch("quiz/q1.json")
          .then(response => response.json())
          .then(data => {
              questions = data;
              loadQuestion();
          })
          .catch(error => console.error(error));
      

    </script>  
    <style>
    
    </style>  
</body>

</html>
