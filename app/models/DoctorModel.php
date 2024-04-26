<?php

class DoctorModel extends Database
{

    public function getDoctor($username)
    {
        $where = "Username='$username'";
        $this->setTable(Doctors);
        $result = $this->fetchData($where);

        return $result;
    }

    public function getAppoinmentsbyDoctor($id)
    {
        $where = "doctor_id='$id'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);

        return $result;
    }

    public function getAppointment($id)
    {
        $where = "Appointment_Id='$id'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getPatient($id)
    {
        $where = "ID='$id'";
        $this->setTable(Patients);
        $result = $this->fetchData($where);
        return $result;
    }

    public function addPrescription($data)
    {
        $this->setTable(Prescription);
        $result = $this->insertData($data);
        return $result;
    }

    public function getPrescriptionbyDoctor($id)
    {
        $where = "doctorid='$id'";
        $this->setTable(Prescription);
        $result = $this->fetchData($where);
        return $result;
    }


    public function getAppoinmentbyID($id)
    {
        $where = "Appointment_Id='$id'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getPrescriptionbyID($id)
    {
        $where = "prescription_id='$id'";
        $this->setTable(Prescription);
        $result = $this->fetchData($where);
        return $result;
    }

    public function updateAppointmentStatus($id, $data)
    {
       $query = "UPDATE Appointment SET Appointment_Status='$data' WHERE Appointment_Id='$id'";
       $result = $this->executeQuery($query);
       return $result;
    }

    public function getPrescriptionbyAppointment($id)
    {
        $where = "Appointment_Id='$id'";
        $this->setTable(Prescription);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getUpcomingAppoinmentsbyDoctor($id)
    {
        $where = "doctor_id='$id' AND Appointment_Date = CURDATE() AND Appointment_Status='Pending'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

    public function updateprescription($id, $data)
    {
        $query = "UPDATE Prescription SET Medications='$data[Medications]', instructions='$data[instructions]', labtesting='$data[labtesting]' WHERE prescription_id='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    public function updatedoctor($id, $data)
    {
        $query = "UPDATE Doctors SET fullname='$data[fullname]', email='$data[email]', phonenumber='$data[phonenumber]',Username='$data[Username]' WHERE doctor_id='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    public function updatedoctorinuser($id, $data)
    {
        $query = "UPDATE user_db SET Username='$data[Username]',Email='$data[email]' WHERE User_Id='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    public function getUserData($id)
    {
        $where = "User_Id='$id'";
        $this->setTable(User);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getMonthPatientsbyDoctor($id)
    {
        $where = "doctor_id='$id' AND MONTH(Appointment_Date) = MONTH(CURDATE())";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getMonthAppoinmentsbyDoctor($id)
    {
        $where = "doctor_id='$id' AND MONTH(Appointment_Date) = MONTH(CURDATE())";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getTotalAppoinmentsbyDoctor($id)
    {
        $where = "doctor_id='$id'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

    public function deactivateAccount($username)
    {
        $query = "UPDATE Doctors SET 'Status'='Inactive' WHERE 	Username='$username'";
        $result = $this->executeQuery($query);
        return $result;
    }


    public function addMedicine($data)
    {
        $this->setTable(Medicine);
        $result = $this->insertData($data);
        return $result;
    }

    public function getMedicinebyUniqeid($unique_id){
        $where = "unique_id='$unique_id'";
        $this->setTable(Medicine);
        $result = $this->fetchData($where);
        return $result;
        
    }

    public function getAppointmentsbyDoctoronTodayandbetweentimeslots($id,$starttime,$endtime){
        $where = "doctor_id='$id' AND Appointment_Date = CURDATE() AND HOUR(Appointment_Time) >= '$starttime' AND HOUR(Appointment_Time) < '$endtime'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

    
    
}



















?>