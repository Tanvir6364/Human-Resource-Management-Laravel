<div class="row">

    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">

        <ul class="user-info pull-left pull-none-xsm">

            <!-- Profile Info -->
            <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="resource/images/<?php echo $loggedData->profile_picture;?>" alt="" class="img-circle" width="44" />
                    <a href="views/employee/profile.php?id=<?php echo $loggedData->id?>"><?php echo $loggedData->first_name." ".$loggedData->last_name;?></a>
                </a>


            </li>

        </ul>


    </div>


    <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">
        <ul class="list-inline links-list pull-right">
            <li class="sep"></li>
            <li>
                <a href="views/User/Authentication/logout.php">
                    Log Out <i class="entypo-logout right"></i>
                </a>
            </li>
        </ul>
    </div>
</div>