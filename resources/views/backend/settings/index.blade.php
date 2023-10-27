@extends('backend.layout')

@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Settings</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Edit</th>
                            
                        </tr>
                    </thead>
                    @foreach ($adminSettings as $setting)                        
                        <tbody>
                            <tr>
                                <td>{{$setting->id}}</td>
                                <td>{{$setting->settings_description}}</td>
                                <td>{{$setting->settings_value}}</td>
                                <td>{{$setting->settings_type}}</td>
                                <td><i href="#" class="fa fa-trash-o"></i></td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection

@section('css')
    
@endsection

@section('js')
    
@endsection