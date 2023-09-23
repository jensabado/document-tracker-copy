        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a id="dashboard" class="sidebar-link" href="/document_tracker_v2/portal/department/dashboard/" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Modules</span>
                </li>
                <li class="sidebar-item">
                    <a id="documents" class="sidebar-link" href="/document_tracker_v2/portal/department/documents/" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-dots"></i>
                        </span>
                        <span class="hide-menu">Documents</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a id="scanner" class="sidebar-link" href="/document_tracker_v2/portal/department/scanner/" aria-expanded="false">
                        <span>
                            <i class="ti ti-scan"></i>
                        </span>
                        <span class="hide-menu">Scanner</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a id="track" class="sidebar-link" href="/document_tracker_v2/portal/department/documents/track.php"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-search"></i>
                        </span>
                        <span class="hide-menu">Track Document</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a id="recieved" class="sidebar-link" href="/document_tracker_v2/portal/department/recieved/" aria-expanded="false">
                        <span>
                            <i class="ti ti-message"></i>
                        </span>
                        <span class="hide-menu">Received</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a id="archive" class="sidebar-link" href="/document_tracker_v2/portal/department/archive/" aria-expanded="false">
                        <span>
                            <i class="ti ti-archive"></i>
                        </span>
                        <span class="hide-menu">Archive</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a id="settings" class="sidebar-link" href="/document_tracker_v2/portal/department/settings/" aria-expanded="false">
                        <span>
                            <i class="ti ti-settings-2"></i>
                        </span>
                        <span class="hide-menu">Settings</span>
                    </a>
                </li>
            </ul>
        </nav>

        <script>
var page = '<?= $title ?>';

if (page === 'Home') {
    setActive('dashboard');
}
if (page === 'Documents' || page === 'Edit Document' || page === 'Add Document') {
    setActive('documents');
}
if (page === 'Scanner') {
    setActive('scanner');
}
if (page === 'Track Document') {
    setActive('track');
}
if (page === 'Settings') {
    setActive('settings');
}
if (page === 'Archive') {
    setActive('archive');
}
if (page === 'Recieved') {
    setActive('recieved');
}

function setActive(id) {
    document.getElementById(id).classList.add('active');
}
        </script>