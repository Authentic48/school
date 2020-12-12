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
            <a href="{{ route('manager.courses') }}">
              <i class="fa fa-book"></i> <span>курсы</span>
            </a>
          </li>
          <li>
            <a href="{{ route('manager.reviews') }}">
              <i class="fa fa-child"></i><span>отзывы</span>
            </a>
          </li>
          <li>
            <a href="{{ route('pricings.edit') }}">
              <i class="fa fa-money"></i> <span>цены</span>
            </a>
          </li>
          <li>
            <a href="{{ route('manager.applications') }}">
              <i class="fa fa-pencil-square-o"></i> <span>Applications</span>
            </a>
          </li>
          <li>
            <a href="{{ route('manager.branches') }}">
              <i class="fa fa-location-arrow"></i> <span>Наш филиали</span>
            </a>
          </li>
      </ul>
    </section>
  </aside>