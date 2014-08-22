<?php
/** Created by griga at 19.05.2014 | 17:17.
 *
 */
?>
<ul class="nav navbar-top-links navbar-right">
    <!--<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-inbox"></i>
        </a>
        <ul class="dropdown-menu dropdown-messages">
            <li>
                <a href="/gii">
                    <div>
                        <strong>John Smith</strong>
                                                    <span class="pull-right text-muted">
                                                        <em>Yesterday</em>
                                                    </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <strong>John Smith</strong>
                                                    <span class="pull-right text-muted">
                                                        <em>Yesterday</em>
                                                    </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <strong>John Smith</strong>
                                                    <span class="pull-right text-muted">
                                                        <em>Yesterday</em>
                                                    </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    <strong>Read All Messages</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-tasks"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-tasks">
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 1</strong>
                            <span class="pull-right text-muted">40% Complete</span>
                        </p>

                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 2</strong>
                            <span class="pull-right text-muted">20% Complete</span>
                        </p>

                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 3</strong>
                            <span class="pull-right text-muted">60% Complete</span>
                        </p>

                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 4</strong>
                            <span class="pull-right text-muted">80% Complete</span>
                        </p>

                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    <strong>See All Tasks</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </li>-->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-bell"></i>
            <?php if(count(Notification::unread())):?>
                <span class="label label-success"><?= count(Notification::unread()) ?></span>
            <?php endif;?>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
            <?php foreach (Notification::unread() as $notification): ?>
                <li>
                    <a href="/admin/notification/list/view/<?= $notification->id ?>">
                        <div>
                            <i class="fa fa-comment fa-fw"><?= $notification->getTypeName() ?></i>

                            <span class="pull-right text-muted small"><?= app()->format->timeago(new DateTime($notification->create_time)) ?></span>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="/admin/notification/list">
                    <strong><?= t('See All Notifications'); ?></strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-cog"></i>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
            <li><a href="/admin/sys/config"><i class="glyphicon glyphicon-cog"></i> <?= t('Settings'); ?></a>
            </li>
            <li class="divider"></li>
            <li><a href="/admin/sys/template"><i class="glyphicon glyphicon-hdd"></i> <?= t('Templates'); ?></a>
            </li>
            <li class="divider"></li>
            <li><a href="/admin/customfield"><i class="glyphicon glyphicon-hdd"></i> <?= t('Custom field'); ?></a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-user"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="/admin/user/manage/update/<?= user()->id ?>"><i
                        class="glyphicon glyphicon-user"></i> <?= t('User Profile'); ?></a>
            </li>
            <li class="divider"></li>
            <li><a href="<?= app()->createUrl('site/logout') ?>"><i
                        class="glyphicon glyphicon-log-out"></i> <?= t('Logout') ?></a>
            </li>
        </ul>
    </li>
</ul>
<!-- /.navbar-top-links -->
