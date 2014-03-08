<?php
/*
 * Author:  Tesha Evance
 * Description: Dynamic side bar creator
 * Comments: Add to configuration only 
*/

/*
 *===========TEMPLATE======
 * $accordion['user'] = array(
 *                          'menu_group' => array(
 *                                              array('menu-item' = 'menu_item_link)
 *                                              .
 *                                              .
 *                                              . 
 *                                          )
 *                          .
 *                          .
 *                          .     
 *                     )
 *                     .
 *                     .
 *                     .
 * Examples:
 *      user = administrator
 *      menu_group = manage users, timeline etc
 *      menu_item =  events,announcements, etc
 *      menu_item_link = manage_user/supervisor, timline/events !NOTE-dont put the leading slash.
 * 
 *  */
//===========CONFIGURATION=============
    //for administrator 
    $accordion['administrator'] = array(
        'Manage users' => array(
                                    array('menu-item1' => 'menuitem_link1'),
                                    array('menu-item2' => 'menuitem_link2'),
                                    array('menu-item3' => 'menuitem_link3'),
                                    array('menu-item4' => 'menuitem_link4')
                               ),
        'Project' => array(
                                    array('menu-item1' => 'menuitem_link1'),
                                    array('menu-item1' => 'menuitem_link1'),
                                    array('menu-item1' => 'menuitem_link1'),
                                    array('menu-item1' => 'menuitem_link1'),
                               )
        
    );
    
    //for coordinator
    $accordion['coordinator'] = array(
        'Manage users' => array(
                                    array('menu-item1' => 'menuitem_link1'),
                                    array('menu-item2' => 'menuitem_link2'),
                                    array('menu-item3' => 'menuitem_link3'),
                                    array('menu-item4' => 'menuitem_link4')
                               ),
        'Timeline' => array(
                                    array('menu-item1' => 'menuitem_link1'),
                                    array('menu-item1' => 'menuitem_link1'),
                                    array('menu-item1' => 'menuitem_link1'),
                                    array('menu-item1' => 'menuitem_link1'),
                               )
        
    );
    
    //=======ENGINE=========
?>

<div class="col-md-2">
    <div class="panel-group" id="accordion">
        <?php foreach ($accordion['administrator'] as $key => $value) { ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title text-center" data-toggle="collapse" data-parent="#accordion" href="#<?php echo str_replace(' ', '_', $key) ?>">
                        <a  href="#"><?php echo $key ?></a>
                    </h4>
                </div>
                <div id="<?php echo str_replace(' ', '_', $key) ?>" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php foreach ($value as $sub_value) { 
                                    foreach ($sub_value as $sub_sub_key => $sub_sub_value) {?>
                            <li class="list-group-item"><a href="<?php echo site_url().'/'.$sub_sub_value ?>"><?php echo $sub_sub_key; ?></a></li>
                            <?php   }
                                  } ?>
                        </ul>
                    </div>
                </div>
            </div>
      <?php } ?>
      </div>
      </div>
      