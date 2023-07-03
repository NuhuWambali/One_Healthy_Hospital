
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <h4>One Healthy</h4>
    </div>
    <ul class="nav">
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('admin.show')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-account-tie"></i>
          </span>
          <span class="menu-title">Doctors</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('addDoctor.show')}}">Add Doctor</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('viewDoctor.show')}}">View Doctors</a></li>

          </ul>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('appointment.show')}}">
          <span class="menu-icon">
            <i class="mdi mdi-hand"></i>
          </span>
          <span class="menu-title">Appointment</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('patient.show')}}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Patient</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('message')}}">
          <span class="menu-icon">
            <i class="mdi mdi-message"></i>
          </span>
          <span class="menu-title">Messages</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('allUser.show')}}">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">All Users</span>
        </a>
      </li>
    </ul>
  </nav>
