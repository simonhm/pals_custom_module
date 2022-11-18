<?php
namespace Drupal\pals_custom_module\Controller;
class WelcomeController {
    public function welcome() {
        return array(
                '#markup' => 'Welcome to PALS Custom Module.'
    );
  }
}