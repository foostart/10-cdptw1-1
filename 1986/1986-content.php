<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1986">
    <div class="container">
        <div class="row product-sort-by">
            <div class="product-sort-by-1">
                <h3>Sắp xếp<span class="end-sort-by">X</span></h3>
            </div>
            <div class="product-sort-by-2">
                <a> ĐẶC SẮC<span class="check-1"></span></a>
            </div>
            <div class="product-sort-by-3">
                <a> GẦN ĐÂY NHẤT<span class="check-2"></span></a>
            </div>
        </div>
        <div class="sort">
            <span>Sắp xếp theo</span>
            <select>
                <option>Đặc sắc</option>
                <option>Gần đây nhất</option>
            </select>
            <div class="results">
                <p>10 trong 20 Kết quả</p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-sm-3">
                <div class="product">
                    <a href="#" class="clear">Xóa hết bộ lọc</a>
                    <div class="row product-filter">
                        <h3>Đặc sắc<span class="end-filter">X</span></h3>
                    </div>
                    <div class="product-1">
                        <h3>LOẠI SẢN PHẨM</h3>
                        <select>
                            <option>Thiết bị điện tử</option>
                            <option>Thiết bị điện tử</option>
                            <option>Thiết bị điện tử</option>
                            <option>Thiết bị điện tử</option>
                            <option>Thiết bị điện tử</option>
                            <option>Thiết bị điện tử</option>
                            <option>Thiết bị điện tử</option>
                        </select>
                    </div>
                    <div class="product-2">
                        <h3>Loại sản phẩm<span class="plus-1">+</span><span class="minus-1">-</span></h3>
                        <div class="contact-1">
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                        </div>
                    </div>
                    <div class="product-2">
                        <h3>Loại sản phẩm<span class="plus-2">+</span><span class="minus-2">-</span></h3>
                        <div class="contact-2">
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                        </div>
                    </div>
                    <div class="product-2">
                        <h3>Loại sản phẩm<span class="plus-3">+</span><span class="minus-3">-</span></h3>
                        <div class="contact-3">
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                        </div>
                    </div>
                    <div class="product-2">
                        <h3>Loại sản phẩm<span class="plus-4">+</span><span class="minus-4">-</span></h3>
                        <div class="contact-4">
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                            <label class="check">
                                <input type="checkbox" class="checkbox-hidden">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Thiết bị điện tử (10)</span>
                            </label>
                        </div>
                    </div>
                    <div class="product-3">
                        <h2>LIÊN KẾT NHANH</h2>
                        <h2 class="asco">Iphone XR - Apple</h2>
                    </div>
                    <div class="product-4">
                        <div class="product-apply">
                            <h3>ỨNG DỤNG</h3>
                        </div>
                        <div class="product-clear-all">
                            <h3>LÀM SẠCH TẤT CẢ</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="type">
                    <div class="type-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <a href="#"><img src="images/1.jpg" alt="" /></a>
                                        <span>NEW</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">
                                    <div class="featured-2">
                                        <h2>Iphone XR</h2>
                                        <p>iPhone XR sở hữu thiết kế nguyên khối sang trọng với 2 mặt kính kết hợp khung viền nhôm nổi bật được gia công chính xác và hoàn hảo đến từng chi tiết. Khung viền nhôm giúp bạn cầm nắm chắc chắn, thoải mái khi sử dụng đồng thời giúp bảo vệ thiết bị tối ưu với khả năng chống bụi, nước...</p>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"> <a href="#">Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <img src="images/1.jpg" alt="" />
                                        <span>NEW</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">
                                    <div class="featured-2">
                                        <h2>Iphone XR</h2>
                                        <p>iPhone XR sở hữu thiết kế nguyên khối sang trọng với 2 mặt kính kết hợp khung viền nhôm nổi bật được gia công chính xác và hoàn hảo đến từng chi tiết. Khung viền nhôm giúp bạn cầm nắm chắc chắn, thoải mái khi sử dụng đồng thời giúp bảo vệ thiết bị tối ưu với khả năng chống bụi, nước...</p>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"> <a href="#">Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <img src="images/1.jpg" alt="" />
                                        <span>NEW</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">
                                    <div class="featured-2">
                                        <h2>Iphone XR</h2>
                                        <p>iPhone XR sở hữu thiết kế nguyên khối sang trọng với 2 mặt kính kết hợp khung viền nhôm nổi bật được gia công chính xác và hoàn hảo đến từng chi tiết. Khung viền nhôm giúp bạn cầm nắm chắc chắn, thoải mái khi sử dụng đồng thời giúp bảo vệ thiết bị tối ưu với khả năng chống bụi, nước...</p>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"> <a href="#">Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <img src="images/1.jpg" alt="" />
                                        <span>NEW</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">
                                    <div class="featured-2">
                                        <h2>Iphone XR</h2>
                                        <p>iPhone XR sở hữu thiết kế nguyên khối sang trọng với 2 mặt kính kết hợp khung viền nhôm nổi bật được gia công chính xác và hoàn hảo đến từng chi tiết. Khung viền nhôm giúp bạn cầm nắm chắc chắn, thoải mái khi sử dụng đồng thời giúp bảo vệ thiết bị tối ưu với khả năng chống bụi, nước...</p>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"> <a href="#">Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <img src="images/1.jpg" alt="" />
                                        <span>NEW</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">
                                    <div class="featured-2">
                                        <h2>Iphone XR</h2>
                                        <p>iPhone XR sở hữu thiết kế nguyên khối sang trọng với 2 mặt kính kết hợp khung viền nhôm nổi bật được gia công chính xác và hoàn hảo đến từng chi tiết. Khung viền nhôm giúp bạn cầm nắm chắc chắn, thoải mái khi sử dụng đồng thời giúp bảo vệ thiết bị tối ưu với khả năng chống bụi, nước...</p>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"> <a href="#">Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="featured-1">
                                        <img src="images/1.jpg" alt="" />
                                        <span>NEW</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-9">

                                    <div class="featured-2">
                                        <h2>Iphone XR</h2>
                                        <p>iPhone XR sở hữu thiết kế nguyên khối sang trọng với 2 mặt kính kết hợp khung viền nhôm nổi bật được gia công chính xác và hoàn hảo đến từng chi tiết. Khung viền nhôm giúp bạn cầm nắm chắc chắn, thoải mái khi sử dụng đồng thời giúp bảo vệ thiết bị tối ưu với khả năng chống bụi, nước...</p>
                                    </div>

                                </div>
                                <div class="col-xs-3">
                                    <div class="featured-3">
                                        <div class="quick"><span>LIÊN KẾT NHANH</span></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"><a href="#">Brochure sản phẩm</a></div>
                                        <div class="quick"> <a href="#">Brochure sản phẩm</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-more">
                        <h3>CHO XEM NHIỀU HƠN</h3>
                    </div>
                    <div class="results">
                        <p>10 trong 20 Kết quả</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>