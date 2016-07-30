<?php
namespace Craft;

/**
* Convert variable to bin2hex
*
* @author Aphichat Panjamanee <http://28desk.com>
*/
class Td_bin2hexVariable
{
  function encode($token='')
  {
    return bin2hex($token);
  }

  function decode($token='')
  {
    return hex2bin($token);
  }
}
