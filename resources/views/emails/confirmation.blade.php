{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>Sign Up Confirmation</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Thanks for signing up!</h1>--}}

{{--<p>--}}
    {{--We just need you to <a href='{{ url("register/confirm/{$user->token}") }}'>confirm your email address</a> real quick!--}}
{{--</p>--}}
{{--</body>--}}
{{--</html>--}}


        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>
<div style="background-color:#fff;margin:0 auto 0 auto;padding:30px 0 30px 0;color:#4f565d;font-size:13px;line-height:20px;font-family:'Helvetica Neue',Arial,sans-serif;text-align:left;">
    <center>
        <table style="width:550px;text-align:center">
            <tbody>
            <tr>
                <td style="padding:0 0 20px 0;border-bottom:1px solid #e9edee;">
                    <a href="" style="display:block; margin:0 auto;" target="_blank">
                        <img src="{{asset('images/welcome/logoblk.png')}}" alt="GYMX logo" style="border: 0px;">
                    </a>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding:30px 0;">
                    <p style="color:#1d2227;line-height:28px;font-size:22px;margin:12px 10px 20px 10px;font-weight:400;">Hi {{$user->name}}, it's great to meet you.</p>
                    <p style="margin:0 10px 10px 10px;padding:0;">We'd like to make sure we got your email address right.</p>
                    <p>
                        <a style="display:inline-block;text-decoration:none;padding:15px 20px;background-color:#2baaed;border:1px solid #2baaed;border-radius:3px;color:#FFF;font-weight:bold;" href="{{ url("register/confirm/{$user->token}") }}" target="_blank">Yes, it's me – let's get started</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding:30px 0 0 0;border-top:1px solid #e9edee;color:#9b9fa5">
                    If you have any questions you can contact us at <a style="color:#666d74;text-decoration:none;" href="mailto:shahariarrabby1@gmail.com" target="_blank">shahariarrabby1@gmail.com</a>
                </td>
            </tr>
            </tbody>
        </table>
    </center>
</div>
</body>
</html>