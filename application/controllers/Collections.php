<?php

class Collections extends Public_Controller
{
  function index() {
    header("location: collections/");
  }

  function all() {
    $this->view("web/collections/all");
  }

  function new() {
    $this->view("web/collections/new");
  }
  function hot() {
    $this->view("web/collections/hot");
  }
  function discount() {
    $this->view("web/collections/discount");
  }
}
