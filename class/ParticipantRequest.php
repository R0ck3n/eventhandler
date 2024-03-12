<?php

require_once 'AbstractRequest.php';

class participantRequest extends AbstractRequest {
    protected string $table = "participant";

    public function add(Event $event):void{
        
    }
}