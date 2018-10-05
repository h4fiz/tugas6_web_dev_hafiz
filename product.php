<?php
    //baca file json ke dalam string
    $json = file_get_contents("product.json");
    //decode json menjadi array php
    $data_orang = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title Page</title>

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="bower_components/jquery-smartcart/dist/css/smart_cart.min.css" rel="stylesheet" type="text/css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Products
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <!-- BEGIN PRODUCTS -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sc-product-item thumbnail">
                                    <img data-name="product_image" src="http://placehold.it/250x150/2aabd2/ffffff?text=Product+1" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name">Product 1</h4>
                                        <p data-name="product_desc">Product details</p>
                                        <hr class="line">
                                        
                                        <div>
                                            <div class="form-group">
                                                <label>Size: </label>
                                                <select name="product_size" class="form-control input-sm">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Color: </label><br />
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="red"> red
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="blue"> blue
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="green"> green
                                                </label>
                                            </div>
                                            <div class="form-group2">
                                                <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                                            </div>
                                            <strong class="price pull-left">$2,990.50</strong>
                                            
                                            <input name="product_price" value="2990.50" type="hidden" />
                                            <input name="product_id" value="12" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <span class="sc-product-item thumbnail">
                                    <img data-name="product_image" src="http://placehold.it/250x150/2aabd2/ffffff?text=Product+2" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name">Product 2 </h4>
                                        <p data-name="product_desc">Product details</p>
                                    
                                        <hr class="line">
                                        <div>
                                            <div class="form-group">
                                                <label>Size: </label>
                                                <select name="product_size" class="form-control input-sm">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Color: </label><br />
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="red"> red
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="blue"> blue
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="green"> green
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>
                                            <strong class="price pull-left">$5,435.50</strong>
                                            
                                            <input name="product_price" value="5435.50" type="hidden" />
                                            <input name="product_id" value="145" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="sc-product-item thumbnail">
                                    <img data-name="product_image" src="http://placehold.it/250x150/2aabd2/ffffff?text=Product+3" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name">Product 3</h4>
                                        <p data-name="product_desc">Product details</p>
                                    
                                        <hr class="line">
                                        
                                        <div>
                                            <div class="form-group">
                                                <label>Size: </label>
                                                <select name="product_size" class="form-control input-sm">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Color: </label><br />
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="red"> red
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="blue"> blue
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="green"> green
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>
                                            <strong class="price pull-left">$5,435.50</strong>
                                            
                                            <input name="product_price" value="5435.50" type="hidden" />
                                            <input name="product_id" value="145" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <span class="sc-product-item thumbnail">
                                    <img data-name="product_image" src="http://placehold.it/250x150/2aabd2/ffffff?text=Product+4" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name">Product 4 </h4>
                                        <p data-name="product_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                    
                                        <hr class="line">
                                        <div>
                                            <div class="form-group">
                                                <label>Size: </label>
                                                <select name="product_size" class="form-control input-sm">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Color: </label><br />
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="red"> red
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="blue"> blue
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="green"> green
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>
                                            <strong class="price pull-left">$435.50</strong>
                                            
                                            <input name="product_price" value="435.50" type="hidden" />
                                            <input name="product_id" value="154" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <span class="sc-product-item thumbnail">
                                    <img data-name="product_image" src="http://placehold.it/250x150/2aabd2/ffffff?text=Product+5" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name">Product 5 </h4>
                                        <p data-name="product_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                    
                                        <hr class="line">
                                        <div>
                                            <div class="form-group">
                                                <label>Size: </label>
                                                <select name="product_size" class="form-control input-sm">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Color: </label><br />
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="red"> red
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="blue"> blue
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="green"> green
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>
                                            <strong class="price pull-left">$3,410.00</strong>
                                            
                                            <input name="product_price" value="3410.00" type="hidden" />
                                            <input name="product_id" value="155" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <span class="sc-product-item thumbnail">
                                    <img data-name="product_image" src="http://placehold.it/250x150/2aabd2/ffffff?text=Product+6" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name">Product 6 </h4>
                                        <p data-name="product_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                    
                                        <hr class="line">
                                        <div>
                                            <div class="form-group">
                                                <label>Size: </label>
                                                <select name="product_size" class="form-control input-sm">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Color: </label><br />
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="red"> red
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="blue"> blue
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="green"> green
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>
                                            <strong class="price pull-left">$5,435.50</strong>
                                            
                                            <input name="product_price" value="5435.50" type="hidden" />
                                            <input name="product_id" value="145" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </span>
                            </div>
                            <!-- END PRODUCTS -->
                        </div>
                    </div>
                </div>
                
            </div>
            
            <aside class="col-md-4">
                
                <!-- Cart submit form -->
                <form action="results.php" method="POST"> 
                    <!-- SmartCart element -->
                    <div id="smartcart"></div>
                </form>
                
            </aside>
        </div>
    </section>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery-smartcart/dist/js/jquery.smartCart.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // Initialize Smart Cart    	
            $('#smartcart').smartCart();
		});
    </script>
</body>
</html>
    