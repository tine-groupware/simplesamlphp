<?php

declare(strict_types=1);

namespace SimpleSAML\Utils;

use SimpleSAML\Auth as Authentication;
use SimpleSAML\Error;
use SimpleSAML\Session;

/**
 * Auth-related utility methods.
 *
 * @package SimpleSAMLphp
 */
class Auth
{
    /**
     * Retrieve an admin logout URL.
     *
     * @param string|null $returnTo The URL the user should arrive on after admin authentication. Defaults to null.
     *
     * @return string A URL which can be used for logging out.
     * @throws \InvalidArgumentException If $returnTo is neither a string nor null.
     */
    public function getAdminLogoutURL(?string $returnTo = null): string
    {
        $as = new Authentication\Simple('admin');
        return $as->getLogoutURL($returnTo);
    }


    /**
     * Check whether the current user is admin.
     *
     * @return boolean True if the current user is an admin user, false otherwise.
     *
     */
    public function isAdmin(): bool
    {
        $session = Session::getSessionFromRequest();
        return $session->isValid('admin') || $session->isValid('login-admin');
    }
}
