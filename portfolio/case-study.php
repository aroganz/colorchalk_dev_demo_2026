<?php 
include 'includes/project-data.php';

// Get the ID from the URL (e.g., case-study.php?id=nexus)
$id = $_GET['id'] ?? 'nexus'; 
$project = $projects[$id];

include 'includes/header.php'; 
?>

<article class="case-study-page">
    <header class="cs-hero">
    <div class="cs-header-content">
        <span class="cs-category"><?php echo $project['services']; ?></span>
        <h1 class="cs-title"><?php echo $project['title']; ?></h1>
        <p class="cs-tagline"><?php echo $project['tagline']; ?></p>
    </div>

    <div class="cs-image-wrapper">
        <img src="assets/img/<?php echo $project['hero_img']; ?>" 
             alt="<?php echo $project['title']; ?>" 
             loading="eager" 
             class="reveal-img">
    </div>
</header>

<section class="cs-main-image">
    <img src="<?php echo $project['hero_img']; ?>" alt="<?php echo $project['title']; ?>">
</section>    

    <section class="cs-content">
        <div class="cs-info-grid">
            <div class="info-block">
                <h5>Client</h5>
                <p><?php echo $project['client']; ?></p>
            </div>
            <div class="info-block">
                <h5>Year</h5>
                <p>2026</p>
            </div>
        </div>

        <div class="cs-narrative">
            <div class="narrative-section">
                <h3>The Challenge</h3>
                <p><?php echo $project['challenge']; ?></p>
            </div>
            <div class="narrative-section">
                <h3>The Solution</h3>
                <p><?php echo $project['solution']; ?></p>
            </div>
        </div>
    </section>
</article>

<?php include 'includes/footer.php'; ?>