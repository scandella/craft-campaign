<?php
/**
 * @copyright Copyright (c) PutYourLightsOn
 */

/**
 * Campaign config.php
 *
 * This file exists only as a template for the Campaign settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'campaign.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [
    '*' => [
        // Whether to enable anonymous tracking of opens and clicks
        //'enableAnonymousTracking' => false,

        // Setting to true will save email messages into local files (in storage/runtime/debug/mail) rather than actually sending them
        //'testMode' => false,

        // An API key to use for triggering tasks and notifications (min. 16 characters)
        //'apiKey' => 'aBcDeFgHiJkLmNoP',

        // A webhook signing key used to validate incoming webhook requests
        //webhookSigningKey => 'key-aBcDeFgHiJkLmNoP',

        // The allowed IP addresses for incoming webhook requests from Postmark
        //postmarkAllowedIpAddresses => [
        //    '3.134.147.250',
        //    '50.31.156.6',
        //    '50.31.156.77',
        //    '18.217.206.57',
        //],

        // The AJAX origins that should be allowed to access live preview
        //'allowedOrigins' => [
        //    'https://primary-domain.com',
        //],

        // Whether verification emails should be sent via the Craft mailer, instead of the Campaign mailer
        //'sendVerificationEmailsViaCraft' => false,

        // The names and emails that sendouts can be sent from
        //'fromNamesEmails' => [
        //    ['Zorro','legend@zorro.com','legend@zorro.com',1],
        //    ['Don Diego','dondiego@zorro.com','',1],
        //],

        // The transport type that should be used
        //'transportType' => 'putyourlightson\sendgrid\mail\SendgridAdapter',

        // The transport type’s settings
        //'transportSettings' => ['apiKey' => 'aBcDeFgHiJkLmNoP'],

        // Default notification contact IDs
        //'defaultNotificationContactIds' = [1],

        // Whether the title field should be shown for sendouts
        //'showSendoutTitleField' = false,

        // The maximum size of sendout batches
        //'maxBatchSize' => 10000,

        // The memory usage limit per sendout batch in bytes or a shorthand byte value (set to -1 for unlimited)
        //'memoryLimit' => '1024M',

        // The execution time limit per sendout batch in seconds (set to 0 for unlimited)
        //'timeLimit' => 3600,

        // The threshold for memory usage per sendout batch as a fraction
        //'memoryThreshold' => 0.8,

        // The threshold for execution time per sendout batch as a fraction
        //'timeThreshold' => 0.8,

        // The amount of time in seconds to delay jobs between sendout batches
        //'batchJobDelay' => 10,

        // The maximum number of times to attempt sending a sendout to a single contact before failing
        //'maxSendAttempts' => 3,

        // The maximum number of failed attempts to send to contacts that are allowed before failing the entire sendout
        //'maxSendFailuresAllowed' => 1,

        // The maximum number of times to attempt retrying a failed sendout job
        //'maxRetryAttempts' => 10,

        // The amount of time in seconds to reserve a sendout job
        //'sendoutJobTtr' => 300,

        // The priority to give the sendout cache job (the lower the number, the higher the priority)
        //'sendoutJobPriority' => 10,

        // The amount of time in seconds to reserve an import job
        //'importJobTtr' => 300,

        // The amount of time in seconds to reserve a sync job
        //'syncJobTtr' => 300,

        // Enable GeoIP to geolocate contacts by their IP addresses
        //'geoIp' => false,

        // The ipstack.com API key
        //'ipstackApiKey' => 'aBcDeFgHiJkLmNoP',

        // Enable reCAPTCHA to protect mailing list subscription forms from bots
        //'reCaptcha' => false,

        // The reCAPTCHA site key
        //'reCaptchaSiteKey' => 'aBcDeFgHiJkLmNoP',

        // The reCAPTCHA secret key
        //'reCaptchaSecretKey' => 'aBcDeFgHiJkLmNoP',

        // The reCAPTCHA error message
        //'reCaptchaErrorMessage' => 'Your form submission was blocked. Please go back and verify that you are human.',

        // The maximum number of pending contacts to store per email address and mailing list
        //'maxPendingContacts' => 5,

        // The amount of time to wait before purging pending contacts in seconds or as an interval (0 for disabled)
        //'purgePendingContactsDuration' => 0,

        // Extra fields and their operators that should be available to segments
        //'extraSegmentFieldOperators' => [
        //    'mmikkel\incognitofield\fields\IncognitoFieldType' => [
        //        '=' => 'is',
        //        '!=' => 'is not',
        //        'like' => 'contains',
        //        'not like' => 'does not contain',
        //        'like v%' => 'starts with',
        //        'not like v%' => 'does not start with',
        //        'like %v' => 'ends with',
        //        'not like %v' => 'does not end with',
        //    ]
        //],
    ],
];
