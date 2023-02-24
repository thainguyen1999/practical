@extends('layout.layout_default')
//
@section('content')
<div class="app-content content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Chỉnh sửa thông tin sinh viên</h1>
            </div>
        </div>
    </div>
    @if(session()->has('success'))
        <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
        {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('error'))
        <div class="txt pb-2 pt-2 ps-2 alert alert-danger h3">
        {{ session()->get('error') }}
        </div>
    @endif
    <script>
        setTimeout(()=> {
            $('.txt').addClass('d-none')
        },3000)
    </script>
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body p-0">
                <form action="{{$student_detail->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group mt-1 mb-1">
                                        <label for="inputName" class="form-label mb-1">Name:</label>
                                        <input type="text" id="name" name="name" value="{{$student_detail->name}}" class="form-control" placeholder="Nhập tên">
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="inputName" class="form-label mb-1">Age:</label>
                                        <input type="text" id="age" name="age" value="{{$student_detail->age}}" class="form-control" placeholder="Nhập tuổi">
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="inputName" class="form-label mb-1">Address:</label>
                                        <input type="text" id="address" name="address" value="{{$student_detail->address}}" class="form-control" placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="inputName" class="form-label mb-1">Phone:</label>
                                        <input type="number" id="telephone" name="telephone" value="{{$student_detail->telephone}}" class="form-control" placeholder="Nhập số điện thoại">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  ps-5 mb-2">
                            <a href="{{route('listStudents')}}" class="btn btn-secondary">Quay lại</a>
                            <input type="submit" value="Chỉnh sửa" class="btn btn-success float-right ms-2">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
