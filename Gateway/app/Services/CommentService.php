<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class CommentService
{
    use ConsumeExternalService;

    /**
     * The base uri to consume authors service
     * @var string
     */
    public $baseUri;

    /**
     * Authorization secret to pass to author api
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.notifications.base_uri');
        $this->secret = config('services.notifications.secret');
    }


    
    /**
     * Requests Notifications Microservice to get all log activities within a specific date range
     */
    public function all($request)
    {
        return $this->performRequest('POST', '/all',$request->all(), $request->headers->all());
    }
    /**
     * Requests Notifications Microservice to get all Notifications entries for a particular user
     */
    public function showAll($request)
    {
        return $this->performRequest('POST', '/show-all',array_merge($request->all(), ['user_id' => $request->user()->id]) , $request->headers->all());
    }
    /**
     * Requests Notifications Microservice to get all Notifications entries for a particular user
     */
    public function showAllUnread($request)
    {
        return $this->performRequest('POST', '/show-all-unread', array_merge($request->all(), ['user_id' => $request->user()->id]), $request->headers->all());
    }
    /**
     * Requests Notifications Microservice to get all Notifications entries for a particular user
     */
    public function showAllRead($request)
    {
        return $this->performRequest('POST', '/show-all-read', array_merge($request->all(), ['user_id' => $request->user()->id]), $request->headers->all());
    }
    /**
     * Requests Notifications Microservice to get a particular entry of log identified by id
     */
    public function show($request, $id)
    {
        return $this->performRequest('GET', '/show/'.$request->user()->id."/".$id, $request->all(), $request->headers->all());
    }
    /**
     * Requests Notifications Microservice to get all Notifications identified by a specific user for a specific type
     */
    public function showByType($request, $type)
    {
        return $this->performRequest('GET', '/show-by-type/'.$request->user()->id."/".$type, $request->all(), $request->headers->all());
    }
    
    /**
     * Requests Notifications Microservice to store user notification
     */
    public function store($request)
    {
        return $this->performRequest('POST', '/store', array_merge($request->all(), ['user_id' => $request->user()->id]), $request->headers->all());
    }
    /**
     * Requests Notifications Microservice to update status of a notification
     */
    public function markRead($request, $id)
    {
        return $this->performRequest('PATCH', '/mark-read/'.$request->user()->id."/".$id, $request->all(), $request->headers->all());
    }
    /**
     * Requests Notifications Microservice to update status of all notifications for a user
     */
    public function markReadAll($request)
    {
        return $this->performRequest('PATCH', '/mark-read-all/'.$request->user()->id, $request->all(), $request->headers->all());
    }
    /**
     * Requests Notifications Microservice to update an entry in Notifications for  a user
     */
    public function update($request)
    {
        return $this->performRequest('PATCH', '/update',$request->all(), $request->headers->all());
    }
    /**
     * Requests  Notifications API Microservice to delete a user's activity log
     */
    public function delete($request, $id)
    {
        return $this->performRequest('DELETE', '/delete/'.$request->user()->id."/".$id,$request->all(), $request->headers->all());
    }
    /**
     * Requests  Notifications API Microservice to delete a user's activity log
     */
    public function deleteByAdmin($request, $id)
    {
        return $this->performRequest('DELETE', '/delete-by-admin/'.$id,$request->all(), $request->headers->all());
    }
    /**
     * Requests Notifications API Microservice to delete all user's activity Notifications
     */
    public function deleteAll($request, $userId)
    {
        return $this->performRequest('DELETE', '/delete-all/'.$userId,$request->all(), $request->headers->all());
    }
    
}