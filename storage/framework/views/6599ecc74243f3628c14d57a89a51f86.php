<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            
            <style>
                .center {
                    height: 46px;
                }

                .text {
                    margin-left: 52px;
                    font-weight: 900;
                }
            </style>
            <div>
                <img class="center" src="<?php echo e(asset('admin/assets/images/login_logo_HN-removebg.png')); ?>" width="">
            </div>
            
            <img class="img-fluid for-light" src="assets/images/logo/logo.png" alt=""><img
                class="img-fluid for-dark" src="assets/images/logo/logo_dark.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                src="assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>

                    <li class="sidebar-main-title mt-5">
                        <div>
                            <h6 class="lan-1">General</h6>
                            <p class="lan-2">Dashboards,widgets & layout.</p>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link " href="<?php echo e(url('admin/dashboard')); ?>"><i data-feather="home"></i><span
                                class="">Dashboard
                            </span></a>
                        
                    </li>


                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    
                    


                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                class="fa-solid fa-file-pen fa-beat-fade">&nbsp;</i><span><b> નવી નોંધણી</b></span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(url('admin/bachat')); ?>">માસિક બચત ફોર્મ</a></li>
                            <li><a href="<?php echo e(url('admin/deposite')); ?>">ફિક્સ ડિપોઝિટ ફોર્મ</a></li>
                            <li><a href="<?php echo e(url('admin/dikari')); ?>">દીકરી કરિયાવર ફોર્મ</a>
                        </ul>
                    </li>
                    
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                class="fa-solid fa-layer-group fa-fade">&nbsp; </i>
                            <span><b> તમામ નોંધણી જુઓ</b></span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(url('admin/bachat/create')); ?>">માસિક બચત ફોર્મ</a></li>
                            <li><a href="<?php echo e(url('admin/deposite/create')); ?>">ફિક્સ ડિપોઝિટ ફોર્મ</a></li>
                            <li><a href="<?php echo e(url('admin/dikari/create')); ?>">દીકરી કરિયાવર ફોર્મ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                class="fa-solid fa-coins fa-bounce">&nbsp;&nbsp;</i>
                            <span>EMI</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(url('admin/emi')); ?>">EMI ફોર્મ</a></li>
                            <li><a href="<?php echo e(url('admin/emi/create')); ?>">EMI ફોર્મ જોવો</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                class="fa-solid fa-arrow-down-up-across-line fa-beat">&nbsp;</i><span><b>
                                    આવક/જાવક</b></span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(url('admin/roj_med')); ?>">એન્ટ્રી કરો </a></li>
                            <li><a href="<?php echo e(url('admin/roj_med/view')); ?>">આવક/જાવક હિસાબ </a></li>
                        </ul>
                    </li>
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
                        rel="stylesheet">
                    <?php if(Auth::user()->role_as == '1'): ?>
                        <li class="sidebar-list">
                            <a class="sidebar-link " href="<?php echo e(url('admin/real_roj_med/view_real_roj_med')); ?>"><i
                                    class="fa-solid fa-indian-rupee-sign fa-shake">&nbsp;</i> <span> <b> રોજ મેડ</b>
                                </span></a>
                        </li>
                    <?php else: ?>
                        &nbsp;
                    <?php endif; ?>
                    <?php if(Auth::user()->role_as == '1'): ?>
                        <li class="sidebar-list">
                            <a class="sidebar-link " href="<?php echo e(url('admin/user_list/create')); ?>"><i
                                    class="fa-solid fa-user fa-bounce">&nbsp;</i> <span> <b>User's List</b>
                                </span>
                            </a>
                        </li>
                    <?php else: ?>
                        &nbsp;
                    <?php endif; ?>

                    <?php if(Auth::user()->role_as == '1'): ?>
                        <li class="sidebar-list">
                            <a class="sidebar-link " href="<?php echo e(url('admin/report')); ?>"><i
                                    class="fa-solid fa-file fa-bounce">&nbsp;</i> <span> <b>રિપોર્ટ</b>
                                </span>
                            </a>
                        </li>
                    <?php else: ?>
                        &nbsp;
                    <?php endif; ?>


                    
                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    

                    
                    
                </ul>
            </div>
            
        </nav>
    </div>
</div>
<?php /**PATH D:\XAMPP\htdocs\HNMALL_13-02-2024\resources\views/layouts/inc/admin/slidebar.blade.php ENDPATH**/ ?>