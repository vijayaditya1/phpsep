<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

$metadata['http://localhost/single'] = array(
    'SingleSignOnService'  => 'http://127.0.0.1/simplesaml/saml2/idp/SSOService.php',
    'SingleLogoutService'  => 'http://127.0.0.1/simplesaml/saml2/idp/SingleLogoutService.php',
    'certificate'          => 'saml.pem',
);
