<div class="page-header">
    <h1>Merchants</h1>
  </div>

  <table class="table table-striped">
    <thead>
      <th>Name</th>
      <th>Phone</th>
      <th>Portal</th>
    </thead>
    <tbody>
      @foreach($merchants as $merchant)
      <tr>
        <td><a href="{{ route('merchants.show', ['id'=> $merchant->id]) }}">{{ $merchant->name }}</a></td>
        <td>{{ $merchant->phone }}</td>
        <td><a href="{{ url($merchant->portal_url) }}">Portal</a></td>
      </tr> 
      @endforeach 
    </tbody>
  </table>