<table id="sensorDevicesTable" style="width: 100%;">
	<thead>
	<th id="id">#</th>
	<th id="uuid">UUID</th>
	<th id="name">Name</th>
	<th id="type">Type</th>
	<th id="group">Group</th>
	<th></th>
	</thead>
	<tbody>
<?php foreach($_['devices'] as $device){ ?>
	<tr>
		<td><?php p($device['id']); ?></td>
		<td><?php p($device['uuid']); ?></td>
		<td><?php p($device['name']); ?></td>
		<td><?php p($device['type']); ?></td>
		<td></td>
		<td><button class="deviceChart" data-id="<?php p($device['id']); ?>">Chart</button><button class="deviceListData" data-id="<?php p($device['id']); ?>">Data</button></td>
	</tr>
<?php } ?>
	</tbody>
	<tfoot></tfoot>
</table>