@extends('layouts.app')

@section('content')

    <div class="container-fluid p-0">
        <div class="jumbotron pb-0">
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                    <img src="{{ isset($user->profile->image) ? "/storage/".$user->profile->image : '/storage/uploads/defaultprofile.jpg' }}"
                         alt="" class="rounded-circle w-25">
                    <h1>{{$user->first_name .' '. $user->last_name}}</h1>
                </div>
            </div>

            <div class="row justify-content-center">

        <div class="pr-5"><strong></strong> All tools provided</div>
        <div class="pr-5"><strong></strong> Super Clean</div>
        <div class="pr-5"><strong></strong> Super Simple</div>
    </div>

    <div class="row justify-content-center">
        <div class="col-4 text-center">
            @cannot('update', $user->profile)
            <a class="btn btn-primary ml-2 mt-2" href="#contact">Get in touch</a>
            @endcannot
        </div>

    </div>
    <div class="row justify-content-between">

        <div class="col-4 pt-1 text-center">
            <div class="pr-5"><strong> <h1>5</h1></strong></div>
            <div class="pr-5">Verified bookings </div>
            <div class="pr-5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i></div>
        </div>
        <div class="col-4 d-inline-flex pt-1" >
           <div class="pl-5"><i class="fas fa-pizza-slice fa-5x"></i></div>
           <div class="pl-5"><i class="fas fa-cocktail"></i></div>
           <div class="pl-5"><i class="fas fa-people-carry"></i></div>
        </div>
    </div>

</div>

</div>

<div class="container-fluid">
    <div class="row justify-content-between">

        <div class="col-4 pt-1">
            <div class="pt-4 pr-5"><strong> <h1>About  {{'  '. $user->first_name}}</h1></strong></div>


        </div>
        <div class="col-4 d-inline-flex pt-1" >
            @can('update', $user->profile)
                <a class="btn btn-primary h-50" href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                <a class="btn btn-primary h-50 ml-2" href="/p/create">Add new post</a>
            @endcan

                <a class="btn btn-primary h-50 ml-2" href="#">View CV</a>

        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col-8 pt-1 text-center">

            <br><br>
            <div>

              <pre style="white-space: pre-wrap; overflow-x: hidden;">{{isset($user->profile->profile_text)? $user->profile->profile_text : "N/A"}}</pre></div>

        </div>
        <div class="col-4 d-inline-flex pt-1" >
<div class="row justify-content-center">
            <div class="list-group">
                <h5> Highlights</h5>
                <ul style="list-style-type:square;">
                    @if ($user->profile->tags != "")
                        @foreach(explode(' ', $user->profile->tags) as $tags)
                            <li>{{$tags}}</li>
                        @endforeach
                    @endif
                </ul>
        </div>
</div>
        </div>
    </div>
    <div class="row justify-content-between pt-5">
        <div class="col-4 pt-1 ml-5 border text-center">
            <div class="pt-4 pr-5"><strong> <h5>I can help  you with:</h5></strong></div>
            <div class="text-center">
                <ul style="list-style-type:none; float: left;">
                    @if ($user->profile->tags != "")
                        @foreach(explode(' ', $user->profile->tags) as $tags)
                            <li>{{$tags}}</li>
                        @endforeach
                    @endif
                </ul>
          </div>

        </div>

        <div class="col-4 d-inline-flex pt-1" >
            <div class="list-group">
                <h5> Practical info</h5>

                <ul style="list-style-type:square;">
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ul>

                <a href="{{isset($user->profile->url)? $user->profile->url : "N/A"}}" class="list-group-item list-group-item-action"> Website:  {{isset($user->profile->url)? $user->profile->url : "N/A"}}</a>
            </div>
        </div>

        <div class="col-12 text-center">
            @cannot('update', $user->profile)
                <a class="btn btn-primary w-25 ml-2" href="#contact">Get in touch</a>
            @endcannot

        </div>
    </div>
    <hr>
<div class="container pt-5">
    <h2> Previous works</h2>
    @cannot('update', $user->profile)
        @if($user->posts->count() < 1)
            This user does not seem to have any posts yet.
        @endif
    @endcannot

    @can('update', $user->profile)

        @if($user->posts->count() < 1)
            You dont seem to have any posts yet click here to add one
            <br>
        @endif
    @endcan
    @can('update', $user->profile)
        <a class="btn btn-primary" href="/p/create">Add new post</a>
    @endcan
    <hr>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-3 text-center">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100 pb-2" src="/storage/{{ $post->image }}">
                </a>
                <span class="">{{$post->caption}} </span>
                <br>
                @can('update', $user->profile)
                    <a class="btn btn-danger" onclick="return confirm('Are you sure you want to remove this post?')"
                       href="{{route('post.delete', $post->id)}}">
                        <i class="fa fa-trash">Remove
                        </i>
                    </a>
                @endcan
            </div>
            <br>
        @endforeach
    </div>
</div>
</div>
    <hr>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-center m-auto">
            <h2>Testimonials</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="img-box"><img src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg" alt=""></div>
                        <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                        <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                    </div>
                    <div class="item carousel-item">
                        <div class="img-box"><img src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg" alt=""></div>
                        <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                        <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                    </div>
                    <div class="item carousel-item">
                        <div class="img-box"><img src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg" alt=""></div>
                        <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                        <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div></div>
    <hr>
    <div class="container contact-form" id="contact">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div>
        <form method="">
            <h3>Drop me a Message</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <hr>
@endsection
