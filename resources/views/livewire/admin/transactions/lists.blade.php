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
                            <li class="breadcrumb-item active">All</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Transactions</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="all">Product</th>
                                        <th>Ref #</th>
                                        <th>Buyer</th>
                                        <th>Seller</th>
                                        <th>Price</th>
                                        <th>Fee</th>
                                        <th>Due date</th>
                                        <th>Status</th>
                                        <!-- <th style="width: 85px;">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $itr => $trans)
                                        <tr>
                                            <td>
                                                <img src="{{asset('assets/images/products/product-1.jpg')}}" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="{{ route( 'admin.transactions.action',$trans->id) }}" class="text-body">{{$trans->item}}</a>
                                                    <br>
                                                </p>
                                            </td>
                                            <td>
                                                {{$trans->reference_number}}
                                            </td>
                                            <td>
                                                {{$trans->buyer_name}}
                                            </td>
                                            <td>
                                                {{$trans->seller_name}}
                                            </td>
                                            <td>
                                                {{$trans->amount}}
                                            </td>
    
                                            <td>
                                                {{$trans->fee}}
                                            </td>
                                            <td>
                                                {{$trans->time}}
                                            </td>
                                            <td>
                                                @if ($trans->status)
                                                {{$trans->status}}
                                                {{-- <span class="badge bg-success">Active</span> --}}
                                                @endif
                                            </td>
                                        </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
