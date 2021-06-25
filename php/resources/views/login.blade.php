<!DOCTYPE html>
<html>
<head>
	<title>login</title>
    <style type="text/css">
    			*{
			padding: 0;
			margin: 0;
			outline: none;
		}
		body{
			width: 100%;
			background-size: 100% auto;
		}
		#login-box{
			position: fixed;
			top: 30%;
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
		.login-btn{
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
	<div id="login-box">
		<div class="btn-list">
			<span style="cursor: pointer;" class="login-opt"><a href="{{ url('/login') }}">login</a></span>
			<span style="opacity: .3;cursor: pointer;" class="register-opt"><a href="{{ url('/register') }}">register</a></span>
		</div>
		<input class="user" type="" name="" placeholder="email" />
		<input class="user" type="" name="" placeholder="username" />
		<input class="password" type="password" name="" placeholder="password" />
		<div class="login-btn">login</div>
	</div>
</body>

<script type="text/javascript">
    $(function(){
        $('.login-btn').click(function(){
            var email = $('.email').val();
            var user = $('.user').val();
            var password = $('.password').val();

            if(email.trim() ==''){
                alert('Please input a email')
                return
            }
            if(user.trim() ==''){
                alert('Please input a username')
                return
            }
            if(password.trim() == ''){
                alert('Please input a password')
                return
            }
            if(password.trim().length < 6){
                alert('Password no less than 6 digits')
                return
            }
            $.ajax({
                type:'post',
                url:"{{ url('api/member/login') }}",
                data:{"email":email,"user":user,"password":password},
                dataType:'json',
                success:function(res){
                    if(res.code == 1){
                        alert('success')
                        window.location.href="/";
                    }else{
                        alert(res.msg)
                    }
                }
            })

        })
    })
</script>
</html>
