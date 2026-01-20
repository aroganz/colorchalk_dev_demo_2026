<?php include 'includes/header.php'; include 'includes/project-data.php'; ?>

<main class="hero">
    <h1 class="intro-text">Independent Designer <br> crafting <span>digital emotion</span>.</h1>
</main>

<section id="work" class="project-list">
    <?php 
    $i = 1; // Counter for the index (01, 02, etc.)
    foreach ($projects as $id => $project): 
    ?>
        <div class="project-item" data-img="<?php echo $project['hero_img']; ?>">
            <span class="index"><?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?></span>
            
            <a href="case-study.php?id=<?php echo $id; ?>" class="project-link">
                <h2 class="project-title"><?php echo $project['title']; ?></h2>
                <p class="project-meta">
                    <?php echo $project['services']; ?> 
                    <?php echo isset($project['year']) ? '/ ' . $project['year'] : '/ 2026'; ?>
                </p>
            </a>
        </div>
    <?php 
    $i++; 
    endforeach; 
    ?>
</section>

<section class="recognition">
    <div class="section-label">Selected Recognition</div>
    <div class="award-item">
        <span class="award-year">2026</span>
        <span class="award-name">Site of the Day</span>
        <span class="award-org">Awwwards</span>
    </div>
    <div class="award-item">
        <span class="award-year">2025</span>
        <span class="award-name">Design Excellence</span>
        <span class="award-org">Behance</span>
    </div>
    <div class="award-item">
        <span class="award-year">2025</span>
        <span class="award-name">Innovation Award</span>
        <span class="award-org">FWA</span>
    </div>
</section>

<section class="approach">
    <div class="approach-header">
        <h2>Systemic Design <br> meets emotional <br> interaction.</h2>
    </div>
    <div class="approach-details">
        <div class="service">
            <h4>01 / Interaction</h4>
            <p>Moving beyond static pixels to create living digital interfaces that respond to human behavior.</p>
        </div>
        <div class="service">
            <h4>02 / Strategy</h4>
            <p>Aligning business goals with user needs to create products that are both beautiful and functional.</p>
        </div>
    </div>
</section>

<section class="contact-cta">
    <a href="contact.php" class="big-mail-link">
        Start a Project <span>→</span>
    </a>
</section>

<div id="hover-preview"></div>

<?php include 'includes/footer.php'; ?>