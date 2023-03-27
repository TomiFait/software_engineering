@extends('layouts.admin')
@section('content')
	<!-- Page Wrapper -->
   
			
        <div class="content container-fluid">

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
                            <h4 class="card-title">Deposit  -  {{ number_format(auth()->user()->balance) }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('deposit') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Enter Amount</label>
                                    <input type="text" name="amount" class="form-control" required>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Deposit</button>
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