@extends('layouts.master')
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
      <div class="portlet light portlet-fit portlet-form bordered">
          <div class="portlet-title">
              <div class="caption">
                  <i class="icon-settings font-red"></i>
                  <span class="caption-subject font-red sbold uppercase">จัดการตารางบอล</span>
              </div>

          </div>
          <div class="portlet-body">
              <!-- BEGIN FORM-->
              <form action="#" id="form_sample_1" class="form-horizontal">
                  <div class="form-body">
                          <div class="form-group">
                                <label>เลือกลีก</label>
                                  <select class="form-control">
                                          <option>Select League</option>
                                          <option>Option 2</option>
                                          <option>Option 3</option>
                                          <option>Option 4</option>
                                          <option>Option 5</option>
                                  </select>
                          </div>
                          <div class="form-group">
                                <label>เลือกช่อง</label>
                                  <select class="form-control">
                                          <option>Select Channel</option>
                                          <option>Option 2</option>
                                          <option>Option 3</option>
                                          <option>Option 4</option>
                                          <option>Option 5</option>
                                  </select>
                          </div>

                          <div class="form-group">
                              <label>เวลา</label>
                                <input type="text" class="form-control" placeholder=""> </div>

                          <div class="form-group">
                              <label>ทีม1</label>
                                <input type="text" class="form-control" placeholder=""> </div>

                          <div class="form-group">
                                <label>ทีม2</label>
                                  <input type="text" class="form-control" placeholder=""> </div>



                  </div>
                  <div class="form-actions">
                      <div class="row">
                          <div class="col-md-offset-11 col-md-2">
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
                  <span class="caption-subject font-dark bold uppercase">ตารางฟุตบอล</span>
              </div>

          </div>
          <div class="portlet-body">
              <div class="table-scrollable">
                  <table class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th> No.</th>
                              <th> League </th>
                              <th>  Channel </th>
                              <th>  Time </th>
                              <th>  Team1 </th>
                              <th>  Team2 </th>
                              <th>  Date </th>
                              <th> Action </th>

                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                              <td rowspan="2"> 1 </td>
                              <td> Mark </td>
                              <td> MANCHASTER UNITED</td>
                              <td> MANCHASTER UNITED</td>
                              <td> MANCHASTER UNITED</td>
                              <td> MANCHASTER UNITED</td>
                              <td> MANCHASTER UNITED</td>

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
