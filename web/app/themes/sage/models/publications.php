<?php 

namespace Roots\Sage\Models;

/**
 *
 * Model for Glossary terms
 *
 */

function publication_classes() {
  $classes = 'publication';
  if(is_single()) $classes .= ' publication--single';
  if(is_archive()) $classes .= ' publication--excerpt publication--collapse';
  return $classes;
}

?>