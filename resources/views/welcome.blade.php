<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="./js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Trần Gia Huy Portfolio</title>
    <link rel="icon" href="./images/portfolio_icon.ico">
</head>
<body>
    <div class="container-fluid">
        <div id="header" class="row mb-4">
            <div class="col-lg-12">
                <nav id="nav_bar">
                    <ul>
                        <li><a href="#about_me">GIỚI THIỆU BẢN THÂN</a></li>
                        <li><a href="#skills">KỸ NĂNG</a></li>
                        <li><a href="#project">DỰ ÁN CÁ NHÂN</a></li>
                    </ul>
                </nav>
                <div id="nav_icon">
                  <i class="fa fa-bars fa-2x p-4"></i>
                  <div id="dropdown_menu" class="shadow shadow-light shadow-intensity-lg">
                    <ul>
                      <li><a href="#about_me">GIỚI THIỆU BẢN THÂN</a></li>
                        <li><a href="#skills">KỸ NĂNG</a></li>
                        <li><a href="#project">DỰ ÁN CÁ NHÂN</a></li>
                    </ul>
                  </div>
                </div>
            </div>    
        </div>
        <div id="body">
            <div id="about_me" class="row mb-4 mt-4 p-4">
                <h1 class="mb-4">Giới thiệu bản thân</h1>
                <div id="avatar_container" class="col-sm-12 col-md-6 col-lg-4 mt-4">
                    <img src="./images/avatar.jpg" alt="Tran_Gia_Huy_avatar">
                </div>
                <div id="information" class="col-sm-12 col-md-6 col-lg-8">
                    <p>Tôi là <span id="name">Trần Gia Huy</span></p>
                    <p>Một lập trình viên back-end luôn hướng đến những công nghệ lập trình mới, 
                        tinh thần trách nhiệm 
                        và có sự chuẩn bị cho những kế hoạch sắp tới 
                        là những điều khiến tôi tự hào về bản thân.</p>
                    <p>Dù là sinh viên mới tốt nghiệp ngành công nghệ thông tin, nhưng trong thời gian còn học ở trường tôi đã tự tìm tòi và học hỏi thêm những kiến thức về lập trình web, hiện nay tôi đã có cho mình một dự án cá nhân: trang thương mại điện tử.</p>
                    <div class="pt-4 pb-3">
                        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i> 
                        <span>trangiahuy.be@gmail.com</span>
                    </div>
                    <div class="pt-3 pb-4">
                        <img class="github_logo" src="./images/github-mark-white.png" alt="github_icon">
                        <span><a href="https://github.com/tonytran0314" target="_blank">github.com/tonytran0314</a></span>
                    </div>
                </div>
            </div>
            <div id="skills" class="row">
                <h1 class="mt-4 p-4">Kỹ năng</h1>
                <div id="programming_skills" class="col-sm-12 col-md-6 col-lg-6 p-4">
                    <h2 class="text-center">Kiến thức lập trình</h2>
                    <ul class="list-group list-group-flush text-align:right">
                        <li class="list-group-item list-group-item-dark">PHP (Laravel)</li>
                        <li class="list-group-item list-group-item-dark">MySQL</li>
                        <li class="list-group-item list-group-item-dark">Lập trình hướng đối tượng OOP</li>
                        <li class="list-group-item list-group-item-dark">Mô hình MVC</li>
                        <li class="list-group-item list-group-item-dark">Bảo mật hệ thống</li>
                    </ul>
                </div>
                <div id="soft_skills" class="col-sm-12 col-md-6 col-lg-6 p-4">
                    <h2 class="text-center">Kỹ năng mềm</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-dark">Giao tiếp, đọc hiểu tiếng Anh</li>
                        <li class="list-group-item list-group-item-dark">Tinh thần tự học</li>
                        <li class="list-group-item list-group-item-dark">Quản lý thời gian</li>
                    </ul>
                </div>
            </div>
            <div id="project" class="row mt-4">
                <h1 class="mt-4 p-4">Dự án cá nhân</h1>
                <div id="project_name" class="col-md-12 mt-4 mb-4 text-center p-4">
                    <h2>TRANG THƯƠNG MẠI ĐIỆN TỬ SỬ DỤNG LARAVEL</h2>
                    <h3><a href="https://www.dientuhuylong.com" target="_blank">www.dientuhuylong.com</a></h3>
                </div>
                <div id="video" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mb-4">
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Ato-NPfyZCU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    <iframe id="iframe_video" width="1008" height="567" src="https://www.youtube.com/embed/Ato-NPfyZCU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div id="timeline" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4 m-auto">
                    <section>
                        <h2 class="text-center p-4">Các tính năng nổi bật</h2>
                        <div class="container py-5">
                          <div class="main-timeline">
                            <div class="timeline left">
                              <div class="card">
                                <div class="card-body p-4">
                                  <h3>Thanh toán và hoàn tiền bằng VNPay</h3>
                                  <p class="mb-0">03:12</p>
                                </div>
                              </div>
                            </div>
                            <div class="timeline right">
                              <div class="card">
                                <div class="card-body p-4">
                                  <h3>Gửi email cho khách hàng sau khi đặt hàng và xác nhận tài khoản bằng email</h3>
                                  <p class="mb-0">04:25</p>
                                </div>
                              </div>
                            </div>
                            <div class="timeline left">
                              <div class="card">
                                <div class="card-body p-4">
                                  <h3>Tính năng theo dõi đơn hàng</h3>
                                  <p class="mb-0">06:10</p>
                                </div>
                              </div>
                            </div>
                            <div class="timeline right">
                              <div class="card">
                                <div class="card-body p-4">
                                  <h3>Tính năng giỏ hàng</h3>
                                  <p class="mb-0">7:53</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>
        <div id="footer" class="row p-4">
            <div class="col-sm-12 col-md-6 col-lg-6 text-center p-4">
                <i class="fa fa-envelope fa-2x" aria-hidden="true"></i> 
                <span>trangiahuy.be@gmail.com</span>
            </div>
            <br>
            <div class="col-sm-12 col-md-6 col-lg-6 text-center p-4">
                <img class="github_logo" src="./images/github-mark-white.png" alt="github_icon">
                <span><a href="https://github.com/tonytran0314" target="_blank">github.com/tonytran0314</a></span>
            </div>
        </div>
    </div>
</body>
</html>