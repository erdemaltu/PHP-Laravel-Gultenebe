                <!-- end modal -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © TechnoSphere.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    <audio style="display:none" id="buzzer" src="/assets/ding-notification.wav" type="audio/wav"></audio>
                                    Tüm telif hakları saklıdır.
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset('assets')}}/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('assets')}}/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('assets')}}/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('assets')}}/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets')}}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets')}}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('assets')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('assets')}}/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets')}}/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="{{ asset('assets')}}/js/pages/dashboard.init.js"></script>

        <!-- tui charts plugins -->
        <script src="{{ asset('assets')}}/libs/tui-chart/tui-chart-all.min.js"></script>
        <!-- echarts js -->
        <script src="{{ asset('assets')}}/libs/echarts/echarts.min.js"></script>

        <!-- App js -->
        <script src="{{ asset('assets')}}/js/app.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script type="text/javascript">

            /**
             * @author Alexander Manzyuk <admsev@gmail.com>
             * Copyright (c) 2012 Alexander Manzyuk - released under MIT License
             * https://github.com/admsev/jquery-play-sound
             * Usage: $.playSound('http://example.org/sound')
             * $.playSound('http://example.org/sound.wav')
             * $.playSound('/attachments/sounds/1234.wav')
             * $.playSound('/attachments/sounds/1234.mp3')
             * $.stopSound();
            **/
            
            (function ($) {
                $.extend({
                    playSound: function () {
                        return $(
                               '<audio class="sound-player" autoplay="autoplay" style="display:none;">'
                                 + '<source src="' + arguments[0] + '" />'
                                 + '<embed src="' + arguments[0] + '" hidden="true" autostart="true" loop="false"/>'
                               + '</audio>'
                             ).appendTo('body');
                    },
                    stopSound: function () {
                        $("#triggerSound").trigger("click");
                    }
                });
            })(jQuery);
            
            function playSound(url) {
              const audio = new Audio(url);
              audio.play();
            }
            
            setInterval(function(){get_fb();}, 6000);
            
            
            function get_fb(){
            
            
            
                  $.ajax({
                          type: "GET",
                          url: "/manager_admin_pendingOrdersData",
                          success: function(data)
                          {
                              if(data.length>0){
                                var buzzer = $('#buzzer')[0];
                                buzzer.play();   
                                Toastify({
                                text: "Yeni "+data.length+ " sipariş geldi 😀",
                                duration: 6000,
                                position: "center",
                                onClick: function(){
                                window.location = '/manager_admin';
                                }
                                }).showToast();                                   
                              } else {
                                 
                              }
                          }
                        });
            }
            
            
            
            
            </script>
        @toastr_js
        @toastr_render