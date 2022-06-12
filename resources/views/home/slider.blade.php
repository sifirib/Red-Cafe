<!-- Start slides -->
<div id="slides" class="cover-slides">
    <ul class="slides-container">

        @foreach($sliderdata as $rs)

                <li class="text-center">
                    <img src="{{Storage::url($rs->image)}}" style="height: 950px; weight: 1350px">
                    <a href="{{route('product', ['id' => $rs->id])}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="m-b-20" style="top: -100px"><strong>Welcome To <br> Laravel Restaurant</strong></h1>
                                    <h1 class="m-b-20" style="top: -20px; color: aliceblue"><strong>{{$rs->title}}</strong></h1>

                                    <p class="m-b-40" >{{$rs->category->description}}</p>

                                    <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
        @endforeach

    </ul>

    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End slides -->
