<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <div class="sidebar">


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


            <li class="nav-item">
                <a href="{{route('admin')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-archive"></i>
                    <p>
                        Категории

                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.product.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Продукт

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.work.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-briefcase"></i>
                    <p>
                        Наши работы

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.document.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-briefcase"></i>
                    <p>
                        Document

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-user-cog"></i>
                    <p>
                        Кабинет админа

                    </p>
                </a>
            </li>

        </ul>
    </div>

</aside>
