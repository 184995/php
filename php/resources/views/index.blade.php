<!DOCTYPE html>
<html>
<head>
	<title>index</title>
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
		.list-box{
			width: 100%;
			text-align: center;
		}
		.list-item{
			width: 50%;
			padding: 20px;
			margin: 20px;
			box-shadow: 0 0 10px 0 rgb(0 0 0 / 20%);
    		margin-left: 25%;
    		/*text-align: left;*/
		}
		.list-item-date, .list-item-code, .list-item-status, .list-item-cancel{
			padding: 10px;
			border: 1px solid #ccc;
		}
		.list-item-cancel{
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

	<div class="list-box">
		<!-- 每个人最多三条 -->
		<div class="list-item">
			<span class="list-item-date">date:2021-05-29</span>
			<span class="list-item-code">invitation code:fgsdds</span>
			<span class="list-item-status">statu:Passed</span>
			<!-- 过了日期不允许删除 -->
			<!-- <span class="list-item-cancel">cancel</span> -->
		</div>

		<div class="list-item">
			<span class="list-item-date">date:2021-05-30</span>
			<span class="list-item-code">invitation code:aaaads</span>
			<span class="list-item-status">statu:Passed</span>
			<span class="list-item-cancel">cancel</span>
		</div>

		<div class="list-item">
			<span class="list-item-date">date:2021-05-29</span>
			<span class="list-item-code">invitation code:aavdds</span>
			<span class="list-item-status">statu:Verified</span>
			<span class="list-item-cancel">cancel</span>
		</div>
	</div>
</body>
</html>
