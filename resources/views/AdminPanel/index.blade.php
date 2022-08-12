@extends('AdminPanel.layout.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                @include('AdminPanel.components.stats')

                <div class="row">
                    @include('AdminPanel.components.sales')

                    <section class="col-lg-5 connectedSortable">

                        @include('AdminPanel.components.visitors')
                        @include('AdminPanel.components.salesGraph')
                        @include('AdminPanel.components.calender')


                    </section>

                </div>
            </div>
        </section>
    </div>
@endsection
