<div class="app-title">
    <div>
        <h1><i class="fa fa-tree"></i> Danh mục loại sản phẩm</h1>
        <p>Danh mục loại sản phẩm</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="go?page=_main&subP=controlboard" style="color:black !important"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Danh mục</a></li>
        <li class="breadcrumb-item"><a href="go?page=_main&subP=listuser">Danh mục loại sản phẩm</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title">Danh sách loại sản phẩm</h3>
                <p>
                    <button id="loaisp_xem" name="loaisp_xem" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg fa-play "></i>XEM DANH SÁCH</button>
                    <button id="loaisp_them" name="loaisp_them" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg fa-plus-circle"></i>THÊM</button>
                    <button id="loaisp_sua" name="loaisp_sua" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg fa-check-circle"></i>SỬA</button>
                </p>
            </div>
            <div id="list_loaisp"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var source_listloaisp;
    $(document).ready(function () {
        source_listloaisp = {
            datatype: "json",
            datafields: [
                { name: 'MA_LOAI_SP'},
                { name: 'TEN_LOAI_SP'},
                { name: 'TIME_CREATE'},
                { name: 'TIME_LOCK'},
                { name: 'GHI_CHU'},
                { name: 'TRANG_THAI'}
            ],
            url: 'go?for=load_list_loaisp&madonvi=1',
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_listloaisp);
        $("#list_loaisp").jqxGrid({
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
                { text: 'Mã loại sản phẩm', datafield: 'MA_LOAI_SP', width: 200, align: 'center', cellsalign: 'center'},
                { text: 'Tên loại sản phẩm', datafield: 'TEN_LOAI_SP', width: 300, align: 'center', cellsalign: 'left',
                    aggregates: [{'<b>Tổng</b>':
                        function (aggregatedValue, currentValue, column, record) {
                            return aggregatedValue + 1;
                        }
                    }]
                },
                { text: 'Thời gian tạo', datafield: 'TIME_CREATE', width: 200, align: 'center', cellsalign: 'center'},
                { text: 'Trạng thái', datafield: 'TRANG_THAI', width: 150, align: 'center', cellsalign: 'center'},
                { text: 'Ghi chú', datafield: 'GHI_CHU', width: 150, align: 'center', cellsalign: 'center'},
                { text: 'Thời gian khóa', datafield: 'TIME_LOCK', width: 200, align: 'center', cellsalign: 'center'}
            ]
        });
        $('#list_loaisp').on('rowclick', function (event) {
            var args = event.args;
            var rowBoundIndex = args.rowindex;
            var selectedRowData_dsvungtrong = $('#list_loaisp').jqxGrid('getrowdata', rowBoundIndex);
            // $("#idmavungtrong").val(selectedRowData_dsvungtrong.ID);
            // $("#madinhdanhvungtrong").val(selectedRowData_dsvungtrong.MAVUNGTRONG);
            // $("#loaisanphamtrong").val(selectedRowData_dsvungtrong.LOAISANPHAM);
            // $("#sodienthoai").val(selectedRowData_dsvungtrong.SODIENTHOAI);
        });
        $("#loaisp_xem").click(function(){
            var url_dsloaisp = "go?for=load_list_loaisp&madonvi=1";
            source_listloaisp.url = url_dsloaisp;
            $("#list_loaisp").jqxGrid('updatebounddata');
        });
    });
</script>