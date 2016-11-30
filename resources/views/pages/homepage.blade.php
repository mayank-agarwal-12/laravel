@extends('pages.nonsearchscript')
@extends('pages.footer')
@extends('pages.header')

@section('content')

<!-- Image
================================================== -->
<div class="container-fluid ">
    <div class="hidden-xs hidden-sm">


<img class="img-responsive" src="images/img5-main-page.png" id="bg" alt="" usemap="#mainmap">
<style>
#bg {
position: relative;

top: 0px;
left: 0%;
    padding-bottom: 20px;



/* Preserve aspect ratio */
min-width: 100%;
max-height: 500px;
}


.img-circle {
    border-radius: 90%;
    box-shadow: 0px 0px 9px #444;
    border: 2px solid #fff;
}
</style>

   {{-- <map name="mainmap">
        <area shape="rect" coords="0,0,508,315" alt="" href="/comparisons">

    </map>--}}

    </div>
    {{--<div style="bottom: 0px; min-height:550px"></div>--}}
</div>


{{--<div class="container" xmlns:color="http://www.w3.org/1999/xhtml">
<div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12 col-md-offset-0 col-lg-12">
        <a href="/" class="thumbnail">
            <img src="images/img4-main-page.png" >
        </a>
    </div>
</div>
    </div>--}}


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<a href="{{url('reviews/create')}}" style="position:fixed;
    top:90%;
    right:5px;
    z-index:1030;
    padding:5px;
    border: solid 1px;
    height: auto;
    width: auto;
    color:#ffffff;
    font-size: large;
    background-color:#222222">Post a Review</a>

<div class="container-fluid marketing" style="position: relative;display: block">

    <!-- Three columns of text below the carousel -->
    <div class="row" style="top: 685px">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
            <a href="/questions">
            <img class="img-circle  center-block" src="images/img-expert.jpg" alt="Generic placeholder image" width="170" height="170">
                </a>
            <h2><a  href="/questions" >Expert's Corner</a></h2>
            <p>Do you have a query about your test

                application or your Electronic T&amp;M

                instrument? Ask our experts!</p>
            <p><a class="btn btn-secondary" href="/questions" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
            <a href="/reviews">
            <img class="img-circle  center-block" src="/images/img-reviews.jpg" alt="Generic placeholder image" width="170" height="170"></a>
            <h2><a href="/reviews">Instrument Reviews</a></h2>
            <p>Excited about a product? Go ahead

                and use our platform to write about

                your experience. Keep Reviewing,

                Keep Inst-Reviewing.</p>
            <p><a class="btn btn-secondary" href="/reviews" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->


        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
            <a href="/comparisons">
            <img class="img-circle  center-block" src="images/img-comparison.jpg" alt="Generic placeholder image" width="170" height="170">
                </a>
            <h2><a href="/comparisons">Instrument Comparison</a></h2>
            <p>Planning to buy a T&amp;M instrument?

                Compare instruments from multiple

                vendors before making a decision</p>
            <p><a class="btn btn-secondary" href="/comparisons" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
            <a href="/applicationassistant">
            <img class="img-circle  center-block" src="/images/img-application-helper.jpg" alt="Generic placeholder image" width="170" height="170">
                </a>
            <h2><a href="/applicationassistant">Application Assistant</a></h2>
            <p>There are some tests absolutely

                required before your product is ready

                for the market. Know what they are!</p>
            <p><a class="btn btn-secondary" href="/applicationassistant" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->


    </div><!-- /.row -->

   {{-- <div class="container-fluid panel panel-default text-center">
        <div class="panel-heading">
            <h3>Top Comparisons</h3>
        </div>



    <div class="row panel-body">
        @foreach($comparisonList as $comparison)
        <div class="col-sm-12 col-md-4 col-xs-12 ">
            <div class="thumbnail1">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>

                <div class="caption text-center text-primary">
                    <h5 style="word-wrap: break-word;"><a href="{{url('comparisons/'.$comparison->name)}}"> {{$comparison->name}}</a></h5>
                </div>
            </div>
        </div>
            @endforeach
    </div>
    </div>

    <div class="container-fluid panel panel-default text-center" style="margin-top: 22px">
        <div class="panel-heading">
            <h3>Top Questions</h3>
        </div>



        <div class="row panel-body">
            @foreach($questionList as $key=>$question)
                <div class="col-sm-12 col-md-4 col-xs-12">
                    <div class="thumbnail1 ">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>

                        <div class="caption text-center text-primary ">
                            <h5 style="word-wrap: break-word;"><a href="{{url('questions/'.$question->id)}}"> {{$question->title}}</a></h5>
                            --}}{{--<p class="collapse" id="{{"viewdetails".$key}}" style="word-wrap: break-word;"><a href="{{url('questions/'.$question->id)}}"> {{$question->title}}</a></p>
                            <p ><a class="btn" data-toggle="collapse" data-target="{{"#viewdetails".$key}}">Query&raquo;</a></p>--}}{{--
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid panel panel-default text-center" style="margin-top: 22px">
        <div class="panel-heading">
            <h3>Top Reviews</h3>
        </div>



        <div class="row panel-body">
            @foreach($reviewList as $review)
                <div class="col-sm-12 col-md-4 col-xs-12">
                    <div class="thumbnail1 ">
                        @if($review->image)
                        <img  height="175px" width="100%" src="{{$review->image->url}}" alt="...">
                        @else
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        @endif
                        <div class="caption text-center text-primary">
                            <h5><a href="{{url('reviews/'.$review->title)}}"> {{$review->title}}</a></h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>--}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-12">
                <div class="panel panel-info">


                    <div class="panel-heading" style="background-color:#222 ;color:#fff">
                        <h3 class="panel-title text-center"><b>Popular Questions</b></h3>
                    </div>

                    <div class="panel-body" style="word-break: break-all">
                        <ul>
                            @foreach($questionList as $question)
                                <a href="{{url('questions/'.$question->id)}}"><li class="text-primary">{{$question->title}}</li></a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12">
                <div class="panel panel-info">


                    <div class="panel-heading" style="background-color:#222 ;color:#fff">
                        <h3 class="panel-title text-center"><b>Top Comparisons</b></h3>
                    </div>

                    <div class="panel-body" style="word-break: break-all">
                        <ul>
                            @foreach($comparisonList as $comparison)
                                <a href="{{url('comparisons/'.$comparison->name)}}"><li class="text-primary">{{$comparison->name}}</li></a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12">
                <div class="panel panel-info">


                    <div class="panel-heading" style="background-color:#222 ;color:#fff">
                        <h3 class="panel-title text-center"><b>Top Reviews</b></h3>
                    </div>

                    <div class="panel-body" style="word-break: break-all">
                        <ul>
                            @foreach($reviewList as $review)
                                <a href="{{url('reviews/'.$review->title)}}"><li class="text-primary">{{$review->title}}</li></a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>



</div><!-- /.container -->

@endsection




