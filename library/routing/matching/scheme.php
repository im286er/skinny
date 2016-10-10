<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2012 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */

class lib_routing_matching_scheme implements lib_routing_matching_interface
{

	/**
	 * Validate a given rule against a route and request.
	 *
	 * @param  \Illuminate\Routing\Route  $route
	 * @param  \Illuminate\Http\Request  $request
	 * @return bool
	 */
    public function matches(lib_routing_route $route, lib_http_request $request)
	{
		if ($route->httpOnly())
		{
			return ! $request->secure();
		}
		elseif ($route->secure())
		{
			return $request->secure();
		}

		return true;
	}

}
