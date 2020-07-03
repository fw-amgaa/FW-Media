@extends('main')

@section('content')
        <div id="content" class="site-content">
            <div class="page-header dtable text-center" style="background-image: url(images/bg-page-header.jpg);">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Portfolio Grid</h1>
                        <ul id="breadcrumbs" class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li class="active">Portfolio Grid</li>
                        </ul>
                    </div>
                </div>
            </div>

            <section class="p-t110 p-b90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 m-b20">
                            <div class="ot-heading text-center">
                                <h6><span>our projects</span></h6>
                                <h2 class="main-heading">View Some of Our Works <br>and Case Studies for Clients</h2>
                            </div>
                        </div>
                    </div>
                    <div class="project-filter-wrapper">
                        <div class="container">
                            <ul class="project_filters">
                                <li><a href="#" data-filter="*" class="selected">All</a></li>
                                <li><a href="#" data-filter=".development">Development</a></li>                     
                                <li><a href="#" data-filter=".marketing">Marketing</a></li>                     
                                <li><a href="#" data-filter=".media">Media</a></li>                     
                                <li><a href="#" data-filter=".optimization">Optimization</a></li>                       
                            </ul>
                        </div>
                        <div class="projects-grid">
                            <div class="project-item media optimization ">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">New Soft for Watch</a></h5>
                                            <p class="portfolio-cates"><a href="#">Media</a><span>/</span><a href="#">Optimization</a><span>/</span></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item development ">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">UX Design for Tubus</a></h5>
                                            <p class="portfolio-cates"><a href="#">Development</a><span>/</span></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-item marketing optimization">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">Analysis of Security</a></h5>
                                            <p class="portfolio-cates"><a href="#">Marketing</a><span>/</span><a href="#">Optimization</a><span>/</span></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item media optimization">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">SMM Project</a></h5>
                                            <p class="portfolio-cates"><a href="#">Media</a><span>/</span><a href="#">Optimization</a><span>/</span></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item optimization">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">Responsive Design</a></h5>
                                            <p class="portfolio-cates"><a href="#">Optimization</a></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item development">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">App for Health</a></h5>
                                            <p class="portfolio-cates"><a href="#">Development</a></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item development media">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">Basics Project</a></h5>
                                            <p class="portfolio-cates"><a href="#">Development</a><span>/</span><a href="#">Media</a><span>/</span></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item marketing media">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">Social Media App</a></h5>
                                            <p class="portfolio-cates"><a href="#">Marketing</a><span>/</span><a href="#">Media</a><span>/</span></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item marketing media">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">Your New Reality</a></h5>
                                            <p class="portfolio-cates"><a href="#">Marketing</a><span>/</span><a href="#">Media</a><span>/</span></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item marketing">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">Immersive Experience</a></h5>
                                            <p class="portfolio-cates"><a href="#">Marketing</a></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item development">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">Cereal Project</a></h5>
                                            <p class="portfolio-cates"><a href="#">Development</a></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item marketing optimization">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio-single.html">
                                            <img src="https://via.placeholder.com/370x370.png" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio-single.html">Crypto App Project</a></h5>
                                            <p class="portfolio-cates"><a href="#">Marketing</a><span>/</span><a href="#">Optimization</a><span>/</span></p> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
        @endsection

      