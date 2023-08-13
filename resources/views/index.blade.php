@extends('layouts.app')
@section('content')
    {{-- <div class="m-5 rounded">
        <div class="container">
            <div class=" m-3">
                <div class="row">
                    <div class="col p-5 text-center bg-image "
                        style=" background-image: url('pics/641b1fc5932db-tell-me-about-the-moon.jpg'); height: 400px;">
                        <div class="mask" style="">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="text-white">
                                    <h1 class="mb-3">Nouvil</h1>
                                    <h4 class="mb-3">18 milion users</h4>
                                    <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <h1 class= "">About As </h1>
                        <p class="fw-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam ducimus maxime, fuga accusantium sed minima dicta dolores reprehenderit consequuntur porro eos corrupti delectus similique soluta tenetur illum. Adipisci, esse animi.</p>
                    </div>
                </div>


            </div>
        </div>
    </div> --}}


    {{-- hero --}}

    <section class="bg-dark text-white text-center text-sm-start py-5">

        <div class="container">
            <div class="d-sm-flex  ">
                <div class="p-3">
                    <h1 class="fw-bold"> About <span class="text-info">Nouvil</span></h1>
                    <p>
                        Nouvil , American online social network service that is part of the company Meta Platforms. Facebook
                        was founded in 2004 by Mark Zuckerberg, Eduardo Saverin, Dustin Moskovitz, and Chris Hughes, all of
                        whom were students at Harvard University. Facebook became the largest social network in the world,
                        with nearly three billion users as of 2021, and about half that number were using Facebook every
                        day. The company’s headquarters are in Menlo Park, California. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Delectus minus assumenda ipsam dolorem neque voluptatibus eum repellat
                        commodi, sint modi numquam mollitia atque laudantium consequuntur cupiditate nemo ab iste quisquam!
                    </p>
                    <a href="https://en.wikipedia.org/wiki/Facebook" class="btn btn-primary">Read More</a>
                </div>

                <img class=" img-fluid w-50" src="pics/hero-imgg.svg" alt="">
            </div>
        </div>


    </section>










    {{--
    <div class="text-center m-1 p-2 bg-secondary ">
        <h2>Blog Categories</h2>
        <div class="container  ">
            <div class="row">
                <div class="fw-bold col fs-4 py-2 pt-10">UX Design</div>
                <div class="fw-bold col fs-4 py-2">Programming</div>
                <div class="fw-bold col fs-4 py-2">Graphic Design</div>
                <div class="fw-bold col fs-4 py-2">Front-End</div>
            </div>
        </div>
    </div> --}}
    <div class="m-2">
        <br><br><br><br><br>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <div class="section_our_solution">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="our_solution_category">
                        <div class="solution_cards_box">
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <a href="https://ar-ar.facebook.com/" class="fa fa-facebook"></a>
                                </div>
                                <div class="solu_title">
                                    <h3>FaceBook</h3>
                                </div>
                                <div class="solu_description">
                                    <p>
                                        What is Facebook? Facebook is a social media network that connects people through an
                                        online platform. By sharing content like text status posts.

                                    </p>
                                    <a href="https://ar-ar.facebook.com/" ><button type="button" class="read_more_btn">Read More</button></a>

                                </div>
                            </div>
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                                </div>
                                <div class="solu_title">
                                    <h3>Instegram </h3>
                                </div>
                                <div class="solu_description">
                                    <p>
                                        Instagram is a free photo and video sharing app available on iPhone and Android.
                                        People can upload photos or videos to our service .

                                    </p>
                                    <a href="https://www.instagram.com/" ><button type="button" class="read_more_btn">Read More</button></a>


                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="solution_cards_box sol_card_top_3">
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
                                </div>
                                <div class="solu_title">
                                    <h3>Youtube</h3>
                                </div>
                                <div class="solu_description">
                                    <p>
                                        YouTube is a video sharing service where users can watch, like, share, comment and
                                        upload their own videos. The video service can be accessed on PCs.

                                    </p>
                                    <a href="https://www.youtube.com/" ><button type="button" class="read_more_btn">Read More</button></a>

                                </div>
                            </div>
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <a href="https://www.tiktok.com/en/" class="fa fa-tumblr"></a>
                                </div>
                                <div class="solu_title">
                                    <h3>TikTok</h3>
                                </div>
                                <div class="solu_description">
                                    <p>
                                        TikTok is a social media platform for creating, sharing and discovering short
                                        videos. The app is used by young people as an outlet to express themselves through
                                        singing, dancing, comedy, and lip-syncing.

                                    </p>
                                    <a href="https://www.tiktok.com/en/" ><button type="button" class="read_more_btn">Read More</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center  ">
        <h1>Recent Posts</h1>
        <p class="py-1 text-center">

            PHP, originally derived from Personal Home Page Tools, now stands for PHP: Hypertext Preprocessor, which the PHP
            FAQ describes as a "recursive acronym." PHP executes on the server, while a comparable alternative, JavaScript,
            executes on the client.
        </p>
    </div>

    <div class="container border-top ">

        <div class="d-flex m-2">

            <div class="">

                <ul class="d-flex  justify-content-between p-sm-1">
                    <li class="btn btn-outline-dark "><a href="#" class="btn btn-info ">PHP</a></li>
                    <li class="btn btn-outline-dark "><a href="#" class="btn btn-info ">HTML</a></li>
                    <li class="btn btn-outline-dark  "><a href="#" class="btn btn-info ">CSS</a></li>
                    <li class="btn btn-outline-dark  "><a href="#" class="btn btn-info ">Js</a></li>


                </ul>

                <h4> PHP, originally derived from Personal Home Page Tools, now stands for PHP: Hypertext Preprocessor,
                    which the PHP
                    FAQ describes as a "recursive acronym." PHP executes on the server, while a comparable alternative,
                    JavaScript,
                    executes on the client.</h4>

            </div>
            <div class="">
                <img src="{{ url('pics/hero2.svg') }}" alt="" class="img-fluid" style=" width: 100%  ">
            </div>


        </div>
    </div>
@endsection
