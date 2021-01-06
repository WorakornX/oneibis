<div class="navbar-minimize-fixed">
    <button @click="$store.commit('navBarToggle')" class="minimize-sidebar btn btn-link btn-just-icon" id="minimizeSidebar2">
        <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
    </button>
</div>
<div class="sidebar" data="blue">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/" class="simple-text logo-mini">
                <img src="/sideNavLogo.png" alt="app-logo"/>
            </a>
            <a href="/" class="simple-text logo-normal">
                {{ __('EEC Line') }}
            </a>
        </div>
        <ul class="nav">

            <side title="Dashboard" icon="eec-icons icon-chart-pie-36-2" href="{{ route('home') }}" page="dashboard" activepage="{{ $activePage }}"></side>

            <side title="Vehicle" icon="eec-icons icon-delivery" href="{{ route('vehicle.index') }}" page="indexVehicle" activepage="{{ $activePage }}"></side>

            <side title="Customer" icon="eec-icons icon-contacts-2-2" href="{{ route('customer.index') }}" page="indexCustomer" activepage="{{ $activePage }}"></side>

            <side title="Vendor" icon="eec-icons icon-store" href="{{ route('vendors.index') }}" page="indexVendor" activepage="{{ $activePage }}"></side>

            <sides title="Staff" icon="eec-icons icon-business-contact-85" :expand="false">
                <side title="Driver" href="{{ route('driver.index') }}" page="indexDriver" mini="D" activepage="{{ $activePage }}"></side>
                <side title="Approver" href="{{ route('approver.index') }}" page="indexApprover" mini="A" activepage="{{ $activePage }}"></side>
                <side title="Technician" href="{{ route('technician.index') }}" page="indexTechnician" mini="T" activepage="{{ $activePage }}"></side>
            </sides>

            <hr style="background-color: #ffffff80; margin-left: 15px; margin-right: 15px;">

            <sides title="Maintenance" icon="eec-icons icon-settings-2" :expand="false">
                <side title="Tire" href="{{ route('maintenance.tire') }}" page="indexTire" mini="IN" activepage="{{ $activePage }}"></side>
                <side title="Replace Tire" href="{{ route('maintenance.replaceTire') }}" page="indexReplaceTire" mini="RP" activepage="{{ $activePage }}"></side>
                <side title="Expired Tire Report" href="{{ route('maintenance.expiredTireReport') }}" page="indexExpiredTireReport" mini="ETR"
                      activepage="{{ $activePage }}"></side>
            </sides>

            <sides title="Fast Track" icon="eec-icons icon-time" :expand="false">
                <side title="Image Track" href="{{ route('image_tracks.index') }}" page="indexImageTrack" mini="IT" activepage="{{ $activePage }}"></side>
                <side title="Location Track" href="{{ route('replacetires.create') }}" page="indexLocation" mini="LT" activepage="{{ $activePage }}"></side>
                <side title="Background" href="{{ route('fasttracks.backgrounds.index') }}" page="indexFasttrackBackground" mini="BG"
                      activepage="{{ $activePage }}"></side>
            </sides>

            <sides title="Refuel" icon="eec-icons icon-fuel" :expand="false">
                <side title="View" href="{{ route('refuel.index') }}" page="indexRefuel" mini="VI" activepage="{{ $activePage }}"></side>
                <side title="Error" href="{{ route('refuel.crud.error') }}" page="errorRefuel" mini="ER" activepage="{{ $activePage }}"></side>
                <side title="Report" href="{{ route('refuel.crud.report') }}" page="reportRefuel" mini="RE" activepage="{{ $activePage }}"></side>
            </sides>

            <sides title="Purchase" icon="tim-icons icon-cart" :expand="false">
                <side title="Tire" href="{{ route('purchases.index') }}" page="indexPurchase" mini="T" activepage="{{ $activePage }}"></side>
                <side title="Inventory" href="{{ route('inventory.index') }}" page="indexInventory" mini="I" activepage="{{ $activePage }}"></side>
            </sides>


            {{--            <sides title="TMS" icon="eec-icons icon-fuel" :expand="false">--}}
            {{--                <side title="Place" href="{{ route('places.create') }}" page="indexPlace" mini="CP" activepage="{{ $activePage }}"></side>--}}
            {{--            </sides>--}}

            <hr style="background-color: #ffffff80; margin-left: 15px; margin-right: 15px;">

            <sides title="LINE" icon="tim-icons icon-chat-33" :expand="false">
                <side title="User" href="{{ route('lines.user.index') }}" page="indexLineUser" mini="U" activepage="{{ $activePage }}"></side>
                <side title="Group" href="{{ route('lines.group.index') }}" page="indexLineGroup" mini="G" activepage="{{ $activePage }}"></side>
                <side title="Rich Menu" href="{{ route('lines.rich_menus.index') }}" page="indexLineRichMenu" mini="RM" activepage="{{ $activePage }}"></side>
            </sides>

            <side style="margin-bottom: 60px;" title="User Management" icon="eec-icons icon-circle-08" href="{{ route('user.index') }}" page="user-management"
                  activepage="{{ $activePage }}"></side>

        </ul>
    </div>
</div>


{{--            <li class="nav-item {{ ($activePage == 'createInventory' || $activePage == 'indexInventory') ? ' active' : '' }}">--}}
{{--                <a class="nav-link {{ ($activePage == 'createInventory' || $activePage == 'indexInventory') ? '' : 'collapse' }}" data-toggle="collapse"--}}
{{--                   href="#InventoryNav"--}}
{{--                   aria-expanded="{{ ($activePage == 'createInventory' || $activePage == 'indexInventory') ? 'true' : 'false' }}">--}}
{{--                    <i class="material-icons">store</i>--}}
{{--                    <p>{{ __('Inventory') }}--}}
{{--                        <b class="caret"></b>--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--                <div class="collapse {{ ($activePage == 'createInventory' || $activePage == 'indexInventory') ? 'show' : '' }}" id="InventoryNav">--}}
{{--                    <ul class="nav">--}}

{{--                        <li class="nav-item{{ $activePage == 'indexInventory' ? ' active' : '' }}">--}}
{{--                            <a class="nav-link" href="{{ route('inventories.index') }}">--}}
{{--                                <i style="margin-top: 2px;" class="material-icons">library_books</i>--}}
{{--                                <span class="sidebar-normal">{{ __('Inventory') }} </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item{{ $activePage == 'createInventory' ? ' active' : '' }}">--}}
{{--                            <a class="nav-link" href="{{ route('inventories.create') }}">--}}
{{--                                <i style="margin-top: 2px;" class="material-icons">add</i>--}}
{{--                                <span class="sidebar-normal">{{ __('Add Inventory') }} </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
