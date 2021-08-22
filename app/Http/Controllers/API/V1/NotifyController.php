<?php

namespace App\Http\Controllers\API\V1;

use AfricasTalking\SDK\AfricasTalking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Response;
use App\Models\Client;

class NotifyController extends Controller
{
    public function notify($client_id)
    {

        $client = Client::find($client_id);

        if(!$client_id) {
            return response()->json([
                'type' => 'error',
                'message' => 'Oops!! The client could not be found'
            ]);
        }

        $username = env('AFRICAS_TALKING_USERNAME');
        $apiKey   = env('AFRICAS_TALKING_API');
        $AT       = new AfricasTalking($username, $apiKey);

        $sms      = $AT->sms();
        $result  = $sms->send([
            'to' => $client->phone,
            'message' => 'Hello world'
        ]);

        $responseData = $result['data']->SMSMessageData->Recipients;

        $respose['statusCode'] = $responseData[0]->statusCode;
        $respose['messageId'] = $responseData[0]->messageId;
        $respose['number'] = $responseData[0]->number;
        $respose['cost'] = $responseData[0]->cost;
        $respose['status'] = $responseData[0]->status;

        Response::create($respose);

        return response()->json([
            'type' => 'success',
            'message' => 'Successfully sent the message to the recipient'
        ]);
    }
}
