
@extends('layout.layout_default')
@section('content')

<div class="app-content content ">
   ///
    <div class="card">
                    <div class="card-body border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Danh sách</h4>
                        <a href="{{route('createStudents')}}"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                           Thêm mới
                        </button></a>
                    </div>
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-table table">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 1%; text-align: center;">
                                        Id
                                    </th>
                                    <th style="width: 10%">
                                        Name
                                    </th>
                                    <th style="width: 5%">
                                        Age
                                    </th>
                                    <th style="width: 15%">
                                        Address
                                    </th>
                                    <th style="width: 5%">
                                        Phone
                                    </th>
                                    <th style="width: 10%; text-align: right;" >
                                        Tác vụ
                                    </th>
                                </tr>
                                @foreach($students as $students)
                                <tr>
                                    <th style="text-align: center;">{{ $students->id }}</th>
                                    <th>{{ $students->name }}</th>
                                    <th>{{ $students->age }}</th>
                                    <th>
                                        {{ $students->address }}
                                    </th>
                                    <th>
                                        {{ $students->telephone }}
                                    </th>
                                    <th style="text-align: right;">
                                        <a href="{{route('Students.getUpdate',$students->id)}}" class="btn btn-info btn-sm">Sửa</a>
                                        <a type="button" class="btn btn-danger btn-sm  delete-record" data-bs-toggle="modal" data-bs-target="#deleteModal{{$students->id}}">Xóa</a>

                                    </th>
                                </tr>


                                <div class="modal fade" id="deleteModal{{$students->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header flex-column">
                                                <div class="icon-box">
                                                </div>
                                                <h4 class="modal-title w-100">Bạn có chắc không?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Bạn có thực sự muốn xóa? Quá trình này không thể được hoàn tác.</p>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Quay lại</button>
                                                <a href="{{route('Students.delete',[$students->id])}}"  type="button" class="btn btn-danger">Xóa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </thead>
                        </table>
                    </div>
                </div>

</div>
@endsection
