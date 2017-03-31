<style type="text/css">
	div {
		position: relative;
	}
	form.loginForm{
		border-radius: 15px;
		border: 2px #00C345 ;
		left: 40%;
		width: 20%;
		position: fixed;
		top: 25%;
		background-color: #00389E;

	}
	div.header{
		border-radius: 15px;
		/*background-color: #00389E;*/
		/*border-bottom : 1px black solid ;*/
		/*border-top: solid 1px;*/
		color: #FFFFFF;
	}

	input{
		/*border-radius: 15px;*/
		width: 100%;
    	padding: 12px 20px;
    	display: inline-block;
    	border: 1px solid #ccc;
	    box-sizing: border-box;
	    position: relative;
	    /*background-color: #636363;
	    color: #FFFFFF;*/

	}
	button.login{
		border-bottom-right-radius: 15px;
		border-bottom-left-radius: 15px;
		text-align: center;
		width: 100%;
		height: 30px;
		background-color: #00A365;
		

	}
	button.login:hover{
		background-color: #B57E37;
	}
	.Popup{
		position: fixed;
		left: 40%;
		text-align: center;
		background: red;
		border: solid 1px black;
		
		top: 100%;
		width: 20%;
		height: 10%;
		animation: popUp 6s ;
	}

	@keyframes popUp{
		0%{
			top: 100%;
		}
		50%{
			top: 90%;
		}
		80%{
			top: 90%;
		}
		100%{
			top: 100%;
		}
	}

</style>