@extends('apps.app')



@section('content')

<section class="content-header">
        <!-- right column -->
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Horizontal Form</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">{{ __('dashboard.email') }}</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">{{ __('dashboard.attributes.password') }}</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Remember me
                        </label>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-info pull-right">Sign in</button>
                </div><!-- /.box-footer -->
              </form>
            </div><!-- /.box -->

          </div><!--/.col (right) -->
  </section>


@endsection


