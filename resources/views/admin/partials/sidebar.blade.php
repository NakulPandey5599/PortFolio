<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#profileMenu" aria-expanded="false"
                aria-controls="profileMenu">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Profile</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="profileMenu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/profile">Show</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/profile/create">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/profile/edit">Edit</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#projectMenu" aria-expanded="false"
                aria-controls="projectMenu">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Project</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="projectMenu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('project.show')}}" >Show</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('project.create')}}">Add</a>
                    </li>
                </ul>
            </div>
        </li>
         <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#skills" aria-expanded="false"
                aria-controls="skills">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Skills</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="skills">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('skills.show')}}">Show</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('skills.create')}}">Add</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#education" aria-expanded="false"
                aria-controls="education">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Education</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="education">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('education.show')}}">Show</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('education.create')}}">Add</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
