<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
	<meta charset="utf-8">
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			outline: none;
		}
		body{
			width: 100%;
		}
		.head{
			background: #34495e;
			padding-left: 50px;
		}
		.head-item{
			color: #fff;
			display: inline-block;
			padding: 20px;
			cursor: pointer;
		}
        .head-item a{
            color: #fff;
        }
		#reservation-box{
			position: fixed;
			top: 20%;
			left: 50%;
			padding: 15px;
			width: 320px;
			margin-left: -160px;
			box-shadow: 0 0 10px 0 rgba(0,0,0,0.20);
    		border-radius: 5px;
    		background-color: #fff;
		}
		.btn-list{
			text-align: center;
			color: #34495e;
		    font-weight: 600;
		    font-size: 15px;
		}
		.btn-list span{
			padding: 0 20px;
		}
		.user{
			margin-top: 20px;
		    width: 100%;
		    height: 36px;
		    line-height: 36px;
		    padding: 0 10px;
		    -webkit-box-sizing: border-box;
		    box-sizing: border-box;
		    border: 1px solid #f1f1f1;
		    background: #f8f8f8;
		}
		.password{
			margin-top: 20px;
		    width: 100%;
		    height: 36px;
		    line-height: 36px;
		    padding: 0 10px;
		    -webkit-box-sizing: border-box;
		    box-sizing: border-box;
		    border: 1px solid #f1f1f1;
		    background: #f8f8f8;
		}
		.reservation-btn{
			margin-top: 20px;
		    width: 100%;
		    height: 36px;
		    line-height: 36px;
		    background-color: #34495e;
		    color: #fff;
		    text-align: center;
		    border-radius: 2px;
		    font-size: 11px;
		    font-weight: 500;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="head">
        <span class="head-item"><a href="{{ url('/') }}">Reservation List</a></span>
        <span class="head-item"><a href="{{ url('/reservation') }}">New Reservation</a></span>
        <span class="head-item"><a href="{{ url('/logout') }}">Logout</a></span>
	</div>

	<div id="reservation-box">
		<select>
			<!-- 根据当前日期展示 -->
			<option value ="2021-05-30">2021-05-30</option>
			<option value ="2021-05-31">2021-05-31</option>
			<option value ="2021-06-01">2021-06-01</option>
			<option value ="2021-06-02">2021-06-02</option>
			<option value="2021-06-03">2021-06-03</option>
		</select>

		<div class="reservation-btn">reservation</div>
	</div>
</body>
</html>
