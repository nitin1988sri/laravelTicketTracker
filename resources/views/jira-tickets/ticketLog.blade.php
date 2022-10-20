<!-- Button trigger modal -->
<a   data-toggle="modal" data-target="#exampleModal">
     Ticket log
</a>
@php
echo "<pre>";
    $logData = $logs->toArray();
    print_r( $logData );
@endphp
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ticket id</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Log Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Start time</th>
                    <th scope="col">End time</th>
                    <th scope="col">Time takem</th>
                    <th scope="col">Comment</th>
                  </tr>
                </thead>
                <tbody>
                    @for ($i=count($logData)-1; $i>0; $i--)
                  <tr>
                    <td>{{$logData[$i]['log_date']}}</td>
                    <td>{{$logData[$i]['status_type']}}</td>
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
