<?php

class PatientModel extends Database
{
    public function getUsersDetails()
    {
        // session_start();
        $where = "1";
        $this->setTable('patients');
        $data = $this->fetchUsers($where);
        // $where1 = "1";
        // $this->setTable('patients');
        // $data = $this->fetchData($where);
        $users = [];
        // $i = 0;
        for ($i = 0; $i < sizeof($data); $i++) {
            $users[$i]['age'] = $data[$i]['age'];
            $users[$i]['gender'] = $data[$i]['gender'];
            $users[$i]['id'] = $data[$i]["ID"];
            $users[$i]['userName'] = $data[$i]["Username"];
            $users[$i]['type'] = $data[$i]['type'] ?? 'unregister';
            $users[$i]['phonenumber'] = $data[$i]['phonenumber'];

            $users[$i]['email'] = $data[$i]['Email'];
            // $i++;
        }
        // print_r($users);
        return $users;
    }
    public function getUserDetails($id)
    {

        $where = "ID=" . $id;
        $this->setTable('patients');
        $data = $this->fetchUsers($where);
        $users = [];
        $i = 0;
        foreach ($data as $row) {
            $users['age'] = $row['age'];
            $users['gender'] = $row['gender'];
            $users['id'] = $row["ID"];
            $users['userName'] = $row["Username"];
            $users['type'] = $row['type'] ?? 'unregister';
            $users['phonenumber'] = $row['phonenumber'];

            $users['email'] = $row['Email'];
            $i++;
        }
        return $users;
    }
}
