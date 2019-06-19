<?php return unserialize('a:2:{s:8:"lifetime";i:1560917045;s:4:"data";a:5:{s:12:"conversation";O:21:"registrarConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:10:"2000000000";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:447:"O:40:"BotMan\\BotMan\\Messages\\Outgoing\\Question":4:{s:10:"' . "\0" . '*' . "\0" . 'actions";a:2:{i:0;a:6:{s:4:"name";s:3:"Yes";s:4:"text";s:3:"Yes";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:1:"y";s:10:"additional";a:0:{}}i:1;a:6:{s:4:"name";s:2:"No";s:4:"text";s:2:"No";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:1:"n";s:10:"additional";a:0:{}}}s:7:"' . "\0" . '*' . "\0" . 'text";s:30:"Hello (name:2000000000from db)";s:14:"' . "\0" . '*' . "\0" . 'callback_id";N;s:11:"' . "\0" . '*' . "\0" . 'fallback";N;}";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:675:"C:32:"Opis\\Closure\\SerializableClosure":629:{a:5:{s:3:"use";a:0:{}s:8:"function";s:356:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === \'y\') {
                $this->askCategory();
            } elseif ($continue === \'n\') {
                $this->say(\'Retype your Student number\');
                $this->askName();
            }
        }";s:5:"scope";s:21:"registrarConversation";s:4:"this";O:21:"registrarConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:10:"2000000000";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"00000000288ba73800000000263679ac";}}";s:4:"time";s:21:"0.41041200 1560915245";}}');