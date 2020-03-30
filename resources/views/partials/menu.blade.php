<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('owners_list_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw far fa-address-book">

                        </i>
                        <span>{{ trans('cruds.ownersList.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('owner_access')
                            <li class="{{ request()->is('admin/owners') || request()->is('admin/owners/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.owners.index") }}">
                                    <i class="fa-fw fas fa-cogs">

                                    </i>
                                    <span>{{ trans('cruds.owner.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('nastavenium_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.nastavenium.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('typeproperty_access')
                            <li class="{{ request()->is('admin/typeproperties') || request()->is('admin/typeproperties/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.typeproperties.index") }}">
                                    <i class="fa-fw fas fa-cogs">

                                    </i>
                                    <span>{{ trans('cruds.typeproperty.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('typelease_access')
                            <li class="{{ request()->is('admin/typeleases') || request()->is('admin/typeleases/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.typeleases.index") }}">
                                    <i class="fa-fw fas fa-cogs">

                                    </i>
                                    <span>{{ trans('cruds.typelease.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('non_crud_access')
                <li class="{{ request()->is('admin/non-cruds') || request()->is('admin/non-cruds/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.non-cruds.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.nonCrud.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('hlavnemenu_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.hlavnemenu.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('lease_access')
                            <li class="{{ request()->is('admin/leases') || request()->is('admin/leases/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.leases.index") }}">
                                    <i class="fa-fw fas fa-cogs">

                                    </i>
                                    <span>{{ trans('cruds.lease.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('basic_c_r_m_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-briefcase">

                        </i>
                        <span>{{ trans('cruds.basicCRM.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('crm_status_access')
                            <li class="{{ request()->is('admin/crm-statuses') || request()->is('admin/crm-statuses/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.crm-statuses.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.crmStatus.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('crm_customer_access')
                            <li class="{{ request()->is('admin/crm-customers') || request()->is('admin/crm-customers/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.crm-customers.index") }}">
                                    <i class="fa-fw fas fa-user-plus">

                                    </i>
                                    <span>{{ trans('cruds.crmCustomer.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('crm_note_access')
                            <li class="{{ request()->is('admin/crm-notes') || request()->is('admin/crm-notes/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.crm-notes.index") }}">
                                    <i class="fa-fw fas fa-sticky-note">

                                    </i>
                                    <span>{{ trans('cruds.crmNote.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('crm_document_access')
                            <li class="{{ request()->is('admin/crm-documents') || request()->is('admin/crm-documents/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.crm-documents.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.crmDocument.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('task_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-list">

                        </i>
                        <span>{{ trans('cruds.taskManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('task_status_access')
                            <li class="{{ request()->is('admin/task-statuses') || request()->is('admin/task-statuses/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.task-statuses.index") }}">
                                    <i class="fa-fw fas fa-server">

                                    </i>
                                    <span>{{ trans('cruds.taskStatus.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('task_tag_access')
                            <li class="{{ request()->is('admin/task-tags') || request()->is('admin/task-tags/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.task-tags.index") }}">
                                    <i class="fa-fw fas fa-server">

                                    </i>
                                    <span>{{ trans('cruds.taskTag.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('task_access')
                            <li class="{{ request()->is('admin/tasks') || request()->is('admin/tasks/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.tasks.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.task.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('tasks_calendar_access')
                            <li class="{{ request()->is('admin/tasks-calendars') || request()->is('admin/tasks-calendars/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.tasks-calendars.index") }}">
                                    <i class="fa-fw fas fa-calendar">

                                    </i>
                                    <span>{{ trans('cruds.tasksCalendar.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('contact_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-phone-square">

                        </i>
                        <span>{{ trans('cruds.contactManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('contact_company_access')
                            <li class="{{ request()->is('admin/contact-companies') || request()->is('admin/contact-companies/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.contact-companies.index") }}">
                                    <i class="fa-fw fas fa-building">

                                    </i>
                                    <span>{{ trans('cruds.contactCompany.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('contact_contact_access')
                            <li class="{{ request()->is('admin/contact-contacts') || request()->is('admin/contact-contacts/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.contact-contacts.index") }}">
                                    <i class="fa-fw fas fa-user-plus">

                                    </i>
                                    <span>{{ trans('cruds.contactContact.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>