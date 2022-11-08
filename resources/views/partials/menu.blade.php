<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
                <li class="nav-item">
                    <a href="{{ route("admin.time-interval.index") }}" class="nav-link {{ request()->is('admin/time-interval') || request()->is('admin/time-interval/*') ? 'active' : '' }}">
                        <i class="fas fa-clock nav-icon"></i>

                        </i>
                        {{ trans('cruds.timeInterval.title') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.mata-kuliah.index") }}" class="nav-link {{ request()->is('admin/mata-kuliah') || request()->is('admin/mata-kuliah/*') ? 'active' : '' }}">
                        <i class="fas fa-book nav-icon"></i>

                        </i>
                        {{ trans('cruds.mataKuliah.title') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.jadwal-kuliah.index") }}" class="nav-link {{ request()->is('admin/jadwal-kuliah') || request()->is('admin/jadwal-kuliah/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-school nav-icon">

                        </i>
                        {{ trans('cruds.jadwalKuliah.title') }}
                    </a>
                </li>
            <li class="nav-item">
                <a href="{{ route("admin.calendar.index") }}" class="nav-link {{ request()->is('admin/calendar') || request()->is('admin/calendar/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-calendar nav-icon">

                    </i>
                    Calendar
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
