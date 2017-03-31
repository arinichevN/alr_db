<?php

namespace program;

class geta_description {

    public static function getUser() {
        return ['stranger' => '*'];
    }

    public static function execute() {
        $data = [
            'prog' => []
        ];
         $q = "select id, description from alr.prog order by id asc";
      \db\init(DB_CONNINFO_DATA);
         $r = \db\getData($q);
        while ($row = \db\fetch_assoc($r)) {
            \array_push($data['prog'], [
                'id' => $row['id'],
                'description' => $row['description']
            ]);
        }
        \db\suspend();
         return $data;
    }

}
