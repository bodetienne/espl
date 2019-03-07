<?php

// src/Service/SweatMessageGenerator.php
namespace App\Service;

class Mailer {

  public function sendMail(\Swift_Mailer $mailer){
    $message = (new \Swift_Message('Coucou beau brun'))
      ->setFrom('bodet.etienne79@gmail.com')
      ->setTo('bodet.etienne79@gmail.com')
      ->setBody(
          $this->renderView(
              // templates/emails.html.twig
              'home.html.twig'
          ),
          'text/html'
      );

    $mailer->send($message);


    return $this->render('emails.html.twig', array(
      'name' => $name,
    ));
  }

}
