<?php
/* Smarty version 3.1.29, created on 2019-02-23 10:58:28
  from "C:\xampp\htdocs\BarcaTrain\reviews_header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c71194482e504_99271907',
  'file_dependency' => 
  array (
    '219741f0e571f77d0fa97ed05218d4fd2e9bd471' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain\\reviews_header.html',
      1 => 1550915907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c71194482e504_99271907 ($_smarty_tpl) {
echo '<?php
	';?>session_start();
<?php echo '?>';?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FC Barcelona Fan Site</title>
	<!-- dropdown button from w3s -->
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Site CSS -->
	<link href="mystyle.css" rel="stylesheet">

	<style>
		@media ( max-width: 585px ) {
		    .input-group span.input-group-btn,.input-group input,.input-group button{
		        display: block;
		        width: 100%;
		        border-radius: 0;
		        margin: 0;
		    }
		    .input-group {
		        position: relative;   
		    }
		    .input-group span.data-up{
		        position: absolute;
		        top: 0;
		    }
		    .input-group span.data-dwn{
		        position: absolute;
		        bottom: 0;
		    }
		    .form-control.text-center {
		        margin: 34px 0;
		    }
		    .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group{
		        margin-left:0;
		    }

		}



		/* Main carousel style ZA DRUGIQ KEROSEL
		
		Indicators list style
		.article-slide .carousel-indicators {
		    bottom: 0;
		    left: 0;
		    margin-left: 5px;
		    width: 100%;
		}
		Indicators list style
		.article-slide .carousel-indicators li {
		    border: medium none;
		    border-radius: 0;
		    float: left;
		    height: 54px;
		    margin-bottom: -10px;
		    margin-left: 23px;
		    margin-right: 5px !important;
		    width: 100px;
		}
		Indicators images style
		.article-slide .carousel-indicators img {
		    border: 2px solid #FFFFFF;
		    float: left;
		    height: 54px;
		    left: 0;
		    width: 100px;
		}
		Indicators active image style
		.article-slide .carousel-indicators .active img {
		    border: 2px solid #428BCA;
		    opacity: 0.7;
		} */

		.preview-pic {
			margin-left: 60px;
			margin-top: 20px;
			width: 330px;
			height: 370px;
		}
		
		.btnAddAction {
			/* background-color: #eb9e4f;
		    border: 0;
		    padding: 3px 10px;
		    margin-top: 10px;
		    color: #ffffff;
		    border-radius: 2px; */
			text-align: center;
			border: 1px solid white;
			padding: 2px;
			width: 34.5%;
			background-color: skyblue;
		}
		.btnAddAction:hover {
			background-color: darkblue;
			color: rgb(255, 255, 255);
		}

		.quantity {
			font-size: 16px;
		}

		#quantity {
			margin-left: -15px;
		}

		.pricee {
			font-size: 30px;
			text-transform: none;
		}

		.btnAdd {
			border-radius: 4px;
			/* background-color: #f4511e; */
			background-color: #5BC0DE;
			border: none;
			color: #FFFFFF;
			text-align: center;
			font-size: 17px;
			width: 28.5%;
			transition: all 0.5s;
			cursor: pointer;
			padding: 5px;
		}

		.btnAdd span {
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
		}

		.btnAdd span:after {
			content: '\00bb';
			position: absolute;
			opacity: 0;
			top: 0;
			right: -20px;
			transition: 0.5s;
		}

		.btnAdd:hover span {
			padding-right: 25px;
		}

		.btnAdd:hover span:after {
			opacity: 1;
			right: 0;
		}

		#pic-1 {
			padding:40px;
			transition: transform .2s;
			margin: 0 auto;
		}

		#pic-1:hover {
			-ms-transform: scale(1.5); /* IE 9 */
			-webkit-transform: scale(1.5); /* Safari 3-8 */
			transform: scale(1.5); 
		}

	</style>
</head>
<body>
	<div class="container-fluid">
		<!-- shop-item gallery -->
		<div class="preview col-sm-6">
			<div class="preview-pic tab-content">
				<div class="tab-pane active img-responsive" id="pic-1"><img src ="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"></div>
				<!-- <div class="tab-pane" id="pic-2"><img src="./img/products/barca7.jpg" /></div>
				<div class="tab-pane" id="pic-3"><img src="./img/barca3.jpg" /></div>
				<div class="tab-pane" id="pic-4"><img src="./img/barca1.jpg" /></div>
				<div class="tab-pane" id="pic-5"><img src="./img/barca2.jpg" /></div> -->
			</div>
			<!-- <ul class="preview-thumbnail nav nav-tabs">
				<li class="active"><a data-target="#pic-1" data-toggle="tab"><img src ="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"></a></li>
				<li><a data-target="#pic-2" data-toggle="tab"><img src="./img/barca3.jpg" /></a></li>
				<li><a data-target="#pic-3" data-toggle="tab"><img src="./img/barca7.jpg" /></a></li>
				<li><a data-target="#pic-4" data-toggle="tab"><img src="./img/barca1.jpg" /></a></li>
				<li><a data-target="#pic-5" data-toggle="tab"><img src="./img/barca2.jpg" /></a></li>
			</ul> -->
		</div>

		
		
		<!-- drug kerosel -->
		<!-- <div class="carousel slide article-slide col-sm-6" id="article-photo-carousel">
		
		  Wrapper for slides
		  <div class="carousel-inner cont-slider">
		
		    <div class="item active">
		      <img alt="" title="" src="./img/barca3.jpg">
		    </div>
		    <div class="item">
		      <img alt="" title="" src="./img/barca2.jpg">
		    </div>
		    <div class="item">
		      <img alt="" title="" src="./img/barca7.jpg">
		    </div>
		    <div class="item">
		      <img alt="" title="" src="./img/barca1.jpg">
		    </div>
		  </div>
		  Indicators
		  <ol class="carousel-indicators">
		    <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
		      <img alt="" src="./img/barca3.jpg">
		    </li>
		    <li class="" data-slide-to="1" data-target="#article-photo-carousel">
		      <img alt="" src="./img/barca2.jpg">
		    </li>
		    <li class="" data-slide-to="2" data-target="#article-photo-carousel">
		      <img alt="" src="./img/barca7.jpg">
		    </li>
		    <li class="" data-slide-to="3" data-target="#article-photo-carousel">
		      <img alt="" src="./img/barca1.jpg">
		    </li>
		  </ol>
		</div> -->




		<!-- ItemDetails -->
		<div class="details col-sm-6 product-center clearfix">
			<h3 class="product-title"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
			<hr>
			<div class="tab-pane active" id="tab_default_1">
				<h4>Описание</h4>
			</div>
			<div class="description">
				<!-- <span>Марка</span>
				<a href="#" itemprop="brand">F.C. Barcelona</a>
				<br> -->
				<p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
			</div>
			<div class="quantity">
				<h4>Наличност: <?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
</h4>
			</div>
			<div class="price">
				<!-- <span class="price-new"><span itemprop="price" id="price-old">ЦЕНА: 28,08 лв.</span></span> -->
				<p class="pricee"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 лв.</p>
			</div>

			<!-- QUANTITY OLD -->
			<!-- <div class="col-sm-2">
				<input type="number" name="quantity" class="text-center" id="quantity" min="1" value="1" max="<?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
">
			</div> -->
			
			<div>
				<!-- QUANTITY -->
				<div class="input-group number-spinner">
					<span class="input-group-btn data-dwn">
						<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
					</span>
					<input type="text" class="form-control text-center" value="1" min="1" max="<?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
">
					<span class="input-group-btn data-up">
						<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
					</span>
				</div>

				<!-- <input type="hidden" name="product_id" size="2" value="7343"> -->

				<!-- SHOP-ITEM BUTTON -->
				<div class="shop-item-btn">
					<form method="post" action="index1.php?action=add&code=<?php echo '<?php ';?>echo $product_array[$key]['code']; <?php echo '?>';?>">
						<!-- <input type="submit" value="КУПИ" data-loading-text="Зареждане..." class="btnAddAction"> -->
						<button type="submit" class="btnAdd" data-loading-text="Зареждане..." ><span>КУПИ </span></button>
					</form>
				</div>
			</div>
			
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

	<!-- Number Spinner -->
	<?php echo '<script'; ?>
>
		$(function() {
		    var action;
		    $(".number-spinner button").mousedown(function () {
		        btn = $(this);
		        input = btn.closest('.number-spinner').find('input');
		        btn.closest('.number-spinner').find('button').prop("disabled", false);

		    	if (btn.attr('data-dir') == 'up') {
		            action = setInterval(function(){
		                if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
		                    input.val(parseInt(input.val())+1);
		                }else{
		                    btn.prop("disabled", true);
		                    clearInterval(action);
		                }
		            }, 60);
		    	} else {
		            action = setInterval(function(){
		                if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
		                    input.val(parseInt(input.val())-1);
		                }else{
		                    btn.prop("disabled", true);
		                    clearInterval(action);
		                }
		            }, 60);
		    	}
		    }).mouseup(function(){
		        clearInterval(action);
		    });
		});
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
