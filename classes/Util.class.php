<?php
 
/**
 * Utilities class
 */

class Util
{

  /**
   * Redirect to a different page
   *
   * @param string $url  The relative URL
   * @return void
   */

   // Added the '/data.dev/' string for local dev environment. Unsure if it is needed in production
  public static function redirect($url)
  {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/data.dev/' . $url);
    exit;
  }

}
