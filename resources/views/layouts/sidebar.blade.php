<nav class="col-md-1 d-none d-md-block  sidebar shadow text-center position-relative  pt-2">
    <a href="{{route('admin.dashboard')}}" class="active" >
        <img src="./assets/Group 1000007883.png"  alt="Dashboard">
       <p class="mb-4"> Dashboard</p>
    </a>
    <a href="{{route('user.index')}}">
        <img src="/admin/assets/Group 1000008235.png"  alt="user managment">
       <p class="mb-4">User Management</p></a>
    <a href="{{route('plans.index')}}" target="_self">
        <img src="/admin/assets/Vector (2).png"  alt="Subscriptions">
        <p class="mb-4">Subscriptions</p></a>
    <a href="./sitesetting.html">
        <img src="/admin/assets/Group 1000008236.png"  alt=" Settings">
       <p class="mb-4"> Settings</p></a>
    <a href="./securitysetting.html">
        <img src="/admin/assets/Vector (3).png" alt="Security Settings">
        <p class="mb-4">Security Settings</p></a>
    <a href="./backup.html">
        <img src="/admin/assets/Group 1000008239.png"  alt=" Settings">
        <p class="mb-4">Backups</p></a>
    <a href="./newapi.html">
        <img src="/admin/assets/Group 1000008238.png"  alt=" Settings">
        <p class="mb-4">API</p></a>
        <form action="{{route('admin.logout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger mt-5">Logout</button>
        </form>
</nav>