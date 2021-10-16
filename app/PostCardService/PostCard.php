<?php

namespace App\PostCardService;


class PostCard
{
	protected static function resolveFacades($name){

		return app()[$name];
	}

	public static function __callStatic($method, $arguments){

		$resolvedFacade = self::resolveFacades('PostCard')->$method(...$arguments);

		return $resolvedFacade;
		
	}
}