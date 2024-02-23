<div class="app-title">
    <div>
        <h1><i class="fa fa-user-circle"></i> Danh sách nông hộ</h1>
        <p>Danh sách nông hộ</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="go?page=_main&subP=controlboard" style="color:black !important"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Danh mục</a></li>
        <li class="breadcrumb-item"><a href="go?page=_main&subP=listuser">Danh sách nông hộ</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="tile">
            <h3 class="tile-title line-head">Thông tin nông hộ</h3>
            <div class="tile-body">
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Đơn vị</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Số ĐT</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Họ tên</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Ngày sinh</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Tuổi</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Giới tính</label>
                        <div class="col-md-9">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gender">Nam
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gender">Nữ
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Địa chỉ</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">CMT/CCCD</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Ghi chú</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Hình ảnh</label>
                        <div class="col-md-8">
                            <input class="form-control" type="file">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tile-footer">
                    <div class="bs-component" style="margin-left:20px !important">
                        <button id="nongho_them" name="nongho_them" class="btn btn-primary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-plus-circle"></i>THÊM</button>
                        <button id="nongho_xoa" name="nongho_xoa" class="btn btn-info" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-check-circle"></i>CẬP NHẬT</button>
                        <button id="nongho_huy" name="nongho_huy" class="btn btn-secondary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-times"></i>HỦY</button>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title">Danh sách nông hộ</h3>
                <p><button id="nongho_xemdanhsach" name="nongho_xemdanhsach" class="btn btn-primary icon-btn" href="">XEM DANH SÁCH</button></p>
            </div>
            <div id="list_nongho"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var source_listnongho;
    $(document).ready(function () {
        source_listvungtrong = {
            datatype: "json",
            datafields: [
                { name: 'MA_NONG_HO'},
                { name: 'MA_DON_VI'},
                { name: 'TENDONVI'},
                { name: 'TEN_NONG_HO'},
                { name: 'SO_DIEN_THOAI'},
                { name: 'NGAY_SINH'},
                { name: 'TUOI'},
                { name: 'GIOI_TINH'},
                { name: 'SO_CCCD'},
                { name: 'DIA_CHI'},
                { name: 'GHI_CHU'},
                { name: 'ADMIN'},
                { name: 'TIME_CREATE'},
                { name: 'TRANGTHAI'},
                { name: 'TIME_LOCK'}
            ],
            url: 'go?for=load_list_nongho&madonvi=1',
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_listvungtrong);
        $("#list_nongho").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '602',
            source: dataAdapter,
            columnsresize: true,
            showfilterrow: true,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pageable: true,
            pagermode: 'simple',
            columns: [
                { text: 'Mã', datafield: 'MA_NONG_HO', width: 50, align: 'center', cellsalign: 'center'},
                { text: 'Mã đơn vị', datafield: 'MA_DON_VI', width: 100, align: 'center', cellsalign: 'center', hidden: true},
                { text: 'Tên đơn vị', datafield: 'TENDONVI', width: 200, align: 'center', cellsalign: 'left'},
                { text: 'Tên nông hộ', datafield: 'TEN_NONG_HO', width: 200, align: 'center', cellsalign: 'left',
                    aggregates: [{'<b>Tổng</b>':
                        function (aggregatedValue, currentValue, column, record) {
                            return aggregatedValue + 1;
                        }
                    }]
                },
                { text: 'Số điện thoại', datafield: 'SO_DIEN_THOAI', width: 150, align: 'center', cellsalign: 'center'},
                { text: 'Ngày sinh', datafield: 'NGAY_SINH', width: 100, align: 'center', cellsalign: 'center'},
                { text: 'Tuổi', datafield: 'TUOI', width: 60, align: 'center', cellsalign: 'center'},
                { text: 'Giới tính', datafield: 'GIOI_TINH', width: 80, align: 'center', cellsalign: 'center'},
                { text: 'Số CMT/CCCD', datafield: 'SO_CCCD', width: 120, align: 'center', cellsalign: 'left'},
                { text: 'Địa chỉ', datafield: 'DIA_CHI', width: 250, align: 'center', cellsalign: 'left'},
                { text: 'Ghi chú', datafield: 'GHI_CHU', width: 100, align: 'center', cellsalign: 'center'},
                { text: 'Quyền', datafield: 'ADMIN', width: 100, align: 'center', cellsalign: 'center'},
                { text: 'Thời gian tạo', datafield: 'TIME_CREATE', width: 150, align: 'center', cellsalign: 'center'},
                { text: 'Trạng thái', datafield: 'TRANGTHAI', width: 100, align: 'center', cellsalign: 'center'},
                { text: 'Thời gian khóa', datafield: 'TIME_LOCK', width: 150, align: 'center', cellsalign: 'center'}
            ]
        });
        $('#list_nongho').on('rowclick', function (event) {
            var args = event.args;
            var rowBoundIndex = args.rowindex;
            var selectedRowData_dsvungtrong = $('#list_nongho').jqxGrid('getrowdata', rowBoundIndex);
            // $("#idmavungtrong").val(selectedRowData_dsvungtrong.ID);
            // $("#madinhdanhvungtrong").val(selectedRowData_dsvungtrong.MAVUNGTRONG);
            // $("#loaisanphamtrong").val(selectedRowData_dsvungtrong.LOAISANPHAM);
            // $("#sodienthoai").val(selectedRowData_dsvungtrong.SODIENTHOAI);
        });
        $("#nongho_xemdanhsach").click(function(){
            var url_dsvungtrong = "go?for=load_list_nongho&madonvi=1";
            source_listvungtrong.url = url_dsvungtrong;
            $("#list_nongho").jqxGrid('updatebounddata');
        });
    });
</script>