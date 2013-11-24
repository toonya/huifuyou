<?php
// ----------------------------------------
// ! add a admin page to edit the banner
//   slide images
// ----------------------------------------

add_action( 'admin_menu', 'home_images' );

function home_images() {
    add_menu_page( '首页图片', '首页图片', 'manage_options', 'homeImageOptions', 'homeImagesPageBuilder', '', 99 );
}
function homeImagesPageBuilder() {

?>

<div id="banner-option">
    <h1>首页图片管理</h1>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#1" data-toggle="tab">1</a></li>
        <li><a href="#addnew" data-toggle="tab">+</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content container tab-container">
        <div class="tab-pane active" id="1">
            <div class="col-sm-11">
                <!-- input area for store data -->
                <div class="info">
                    <input type="text" class="form-control title" placeholder="输入标题" />
                    <input type="hidden" class="form-control url" />
                </div>
                <!-- control area -->
                <div class="row control">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-danger btn-block open-media">选择图片</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-primary btn-block save">保存</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-warning btn-block delete">删除本新闻</button>
                    </div>
                    <div class="preview col-sm-9"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="addnew">
        	<div class="col-sm-11">
                <!-- input area for store data -->
                <div class="info">
                    <input type="text" class="form-control title" placeholder="输入标题" />
                    <input type="hidden" class="form-control url" />
                </div>
                <!-- control area -->
                <div class="row control">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-danger btn-block open-media">选择图片</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-block add">保存新闻</button>
                    </div>
                    <div class="preview col-sm-9"></div>
                </div>
            </div>
		</div>
    </div>
</div>

<?php } ?>