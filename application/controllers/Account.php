<?php

class Account extends Public_Controller
{
  function index() {
    header("location: account/login");
  }

  function login() {
    $this->view("web/customer/login");
  }

  function register() {
    $this->view("web/customer/register");
  }
}
