@if(!Auth::guest())
    <li class="{{ \Request::is('userAccounts*') ? 'active' : '' }}">
        <a href="{!! '/userAccounts' !!}"><i class="fa fa-edit"></i><span>Accounts</span></a>
    </li>

    <li class="{{ \Request::is('settings*') ? 'active' : '' }}">
        <a href="{!! '/settings' !!}"><i class="fa fa-edit"></i><span>Settings</span></a>
    </li>
@endif

<li class="{{ Request::is('actionScores*') ? 'active' : '' }}">
    <a href="{!! route('actionScores.index') !!}"><i class="fa fa-edit"></i><span>Action Scores</span></a>
</li>

