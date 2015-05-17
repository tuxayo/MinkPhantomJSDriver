<?php

namespace Behat\PhantomJSExtension\Portergeist\Exception;

/**
 * Class JSErrorItem
 * @package Behat\PhantomJSExtension\Portergeist\Exception
 */
class JSErrorItem {
  /** @var  mixed */
  protected $message;
  /** @var  mixed */
  protected $stack;

  /**
   * @param $message
   * @param $stack
   */
  public function __construct($message, $stack) {
    $this->message = $message;
    $this->stack = $stack;
  }

  /**
   * String representation of the class
   * @return string
   */
  public function __toString() {
    return sprintf("%s\n%s", $this->message, $this->stack);
  }
}
