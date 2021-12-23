<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-file-pdf-o"></i>
        <span class="nav-text">Manage Profile</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('profile.edit',1) }}"> Update Profile</a></li>
        <li><a href="{{ route('profile.changePassword') }}"> Change Password</a></li>
    </ul>
</li>

<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class=" fa fa-cogs"></i>
        <span class="nav-text">Manage Settings</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('skill.add') }}">Skill Manage</a></li>
        <li><a href="{{ route('category.add') }}">Article/Resource Category</a></li>
        <li><a href="{{ route('certification.add') }}">Certification Category</a> </li>á
    </ul>
</li>

<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-book"></i>
        <span class="nav-text">Manage Graduation</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('graduation.add') }}">Graduation Add/Update</a></li>
    </ul>
</li>


<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-book"></i>
        <span class="nav-text">Manage Experience</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('experience.add') }}">Experience Add/Update</a></li>
    </ul>
</li>


<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="fa fa-book"></i>
        <span class="nav-text">Manage Article/Resource</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('article.add') }}">Article/Resource Add/Update</a></li>
    </ul>
</li>
