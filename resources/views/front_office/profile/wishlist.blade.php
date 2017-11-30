@extends('front_office/layouts.app')
@section('title')
- {{Auth::user()->FullName()}}
@endsection
@section('css')
@endsection
@section('content')
    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 prf_left">
    @include('front_office/profile/layouts.aside')
    </div>
    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 prf_right">
        <a href="#">
            <div id="mes_colocation">
                <div class="price_my_col">260 <span>TND</span></div>
                <div class="left_m_col" id="left_m_col">
                    <div class="block_img">
                        <img src="{{asset('uploads/colocation/col.jpg')}}">
                    </div>
                </div>
                <div class="right_m_col" id="right_m_col">
                    <h3 class="title_col">Fully Furnished Condo in Downtown Fully Furnished Condo in Downtown</h3>
                    <p class="descrip_col">I am a professional female looking to room with another professional female. I work in Sales and Marketing so I am often out of town for work (ranges from about 1-3 weeks out of the month).</p>
                    <div class="local_col">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>Hornby Street, Central</span>
                    </div>
                    <div class="gouver_col">
                        <span>Tunis</span>
                    </div>
                </div>
            </div> 
        </a>
        <a href="#">
            <div id="mes_colocation">
                <div class="price_my_col">180 <span>TND</span></div>
                <div class="left_m_col" id="left_m_col">
                    <div class="block_img">
                        <img src="{{asset('uploads/colocation/col2.jpg')}}">
                    </div>
                </div>
                <div class="right_m_col" id="right_m_col">
                    <h3 class="title_col">Fully Furnished Condo in Downtown Fully Furnished Condo in Downtown</h3>
                    <p class="descrip_col">I am a professional female looking to room with another professional female. I work in Sales and Marketing so I am often out of town for work (ranges from about 1-3 weeks out of the month).</p>
                    <div class="local_col">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>Hornby Street, Central</span>
                    </div>
                    <div class="gouver_col">
                        <span>Ben Arous</span>
                    </div>
                </div>
            </div> 
        </a>   
        <a href="#">
            <div id="mes_colocation">
                <div class="price_my_col">180 <span>TND</span></div>
                <div class="left_m_col" id="left_m_col">
                    <div class="block_img">
                        <img src="{{asset('uploads/colocation/col.jpg')}}">
                    </div>
                </div>
                <div class="right_m_col" id="right_m_col">
                    <h3 class="title_col">Fully Furnished Condo in Downtown Fully Furnished Condo in Downtown</h3>
                    <p class="descrip_col">I am a professional female looking to room with another professional female. I work in Sales and Marketing so I am often out of town for work (ranges from about 1-3 weeks out of the month).</p>
                    <div class="local_col">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>Hornby Street, Central</span>
                    </div>
                    <div class="gouver_col">
                        <span>Ariana</span>
                    </div>
                </div>
            </div>
        </a>   
    </div>
@endsection
@section('js')
@endsection