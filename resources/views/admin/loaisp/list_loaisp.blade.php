@extends('admin.layout.index')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List Loại SP</h3>
                    </div>
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                @endif
                <!-- /.box-header -->
                    <div class="box-body">
{{--
                        <div id="grid_pivot" style="margin: 5px auto; width: auto; height: 500px;" role="grid" class="pq-grid pq-theme ui-widget ui-widget-content ui-corner-all pq-disable-select">
                            <div class="pq-grid-top ui-widget-header ui-corner-top">
                                <div class="pq-grid-title ui-corner-top" style="display: none;">&nbsp;</div>
                                <div class="pq-toolbar-export pq-toolbar" style>
                                    <button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button">
                                        <span class="ui-button-icon-primary ui-icon ui-icon-document"></span>
                                        <span class="ui-button-text">Export to Excel(xlsx)</span>
                                    </button>
                                    <button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button">
                                        <span class="ui-button-icon-primary ui-icon ui-icon-wrench"></span>
                                        <span class="ui-button-text">Toolbar Panel</span>
                                    </button>
                                    <label>Filter: <input type="text" placeholder="Enter text"></label>

                            </div>
                                <div class="pq-slider-icon pq-no-capture">
                                    <span class="ui-widget-header pq-ui-button">
                                        <span class="ui-icon ui-icon-arrow-4-diag"></span>
                                    </span>
                                    <span class="ui-widget-header pq-ui-button">
                                        <span class="ui-icon ui-icon-circle-triangle-n"></span>
                                    </span></div>
                            </div>
                            <div class="pq-grid-center-o">
                                <div class="pq-tool-panel" style="display: none; height: 1px;"></div>
                                <div class="pq-grid-center" style="height: 464px;">
                                    <div class="pq-header-outer ui-widget-header" style="width: 939px; height: 57px;">
                                        <div class="pq-grid-cont">
                                            <div class="pq-cont-inner pq-cont-right">
                                                <div class="pq-grid-row " role="row" id="pq-head-row-u0-0-right" style="top: 0px; height: 28px; width: 100%;">
                                                    <div pq-col-indx="6" pq-row-indx="0" role="gridcell" id="pq-head-cell-u0-0-6-right" class="pq-grid-col  pq-collapsible-th" style="left: 217px; width: 78px; height: 28px;">
                                                        <div class="pq-td-div"><span class="pq-col-collapse pq-icon-hover ui-icon ui-icon-plus">

                                                            </span><span class="pq-title-span">2000</span><span class="pq-col-sort-icon"></span>
                                                            <span class="pq-col-sort-count"></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="pq-grid-row pq-grid-title-row" role="row" id="pq-head-row-u0-1-right" style="top:28px;height:28px;width:100%;">
                                                    <div pq-col-indx="6" pq-row-indx="1" role="gridcell" id="pq-head-cell-u0-1-6-right" class="pq-grid-col pq-align-right  pq-grid-col-leaf" style="left: 217px; width: 78px; height: 28px;">
                                                        <div class="pq-td-div"><span class="pq-title-span">sum(Total)</span>
                                                            <span class="pq-col-sort-icon">

                                                            </span><span class="pq-col-sort-count"></span>
                                                        </div>
                                                    </div>
                                                    <div pq-col-indx="10" pq-row-indx="1" role="gridcell" id="pq-head-cell-u0-1-10-right" class="pq-grid-col pq-align-right  pq-grid-col-leaf" style="left: 295px; width: 78px; height: 28px;">
                                                        <div class="pq-td-div"><span class="pq-title-span">sum(Total)</span>
                                                            <span class="pq-col-sort-icon">

                                                            </span><span class="pq-col-sort-count"></span>
                                                        </div>
                                                    </div>
                                                    <div pq-col-indx="14" pq-row-indx="1" role="gridcell" id="pq-head-cell-u0-1-14-right" class="pq-grid-col pq-align-right  pq-grid-col-leaf" style="left: 373px; width: 78px; height: 28px;"><div class="pq-td-div"><span class="pq-title-span">sum(Total)</span><span class="pq-col-sort-icon"></span><span class="pq-col-sort-count"></span></div></div><div pq-col-indx="18" pq-row-indx="1" role="gridcell" id="pq-head-cell-u0-1-18-right" class="pq-grid-col pq-align-right  pq-grid-col-leaf" style="left: 451px; width: 78px; height: 28px;"><div class="pq-td-div"><span class="pq-title-span">sum(Total)</span><span class="pq-col-sort-icon"></span><span class="pq-col-sort-count"></span></div></div><div pq-col-indx="22" pq-row-indx="1" role="gridcell" id="pq-head-cell-u0-1-22-right" class="pq-grid-col pq-align-right  pq-grid-col-leaf" style="left: 529px; width: 78px; height: 28px;"><div class="pq-td-div"><span class="pq-title-span">sum(Total)</span><span class="pq-col-sort-icon"></span><span class="pq-col-sort-count"></span></div></div><div pq-col-indx="26" pq-row-indx="1" role="gridcell" id="pq-head-cell-u0-1-26-right" class="pq-grid-col pq-align-right  pq-grid-col-leaf" style="left: 607px; width: 78px; height: 28px;"><div class="pq-td-div"><span class="pq-title-span">sum(Total)</span><span class="pq-col-sort-icon"></span><span class="pq-col-sort-count"></span></div></div><div pq-col-indx="30" pq-row-indx="1" role="gridcell" id="pq-head-cell-u0-1-30-right" class="pq-grid-col pq-align-right  pq-grid-col-leaf" style="left: 685px; width: 78px; height: 28px;"><div class="pq-td-div"><span class="pq-title-span">sum(Total)</span><span class="pq-col-sort-icon"></span><span class="pq-col-sort-count"></span></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
--}}

                            <table id="example2" class="table table-bordered table-hover">
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
                        </table>
                    </div>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>

        <!-- /.row -->
    </section>
@endsection