
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
                        <h4>Ticket Status</h4>
   
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
                           <h5 class="card-header-text">Ticket Types</h5>
                           <div class="f-right">
                              <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                           </div>
                        </div>
                        <div class="modal fade modal-flex" id="input-type-Modal" tabindex="-1" role="dialog">
                           <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
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
							{{ Form::model($data, array('route' => array('ticket-status.update', $data->id), 'method' => 'PUT')) }}
							{{ csrf_field() }}
                              <div class="form-group">
                                 <label for="exampleInputEmail1" class="form-control-label"></label>
                                 <input type="text" class="form-control" name="status_type" id="status_type" value="{{$data->status_type}}">
                              </div>
                              <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Submit</button>
							  {{ Form::close() }}
                        </div>
                     </div>
                  </div>
                  <!-- Form Control ends -->

                  <!-- Textual inputs starts -->
                  
                  <!--input State ends-->

               </div>
               <!-- Row end -->
               
                  <!--Input Groups Form ends-->
               </div>
               <!-- Row end -->
            </div>
            <!-- Main content ends -->
         </div>
         <!-- Container-fluid ends -->
      </div>
 
