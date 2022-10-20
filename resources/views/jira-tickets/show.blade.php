 <!-- Sidebar chat end-->
 <div class="content-wrapper">
     <!-- Container-fluid starts -->
     <div class="container-fluid">
         <!-- Main content starts -->
         <div>
             <!-- Row Starts -->
             <div class="row">
                 <div class="col-sm-12 p-0">
                     <div class="main-header">
                         <h4>Ticket Id: {{ @$data->ticketList[0]['ticket_id'] }} </h4>
                         <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                             <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                             </li>
                             <li class="breadcrumb-item"><a href="{{url('/upload')}}">Ticket list</a>
                             </li>

                         </ol>
                     </div>
                 </div>
             </div>
             <!-- Row end -->

             <!-- Row start -->
             <div class="row">
                 <!-- Form Control starts -->
                 <div class="col-lg-6">
                     <div class="card">
                         <div class="card-header">
                             <h5 class="card-header-text">Ticket Info</h5>
                             <div class="f-right">
                                 <a href="" data-toggle="modal" data-target="#input-type-Modal"><i
                                         class="icofont icofont-code-alt"></i></a>
                             </div>
                         </div>
                         <div class="modal fade modal-flex" id="input-type-Modal" tabindex="-1" role="dialog">
                             <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                         <h5 class="modal-title">Code Explanation For Input Types </h5>
                                     </div>
                                     <!-- end of modal-header -->
                                     <div class="modal-body">
                                         <pre class="brush: html;">
                                       &lt;note&gt; This Code Write inside &lt;form&gt; tag

                                     /* For Email Address */

                                     &lt;div class="form-group"&gt;
                                         &lt;label for="exampleInputEmail1" class="form-control-label"&gt;Email address&lt;/label&gt;
                                         &lt;input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"&gt;
                                         &lt;small id="emailHelp" class="form-text text-muted"&gt;We'll never share your email with anyone else.&lt;/small&gt;
                                     &lt;/div&gt;

                                     /* For Password */

                                     &lt;div class="form-group"&gt;
                                         &lt;label for="exampleInputPassword1" class="form-control-label"&gt;Password&lt;/label&gt;
                                             &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
                                     &lt;/div&gt;

                                     /* For Dropdown */

                                     &lt;div class="form-group"&gt;
                                         &lt;label for="exampleSelect1" class="form-control-label"&gt;Example select&lt;/label&gt;
                                             &lt;select class="form-control" id="exampleSelect1"&gt;
                                                 &lt;option&gt;1&lt;/option&gt;
                                                 &lt;option&gt;2&lt;/option&gt;
                                                 &lt;option&gt;3&lt;/option&gt;
                                                 &lt;option&gt;4&lt;/option&gt;
                                                 &lt;option&gt;5&lt;/option&gt;
                                             &lt;/select&gt;
                                     &lt;/div&gt;

                                     /* for multiple select */

                                     &lt;div class="form-group"&gt;
                                         &lt;label for="exampleSelect2" class="form-control-label"&gt;Example multiple select&lt;/label&gt;
                                             &lt;select multiple class="form-control multiple-select" id="exampleSelect2"&gt;
                                                 &lt;option>1&lt;/option&gt;
                                                 &lt;option>2&lt;/option&gt;
                                                 &lt;option>3&lt;/option&gt;
                                                 &lt;option>4&lt;/option&gt;
                                                 &lt;option>5&lt;/option&gt;
                                             &lt;/select&gt;
                                     &lt;/div&gt;

                                     /* for textarea */

                                     &lt;div class="form-group"&gt;
                                         &lt;label for="exampleTextarea" class="form-control-label"&gt;Example textarea&lt;/label&gt;
                                             &lt;textarea class="form-control" id="exampleTextarea" rows="4"&gt;&lt;/textarea&gt;
                                     &lt;/div&gt;

                                     /* For Radio Button */

                                     &lt;fieldset class="form-group"&gt;
                                         /* Checked Radio Button*/
                                         &lt;div class="form-check"&gt;
                                             &lt;label for="optionsRadios1" class="form-check-label"&gt;
                                                 &lt;input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" valu6="option1" checked&gt;
                                                     Option one is this and that&mdash;be sure to include why it's great
                                             &lt;/label&gt;
                                         &lt;/div&gt;

                                         /* Not Checked Radio Button*/

                                         &lt;div class="form-check"&gt;
                                             &lt;label for="optionsRadios2" class="form-check-label"&gt;
                                                 &lt;input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
                                                     Option two can be something else and selecting it will deselect option one
                                                 &lt;/label&gt;
                                         &lt;/div&gt;

                                         /* Disable Radio Button */

                                         &lt;div class="form-check disabled"&gt;
                                             &lt;label for="optionsRadios3" class="form-check-label"&gt;
                                                 &lt;input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled&gt;
                                                     Option three is disabled
                                             &lt;/label&gt;
                                         &lt;/div&gt;
                                     &lt;/fieldset&gt;

                                     /* use for multiple checkbox */

                                     &lt;div class="form-check"&gt;
                                         &lt;label for="chkme" class="form-check-label"&gt;
                                             &lt;input type="checkbox" class="form-check-input" id="chkme"&gt;Check me out
                                         &lt;/label&gt;
                                     &lt;/div&gt;
                                         &lt;div class="form-check"&gt;
                                             &lt;label class="form-check-label"&gt;
                                                 &lt;input class="form-check-input" type="checkbox"&gt;
                                                     Option one is this and that&mdash;be sure to include why it's great
                                             &lt;/label&gt;
                                         &lt;/div>

                                     /* use for disable checkbox */

                                     &lt;div class="form-check disabled"&gt;
                                         &lt;label class="form-check-label"&gt;
                                             &lt;input class="form-check-input" type="checkbox" disabled&gt;
                                                 Option two is disabled
                                             &lt;/label&gt;
                                         &lt;/div&gt;
                                     &lt;button type="submit" class="btn btn-success waves-effect waves-light"&gt;Submit
                                     &lt;/button&gt;
                                   </pre>
                                     </div>
                                     <!-- end of modal-body -->
                                 </div>
                                 <!-- end of modal-content -->
                             </div>
                             <!-- end of modal-dialog -->
                         </div>
                         <!-- end of modal -->

                         <div class="card-block">
                             <form id="ticketInfo">
                                @csrf
                                 <div class="form-group">
                                     <label for="exampleInputEmail1" class="form-control-label">Ticket Id</label>
                                     <input type="text" class="form-control" id="ticket_id" name="ticket_id"
                                         value="{{ @$data->ticketList[0]['ticket_id'] }} ">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputPassword1" class="form-control-label">Assignee</label>
                                     <select class="form-control" id="user_id" name="user_id">
                                         @foreach (@$data->users as $key => $user)
                                             @php $select = @$data->ticketList[0]['user_id'] == $key? 'selected':'' @endphp
                                             <option value="{{ $key }}" {{ $select }}>{{ $user }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                                 <button type="button" url='{{ route('ticketinfo', !empty(@$data->ticketList[0]['id'])?$data->ticketList[0]['id']:-1)}}' id="ticketInfoButton" class="btn btn-primary">Submit</button>
                                 </form>
                         </div>
                     </div>
                 </div>
                 <!-- Form Control ends -->

                 <!-- Textual inputs starts -->
                 <div class="col-lg-6">
                     <div class="card">
                         <div class="card-header">
                             <h5 class="card-header-text">Ticket additional info</h5>
                             <div class="f-right">
                                 <a href="" data-toggle="modal" data-target="#textual-input-Modal"><i
                                         class="icofont icofont-code-alt"></i></a>
                             </div>
                         </div>
                         <div class="modal fade modal-flex" id="textual-input-Modal" tabindex="-1" role="dialog">
                             <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal"
                                             aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                         <h5 class="modal-title">Code Explanation For Textual Input Types </h5>
                                     </div>
                                     <!-- end of modal-header -->
                                     <div class="modal-body">
                                         <pre class="brush: html">
                           &lt;note&gt; This Code Write inside &lt;form&gt; tag

                         /* use for text textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-text-input" class="col-xs-2 col-form-label form-control-label"&gt;Text&lt;label&gt;
                                 &lt;div class="col-sm-10"&gt;
                                     &lt;input class="form-control" type="text" value="Artisanal kale" id="example-text-input"&gt;
                                 &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for search textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-search-input" class="col-xs-2 col-form-label form-control-label"&gt;Search&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="search" value="How do I shoot web" id="example-search-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for email textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-email-input" class="col-xs-2 col-form-label form-control-label"&gt;Email&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Url textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-url-input" class="col-xs-2 col-form-label form-control-label"&gt;URL&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Telephone textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-tel-input" class="col-xs-2 col-form-label form-control-label"&gt;Telephone&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Password textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-password-input" class="col-xs-2 col-form-label form-control-label"&gt;Password&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="password" value="hunter2" id="example-password-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Static Control textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label class="col-sm-2 col-form-label form-control-label"&gt;Static Control&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;p class="form-control-static"&gt;email@example.com&lt;/p&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Number textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-number-input" class="col-xs-2 col-form-label form-control-label"&gt;Number&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="number" value="42" id="example-number-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Date and Time textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-datetime-local-input" class="col-xs-2 col-form-label form-control-label"&gt;Date and time&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Date textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-date-input" class="col-xs-2 col-form-label form-control-label"&gt;Date&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="date" value="2011-08-19" id="example-date-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Month textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-month-input" class="col-xs-2 col-form-label form-control-label"&gt;Month&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="month" value="2011-08" id="example-month-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Week textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-week-input" class="col-xs-2 col-form-label form-control-label"&gt;Week&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="week" value="2011-W33" id="example-week-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Time textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-time-input" class="col-xs-2 col-form-label form-control-label"&gt;Time&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input class="form-control" type="time" value="13:45:00" id="example-time-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for Color textual input */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="example-color-input" class="col-xs-2 col-form-label form-control-label"&gt;Color&lt;/label&gt;
                             &lt;div class="col-sm-10"&gt;
                                 &lt;input type="color" class="" name="favcolor" value="#1b8bf9" id="example-color-input"&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;

                         /* use for File Upload Textual */

                         &lt;div class="form-group row"&gt;
                             &lt;label for="file" class="col-md-2 col-form-label form-control-label">File input&lt;/label&gt;
                             &lt;div class="col-md-9"&gt;
                                 &lt;label for="file" class="custom-file"&gt;
                                     &lt;input type="file" id="file" class="custom-file-input"&gt;
                                     &lt;span class="custom-file-control"&gt;&lt;/span&gt;
                                 &lt;/label&gt;
                             &lt;/div&gt;
                         &lt;/div&gt;
                       </pre>
                                     </div>
                                     <!-- end of modal-body -->
                                 </div>
                                 <!-- end of modal-content -->
                             </div>
                             <!-- end of modal-dialog -->
                         </div>
                         <!-- end of modal -->
                         <div class="card-block">
                             <form id="ticketAdditionalInfo">
                                @csrf
                                 <div class="form-group row">
                                     <label for="example-text-input"
                                         class="col-xs-2 col-form-label form-control-label">Planed Start Date</label>
                                     <div class="col-sm-10">
                                         <div class="col-sm-10">
                                             <input class="form-control" type="date" name="planned_start_date" value="{{ @$data->ticketList[0]['ticket_addition_info']['planned_start_date'] }}" id="planned_start_date">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="example-search-input"
                                         class="col-xs-2 col-form-label form-control-label">Planed Start Date</label>
                                     <div class="col-sm-10">
                                         <div class="col-sm-10">
                                             <input class="form-control" type="date" name="planned_end_date" value="{{ @$data->ticketList[0]['ticket_addition_info']['planned_end_date'] }}" id="planned_end_date">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="example-email-input"
                                         class="col-xs-2 col-form-label form-control-label">Planed Hour</label>
                                     <div class="col-sm-10">
                                         <input class="form-control" type="text" name="planned_efforts" value="{{ @$data->ticketList[0]['ticket_addition_info']['planned_efforts'] }}" id="planned_efforts">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="example-text-input"
                                         class="col-xs-2 col-form-label form-control-label">Accual Start Date</label>
                                     <div class="col-sm-10">
                                         <div class="col-sm-10">
                                             <input class="form-control" type="date" name="actual_start_date" value="{{ @$data->ticketList[0]['ticket_addition_info']['actual_start_date'] }}" id="actual_start_date">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="example-search-input"
                                         class="col-xs-2 col-form-label form-control-label">Accual End Date</label>
                                     <div class="col-sm-10">
                                         <div class="col-sm-10">
                                             <input class="form-control" type="date" name="actual_end_date" value="{{ @$data->ticketList[0]['ticket_addition_info']['actual_end_date'] }}" id="actual_end_date">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="example-email-input"
                                         class="col-xs-2 col-form-label form-control-label">Accual Hour</label>
                                     <div class="col-sm-10">
                                         <input class="form-control" type="text" name="actual_efforts" value="{{ @$data->ticketList[0]['ticket_addition_info']['actual_efforts'] }}" id="actual_efforts">
                                     </div>
                                 </div>
                                 <button type="button" url='{{ route('ticketAdditionalInfo',  !empty(@$data->ticketList[0]['id'])?$data->ticketList[0]['id']:-1)}}' id="ticketAdditionalInfoSave" class="btn btn-primary">Submit</button>
                            </div>
                         </form>
                     </div>
                 </div>
             </div>
             <!-- Textual inputs ends -->
         </div>
         <!-- Row end -->

         <div class="row">
             <!--input sizes starts-->
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="card-header-text">Ticket Log</h5>
                         <div class="f-right">
                             <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                     class="icofont icofont-code-alt"></i></a>
                         </div>
                     </div>
                     <div class="modal fade modal-flex" id="input-size-Modal" tabindex="-1" role="dialog">
                         <div class="modal-dialog modal-lg" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                     <h5 class="modal-title">Code Explanation for Input Sizes</h5>
                                 </div>
                                 <!-- end of modal-header -->
                                 <div class="modal-body">
                                     <pre class="brush: html;">
                                       /* use for small input size */

                                         &lt;div class="form-group row"&gt;
                                             &lt;label for="InputSmall" class="col-md-2 form-control-label"&gt;Small&lt;/label&gt;
                                                 &lt;div class="col-md-10"&gt;
                                                     &lt;input type="text" class="form-control form-control-sm" id="InputSmall" placeholder="form-control-sm"&gt;
                                                 &lt;/div&gt;
                                         &lt;/div&gt;

                                         /* use for Normal input size */

                                         &lt;div class="form-group row"&gt;
                                             &lt;div class="col-md-2"&gt;
                                                 &lt;label for="InputNormal" class="form-control-label"&gt;Normal&lt;/label&gt;
                                             &lt;/div&gt;
                                             &lt;div class="col-md-10"&gt;
                                                 &lt;input type="text" class="form-control" id="InputNormal"  placeholder="Normal"&gt;
                                             &lt;/div&gt;
                                         &lt;/div&gt;

                                         /* use for Large input size */

                                         &lt;div class="form-group row"&gt;
                                             &lt;div class="col-md-2"&gt;
                                                 &lt;label for="InputLarge" class="form-control-label col-form-label-lg"&gt;Large&lt;/label&gt;
                                             &lt;/div&gt;
                                             &lt;div class="col-md-10"&gt;
                                                 &lt;input type="text" class="form-control form-control-lg" id="InputLarge"  placeholder="form-control-lg"&gt;
                                             &lt;/div&gt;
                                         &lt;/div&gt;

                                         /* Grid Sizes */

                                         /* use for col-xs-3 */

                                         &lt;div class="form-group row"&gt;
                                             &lt;div class="col-md-2"&gt;
                                                 &lt;label for="InputLarge" class="form-control-label"&gt;Grid&lt;/label&gt;
                                             &lt;/div&gt;
                                             &lt;div class="col-xs-3"&gt;
                                                 &lt;input type="text" class="form-control" placeholder=".col-xs-3"&gt;
                                             &lt;/div&gt;
                                         &lt;/div&gt;

                                         /* use for col-xs-6 */

                                         &lt;div class="form-group row"&gt;
                                             &lt;div class="col-md-2"&gt;&lt;/div&gt;
                                             &lt;div class="col-xs-6"&gt;
                                                 &lt;input type="text" class="form-control" placeholder=".col-xs-6"&gt;
                                             &lt;/div&gt;
                                         &lt;/div&gt;

                                         /* use for col-xs-9 */

                                         &lt;div class="form-group row"&gt;
                                             &lt;div class="col-md-2">&lt;/div&gt;
                                             &lt;div class="col-xs-9"&gt;
                                                 &lt;input type="text" class="form-control" placeholder=".col-xs-9"&gt;
                                             &lt;/div&gt;
                                         &lt;/div&gt;
                                        </pre>
                                 </div>
                                 <!-- end of modal-body -->
                             </div>
                             <!-- end of modal-content -->
                         </div>
                         <!-- end of modal-dialog -->
                     </div>
                     <!-- end of modal -->
                     <form id="updateLog">
                        @csrf
                         <div class="col-sm-12">
                             <div class="card-block">
                                 <div class="form-group row">
                                     <label for="InputSmall" class="col-md-2 form-control-label">Log Date</label>
                                     <div class="col-sm-4">
                                         <input class="form-control" name="log_date" type="date" value="{{ @$data->editLog['log_date'] }}" id="example-datetime-local-input">
                                     </div>
                                 </div>
                                 <div class="card-block">
                                     <div class="form-group row">
                                         <label for="exampleInputPassword1" class="col-md-2 form-control-label">Log
                                             by</label>
                                         <div class="col-sm-4">
                                             <select class="form-control" id="user_id" name="user_id">
                                                 <option value="0">Select</option>
                                                 @foreach ($data->users as $key => $user)
                                                     @if (strlen(@$data->editLog['user_id']) > 0)
                                                         @php
                                                             $data->ticketList[0]['user_id'] = @$data->editLog['user_id'];
                                                         @endphp
                                                     @endif
                                                     @php $select = @$data->ticketList[0]['user_id'] == $key? 'selected':'' @endphp
                                                     <option value="{{ $key }}" {{ $select }}>
                                                         {{ $user }}</option>
                                                 @endforeach
                                             </select>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card-block">
                                     <div class="form-group row">
                                         <label for="exampleInputPassword1"
                                             class="col-md-2  form-control-label">Current status</label>
                                         <div class="col-sm-4">
                                             <select class="form-control" id="status_type" name="status_type">
                                                 <option value="0">Select</option>
                                                 @foreach ($data->ticketStatuses as $key => $status)
                                                     @php $select = @$data->editLog['status_type'] == $key? 'selected':'' @endphp
                                                     <option value="{{ $key }}" {{ $select }}>
                                                         {{ $status }}</option>
                                                 @endforeach
                                             </select>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-group row">
                                     <div class="col-md-2"><label for="InputNormal" class="form-control-label">Start
                                             Time</label></div>
                                     <div class="col-md-4">
                                         <input class="form-control" type="time" name="time_start" value="{{ @$data->editLog['time_start'] }}" id="example-time-input">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-md-2"><label for="InputLarge"
                                             class="form-control-label col-form-label-lg">End Time</label></div>
                                     <div class="col-md-4">
                                         <input class="form-control" type="time"  name="time_end" value="{{ @$data->editLog['time_end'] }}" id="example-time-input">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-md-2"><label for="InputLarge"
                                             class="form-control-label col-form-label-lg">Time Taken</label></div>
                                     <div class="col-md-4">
                                         <input class="form-control" type="time"
                                             value="{{ @$data->editLog['time_taken'] }}"  name="time_taken"  id="example-time-input">
                                     </div>
                                 </div>
                                  <script>
                                     tinymce.init({
                                         selector: 'textarea#comment',
                                     });
                                 </script>
                                 <div class="form-group row">
                                     <div class="col-md-2"><label for="InputNormal"
                                             class="form-control-label">Comment</label></div>
                                     <div class="col-md-10">
                                         <textarea id="comment" name="comment">{{ @$data->editLog['comment'] }}</textarea>
                                     </div>
                                 </div>
                             </div>

                             <button type="button" url='{{ route('updateLog',  ['ticketid'=>!empty(@$data->ticketList[0]['id'])?$data->ticketList[0]['id']:-1,'id'=>!empty(@$data->editLog['id'])?$data->editLog['id']:-1 ])
                                                        }}' id="updateLogButton" class="btn btn-primary">Submit</button>

                           <a href="{{ url('show', !empty(@$data->ticketList[0]['id'])?$data->ticketList[0]['id']:-1) }}"> <button type="button" class="btn btn-default">Cancel</button></a>
                     </form>
                     <div class="form-group row">
                         <div class="card-header">
                             <h5 class="card-header-text">Ticket Logs</h5>
                         </div>
                         <div class="col-xs-12">
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th scope="col">Date</th>
                                             <th scope="col">Log by</th>
                                             <th scope="col">Status</th>
                                             <th scope="col">Start time</th>
                                             <th scope="col">End time</th>
                                             <th scope="col">Time took</th>
                                             <th scope="col">Comment</th>
                                             <th scope="col">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @php
                                             $logData = @$data->ticketList[0]['ticket_logs'];
                                         @endphp
                                         @for ($i = count($logData) - 1; $i >= 0; $i--)
                                             <tr>
                                                 <td>{{ date('d/m/Y', strtotime($logData[$i]['log_date'])) }}</td>
                                                 <td>{{ @$data->users[$logData[$i]['user_id']] }}</td>
                                                 <td>{{ @$data->ticketStatuses[$logData[$i]['status_type']] }}</td>
                                                 <td>{{ $logData[$i]['time_start'] }}</td>
                                                 <td>{{ $logData[$i]['time_end'] }}</td>
                                                 <td>{{ $logData[$i]['time_taken'] }}</td>
                                                 <td>{{ $logData[$i]['comment'] }}</td>
                                                 <td>
                                                     <a href={{ route('editLog', ['id' => $data->ticketList[0]['id'], 'logid' => $logData[$i]['id']]) }}>
                                                         <button type="button" class="btn btn-primary">Edit</button>
                                                     </a>
                                                     <a href="#">
                                                         <button type="button" class="btn btn-danger">Delete</button>
                                                     </a>
                                                 </td>
                                             </tr>
                                         @endfor

                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>


                 </div>

             </div>
         </div>
         <!--input sizes ends-->

     </div>

 </div>
 <!-- Main content ends -->
 </div>
 <!-- Container-fluid ends -->
 </div>
 </div>
