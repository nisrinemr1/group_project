<?php 
    include('Connection.php');
    // permet de hasher un password pour l'ajouter dans la db
    // echo password_hash('admin', PASSWORD_DEFAULT);

    class User extends Connection {
        // ============ CONNEXION =========
        // retourne l'utilisateur si il existe
        public function verify($email, $password) {

            if (empty($email) || empty($password)) {
                return false;
            }
            try {
                $request = "SELECT * FROM user WHERE email = :email";
                $params = array(
                    ":email" => $email
                );

                if($this->execute($request, $params)!= null){
                    $data = $this->execute($request, $params)[0];
                    // var_dump($data);
                    
                   
                    //if(!password_verify($password, $data['password'])) {
                        echo $email;
                        echo $password;
                    if($password == $data['password']) {
                        // var_dump('Utilisateur is ok');
                        $arrayData = array(
                            "id" => $data["id"],
                            "email" => $data["email"],
                            "firstname" => $data["firstname"]
                        );
                        return $arrayData;
                    }
                    else {
                        // le mot de passe n'est pas valide
                        return false;
                    }

                }
                else {
                    // l'utilisateur n'existe pas
                    return false;
                }
            
            } catch (PDOException $e) {
                return false;
            }
        }
    }
?>