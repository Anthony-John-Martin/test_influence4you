@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>
                        <i class="fas fa-list mr-3"></i>
                            Influencers List
                        </span>
                        <a href="{{route('influencers.indexExport')}}" class="btn btn-primary">Export to pdf</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @include('components.influencers_list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
