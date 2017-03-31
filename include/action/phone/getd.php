<?php

namespace phone;

class getd {

    public static function getUser() {
        return ['stranger' => '*'];
    }

    public static function execute() {
        $data = [];
        $q = "select distinct group_id from phone_number order by group_id asc";
        \db\init(DB_PATH_PUBLIC);
        $data = \db\getDataAll($q);
        \db\suspend();
        return $data;
    }

}
