<div class="sidebar">
  <div class="logo-details">
    <i class="bx bx-category"></i>
    <span class="logo_name">Flight</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class="bx bx-grid-alt"></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="/Schedule" class="{{ request()->Is('Schedule*') ? 'active' : '' }}">
        <i class="bx bx-box"></i>
        <span class="links_name">Schedule</span>
      </a>
    </li>
    <li>
      <a href="/Flight" class="{{ request()->Is('Flight*') ? 'active' : '' }}">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">Flight</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-log-out"></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
  </ul>
</div>
