<?php $__env->startSection('body'); ?>
    <div class="sidebar-wrapper">
        <?php echo $__env->make('_includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="main-wrapper">
        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
            <div class="summary">
                <ul class="list-unstyled">
                    <li><img class="emojione" alt="💎" src="//cdn.jsdelivr.net/emojione/assets/png/1f48e.png?v=2.2.6"> Full Stack Developer,  Creator of Lollipop image editor</li>
                    <li><img class="emojione" alt="🖥" src="//cdn.jsdelivr.net/emojione/assets/png/1f5a5.png?v=2.2.6"> UI Designer</li>
                    <li><img class="emojione" alt="🎓" src="//cdn.jsdelivr.net/emojione/assets/png/1f393.png?v=2.2.6"> Student at the Higher Institute of Computer Science (Engineer's degree)</li>
                    <li><img class="emojione" alt="🎹" src="//cdn.jsdelivr.net/emojione/assets/png/1f3b9.png?v=2.2.6"> Pianist and Composer in my spare time <img class="emojione" alt="😋" src="//cdn.jsdelivr.net/emojione/assets/png/1f60b.png?v=2.2.6"></li></ul>
            </div>
        </section>
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">Frontend / Backend Developer</h3>
                        <div class="time">February 2016</div>
                    </div>
                    <div class="company">BNA Bank</div>
                </div>
                <div class="details">
                    <p>Develop a Java EE web application that allows the management of promissory notes.</p>
                </div>
            </div>
        </section>
        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-users"></i>Organisations</h2>
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">IEEE Member</h3>
                        <div class="time">December 2016</div>
                    </div>
                    <div class="company">IEEE Tunisia Section</div>
                </div>
                <div class="details">
                    <p>A member of the world's largest technical professional organization dedicated to advancing technology for the benefit of humanity.</p>
                    <a href="/Certificate of Participation - IEEEXtreme 11.0 - Saifeddine Essid.pdf">Certificate of Participation - IEEEXtreme 11.0</a>
                </div>
            </div>
        </section>
        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Projects <?php echo e(count($projects)); ?></h2>
            <?php foreach($projects as $project): ?>
                <div class="item">
                    <div class="upper-row">
                        <h3 class="job-title"><?php echo e($project['job']); ?></h3>
                        <div class="time"><?php echo e($project['period']); ?></div>
                    </div>
                    <span class="project-title"><a href="<?php echo e($project['url']); ?>" target="_blank"><?php echo e($project['title']); ?></a></span>
                    <span class="project-tagline"><?php echo e($project['description']); ?></span>
                </div>
            <?php endforeach; ?>
        </section>
        <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
            <div class="skillset">
                <?php foreach($skills as $skill): ?>
                    <div class="item">
                        <h3 class="level-title"><?php echo e($skill['title']); ?></h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="<?php echo e($skill['level']); ?>">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('_includes.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>