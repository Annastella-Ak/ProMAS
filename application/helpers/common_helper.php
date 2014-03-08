<?php

/* 
 * Author: Tesha Evance
 * Description: common tasks for forms
 * Comments: exclusive rights to author, consult on problems
 */


/*
 * Author: Tesha Evance
 * Description: shows errors individually and proper styling
 */
  function show_form_error($name){
     if(form_error($name) != null){ 
         echo form_error($name, '<span class="error_text">', '</span>'); 
         echo '<script>$( "div" ).last().addClass( "has-error" );</script>';
     }
  }