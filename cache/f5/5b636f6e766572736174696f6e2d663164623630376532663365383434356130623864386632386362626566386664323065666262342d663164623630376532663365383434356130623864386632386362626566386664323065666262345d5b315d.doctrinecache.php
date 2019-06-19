<?php return unserialize('a:2:{s:8:"lifetime";i:1560852666;s:4:"data";a:5:{s:12:"conversation";O:21:"registrarConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:9:"201900000";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:585:"O:40:"BotMan\\BotMan\\Messages\\Outgoing\\Question":4:{s:10:"' . "\0" . '*' . "\0" . 'actions";a:3:{i:0;a:6:{s:4:"name";s:3:"Add";s:4:"text";s:3:"Add";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:3:"add";s:10:"additional";a:0:{}}i:1;a:6:{s:4:"name";s:4:"Drop";s:4:"text";s:4:"Drop";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"drop";s:10:"additional";a:0:{}}i:2;a:6:{s:4:"name";s:4:"Quit";s:4:"text";s:4:"Quit";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"exit";s:10:"additional";a:0:{}}}s:7:"' . "\0" . '*' . "\0" . 'text";s:16:"do you wish to: ";s:14:"' . "\0" . '*' . "\0" . 'callback_id";N;s:11:"' . "\0" . '*' . "\0" . 'fallback";N;}";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:809:"C:32:"Opis\\Closure\\SerializableClosure":763:{a:5:{s:3:"use";a:0:{}s:8:"function";s:492:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === \'add\') {
                $this->say(\'You chose ADD\');
                $this->askAdd();
            } elseif ($continue === \'drop\') {
                $this->say(\'You chose DROP\');
                $this->askDrop();
            } else {
                $this->say(\'Nice meeting you, Thankyou for using this feature.\');
            }
        }";s:5:"scope";s:21:"registrarConversation";s:4:"this";O:21:"registrarConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:9:"201900000";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"000000005bdb47b2000000007fc9f894";}}";s:4:"time";s:21:"0.08774000 1560850866";}}');