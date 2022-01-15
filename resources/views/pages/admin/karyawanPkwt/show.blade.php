<table class="table table-hover">
  <tr>
      <th>ID</th>
      <th>NP</th>
      <th>Full Name</th>
      <th>Unit Kerja</th>
      {{-- <th>Kode Unit</th> --}}
      <th>Setatus</th>
      <th>kontrak ke</th>
  </tr>
  <tr>
      <td>{{ $model->id }}</td>
      <td>{{ $model->np }}</td>
      <td>{{ $model->nama }}</td>
      <td>{{ $model->id_unit }}</td>
      <td>{{ $model->status }}</td>
      <td> kontarak ke : {{ $model->kpntrak_ke }}</td>
  </tr>
</table>