<div class="header-container py-4">
    <div class="flex justify-center items-center gap-8">
        <div>
            <img class=" size-14" src="{{ $dpath }}planets/small/s_{{ $image }}.jpg">
        </div>
        <ui-planet-switcher planets='{!! $planetlist !!}'></ui-planet-switcher>
        <div class="flex flex-col items-center">
            <img class=" w-11 h-6" src="{{ $dpath }}resources/metal.gif" />
            <span class=" font-bold">{{ $metal }}</span>
            <span class=" inline">{!! $re_metal !!}</span>
        </div>
        <div class="flex flex-col items-center">
            <img class=" w-11 h-6" src="{{ $dpath }}resources/crystal.gif" />
            <span class=" font-bold">{{ $crystal }}</span>
            <span class=" inline">{!! $re_crystal !!}</span>
        </div>
        <div class="flex flex-col items-center">
            <img class=" w-11 h-6" src="{{ $dpath }}resources/deuterium.gif" />
            <span class=" font-bold">{{ $deuterium }}</span>
            <span class=" inline">{!! $re_deuterium !!}</span>
        </div>
        <!-- <div class="flex flex-col items-center">
            <img class=" w-11 h-6" src="{{ $dpath }}resources/darkmatter.jpg" />
            <span class=" font-bold">{{ $dark_matter }}</span>
            <span class=" inline">{!! $re_darkmatter !!}</span>
        </div> -->
        <div class="flex flex-col items-center">
            <img class=" w-11 h-6" src="{{ $dpath }}resources/energy.gif" />
            <span class=" font-bold">{{ $energy }}</span>
            <span class=" inline">{!! $re_energy !!}</span>
        </div>
    </div>
    {!! $show_umod_notice !!}
</div>

<!-- <div class="header-container">
    <table class="header">
        <tr class="header">
            <td class="header" style="width:5;">
                <table class="header">
                    <tr class="header">
                        <td class="header">
                            <img src="{{ $dpath }}planets/small/s_{{ $image }}.jpg" height="50" width="50">
                        </td>
                        <td class="header">
                            <table class="header">
                                <select size="1" onchange="location = this.options[this.selectedIndex].value;">
                                {!! $planetlist !!}
                                </select>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="header">
                <table class="header" id="resources" cellspacing="0" cellpadding="0" padding-right="30">
                    <tr class="header" style="text-align:center">
                        <td width="85" class="header">
                            <img src="{{ $dpath }}resources/metal.gif" width="42" height="22">
                        </td>
                        <td width="85" class="header">
                            <img src="{{ $dpath }}resources/crystal.gif" width="42" height="22">
                        </td>
                        <td width="85" class="header">
                            <img src="{{ $dpath }}resources/deuterium.gif" width="42" height="22">
                        </td>
                        <td width="85" class="header">
                            <img src="{{ $dpath }}resources/darkmatter.jpg" width="42" height="22" title="Dark Matter">
                        </td>
                        <td width="85" class="header">
                            <img src="{{ $dpath }}resources/energy.gif" width="42" height="22">
                        </td>
                    </tr>
                    <tr class="header" style="text-align:center">
                        <td class="header" width="85">
                            <span style="font-weight:700;font-style: italic;">{{ $metal }}</span>
                        </td>
                        <td class="header" width="85">
                            <span style="font-weight:700;font-style: italic;">{{ $crystal }}</span>
                        </td>
                        <td class="header" width="85">
                            <span style="font-weight:700;font-style: italic;">{{ $deuterium }}</span>
                        </td>
                        <td class="header" width="85">
                            <span style="font-weight:700;font-style: italic;">{{ $dark_matter }}</span>
                        </td>
                        <td class="header" width="85">
                            <span style="font-weight:700;font-style: italic;">{{ $energy }}</span>
                        </td>
                    </tr>
                    <tr class="header" style="text-align:center">
                        <td class="header" width="90">{!! $re_metal !!}</td>
                        <td class="header" width="90">{!! $re_crystal !!}</td>
                        <td class="header" width="90">{!! $re_deuterium !!}</td>
                        <td class="header" width="90">{!! $re_darkmatter !!}</td>
                        <td class="header" width="90">{!! $re_energy !!}</td>
                    </tr>
                </table>
            </td>
            <td class="header">
                <table class="header">
                    <tr class="header">
                        <td style="margin: 0 auto;" width="35px" class='header'>
                            <a href="game.php?page=officier" accesskey="o">
                                <img style="border:0;" src="{{ $dpath }}premium/commander_ikon{{ $img_premium_officier_commander }}.gif" width="32" height="32" alt="{{ $of_hire_commander }}" onmouseover="return overlib('<table width=390px><tr><td class=c>{{ $of_hire_commander }}</td></tr><tr><th style=text-align:left>{{ $add_premium_officier_commander }}</th></tr></table>');" onmouseout="return nd();">
                            </a>
                        </td>
                        <td style="margin: 0 auto;" width="35" class="header">
                            <a href="game.php?page=officier" accesskey="o">
                                <img style="border:0;" src="{{ $dpath }}premium/admiral_ikon{{ $img_premium_officier_admiral }}.gif" width="32" height="32" alt="{{ $of_hire_admiral }}" onmouseover="return overlib('<table width=390px><tr><td class=c>{{ $of_hire_admiral }}</td></tr><tr><th style=text-align:left>{{ $add_premium_officier_admiral }}</th></tr></table>');" onmouseout="return nd();">
                            </a>
                        </td>
                        <td style="margin: 0 auto;" width="35" class="header">
                            <a href="game.php?page=officier" accesskey="o">
                                <img style="border:0;" src="{{ $dpath }}premium/ingenieur_ikon{{ $img_premium_officier_engineer }}.gif" width="32" height="32" alt="{{ $of_hire_engineer }}" onmouseover="return overlib('<table width=310px><tr><td class=c>{{ $of_hire_engineer }}</td></tr><tr><th style=text-align:left>{{ $add_premium_officier_engineer }}</th></tr></table>');" onmouseout="return nd();">
                            </a>
                        </td>
                        <td style="margin: 0 auto;" width="35" class="header">
                            <a href="game.php?page=officier" accesskey="o">
                                <img style="border:0;" src="{{ $dpath }}premium/geologe_ikon{{ $img_premium_officier_geologist }}.gif" width="32" height="32" alt="{{ $of_hire_geologist }}" onmouseover="return overlib('<table width=200px><tr><td class=c>{{ $of_hire_geologist }}</td></tr><tr><th style=text-align:left>{{ $add_premium_officier_geologist }}</th></tr></table>');" onmouseout="return nd();">
                            </a>
                        </td>
                        <td style="margin: 0 auto;" width="35" class="header">
                            <a href="game.php?page=officier" accesskey="o">
                                <img style="border:0;" src="{{ $dpath }}premium/technokrat_ikon{{ $img_premium_officier_technocrat }}.gif" width="32" height="32" alt="{{ $of_hire_technocrat }}" onmouseover="return overlib('<table width=275px><tr><td class=c>{{ $of_hire_technocrat }}</td></tr><tr><th style=text-align:left>{{ $add_premium_officier_technocrat }}</th></tr></table>');" onmouseout="return nd();">
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    {!! $show_umod_notice !!}
</div> -->
