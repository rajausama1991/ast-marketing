<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        $web_name = explode(".", $data->domain_name);
    ?>
    <table cellpadding="0" cellspacing="0" width="100%" style="background-color: #e9eef1; max-width: 350px; margin: 0 auto; font-family: sans-serif;">
        <tr>
            <td align="center" style="padding: 5px;">
                <img src="<?=asset_url();?>dist/img/feedback.webp" alt="" height="70">
            </td>
        </tr>
        <tr>
            <td style="background-color: #ffffffc7; padding: 12px 20px;">
                <h4 style="text-align: center; text-decoration: underline;">Thank You!</h4>
                <div style="font-size: 14px;">
                    <p>Dear <?= $data->user_name ?>,</p>
                    <p>We hope you have been satisfied with our writing services. Your feedback is invaluable to us, and we would greatly appreciate it if you could take a moment to share your thoughts with us.</p>
                    <p>Please click the button below to provide your feedback:</p>
                    <a href="<?= $data->domain_name ?>/login-link/<?= $data->token ?>" target="_blank" style="display: inline-block; background-color: #0073e6; color: #ffffff; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 14px;">Give Feedback</a>
                    <!-- <p><a href="<?= $data->domain_name ?>/login-link/<?= $data->token ?>" style="background-color: #0073e6; color: #ffffff; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">Give Feedback</a></p> -->
                    <p>If you have any questions or concerns, please feel free contact us <a href="<?= $data->domain_name ?>" target="_blank" class="nav-lnk">Live Chat</a></p>
                    <p>Thank you for choosing our writing services!</p>
                </div>
                <div style="font-size: 12px;">
                    <p><b>Kind Regards,</b><br> The Writer Team</p>
                    <p><?= $data->domain_name ?>.</p>
                </div>
            </td>
        </tr>
        <tr>
            <td style="background-color: #e9eef1; padding: 10px 30px;">
                <div style="display: flex; justify-content: center; margin: 20px;">
                    <a href="<?= $data->domain_name ?>" style="color: #1f414c; text-decoration: none;"><?= $data->domain_name ?></a>
                </div>
                <div style="font-size: 12px; text-align: center; color: #787878;">
                    If you no longer wish to receive these emails, please <a href="<?= $data->domain_name ?>/unsubscribe" style="color: #1f414c; text-decoration: none;">Unsubscribe</a>.
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
