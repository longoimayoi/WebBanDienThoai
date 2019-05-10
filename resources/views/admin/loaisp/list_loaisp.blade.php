@extends('admin.layout.index')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List Loại SP</h3>
                    </div>
                    <b>Row Selection Event: </b><span id="select_row_display_div"></span>
                    <br><br>
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                @endif
                <!-- /.box-header -->

                    <div id="grid_array"></div>
                    <div id="pager2"></div>
                    <div title="Grid in Dialog" id="popup" style="overflow:hidden;">
                        <div id="grid_popup"></div>
                    </div>
                    <div>
                        <button type="button" id="open_popup">Open Popup</button>
                    </div>
                    <div id="grid_crud" style="margin:auto;"></div>
                    <div id="popup-dialog-crud" style="display:none;">
                        <form id="crud-form">
                            <table align="center">
                                <tbody><tr>
                                    <td>Company Name:</td>
                                    <td><input type="text" name="tenloai"></td>
                                </tr>
                                </tbody></table>
                        </form>
                    </div>
                   {{--         <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Tên Loại</th>
                                <th>Created_at</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($loaisp as $loai)
                                <tr>
                                    <td>{{$loai->TenLoai}}</td>
                                    <td>{{$loai->created_at}}</td>
                                    <td><a href="admin/loaisp/edit_loaisp/{{$loai->id}}">Edit</a></td>
                                    <td><a onclick="return confirm('Bạn có muốn xóa?')" href="admin/loaisp/delete_loaisp/{{$loai->id}}">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>

                            </tr>
                            </tfoot>
                        </table>--}}
                    </div>

                    <!-- /.box-body -->

                <!-- /.box -->

                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>

        <!-- /.row -->
    </section>
@endsection
@section('script')
    <script>
        $(function(){

          /*  $('#grid_array').pqGrid({
                url:'http://localhost:8888/AdminWebBanHang/public/api/v1/LoaiSP',
                method: "GET",
                datatype: "json",

                colModel:[
                    { title: 'Mã Loại', name: 'id', key: true, width: 75 ,dataType:"integer",dataIndx: "id"},
                    { title: 'Tên loại', name: 'TenLoai', width: 150,dataType:"string",dataIndx: "TenLoai" },
                    { title: 'Ngày lập', name: 'created_at', width: 150,dataType:"string" ,dataIndx: "created_at" }],
                loadonce: true,
                rowNum:10,
                caption:"",
                viewrecords: true,

            });*/


              var data = [   @foreach($loaisp as $loai)

                  [ 'Edit', {{$loai->id}},'{{$loai->TenLoai}}','{{$loai->created_at}}'],
                  @endforeach ];

              var obj = {width: 1000,
                  scrollModel: { autoFit: true },
                  height: 350,
                  showBottom: true,
                  resizable: true,
                  editable: false,
                  selectionModel: { type: 'row', fireSelectChange: true },
                  swipeModel: {on: false}};

              obj.colModel =[{title:" ",width:150},
                  {title:"Mã Loại", width:150, dataType:"integer",align:"center"/*,dataIndx: "id"*/},
                  {title:"Tên loại ", width:300, dataType:"string", align:"center"/*,dataIndx: "tenloai"*/},
                  {title:"Ngày lập ", width:400, dataType:"string", align:"center"/*,dataIndx: "created_at"*/}];
              obj.dataModel = {data:data};
            obj.pageModel={type:'local'};
                var grid= $("#grid_array").pqGrid(obj);
              grid.pqGrid("refreshView");
            $("button#open_popup").button().click(function (evt) {
                $("#popup")
                    .dialog({

                        height: 400,
                        width: 700,
                        modal: true,
                        open: function (evt, ui) {
                            var ob = {
                                width: "auto", //auto width
                                height: "100%-30", //height in %age
                                selectionModel: { type: 'cell' },
                                autoSizeInterval: 0,
                                scrollModel: { autoFit: true },
                                dragColumns: { enabled: false },

                            };
                            ob.colModel =[{title:" ",width:150},
                                {title:"Mã Loại", width:150, dataType:"integer",align:"center"/*,dataIndx: "id"*/},
                                {title:"Tên loại ", width:300, dataType:"string", align:"center"/*,dataIndx: "tenloai"*/},
                                {title:"Ngày lập ", width:400, dataType:"string", align:"center"/*,dataIndx: "created_at"*/}];
                            ob.dataModel = { data: data };
                            $("#grid_popup").pqGrid(ob);
                        },
                        close: function () {
                            $("#grid_popup").pqGrid('destroy');
                        },
                        show: {
                            effect: "blind",
                            duration: 500
                        }
                    });
            }).click();
        });

    </script>
@endsection