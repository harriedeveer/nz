<?php
/**
 * First setup.
 * This file is part of the nz library. 
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Harrie de Veer (https://fuzzyharry.nl)
 * @license http://www.gnu.org/licenses/ GNU
 */
if (!function_exists('nz')) {
    /**
     * Returns the input value if set and not null otherwise return the default value.
     *
     * @param mixed $input 
     * @param mixed $default Optional return value if the $input is considdered Zero
     * @param mixed $preFix  Optional. Prefix text to concat before the $input
     * @param mixed $surFix  Optional. Surfix text to concat after  the $input
     * @return mixed
     */
    function nz(& $input, $default = null, $preFix = null, surFix = null)
    {
      $result ='';
      if(isset($param)) {
          if(!empty($param)) {
              $result = $param;
          } else {
              $result = $default;
          }
      } else {
          $result = $default;
      }
      if(!empty($result)) {
          if(!empty($prefix))  { $result = $prefix . $result; }
          if(!empty($surfix))  { $result = $result . $surfix; }
      }
      return $result;
    }
}
