@foreach($children as $subcategory)

        @if(count($subcategory->children))
                <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">{{$subcategory->title}}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown-a">
                    @include('home.categorytree', ['children' => $subcategory->children]);
                </div>

            <hr>
        @else
            <li>
                <div class="dropdown-menu" aria-labelledby="dropdown-a">
                    <a class="dropdown-item" href="{{route('categoryproducts', ['id' => $subcategory->id, 'slug' => $subcategory->title])}}">{{$subcategory->title}}</a>
                </div>
            </li>
        @endif




@endforeach
