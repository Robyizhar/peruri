<table class="table table-hover">
  <tr>
      <th>ID</th>
      <th>nama menu</th>
      <th>level menu</th>
      <th>url</th>
  </tr>
  <tr>
      <td>{{ $model->id }}</td>
      <td>{{ $model->nama_menu }}</td>
      <td>{{ $model->level_menu }}</td>
      <td>{{ $model->url }}</td>
  </tr>
</table>