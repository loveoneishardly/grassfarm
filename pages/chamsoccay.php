<div class="app-title">
    <div>
        <h1><i class="fa fa-briefcase"></i> Chăm sóc cây</h1>
        <p>Chăm sóc cây</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="go?page=_main&subP=controlboard" style="color:black !important"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Nhật ký sản xuất</a></li>
        <li class="breadcrumb-item"><a href="go?page=_main&subP=kythuatcanhtac">Chăm sóc cây</a></li>
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
                            <h3 class="mb-3">Chăm sóc cây</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label">Tạo tán</label>
                            <select class="form-control" id="" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tỉa cành</label>
                            <select class="form-control" id="" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Loại cành cần loại bỏ</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kiểm soát chiều cao của tán cây</label>
                            <input id="" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <div class="bs-component" style="display: flex !important; justify-content: center !important;">
                                <button id="" name="" class="btn btn-primary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-check-circle"></i>LƯU THÔNG TIN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>