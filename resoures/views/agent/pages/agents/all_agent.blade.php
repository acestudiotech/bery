@extends('agent.agent_master')
@section('agent_body')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Agent</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agent Table</li>
        </ol>

        <a href="{{route('add.agency.agent')}}" class="btn btn-primary mb-1 mb-md-0">Add Agent</a>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Agent Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Agent name</th>
            <th>Agent Email</th>
            <th>Agent image</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($agent as $key => $item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->agent_name }}</td>
            <td>{{ $item->agent_email }}</td>
            <td> <img src="{{ asset($item->agent_image) }}" style="width: 55px; height: 55px;" >  </td>
            <td>
              
                <a href="{{ route('edit.agency.agent',$item->id) }}" class="btn btn-primary mb-1 mb-md-0">Edit</a>
                
                <a href="{{ route('delete.agency.agent',$item->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0">Delete</a>
              
              </td>
          </tr>
         
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>

@endsection