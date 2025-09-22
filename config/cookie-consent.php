<?php

// config/cookie-consent.php

return [
    // Is the cookie consent dialog enabled?
    'enabled' => env('COOKIE_CONSENT_ENABLED', true),

    // The name of the cookie that holds the consent status
    'cookie_name' => 'laravel_cookie_consent',

    // The text for the accept button
    'accept_button_text' => 'Accept',

    // The text for the refuse button
    'refuse_button_text' => 'Refuse',

    // The title of the dialog
    'title' => 'Manage Cookie Consent',

    // The text of the dialog
    'text' => 'This website uses cookies to ensure you get the best experience on our website.',
    
    // The policy link
    'policy_url' => '/privacy-policy', // Change this to your privacy policy page
    'policy_link_text' => 'Learn More',

    // How long the consent cookie is valid in days
    'cookie_lifetime' => 365,
];