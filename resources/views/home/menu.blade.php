
<!-- Start Menu -->
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Special Menu</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".drinks">Drinks</button>
                        <button data-filter=".lunch">Food</button>
                        <button data-filter=".dinner">Desserts</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            @php
                $category_name = "";
            @endphp

            @foreach($productlist1 as $rs)

                    @php
                        if ($rs->category->title == "Hot" || $rs->category->title == "Cold") {
                            $div_class_name = "drinks";
                        }
                        elseif ($rs->category->title == "Meat") {
                            $div_class_name = "lunch";
                        }
                        elseif ($rs->category->title == "Desserts") {
                            $div_class_name = "dinner";
                        }
                    @endphp

                <div class="col-lg-4 col-md-6 special-grid {{$div_class_name}}">
                    <div class="gallery-single fix">
                        <img src="{{Storage::url($rs->image)}}" class="img-fluid" alt="Image" style="width: 350px; height: 210px">
                        <div class="why-text">
                            <h4>{{$rs->title}}</h4>
                            <p>{{$rs->keywords}}</p>
                            <h5> {{$rs->price}}₺</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
<!-- End Menu -->
