<?php
/**
 * Elgg ICAL List view
 *
 * @uses $vars['items']
 */

$items = $vars['items'];

if (is_array($items) && count($items) > 0) {
	foreach ($items as $item) {
		echo elgg_view_list_item($item, $vars);
	}
}
