  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          @if (Auth::user()->hasRole('admin'))
          <a href="/admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          @endif
        </li>
        <li class="active">
          @if (Auth::user()->hasRole('manager'))
          <a href="/manager">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          @endif
        </li>
        <li>
            <a>
              <i class="fa"></i> <span>Blog</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa "></i> <span>Events</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa "></i> <span>Courses</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa "></i> <span>Testimonials</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa "></i> <span>Pricings</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa"></i> <span>Applications</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa"></i> <span>Offices</span>
            </a>
          </li>
      </ul>
    </section>
  </aside>