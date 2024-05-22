<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>بوابة التوظيف</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <link href="css/tooplate-gotto-job.css" rel="stylesheet">
        

<!--

Tooplate 2134 Gotto Job

https://www.tooplate.com/view/2134-gotto-job

Bootstrap 5 HTML CSS Template

-->

        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400&display=swap" rel="stylesheet">

        <style>

            body{
                font-family: 'Cairo', sans-serif;
            }

        </style>



    </head>
    
    <body id="top">

        <!--nav bar-->
        @include('layouts.ar-navbar')
        <!--end of nav bar-->


        <main>
            
            <!--Hero-->

            <section class="hero-section d-flex justify-content-center align-items-center">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">


                        <!--search Form-->
                        <div class="col-lg-6 col-12">
                            <form class="custom-form hero-form" action="#" method="get" role="form">
                                <h3 class="text-white text-end mb-3">البحث عن وظيفة</h3>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="input-group flex-row-reverse">
                                            <span class="input-group-text me-3" id="basic-addon2"><i class="bi-geo-alt custom-icon"></i></span>

                                            <input type="text" name="job-location" id="job-location" class="form-control text-end" placeholder="الموقع" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="input-group flex-row-reverse ">
                                            <span class="input-group-text me-3" id="basic-addon1"><i class="bi-person custom-icon"></i></span>

                                            <input type="text" name="job-title" id="job-title" class="form-control text-end" placeholder="مسمى الوظيفة" required>
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-12 col-12">
                                        <button type="submit" class="form-control">
                                            ابحث عن وظيفة
                                        </button>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex flex-wrap flex-row-reverse align-items-center mt-4 mt-lg-0">
                                            <span class="text-white text-end mb-lg-0 mb-md-0 ms-2"> :كلمات دالة </span>

                                            <div>
                                                <a href="/job-listings" class="badge">تصميم الويب</a>

                                                <a href="/job-listings" class="badge">التسويق</a>

                                                <a href="/job-listings" class="badge">الدعم الفني</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>




                        <!--Hero text-->
                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <div class="hero-section-text mt-3">
                                <h6 class="text-white text-end"> هل تـبحـث عن وظـيـفـة لـديـنـا؟</h6>

                                <h1 class="hero-title text-white text-end mt-2 mb-2">بوابـة التـوظـيف<br> الإلكـتـرونـية</h1>

                                <a href="#job-section" class="custom-btn custom-border-btn btn float-end">استكشف الوظائف</a>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </section>

            <!--end of hero-->





            <!--gcategories-section-->

            <!--
            <section class="categories-section section-padding" id="categories-section">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Browse by <span>Categories</span></h2>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-block">
                                <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <i class="categories-icon bi-window"></i>
                                
                                    <small class="categories-block-title">Web design</small>

                                    <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                        <span class="categories-block-number-text">320</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-block">
                                <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <i class="categories-icon bi-twitch"></i>
                                
                                    <small class="categories-block-title">Marketing</small>

                                    <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                        <span class="categories-block-number-text">180</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-block">
                                <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <i class="categories-icon bi-play-circle-fill"></i>
                                
                                    <small class="categories-block-title">Video</small>

                                    <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                        <span class="categories-block-number-text">340</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-block">
                                <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <i class="categories-icon bi-globe"></i>
                                
                                    <small class="categories-block-title">Websites</small>

                                    <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                        <span class="categories-block-number-text">140</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-block">
                                <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <i class="categories-icon bi-people"></i>
                                
                                    <small class="categories-block-title">Customer Support</small>

                                    <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                                        <span class="categories-block-number-text">84</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            -->

            <!--end ofgcategories-section-->


            

            <!--about-section-->

            <section class="about-section section-padding">
                <div class="container">
                    <div class="row flex-row-reverse">

                        <div class="col-lg-3 col-12">
                            <div class="about-image-wrap custom-border-radius-end">
                                <img src="images/professional-asian-businesswoman-gray-blazer.jpg" class="about-image custom-border-radius-end img-fluid" alt="">

                                <div class="about-info">
                                    <h4 class="text-white text-end mb-0 ms-2">جوليا وارد</h4>

                                    <p class="text-white text-end mb-0">المسؤول</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-text-block">
                                <h2 class="text-white text-end mb-2">مقـدمة عن البوابة</h2>

                                <p class="text-white text-end">  تتيح هذه البوابة للراغبين في العمل لدى شركاتنا إستعراض الوظائف الشاغرة حاليا والبرامج المتاح الإنضمام لها بإمكانك زيارة<a href="https://www.tooplate.com" target="_parent"> موقعنا الإلكتروني الرسمي</a> للتعرف عن المزيد من خدماتنا </p>

                                <div class="custom-border-btn-wrap d-flex flex-row-reverse align-items-center mt-5">
                                    <a href="/about" class="custom-btn custom-border-btn btn ms-4">تـعـرف علينا</a>

                                    <a href="#job-section" class="custom-link smoothscroll">إستكشف الوظائف</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-12">
                            <div class="instagram-block">
                                <img src="images/horizontal-shot-happy-mixed-race-females.jpg" class="about-image custom-border-radius-start img-fluid" alt="">

                                <div class="instagram-block-text">
                                    <a href="https://instagram.com/" class="custom-btn btn">
                                        <i class="bi-instagram"></i>
                                        @account
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!--end of about-section-->





            <!--job-featured-section-->

            <section class="job-section job-featured-section section-padding" id="job-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 text-center mx-auto mb-4">
                            <h2>الوظائف المميزة</h2>

                            <p> نوفر لكم <strong>أكثر من 30 وظيفة متاحة</strong> بإمكانك الإختيار بما ينسابك مهاراتك الشخصية سيتم مراجعة الطلبات يدوياً واختيار الأعضاء الأكثر جدارةً</p>
                        </div>

                        <div class="col-lg-12 col-12">

                            <!--first-->
                            <div class="job-thumb d-flex flex-row-reverse ">
                                <div class="job-image-wrap bg-white shadow-lg">
                                    <img src="images/logos/google.png" class="job-image img-fluid" alt="">
                                </div>

                                <div class="job-body d-flex flex-wrap flex-row-reverse flex-auto align-items-end me-4 ">
                                    <div class="md-3 col-10 ">
                                        <h4 class="job-title mb-lg-0 text-end">
                                            <a href="job-details.html" class="job-title-link">Technical Lead</a>
                                        </h4>

                                        <div class="d-flex flex-wrap align-items-end flex-row-reverse ms-5  ">
                                            <p class="job-location mb-0">
                                                Kuala, Malaysia
                                                <i class="custom-icon bi-geo-alt me-1"></i>
                                                
                                            </p>

                                            <p class="job-date mb-0">
                                                10 hours ago
                                                <i class="custom-icon bi-clock me-1"></i>
                                                
                                            </p>

                                            <p class="job-price mb-0">
                                                $20k
                                                <i class="custom-icon bi-cash me-1"></i>
                                                
                                            </p>

                                            <div class="d-flex me-5">
                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge badge-level">Internship</a>
                                                </p>

                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge">Freelance</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="job-section-btn-wrap  col-2">
                                        <a href="job-details.html" class="custom-btn btn">قدم الان</a>
                                    </div>
                                </div>
                            </div>

                            <!--sec-->
                            <div class="job-thumb d-flex flex-row-reverse">
                                <div class="job-image-wrap bg-white shadow-lg">
                                    <img src="images/logos/apple.png" class="job-image img-fluid" alt="">
                                </div>

                                <div class="job-body d-flex flex-wrap flex-auto align-items-center flex-row-reverse me-4 ">

                                      

                                    <div class="mb-3 align-items-center col-10">
                                        <h4 class="job-title mb-lg-0 text-end">
                                            <a href="job-details.html" class="job-title-link">Business Director</a>
                                        </h4>

                                        <div class="d-flex flex-wrap flex-row-reverse align-items-center">
                                            <p class="job-location mb-0">
                                                California, USA
                                                <i class="custom-icon bi-geo-alt me-1"></i>
                                                
                                            </p>

                                            <p class="job-date mb-0">
                                                1 day ago
                                                <i class="custom-icon bi-clock me-1"></i>
                                                
                                            </p>

                                            <p class="job-price mb-0">
                                                $90k
                                                <i class="custom-icon bi-cash me-1"></i>
                                     
                                            </p>

                                            <div class="d-flex me-5 ms-5">
                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge badge-level">Senior</a href="job-listings.html">
                                                </p>

                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge">Full Time</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="job-section-btn-wrap col-2">
                                        <a href="job-details.html" class="custom-btn btn">قدم الان</a>
                                    </div>

                                    
                                </div>
                            </div>


                            <!--ther-->
                            <div class="job-thumb d-flex flex-row-reverse">
                                <div class="job-image-wrap bg-white shadow-lg">
                                    <img src="images/logos/meta.png" class="job-image img-fluid" alt="">
                                </div>

                                <div class="job-body d-flex flex-wrap flex-auto align-items-center flex-row-reverse me-4 ">
                                    <div class="mb-3 col-10">
                                        <h4 class="job-title mb-lg-0 text-end">
                                            <a href="job-details.html" class="job-title-link">HR Manager</a>
                                        </h4>

                                        <div class="d-flex flex-wrap align-items-center flex-row-reverse">
                                            <p class="job-location mb-0">
                                                 Tower, Paris
                                                <i class="custom-icon bi-geo-alt me-1"></i>
                                               
                                            </p>

                                            <p class="job-date mb-0">
                                                22 hours ago
                                                <i class="custom-icon bi-clock me-1"></i>
                                                
                                            </p>

                                            <p class="job-price mb-0">
                                                $50k
                                                <i class="custom-icon bi-cash me-1"></i>
                                                
                                            </p>

                                            <div class="d-flex me-5">
                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge badge-level">Junior</a>
                                                </p>

                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge">Contract</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="job-section-btn-wrap col-2">
                                        <a href="job-details.html" class="custom-btn btn">قدم الان</a>
                                    </div>
                                </div>
                            </div>


                            <!--four-->
                            <div class="job-thumb d-flex flex-row-reverse">
                                <div class="job-image-wrap bg-white shadow-lg">
                                    <img src="images/logos/slack.png" class="job-image img-fluid" alt="">
                                </div>

                                <div class="job-body d-flex flex-wrap flex-auto align-items-center flex-row-reverse me-4">
                                    <div class="mb-3 col-10">
                                        <h4 class="job-title text-end mb-lg-0">
                                            <a href="job-details.html" class="job-title-link">Dev Ops</a>
                                        </h4>

                                        <div class="d-flex flex-wrap align-items-center flex-row-reverse">
                                            <p class="job-location mb-0">
                                                Bangkok, Thailand
                                                <i class="custom-icon bi-geo-alt me-1"></i>
                                                
                                            </p>

                                            <p class="job-date mb-0">
                                                40 minutes ago
                                                <i class="custom-icon bi-clock me-1"></i>
                                                
                                            </p>

                                            <p class="job-price mb-0">
                                                $75k - 80k
                                                <i class="custom-icon bi-cash me-1"></i>
                                                
                                            </p>

                                            <div class="d-flex me-5">
                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge badge-level">Senior</a>
                                                </p>

                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge">Part Time</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="job-section-btn-wrap col-2">
                                        <a href="job-details.html" class="custom-btn btn">قدم الان</a>
                                    </div>
                                </div>
                            </div>



                            <!--fif-->
                            <div class="job-thumb d-flex flex-row-reverse">
                                <div class="job-image-wrap bg-white shadow-lg">
                                    <img src="images/logos/creative-market.png" class="job-image img-fluid" alt="">
                                </div>

                                <div class="job-body d-flex flex-wrap flex-auto align-items-center flex-row-reverse me-4">
                                    <div class="mb-3 col-10">
                                        <h4 class="job-title text-end mb-lg-0">
                                            <a href="job-details.html" class="job-title-link">UX Designer</a>
                                        </h4>

                                        <div class="d-flex flex-wrap align-items-center flex-row-reverse">
                                            <p class="job-location mb-0">
                                                Bangkok, Thailand
                                                <i class="custom-icon bi-geo-alt me-1"></i>
                                                
                                            </p>

                                            <p class="job-date mb-0">
                                                2 hours ago
                                                <i class="custom-icon bi-clock me-1"></i>
                                                
                                            </p>

                                            <p class="job-price mb-0">
                                                $100k
                                                <i class="custom-icon bi-cash me-1"></i>
                                                
                                            </p>

                                            <div class="d-flex me-5">
                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge badge-level">Entry</a>
                                                </p>

                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge">Remote</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="job-section-btn-wrap col-2">
                                        <a href="job-details.html" class="custom-btn btn">قدم الان</a>
                                    </div>
                                </div>
                            </div>


                            <!--six-->
                            <div class="job-thumb d-flex flex-row-reverse">
                                <div class="job-image-wrap bg-white shadow-lg">
                                    <img src="images/logos/creative-market.png" class="job-image img-fluid" alt="">
                                </div>

                                <div class="job-body d-flex flex-wrap flex-auto align-items-center flex-row-reverse me-4">
                                    <div class="mb-3 col-10">
                                        <h4 class="job-title text-end mb-lg-0">
                                            <a href="job-details.html" class="job-title-link">UX Designer</a>
                                        </h4>

                                        <div class="d-flex flex-wrap align-items-center flex-row-reverse">
                                            <p class="job-location mb-0">
                                                Bangkok, Thailand
                                                <i class="custom-icon bi-geo-alt me-1"></i>
                                                
                                            </p>

                                            <p class="job-date mb-0">
                                                2 hours ago
                                                <i class="custom-icon bi-clock me-1"></i>
                                                
                                            </p>

                                            <p class="job-price mb-0">
                                                $100k
                                                <i class="custom-icon bi-cash me-1"></i>
                                                
                                            </p>

                                            <div class="d-flex me-5">
                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge badge-level">Entry</a>
                                                </p>

                                                <p class="mb-0">
                                                    <a href="job-listings.html" class="badge">Remote</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="job-section-btn-wrap col-2">
                                        <a href="job-details.html" class="custom-btn btn">قدم الان</a>
                                    </div>
                                </div>
                            </div>



                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mt-5">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">Prev</span>
                                        </a>
                                    </li>

                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>

            <!--end of job-featured-section-->








            <!--video section-->

            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="custom-text-block custom-border-radius-start text-end">
                                <h2 class="text-white mb-3">نساعدك هنا في خوض تجارب جديدة والإستفادة من خبراتك</h2>

                                <p class="text-white">من خلال برامجنا التدريبية يمكنك الإستفادة من خبراتك في توظيفها في سوق العمل واخذ الخبرة الكافيه من مدربيتنا المحترفين</p>

                                <div class="d-flex mt-4 flex-row-reverse">
                                    <div class="counter-thumb"> 
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="30" data-speed="1000"></span>
                                            <span class="counter-number-text">+</span>
                                        </div>

                                        <span class="counter-text">مدرب محترف</span>
                                    </div> 

                                    <div class="counter-thumb">    
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="450" data-speed="1000"></span>
                                            <span class="counter-number-text">+</span>
                                        </div>

                                        <span class="counter-text">متدرب مميز لدينا</span>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="video-thumb">
                                <img src="images/people-working-as-team-company.jpg" class="about-image custom-border-radius-end img-fluid" alt="">

                                <div class="video-info">
                                    <a href="https://www.youtube.com/tooplate" class="youtube-icon bi-youtube"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!--end of video section-->



            <!--programes-->

            <section class="job-section recent-jobs-section section-padding">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse ">

                        <div class="col-lg-6 col-12 mb-4 text-end">
                            <h2> البرامج التدريبة المتاحة</h2>

                            <p>تقدم لك البرامج التدريبية الفرصة لأخذ الخبرة الكافية في سوق العمل ومعرفة كيفية سير الأعمال بطريقة إحترافيه</p>
                        </div>

                        <div class="clearfix"></div>


                        <!--first-->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="job-thumb job-thumb-box">
                                <div class="job-image-box-wrap">
                                    <a href="job-details.html">
                                        <img src="images/jobs/it-professional-works-startup-project.jpg" class="job-image img-fluid" alt="">
                                    </a>

                                    <div class="job-image-box-wrap-info d-flex align-items-center">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">للطلاب</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="job-body">
                                    <h4 class="job-title text-end">
                                        <a href="job-details.html" class="job-title-link ">برنامج التدريب التعاوني</a>
                                    </h4>

                                    <div class="d-flex align-items-center flex-row-reverse">
                                        <div class="job-image-wrap d-flex flex-row-reverse align-items-center bg-white shadow-lg mt-2 mb-4 ">
                                            <img src="images/logos/salesforce.png" class="job-image ms-3 img-fluid" alt="">

                                            <p class="mb-0">Salesforce</p>
                                        </div>

                                        <a href="#" class="bi-bookmark me-auto ms-2">
                                        </a>

                                        <a href="#" class="bi-heart">
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <p class="job-location">
                                            <i class="custom-icon bi-geo-alt me-1"></i>
                                            Riyadh, KSA
                                        </p>

                                        <p class="job-date">
                                            <i class="custom-icon bi-clock me-1"></i>
                                            3 Months
                                        </p>
                                    </div>

                                    <div class="d-flex flex-row-reverse align-items-center border-top pt-3">

                                        <a href="job-details.html" class="custom-btn btn me-auto">قدم الان</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--secound-->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="job-thumb job-thumb-box">
                                <div class="job-image-box-wrap">
                                    <a href="job-details.html">
                                        <img src="images/jobs/marketing-assistant.jpg" class="job-image img-fluid" alt="marketing assistant">
                                    </a>

                                   {{--  <div class="job-image-box-wrap-info d-flex align-items-center">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">للخريجين</a>
                                        </p>

                                    </div> --}}
                                </div>

                                <div class="job-body">
                                    <h4 class="job-title text-end">
                                        <a href="job-details.html" class="job-title-link">التدريب الصيفي</a>
                                    </h4>

                                    <div class="d-flex align-items-center flex-row-reverse">
                                        <div class="job-image-wrap d-flex flex-row-reverse align-items-center bg-white shadow-lg mt-2 mb-4">
                                            <img src="images/logos/spotify.png" class="job-image ms-3 img-fluid" alt="">

                                            <p class="mb-0">Spotify</p>
                                        </div>

                                        <a href="#" class="bi-bookmark me-auto ms-2">
                                        </a>

                                        <a href="#" class="bi-heart">
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <p class="job-location">
                                            <i class="custom-icon bi-geo-alt me-1"></i>
                                            Online
                                        </p>

                                        <p class="job-date">
                                            <i class="custom-icon bi-clock me-1"></i>
                                            2 Months
                                        </p>
                                    </div>

                                    <div class="d-flex flex-row-reverse align-items-center border-top pt-3">

                                        <a href="job-details.html" class="custom-btn btn me-auto">قدم الان</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--third-->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="job-thumb job-thumb-box">
                                <div class="job-image-box-wrap">
                                    <a href="job-details.html">
                                        <img src="images/jobs/coding-man.jpg" class="job-image img-fluid" alt="">
                                    </a>

                                    <div class="job-image-box-wrap-info d-flex align-items-center">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">للخريجين</a>
                                        </p>

                                    </div>
                                </div>

                                <div class="job-body">
                                    <h4 class="job-title text-end">
                                        <a href="job-details.html" class="job-title-link">برنامج تمهير</a>
                                    </h4>
                                        
                                    <div class="d-flex align-items-center flex-row-reverse">
                                        <div class="job-image-wrap d-flex flex-row-reverse align-items-center bg-white shadow-lg mt-2 mb-4">
                                            <img src="images/logos/twitter.png" class="job-image ms-3 img-fluid" alt="">

                                            <p class="mb-0">Twiter</p>
                                        </div>

                                        <a href="#" class="bi-bookmark me-auto ms-2">
                                        </a>

                                        <a href="#" class="bi-heart">
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <p class="job-location">
                                            <i class="custom-icon bi-geo-alt me-1"></i>
                                            Riyadh, KSA
                                        </p>

                                        <p class="job-date">
                                            <i class="custom-icon bi-clock me-1"></i>
                                            6 Months
                                        </p>
                                    </div>

                                    <div class="d-flex flex-row-reverse align-items-center border-top pt-3">

                                        <a href="job-details.html" class="custom-btn btn me-auto">قدم الان</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--fourth--><!--
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="job-thumb job-thumb-box">
                                <div class="job-image-box-wrap">
                                    <a href="job-details.html">
                                        <img src="images/jobs/pretty-blogger-posing-cozy-apartment.jpg" class="job-image img-fluid" alt="">
                                    </a>

                                    <div class="job-image-box-wrap-info d-flex align-items-center">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">Junior</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge">Contract</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="job-body">
                                    <h4 class="job-title">
                                        <a href="job-details.html" class="job-title-link">HR Manager</a>
                                    </h4>

                                    <div class="d-flex align-items-center">
                                        <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                            <img src="images/logos/yelp.png" class="job-image me-3 img-fluid" alt="">

                                            <p class="mb-0">Yelp</p>
                                        </div>

                                        <a href="#" class="bi-bookmark ms-auto me-2">
                                        </a>

                                        <a href="#" class="bi-heart">
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <p class="job-location">
                                            <i class="custom-icon bi-geo-alt me-1"></i>
                                            California, USA
                                        </p>

                                        <p class="job-date">
                                            <i class="custom-icon bi-clock me-1"></i>
                                            15 hours ago
                                        </p>
                                    </div>

                                    <div class="d-flex align-items-center border-top pt-3">
                                        <p class="job-price mb-0">
                                            <i class="custom-icon bi-cash me-1"></i>
                                            $35k - 45k
                                        </p>

                                        <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="job-thumb job-thumb-box">
                                <div class="job-image-box-wrap">
                                    <a href="job-details.html">
                                        <img src="images/jobs/paper-analysis.jpg" class="job-image img-fluid" alt="">
                                    </a>

                                    <div class="job-image-box-wrap-info d-flex align-items-center">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">Junior</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge">Contract</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="job-body">
                                    <h4 class="job-title">
                                        <a href="job-details.html" class="job-title-link">Sales Representative</a>
                                    </h4>
                                        
                                    <div class="d-flex align-items-center">
                                        <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                            <img src="images/logos/paypal.png" class="job-image me-3 img-fluid" alt="">

                                            <p class="mb-0">Paypal</p>
                                        </div>

                                        <a href="#" class="bi-bookmark ms-auto me-2">
                                        </a>

                                        <a href="#" class="bi-heart">
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <p class="job-location">
                                            <i class="custom-icon bi-geo-alt me-1"></i>
                                            Bangkok, Thailand
                                        </p>

                                        <p class="job-date">
                                            <i class="custom-icon bi-clock me-1"></i>
                                            30 mins ago
                                        </p>
                                    </div>

                                    <div class="d-flex align-items-center border-top pt-3">
                                        <p class="job-price mb-0">
                                            <i class="custom-icon bi-cash me-1"></i>
                                            $20k - 35k
                                        </p>

                                        <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="job-thumb job-thumb-box">
                                <div class="job-image-box-wrap">
                                    <a href="job-details.html">
                                        <img src="images/jobs/logo-designer-working-computer-desktop.jpg" class="job-image img-fluid" alt="">
                                    </a>

                                    <div class="job-image-box-wrap-info d-flex align-items-center">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">Mid Level</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge">Full Time</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="job-body">
                                    <h4 class="job-title">
                                        <a href="job-details.html" class="job-title-link">Graphic Designer</a>
                                    </h4>
                                        
                                    <div class="d-flex align-items-center">
                                        <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                            <img src="images/logos/envato.png" class="job-image me-3 img-fluid" alt="">

                                            <p class="mb-0">Envato</p>
                                        </div>

                                        <a href="#" class="bi-bookmark ms-auto me-2">
                                        </a>

                                        <a href="#" class="bi-heart">
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <p class="job-location">
                                            <i class="custom-icon bi-geo-alt me-1"></i>
                                            Melbourne, Australia
                                        </p>

                                        <p class="job-date">
                                            <i class="custom-icon bi-clock me-1"></i>
                                            2 days ago
                                        </p>
                                    </div>

                                    <div class="d-flex align-items-center border-top pt-3">
                                        <p class="job-price mb-0">
                                            <i class="custom-icon bi-cash me-1"></i>
                                            $20k
                                        </p>

                                        <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 recent-jobs-bottom d-flex ms-auto my-4">
                            <a href="job-listings.html" class="custom-btn btn ms-lg-auto">Browse Job Listings</a>
                        </div>

                    -->

                    </div>
                </div>
            </section>



            <!--reviews-section-->

            <section class="reviews-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="text-center mb-5">أراء المستفيدين</h2>

                            <div class="owl-carousel owl-theme reviews-carousel">
                                <div class="reviews-thumb">
                                
                                    <div class="reviews-info d-flex flex-row-reverse align-items-center">
                                        <img src="images/avatar/portrait-charming-middle-aged-attractive-woman-with-blonde-hair.jpg" class="avatar-image img-fluid" alt="">

                                        <div class="d-flex flex-row-reverse align-items-center justify-content-between flex-wrap w-100 me-3">
                                            <p class="mb-0 text-end">
                                                <strong>Susan L</strong>
                                                <small>Product Manager</small>
                                            </p>

                                            <div class="reviews-icons">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reviews-body">
                                        <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                                        <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                                    </div>
                                </div>

                                <div class="reviews-thumb">
                                    <div class="reviews-info d-flex flex-row-reverse align-items-center">
                                        <img src="images/avatar/medium-shot-smiley-senior-man.jpg" class="avatar-image img-fluid" alt="">

                                        <div class="d-flex flex-row-reverse align-items-center justify-content-between flex-wrap w-100 me-3">
                                            <p class="mb-0 text-end">
                                                <strong>Jack</strong>
                                                <small>Technical Lead</small>
                                            </p>

                                            <div class="reviews-icons">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reviews-body">
                                        <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                                        <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                                    </div>
                                </div>

                                <div class="reviews-thumb">

                                    <div class="reviews-info d-flex flex-row-reverse align-items-center">
                                        <img src="images/avatar/portrait-beautiful-young-woman.jpg" class="avatar-image img-fluid" alt="">

                                        <div class="d-flex flex-row-reverse align-items-center justify-content-between flex-wrap w-100 me-3">
                                            <p class="mb-0 text-end">
                                                <strong>Haley</strong>
                                                <small>Sales & Marketing</small>
                                            </p>

                                            <div class="reviews-icons">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reviews-body">
                                        <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                                        <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                                    </div>
                                </div>

                                <div class="reviews-thumb">
                                    <div class="reviews-info d-flex flex-row-reverse align-items-center">
                                        <img src="images/avatar/blond-man-happy-expression.jpg" class="avatar-image img-fluid" alt="">

                                        <div class="d-flex flex-row-reverse align-items-center justify-content-between flex-wrap w-100 me-3">
                                            <p class="mb-0 text-end">
                                                <strong>Jackson</strong>
                                                <small>Dev Ops</small>
                                            </p>

                                            <div class="reviews-icons">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reviews-body">
                                        <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                                        <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                                    </div>
                                </div>

                                <div class="reviews-thumb">
                                    <div class="reviews-info d-flex flex-row-reverse align-items-center">
                                        <img src="images/avatar/university-study-abroad-lifestyle-concept.jpg" class="avatar-image img-fluid" alt="">

                                        <div class="d-flex flex-row-reverse align-items-center justify-content-between flex-wrap w-100 me-3">
                                            <p class="mb-0 text-end">
                                                <strong>Kevin</strong>
                                                <small>Internship</small>
                                            </p>

                                            <div class="reviews-icons">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reviews-body">
                                        <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                                        <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!--end of reviews-section-->

            <section class="cta-section">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row flex-row-reverse">

                        <div class="col-lg-6 col-10">
                            <h2 class="text-white mb-2 text-end">أكثر من 5 ألاف مستفيد لدينا</h2>

                            <p class="text-white text-end">إذا كنت تبحث عن وظيفة تناسبك والحصول على المزيد من الخبرة في مسيرتك المهنية بإمكانك الإنضمام لنا أو تصفح لموقع الإلكتروني لأخذ فكرة إضافية</p>
                        </div>

                        <div class="col-lg-4 col-12 me-auto">
                            <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                                <a href="#" class="custom-btn custom-border-btn btn me-4">أنشئ حسابك الان</a>

                                <a href="#" class="custom-link">إبحث عن وظيفة</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>




        <!--Footer-->
        <footer class="site-footer">
            <div class="container">
                <div class="row flex-row-reverse">

                    <div class="col-lg-4 col-md-6 col-12 mb-3">
                        <div class="d-flex flex-row-reverse align-items-center mb-4">
                            <img src="images/business-bag.svg" class="img-fluid logo-image">

                            <div class="d-flex flex-column text-end me-2">
                                <strong class="logo-text">جهات</strong>
                                <small class="logo-slogan">بوابة التوظيف</small>
                            </div>
                        </div>  

                        <p class="mb-2 text-end">
                            <a href="#" class="site-footer-link">
                                www.jobbportal.com
                            </a>

                            <i class="custom-icon bi-globe ms-1"></i>
                            
                        </p>

                        <p class="mb-2 text-end">
                             <a href="tel: 305-240-9671" class="site-footer-link">
                                305-240-9671
                            </a>

                            <i class="custom-icon bi-telephone ms-1"></i>

                        </p>

                        <p class="mb-2 text-end">
                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            info@jobportal.co
                            </a>

                            <i class="custom-icon bi-envelope ms-1"></i>

                        </p>

                    </div>

                    <div class="col-lg-2 col-md-3 col-6 ms-lg-auto text-end">
                        <h6 class="site-footer-title">الشركة</h6>

                        <ul class="footer-menu">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">About</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Blog</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Jobs</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6 text-end">
                        <h6 class="site-footer-title">مصادر</h6>

                        <ul class="footer-menu">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Guide</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">How it works</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Salary Tool</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-8 col-12 mt-3 mt-lg-0 text-end">
                        <h6 class="site-footer-title">القائمة البريدية</h6>

                        <form class="custom-form newsletter-form" action="#" method="post" role="form">
                            <h6 class="site-footer-title">إحصل على تنبية عند توفر وظيفة جديدة</h6>

                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi-person"></i></span>

                                <input type="text" name="newsletter-name" id="newsletter-name" class="form-control " placeholder="yourname@gmail.com" required>

                                <button type="submit" class="form-control ">
                                    <i class="bi-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-12 d-flex align-items-center">
                            <p class="copyright-text">Copyright © Gotto Job 2048</p>

                            <ul class="footer-menu d-flex">
                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy Policy</a></li>

                                <li class="footer-menu-item"><a href="#" class="footer-menu-link">Terms</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-5 col-12 mt-2 mt-lg-0">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-linkedin"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-12 mt-2 d-flex align-items-center mt-lg-0">
                            <p>Design: <a class="sponsored-link" rel="sponsored" href="https://www.tooplate.com" target="_blank">Tooplate</a></p>
                        </div>

                        <a class="back-top-icon bi-arrow-up smoothscroll d-flex justify-content-center align-items-center" href="#top"></a>

                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>