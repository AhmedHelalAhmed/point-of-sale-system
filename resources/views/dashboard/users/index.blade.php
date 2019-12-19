@extends('layouts.dashboard.app')


@section('content')


    <div class="content-wrapper">

        <section class="content-header">


            <h1>@lang('site.users')</h1>


            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('dashboard.index') }}">
                        <i class="fa fa-dashboard"></i>@lang('site.dashboard')
                    </a>
                </li>
                <li class="active">@lang('site.users')</li>

            </ol>

        </section>


        <section class="content">


            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px">@lang('site.users')</h3>


                    <form action="">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="search"
                                       placeholder="@lang('site.search')">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-search"></i> @lang('site.search')</button>
                                <a class="btn btn-primary" href="{{ route('dashboard.users.create') }}"><i
                                            class="fa fa-plus"></i>@lang('site.add')</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box-body">

                    @if($users->count()>0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.first_name')</th>
                                <th>@lang('site.last_name')</th>
                                <th>@lang('site.email')</th>
                                <th>@lang('site.action')</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $index=>$user)

                                <tr>
                                    {{--    {{$index+1}}    --}}
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->first_name}}</td>

                                    <td>{{$user->last_name}}</td>

                                    <td>{{$user->email}}</td>

                                    <td>
                                        <a class="btn btn-sm btn-info"
                                           href="{{ route('dashboard.users.edit',$user->id) }}">@lang('site.edit')</a>
                                        <form
                                                action="{{ route('dashboard.users.destroy',$user->id) }}" method="post"
                                                style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button class="btn btn-sm btn-danger"
                                                    type="submit">@lang('site.delete')</button>
                                        </form>
                                    </td>


                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    @else
                        <h2>@lang('site.no_data_found')</h2>

                    @endif
                </div>
            </div>


        </section>

    </div>

@endsection

