<x-admin-layout>
    <div>
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Payguard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">App</a></li>
                            <li class="breadcrumb-item active">Action</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Transactions</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-5">
                <!-- Product image -->
                <a href="javascript: void(0);" class="text-center d-block mb-4">
                    <img src="{{asset('assets/images/products/product-5.jpg')}}" class="img-fluid" style="max-width: 280px;" alt="Product-img">
                </a>
            </div> <!-- end col -->

            <div class="col-lg-7">
                <form class="ps-lg-4">
                    <!-- Product title -->
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mt-0">{{$transaction->item}}  </h3>
                        </div>
                        <div class="col-6">
                            <h3 class="mt-0">Ref #: <u> {{$transaction->reference_number}} </u>  </h3>
                        </div>
                    </div>
                    <p class="mb-1">Trasaction date: {{ $transaction->time }}</p>
                    <p class="font-16 mb-0">
                        <span class="text-default">Product Condition: </span>
                        <span class="text-warning">{{$transaction->product_condition}}</span>
                    </p>
                    <p class="font-16">
                        <span class="text-default">Product Description</span>
                        <span>{{$transaction->product_descriptions}}</span>
                    </p>
                    <!-- Product stock -->
                    {{-- <div class="mt-3">
                        <h4><span class="badge badge-success-lighten">status of delivery</span></h4>
                    </div> --}}

                    <!-- Product description -->
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <h6 class="font-14">Price</h6>
                                <h3>{{number_format($transaction->amount)}} {{$transaction->currency}}</h3>
                            </div>
                            <div class="col-4">
                                <h6 class="font-14">Fee</h6>
                                <h3>{{number_format($transaction->fee)}} {{$transaction->currency}}</h3>
                            </div>
                            <div class="col-4">
                                <h6 class="font-14">Payout</h6>
                                <h3>{{number_format($transaction->payout_amount)}} {{$transaction->currency}}</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="mt-4">
                        {{-- <h6 class="font-14">Set your price</h6>
                        <div class="d-flex">
                            <input type="number" min="1" value="1" class="form-control" placeholder="Price" style="width: 100px;">
                            <button type="button" class="btn btn-primary ms-2"><i class="mdi mdi-file me-1"></i> Submit price</button>
                        </div> --}}
                    </div>
        
                    <!-- Product information -->
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="font-14">Seller info:</h6>
                                <p class="text-sm lh-150">{{$transaction->seller_name}}</p>
                                <p class="text-sm lh-150">{{$transaction->seller_number}}</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="font-14">From :</h6>
                                <label class="text-sm lh-100">{{$transaction->sender_address}}</label>
                                <label class="text-sm lh-100">{{$transaction->sender}}</label>
                            </div>
                            <div class="col-md-4">
                                <h6 class="font-14">To:</h6>
                                <label class="text-sm lh-150">{{$transaction->recipient_address}}</label>
                                <label class="text-sm lh-150">{{$transaction->recipient_name}}</label>
                            </div>
                        </div>
                    </div>

                </form>
            </div> <!-- end col -->
        </div> <!-- end row-->
    </div>
</x-admin-layout>
