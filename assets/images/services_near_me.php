<html>
	<head>
	<title>services near me</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<style>
	/********** AD BOX  *************/
.adbox-img {
    padding:8px;
    border-bottom: 1px solid #e2e2e2;
    background-color : #f2f2f2;
}
.adbox-img img {
    border: 1px solid #ababab;
}
/* Top Filter Box */
.tfilter-box {
    padding:15px 0px 15px 0px;
    border: 1px solid #e2e2e2;
    background-color : #f2f2f2;
    z-index:1000;
}

.form-control, select {
    display: block;
    width: 100%;
    height: 48px;
    border: 1px solid #ededed;
    border-radius: 0;
    background-color: #fff;
    background-image: none;
    box-shadow: none;
    color: #000;
    font-size: 14px;
    line-height: 1.42857143;
}

.affix {top: 0; width: 100%;z-index: 9999 !important;}
.affix + .container-fluid {padding-top: 70px;}
/******************** CARD CSS *******************/
.card {
    background: #fff none repeat scroll 0 0;
    box-shadow: 0 2px 5px -1px rgba(0, 0, 0, 0.16);
    margin-bottom: 30px;
    overflow: hidden;
    display: block;
    width: 100%;
    position: relative;
    border: 1px solid #e5e5e5;
}
.card:hover {box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);}
.card-block {
    padding: 15px 15px 0 15px;
    background: #fff none repeat scroll 0 0;
}
.card-img {
    border-radius: 0px 0px 0 0;
    max-height: 180px;
    overflow: hidden;
}
.card-footer {
    background: #fff none repeat scroll 0 0;
    overflow: hidden;
    width: 100%;
    border-top: 1px solid #e5e5e5;
    padding:5px 0px 5px 5px;
}
.card-bid-btn {
    display: inline-block;
    margin-top: 8px;
    padding-left: 14px;
    margin-bottom: 0;
}
.card-footer ul li a {
    border-left: 1px solid #e5e5e5;
    display: block;
    height: inherit;
    margin-top: 8px;
    text-align: center;
    width: 30px;
    padding-left:5px;
}
.card-footer ul li a:hover {background:#dd0000;}
/********** AD BOX  *************/
.adbox-img {
    padding:8px;
    border-bottom: 1px solid #e2e2e2;
    background-color : #f2f2f2;
}
.adbox-img img {
    border: 1px solid #ababab;
}
/* Top Filter Box */
.tfilter-box {
    padding:15px 0px 15px 0px;
    border: 1px solid #e2e2e2;
    background-color : #f2f2f2;
    z-index:1000;
}

.form-control, select {
    display: block;
    width: 100%;
    height: 48px;
    border: 1px solid #ededed;
    border-radius: 0;
    background-color: #fff;
    background-image: none;
    box-shadow: none;
    color: #000;
    font-size: 14px;
    line-height: 1.42857143;
}
/******************** CARD CSS *******************/
.card {
    background: #fff none repeat scroll 0 0;
    box-shadow: 0 2px 5px -1px rgba(0, 0, 0, 0.16);
    margin-bottom: 30px;
    overflow: hidden;
    display: block;
    width: 100%;
    position: relative;
    border: 1px solid #e5e5e5;
}
.card:hover {box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);}
.card-block {
    padding: 15px 15px 0 15px;
    background: #fff none repeat scroll 0 0;
}
.card-img {
    border-radius: 0px 0px 0 0;
    max-height: 180px;
    overflow: hidden;
}
.card-footer {
    background: #fff none repeat scroll 0 0;
    overflow: hidden;
    width: 100%;
    border-top: 1px solid #e5e5e5;
    padding:5px 0px 5px 5px;
}
.card-bid-btn {
    display: inline-block;
    margin-top: 8px;
    padding-left: 14px;
    margin-bottom: 0;
}
.card-footer ul li a {
    border-left: 1px solid #e5e5e5;
    display: block;
    height: inherit;
    margin-top: 8px;
    text-align: center;
    width: 30px;
    padding-left:5px;
}
.card-footer ul li a:hover {background:#dd0000;}


/*--------------------------------------
 Sets the actionable area for the gaadiexp
 including a label for usability
--------------------------------------*/
.content-box {margin-top:20px;}
.gaadiexp,
.gaadiexp:after,
.gaadiexp *,
.gaadiexp *:before,
.gaadiexp *:after,
.header-nav *,
.header-nav *:before,
.header-nav *:after {
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}

.gaadiexp {
    cursor: pointer;
    height: 60px;
    margin-bottom: 0;
    width: 60px;
    z-index: 9001;
    left: 0;
    overflow: hidden;
    position: fixed;
    top: 0;
    background: gray;
}

.gaadiexp:after {
    bottom: 7px;
    color: #FFFFFF;
    content: 'Menu';
    font-size: 13px;
    font-weight: 300;
    left: 0;
    position: absolute;
    text-align: center;
    width: 100%;
}


/*--------------------------------------
 Creates the look of the gaadiexp icon
 using the inner span and pseudo-elements
--------------------------------------*/

.gaadiexp span,
.gaadiexp span:before,
.gaadiexp span:after {
    background: #FFFFFF;
    border-radius: 0.2em;
    height: 4px;
    left: 10px;
    position: absolute;
    top: 22px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    width: 40px;
}


/* Reset the left and create the pseudo-element */

.gaadiexp span:before,
.gaadiexp span:after {
    content: '';
    left: 0;
}


/* Top bar position */

.gaadiexp span:before {
    top: -8px;
}


/* Bottom bar position */

.gaadiexp span:after {
    top: 8px;
}


/* Get rid of more on action (IE9 or higher) */

.gaadiexp-check:checked + .gaadiexp:after {
    content: '';
}


/* Get rid of the middle bar on action (IE9 or higher) */

.gaadiexp-check:checked + .gaadiexp span {
    height: 0;
    width: 0;
}


/* Moves the top and bottom bars to the middle on action (IE9 or higher) */

.gaadiexp-check:checked + .gaadiexp span:before,
.gaadiexp-check:checked + .gaadiexp span:after {
    top: 6px;
}


/* Rotates the top bar on action with full browser support (IE9 or higher) */

.gaadiexp-check:checked + .gaadiexp span:before {
    -webkit-transform: rotate(225deg);
    -ms-transform: rotate(225deg);
    transform: rotate(225deg);
}


/* Rotates the bottom bar on action with full browser support (IE9 or higher) */

.gaadiexp-check:checked + .gaadiexp span:after {
    -webkit-transform: rotate(-225deg);
    -ms-transform: rotate(225deg);
    transform: rotate(-225deg);
}

#mobile-nav:focus + .gaadiexp,
.gaadiexp:focus,
.gaadiexp:hover {
    background: rgba(0, 136, 204, 0.9);
}

.gaadiexp-check:checked + .gaadiexp {
    width: 200px;
}

.gaadiexp-check:checked + .gaadiexp:after {
    bottom: 18px;
    content: 'Close Menu';
    font-size: 20px;
    padding-left: 30px;
}

#mobile-nav {
    left: -9999px;
    position: fixed;
    top: 0;
}

.header-nav ul li a:active,
.header-nav ul li a:focus,
.header-nav ul li a:hover,
#mobile-nav:focus + .gaadiexp,
.gaadiexp:focus,
.gaadiexp:hover {
    background: rgba(0, 0, 0, 0.1);
    outline: none;
    border-bottom: 1px solid #fff;
}

.fixed-nav {
    background: #000000;
    height: 60px;
    position: fixed;
    width: 100%;
    z-index: 9000;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
}

.header-nav {
    float: left;
    height: 60px;
    position: relative;
    width: 100%;
    
}

.header-nav ul {
    background: #fff;
    
    height: calc(100vh - 60px);
    list-style: none;
    margin: 0;
    overflow-y: auto;
    padding: 10px 0 0 0;
    position: absolute;
    -webkit-transform: translateX(-110%);
    transform: translateX(-110%);
    -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
    -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
    -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
    transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
    width: 200px;
    box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.075);
    top: 100%;
    z-index: 1;
}

.gaadiexp-check:checked ~ .header-nav ul {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}

.header-nav ul li {
    float: left;
    position: relative;
    width: 100%;
}

.header-nav ul li a {
    color: rgba(0, 0, 0, 0.79);
    display: block;
    float: left;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0.75px;
    line-height: 24px;
    margin-left: 0;
    overflow: hidden;
    padding: 12px 60px 12px 12px;
    position: relative;
    text-decoration: none;
    width: 100%;
}

/************* fixed bottom Filter *********/
.fixed-b-filter {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #f2f2f2;
    color: white;
    text-align: center;
}
</style>
<!------ Include the above in your HEAD tag ---------->
	</head>
	<body>
		<input type="checkbox" name="mobile-nav" id="mobile-nav" class="gaadiexp-check" onchange="this.blur()">
<label for="mobile-nav" class="gaadiexp white" tabindex="0"><span></span></label>
<nav role="navigation" class="header-nav">
    <div class="fixed-nav">
        <div class="menu">

        </div>
    </div>
</nav>

<div class="ad-sektion-top hidden-xs" style="margin-top:0px;">
 <div class="container-fluid text-center">
	<!--<div class="row">
	    <div class="adbox-img ">
	         <img src="https://moatsearch-data.s3.amazonaws.com/creative_screens/7b/f8/d4/7bf8d4dd35362e8a11a418d4c58bd59c.jpg" class="img-thumbnail" alt="Cinque Terre"> 
	   </div>
		
		
	</div>-->
 </div>
</div>
<div id="top-filter" class="top-filter tfilter-box hidden-xs"data-spy="affix" data-offset-top="197" >
            <div class="container">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-7">
              <select class="form-control" >
				<option value="0" selected="selected">
                  Choose any One
                </option>
                <option value="0">
                  Bangalore
                </option>
                <option value="1">
                  Chennai
                </option>
                <option value="2">
                  Mumbai
                </option>
                <option value="3">
                  Delhi
                </option>
                <option value="4">
                  Hyderabad
                </option>
                
              </select>
            </div>
            <div class="col-sm-1">
              <button type="button" class="btn btn-primary site-btn">Submit</button>
            </div>
			<div class="col-sm-2">
            </div>
           
        </div>
    </div>
           </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
		<br>
			<p><small><a href="#">Home</a> /  Near Me</small></p>
            <h3>Services Near me</h3>
			<p>Find all UrbanClap Local Services near you. Choose from 1,00,000+ trusted professionals to take care of all your needs - Wedding Services, Home Services, Appliance & Electronic Repairs and much more.</p>
            <hr>
        </div>
    </div>
    <div class="row">
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Web Design companies Near me</h4>
    	            </div>
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> AC Repair Near Me</h4>
    	            </div>
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Architects Near Me </h4>
    	            </div>
    	           
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Astrologer Near Me </h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	  
	</div>
	<div class="row">
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Baby Photographer Near Me </h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Birthday Party Caterers Near Me </h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Birthday Party Planners Near Me </h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Bollywood Dance Classes Near Me</h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	  
	</div>
	<div class="row">
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Bridal Mehendi Artist Near Me </h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Chartered Accountants Near Me </h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Car Cleaning Near Me </h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Carpenters Near Me</h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	  
	</div>
	<div class="row">
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> CCTV Dealers Near Me</h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Chimney Hob Repair Near Me </h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Home Contractors Near Me </h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Laundry Service Near Me</h4>
    	            </div>
    	           
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
		
	  
	</div>
	<div class="row">
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Dry Cleaners Near Me</h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Electricians Near Me</h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> Fitness Trainer Near Me</h4>
    	            </div>
    	            
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="card">
	            <div class="card-img">
	               <img class="img-responsive" src="">

	            </div>
	            <div class="card-block">
    	            <div class="card-category">
    	                <small><a href="#"></a> </small>
    	            </div>
    	            <div class="card-title">
    	                <h4> French Classes Near Me</h4>
    	            </div>
    	           
	            </div>
	            <div class="card-footer">
	                <div class="card-bid-btn">
	                    <span class="label label-danger lb-lg"><i class="fa fa-gavel"></i>Booknow</span>
	                </div>
	                <ul class="pull-right list-inline">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                    </ul>

                </div>
	        </div>
	    </div>
		
	  
	</div>
</div>
<div class="page-counting">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="pagination">
  <li><a href="#">1</a></li>
  <li class="active"><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
            </div>
        </div>
    </div>
</div>


	</body>
	</html>