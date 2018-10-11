@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Account
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'userAccounts.store']) !!}

                        @include('user_accounts.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
