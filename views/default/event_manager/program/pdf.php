<?php 

	$event = $vars["entity"];
	
	if (!empty($event) && ($event instanceof Event)) {
		if ($event->with_program) {
			$content = "<h3>" . elgg_echo('event_manager:event:program') . "</h3>";
			
			if($eventDays = $event->getEventDays()) {
				foreach ($eventDays as $key => $day) {					
					$content .= elgg_view("event_manager/program/pdf/day", array("entity" => $day, "selected" => $selected));					
				}
			}
			
			echo $content;
		}
	}	