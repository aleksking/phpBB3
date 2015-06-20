<?php exit; ?>
1434794583
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (sq_moderator_cache m) LEFT JOIN sq_users u ON (m.user_id = u.user_id) LEFT JOIN sq_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}