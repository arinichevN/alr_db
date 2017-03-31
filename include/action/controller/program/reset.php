<?php

namespace controller\program;

class reset {

    public static function getUser() {
        return ['stranger' => '*'];
    }

    public static function execute($p) {
        \acp\sendPackI1(ACP_CMD_RESET, $p);
    }

}
