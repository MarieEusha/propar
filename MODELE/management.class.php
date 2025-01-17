<?php 
require_once "../conf/singleton.php";

class Management{
   

    public function __construct()
    {

    }


    /**
    * Description Requête Insert/Update/Delete
        * @param string $sql
        * @param array $values
        *
        * @return int Le dernier id inseré en bdd sur cette table
        */
        public static function executeSql($sql, array $values )
        {
            $db = Singleton::getInstance()->getConnexion();
            $query = $db->prepare($sql);
            $query->execute($values);

            return $db->lastInsertId();
        }

        /**
         * Description Requête Select pour récupérer un ensemble de résultats
         * @param string $sql
         * @param array $criteria
         *
         * @return array Ensemble de résultats
         */
        public static function findAll($sql, array $criteria)
        {
            $db= Singleton::getInstance()->getConnexion();
            $query = $db->prepare($sql);
            $query->execute($criteria);

            return $query->fetchAll();
        }

        /**
         * Descritption Requête Select pour récupérer un seul résultat
         * @param string $sql
         * @param array $criteria
         *
         * @return array Un élément
         */
        public static function findOne($sql, array $criteria)
        {
            $db = Singleton::getInstance()->getConnexion();
            $query = $db->prepare($sql);
            $query->execute($criteria);

            return $query->fetch();
        }

        public static function selectOneEmployee($id_employee){
            $query =
                'SELECT 
                    id_employee,
                    employee.firstname,
                    employee.lastname,
                    employee.mail,
                    id_status
                FROM 
                    employee
                WHERE 
                    id_employee = :id_employee
                ';

            $employee =self::findOne($query,[
                ':id_employee' => $id_employee
            ]);
            return $employee;
        }

        public static function selectAllEmployees(){
            $query =
                'SELECT 
                    id_employee,
                    employee.firstname,
                    employee.lastname,
                    employee.mail,
                    status_emp.label
                FROM 
                    employee
                INNER JOIN
                    status_emp
                ON
                    employee.id_status = status_emp.id_status';

            $employees =self::findAll($query,[]);
            return $employees;
        }

        public static function searchEmployee($login){
            $query = 
            'SELECT
                    *
            FROM 
                employee
            WHERE 
                login = :login';
    
           $employee = self::findOne($query,[
               'login'=> $login
               ]);

               if(empty($employee) == true){
                   return false;
               }else{
                   return $employee;
               }

        }

        
        public static function addEmployee($firstname,$lastname,$login,$password,$mail,$id_status){
            $employee = self::searchEmployee($login);

            $passwordHash = password_hash($password, PASSWORD_BCRYPT);
            
            if($employee == false){
                $query = 
                    'INSERT INTO 
                            employee
                            (firstname,lastname,login,password,mail,id_status)
                        VALUES 
                        (:firstname,:lastname,:login,:password,:mail,:id_status)
                        ';

                self::executeSql($query,[
                    ':firstname' => $firstname,
                    ':lastname' => $lastname,
                    ':login' => $login,
                    ':password' => $passwordHash,
                    ':mail' => $mail,
                    ':id_status' => $id_status,
                ]);
            }
        }

        public static function searchCustomer($mail){
            $query = 
            'SELECT
                    *
            FROM 
                customer
            WHERE 
                mail = :mail';
    
           $customer = self::findOne($query,[
               'mail'=> $mail
               ]);

               if(empty($customer) == true){
                   return false;
               }else{
                   return $customer;
               }

        } 

        public static function addCustomer($firstname,$lastname,$mail){
            $customer = self::searchCustomer($mail);

            if($customer == false){
            $query = 
                'INSERT INTO 
                        customer
                        (firstname,lastname,mail)
                    VALUES 
                    (:firstname,:lastname,:mail)
                    ';

            $newCustomer =self::executeSql($query,[
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':mail' => $mail,
            ]);
            
            return $newCustomer;    
        }
        return $customer['id_customer'];

        }
        public static function selectType(){
            $query =
            'SELECT *
            FROM 
                type';
            $allType = self::findAll($query,[]);
            return $allType; 
        }

        public static function addType($label, $price){ 
            $query = 
                'INSERT INTO
                        type 
                        (label, price)
                    VALUES 
                        (:label, :price)
                        
                    ';
            
            self::executeSql($query,[
                ':label' => $label,
                ':price' => $price
                ]);
            
        }
        public static function  searchTaskInProgressByEmployeeCount($id_employee){
            $query =
                'SELECT 
                    count(id_task) as nb_task
                FROM
                    task
                    
                INNER JOIN
                    employee
                ON 
                    task.id_employee = employee.id_employee    
                WHERE 
                    task.id_employee = :id_employee
                AND 
                status = 2';

            $task = self::findAll($query,[
                'id_employee' => $id_employee
                ]);

                if(empty($task) == true){
                    return false;
                }else{
                    return $task[0]['nb_task'];
                }
        }

        public static function searchTaskInProgressByEmployee($id_employee){
            $query = 
            'SELECT
                    id_task, 
                    task.label as task_label,
                    description,
                    in_progress_date,
                    type.label as type_label,
                    customer.firstname as customer_firstname,
                    customer.lastname as customer_lastname,
                    task.id_employee as task_id_employee,
                    employee.firstname as employee_firstname,
                    employee.lastname as employee_lastname,
                    status
            FROM 
                task
            INNER JOIN
                type
            ON
                task.id_type = type.id_type
            INNER JOIN
                customer
            ON
                task.id_customer = customer.id_customer
            INNER JOIN
                employee
            ON 
                task.id_employee = employee.id_employee    
            WHERE 
                task.id_employee = :id_employee
            AND 
            status = 2

            ORDER BY in_progress_date DESC
            ';
    
           $task = self::findAll($query,[
               'id_employee' => $id_employee
               ]);

               if(empty($task) == true){
                   return false;
               }else{
                   return $task;
               }

        }

        //AFFICHAGE NB SOUS BOUTON
        public static function  searchTaskDoneByEmployeeCount($id_employee){
            $query =
                'SELECT 
                    count(id_task) as nb_task
                FROM
                    task
                    
                INNER JOIN
                    employee
                ON 
                    task.id_employee = employee.id_employee    
                WHERE 
                    task.id_employee = :id_employee
                AND 
                status = 3';

            $task = self::findAll($query,[
                'id_employee' => $id_employee
                ]);

                if(empty($task) == true){
                    return false;
                }else{
                    return $task[0]['nb_task'];
                }
        }

        public static function searchTaskDoneByEmployee($id_employee){
            $query = 
            'SELECT
                    id_task,
                    task.label as task_label,
                    description,
                    ending_date,
                    type.label as type_label,
                    customer.firstname as customer_firstname,
                    customer.lastname as customer_lastname,
                    task.id_employee as task_id_employee,
                    employee.firstname as employee_firstname,
                    employee.lastname as employee_lastname,
                    status
            FROM 
                task
            INNER JOIN
                type
            ON
                task.id_type = type.id_type
            INNER JOIN
                customer
            ON
                task.id_customer = customer.id_customer
            INNER JOIN
                employee
            ON 
                task.id_employee = employee.id_employee    
            WHERE 
                task.id_employee = :id_employee
            AND 
            status = 3

            ORDER BY ending_date DESC
            ';
    
           $task = self::findAll($query,[
               'id_employee' => $id_employee
               ]);

               if(empty($task) == true){
                   return false;
               }else{
                   return $task;
               }

        }

        public static function addTask($label,$description,$id_type,$idCustomer){
            $query = 
                'INSERT INTO 
                        task
                        (label,description,order_date,id_type,id_customer)
                    VALUES 
                    (:label,:description,NOW(),:id_type,:id_customer)
                    ';

            self::executeSql($query,[
                ':label' => $label,
                ':description' => $description,
                ':id_type' => $id_type,
                ':id_customer' => $idCustomer,
            ]);
        }

        public static function deleteEmployee($id_employee){
            $query = 
                'DELETE FROM 
                        employee
                WHERE
                    id_employee = :id_employee
            ';

            self::executeSql($query,[
                ':id_employee'=> $id_employee

            ]);
            
        }

        
        public static function deleteTask($id_task){
            $query = 
                'DELETE FROM 
                        task
                WHERE
                    id_task = :id_task
            ';

            self::executeSql($query,[
                ':id_task'=> $id_task

            ]);
            
        }

        public static function deleteType($id_type){
            $query = (
                'DELETE FROM 
                        type
                WHERE
                    id_type = :id_type
            ');

            self::executeSql($query,[
                ':id_type'=> $id_type

            ]);
            
        }

        public static function updateEmployee($id_employee,$firstname,$lastname,$mail,$id_status){

            $query = 
                'UPDATE 
                    employee
                SET 
                    firstname = :firstname,
                    lastname = :lastname,
                    mail = :mail,
                    id_status = :id_status
                WHERE 
                    id_employee = :id_employee
            ';

            self::executeSql($query,[
                 ':id_employee'=> $id_employee,
                 ':firstname'=> $firstname,
                 ':lastname'=> $lastname,
                 ':mail'=> $mail,
                 ':id_status' => $id_status
            ]);
        }

        public static function selectByIdTask($id_task){
            $query =
                'SELECT 
                    id_task,
                    task.label,
                    description,
                    id_type,
                    task.id_employee,
                    status
                FROM
                    task
                LEFT JOIN
                    employee
                ON 
                    task.id_employee = employee.id_employee
                LEFT JOIN
                    status_emp
                ON
                    employee.id_status = status_emp.id_status
                

                WHERE id_task = :id_task';

                $task =self::findOne($query,[
                    ':id_task' => $id_task
                ]);
            
                return $task;
        }

        public static function updateTask($id_task,$label,$description,$id_type,$id_employee){
        
            $query = 
                'UPDATE 
                    task
                SET 
                    id_task = :id_task,
                    task.label = :label,
                    description = :description,
                    in_progress_date = Now(),
                    id_type = :id_type,
                    id_employee = :id_employee,
                    status = 2
                WHERE 
                    id_task = :id_task
            ';

            self::executeSql($query,[
                 ':id_task'=> $id_task,
                 ':label'=> $label,
                 ':description'=> $description,
                 ':id_type' => $id_type,
                 ':id_employee' => $id_employee

            ]);
        }

        public static function updateType($id_type,$label, $price){
        
            $query = 
                'UPDATE 
                    type
                SET 
                    label = :label,
                    price = :price,
                WHERE 
                    id_type = :id_type
            ';

            self::executeSql($query,[
                 ':id_type'=> $id_type,
                 ':label'=> $label,
                 ':price'=> $price,
            ]);
        }


        public static function displayCreatedTask(){
            $query = 
                'SELECT 
                    id_task,
                    task.label as task_label,
                    description,
                    order_date,
                    type.label as type_label,
                    customer.firstname as customer_firstname,
                    customer.lastname as customer_lastname,
                    status
                    
                FROM task
                INNER JOIN 
                    type
                ON 
                    task.id_type = type.id_type
                INNER JOIN
                    customer 
                ON 
                    task.id_customer = customer.id_customer
                
                WHERE status = 1


                ORDER BY order_date';

            $createdTask = self::findAll($query,[]);

            return $createdTask;
                

        }

        public static function displayInProgress(){
            $query = 
                'SELECT 
                    id_task,
                    task.label as task_label,
                    description,
                    in_progress_date,
                    type.label as type_label,
                    customer.firstname as customer_firstname,
                    customer.lastname as customer_lastname,
                    employee.firstname as employee_firstname,
                    employee.lastname as employee_lastname,
                    status
                    
                FROM task
                INNER JOIN 
                    type 
                ON 
                    task.id_type = type.id_type
                INNER JOIN 
                    customer 
                ON 
                    task.id_customer = customer.id_customer
                LEFT JOIN 
                    employee
                ON 
                    task.id_employee = employee.id_employee

                WHERE status = 2
                ORDER BY in_progress_date';

            $inProgress = self::findAll($query,[]);

            return $inProgress;

        }

        public static function displayTaskDone(){
            $query = 
                'SELECT 
                    id_task,
                    task.label as task_label,
                    description,
                    ending_date,
                    type.label as type_label,
                    customer.firstname as customer_firstname,
                    customer.lastname as customer_lastname,
                    employee.firstname as employee_firstname,
                    employee.lastname as employee_lastname,
                    status
                    
                FROM task
                INNER JOIN type ON task.id_type = type.id_type
                INNER JOIN customer ON task.id_customer = customer.id_customer
                LEFT JOIN employee ON task.id_employee = employee.id_employee

                WHERE status = 3

                ORDER BY ending_date';

            $done = self::findAll($query,[]);

            return $done;

        }

        public static function statusInProgress($id_task, $id_employee){
                $query =
                    'UPDATE 
                        task
                SET 
                    in_progress_date = Now(),
                    task.id_employee = :id_employee,
                    status = :status
                WHERE 
                    task.id_task = :id_task
            ';

                self::executeSql($query,[
                        ':id_task' => $id_task,
                        ':id_employee' => $id_employee,
                        ':status' => 2
                ]);
        }

        public static function statusDone($id_task, $id_employee){
            $query =
                'UPDATE 
                    task
            SET 
                ending_date = Now(),
                task.id_employee = :id_employee,
                status = :status
            WHERE 
                task.id_task = :id_task
        ';

            self::executeSql($query,[
                    ':id_task' => $id_task,
                    ':id_employee' => $id_employee,
                    ':status' => 3
            ]);
        }

        public static function revenue(){
            $query =
            'SELECT SUM(type.price) as revenue
            FROM 
            task 
            INNER JOIN
                type
            ON 
                task.id_type = type.id_type';

            $ca = self::findOne($query,[]);


            return $ca['revenue'];
        }
 

}




