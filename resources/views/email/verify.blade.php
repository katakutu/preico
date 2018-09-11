<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Verify Your Account</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  
  <body link="#00a5b5" vlink="#00a5b5" alink="#00a5b5">

<table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
        <tr>
            <td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                    <tr>
                        <td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff;border-bottom: 4px solid #00a5b5">
                            <a href="https://tenable.com"><img class="top-image" src="{{url('logo-hitam.png')}}" style="line-height: 1;width: 200px;"></a>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
                            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                <tr>
                                    <td class="head-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 28px;line-height: 34px;font-weight: bold; text-align: center;">
                                        <div class="mktEditable" id="main_title">
                                            Verify Your Account Information
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"></td>
                                </tr>
                                
                                <tr>
                                    <td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 15px 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 21px;">
                                        <hr size="1" color="#eeeff0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                    <div class="mktEditable" id="main_text">
                                        Hello {{$username}},<br><br>
                                        <p>
                                            Thanks for join our bitxx coin community. Below your account detail :
                                        </p>
                                        <table width="100%">
                                            <tr>
                                                <td width="20%">Username</td>
                                                <td>: {{$username}}</td>
                                            </tr>
                                            <tr>
                                                <td width="20%">E-Mail</td>
                                                <td>: {{$email}}</td>
                                            </tr>
                                        </table>
                                        <p>
                                            Your referral link <br>
                                            <h4>
                                                <i>
                                                    "https://bitxx.co/account/register?reff={{$username}}"
                                                </i>
                                            </h4>
                                        </p>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
                                     &nbsp;<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
                                    <div class="mktEditable" id="download_button" style="text-align: center;">
                                        <p>
                                            <center>
                                                Verify your account now:
                                            </center>
                                        </p>
                                        <a style="color:#ffffff; background-color: #ff8300; border: 20px solid #ff8300; border-left: 20px solid #ff8300; border-right: 20px solid #ff8300; border-top: 10px solid #ff8300; border-bottom: 10px solid #ff8300;border-radius: 3px; text-decoration:none;" href="{{ url('register/verify/' . $confirmation_code) }}">Verify</a>                                       
                                    </div>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    
                    
                    <tr bgcolor="#fff" style="border-top: 4px solid #00a5b5;">
                        <td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
                            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                <tr>
                                    <td class="inside-footer" align="center" valign="middle" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 16px;vertical-align: middle;text-align: center;width: 580px;">
<div id="address" class="mktEditable">
                                        <b>&copy; <?php  echo date('Y'); ?> BITXX COIN</b>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
  </body>
  
  

</body>

</html>
