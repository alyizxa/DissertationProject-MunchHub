<style>
    .profile-teaser-left {
        float: left;
        width: 20%;
        margin-right: 1%;
    }

    .profile-img img {
        width: 100%;
        height: auto;
    }

    .profile-teaser-main {
        float: left;
        width: 79%;
        padding-top: 35px;
    }


    .info {
        display: inline-block;
        margin-right: 10px;
        color: #777;
    }

    .info span {
        font-weight: bold;
    }

    /*search box css start here*/
    .search-sec {
        padding-top: 2rem;
        padding-bottom: 1rem;
    }

    .search-slt {
        display: block;
        width: 100%;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #55595c;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        height: calc(3rem + 2px) !important;
        border-radius: 0;
    }

    .wrn-btn {
        width: 100%;
        font-size: 16px;
        font-weight: 400;
        text-transform: capitalize;
        height: calc(3rem + 2px) !important;
        border-radius: 0;
    }

    @media (min-width: 992px) {
        .search-sec {
            position: relative;
            background: rgba(26, 70, 104, 0.51);
        }
    }

    @media (max-width: 992px) {
        .search-sec {
            background: rgba(26, 70, 104, 0.51);

            padding-top: 12px;
        }
    }

    .bottoms {
        display: -webkit-inline-flex;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: content-box;
        overflow: auto;
        text-align: right;
        right: 0;
        bottom: 0;
    }
</style>
@extends('layouts.app')

@section('content')
    <section class="search-sec">
        <div class="container">
            <form action="/profiles" method="get" novalidate="novalidate">
                @csrf
                @method('GET')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12 pt-4" style="text-align: center;">
                                <h3>What are you looking for?</h3>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-12 p-0">

                                <select name="vtype" class="form-control search-slt" id="exampleFormControlSelect1">
                                    <option value="" disabled selected>Select your option</option>
                                    <option value="Chef">Chef</option>
                                    <option value="Bartender">Bartender</option>
                                    <option value="Caterer">Caterer</option>
                                    <option value="Waitron">Waitron</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt" placeholder="City" id="autocomplete">

                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 p-0">

                                <select name="" class="form-control search-slt" id="exampleFormControlSelect1">
                                    <option value="" disabled selected>Max Distance</option>
                                    <option value="Chef">15 Km</option>
                                    <option value="Bartender">20 Km</option>
                                    <option value="Caterer">30 Km</option>
                                    <option value="Waitron">40 Km</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <button type="submit" class="btn btn-danger wrn-btn">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <hr>
    <div class="container">
        <!-- Four columns: 25% width on all screens, except for extra small (100% width)-->
        <div class="row">
            <div class="list-group pt-4">
                @if($users->count() > 0 )
                @foreach($users as $u)
                    <div class="flex list-group-item clearfix">
                        <div class="profile-teaser-left">
                            <a href="/profile/{{$u->id}}" style="color: #1b1e21">
                                <div class="profile-img"><img
                                            src="/storage/{{isset($u->profile->image) ? $u->profile->image : 'uploads/defaultprofile.jpg'}}"
                                            class="rounded-circle w-80"/></div>
                            </a>
                        </div>

                        <div class="profile-teaser-main">
                            <div class="profile-info">
                                <div class="info">
                                    <span class="">{{$u->first_name}}</span>
                                </div>
                                <div>
                                    <span class=""> {{Str::limit($u->profile->profile_text, 230, ' (...)')}}</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="bottoms" style="float:left; text-align: left;">
                           <span class="profile-teaser-bottom">
                             {{$u->name}} -

                               <img src="/storage/uploads/waiter.svg" alt="" style="width:30px; height: 25px;">
                               <i class="fas fa-concierge-bell"></i>
                                <i class="fas fa-utensils"></i>
                               <br>
                               <br>
                               <span style="font-style: italic; font-weight: bold; font-size: 12px;">
                               <i class="fas fa-inf o" style="font-size: 25px; color: #8aa1b2;">
                                </i> I can help you with -{{$u->profile->tags}}
                               </span>
                               <br>
                               
                               <a href="/profile/{{$u->id}}" class="btn btn-primary"> View profile</a>
                               </span>
                            <br>
                        </div>
                        <br>
                        <span class="profile-teaser-bottom" style="position: absolute; right: 10px; bottom: 0; ">
                                <i class="fas fa-map-marker-alt"></i>

                                @if($u->city !== null)
                                {{$u->city}}
                                @elseif($u->city === null)
                                {{'asd'}}
                                @endif
                               
                              
                            </span></div>
                    <!-- item -->
                @endforeach
                    @else
                    <h1> Showing 0 Results <br>
                        </h1>

                    @endif
            </div>
        </div>
    </div>
@endsection