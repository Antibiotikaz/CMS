
<div class="col-md-6">
  @php
  $data = json_decode(file_get_contents('https://api.exchangeratesapi.io/latest'));

      $i = 1;

  @endphp
  <h1>Currency Exchange table</h1>
  <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Currency</th>

        <th scope="col">@php
          echo $data->base;
        @endphp</th>
        <th scope="col">Date: @php
          echo $data->date;
        @endphp</th>

      </tr>
    </thead>

    @foreach ($data->rates as $key => $value)

      <tbody>

        <tr>
          <th scope="row">{{ $i++ }}</th>
          <td>{{ $key }}</td>
          <td>{{ $value }}</td>

        </tr>


      </tbody>

    @endforeach

  </table>

</div>
