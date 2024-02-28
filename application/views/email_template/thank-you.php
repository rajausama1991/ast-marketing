<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Welcome to All Star Technologies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @media only screen and (max-width: 600px) {
      .responsive-table {
        width: 100% !important;
      }
      .email-content {
        padding: 20px !important;
      }
    }
  </style>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f6f9ff;">
  <table class="responsive-table" width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="max-width: 600px; margin: 0 auto;">
    <tr>
      <td style="padding: 20px;" class="email-content">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" >
              <img src="https://marketing.allstartechnologies.co.uk/assets/images/email-logo.png" alt="Logo" style="max-width: 300px; width: 100%; display: block; margin: 0 auto;">
            </td>
          </tr>
          <tr>
            <td align="center" style="padding: 5px 0;">
              <h1 style="font-size: 14px; color: #0d6bb8;"><?=isset($subject)? $subject:'Welcome to All Star Technologies'?></h1>
            </td>
          </tr>
          <tr>
            <td style="padding: 0 20px;">
              <div style="font-size: 16px; color: #444; line-height: 24px; text-align: justify;">
                <p> Hi <b><?=isset($user_name)? $user_name:''?></b>,</p>
                <p>Thank you for contacting All Star Technologies about your online marketing needs! Please know that we are honored to have you as a potential client and we hope that our services will be a great fit for your business.</p>
                <p>One of our scheduling team members will be in touch to set up a meeting with your Marketing Consultant. In that meeting, we will first listen and learn about you and your business, and then share with you how we believe we can help you grow.</p>
                <p>I appreciate your time and look forward to working together.</p>
                <p>Regards,</p>
                <p>Team All Star Technologies.</p>
            </div>
            </td>
          </tr>
          <tr>
            <td align="center" style="padding: 20px 0;">
              <img src="https://marketing.allstartechnologies.co.uk/assets/images/email-logo.png" alt="Footer Logo" style="max-width: 100px; width: 100%; display: block; margin: 0 auto;">
            </td>
          </tr>
          <tr>
            <td align="center" style="padding: 20px 0;">
              <p style="font-size: 14px; color: #072973;">
                <img src="https://marketing.allstartechnologies.co.uk/assets/images/ph.webp" alt="Phone Icon" style="vertical-align: middle;"> <a href="tel:+441892710953" style="color: #072973; text-decoration: none;">+44 189 271 0953</a> |
                <img src="https://marketing.allstartechnologies.co.uk/assets/images/wt.webp" alt="WhatsApp Icon" style="vertical-align: middle;"> <a href="https://wa.me/+447546546381" style="color: #072973; text-decoration: none;">+44 754 654 6381</a> |
                <a href="mailto:info@allstartechnologies.co.uk" style="color: #072973; text-decoration: none;">info@allstartechnologies.co.uk</a>
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>
