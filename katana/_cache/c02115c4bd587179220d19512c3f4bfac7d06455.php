<?php $__env->startSection('body'); ?>
    <div class="sidebar-wrapper">
        <?php echo $__env->make('_includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div><!--//sidebar-wrapper-->

    <div class="main-wrapper">
        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
            <div class="summary">
                <ul class="list-unstyled"><li><img class="emojione" alt="💎" src="//cdn.jsdelivr.net/emojione/assets/png/1f48e.png?v=2.2.6"> Full Stack Developer</li><li><img class="emojione" alt="🖥" src="//cdn.jsdelivr.net/emojione/assets/png/1f5a5.png?v=2.2.6"> UI Designer</li><li><img class="emojione" alt="🎓" src="//cdn.jsdelivr.net/emojione/assets/png/1f393.png?v=2.2.6"> Student at the Higher Institute of Computer Science (Engineer's degree)</li><li><img class="emojione" alt="🎹" src="//cdn.jsdelivr.net/emojione/assets/png/1f3b9.png?v=2.2.6"> Pianist and Composer in my spare time <img class="emojione" alt="😋" src="//cdn.jsdelivr.net/emojione/assets/png/1f60b.png?v=2.2.6"></li></ul>
            </div><!--//summary-->
        </section><!--//section-->

        <?php /* <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>

            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">Lead Developer</h3>
                        <div class="time">2015 - Present</div>
                    </div><!--//upper-row-->
                    <div class="company">Startup Hubs, San Francisco</div>
                </div><!--//meta-->
                <div class="details">
                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                </div><!--//details-->
            </div><!--//item-->

            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">Senior Software Engineer</h3>
                        <div class="time">2014 - 2015</div>
                    </div><!--//upper-row-->
                    <div class="company">Google, London</div>
                </div><!--//meta-->
                <div class="details">
                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                </div><!--//details-->
            </div><!--//item-->

            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">UI Developer</h3>
                        <div class="time">2012 - 2014</div>
                    </div><!--//upper-row-->
                    <div class="company">Amazon, London</div>
                </div><!--//meta-->
                <div class="details">
                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                </div><!--//details-->
            </div><!--//item-->

        </section><!--//section--> */ ?>

        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Projects <?php echo e(count($projects)); ?></h2>
            <?php /* <div class="intro">
                <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
            </div><!--//intro--> */ ?>
            <?php foreach($projects as $project): ?>
                <div class="item">
                    <div class="upper-row">
                        <h3 class="job-title"><?php echo e($project['job']); ?></h3>
                        <div class="time"><?php echo e($project['period']); ?></div>
                    </div><!--//upper-row-->
                    <span class="project-title"><a href="<?php echo e($project['url']); ?>" target="_blank"><?php echo e($project['title']); ?></a></span>
                    <span class="project-tagline"><?php echo e($project['description']); ?></span>
                </div><!--//item-->
            <?php endforeach; ?>

        </section><!--//section-->

        <section class="skills-section section">
            <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
            <div class="skillset">
                <?php foreach($skills as $skill): ?>
                    <div class="item">
                        <h3 class="level-title"><?php echo e($skill['title']); ?></h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="<?php echo e($skill['level']); ?>">
                            </div>
                        </div><!--//level-bar-->
                    </div><!--//item-->
                <?php endforeach; ?>
            </div>
        </section><!--//skills-section-->
    </div><!--//main-body-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('_includes.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>