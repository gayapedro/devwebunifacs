<?php

    function guidv4($data = null) {

        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);


        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);

        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }
?>