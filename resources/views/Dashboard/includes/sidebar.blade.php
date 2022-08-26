<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{ url('/admin') }}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">Tableau de Bord </span></a>
            </li>


            <li class="nav-item"><a href=""><i class="la la-barcode"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> Les Produits</span>
                <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                    <ul class="menu-content">
                        <li >

                            <a class="menu-item" href="{{ url('admin/product/list') }}" data-i18n="nav.dash.ecommerce">
                                La Liste</a>
                        </li>


                    </ul>
        </li>
        <li class="nav-item"><a href=""><i class="la la-user-secret"></i>
            <span class="menu-title" data-i18n="nav.dash.main"> Les Ventes</span>
            <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                <ul class="menu-content">
                    <li >

                        <a class="menu-item" href="{{ route('admin.SaleList')}}" data-i18n="nav.dash.ecommerce">
                            La Liste</a>
                    </li>


                </ul>
    </li>
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> Les Vendeurs</span>
                    <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                        <ul class="menu-content">
                            <li >

                                <a class="menu-item" href="{{ url('admin/vendeur/') }}" data-i18n="nav.dash.ecommerce">
                                    La Liste</a>
                            </li>
                            <li>
                                <a class="menu-item" href="{{ url('admin/vendeur/create/') }}" data-i18n="nav.dash.crypto">
                                    Ajouter </a>
                            </li>
                            {{-- <li>
                                <a class="menu-item" href="{{ route('importEmployeeExcel') }}" data-i18n="nav.dash.crypto">
                                    Importer Excel </a>
                            </li> --}}
                        </ul>
            </li>
            <li class="nav-item"><a href=""><i class="la la-users"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> Les Gérants de stock</span>
                <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                    <ul class="menu-content">
                        <li >
                            <a class="menu-item" href="{{ route('admin.StoreManagerList') }}" data-i18n="nav.dash.ecommerce">
                                La Liste </a>
                        </li>
                        <li>
                            <a class="menu-item" href="{{ route('admin.StoreManagerCreate') }}" data-i18n="nav.dash.crypto">
                                Ajouter </a>
                        </li>
                        {{-- <li>
                            <a class="menu-item" href="{{ route('importEmployeeExcel') }}" data-i18n="nav.dash.crypto">
                                Importer Excel </a>
                        </li> --}}
                    </ul>
        </li>
        <li class="nav-item"><a href=""><i class="la la-user-secret"></i>
            <span class="menu-title" data-i18n="nav.dash.main"> Les Fournisseurs</span>
            <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                <ul class="menu-content">
                    <li >

                        <a class="menu-item" href="{{ url('admin/providers/list')}}" data-i18n="nav.dash.ecommerce">
                            La Liste</a>
                    </li>


                </ul>
    </li>
    </div>
</div>
