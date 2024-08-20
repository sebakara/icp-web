<?php

namespace App\Http\Controllers;

use App\Packages\Application\CustomerSupport\All\AllMessages;
use App\Packages\Application\CustomerSupport\Create\CreateMessageRequest;
use App\Packages\Application\CustomerSupport\Create\CreateMessageService;
use App\Packages\Application\CustomerSupport\Delete\DeleteMessageService;
use App\Packages\Application\CustomerSupport\Find\FindOneMessageService;
use App\Packages\Application\ICP_Services\GetOneService\GetServiceRequest;
use Illuminate\Http\Request;

class CustomerSupportCustomer extends Controller
{
    public function allMessages(AllMessages $allMessages){
        return $allMessages->getAllMessages();
    }

    public function createMessage(Request $request, CreateMessageService $createMessageService){
        $messageRequest = new CreateMessageRequest($request);
        $createMessageService->createMessage($messageRequest);

        return response('OK', 200);
    }

    public function findMessage(Request $request, FindOneMessageService $findOneMessageService){
        $messageRequest = new GetServiceRequest($request);
        return  $findOneMessageService->findOneMessage($messageRequest);
    }

    public function deleteMessage(Request $request, DeleteMessageService $deleteMessageService){
        $messageRequest = new GetServiceRequest($request);
        return $deleteMessageService->deleteMessage($messageRequest);
    }
}
