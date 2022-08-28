<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{ url('/admin') }}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">Tableau de Bord </span></a>
            </li>


            <li class="nav-item"><a href=""><i class="la la-barcode"></i>
                <span class="menu-title" data-i18n="nav.dash.main">Congés académiques</span>
                <span >
                    <ul class="menu-content">
                        <li >

                            <a class="menu-item" href="{{ route('admin.LeaveList') }}" data-i18n="nav.dash.ecommerce">
                                La Liste</a>
                        </li>


                    </ul>
        </li>
        <li class="nav-item"><a href=""><i class="la la-users"></i>
            <span class="menu-title" data-i18n="nav.dash.main">Condidateurs études</span>
            <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                <ul class="menu-content">
                    <li >

                        <a class="menu-item" href="{{ route('admin.CondidateList')}}" data-i18n="nav.dash.ecommerce">
                            La Liste</a>
                    </li>


                </ul>
    </li>

    <li class="nav-item"><a href=""><i class="la la-file"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> Fiche de voeux</span>
                <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                    <ul class="menu-content">
                        <li >
                            <a class="menu-item" href="{{ route('importFicheVoeux') }}" data-i18n="nav.dash.ecommerce">
                                Importer</a>
                        </li>


                    </ul>
        </li>
            <li class="nav-item"><a href=""><i class="la la-users"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> Les utilisateurs</span>
                <span {{-- class="badge badge badge-success badge-pill float-right mr-2">{{ \App\Models\Admin::count() }}</span> --}} </a>
                    <ul class="menu-content">
                        <li >
                            <a class="menu-item" href="" data-i18n="nav.dash.ecommerce">
                                La Liste </a>
                        </li>
                        <li>
                            <a class="menu-item" href="" data-i18n="nav.dash.crypto">
                                Ajouter </a>
                        </li>

                    </ul>
        </li>


    </div>
</div>
