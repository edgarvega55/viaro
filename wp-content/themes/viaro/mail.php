<?php 
   if (isset($_POST['contact'])) {
        header('Content-type: application/json');
        $dataContact = json_decode($_POST['contact'], true);
        $name =  $dataContact['name'];
        $email =  $dataContact['email'];
        $phone =  $dataContact['phone'];
        $ulr =  bloginfo('url');
        

        $data = ["status" => $ulr];
        echo json_encode($data);
      
        // Inform the user
        

    } else {
        header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        $data = ["message" => 'ERROR','code' => 1337];
        die(json_encode($data));
    }
?>