@extends('layouts.admin')
@section('content')
	<!-- Page Wrapper -->
   
			
        <div class="content container-fluid">

            {{-- <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Vertical Form</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Transfer</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header --> --}}

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                  @endif
                  @if (session('error'))
                  <div class="alert alert-danger" role="alert">
                      {{ session('error') }}
                  </div>
                @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transfer Fund  -  {{ number_format(auth()->user()->balance) }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('transfer') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Enter Account Number</label>
                                    <input type="text" name="account_number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Enter Amount</label>
                                    <input type="text" name="amount" class="form-control" required>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            
        </div>
  
    <!-- /Page Wrapper -->
@endsection