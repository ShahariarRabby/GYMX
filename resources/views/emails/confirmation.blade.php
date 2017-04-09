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


        {{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<meta name="viewport"--}}
          {{--content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
    {{--<title>Document</title>--}}
{{--</head>--}}


{{--<body>--}}
{{--<div style="background-color:#fff;margin:0 auto 0 auto;padding:30px 0 30px 0;color:#4f565d;font-size:13px;line-height:20px;font-family:'Helvetica Neue',Arial,sans-serif;text-align:left;">--}}
    {{--<center>--}}
        {{--<table style="width:550px;text-align:center">--}}
            {{--<tbody>--}}
            {{--<tr>--}}
                {{--<td style="padding:0 0 20px 0;border-bottom:1px solid #e9edee;">--}}
                    {{--<a href="" style="display:block; margin:0 auto;" target="_blank">--}}
                        {{--<img src="{{asset('images/welcome/logoblk.png')}}" alt="GYMX logo" style="border: 0px;">--}}
                    {{--</a>--}}
                {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td colspan="2" style="padding:30px 0;">--}}
                    {{--<p style="color:#1d2227;line-height:28px;font-size:22px;margin:12px 10px 20px 10px;font-weight:400;">Hi {{$name}},</br>it's great to meet you.</p>--}}
                    {{--<p style="margin:0 10px 10px 10px;padding:0;">We'd like to make sure we got your email address right.</p>--}}
                    {{--<p>--}}
                        {{--<a style="display:inline-block;text-decoration:none;padding:15px 20px;background-color:#2baaed;border:1px solid #2baaed;border-radius:3px;color:#FFF;font-weight:bold;" href="{{route('confirmation',$token) }}" target="_blank">Yes, it's me – let's get started</a>--}}

                        {{--<a style="display:inline-block;text-decoration:none;padding:15px 20px;background-color:#2baaed;border:1px solid #2baaed;border-radius:3px;color:#FFF;font-weight:bold;" href="{{ url("register/confirm/{$user->token}") }}" target="_blank">Yes, it's me – let's get started</a>--}}
                    {{--</p>--}}
                {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td colspan="2" style="padding:30px 0 0 0;border-top:1px solid #e9edee;color:#9b9fa5">--}}
                    {{--or copy paste link to confirm this email address: <a style="color:#666d74;text-decoration:none;" href="{{route('confirmation',$token) }}" target="_blank">{{route('confirmation',$token) }}</a>--}}
                {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td colspan="2" style="padding:30px 0 0 0;border-top:1px solid #e9edee;color:#9b9fa5">--}}
                    {{--If you have any questions you can contact us at <a style="color:#666d74;text-decoration:none;" href="mailto:shahariarrabby1@gmail.com" target="_blank">shahariarrabby1@gmail.com</a>--}}
                {{--</td>--}}
            {{--</tr>--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</center>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}



{{--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">--}}
{{--<html xmlns="http://www.w3.org/1999/xhtml">--}}

{{--<head>--}}
    {{--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1" />--}}
    {{--<meta name="apple-mobile-web-app-capable" content="yes" />--}}
    {{--<meta content="yes" name="apple-touch-fullscreen" />--}}
    {{--<meta name="apple-mobile-web-app-status-bar-style" content="black" />--}}
    {{--<meta name="format-detection" content="telephone=no" />--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge" />--}}
    {{--<title>GYMX Subscripions</title>--}}
    {{--<style type="text/css">--}}
        {{--a:link {text-decoration: none;} a:visited {text-decoration: none;} a:hover {text-decoration: none;} a:active {text-decoration: none; text-align: center;} /*these are fixes from htmlemailboilerplate.com */ /* Outlook link fix */ #outlook a { padding:0; } /* Formatting */ body{ width:100% !important; -webkit-text; size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; background-color: #DEDEDE; } .ReadMsgBody { width: 100%; } .backgroundTable {margin:0 auto; padding:0; width:100%;!important;} table td {border-collapse: collapse;} /* Hotmail background & line height fixes */ .ExternalClass {width:100% !important;} .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Image borders & formatting */ img { outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;} a img {border:none;} /* Re-style iPhone automatic links (eg. phone numbers) */ .applelinks a { color:#FFFFFF; text-decoration: none;} /* Hotmail symbol fix for mobile devices */ .ExternalClass img[class^=Emoji] { width: 10px !important; height: 10px !important; display: inline !important;} a { color:#006699;} /* Outlook 2013 spacing fix */ table td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;} }--}}
    {{--</style>--}}
{{--</head>--}}

{{--<body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">--}}
{{--<center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">--}}
    {{--<div align="center">--}}
        {{--<table width="100%" height="100%" align="center" cellpadding="0" border="0" cellspacing="0" style="Margin:0 auto;width:100%;">--}}
            {{--<tr>--}}
                {{--<td bgcolor="#DEDEDE" valign="top" align="center" style="background-position: top center">--}}
                    {{--<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">--}}
                        {{--<tr>--}}
                            {{--<td width="300" height="10"></td>--}}
                            {{--<td width="300" height="10"></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td width="300" height="26" align="left">--}}

                            {{--</td>--}}
                            {{--<td width="300" height="26" align="right">--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td width="300" height="10"></td>--}}
                            {{--<td width="300" height="10"></td>--}}
                        {{--</tr>--}}
                    {{--</table>--}}
                    {{--<table width="600" border="0" align="center" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">--}}
                        {{--<tr>--}}
                            {{--<td height="30" align="center" valign="top"></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>--}}
                                {{--<table width="540" bgcolor="#57BFBA" border="0" align="center" cellpadding="0" cellspacing="0">--}}
                                    {{--<tr>--}}
                                        {{--<td height="50" align="center" valign="top"></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td height="90" align="center" valign="top">--}}

                                            {{--<img src="{{asset('images/hello.jpg')}}" width="400" height="167" border="0" />--}}

                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td height="180" align="center" valign="middle" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; color:#FFFFFF; padding-left: 20px; padding-right: 20px"> <span style="font-weight: bold; font-size: 20px"><h1>Thanks For Joining!</h1></span>--}}
                                            {{--<br />Please confirm that you want to use this as your--}}
                                            {{--email address. Once it's done you will be able to start enjoying <b>GYMX!</b></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td height="50" align="center" valign="middle" style="font-size: 30px; font-family: Arial, Helvetica, sans-serif; text-decoration: none; font-weight: bold; color:#000013;">--}}
                                            {{--<a href="{{url('/')}}" target="_blank">--}}
                                                {{--<img src="{{asset('images/emailcon.jpg')}}" width="500" height="382" border="0" />--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td height="20" align="center" valign="top"></td>--}}
                                    {{--</tr>--}}
                                {{--</table>--}}
                                {{--<table width="540" bgcolor="#57BFBA" border="0" align="center" cellpadding="0" cellspacing="0">--}}
                                    {{--<tr>--}}
                                        {{--<td width="107" height="50" align="right" valign="middle" style="font-size: 21px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; color:#FFFFFF;">Click</td>--}}
                                        {{--<td width="74" align="center" valign="middle">--}}
                                            {{--<a href="{{route('confirmation',$token) }}" target="_blank">--}}
                                                {{--<img src="{{asset('images/click.jpg')}}" width="56" height="60" border="0" />--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
                                        {{--<td width="359" align="left" valign="middle" style="font-size: 21px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; color:#FFFFFF;">to active your <strong>GYMX</strong> account</td>--}}
                                    {{--</tr>--}}
                                {{--</table>--}}
                                {{--<table width="540" bgcolor="#57BFBA" border="0" align="center" cellpadding="0" cellspacing="0">--}}
                                    {{--<tr>--}}
                                        {{--<td height="30" align="center" valign="top"></td>--}}
                                    {{--</tr>--}}
                                {{--</table>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td height="30" align="center" valign="top"></td>--}}
                        {{--</tr>--}}
                    {{--</table>--}}
                    {{--<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">--}}
                        {{--<tr>--}}
                            {{--<td height="10" align="center" valign="middle"></td>--}}
                            {{--<td height="10" align="center" valign="middle"></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td width="115" height="40" align="center" valign="middle">--}}
                                {{--<img src="{{asset('images/welcome/logoblk.png')}}" width="100%" height="32" border="0" />--}}
                            {{--</td>--}}
                            {{--<td width="485" align="center" style="font-family: Arial, Helvetica, sans-serif; color: #333333; font-weight: bold; font-size: 10px; padding: 15px">If you are unable to see the image click Or paste the link bellow into your browser to active your account--}}
                                {{--<br><a style="color:#666d74;text-decoration:none;" href="{{route('confirmation',$token) }}" target="_blank">{{route('confirmation',$token) }}</a>--}}
                        {{--</tr>--}}
                    {{--</table>--}}
                    {{--<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">--}}
                        {{--<tr>--}}
                            {{--<td height="27" align="center" style="font-family: Arial, Helvetica, sans-serif; color: #333333; font-weight: bold; font-size: 10px; padding: 15px">This message was sent to {{$email}}; We hope you found it relevant. However, if you think this is a mistake, then please ignore this Email. Click--}}
                                {{--<a href="{{url('/')}}" target="_blank">here</a> to get more information about GYMX.--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td height="60"></td>--}}
                        {{--</tr>--}}
                    {{--</table>--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--</table>--}}
    {{--</div>--}}
    {{--<div style="display:none; white-space:nowrap; font:15px courier; color:#ffffff;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</div>--}}
{{--</center>--}}

{{--</body>--}}

{{--</html>--}}

        <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    {!! Html::style( asset('css/animation.css')) !!}
    {{--{!! Html::style( asset('css/style.css')) !!}--}}
    <style type="text/css">
        body{
            margin:0;
            padding:0;
            min-width:100%;
            width:100% !important;
            height:100% !important;
            font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }
        body,table,td,div,p,a{
            -webkit-font-smoothing:antialiased;
            text-size-adjust:100%;
            -ms-text-size-adjust:100%;
            -webkit-text-size-adjust:100%;
            line-height:150%;
        }
        table,td{
            mso-table-lspace:0pt;
            mso-table-rspace:0pt;
            border-collapse:collapse !important;
            border-spacing:0;
        }
        img{
            border:0;
            line-height:100%;
            outline:none;
            text-decoration:none;
            -ms-interpolation-mode:bicubic;
        }
        #outlook a{
            padding:0;
        }
        .ReadMsgBody{
            width:100%;
        }
        .ExternalClass{
            width:100%;
        }
        .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
            line-height:150%;
        }
        .container{
            border-collapse:collapse;
            border-spacing:0;
            border-radius:6px;
            -webkit-border-radius:6px;
            -moz-border-radius:6px;
            -khtml-border-radius:6px;
        }
        a,a:hover{
            color:#4EB9E7;
        }
        .footerlink{
            color:#276f8e !important;
            text-decoration:underline;
        }
    </style>
</head>
<!-- BODY -->
<!-- Set message background color (twice) and text color (twice) -->

<body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%" style="border-collapse: collapse;border-spacing: 0;margin: 0;padding: 0;width: 100% !important;height: 100%;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 100%;background-color: #4EB9E7;color: #5a5a5a;min-width: 100%;font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;"
      bgcolor="#4EB9E7" text="#5a5a5a">
<!-- SECTION / BACKGROUND -->
<!-- Set message background color one again -->
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;border-spacing: 0;margin: auto;padding: 0;width: 95%;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"
       class="background">
    <tr>
        <td align="center" valign="top" style="border-collapse: collapse;border-spacing: 0;margin: 0;padding: 0;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"
            bgcolor="#4EB9E7">
            <!-- WRAPPER -->
            <!-- Set wrapper width (twice) -->
            <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border-collapse: collapse;border-spacing: 0;padding: 0;width: inherit;max-width: 560px;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"
                   class="wrapper">
                <tr>
                    <td align="center" valign="top" style="border-collapse: collapse;border-spacing: 0;margin: 0;padding: 0;padding-left: 6.25%;padding-right: 6.25%;width: 87.5%;padding-top: 14px;padding-bottom: 0px;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                        <!-- PREHEADER -->
                        {{--<img alt="Please enable images to view this content" border="0" hspace="0" src="/images/welcome/gymx_logo.png" style="width: 240px;max-width: 240px;color: #000000;font-size: 13px;margin: 0;padding: 0;padding-bottom: 20px; outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border: none;display: block;line-height: 100%;"--}}
                        {{--title="Finimize Logo" vspace="0" width="240">--}}
                        <style>
                            a.logo{
                                display: inline-block;
                                width: 300px;
                                margin: 2% 0 0 2%;
                                float: left; }

                            a.logo .www {
                                /*width: 20%;*/
                                -webkit-animation: bounce 2.1s linear infinite alternate;
                                -moz-animation: bounce 2.1s linear infinite alternate;
                                -ms-animation: bounce 2.1s linear infinite alternate;
                                -o-animation: bounce 2.1s linear infinite alternate;
                                animation: bounce 2.1s linear infinite alternate;
                            }/* this comes last */
                            .logo .w {
                                /*width: 20%;*/
                                /*-webkit-animation: bounce 2.2s infinite;*/
                                /*animation: bounce 2.2s infinite;*/
                                -webkit-animation: bounce 2s linear infinite alternate;
                                -moz-animation: bounce 2s linear infinite alternate;
                                -ms-animation: bounce 2s linear infinite alternate;
                                -o-animation: bounce 2s linear infinite alternate;
                                animation: bounce 2s linear infinite alternate; /* this comes last */

                            }
                        </style>

                        <a class="logo" >
                            <img class="w" src="{{asset('images/welcome/gymx_logo_2.png')}}" alt="">
                            <img class="ww" src="{{asset('images/welcome/gymx_logo_3.png')}}" alt="">
                            <img class="www" src="{{asset('images/welcome/gymx_logo_2.png')}}" alt="">
                        </a>
                    </td>
                </tr>
                <!-- End of WRAPPER -->
            </table>
            <!-- WRAPPER / CONTAINER -->
            <!-- Set container background color -->
            <table border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" width="550" style="border-collapse: collapse;border-spacing: 0;padding: 0;width: inherit;max-width: 550px;background-color: #ffffff;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-radius: 6px;-webkit-border-radius: 6px;-moz-border-radius: 6px;-khtml-border-radius: 6px;"
                   class="container">
                <!-- HEADER -->
                <tr>
                    <td align="right" valign="top" style="-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;border-collapse: collapse !important;"></td>
                </tr>
                <!-- LOGO IMAGE -->
                <tr>
                    <td align="center" valign="top" style="border-collapse: collapse;border-spacing: 0;margin: 0;padding: 0;padding-top: 40px;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"
                        class="hero">
                        <img align="none" alt="Thanks!" src="{{asset('/images/thanks.png')}}" style="display: block !important; width: 80% !important;max-width: 500px !important;color: #000000;height: auto !important; margin: 0;padding: 0;padding-bottom: 0px; outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border: none;display: block;line-height: 100%;"
                             width="300">
                    </td>
                </tr>
                <!-- BODY CONTENT -->
                <tr>
                    <td align="left" valign="top" style="border-collapse: collapse;border-spacing: 0;margin: 0;padding: 0;padding-left: 6.25%;padding-right: 6.25%;width: 87.5%;font-size: 14px;font-weight: 400;line-height: 1.5 !important;text-align: left !important;padding-top: 30px;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
                        <p style="font-size: 18px;font-weight: 400;margin: 0px;padding: 0px;line-height: 1.5;-webkit-font-smoothing: antialiased;color: rgb(90, 90, 90) !important;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">Hey&nbsp;Sir!</p>
                        <p style="font-size: 18px;font-weight: 400;margin: 0px;padding: 0px;line-height: 1.5;-webkit-font-smoothing: antialiased;color: rgb(90, 90, 90) !important;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                            <br>Thanks for staying with us! With your guidance our Database Project is done and now that's pretty awesome.
                            <br>
                            <br>We wanted to invite you to&nbsp;become the First user of <strong>GYMX</strong> and<strong>&nbsp;</strong>live the #HealthyLife with exclusive content&nbsp;and perks such as:</p>
                        <ul>
                            {{--<li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Access to premium content like&nbsp;our&nbsp;Free Chat--}}
                            {{--</li>--}}
                            <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Early preview of the GYMX Website before it hits the Internet 😱</li>
                            <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Early preview of the GYMX Android App(Coming This Thursday)</li>
                            <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Sneak peeks of new features and apps</li>
                            <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">GYMX swag</li>
                            <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Full Mobile Friendly Website</li>
                            <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">All Latest Tech and Security Essentials</li>
                            <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Other Secret Benefits 😉</li>
                        </ul>
                        <div style="font-size: 18px;font-weight: 400;margin: 0px;padding: 0px;line-height: 1.5;-webkit-font-smoothing: antialiased;color: rgb(90, 90, 90) !important;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">&nbsp;</div>
                        <div style="font-size: 18px;font-weight: 400;margin: 0px;padding: 0px;line-height: 1.5;-webkit-font-smoothing: antialiased;color: rgb(90, 90, 90) !important;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><strong>Q:&nbsp;</strong>So how do you sign up?&nbsp;</div>
                        <p style="font-size: 18px;font-weight: 400;margin: 0px;padding: 0px;line-height: 1.5;-webkit-font-smoothing: antialiased;color: rgb(90, 90, 90) !important;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><strong>A:</strong>&nbsp;Just click the link bellow&nbsp;and register by confirming your email address.
                            we&rsquo;ll take care of the rest - it&rsquo;s that easy. &nbsp;
                            <br>
                            {{--<br>To sweeten the deal, each friend you refer will also get 3 months of free Insider access by signing up with your code.--}}
                            <br>
                            <br>
                            <em>Ready to enjoy the #HealthyLife?</em>
                        </p>
                        <div style="-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;">&nbsp;</div>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;border-collapse: collapse !important;">
                            <tbody>
                            <tr>
                                <td style="-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;border-collapse: collapse !important;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" style="-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;border-collapse: collapse !important;">
                                        <tbody>
                                        <tr>
                                            <td bgcolor="#38B069" style="border-top-left-radius: 3px;border-top-right-radius: 3px;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;border-collapse: collapse !important;">
                                                <a href="{{url('/')}}" style="font-size: 16px;font-family: Helvetica, Arial, sans-serif;color: #ffffff;text-decoration: none;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;padding: 12px 18px;border: 1px solid #38B069;display: block;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;"
                                                   target="_blank">Become The First User &rarr;</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div style="-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;">
                            <br>
                            <br>
                            <div style="font-size: 18px;font-weight: 400;margin: 0px;padding: 0px;line-height: 1.5;-webkit-font-smoothing: antialiased;color: rgb(90, 90, 90) !important;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><strong>Q:&nbsp;</strong>What technology we use?&nbsp;</div>


                            <ul>
                                {{--<li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Access to premium content like&nbsp;our&nbsp;Free Chat--}}
                                {{--</li>--}}&nbsp;
                                <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">For back-end: <ol>
                                        <li>HTML</li>
                                        <li>SASS</li>
                                        <li>CSS</li>
                                        <li>JAVASCRIPT</li>
                                        <li>RUBY(For Compiling SASS)</li>
                                    </ol> </li>
                                <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Graphic Pre-Processor: <strong>SASS</strong></li>
                                <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">For back-end: <ol>
                                        <li>PHP</li>
                                        <li>LARAVEL(Framework)</li>
                                    </ol> </li>
                                <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Version Control: <strong>git</strong></li>
                                <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Deployment: <strong>HEROKU</strong></li>
                                <li style="font-size: 18px; font-weight: 400; margin: 0px; padding: 0px; line-height: 1.5; -webkit-font-smoothing: antialiased; color: rgb(90, 90, 90) !important;">Database: <strong>postgresql</strong></li>
                            </ul>
                            <a target="_blank" style="-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;color: #4EB9E7;">
                                <img align="none" src="{{asset('/images/tech.jpg')}}" style="width: 100% !important;max-width: 500px !important;height: auto !important;margin: 0;padding: 0;outline: none;border: 0;line-height: 100%;text-decoration: none;-ms-interpolation-mode: bicubic;"
                                     width="300">
                            </a>
                            <p style="font-size: 18px;margin: 0px;padding: 0px;line-height: 1.5;-webkit-font-smoothing: antialiased;color: rgb(90, 90, 90) !important;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                <br>
                                <span style="line-height:1.5">Thanks for all your support!</span>
                            </p>
                            <p style="font-size: 18px;font-weight: 400;margin: 0px;padding: 0px;line-height: 1.5;-webkit-font-smoothing: antialiased;color: rgb(90, 90, 90) !important;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                <br>
                                <img align="none" height="60" src="{{asset('images/transfrent.png')}}" style="width: 200px;height: 60px;margin: 0px;border: 0;line-height: 100%;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;"
                                     width="200">
                                <br>- Shahariar Rabby&nbsp;
                                <br>-151-15-5424
                                <br>-Team Semicolon <strong>;</strong>
                                <br>&nbsp;</p>
                        </div>
                    </td>
                </tr>
                <!-- FIN IMAGE -->
                <tr>
                    <td align="center" valign="top" style="border-collapse: collapse;border-spacing: 0;margin: 0;padding: 0;padding-top: 0px;padding-bottom: 3px;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"
                        class="">
                        <br>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center" valign="top" style="border-collapse: collapse;border-spacing: 0;margin: 0;padding: 0;padding-left: 6.25%;padding-right: 6.25%;width: 87.5%;font-size: 17px;font-weight: 400;line-height: 160%;padding-top: 0px;padding-bottom: 0px;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"></td>
                </tr>
                <!-- End of WRAPPER -->
            </table>
            <!-- WRAPPER -->
            <!-- Set wrapper width (twice) -->
            <table border="0" cellpadding="0" cellspacing="0" align="center" width="560" style="border-collapse: collapse;border-spacing: 0;padding: 0;width: inherit;max-width: 560px;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: 150%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"
                   class="wrapper">
                <!-- FOOTER -->
                <!-- Email Footer : BEGIN -->
                <tr>
                    <td class="footer" style="padding: 40px 10px;width: 100%;font-size: 12px;font-family: sans-serif;mso-height-rule: exactly;line-height: 18px;text-align: center;color: #276f8e;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;border-spacing: 0;border-collapse: collapse !important;">
                        {{--You signed up to this mailing list at--}}
                        {{--<a class="footerlink" href="http://www.finimize.com" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;text-decoration: underline;color: #276f8e !important;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;line-height: 150%;">finimize.com</a>--}}
                        {{--<br>Finimize Ltd., 6th Floor, 2 Grand Canal Square, Dublin 2, Ireland--}}
                        {{--<br>--}}
                        {{--<br>--}}
                        {{--<span>All content provided by the Finimize Ltd. is for informational and educational purposes only and is not meant to represent trade or investment recommendations.</span>--}}
                        {{--<br>--}}
                        {{--<br>If you want to unsubscribe from <em>all</em> finimize emails,--}}
                        {{--<a class="footerlink" href="#" style="-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;color: #276f8e !important;-webkit-font-smoothing: antialiased;text-size-adjust: 100%;line-height: 150%;text-decoration: underline;">click here</a>.--}}
                        {{--<br>--}}
                        <br>Copyright &copy; 2017 GYMX, All rights reserved.
                        <br>&nbsp;</td>
                </tr>
                <!-- Email Footer : END -->
                <!-- End of SECTION / BACKGROUND -->
            </table>
        </td>
    </tr>
</table>
</body>

</html>