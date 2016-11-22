@extends('pages.nonsearchscript')
@extends('pages.footer')
@extends('pages.header')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Reviews</li>
    </ol>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class=" text-center"><b>
                                <a href="{{url('reviews/create')}}">Post a Review!!</a></b></h3>
                    </div>
                </div>

                <div class="panel panel-info">


                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Popular Reviews</b></h3>
                    </div>

                    <div class="panel-body" style="word-break: break-all">
                        <ul>
                            @foreach($popularReview as $review)
                                <a href="{{url('reviews/'.$review->title)}}"><li class="text-primary">{{$review->title}}</li></a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 ">



                    <div class="panel panel-primary  text-center">
                        <h3 class="panel-title panel-heading"><b>Reviews</b></h3>
                    </div>

                    @foreach($reviewObj as $review)
                        <div class="panel panel-default">
                                <div class="panel-body text-center">

                                    <div class="panel-left col-md-4 col-xs-12 col-sm-12" style="display: table-cell;vertical-align: middle;padding-right: 10px">
                                        <img  height="175px" width="125px" src="{{$review->image->url}}" alt="...">
                                    </div>
                                    <div class="panel-right col-md-8 col-xs-12 col-sm-12" style="display: table-cell; vertical-align: top;padding-left: 10px ;word-break: break-all">
                                        <a href="{{url('reviews/'.$review->title)}}" class="text-primary"><h3>{{$review->title}}</h3></a>
                                        <ul class="list-inline">
                                            <li class="fa fa-filter">{{$review->category->name}}</li>
                                            <li class="fa fa-user"> {{$review->user->name}} </li>
                                            <li class="fa fa-clock-o"> {{$review->updated_at}} </li>
                                        </ul>
                                        <p>{{$review->content}}</p>
                                    </div>


                                </div>
                        </div>
                    @endforeach

                {{$reviewObj->links()}}



            </div>

            </div>

    </div>

@endsection