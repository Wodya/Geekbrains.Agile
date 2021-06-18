<?php

namespace App\Service\Real;

use App\Mail\MailClass;
use App\Models\PlantFull;
use App\Models\User;
use App\Service\IDbPlantService;
use Illuminate\Support\Facades\Mail;

class SendEmailService {
    
    public function send(IDbPlantService $dbPlant, $plantId)
    {
        $plant = $dbPlant->getPlant($plantId);
        $usersemail = User ::select('email')->get();
        foreach($usersemail as $email)
        Mail::to($email)->send(new MailClass($plant));
    }
}