


   

    <style>
        /*//////////////////////////////////////////////////////////////////
    [ FONT ]*/

        @font-face {
            font-family: Ubuntu-Regular;
            src: url('../fonts/ubuntu/Ubuntu-Regular.ttf');
        }

        @font-face {
            font-family: Ubuntu-Bold;
            src: url('../fonts/ubuntu/Ubuntu-Bold.ttf');
        }




        /*//////////////////////////////////////////////////////////////////
    [ RESTYLE TAG ]*/

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body,
        html {
            height: 100%;
            font-family: Ubuntu-Regular, sans-serif;
        }

        /*---------------------------------------------*/
        a {
            font-family: Ubuntu-Regular;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
            color: #fff;
        }

        /*---------------------------------------------*/
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0px;
        }

        p {
            font-family: Ubuntu-Regular;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
        }

        ul,
        li {
            margin: 0px;
            list-style-type: none;
        }


        /*---------------------------------------------*/
        input {
            outline: none;
            border: none;
        }

        textarea {
            outline: none;
            border: none;
        }

        textarea:focus,
        input:focus {
            border-color: transparent !important;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        input:focus:-ms-input-placeholder {
            color: transparent;
        }

        textarea:focus::-webkit-input-placeholder {
            color: transparent;
        }

        textarea:focus:-moz-placeholder {
            color: transparent;
        }

        textarea:focus::-moz-placeholder {
            color: transparent;
        }

        textarea:focus:-ms-input-placeholder {
            color: transparent;
        }

        input::-webkit-input-placeholder {
            color: #555555;
        }

        input:-moz-placeholder {
            color: #555555;
        }

        input::-moz-placeholder {
            color: #555555;
        }

        input:-ms-input-placeholder {
            color: #555555;
        }

        textarea::-webkit-input-placeholder {
            color: #555555;
        }

        textarea:-moz-placeholder {
            color: #555555;
        }

        textarea::-moz-placeholder {
            color: #555555;
        }

        textarea:-ms-input-placeholder {
            color: #555555;
        }

        label {
            margin: 0;
            display: block;
        }

        /*---------------------------------------------*/
        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        iframe {
            border: none !important;
        }


        /*//////////////////////////////////////////////////////////////////
    [ Utility ]*/
        .txt1 {
            font-family: Poppins-Regular;
            font-size: 13px;
            color: #e5e5e5;
            line-height: 1.5;
        }


        /*//////////////////////////////////////////////////////////////////
    [ login ]*/

        .limiter {
            width: 100%;
            margin: 0 auto;
        }

        .container-login100 {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;

            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            z-index: 1;
        }

        .container-login100::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.65);
        }

        .wrap-login100 {
            width: 390px;
            border-radius: 10px;
            overflow: hidden;

            background: transparent;
        }


        /*------------------------------------------------------------------
    [ Form ]*/

        .login100-form {
            width: 100%;
            border-radius: 10px;
            background-color: #fff;
        }

        .login100-form-logo {
            font-size: 60px;
            color: #333333;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #fff;
            margin: 0 auto;
        }

        .login100-form-title {
            font-family: Ubuntu-Bold;
            font-size: 28px;
            color: #fff;
            line-height: 1.2;
            text-align: center;
            text-transform: uppercase;

            display: block;
        }


        /*------------------------------------------------------------------
    [ Input ]*/

        .wrap-input100 {
            width: 100%;
            position: relative;
            border-bottom: 1px solid #e6e6e6;
            padding: 29px 0;
        }

        .input100 {
            font-family: Ubuntu-Regular;
            font-size: 20px;
            color: #555555;
            line-height: 1.2;

            display: block;
            width: 100%;
            height: 50px;
            background: transparent;
            padding: 0 10px 0 80px;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        /*---------------------------------------------*/
        .focus-input100 {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .focus-input100::before {
            content: "";
            display: block;
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 0;
            height: 1px;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;

            background: #d41872;
            background: -webkit-linear-gradient(left, #a445b2, #d41872, #fa4299);
            background: -o-linear-gradient(left, #a445b2, #d41872, #fa4299);
            background: -moz-linear-gradient(left, #a445b2, #d41872, #fa4299);
            background: linear-gradient(left, #a445b2, #d41872, #fa4299);
        }

        .focus-input100::after {
            font-family: Linearicons-Free;
            font-size: 18px;
            color: #999999;

            content: attr(data-placeholder);
            display: block;
            width: 100%;
            position: absolute;
            top: 40px;
            left: 35px;


            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .input100:focus {
            padding-left: 60px;
        }

        .input100:focus+.focus-input100::after {
            left: 23px;
            color: #d41872;
        }

        .input100:focus+.focus-input100::before {
            width: 100%;
        }

        .has-val.input100+.focus-input100::after {
            left: 23px;
            color: #d41872;
        }

        .has-val.input100+.focus-input100::before {
            width: 100%;
        }

        .has-val.input100 {
            padding-left: 60px;
        }


        /*------------------------------------------------------------------
    [ Button ]*/
        .container-login100-form-btn {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .login100-form-btn {
            font-family: Ubuntu-Bold;
            font-size: 18px;
            color: #fff;
            line-height: 1.2;
            text-transform: uppercase;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            min-width: 160px;
            height: 42px;
            border-radius: 21px;

            background: #d41872;
            background: -webkit-linear-gradient(left, #a445b2, #d41872, #fa4299);
            background: -o-linear-gradient(left, #a445b2, #d41872, #fa4299);
            background: -moz-linear-gradient(left, #a445b2, #d41872, #fa4299);
            background: linear-gradient(left, #a445b2, #d41872, #fa4299);
            position: relative;
            z-index: 1;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .login100-form-btn::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            border-radius: 21px;
            background-color: #555555;
            top: 0;
            left: 0;
            opacity: 0;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .login100-form-btn:hover {
            background-color: transparent;
        }

        .login100-form-btn:hover:before {
            opacity: 1;
        }



        /*------------------------------------------------------------------
    [ Alert validate ]*/

        .validate-input {
            position: relative;
        }

        .alert-validate::before {
            content: attr(data-validate);
            position: absolute;
            max-width: 70%;
            background-color: #fff;
            border: 1px solid #c80000;
            border-radius: 2px;
            padding: 4px 25px 4px 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 10px;
            pointer-events: none;

            font-family: Ubuntu-Bold;
            color: #c80000;
            font-size: 13px;
            line-height: 1.4;
            text-align: left;

            visibility: hidden;
            opacity: 0;

            -webkit-transition: opacity 0.4s;
            -o-transition: opacity 0.4s;
            -moz-transition: opacity 0.4s;
            transition: opacity 0.4s;
        }

        .alert-validate::after {
            content: "\f12a";
            font-family: FontAwesome;
            font-size: 16px;
            color: #c80000;

            display: block;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 15px;
        }

        .alert-validate:hover:before {
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1;
            }
        }

    </style>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    SEJA BEM VINDO - SGI
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5">

                    <div class="wrap-input100 validate-input" data-validate="Informe o usuário">
                        <input class="input100" type="text" name="username" placeholder="Usuário">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Informe a senha">
                        <input class="input100" type="password" name="pass" placeholder="Senha">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

