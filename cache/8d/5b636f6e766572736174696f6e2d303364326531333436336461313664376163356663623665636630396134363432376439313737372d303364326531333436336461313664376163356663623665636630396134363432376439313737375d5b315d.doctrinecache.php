<?php return unserialize('a:2:{s:8:"lifetime";i:1560850633;s:4:"data";a:5:{s:12:"conversation";O:21:"registrarConversation":3:{s:7:"' . "\0" . '*' . "\0" . 'name";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:33:"s:25:"Hello! What is your name?";";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:508:"C:32:"Opis\\Closure\\SerializableClosure":462:{a:5:{s:3:"use";a:0:{}s:8:"function";s:225:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            // Save result
            $this->name = $answer->getText();
            $this->say(\'Hello \' . $this->name);
            $this->askBeAMember();
        }";s:5:"scope";s:21:"registrarConversation";s:4:"this";O:21:"registrarConversation":3:{s:7:"' . "\0" . '*' . "\0" . 'name";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"0000000076e1db79000000007bbaf453";}}";s:4:"time";s:21:"0.85454800 1560848833";}}');