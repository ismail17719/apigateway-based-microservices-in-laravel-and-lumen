<?php

namespace App\Services;

/**
 * This service is for gateway wide operations
 */
class GatewayService
{
    
    /**
     * Get the id of the request generating user
     * This method is necessary for services that are hybrid
     */
    public static function getUserId($request)
    {
        //Check if user has connected the old database
        $userId = $request->user()->id;
        if($request->user()->old_id)
        {
            //If the old db is connected use the old db id
            $userId = $request->user()->old_id;                
        }
        return $userId;
    }
    
}