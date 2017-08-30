<div class="profile-container">
    <img class="profile" src="assets/images/profile.jpg" alt="" />
    <h1 class="name"><?php echo e($name); ?></h1>
    <h3 class="tagline"><i class="fa fa-diamond" aria-hidden="true"></i> Full Stack Developer
</h3>
</div>
<div class="contact-container container-block">
    <ul class="list-unstyled contact-list">
        <li class="email"><i class="fa fa-envelope"></i><a href="<?php echo e('mailto: '.$email); ?>"><?php echo e($email); ?></a></li>
        <li class="website"><i class="fa fa-globe"></i><a href="<?php echo e('http://'.$website); ?>" target="_blank"><?php echo e($website); ?></a></li>
        <li class="linkedin"><i class="fa fa-linkedin"></i><a href="<?php echo e('https://'.$linkedIn); ?>" target="_blank"><?php echo e($linkedIn); ?></a></li>
        <li class="github"><i class="fa fa-github"></i><a href="<?php echo e('https://'.$github); ?>" target="_blank"><?php echo e($github); ?></a></li>
        <li class="twitter"><i class="fa fa-twitter"></i><a href="<?php echo e('https://twitter.com/'.$twitter); ?>" target="_blank"><?php echo e('@'.$twitter); ?></a></li>
        <li class="youtube"><i class="fa fa-youtube"></i><a href="<?php echo e('https://youtube.com/'.$youtube); ?>" target="_blank"><?php echo e($youtube); ?> (300K Views)</a></li>
    </ul>
</div>
<div class="education-container container-block">
    <h2 class="container-block-title"><i class="fa fa-graduation-cap"></i> Education</h2>
    <?php foreach($education as $e): ?>
    <div class="item">
        <h4 class="degree"><?php echo e($e['title']); ?></h4>
        <h5 class="meta"><?php echo e($e['university']); ?></h5>
        <div class="time"><?php echo e($e['period']); ?></div>
    </div>
    <?php endforeach; ?>
</div>
<div class="languages-container container-block">
    <h2 class="container-block-title"><i class="fa fa-language"></i> Languages</h2>
    <ul class="list-unstyled interests-list">
        <?php foreach($languages as $language): ?>
            <li><?php echo e($language['name']); ?> <span class="lang-desc">(<?php echo e($language['n/p']); ?>)</span></li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="interests-container container-block">
    <h2 class="container-block-title"><i class="fa fa-music"></i> Interests</h2>
    <ul class="list-unstyled interests-list">
    <?php foreach($interests as $interest): ?>
        <li><?php echo e($interest); ?></li>
    <?php endforeach; ?>
    </ul>
</div>


