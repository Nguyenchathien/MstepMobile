<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.custom.css">
	<link rel="stylesheet" type="text/css" href="css/sites.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body class="mobi-layout">
	<div class="wrapper">
		<div class="header"></div>
		<div class="mainer">
			<div class="container-fluid">

				<div data-type="schedule-site-modal" style="display: block;">
					<div id="schedule-site-info-container" data-type="schedule-site-info-container" class="site_modal_container modal-content modal-lg" style="position: relative; height: calc(100% - 100px);">
						<!-- <div class="menu-toggle-site">
							<div>
								<span class="me-bar"></span>
								<span class="me-bar"></span>
								<span class="me-bar"></span>
							</div>
						</div> -->
						<div id="schedule-wraper">
							<div data-role="page" id="pageone">
								<div id="schedule-date-left">
									<div class="modal-header" data-type="schedule-site-info">
										<h4 class="modal-title">Hien（&nbsp;）に情報を追加する</h4>
										<div class="tab-date-site">
											<span data-tab="tab-date" class="active">日程</span>
											<span data-tab="tab-site">現場</span>
										</div>
									</div>
									<div class="modal-body" data-type="schedule-site-date">
										<div class="tab-date-content">
											<ul class="list-site-info list-date">
												<?php
													for($i = 0; $i < 30; $i++){
														?>
														<li><span>6/<?= $i + 1 ?></span>
															<ul class="list-site-info list-site">
																<?php
																for($j = 0; $j < 15; $j++){
																	?>
																	<li><span>d<?=$i+1?>-site-<?= $j + 1 ?></span>
																		<ul class="list-site-info list-schedule">
																			<?php
																			for($z = 0; $z < 10; $z++){
																				?>
																				<li><span>s<?= $j + 1 ?>-schedule-<?= $z + 1 ?></span></li>
																				<?php
																			}
																			?>
																		</ul>
																	</li>
																	<?php
																}
																?>
															</ul>
														</li>
														<?php
													}
												?>
											</ul>
										</div>

										<div class="tab-site-content" style="display: none">
											<ul class="list-site-info list-site">
												<?php
												for($j = 0; $j < 30; $j++){
													?>
													<li><span>site-<?= $j + 1 ?></span>
														<ul class="list-site-info list-schedule">
															<?php
															for($z = 0; $z < 10; $z++){
																?>
																<li><span>schedule-<?= $z + 1 ?></span></li>
																<?php
															}
															?>
														</ul>
													</li>
													<?php
												}
												?>
											</ul>
										</div>
									</div>
								</div>
								<div id="schedule-worker-right">
									<div class="modal-body">
										<button type="button" data-type="cancel" class="close" data-dismiss="modal">×</button>
										<div class="modal-left-block">
											<div class="worker-block">
												<div class="modal-header">
													<h4 class="modal-title">スタッフを登録する</h4>
												</div>
												<div class="form-group">
													<label for="dataworker">グループ選択</label>
													<select class="form-control" id="dataworker" data-type="schedule-worker-group">
														<option value="1">小泉ｸﾞﾙｰﾌﾟ</option>
														<option value="2">清沢ｸﾞﾙｰﾌﾟ</option>
														<option value="3">ﾊｲｴｰｽ10</option>
														<option value="4">日暮</option>
														<option value="5">田中</option>
														<option value="6">SPC</option>
														<option value="7">SPCV</option>
													</select>
												</div>
												<div class="form-group" data-type="schedule-top-workers">
													<span>メンバー選択</span>
													<div class="checkbox check_all_mem">
														<label data-type="schedule-worker-all-label">
															<input type="checkbox" value="" data-type="schedule-worker-all" onclick="return false;">すべてメンバー選択
														</label>
													</div>
													<ul class="list-worker" data-type="schedule-workers" data-schedule-id="1455" data-time="20170613" style="">
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="1">
															<input type="checkbox" name="data_worker" value="1" data-type="schedule-worker-checkbox" onclick="return false;">小泉
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="2">
															<input type="checkbox" name="data_worker" value="2" data-type="schedule-worker-checkbox" onclick="return false;">矢代
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="3">
															<input type="checkbox" name="data_worker" value="3" data-type="schedule-worker-checkbox" onclick="return false;">橋本
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="4">
															<input type="checkbox" name="data_worker" value="4" data-type="schedule-worker-checkbox" onclick="return false;">横山
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="5">
															<input type="checkbox" name="data_worker" value="5" data-type="schedule-worker-checkbox" onclick="return false;">国分
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="6">
															<input type="checkbox" name="data_worker" value="6" data-type="schedule-worker-checkbox" onclick="return false;">石川
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="7">
															<input type="checkbox" name="data_worker" value="7" data-type="schedule-worker-checkbox" onclick="return false;">寺下
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="8">
															<input type="checkbox" name="data_worker" value="8" data-type="schedule-worker-checkbox" onclick="return false;">益田
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="9">
															<input type="checkbox" name="data_worker" value="9" data-type="schedule-worker-checkbox" onclick="return false;">羽毛田
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="12">
															<input type="checkbox" name="data_worker" value="12" data-type="schedule-worker-checkbox" onclick="return false;">菱沼
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="14">
															<input type="checkbox" name="data_worker" value="14" data-type="schedule-worker-checkbox" onclick="return false;">明神
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="15">
															<input type="checkbox" name="data_worker" value="15" data-type="schedule-worker-checkbox" onclick="return false;">田邊
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="17">
															<input type="checkbox" name="data_worker" value="17" data-type="schedule-worker-checkbox" onclick="return false;">谷口
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="18">
															<input type="checkbox" name="data_worker" value="18" data-type="schedule-worker-checkbox" onclick="return false;">雨塚
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="19">
															<input type="checkbox" name="data_worker" value="19" data-type="schedule-worker-checkbox" onclick="return false;">庄
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="21">
															<input type="checkbox" name="data_worker" value="21" data-type="schedule-worker-checkbox" onclick="return false;">長口
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="22">
															<input type="checkbox" name="data_worker" value="22" data-type="schedule-worker-checkbox" onclick="return false;">片桐
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="23">
															<input type="checkbox" name="data_worker" value="23" data-type="schedule-worker-checkbox" onclick="return false;">庄
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="25">
															<input type="checkbox" name="data_worker" value="25" data-type="schedule-worker-checkbox" onclick="return false;">NGUYEN
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="26">
															<input type="checkbox" name="data_worker" value="26" data-type="schedule-worker-checkbox" onclick="return false;">嘉屋
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="27">
															<input type="checkbox" name="data_worker" value="27" data-type="schedule-worker-checkbox" onclick="return false;">林
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="28">
															<input type="checkbox" name="data_worker" value="28" data-type="schedule-worker-checkbox" onclick="return false;">NGUYEN
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="29">
															<input type="checkbox" name="data_worker" value="29" data-type="schedule-worker-checkbox" onclick="return false;">PHAM
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="31">
															<input type="checkbox" name="data_worker" value="31" data-type="schedule-worker-checkbox" onclick="return false;">福田
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="32">
															<input type="checkbox" name="data_worker" value="32" data-type="schedule-worker-checkbox" onclick="return false;">渋谷
														</li>
														<li data-type="schedule-add-worker" style="" data-group-id="1" data-worker-id="33">
															<input type="checkbox" name="data_worker" value="33" data-type="schedule-worker-checkbox" onclick="return false;">臼井
														</li>
														<li data-type="schedule-add-worker" style="display:none;" data-group-id="2" data-worker-id="10">
															<input type="checkbox" name="data_worker" value="10" data-type="schedule-worker-checkbox" onclick="return false;">根谷
														</li>
														<li data-type="schedule-add-worker" style="display:none;" data-group-id="2" data-worker-id="11">
															<input type="checkbox" name="data_worker" value="11" data-type="schedule-worker-checkbox" onclick="return false;">與儀
														</li>
														<li data-type="schedule-add-worker" style="display:none;" data-group-id="2" data-worker-id="13">
															<input type="checkbox" name="data_worker" value="13" data-type="schedule-worker-checkbox" onclick="return false;">清沢
														</li>
														<li data-type="schedule-add-worker" style="display:none;" data-group-id="2" data-worker-id="35">
															<input type="checkbox" name="data_worker" value="35" data-type="schedule-worker-checkbox" onclick="return false;">hung
														</li>
														<li data-type="schedule-add-worker" style="display:none;" data-group-id="6" data-worker-id="16">
															<input type="checkbox" name="data_worker" value="16" data-type="schedule-worker-checkbox" onclick="return false;">中津川
														</li>
														<li data-type="schedule-add-worker" style="display:none;" data-group-id="6" data-worker-id="20">
															<input type="checkbox" name="data_worker" value="20" data-type="schedule-worker-checkbox" onclick="return false;">小俣
														</li>
														<li data-type="schedule-add-worker" style="display:none;" data-group-id="6" data-worker-id="24">
															<input type="checkbox" name="data_worker" value="24" data-type="schedule-worker-checkbox" onclick="return false;">MAI
														</li>
														<li data-type="schedule-add-worker" style="display:none;" data-group-id="6" data-worker-id="30">
															<input type="checkbox" name="data_worker" value="30" data-type="schedule-worker-checkbox" onclick="return false;">寺下
														</li>
														<li data-type="schedule-add-worker" style="display:none;" data-group-id="7" data-worker-id="34">
															<input type="checkbox" name="data_worker" value="34" data-type="schedule-worker-checkbox" onclick="return false;">臼井
														</li>
													</ul>
												</div>
											</div>
											<div class="modal-header">
												<h4 class="modal-title">選択済み作業員<span class="pull-right">責任者</span></h4>
											</div>
											<div class="registed-workers-block" data-type="registed-workers-block"></div>
										</div>
										<div class="modal-right-block">
											<div class="struck-block">
												<div class="form-group" data-type="schedule-top-trucks">
													<div class="modal-header">
														<h4 id="level-close" class="modal-title">配車選択</h4>
													</div><!--/.modal-header-->
													<!-- UL TRUCK -->
													<div class="checkbox check_all_struck">
														<label data-type="schedule-truck-all-label"><input type="checkbox" value="" data-type="schedule-truck-all" onclick="return false;">すべて配車選択</label>
													</div>
													<ul class="list-truck" id="list-car" data-type="schedule-trucks" data-schedule-id="1455" data-time="20170613" style="">
														<li data-type="schedule-add-truck" data-truck-id="1">
															<input type="checkbox" name="data_worker" value="1" data-type="schedule-truck-checkbox" onclick="return false;">ハイエース1
														</li>
														<li data-type="schedule-add-truck" data-truck-id="2">
															<input type="checkbox" name="data_worker" value="2" data-type="schedule-truck-checkbox" onclick="return false;">ハイエース2
														</li>
														<li data-type="schedule-add-truck" data-truck-id="3">
															<input type="checkbox" name="data_worker" value="3" data-type="schedule-truck-checkbox" onclick="return false;">ハイゼット
														</li>
														<li data-type="schedule-add-truck" data-truck-id="4">
															<input type="checkbox" name="data_worker" value="4" data-type="schedule-truck-checkbox" onclick="return false;">DZ
														</li>
														<li data-type="schedule-add-truck" data-truck-id="5">
															<input type="checkbox" name="data_worker" value="5" data-type="schedule-truck-checkbox" onclick="return false;">ハイエース
														</li>
														<li data-type="schedule-add-truck" data-truck-id="6">
															<input type="checkbox" name="data_worker" value="6" data-type="schedule-truck-checkbox" onclick="return false;">TZ
														</li>
														<li data-type="schedule-add-truck" data-truck-id="7">
															<input type="checkbox" name="data_worker" value="7" data-type="schedule-truck-checkbox" onclick="return false;">石川車
														</li>
														<li data-type="schedule-add-truck" data-truck-id="8">
															<input type="checkbox" name="data_worker" value="8" data-type="schedule-truck-checkbox" onclick="return false;">BTZ
														</li>
														<li data-type="schedule-add-truck" data-truck-id="9">
															<input type="checkbox" name="data_worker" value="9" data-type="schedule-truck-checkbox" onclick="return false;">珪藻土カー
														</li>
														<li data-type="schedule-add-truck" data-truck-id="10">
															<input type="checkbox" name="data_worker" value="10" data-type="schedule-truck-checkbox" onclick="return false;">11(84)
														</li>
														<li data-type="schedule-add-truck" data-truck-id="11">
															<input type="checkbox" name="data_worker" value="11" data-type="schedule-truck-checkbox" onclick="return false;">65
														</li>
													</ul>
												</div>
											</div>
											<div class="level-block">
												<div class="form-group" data-type="schedule-top-colors">
													<div class="modal-header">
														<h4 class="modal-title">ラベルを登録する</h4>
													</div>
													<ul id="list-level" data-type="data-color-list" data-schedule-id="1455" data-time="1497279600000" style="">
														<li data-type="schedule-bg-color" style="background-color:#abd1e8;" data-color="#abd1e8" data-color-id="1"></li>
														<li data-type="schedule-bg-color" style="background-color:#9edbd6;" data-color="#9edbd6" data-color-id="2"></li>
														<li data-type="schedule-bg-color" style="background-color:#a6e1b1;" data-color="#a6e1b1" data-color-id="3" class="active"></li>
														<li data-type="schedule-bg-color" style="background-color:#dae388;" data-color="#dae388" data-color-id="4"></li>
														<li data-type="schedule-bg-color" style="background-color:#eadb80;" data-color="#eadb80" data-color-id="5"></li>
														<li data-type="schedule-bg-color" style="background-color:#ebca87;" data-color="#ebca87" data-color-id="6"></li>
														<li data-type="schedule-bg-color" style="background-color:#eeaf90;" data-color="#eeaf90" data-color-id="7"></li>
														<li data-type="schedule-bg-color" style="background-color:#e89e9f;" data-color="#e89e9f" data-color-id="8"></li>
														<li data-type="schedule-bg-color" style="background-color:#ecbfc6;" data-color="#ecbfc6" data-color-id="9"></li>
														<li data-type="schedule-bg-color" style="background-color:#cecece;" data-color="#cecece" data-color-id="10"></li>
														<li data-type="schedule-bg-color" style="background-color:#e9b3d7;" data-color="#e9b3d7" data-color-id="11"></li>
														<li data-type="schedule-bg-color" style="background-color:#d4acea;" data-color="#d4acea" data-color-id="12"></li>
														<li data-type="schedule-bg-color" style="background-color:#b2acea;" data-color="#b2acea" data-color-id="13"></li>
														<li data-type="schedule-bg-color" style="background-color:#acc6e9;" data-color="#acc6e9" data-color-id="14"></li>
														<li data-type="schedule-bg-color" style="background-color:#8ebdcd;" data-color="#8ebdcd" data-color-id="15"></li>
														<li data-type="schedule-bg-color" style="background-color:#b77f80;" data-color="#b77f80" data-color-id="16"></li>
														<li data-type="schedule-bg-color" style="background-color:#8094b7;" data-color="#8094b7" data-color-id="17"></li>
														<li data-type="schedule-bg-color" style="background-color:#90b07f;" data-color="#90b07f" data-color-id="18"></li>
														<li data-type="schedule-bg-color" style="background-color:#b99e80;" data-color="#b99e80" data-color-id="19"></li>
														<li data-type="schedule-bg-color" style="background-color:#a8a8a8;" data-color="#a8a8a8" data-color-id="20"></li>
														<li data-type="schedule-bg-color" style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204);" data-color="#ffffff" data-color-id="21">
															<span data-type="schedule-bg-color-white" style="font-size: 15px; line-height: 3; transform: scale(0.5);">なし</span>
														</li>
														<input type="hidden" name="color_id" value="3">
													</ul>
												</div>
											</div>
											<div class="note-block">
												<div class="form-group" data-type="schedule-top-remarks">
													<div class="modal-header">
														<h4 class="modal-title">備考を登録する</h4>
													</div>
													<div class="item-memo" data-schedule-id="1455" data-type="schedule-remarks" style="">
														<p>備考1<br><span>※表示を変更できます</span></p>
														<textarea class="form-control" rows="2"></textarea>
													</div>
													<div class="item-memo" data-schedule-id="1455" data-type="schedule-remarks" style="">
														<p>備考2<br><span>※表示を変更できます</span></p>
														<textarea class="form-control" rows="2"></textarea>
													</div>
													<div class="item-memo" data-schedule-id="1455" data-type="schedule-remarks" style="">
														<p>備考3<br><span>※表示を変更できます</span></p>
														<textarea class="form-control" rows="2"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer text-right">
										<button type="button" class="btn btn-default" data-type="cancel" data-dismiss="modal">閉じる</button>
										<button type="button" class="btn btn-danger" data-type="site-regist-info-btn">追加する</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer"></div>
	</div>
</body>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		var main_height = 0;
		function setHeightList(){
			var __height = $(window).height()-300;//$('#schedule-worker-right').height() - $('.modal-header').outerHeight() - 400;
			var lisDate = ($('.list-site-info .list-site').height() > $('.list-date').height())?$('.list-date').height():'auto';

			$('.list-date').css('height', __height);
			$('.list-date').css('overflow', 'auto');
			$('.tab-site-content .list-site').css('height', __height);
			$('.list-site-info .list-site').css('height',lisDate );
			$('.list-site-info .list-site').css('overflow', 'auto');
			$('#schedule-site-info-container').height($(window).height() - 100);
		}
		setHeightList();
		$(window).resize(function(event) {
			setHeightList();
		});

		var openMe = false;
		function toggleMenu(){
			$('.menu-toggle-site').on('click', function(event) {
				switch(openMe){
					case false:
						$('#schedule-date-left').css('left', '0');
						$(this).addClass('open-toggle');
						openMe = true;
						break;
					case true:
						$('#schedule-date-left').css('left', '-500px');
						$(this).removeClass('open-toggle');
						openMe = false;
						break;
				}
			});
		}
		toggleMenu();

		function changeTabDateSite(){
			$('.tab-date-site').find('span').on('click', function(event) {
				var __tab = $(this).attr('data-tab');
				switch(__tab){
					case "tab-date":
						$('.tab-date-content').fadeIn();
						$('.tab-site-content').fadeOut();
						break;
					case "tab-site":
						$('.tab-date-content').fadeOut();
						$('.tab-site-content').fadeIn();
						break;
				}
				$('.tab-date-site span').removeClass('active');
				$(this).addClass('active');
			});
		}
		changeTabDateSite();

		function scrollDateSite(){
			// display submenu
			var __top = 0;
			$('.list-site-info li span').on('click', function(event) {
				var posY = $(this).parent().position().top + $(this).closest('.list-site-info').scrollTop();
				var subH = $(this).next().height();
				var list_height = 0;

				$(this).closest('.list-site-info').children('li').each(function(index, el) {
					list_height += $(this).outerHeight();
				});
				if(list_height < (posY + (subH / 2) + 70)){
					pos_second = posY;
					__top = parseInt(list_height) - parseInt(subH) - parseInt(posY);
					if(Math.abs(__top) > posY){
						__top = -posY;
						$(this).next().height($(this).closest('.list-site-info').height());
					}
					$(this).next().css('top', __top + 'px');
				}
				else if(list_height >= (posY + (subH/2) + 70)){
					if(posY > parseInt(subH / 2)){
						__top = -parseInt(subH / 2);
					}
					else{
						__top = -posY;
					}
					$(this).next().css('top', __top + 'px');
				}

				$('#schedule-wraper').addClass('active').css('overflow', 'hidden');
				$(this).closest('.list-site-info').find('ul').css('display', 'none');
				$(this).closest('.list-site-info').find('li').removeClass('active');
				$(this).parent().addClass('active');
				$(this).next().css('display', 'block');
			});

			$(document).on("click", ".tab-date-content ul.list-schedule li span", function(event) {

				$('.tab-date-content ul.list-schedule li').removeClass('active');
				$(this).parent().addClass('active');
				$('.menu-toggle-site').removeClass('open-toggle');
				openMe = false;
				$('#schedule-worker-right').addClass('openwk');
				$('#schedule-date-left').addClass('closewk');
			});

			$(document).on("click", ".tab-site-content ul.list-schedule li span", function(event) {

				$('.tab-site-content ul.list-schedule li').removeClass('active');
				$(this).parent().addClass('active');
				$('.menu-toggle-site').removeClass('open-toggle');
				openMe = false;
				$('#schedule-worker-right').addClass('openwk');
				$('#schedule-date-left').addClass('closewk');
			});
		}
		scrollDateSite();
	});
	$(document).on("pagecreate", "#pageone", function(){
		$("#schedule-date-left").on("swipeleft", function(){

			$('#schedule-worker-right').removeClass('openwk');
			$('#schedule-date-left').removeClass('closewk');
			$('#schedule-wraper').addClass('active').css({
				'margin-left': '0',
				'transition': '1s',
				'overflow': 'auto'
			});
		});
		$("#schedule-worker-right").on("swiperight", function(){

			$('#schedule-worker-right').removeClass('openwk');
			$('#schedule-date-left').removeClass('closewk');
			$('#schedule-wraper').addClass('active').css({
				'margin-left': '0',
				'transition': '1s',
				'overflow': 'hidden'
			});
		});
		$('.tab-date-content').on("swiperight", function(){
			if($('#schedule-wraper').hasClass('active')){
				switch(true){
					case $('.list-site-info').width() >= Math.abs(parseInt($('.tab-date-content').css('margin-left'))):
						$('.tab-date-content').css('margin-left', '0');
						break;
					case $('.list-site-info').width() < Math.abs(parseInt($('.tab-date-content').css('margin-left'))):
						$('.tab-date-content').css('margin-left', '-100%');
						break;
				}
			}
		});
		$('.tab-site-content').on("swiperight", function(){
			if($('#schedule-wraper').hasClass('active')){
				$('.tab-site-content').css('margin-left', '0');
			}
		});
	});
</script>

</html>
