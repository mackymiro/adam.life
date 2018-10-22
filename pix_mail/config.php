<?php
	$mail_type = 'ce';
	//-----------------------------------------------------------------------------------------
    $to_Email       = 'ask.macky.miro@gmail.com'; //Replace with recipient email address
    $subject        = 'adam.life inquiry '; //Subject line for emails

    // your recaptcha secret key
    $secret = '6Ldb-hETAAAAAG5d9VOKZ4FpJGxLL2VvoDMGeTgL';      // Add your reCAPTCHA secret key
    //-----------------------------------------------------------------------------------------
    
    curl -s --user 'api:key-5747c158517ad8487088319ba669a545' \ 
    https://api.mailgun.net/v3/adam.life/messages \
     -F from='Excited User <excited@samples.mailgun.org>' \
     -F to='ask.macky.miro@gmail.com' \
     -F subject='Hello' \
     -F text='Hello' \
     -F html="<-"
    
    /* Mailchimp setting */
    define('MC_APIKEY', ''); // Your API key from here - http://admin.mailchimp.com/account/api
    define('MC_LISTID', ''); // List unique id from here - http://admin.mailchimp.com/lists/

    /* Campaign Monitor setting. */
    define('CM_APIKEY', ''); // Your APIKEY from here - https://pixfort.createsend.com/admin/account/
    define('CM_LISTID', ''); // List ID from here - https://www.campaignmonitor.com/api/getting-started/#listid

    /* GetResponse setting. To enable a setting, uncomment (remove the '#' at the start of the line)*/
    define('GR_APIKEY', ''); // Your API key from here - https://app.getresponse.com/my_api_key.html
    define('GR_CAMPAIGN', ''); // Campaign name from here - https://app.getresponse.com/campaign_list.html
    
    /* AWeber setting */
    define('AW_AUTHCODE', ''); // Your Authcode from here - https://auth.aweber.com/1.0/oauth/authorize_app/647b2efd
    define('AW_LISTNAME', ''); // List name from here - https://www.aweber.com/users/autoresponder/manage
?>