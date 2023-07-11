<div>
    <div class="row">
        
        <div class="col-12">
            <div class="card shadow-none">
                <div class="card-body row">
                    <div class="col-6 m-auto">
                        <div class="mb-1 mt-2">
                            <input type="text" wire:model="form" id="example-palaceholder" class="form-control" placeholder="Live search">
                            <span class="help-block text-center"><small>Enter transaction ID or phone number to search for a better results.</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            
            <div wire:loading>Searching users...</div>
            @if ($form == "")
            @else
                @if($transactions->isEmpty())
                    {{-- <p>No data</p> --}}
                @else
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
                                            @if ($trans->status == 1)
                                                <span class="badge bg-success">Pendong</span>
                                            @endif
                                            @if ($trans->status == 2)
                                                <span class="badge bg-success">Pendong</span>
                                            @endif
                                        </td>
                                    </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>
