<?php
	foreach($info as $row){
	}

	$date = $row->created_date;
	$dateFormat = date('d-m-Y', strtotime($date));

	echo "
		<table>
			<tr>
				<td>ID:</td>
				<td>$row->subject_id</td>
			</tr>
			<tr>
				<td>Name:</td>
				<td>$row->subject_name</td>
			</tr>
			<tr>
				<td>Description:</td>
				<td>$row->subject_description</td>
			</tr>
			<tr>
				<td>Unit:</td>
				<td>$row->subject_unit</td>
			</tr>
			<tr>
				<td>Category:</td>
				<td>$row->subject_category</td>
			</tr>
			<tr>
				<td>Created Date:</td>
				<td>$dateFormat</td>
			</tr>
		</table>
	";
?>