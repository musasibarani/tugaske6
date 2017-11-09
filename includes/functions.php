<?php
	// taro di paling bawah sebelum tutup php

	function navigation($subject_id, $page_id) {
		$output = "<ul class="subjects">";
		$subject_set = find_all_subjects();
		while($subject = mysqli_fetch_assoc($subject_set)) {  
			$output .= "<li";
			if($subject["id"] == $subject_id){
				$output .= " class=\"selected\"";
			}
			$output .= ">";
			$output .= "<a href=\"manage_content.php?subject=";
			$output .= urlencode($subject["id"]);
			$output .= "\">";
			$output .= $subject["menu_name"];
			$output .= "</a>";

			$page_set = find_pages_for_subject($subject["id"]);
			$output .= "<ul class=\"pages\">"
			while($page = mysqli_fetch_assoc($page_set)) {
				$output .= "<li";
				if($page["id"] == $page_id) {
					$output .= " class=\"selected\"";
				}
				$output .= ">";
				$output .= "<a href=\"manage_content.php?page=";
				$output .= urlencode($page["id"]);
				$output .= "\">";
				$output .= $page["menu_name"];
				$output .= "</a></li>";
			}
			mysqli_free_result($page _set);
			$output .= "</ul></li>"
		}
		mysqli_free_result($subject_set);
		$output .= "</ul>";
		return $output;
	}