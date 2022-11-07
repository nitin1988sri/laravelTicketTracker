
<div class="content-wrapper" style="margin-top:-30px">
    <div class="container-fluid">
       <div class="row">
          <div class="main-header">
             <h4>Ticket list</h4>
          </div>
       </div>
       <button class="btn btn-primary"  data-toggle="modal" data-target="#uploadFile">Upload ticket</button>
       <a class="btn btn-primary" href="{{url('clear-tables')}}">Clear data</a>
       <a class="btn btn-primary" style="display: none" href="{{url('/show')}}">Add new ticket details</a>
       <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Add new ticket  </button>

  <!-- Modal -->
        <div class="modal fade  bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new ticket details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form id="addNewTicketFrm">
                     @csrf
                    <table class="table">
                    <tr>
                        <td>
                            Ticket id:
                        </td>
                        <td>
                         <input class="form-control form-control-sm" type="text" name="ticket_id" id="ticket_id">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            User:
                        </td>
                        <td>
                         <select class="form-control" id="user_id" name="user_id">
                             <option value="0">Select</option>
                             @foreach ($data->users as $key => $user)
                                 <option value="{{ $key }}">
                                     {{ $user }}</option>
                             @endforeach
                         </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ticket type:
                        </td>
                        <td>
                          <select class="form-control" id="ticketType" name="ticketType">
                             <option value="0">Select</option>
                             @foreach ($data->ticketType as $key => $type)
                                 <option value="{{ $key }}" >
                                     {{ $type }}</option>
                             @endforeach
                         </select>
                        </td>
                      </tr>
                    <tr>
                        <td>
                            Ticket Complexity:
                        </td>
                        <td>
                         <select class="form-control" id="ticketComplexity" name="ticketComplexity">
                             <option value="0">Select</option>
                             @foreach ($data->ticketComplexity as $key => $ticketComplexity)
                                 <option value="{{ $key }}">
                                     {{ $ticketComplexity }}</option>
                             @endforeach
                         </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Planned start date:
                        </td>
                        <td>
                         <input class="form-control form-control-sm" type="date" id="planned_start_date" name="planned_start_date">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Planned end date:
                        </td>
                        <td>
                         <input class="form-control form-control-sm" type="date" id="planned_end_date" name="planned_end_date" >
                       </td>
                    </tr>
                    <tr>
                        <td>
                            Planned efforts
                        </td>
                         <td>
                             <input class="form-control form-control-sm" type="text"  id="planned_efforts" name="planned_efforts" >
                         </td>
                    </tr>
                    <tr>
                        <td>
                            Actual start date
                        </td>
                         <td>
                           <input class="form-control form-control-sm" type="date" id="actual_start_date" name="actual_start_date" >
                         </td>
                    </tr>
                    <tr>
                        <td>
                            Actual end date
                        </td>
                         <td>
                             <input class="form-control form-control-sm" type="date" id="actual_end_date" name="actual_end_date">
                         </td>
                    </tr>
                    <tr>
                        <td>
                            Actual efforts
                        </td>
                         <td>
                             <input class="form-control form-control-sm" type="text"  id="actual_efforts" name="actual_efforts" >
                         </td>
                     </tr>
                </table>
            </form>
                </div>
                <div class="modal-footer">
                    <button type="button" url='{{ route('addNewTicket')}}' id="addNewTicketBtn" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </div>
        </div>

       <div class="row">
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
          <div class="col-xl-12">
             <div class="card">
                <div class="card-block">
                   <div class="table-responsive">
                      <table class="table m-b-0 photo-table">
                         <thead>
                            <tr class="text-uppercase">
                               <th>Ticket Id</th>
                               <th>Devloper</th>
                               <th>Ticket Type</th>
                               <th>Actual: S/M/C</th>
                               <th>Planned start date</th>
                               <th>Planned end date</th>
                               <th>Planned efforts(in Hours)</th>
                               <th>Actual start date</th>
                               <th>Actual end date</th>
                               <th>Actual efforts(in Hours)</th>
                               <th>TicketLog</th>
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>

                            @foreach ($data->ticketList as $key=>$dataRow)
                            <tr>
                               <td>
                                  {{$dataRow->ticket_id}}
                               </td>
                               <td>
                               {{ @$data->users[$dataRow->user_id] }}
                               </td>
                               <td>
                                {{ @$data->ticketType[$dataRow->ticketAdditionInfo->ticketType] }}
                               </td>
                               <td>
                                {{ @$data->ticketComplexity[$dataRow->ticketAdditionInfo->complexity] }}
                               </td>
                               <td>
                                @php $planned_start_date = @$dataRow->ticketAdditionInfo->planned_start_date=='1970-01-01'?'-':@$dataRow->ticketAdditionInfo->planned_start_date;
                                @endphp
                               {{ @$planned_start_date }}
                               </td>
                               <td>
                                @php $planned_end_date = @$dataRow->ticketAdditionInfo->planned_end_date=='1970-01-01'?'-':@$dataRow->ticketAdditionInfo->planned_end_date;
                                 @endphp
                                {{ @$planned_end_date }}
                                </td>
                                <td>
                                    {{ @$dataRow->ticketAdditionInfo->planned_efforts }}
                                </td>
                                <td>
                                    @php $actual_start_date = @$dataRow->ticketAdditionInfo->actual_start_date=='1970-01-01'?'-':@$dataRow->ticketAdditionInfo->actual_start_date;
                                 @endphp
                                    {{ $actual_start_date }}
                                </td>
                                <td>
                                    @php $actual_end_date = @$dataRow->ticketAdditionInfo->actual_end_date=='1970-01-01'?'-':@$dataRow->ticketAdditionInfo->actual_end_date;
                                    @endphp
                                    {{ $actual_end_date }}
                                </td>
                                <td>

                                    {{ @$dataRow->ticketAdditionInfo->actual_efforts }}
                                </td>
                                <td>
                                    <a   data-toggle="modal" data-target="#{{$dataRow->ticket_id}}">
                                        Ticket log
                                   </a>
                                   @php
                                       $logData =  $dataRow->ticketLogs->toArray();
                                   @endphp
                                     <!-- Modal -->
                                     <div class="modal fade bd-example-modal-lg" id="{{$dataRow->ticket_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-lg" role="document">
                                         <div class="modal-content">
                                           <div class="modal-header">
                                             <h5 class="modal-title" id="{{$dataRow->ticket_id}}"> {{$dataRow->ticket_id}}</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                             </button>
                                           </div>
                                           <div class="modal-body">
                                               <table class="table table-striped">
                                                   <thead>
                                                     <tr>
                                                       <th scope="col">Log Date</th>
                                                       <th scope="col">Log By user</th>
                                                       <th scope="col">Status</th>
                                                       <th scope="col">Start time</th>
                                                       <th scope="col">End time</th>
                                                       <th scope="col">Time takem</th>
                                                       <th scope="col">Comment</th>
                                                     </tr>
                                                   </thead>
                                                   <tbody>
                                                       @for ($i=count($logData)-1; $i>=0; $i--)
                                                     <tr>
                                                       <td>{{date('d/m/Y', strtotime($logData[$i]['log_date']))}}</td>
                                                       <td>{{@$data->users[$logData[$i]['user_id']]}}</td>
                                                       <td>{{@$data->ticketStatuses[$logData[$i]['status_type']]}}</td>
                                                       <td>{{$logData[$i]['time_start']}}</td>
                                                       <td>{{$logData[$i]['time_end']}}</td>
                                                       <td>{{$logData[$i]['time_taken']}}</td>
                                                       <td>{{$logData[$i]['comment']}}</td>
                                                     </tr>
                                                     @endfor
                                                   </tbody>
                                                 </table>
                                           </div>

                                         </div>
                                       </div>
                                     </div>

                                </td>
                                <td>
                                    <a target="_blank" href='{{ url('show', $dataRow->id) }}'>Edit</a>
                                </td>
                            </tr>
                            @endforeach
                         </tbody>
                      </table>
                      <div class="col-sm-12">
                         {{$data->ticketList->links() }}
                    </div>
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
