
<div class="content-wrapper" >
    <div class="container-fluid">
       <div class="row">
          <div class="main-header">
             <h4>Ticket Type</h4>
             <a class="btn btn-primary" href="{{'ticket-status/create'}}">Add ticket Status</a>

          </div>
          
       </div>
       <div class="row">
          <div class="col-xl-12">
             <div class="card">
                <div class="card-block">
                   <div class="table-responsive">
                      <table class="table m-b-0 photo-table">
                         <thead>
                            <tr class="text-uppercase">
                               <th>#</th>
                               <th>Type</th>
                               <th>Status</th>
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($data as $dataRow)
                            <tr>
                               <th>
                                  {{$dataRow->id}}
                               </th>
                               <td>
                                  <p>{{$dataRow->status_type}}</p>
                               </td>
                              
                               <td> <p>{{$dataRow->status==1?'Active':'Inactive'}}</p></td>
                               <td>
                                 <a href='{{ route('ticket-status.edit', $dataRow->id) }}'>
                                <button type="button" class="btn btn-primary">edit</button>
                                 </a>
                                 {{ Form::open(array('url' => 'ticket-status/' . $dataRow->id)) }}
                                 {{ Form::hidden('_method', 'DELETE') }}
                                 {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                 {{ Form::close() }}
             
                            </tr>
                            @endforeach
                            
                         </tbody>

                      </table>
                   </div>
                </div>
             </div>
          </div>

       </div>
       <!-- 2-1 block end -->
    </div>
    <!-- Main content ends -->
    <!-- Container-fluid ends -->
 </div>
