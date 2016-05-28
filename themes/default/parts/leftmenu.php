<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo admin_url(); ?> " class="<?php echo $menu=='dashboard'?'active':''; ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
                        
            <li class="<?php echo $side=='right'?'active':''; ?>">
                <a href="#"><i class="fa fa-align-right fa-fw"></i> Right Menu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo admin_url('promotion'); ?>" class="<?php echo $menu=='promotion'?'active':''; ?>"><i class="fa fa-bullhorn fa-fw"></i> Deals and Promotions</a>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('testimonial'); ?> " class="<?php echo $menu=='testimonial'?'active':''; ?>"><i class="fa fa-weixin fa-fw"></i> Testimonials</a>
                    </li>
                    <li class="<?php echo $menu=='connected'?'active':''; ?>">
                        <a href="#"><i class="fa fa-share-alt fa-fw"></i> Stay Connected<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo admin_url('connected/links'); ?>" class="<?php echo $submenu=='social'?'active':''; ?>">Social Links</a>
                            </li>
                            <li>
                                <a href="<?php echo admin_url('block/stay_connect1'); ?>" class="<?php echo $submenu=='stay_connect1'?'active':''; ?>">Stay Connected - Block1</a>
                            </li>
                            <li>
                                <a href="<?php echo admin_url('block/stay_connect2'); ?>" class="<?php echo $submenu=='stay_connect2'?'active':''; ?>">Stay Connected - Block2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo $menu=='community'?'active':''; ?>">
                        <a href="#"><i class="fa fa-globe fa-fw"></i> Global Community Impact<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo admin_url('block/global_community_impact'); ?>" class="<?php echo $submenu=='content'?'active':''; ?>">Content</a>
                            </li>
                            <li>
                                <a href="<?php echo admin_url('community/links'); ?>" class="<?php echo $submenu=='links'?'active':''; ?>">Links</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo $menu=='local'?'active':''; ?>">
                        <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Local Community Impact<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo admin_url('block/local_community_impact'); ?>" class="<?php echo $submenu=='local_content'?'active':''; ?>">Content</a>
                            </li>
                            <li>
                                <a href="<?php echo admin_url('local/testimonials'); ?>" class="<?php echo $submenu=='testimonials'?'active':''; ?>">Testimonials</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('video'); ?>" class="<?php echo $menu=='video'?'active':''; ?>"><i class="fa fa-play fa-fw"></i> Videos</a>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('block/privacy'); ?>" class="<?php echo $submenu=='privacy'?'active':''; ?>"><i class="fa fa-file-text-o fa-fw"></i> Privacy Policy</a>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('block/gambling'); ?>" class="<?php echo $submenu=='gambling'?'active':''; ?>"><i class="fa fa-info fa-fw"></i> Gambling Addiction</a>
                    </li>
                </ul>
            </li>
            
            <li class="<?php echo $side=='left'?'active':''; ?>">
                <a href="#"><i class="fa fa-align-left fa-fw"></i> Left Menu<span class="fa arrow"></span></a>
                
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo admin_url('block/vision'); ?>" class="<?php echo $menu=='vision'?'active':''; ?>"><i class="fa fa-file-text-o fa-fw"></i> Vision</a>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('block/mission'); ?>" class="<?php echo $menu=='mission'?'active':''; ?>"><i class="fa fa-file-text-o fa-fw"></i> Mission</a>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('block/dream'); ?>" class="<?php echo $menu=='dream'?'active':''; ?>"><i class="fa fa-file-text-o fa-fw"></i> Dream</a>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('block/terms'); ?>" class="<?php echo $menu=='terms'?'active':''; ?>"><i class="fa fa-file-text-o fa-fw"></i> Terms of Service</a>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('calendar'); ?>" class="<?php echo $menu=='calendar'?'active':''; ?>"><i class="fa fa-calendar fa-fw"></i> Calendar</a>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('reason'); ?>" class="<?php echo $menu=='reason'?'active':''; ?>"><i class="fa fa-hand-o-right fa-fw"></i> 10 Reasons</a>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('faq'); ?>" class="<?php echo $menu=='faq'?'active':''; ?>"><i class="fa fa-question-circle fa-fw"></i> FAQ</a>
                    </li>
                    <li>
                        <a href="<?php echo admin_url('step'); ?>" class="<?php echo $menu=='step'?'active':''; ?>"><i class="fa fa-sort-alpha-asc fa-fw"></i> Steps</a>
                    </li>
                </ul>
            </li>
            
            <li><span class="sidebar-mini-hide">Configuration</span></li>
            <li>
                <a href="<?php echo admin_url('member'); ?>" class="<?php echo $menu=='member'?'active':''; ?>"><i class="fa fa-users fa-fw"></i> Members</a>
            </li>
            <li>
                <a href="<?php echo admin_url('setting'); ?>" class="<?php echo $menu=='setting'?'active':''; ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li>
                <a href="<?php echo admin_url('profile'); ?>" class="<?php echo $menu=='profile'?'active':''; ?>"><i class="fa fa-user fa-fw"></i> My Account</a>
            </li>            
            <li>
                <a href="<?php echo admin_url('logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->