<?php //-->
/*
 * This file is part of the Core package of the Eden PHP Library.
 * (c) 2013-2014 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE
 * distributed with this package.
 */

namespace Eden\Persistent;

/**
 * Core Factory Class
 *
 * @vendor Eden
 * @package Core
 * @author Christian Blanquera cblanquera@openovate.com
 */
class Factory extends Base
{
    const INSTANCE = 1;
	
	/**
     * Returns the cookie class
     *
     * @return Eden\Persistent\Cookie
     */
    public function cookie()
    {
        return Cookie::i();
    }
	
	/**
     * Returns the oauth2 class
     *
     * @return Eden\Persistent\Session
     */
    public function session()
    {
        return Session::i();
    }
}