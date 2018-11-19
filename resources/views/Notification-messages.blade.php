     @if ($errors->any())
                      <div class="header error-messages">
                      <div class="alert alert-danger alert-dismissible fade show">
                              <ul style="text-align:right">
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                              <button type="button" class="close"  data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      </div>
                  @endif
                  @if(Session::has('success'))
                      <div class="header">
                      <div class="alert alert-success alert-dismissible fade show">                    
                              {{ Session::get('success') }}
                              @php
                              Session::forget('success');
                              @endphp
                              <button type="button" class="close"  data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      </div>
                  @endif
                  @if(Session::has('fail'))
                      <div class="header">
                      <div class="alert alert-danger alert-dismissible fade show">                    
                              {{ Session::get('fail') }}
                              @php
                              Session::forget('fail');
                              @endphp
                              <button type="button" class="close"  data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      </div>
                  @endif