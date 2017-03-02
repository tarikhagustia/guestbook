@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Report</div>

                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Company
                          </th>
                          <th>
                            Purpose
                          </th>
                          <th>
                            Area
                          </th>
                          <th>
                            CheckIn Date
                          </th>
                          <th>
                            CheckOut Date
                          </th>
                          <th>
                            Foto
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $key => $row)
                        <tr>
                          <td>
                            {{ $key + 1 }}
                          </td>
                          <td>
                            {{ $row->name }}
                          </td>
                          <td>
                            {{ $row->company }}
                          </td>
                          <td>
                            {{ $row->purpose->name }}
                          </td>
                          <td>
                            {{ $row->area->name }}
                          </td>
                          <td>
                            {{ $row->created_at }}
                          </td>
                          <td>
                            <label class="label label-success">{{ $row->checkout_time }}</label>
                          </td>
                          <td>
                            <img src="/{{ $row->photo }}" width="100px" alt="" />
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  {{ $data->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
