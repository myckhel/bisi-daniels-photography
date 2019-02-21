@extends('layouts.app')

@section('content')
        <style>
        .btn {
          margin-right: 10px;
          margin-bottom: 10px;
        }
        </style>
            <div class="content">
              <div class="container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="panel panel-default">
                              <div class="panel-heading">Dashboard</div>

                              <div class="panel-body text-center">
                                <div>
                                    <!-- Send notification button -->
                                    <button
                                      onclick="sendNotification()"
                                      type="button" class="btn btn-success btn-send">
                                      Send Notification
                                    </button>

                                    <!-- Enable/Disable push notifications -->
                                    <button
                                      onclick="subscribe()"
                                      type="button" class="btn btn-primary"
                                      class="btn-primary">
                                      Push Notifications
                                    </button>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
        @endsection
        @section('script')
        <script >

        </script>
        @endsection
        @section('jslink')
        
        @endsection
