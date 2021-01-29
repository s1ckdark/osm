<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div class="sidebar">
			<h2>MENU</h2>
        	<nav>
        		<ul>
					<li><a href="./insert.php">입력</a></li>
        			<li><a href="./search.php">조회</a></li>
        		</ul>
        	</nav>
        </div>
        <div class="contents">
            <div class="find">
                <div class="inner">
                    <div class="searchHeader">
                        <label>검색</label>
                        <input type="text" id="search">
                        <button id="searchbtn">검색하기</button>
                    </div>
                    <div id="result"></div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"  crossorigin="anonymous"></script>
        <script src="../js/search.js"></script>
    </body>
</html>