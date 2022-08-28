<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Literasi</span>
        </a>


        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <p class="ms-4">Selamat Datang, {{ auth()->guard('siswa')->user()->nama }}</p>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Menu</span>
        </li>
        <!-- Forms -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Menu Pembiasaan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/ekstensif/create" class="menu-link">
                        <div data-i18n="Basic Inputs">Pembiasaan Ektensif</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pembiasaan-kerohanian.html" class="menu-link">
                        <div data-i18n="Input groups">Pembiasaan Kerohanian</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/ekstensif" class="menu-link">
                        <div data-i18n="Input groups">
                            Laporan Pembiasaan Ektensif
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="laporan-kerohanian.html" class="menu-link">
                        <div data-i18n="Input groups">
                            Laporan Pembiasaan Kerohanian
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="analisa-ekstensif.html" class="menu-link">
                        <div data-i18n="Input groups">
                            Analisa Pembiasaan Ektensif
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="analisa-kerohanian.html" class="menu-link">
                        <div data-i18n="Input groups">
                            Analisa Pembiasaan Kerohanian
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Menu Pengembangan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="kunjungan.html" class="menu-link">
                        <div data-i18n="Vertical Form">Kunjungan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="unggah-karya.html" class="menu-link">
                        <div data-i18n="Horizontal Form">Unggahan Karya</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ukbi.html" class="menu-link">
                        <div data-i18n="Vertical Form">UKBI</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="laporan-kunjungan.html" class="menu-link">
                        <div data-i18n="Vertical Form">Laporan Kunjungan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="laporan-unggahan-karya.html" class="menu-link">
                        <div data-i18n="Vertical Form">Laporan Unggahan Karya</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="laporan-ukb.html" class="menu-link">
                        <div data-i18n="Vertical Form">Laporan UKBI</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="analisa-kunjungan.html" class="menu-link">
                        <div data-i18n="Vertical Form">Analisa Kunjungan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="analisa-karya.html" class="menu-link">
                        <div data-i18n="Vertical Form">Analisa Karya</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="analisa-ukbi.html" class="menu-link">
                        <div data-i18n="Vertical Form">Analisa UKBI</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Tables -->
        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Perpustakaan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item active">
                    <a href="index.html" class="menu-link">
                        <div data-i18n="Vertical Form">Daftar Buku</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="input-data.html" class="menu-link">
                        <div data-i18n="Vertical Form">Input Buku</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="laporan-buku.html" class="menu-link">
                        <div data-i18n="Vertical Form">Laporan Buku</div>
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>
</aside>
<!-- / Menu -->
