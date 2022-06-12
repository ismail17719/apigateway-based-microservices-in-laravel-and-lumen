<?php

namespace App\Http\Controllers;

use App\Services\CommentService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class CommentServiceController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the notification micro-service
     * @var CommentService
     */
    public $notificationsService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }
    /**
     * Get all notifications in specific date range
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function all(Request $request)
    {
        return $this->successResponse($this->notificationsService->all($request));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Get all notifications for a specific user within a specific date range
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function showAll(Request $request)
    {
        return $this->successResponse($this->notificationsService->showAll($request));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Get all unread notifications for a specific user 
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function showAllUnread(Request $request)
    {
        return $this->successResponse($this->notificationsService->showAllUnread($request));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Get all read notifications for a specific user within a specific date range
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function showAllRead(Request $request)
    {
        return $this->successResponse($this->notificationsService->showAllRead($request));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Get a specific activity log identified by the id
     * @param  \Illuminate\Http\Request
     * @param  $id int id of the activity log
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        return $this->successResponse($this->notificationsService->show($request, $id));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Get all activity notifications that belong to a specific user identified by the userId
     * @param  \Illuminate\Http\Request
     * @param  $userId int id of the user
     * @param  $type String id of the user
     * @return \Illuminate\Http\JsonResponse
     */
    public function showByType(Request $request, $type)
    {
        return $this->successResponse($this->notificationsService->showByType($request, $type));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Stores a user activity log in database
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        return $this->successResponse($this->notificationsService->store($request));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Updates status of a notification
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function markRead(Request $request, $id)
    {
        return $this->successResponse($this->notificationsService->markRead($request, $id));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Updates status of all notifications for a user
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function markReadAll(Request $request)
    {
        return $this->successResponse($this->notificationsService->markReadAll($request));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Deletes a user activity log from database
     * @param  \Illuminate\Http\Request
     * @param  $id int id of the activity log
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request, $id)
    {
        return $this->successResponse($this->notificationsService->delete($request, $id));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Deletes a user notification from database
     * @param  \Illuminate\Http\Request
     * @param  $id int id of the activity log
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteByAdmin(Request $request,  $id)
    {
        return $this->successResponse($this->notificationsService->deleteByAdmin($request, $id));
        //return json_encode(["msg" => "Access completed"]);
    }
    /**
     * Deletes all user's activity notifications from database
     * @param  \Illuminate\Http\Request
     * @param  $userId int id of the user
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteAll(Request $request, $userId)
    {
        return $this->successResponse($this->notificationsService->deleteAll($request, $userId));
    }
}
