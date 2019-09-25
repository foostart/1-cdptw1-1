<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-995">
    <div class="container banner-995">
        <div class="row">
            <div class="col-md-9">
                <div class="info-company">
                    <!--INFO COMPANY FOOTER-->
                    <p class="name"><span>Copyright © 2015 </span>CÔNG TY TNHH NÔNG NGHIỆP QUỐC TẾ FAU </p>
                    <p>[VP] : Số 71, Hà Huy Giáp, Khu Văn Hải, Long Thành, Đồng Nai</p>
                    <p>[NM]: Số 78/79, đường Huỳnh Mẫn Đạt, ấp Bình Hóa, xã Hóa An, Biên Hòa, Đồng Nai</p>
                    <p>[ĐT] : 0613 955 982.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[F] 0613 955 972</p>
                    <div>
                        <a class="fancybox.ajax viewmap" href="http://www.fau.com.vn/modules/contact/ajax/load_map2.php?id=1">Xem bản đồ</a>
                    </div>
                    <!--END INFO COMPANY FOOTER-->
                    <div class="info-footer">
                        <ul>
                            <!--INFO FOOTER-->
                            <li>Thiết kế web: <strong><a href="#" target="_blank">TRUST.vn</a> </strong></li>
                            <li><a href="#" target="_self">Điều khoản sử dụng</a></li>
                            <li class="current"><a href="#" target="_self">Liên hệ</a></li>
                            <!--END INFOR FOOTER-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 banner-r">
                <div class="user-traffic">
                    <ul class="box_statisticss">
                        <!--TRAFFIC-->
                        <li>Đang online : <b id="stats_online">4</b></li>
                        <li>Số lượt truy cập : <b id="stats_totals">156284</b></li>
                        <li>Thành viên : <b id="stats_member">0</b></li>
                        <!--END TRAFFIC-->
                    </ul>
                    <div class="social-footer">
                        <!--LINK SOCIAL-->
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="<?php echo $url_path ?>/images/type-12/facebook.png" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="<?php echo $url_path ?>/images/type-12/google.png" alt="Google">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="<?php echo $url_path ?>/images/type-12/youtube.png" alt="Youtube">
                                </a>
                            </li>
                        </ul>
                        <!--END LINK SOCIAL-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>