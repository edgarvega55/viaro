<?php
/*
Plugin Name: Send Email Contact
Plugin Uri: https://viaro.net
Description: send email to contact
version: 1.0
Author: Edgar Vega
Author Uri: Edgar Vega
License: GPLv2 or Later
*/

function wp_api_add_posts_endpoints() {
  register_rest_route( 'sendEmail', '/v2', array(
        'methods' => 'POST',
        'callback' => 'addPosts_callback',
    ));
}

add_action( 'rest_api_init', 'wp_api_add_posts_endpoints' );

function addPosts_callback( $request_data ) {
    
    $parameters = $request_data->get_params();

    if ($parameters) {
        $name    = $parameters['name'];
        $email   = $parameters['email'];
        $phone   = $parameters['phone'];
        $message = $parameters['message']; 
        $subject   = "Contact";

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $content  = '<strong> Name: </strong>'. $name . '<br>';
        $content .= '<strong> Email: </strong>'. $email . '<br>';
        $content .= '<strong> Phone: </strong>'. $phone . '<br>';
        $content .= '<br><p>'. $message . '<br></p>';
        
        $result = wp_mail( $email, $subject, $content, $headers );

        if ($result == true) {
            $data = ["status" => "success"];
            header('Content-type: application/json');
            echo json_encode($data);
            die();
        } else {
            header('HTTP/1.1 500 Internal Server Error', true, 500);
            header('Content-Type: application/json; charset=UTF-8');
            $data = ["message" => 'Internal Server Error','code' => 500 ];
            die();
        }

    } else {
        header('HTTP/1.1 400 Bad Request', true, 400);
        header('Content-Type: application/json; charset=UTF-8');
        $data = ["message" => 'Bad Request','code' => 400 ];
        die();
    }
}