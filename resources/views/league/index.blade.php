@extends('layouts.master')
@section('content')

<div class="page-content-wrapper">
        <div class="page-content">
          <div class="portlet light portlet-fit portlet-form bordered">
              <div class="portlet-title">
                  <div class="caption">
                      <i class="icon-settings font-red"></i>
                      <span class="caption-subject font-red sbold uppercase">จัดการลีกฟุตบอล</span>
                  </div>

              </div>
              <div class="portlet-body">
                  <!-- BEGIN FORM-->
                  <form action="#" id="form_sample_1" class="form-horizontal">
                      <div class="form-body"> 
                          <div class="form-group">
                              <label class="control-label col-md-3">ชื่อลีกฟุตบอล
                                  <span class="required"> * </span>
                              </label>
                              <div class="col-md-4">
                                  <input type="text" name="name" data-required="1" class="form-control" /> </div>
                          </div>


                      </div>
                      <div class="form-actions">
                          <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                  <button type="submit" class="btn green">ตกลง</button>
                                
                              </div>
                          </div>
                      </div>
                  </form>
                  <!-- END FORM-->
              </div>
          </div>
          <div class="portlet light portlet-fit bordered">
              <div class="portlet-title">
                  <div class="caption">

                      <span class="caption-subject font-dark bold uppercase">ตารางลีกฟุตบอล</span>
                  </div>

              </div>
              <div class="portlet-body">
                  <div class="table-scrollable">
                      <table class="table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th> No.</th>
                                  <th> name   </th>
                                  <th> Action </th>

                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                                  <td rowspan="2"> 1 </td>
                                  <td> Mark </td>
                                  <td>
                                    <button type="button" class="btn yellow edit">
                                      <span> Edit </span>
                                    </button>

                                    <button type="button" class="btn red delete">
                                      <i class="fa fa-trash"></i>
                                      <span> Delete </span>
                                    </button>
                                  </td></center>
                              </tr>


                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
</div>

@endsection
