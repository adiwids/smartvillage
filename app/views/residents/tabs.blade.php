<li role="presentation"{{ $tab == 'personal_information' ? ' class=active' : '' }}>
  <a href="/residentials/residents/1/edit" role="tab" aria-controls="personal_information">
    <i class="glyphicon glyphicon-info-sign"></i>
    Personal Information
  </a>
</li>
<li role="presentation"{{ $tab == 'photos' ? ' class=active' : '' }}>
  <a href="/residentials/residents/1/photos" role="tab" aria-controls="photos">
    <i class="glyphicon glyphicon-camera"></i>
    Photos
  </a>
</li>
<li role="presentation"{{ $tab == 'education' ? ' class=active' : '' }}>
  <a href="/residentials/residents/1/education" role="tab" aria-controls="education">
    <i class="glyphicon glyphicon-education"></i>
    Education
  </a>
</li>
<li role="presentation"{{ $tab == 'family' ? ' class=active' : '' }}>
  <a href="/residentials/residents/1/family" role="tab" aria-controls="family">
    <i class="glyphicon glyphicon-tower"></i>
    Family
  </a>
</li>
<li role="presentation"{{ $tab == 'jobs' ? ' class=active' : '' }}>
  <a href="/residentials/residents/1/jobs" role="tab" aria-controls="jobs">
    <i class="glyphicon glyphicon-briefcase"></i>
    Jobs
  </a>
</li>
