<div class="app-title">
    <div>
        <h1><i class="fa fa-briefcase"></i> Sử dụng thuốc BVTV</h1>
        <p>Sử dụng thuốc BVTV</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="go?page=_main&subP=controlboard" style="color:black !important"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Nhật ký sản xuất</a></li>
        <li class="breadcrumb-item"><a href="go?page=_main&subP=kythuatcanhtac">Sử dụng thuốc BVTV</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3" id="navs">Thông tin vùng trồng</h3>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="vungtrong_nongho" name="vungtrong_nongho">
                                <option value="---">-- Chọn nông hộ --</option>
                                <?php
                                    foreach ($danhsach_nongho as $key) {
                                        echo '<option value="'.$key['MA_NONG_HO'].'">'.$key['TEN_NONG_HO'].'</option>';
                                    }
                                ?>
                            </select >
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="vungtrong_nongho" name="vungtrong_nongho">
                                <option value="---">-- Chọn vùng trồng --</option>
                                <?php
                                    foreach ($danhsach_vuntrong as $key) {
                                        echo '<option value="'.$key['ID_VUNG_TRONG'].'">'.$key['TEN_VUNG_TRONG'].' - '.$key['TEN_KHU_VUC'].' - '.$key['DIEN_TICH_DAT'].'</option>';
                                    }
                                ?>
                            </select >
                        </div>
                    </div>
                </div>
            </div>
            <div class="tile mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3">Thuốc BVTV</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Thời kỳ cây</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Loại sâu bệnh</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Liều lượng</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Thời điểm bón</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Loại thuốc</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Hiệu quả</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="bs-component" style="display: flex !important; justify-content: center !important;">
                                <button id="" name="" class="btn btn-primary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-check-circle"></i>LƯU THÔNG TIN</button>
                            </div>
                        </div>
                        <div id="list_thuocbvtv"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var source_listthuocbvtv;
    $(document).ready(function () {
        source_listthuocbvtv = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'},
                { name: 'KEY_CODE'},
                { name: 'LOAI_SAN_PHAM'},
                { name: 'TEN_KHU_VUC'},
                { name: 'TEN_KE_HOACH'},
                { name: 'NGAY_SAN_XUAT'},
                { name: 'MUA_VU'}
            ],
            url: 'go?for=load_list_thuocbvtv&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_listthuocbvtv);
        $("#list_thuocbvtv").jqxGrid({
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
                { text: 'ID', datafield: 'ID_VUNG_TRONG', width: 200, align: 'center', cellsalign: 'center'},
                { text: 'Mã đơn vị', datafield: 'MA_DON_VI', width: 200, align: 'center', cellsalign: 'center'},
                { text: 'Mã nông hộ', datafield: 'MA_NONG_HO', width: 200, align: 'center', cellsalign: 'center'},
                { text: 'Tên đơn vị', datafield: 'TENDONVI', width: 200, align: 'center', cellsalign: 'left'},
                { text: 'Tên nông hộ', datafield: 'TEN_NONG_HO', width: 200, align: 'center', cellsalign: 'left'},
                { text: 'Tên vùng trồng', datafield: 'TEN_VUNG_TRONG', width: 200, align: 'center', cellsalign: 'left',
                    aggregates: [{'<b>Tổng</b>':
                        function (aggregatedValue, currentValue, column, record) {
                            return aggregatedValue + 1;
                        }
                    }]
                },
                { text: 'CODE', datafield: 'KEY_CODE', width: 200, align: 'center', cellsalign: 'center'},
                { text: 'Loại sản phẩm', datafield: 'LOAI_SAN_PHAM', width: 200, align: 'center', cellsalign: 'center'},
                { text: 'Tên sản phẩm', datafield: 'TEN_LOAI_SP', width: 200, align: 'center', cellsalign: 'center'},
                { text: 'Khu vực', datafield: 'TEN_KHU_VUC', width: 200, align: 'center', cellsalign: 'center'}
            ]
        });
        $('#list_thuocbvtv').on('rowclick', function (event) {
            var args = event.args;
            var rowBoundIndex = args.rowindex;
            var selectedRowData_dsphanbon = $('#list_thuocbvtv').jqxGrid('getrowdata', rowBoundIndex);
        });
        $("#thuocbvtv_xemdanhsach").click(function(){
            load_ds_thuocbvtv();
        });
    });
    function load_ds_thuocbvtv(){
        var url_dsthuocbvtv = "go?for=load_list_thuocbvtv&madonvi=" + 99999 + "&manongho=" + 99999;
        source_listthuocbvtv.url = url_dsthuocbvtv;
        $("#list_thuocbvtv").jqxGrid('updatebounddata');
    }
</script>