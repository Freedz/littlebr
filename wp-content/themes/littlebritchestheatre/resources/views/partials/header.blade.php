<header class="banner navbar navbar-default" role="banner">
  <div class="container">
    <a class="navbar-brand" href="{{ home_url('/') }}"><img src="@asset('images/logo-header-346x275.png')" width="150px"></a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
