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
                            <li class="breadcrumb-item active">Search</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Transactions</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

        @livewire('admin.transactions.searchform')
    </div>
</x-admin-layout>
