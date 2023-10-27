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
                            <th>Delete</th>
                            
                        </tr>
                    </thead>
                    @foreach ($adminSettings as $setting)                        
                        <tbody id="sortable">
                            <tr id="item-{{$setting->id}}">
                                <td>{{$setting->id}}</td>
                                <td class="sortable">{{$setting->settings_description}}</td>
                                <td>{{$setting->settings_value}}</td>
                                <td>{{$setting->settings_type}}</td>
                                <td><a href="#"><i class="fa fa-pencil-square"></i></a></td>
                                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
    {{-- <script type="text/javascript">
        $(function()){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
    </script> --}}
@endsection

@section('css')
    
@endsection

@section('js')
    
@endsection