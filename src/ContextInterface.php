<?php

declare(strict_types=1);

namespace Jasny\Auth;

/**
 * Entity used as context for auth.
 */
interface ContextInterface
{
    /**
     * Get context id
     *
     * @return mixed
     */
    public function getAuthContextId();
}