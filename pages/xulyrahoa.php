<div class="app-title">
    <div>
        <h1><i class="fa fa-briefcase"></i> Xử lý ra hoa</h1>
        <p>Xử lý ra hoa</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="go?page=_main&subP=controlboard" style="color:black !important"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Nhật ký sản xuất</a></li>
        <li class="breadcrumb-item"><a href="go?page=_main&subP=kythuatcanhtac">Xử lý ra hoa</a></li>
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
                            <h3 class="mb-3">Ra hoa tự nhiên</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Lý do</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Thời gian ra hoa</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Sử dụng phân bón</label>
                            <select class="form-control" id="" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Số lần ra hoa trong năm</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Thời gian ra hoa từng đợt</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Đơn vị tính liều lượng</label>
                            <select class="form-control" id="" name="">
                                <option value="1">kg/1000 m2</option>
                                <option value="2">kg/gốc</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div id="list_rahoa_tunhien_phanbon"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Quản lý nước</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Quản lý cỏ dại</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label">Phòng trừ sâu bệnh</label>
                        </div>
                        <div class="form-group">
                            <div id="list_rahoa_tunhien_phongsaubenh"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3">Áp dụng kỹ thuật xử lý ra hoa tập trung</h3>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Lý do</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Thời vụ XLRH</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Lý do chọn thời vụ này</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div id="list_rahoa_tunhien"></div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Biện pháp</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Tỉa cành</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Bón phân</label>
                            <select class="form-control" id="" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Cách làm</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Đơn vị tính liều lượng</label>
                            <select class="form-control" id="" name="">
                                <option value="1">kg/1000 m2</option>
                                <option value="2">kg/gốc</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div id="list_rahoa_taptrung_phanbon"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Quản lý nước</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kích thích ra đợt</label>
                            <select class="form-control" id="" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Thời điểm ra đọt</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Quản lý cỏ dại</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phương pháp kích thích ra đọt</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tỉ lệ ra đọt</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label">Số cơi đọt</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phòng trừ sâu bệnh</label>
                            <div id="list_rahoa_taptrung_saubenh"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3">Giai đoạn xử lý tạo mầm hoa</h3>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phương pháp xử lý tạo mầm hoa</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                          <div id="list_rahoa_xltaomamhoa"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tưới nước</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Bón phân</label>
                            <select class="form-control" id="" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Đơn vị tính liều lượng</label>
                            <select class="form-control" id="" name="">
                                <option value="1">kg/1000 m2</option>
                                <option value="2">kg/gốc</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                           <div id="list_rahoa_xltaomamhoa_bonphan"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3">Giai đoạn xử lý ra hoa</h3>
                        </div>
                        <div class="form-group">
                            <div id="list_rahoa_xlrahoa"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label">Tưới nước</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Bón phân</label>
                            <select class="form-control" id="" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Đơn vị tính liều lượng</label>
                            <select class="form-control" id="" name="">
                                <option value="1">kg/1000 m2</option>
                                <option value="2">kg/gốc</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div id="list_rahoa_xlrahoa_bonphan"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3">Giai đoạn đậu trái</h3>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Biện pháp tăng đậu trái</label>
                            <select class="form-control" id="" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                        <div class="form-group">
                            <div id="list_dautrai_bienphap"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Tưới nước</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Biện pháp hạn chế rụng trái non</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Bón phân</label>
                            <select class="form-control" id="" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Thời điểm rụng trái non</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tỷ lệ rụng</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Đơn vị tính liều lượng</label>
                            <select class="form-control" id="" name="">
                                <option value="1">kg/1000 m2</option>
                                <option value="2">kg/gốc</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div id="list_dautrai_bonphan"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label">Phòng trừ sâu hại</label>
                        </div>
                        <div class="form-group">
                            <div id="list_rahoa_phongsaubenh"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3">Giai đoạn phát triển trái</h3>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tưới nước</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Bón phân</label>
                            <select class="form-control" id="" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Đơn vị tính liều lượng</label>
                            <select class="form-control" id="" name="">
                                <option value="1">kg/1000 m2</option>
                                <option value="2">kg/gốc</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div id="list_phattrientrai_bonphan"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label">Phòng trừ sâu bệnh</label>
                        </div>
                        <div class="form-group">
                            <div id="list_phattrientrai_saubenh"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="bs-component" style="display: flex !important; justify-content: center !important;">
                                <button id="vungtrong_luuthongtin" name="vungtrong_luuthongtin" class="btn btn-primary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-check-circle"></i>LƯU THÔNG TIN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var wHeight = $(window).height();
    var wWidht = $(window).width();
    var w_gird_phan = (wWidht/1.29)/4;
    var w_gird_thuoc = (wWidht/1.29)/5;
    var source_list_rahoa_tunhien_phanbon;
    var source_list_rahoa_tunhien_saubenh;
    var source_list_rahoa_taptrung_phanbon;
    var source_list_rahoa_taptrung_saubenh;
    var source_list_taomam_phanbon;
    var source_list_taomam_saubenh;
    var source_list_xuly_rahoa_phanbon;
    var source_list_xuly_rahoa_saubenh;
    var source_list_dautrai_bienphap;
    var source_list_dautrai_phanbon;
    var source_list_dautrai_saubenh;
    var source_list_phattrien_phanbon;
    var source_list_phattrien_saubenh;
    $(document).ready(function () {
        source_list_rahoa_tunhien_phanbon = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'}
            ],
            url: 'go?for=load_rahoa_tunhien_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_rahoa_tunhien_phanbon);
        $("#list_rahoa_tunhien_phanbon").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Thời điểm bón', datafield: 'ID_VUNG_TRONG', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Loại phân', datafield: 'MA_DON_VI', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'MA_NONG_HO', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Cách bón', datafield: 'TENDONVI', width: w_gird_phan, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_rahoa_tunhien_saubenh = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'},
                { name: 'TEN_VUNG_TRONG1'}
            ],
            url: 'go?for=load_rahoa_tunhien_phongsau&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_rahoa_tunhien_saubenh);
        $("#list_rahoa_tunhien_phongsaubenh").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Thời điểm', datafield: 'ID_VUNG_TRONG', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Loại sâu bệnh', datafield: 'MA_DON_VI', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Loại thuốc', datafield: 'MA_NONG_HO', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'TENDONVI', width: w_gird_thuoc, align: 'center', cellsalign: 'left'},
                { text: 'Hiệu quả', datafield: 'TENDONVI1', width: w_gird_thuoc, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_rahoa_taptrung_phanbon = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_rahoa_taptrung_phanbon);
        $("#list_rahoa_taptrung_phanbon").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Thời điểm bón', datafield: 'ID_VUNG_TRONG', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Loại phân', datafield: 'MA_DON_VI', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'MA_NONG_HO', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Cách bón', datafield: 'TENDONVI', width: w_gird_phan, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_rahoa_taptrung_saubenh = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'},
                { name: 'TEN_VUNG_TRONG1'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_rahoa_taptrung_saubenh);
        $("#list_rahoa_taptrung_saubenh").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Thời điểm', datafield: 'ID_VUNG_TRONG', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Loại sâu bệnh', datafield: 'MA_DON_VI', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Loại thuốc', datafield: 'MA_NONG_HO', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'TENDONVI', width: w_gird_thuoc, align: 'center', cellsalign: 'left'},
                { text: 'Hiệu quả', datafield: 'TENDONVI1', width: w_gird_thuoc, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_taomam_saubenh = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'},
                { name: 'TEN_VUNG_TRONG1'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_taomam_saubenh);
        $("#list_rahoa_xltaomamhoa").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Chất sử dụng', datafield: 'ID_VUNG_TRONG', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Thời điểm', datafield: 'MA_DON_VI', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'MA_NONG_HO', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Cách dùng', datafield: 'TENDONVI', width: w_gird_thuoc, align: 'center', cellsalign: 'left'},
                { text: 'Kết quả', datafield: 'TENDONVI1', width: w_gird_thuoc, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_taomam_phanbon = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_taomam_phanbon);
        $("#list_rahoa_xltaomamhoa_bonphan").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Loại phân', datafield: 'ID_VUNG_TRONG', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Thời điểm', datafield: 'MA_DON_VI', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'MA_NONG_HO', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Cách bón', datafield: 'TENDONVI', width: w_gird_phan, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_xuly_rahoa_saubenh = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'},
                { name: 'TEN_VUNG_TRONG1'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_xuly_rahoa_saubenh);
        $("#list_rahoa_xlrahoa").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Chất sử dụng', datafield: 'ID_VUNG_TRONG', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Thời điểm', datafield: 'MA_DON_VI', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'MA_NONG_HO', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Cách dùng', datafield: 'TENDONVI', width: w_gird_thuoc, align: 'center', cellsalign: 'left'},
                { text: 'Kết quả', datafield: 'TENDONVI1', width: w_gird_thuoc, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_xuly_rahoa_phanbon = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_xuly_rahoa_phanbon);
        $("#list_rahoa_xlrahoa_bonphan").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Loại phân', datafield: 'ID_VUNG_TRONG', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Thời điểm', datafield: 'MA_DON_VI', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'MA_NONG_HO', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Cách bón', datafield: 'TENDONVI', width: w_gird_phan, align: 'center', cellsalign: 'left'}
            ]
        });



        source_list_dautrai_bienphap = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_dautrai_bienphap);
        $("#list_dautrai_bienphap").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Biện pháp', datafield: 'ID_VUNG_TRONG', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Nồng độ', datafield: 'MA_DON_VI', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Thời điểm', datafield: 'MA_NONG_HO', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Cách làm', datafield: 'TENDONVI', width: w_gird_phan, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_dautrai_phanbon = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_dautrai_phanbon);
        $("#list_dautrai_bonphan").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Loại phân', datafield: 'ID_VUNG_TRONG', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Thời điểm', datafield: 'MA_DON_VI', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'MA_NONG_HO', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Cách bón', datafield: 'TENDONVI', width: w_gird_phan, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_dautrai_saubenh = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'},
                { name: 'TEN_VUNG_TRONG1'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_dautrai_saubenh);
        $("#list_rahoa_phongsaubenh").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Loại sâu bệnh', datafield: 'ID_VUNG_TRONG', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Thời điểm', datafield: 'MA_DON_VI', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Loại thuốc', datafield: 'MA_NONG_HO', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'TENDONVI', width: w_gird_thuoc, align: 'center', cellsalign: 'left'},
                { text: 'Kết quả', datafield: 'TENDONVI1', width: w_gird_thuoc, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_phattrien_phanbon = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_phattrien_phanbon);
        $("#list_phattrientrai_bonphan").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Loại phân', datafield: 'ID_VUNG_TRONG', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Thời điểm', datafield: 'MA_DON_VI', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'MA_NONG_HO', width: w_gird_phan, align: 'center', cellsalign: 'center'},
                { text: 'Cách bón', datafield: 'TENDONVI', width: w_gird_phan, align: 'center', cellsalign: 'left'}
            ]
        });
        source_list_phattrien_saubenh = {
            datatype: "json",
            datafields: [
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'MA_NONG_HO'},
                { name: 'TEN_VUNG_TRONG'},
                { name: 'TEN_VUNG_TRONG1'}
            ],
            url: 'go?for=load_rahoa_taptrung_phanbon&madonvi=' + 99999 + '&manongho=' + 99999,
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_list_phattrien_saubenh);
        $("#list_phattrientrai_saubenh").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '250',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'Loại sâu bệnh', datafield: 'ID_VUNG_TRONG', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Thời điểm', datafield: 'MA_DON_VI', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Loại thuốc', datafield: 'MA_NONG_HO', width: w_gird_thuoc, align: 'center', cellsalign: 'center'},
                { text: 'Liều lượng', datafield: 'TENDONVI', width: w_gird_thuoc, align: 'center', cellsalign: 'left'},
                { text: 'Kết quả', datafield: 'TENDONVI1', width: w_gird_thuoc, align: 'center', cellsalign: 'left'}
            ]
        });
    });
</script>