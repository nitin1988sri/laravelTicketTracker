

<div class="content-wrapper" style="margin-top:-30px">
    <div class="container-fluid">
       <div class="row">
          <div class="main-header">
             <h4>Category</h4>
          </div>
       </div>
       <button class="btn btn-primary"  data-toggle="modal" data-target="#addCategory">Add Category</button>
       <div class="row">
          <div class="col-xl-12">
             <div class="card">
                <div class="card-block">
                   <div class="table-responsive">
                      <table class="table m-b-0 photo-table">
                         <thead>
                            <tr class="text-uppercase">
                               <th>#</th>
                               <th>Category name</th>
                               <th>Description</th>
                               <th>Status</th>
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($data as $datas)
                            <tr>
                               <th>
                                  {{$datas->id}}
                               </th>
                               <td>
                                  <p>{{$datas->category_name}}</p>
                               </td>
                               <td>
                                <p>{{$datas->description}}</p>
                               </td>
                               <td> <p>{{$datas->status==1?'Active':'Inactive'}}</p></td>
                               <td>
                                <button type="button" class="btn btn-primary">edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </tr>
                            @endforeach
                            <tr><td colspan="3">
                                    {{-- {{$data->links() }} --}}
                                </div>
                            </td></tr>

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
