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
                        <td align="center" style="padding: 20px 0;">
                            <h1 style="font-size: 14px; color: #0d6bb8;"><?= isset($subject) ? $subject : 'Welcome to All Star Technologies' ?></h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 20px;">
                            <div style="font-size: 16px; color: #444; line-height: 24px; text-align: justify;">
                                <p> Marketing Team,</p>
                                <p>I hope this message finds you well. I wanted to bring to your attention that we have received a new lead through our website.</p>
                                <table style="width: 50%; border-collapse: collapse; " border="1">
                                    <tr style="border: 1px solid #dddddd;">
                                        <th colspan="2" style="padding: 8px; text-align: center; border: 1px solid #dddddd;">Lead Details</th>
                                    </tr>
                                    <tr style="border: 1px solid #dddddd;">
                                        <th style="padding: 8px; text-align: left; border: 1px solid #dddddd;">Lead ID:</th>
                                        <td style="padding: 8px; text-align: left; border: 1px solid #dddddd;"><a href="https://admin.usmedicare.net/single-sites/MAST"><?= returnSlug() . '-' . $lead_id ?></a></td>
                                    </tr>
                                    <tr style="border: 1px solid #dddddd;">
                                        <th style="padding: 8px; text-align: left; border: 1px solid #dddddd;">Phone:</th>
                                        <td style="padding: 8px; text-align: left; border: 1px solid #dddddd;"><?= $leads['user_phone'] ?></td>
                                    </tr>
                                    <tr style="border: 1px solid #dddddd;">
                                        <th style="padding: 8px; text-align: left; border: 1px solid #dddddd;">Region:</th>
                                        <td style="padding: 8px; text-align: left; border: 1px solid #dddddd;"><?= $leads['region'] ?></td>
                                    </tr>
                                    <tr style="border: 1px solid #dddddd;">
                                        <th style="padding: 8px; text-align: left; border: 1px solid #dddddd;">Name:</th>
                                        <td style="padding: 8px; text-align: left; border: 1px solid #dddddd;"><?= $leads['user_name'] ?></td>
                                    </tr>
                                    <tr style="border: 1px solid #dddddd;">
                                        <th style="padding: 8px; text-align: left; border: 1px solid #dddddd;">Email:</th>
                                        <td style="padding: 8px; text-align: left; border: 1px solid #dddddd;"><?= $leads['user_email'] ?></td>
                                    </tr>
                                    <tr style="border: 1px solid #dddddd;">
                                        <th style="padding: 8px; text-align: left; border: 1px solid #dddddd;">Services:</th>
                                        <td style="padding: 8px; text-align: left; border: 1px solid #dddddd;"><?= $leads['type_of_service'] ?></td>
                                    </tr>
                                    <tr style="border: 1px solid #dddddd;">
                                        <th style="padding: 8px; text-align: left; border: 1px solid #dddddd;">Description:</th>
                                        <td style="padding: 8px; text-align: left; border: 1px solid #dddddd;"><?= $leads['comments_by_client'] ?></td>
                                    </tr>
                                </table>

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