<?php
namespace host;

class host {
    static function base_url() {
        $base_url="http://".$_SERVER['HTTP_HOST'] . '/gym';
        return ($base_url);
    }
}
?>