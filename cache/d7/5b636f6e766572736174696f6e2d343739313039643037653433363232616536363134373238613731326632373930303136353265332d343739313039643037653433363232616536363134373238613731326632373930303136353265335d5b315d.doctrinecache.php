<?php return unserialize('a:2:{s:8:"lifetime";i:1560842072;s:4:"data";a:5:{s:12:"conversation";O:26:"CSSOmembershipconversation":4:{s:12:"' . "\0" . '*' . "\0" . 'firstname";N;s:8:"' . "\0" . '*' . "\0" . 'email";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:38:"s:30:"Hello! What is your firstname?";";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:526:"C:32:"Opis\\Closure\\SerializableClosure":480:{a:5:{s:3:"use";a:0:{}s:8:"function";s:210:"function(\\Answer $answer) {
            // Save result
            $this->firstname = $answer->getText();
            $this->say(\'Nice to meet you \' . $this->firstname);
            $this->askEmail();
        }";s:5:"scope";s:26:"CSSOmembershipconversation";s:4:"this";O:26:"CSSOmembershipconversation":4:{s:12:"' . "\0" . '*' . "\0" . 'firstname";N;s:8:"' . "\0" . '*' . "\0" . 'email";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"000000002a2ac5ff000000004c5688a4";}}";s:4:"time";s:21:"0.64819900 1560840272";}}');