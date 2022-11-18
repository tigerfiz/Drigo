@extends('layouts.main')


@section('main-section')
<section class="mainViewOfSeller">
    <div class="mainViewOfSellerLeft">
        <div class="mainViewOfSellerLeftTop">

            <div class="mainViewOfSellerLeftTopInner">
                <img src="{{url('font_end_code/image/header.png')}}" alt="">
                <div class="owerInfoTitle">
                    <h2>MD. MUSTAFIZUR RAHMAN</h2>
                    <h2>Asad Store</h2>
                    <p>Z4022, Madarganj, Bangladesh</p>
                </div>

            </div>
        </div>
        <div class="mainViewOfSellerLeftBottom">


            <a href="#"><button>Get Location</button></a>

        </div>


    </div>
    <div class="mainViewOfSellerRight">
        <div class="mainViewOfSellerRightTop">
            <img src="{{url('font_end_code/image/shopheader.jpg')}}" alt="">
        </div>
        <div class="itemTitle">
            <h2>Asad Store</h2>
            <p>Item avalible: 200</p>
        </div>
        <div class="productPreview">


            <div class="productList">

                <!-- 
This is the product html start -->



                <a href="https://google.com" class="product">
                    <div class="producttop">
                        <div class="producttopInner">
                            <div class="productinfo">
                                <div class="productinfoleft">
                                    <p>Shop Type</p>
                                    <h5>Cafe</h5>
                                </div>
                                <div class="productinforight">
                                    <img src="{{url('font_end_code/image/header.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="producttopInnerBottom">
                            <img src="{{url('/font_end_code/image/cafe.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="productbottom">
                        <p>Distance: 2 km</p>
                        <h2>Asad Store</h2>
                    </div>
                </a>
                <a href="https://google.com" class="product">
                    <div class="producttop">
                        <div class="producttopInner">
                            <div class="productinfo">
                                <div class="productinfoleft">
                                    <p>Shop Type</p>
                                    <h5>Cafe</h5>
                                </div>
                                <div class="productinforight">
                                    <img src="{{url('font_end_code/image/header.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="producttopInnerBottom">
                            <img src="{{url('/font_end_code/image/cafe.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="productbottom">
                        <p>Distance: 2 km</p>
                        <h2>Asad Store</h2>
                    </div>
                </a>
                <a href="https://google.com" class="product">
                    <div class="producttop">
                        <div class="producttopInner">
                            <div class="productinfo">
                                <div class="productinfoleft">
                                    <p>Shop Type</p>
                                    <h5>Cafe</h5>
                                </div>
                                <div class="productinforight">
                                    <img src="{{url('font_end_code/image/header.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="producttopInnerBottom">
                            <img src="{{url('/font_end_code/image/cafe.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="productbottom">
                        <p>Distance: 2 km</p>
                        <h2>Asad Store</h2>
                    </div>
                </a>
                <a href="https://google.com" class="product">
                    <div class="producttop">
                        <div class="producttopInner">
                            <div class="productinfo">
                                <div class="productinfoleft">
                                    <p>Shop Type</p>
                                    <h5>Cafe</h5>
                                </div>
                                <div class="productinforight">
                                    <img src="{{url('font_end_code/image/header.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="producttopInnerBottom">
                            <img src="{{url('/font_end_code/image/cafe.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="productbottom">
                        <p>Distance: 2 km</p>
                        <h2>Asad Store</h2>
                    </div>
                </a>


            </div>

        </div>
        <a href="https://google.com" class="moreItem">
            <p>More>></p>
        </a>

    </div>

</section>
@endsection