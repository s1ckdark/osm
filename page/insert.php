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
            <div class="insert">
                <div class="inner">
                    <div class="row">
                        <label>고객사</label>
                        <select name="cars" id="client">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="row">
                        <label>지원타입</label>
                        <select name="type" id="type">
                            <option value="mongo">mongo</option>
                            <option value="mysql">mysql</option>
                        </select>
                    </div>
                    <div class="row">
                        <label>지원일자</label>
                        <input type="date" name="date" id="date">
                    </div>
                    <div class="row">
                        <label>지원시간</label>
                        <input type="number" name="time" id="time">
                    </div>
                    <div class="row">
                        <label>지원자</label>
                        <input type="text" name="assign" id="assign">
                    </div>
                    <div class="btn">
                        <button id="insertbtn">저장</button>
                        <button id="insertcancel">취소</button>
                    </div>
                    <div id="insertResult">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"  crossorigin="anonymous"></script>
        <script src="../js/insert.js"></script>
    </body>
</html>