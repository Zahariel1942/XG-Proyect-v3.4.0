<div id="menu" class="left_menu">
    <div class="w-32 m-auto mt-0">
            {{ $lm_players }} <strong>{!! $user_name !!}</strong>
    </div>
    <table width="110" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <img src="{{ $dpath }}menu/ogame-produktion.jpg" width="110" height="40" />
            </td>
        </tr>
        {!! $menu_block1 !!}
        <tr>
            <td>
                <img src="{{ $dpath }}menu/info-help.jpg" width="110" height="19">
            </td>
        </tr>
        {!! $menu_block2 !!}
        <tr>
            <td>
                <img src="{{ $dpath }}menu/user-menu.jpg" width="110" height="35">
            </td>
        </tr>
        {!! $menu_block3 !!}
        {!! $admin_link !!}
        <tr>
            <td>
                <img src="{{ $dpath }}menu/info-help.jpg" width="110" height="19">
            </td>
        </tr>
        <tr>
            <td>
                <div style="text-align:center">
                    {{ $servername }} ({!! $changelog !!})
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div style="text-align:center">
                    <span style="color:#FFFFFF">
                        <a href="#" title="Powered by XG Proyect {{ $version }} &copy; 2008 - {{ $year }} GNU General Public License">&copy; 2008 - {{ $year }}</a>
                    </span>
                </div>
            </td>
        </tr>
    </table>
</div>