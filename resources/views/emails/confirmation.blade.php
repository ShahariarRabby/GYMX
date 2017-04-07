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



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta content="yes" name="apple-touch-fullscreen" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>GYMX Subscripions</title>
    <style type="text/css">
        a:link {text-decoration: none;} a:visited {text-decoration: none;} a:hover {text-decoration: none;} a:active {text-decoration: none; text-align: center;} /*these are fixes from htmlemailboilerplate.com */ /* Outlook link fix */ #outlook a { padding:0; } /* Formatting */ body{ width:100% !important; -webkit-text; size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; background-color: #DEDEDE; } .ReadMsgBody { width: 100%; } .backgroundTable {margin:0 auto; padding:0; width:100%;!important;} table td {border-collapse: collapse;} /* Hotmail background & line height fixes */ .ExternalClass {width:100% !important;} .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Image borders & formatting */ img { outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;} a img {border:none;} /* Re-style iPhone automatic links (eg. phone numbers) */ .applelinks a { color:#FFFFFF; text-decoration: none;} /* Hotmail symbol fix for mobile devices */ .ExternalClass img[class^=Emoji] { width: 10px !important; height: 10px !important; display: inline !important;} a { color:#006699;} /* Outlook 2013 spacing fix */ table td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;} }
    </style>
</head>

<body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
<center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">
    <div align="center">
        <table width="100%" height="100%" align="center" cellpadding="0" border="0" cellspacing="0" style="Margin:0 auto;width:100%;">
            <tr>
                <td bgcolor="#DEDEDE" valign="top" align="center" style="background-position: top center">
                    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="300" height="10"></td>
                            <td width="300" height="10"></td>
                        </tr>
                        <tr>
                            <td width="300" height="26" align="left">

                            </td>
                            <td width="300" height="26" align="right">
                            </td>
                        </tr>
                        <tr>
                            <td width="300" height="10"></td>
                            <td width="300" height="10"></td>
                        </tr>
                    </table>
                    <table width="600" border="0" align="center" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="30" align="center" valign="top"></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="540" bgcolor="#57BFBA" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td height="50" align="center" valign="top"></td>
                                    </tr>
                                    <tr>
                                        <td height="90" align="center" valign="top">

                                            <img src="{{asset('images/hello.jpg')}}" width="400" height="167" border="0" />

                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="180" align="center" valign="middle" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; color:#FFFFFF; padding-left: 20px; padding-right: 20px"> <span style="font-weight: bold; font-size: 20px"><h1>Thanks For Joining!</h1></span>
                                            <br />Please confirm that you want to use this as your
                                            email address. Once it's done you will be able to start enjoying <b>GYMX!</b></td>
                                    </tr>
                                    <tr>
                                        <td height="50" align="center" valign="middle" style="font-size: 30px; font-family: Arial, Helvetica, sans-serif; text-decoration: none; font-weight: bold; color:#000013;">
                                            <a href="{{url('/')}}" target="_blank">
                                                <img src="{{asset('images/emailcon.jpg')}}" width="500" height="382" border="0" />
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="20" align="center" valign="top"></td>
                                    </tr>
                                </table>
                                <table width="540" bgcolor="#57BFBA" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="107" height="50" align="right" valign="middle" style="font-size: 21px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; color:#FFFFFF;">Click</td>
                                        <td width="74" align="center" valign="middle">
                                            <a href="{{route('confirmation',$token) }}" target="_blank">
                                                <img src="{{asset('images/click.jpg')}}" width="56" height="60" border="0" />
                                            </a>
                                        </td>
                                        <td width="359" align="left" valign="middle" style="font-size: 21px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; color:#FFFFFF;">to active your <strong>GYMX</strong> account</td>
                                    </tr>
                                </table>
                                <table width="540" bgcolor="#57BFBA" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td height="30" align="center" valign="top"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="30" align="center" valign="top"></td>
                        </tr>
                    </table>
                    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="10" align="center" valign="middle"></td>
                            <td height="10" align="center" valign="middle"></td>
                        </tr>
                        <tr>
                            <td width="115" height="40" align="center" valign="middle">
                                <img src="{{asset('images/welcome/logoblk.png')}}" width="100%" height="32" border="0" />
                            </td>
                            <td width="485" align="center" style="font-family: Arial, Helvetica, sans-serif; color: #333333; font-weight: bold; font-size: 10px; padding: 15px">If you are unable to see the image click Or paste the link bellow into your browser to active your account
                                <br><a style="color:#666d74;text-decoration:none;" href="{{route('confirmation',$token) }}" target="_blank">{{route('confirmation',$token) }}</a>
                        </tr>
                    </table>
                    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="27" align="center" style="font-family: Arial, Helvetica, sans-serif; color: #333333; font-weight: bold; font-size: 10px; padding: 15px">This message was sent to {{$email}}; We hope you found it relevant. However, if you think this is a mistake, then please ignore this Email. Click
                                <a href="{{url('/')}}" target="_blank">here</a> to get more information about GYMX.
                            </td>
                        </tr>
                        <tr>
                            <td height="60"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div style="display:none; white-space:nowrap; font:15px courier; color:#ffffff;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</div>
</center>

</body>

</html>