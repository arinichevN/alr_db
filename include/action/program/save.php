<?php

namespace program;

class save {

    public static function getUser() {
        return ['stranger' => '*'];
    }

    public static function execute($p) {
        $r = true;
        \db\init(DB_PATH_DATA);
        foreach ($p as $v) {
            $q = "update prog set description='{$v['description']}', good_value={$v['good_value']}, good_delta={$v['good_delta']}, check_interval={$v['check_interval']}, cope_duration={$v['cope_duration']}, phone_number_group_id={$v['phone_number_group_id']}, sms={$v['sms']}, ring={$v['ring']} where id={$v['id']}";
            $r = $r && \db\commandF($q);
        }
        if (!$r) {
            \db\suspend();
            throw new \Exception('some of updates failed');
        }
        \db\suspend();
    }

}
