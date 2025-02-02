@extends('layouts.guest')
@section('content')
<div id="first-slider">
       <div id="carousel-example-generic" class="carousel slide carousel-fade">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                     <!-- Item 1 -->
                     <div class="item active slide1">
                            <h2 data-animation="animated bounceInDown"><span>WELCOME TO ANDUSA USA </span></h2>
                            <h3 data-animation="animated bounceInDown">SERVICING NIGERIAN IN DIASPORA COMMUNITY IN THE UNITED STATES</h3>
                            <h4 data-animation="animated bounceInUp"><a href="{{ route('about') }}">WHO WE ARE</a></h4>
                     </div>
                     <!-- Item 2 -->
                     <div class="item slide2">
                            <h2 data-animation="animated bounceInDown"><span>WE CARE</span></h2>
                            <h3 data-animation="animated bounceInDown">COVID-19 INTERVENTION FUND!</h3>
                            <h4 data-animation="animated bounceInUp"><a href="{{ route('contact') }}">DONATE TODAY</a></h4>
                     </div>
                     <!-- Item 3 -->
                     <div class="item slide3">
                            <h2 data-animation="animated bounceInDown"><span>CONNECT WITH OTHER NIGERIANS</span></h2>
                            <h3 data-animation="animated bounceInDown">REGISTER TO BECOME A MEMBER OF ANDUSA USA!</h3>
                            <h4 data-animation="animated bounceInUp"><a href="{{ route('contact') }}">REGISTER HERE</a></h4>
                     </div>
                     <!-- Item 4 -->
                     <div class="item slide5">
                            <h2 data-animation="animated bounceInDown"><span>UPCOMING ANDUSA EVENTS</span></h2>
                            <h3 data-animation="animated bounceInDown">JOIN US FOR OUR NEXT EVENT.</h3>
                            <h4 data-animation="animated bounceInUp"><a href="{{ route('upcomingEvents') }}">LEARN MORE</a></h4>
                     </div>
                     <!-- End Item 4 -->
                     <!-- Item 5 -->
                     <div class="item slide5">
                        <h2 data-animation="animated bounceInDown"><span>PARTNER WITH ANDUSA</span></h2>
                        <h3 data-animation="animated bounceInDown">WORK WITH US TO MAKE NIGERIA A BETTER COUNTRY.</h3>
                        <h4 data-animation="animated bounceInUp"><a href="{{route('about')}}">LEARN MORE</a></h4>
                 </div>
                 <!-- End Item 5 -->

              </div>
              <!-- End Wrapper for slides-->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                     <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                     <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
              </a>
       </div>
</div>

<section id="about-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>ABOUT ANDUSA USA</h1>
                     <hr>
                     <h5>MISSION</h5>
                     <p>Our mission is to promote the spirit of patriotism, networking and cooperation among Nigerians in the United States, for their individual and collective success, and to mobilize the vast resources of manpower and machinery toward building a greater Nigeria.</p>
                     <h5>ABOUT US</h5>
                     <p>Association of Nigerians in Diaspora Organization Americas was incorporated as a Non-Profit Organization in 2001 and is headquartered in Washington DC.</p>
                     <div class="text-center">
                            {{-- <a href="donate.html" class="btn1">donate now</a> --}}
                            {{-- <a href="about-us.html" class="btn2">Read More</a> --}}
                     </div>
              </div>
       </div>
</section>

<section id="activities-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>WHAT WE DO?</h1>
                     <hr>
                     <h5>The core vision of ANDUSA is taking development back to Nigeria.</h5>
                     <div class="text-left">
                            <div class="clearfix col-md-4 top-off">
                                   <div class="grid-content-left"><i class="fa fa-heart"></i></div>
                                   <div class="grid-content-wrapper">
                                          <h4>Charity for Education</h4>
                                          <p>Harness the talent and resources of Nigerians in Diaspora.</p>
                                          <a href="#" title="">Read More</a>
                                   </div>
                            </div>
                            {{-- <div class="clearfix col-md-4 top-off">
                                   <div class="grid-content-left"><i class="fa fa-cutlery"></i></div>
                                   <div class="grid-content-wrapper">
                                          <h4>Feed for Hungry Child</h4>
                                          <p>Feed the less previlege and giving hopes.</p>
                                          <a href="activities.html" title="">Read More</a>
                                   </div>
                            </div> --}}
                            {{-- <div class="clearfix col-md-4 top-off">
                                   <div class="grid-content-left"><i class="fa fa-home"></i></div>
                                   <div class="grid-content-wrapper">
                                          <h4>Home for Homeless</h4>
                                          <p>Our goal is to alleviate poverty and bring structures that works for the needy and promote through donations.</p>
                                          <a href="activities.html" title="">Read More</a>
                                   </div>
                            </div> --}}
                            <div class="clearfix col-md-4 top-off">
                                   <div class="grid-content-left"><i class="fa fa-tint"></i></div>
                                   <div class="grid-content-wrapper">
                                          <h4>Bringing Clean Water</h4>
                                          <p>Our goal is to alleviate poverty and bring structures that works for the needy and promote through donations.</p>
                                          <a href="activities.html" title="">Read More</a>
                                   </div>
                            </div>
                            <div class="clearfix col-md-4 top-off">
                                   <div class="grid-content-left"><i class="fa fa-thumbs-up"></i></div>
                                   <div class="grid-content-wrapper">
                                          <h4>Help Little Hands</h4>
                                          <p>Our goal is to alleviate poverty and bring structures that works for the needy.</p>
                                          <a href="activities.html" title="">Read More</a>
                                   </div>
                            </div>
                            {{-- <div class="clearfix col-md-4 top-off">
                                   <div class="grid-content-left"><i class="fa fa-money"></i></div>
                                   <div class="grid-content-wrapper">
                                          <h4>Donate for Children</h4>
                                          <p>Our goal is to alleviate poverty and bring structures that works for the needy and promote through donations.</p>
                                          <a href="activities.html" title="">Read More</a>
                                   </div>
                            </div> --}}
                     </div>
              </div>
       </div>
</section>

<section id="video-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>How can you help?</h1>
                     <hr>
                     <h5>Give us a brief description of the service that you are promoting.</h5>
                     <div class="text-left">
                            <div class="clearfix col-md-6 top-off">
                             <video width="400" controls>
                                    <source src="images/andusa_video.mp4" type="video/mp4">

                             </video>
                            </div>
                            <div class="clearfix col-md-6 top-off">
                                   <div class="media">
                                          <div class="media-image">
                                                 <img src="images/g1.jpg" class="attachment-full size-full" alt="g1"> </div>
                                          <div class="media-text">
                                                 <h5>BECOME A VOLUNTEER</h5>
                                                 <p>Give us a brief description of the service that you are promoting.</p>
                                          </div>
                                   </div>
                                   <div class="media">
                                          <div class="media-image">
                                                 <img src="images/g2.png" class="attachment-full size-full" alt="g1"> </div>
                                          <div class="media-text">
                                                 <h5>MAKE A GIFT</h5>
                                                 <p>Give us a brief description of the service that you are promoting.</p>
                                          </div>
                                   </div>
                                   <div class="media">
                                          <div class="media-image">
                                                 <img src="images/g1.jpg" class="attachment-full size-full" alt="g1"> </div>
                                          <div class="media-text">
                                                 <h5>GIVE A SCHOLASHIP</h5>
                                                 <p>Give us a brief description of the service that you are promoting.</p>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>
       </div>
</section>

<section id="projects-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>OUR PROJECTS</h1>
                     <hr>
                     <h5>ANDUSA ongoing and completed projects.</h5>
                     @php
                     $projects = App\Models\Projects::latest()->paginate(3);
                     @endphp
                     <div class="text-center">
                        @foreach($projects as $project)
                            <div class="clearfix col-md-4 top-off">
                                   <div class="grid-image"><img width="300" height="300" src="{{asset('storage/uploads/'.$project->passport) }}"></div>
                                   <div class="post-content">
                                          <h3>{{ $project->title }}</h3>
                                          <hr>
                                          <p class="text-justify">
                                          @php
                                            $post = \Illuminate\Support\Str::limit($project->post,300)
                                            @endphp
                                            {!! $post !!}
                                             </p>
                                            <a href="{{ route('project', $project->id) }}" title="">Read More</a>
                                     </div>
                              </div>
                       @endforeach

                       </div>
                       <br>
                       <br>
                       {{ $projects->links() }}
                </div>
         </div>
  </section>


<section id="projects-sec">
       <div class="container">
              <div class="text-center row">
                     <h1>Events</h1>
                     <hr>
                     <h5>Get latest trends and update about ANDUSA USA Events.</h5>
                     @php
                     $posts = App\Models\Post::latest()->paginate(3);
                     @endphp
                     <div class="text-center">
                      @foreach($posts as $post)
                            <div class="clearfix col-md-4 top-off">
                                   <div class="grid-image"><img  width="300" height="300" src="{{asset('storage/uploads/'.$post->banner_image) }}"></div>
                                   <div class="post-content">
                                          <h3>{{ $post->title }}</h3>
                                          <hr>
                                          <p class="text-justify">
                                                 @php
                                                     $body =  \Illuminate\Support\Str::limit($post->body,300)
                                                 @endphp
                                                 {!! $body !!}
                                          </p>
                                          <a href="{{ route('blog-post', $post->id) }}" title="">Read More</a>
                                   </div>
                            </div>
                     @endforeach

                     </div>
                     <br>
                     <br>
                     {{ $posts->links() }}
              </div>
       </div>
</section>


<div class="callout">
       <div class="container">
              <div class="row">
                     <div class="col-md-6">
                            <h2>Change Their World. Change Yours. This changes everything.</h2><!-- /.callout-title -->
                     </div><!-- /.columns large-6 -->

                     <div class="col-md-6">
                            <div class="callout-actions">
                                   <a href="{{ route('contact') }}" class="button">Become Volunteer</a>

                                   <span class="callout-separator">
                                          <span>Or</span>
                                   </span>

                                   <a href="#" class="button">Donate For Cause</a>
                            </div><!-- /.callout-actions -->
                     </div><!-- /.columns large-6 -->
              </div><!-- /.row -->
       </div>
</div>
@endsection
