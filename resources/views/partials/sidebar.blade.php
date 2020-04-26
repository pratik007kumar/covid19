@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li>
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            <li class="treeview" v-if="$can('user_management_access')">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li v-if="$can('permission_access')">
                        <router-link :to="{ name: 'permissions.index' }">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('quickadmin.permissions.title')</span>
                        </router-link>
                    </li> --}}
                    <li v-if="$can('role_access')">
                        <router-link :to="{ name: 'roles.index' }">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </router-link>
                    </li>
                    <li v-if="$can('user_access')">
                        <router-link :to="{ name: 'users.index' }">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </router-link>
                    </li>
                </ul>
            </li>
            {{-- <li class="treeview" v-if="$can('contact_management_access')">
                <a href="#">
                    <i class="fa fa-phone-square"></i>
                    <span>@lang('quickadmin.contact-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li v-if="$can('contact_company_access')">
                        <router-link :to="{ name: 'contact_companies.index' }">
                            <i class="fa fa-building-o"></i>
                            <span>@lang('quickadmin.contact-companies.title')</span>
                        </router-link>
                    </li>
                    <li v-if="$can('contact_access')">
                        <router-link :to="{ name: 'contacts.index' }">
                            <i class="fa fa-user-plus"></i>
                            <span>@lang('quickadmin.contacts.title')</span>
                        </router-link>
                    </li>
                </ul>
            </li> --}}
            <li v-if="$can('patient_access')">
                <router-link :to="{ name: 'patients.index' }">
                    <i class="fa fa-address-book"></i>
                    <span>@lang('quickadmin.patient.title')</span>
                </router-link>
            </li>
            <li v-if="$can('doctor_access')">
                <router-link :to="{ name: 'doctors.index' }">
                    <i class="fa fa-user-md"></i>
                    <span>@lang('quickadmin.doctors.title')</span>
                </router-link>
            </li>

            <li>
                <router-link :to="{ name: 'quiz.home' }">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.quiz.title')</span>
                </router-link>
            </li>

            <li>
                <router-link :to="{ name: 'calendar.home' }">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.call.title')</span>
                </router-link>
            </li>

            <li>
                <router-link :to="{ name: 'auth.change_password' }">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </router-link>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
