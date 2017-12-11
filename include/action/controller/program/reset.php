<?php

namespace controller\program;

class reset {

    public static function getUser() {
        return ['stranger' => '*'];
    }

    public static function execute($p) {
        \acp\requestSendI1List(ACP_CMD_PROG_RESET, $p);
    }

}
