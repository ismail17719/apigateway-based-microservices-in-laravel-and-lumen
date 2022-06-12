<?php

namespace App\Http\Controllers\Oauth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ApiResponser;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\Exceptions\OAuthServerException;
use Laravel\Passport\Http\Controllers\AccessTokenController as PassportAccessTokenController;
use Psr\Http\Message\ServerRequestInterface;

class AccessTokenController extends PassportAccessTokenController
{
    use ApiResponser;
    //
    public function issueToken(ServerRequestInterface $request)
    {
        try {
                
                //validate the request
                $validator = Validator::make($request->getParsedBody(),[
                    'grant_type' => "required",
                    'client_id' => "required",
                    'client_secret' => "required",
                    'username' => "required",
                    'password' => "required",
                ]);
                if($validator->fails())
                {
                    //Return failed validation message
                    return $this->response($validator->messages()->first(), Response::HTTP_BAD_REQUEST);
                }
                //get username (default is :email)
                $username = $request->getParsedBody()['username'];

                //get user
                $user = User::where('email', '=', $username)->first();
                //If user does not exist throw an exception
                if( !$user )
                {
                    throw new ModelNotFoundException("User with this email does not exists");
                }
                //Check if the email of the user is verified
                if( !$user->hasVerifiedEmail() )
                {
                    $user->sendEmailVerificationNotification();
                    return $this->response('Your account is not verified. Please check your email for a new verification link.', Response::HTTP_FORBIDDEN);
                }
                //generate token
                $tokenResponse = parent::issueToken($request);

                //convert response to json string
                $content = $tokenResponse->getContent();

                //convert json to array
                $data = json_decode($content, true);

                if(isset($data["error"]))
                    throw new OAuthServerException('The user credentials were incorrect.', 6, 'invalid_credentials', 401);

                return $this->response('Access granted', Response::HTTP_OK, $data);
        }
        catch (ModelNotFoundException $e) { // email not found
            //return error message
            return $this->response('User not found', Response::HTTP_NOT_FOUND);
        }
        catch (OAuthServerException $e) { //password not correct..token not granted
            //return error message
            return $this->response('Invalid user credentials', Response::HTTP_BAD_REQUEST);
        }
        catch (Exception $e) {
            ////return error message
            return $this->response($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    /**
     * Refreshes an access token using a refresh_token provided during access token
     * @param \Psr\Http\Message\ServerRequestInterface
     * @return \Illuminate\Http\JsonResponse
     */
    public function refreshToken(ServerRequestInterface $request)
    {
        
        try {
                //validate the request
                $validator = Validator::make($request->getParsedBody(),[
                    'grant_type' => "required",
                    'client_id' => "required",
                    'client_secret' => "required",
                    'refresh_token' => "required",
                ]);
                if($validator->fails())
                {
                    //Return failed validation message
                    return $this->response($validator->errors(), Response::HTTP_BAD_REQUEST);
                }
                
                //generate token
                $tokenResponse = parent::issueToken($request);

                //convert response to json string
                $content = $tokenResponse->getContent();

                //convert json to array
                $data = json_decode($content, true);

                if(isset($data["error"]))
                    throw new OAuthServerException($data["error"],$tokenResponse);


                return $this->response('Token refreshed.', Response::HTTP_OK, $data);
        }
        catch (OAuthServerException $e) {
            //password not correct..token not granted
            //return error message
            return $this->response($e->getMessage(), Response::HTTP_BAD_REQUEST);
        }
        catch (Exception $e) {
            ////return error message
            return $this->response($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
}
