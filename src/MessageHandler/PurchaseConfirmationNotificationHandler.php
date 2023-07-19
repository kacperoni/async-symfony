<?php

namespace App\MessageHandler;

use App\Message\PurchaseConfirmationNotification;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class PurchaseConfirmationNotificationHandler
{
    public function __invoke(PurchaseConfirmationNotification $notification)
    {
        echo "Creating PDF contract note...<br>";

        echo "Emaling contract note to ". $notification->getOrder()->getBuyer()->getEmail() . "<br>";
    }
}
