<?php return unserialize('a:2:{s:8:"lifetime";i:1560843960;s:4:"data";a:5:{s:12:"conversation";O:26:"CSSOmembershipconversation":3:{s:7:"' . "\0" . '*' . "\0" . 'name";s:4:"gene";s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:43:"s:35:"Do you want to be a member of CSSO?";";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:698:"C:32:"Opis\\Closure\\SerializableClosure":652:{a:5:{s:3:"use";a:0:{}s:8:"function";s:396:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
        $continue = strtolower(trim($answer->getText()));
        
        if($continue===\'yes\'){
            
        } elseif ($continue===\'no\') {
            $this->say(\'Nice meeting you \'.$this->name.\'. Goodbye!\');
        
    } else {
    $this->say(\'I did not understand what you say\');
    $this->askBeAMember();
    }
        }";s:5:"scope";s:26:"CSSOmembershipconversation";s:4:"this";O:26:"CSSOmembershipconversation":3:{s:7:"' . "\0" . '*' . "\0" . 'name";s:4:"gene";s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"000000006eb499750000000078ba3568";}}";s:4:"time";s:21:"0.21604900 1560842160";}}');