@extends('layouts.app')

@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Order Checkout</h3>
                    <p><a href="index.html">Home</a> / Checkout</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- checkout-section -->
<div class="checkout-section">
    <div class="container">
        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="checkout-section">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf
                        <h2>Address Details</h2>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="">
                        </div>

                        <div class="half-form">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="">
                            </div>
                        </div> <!-- / half-form -->
                        <button type="submit" id="complete-order" class="boxed-btn3 mt-3">Complete Order</button>
                    </form>  
                </div>
            </div>
            <!-- / col-lg-6 -->
            <div class="col-lg-6">
                <div class="checkout-table-container">
                    <h2>Your Order</h2>

                    <div class="checkout-table">

                    @foreach (Cart::content() as $item)
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">{{ $item->model->title }}</div>
                                <div class="checkout-table-description">{{ $item->model->description }}</div>
                            </div>
                        </div> <!-- / checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">{{ $item->qty }}</div>
                        </div>
                    </div> <!-- / checkout-table-row -->
                    @endforeach

                    </div> <!-- / checkout-table -->

                </div>
            </div>
        </div>
    </div>
</div> 
<!-- / checkout-section -->
@endsection

