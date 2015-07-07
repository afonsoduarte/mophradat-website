<?php 

namespace Roots\Sage\Models;

/**
 *
 * Model for Glossary terms
 *
 */

function glossary_term_classes() {
  $classes = 'glossary-term';
  if(is_single()) $classes .= ' glossary-term--single';
  if(is_archive()) $classes .= ' glossary-term--archive glossary-term--collapse';
  return $classes;
}

?>