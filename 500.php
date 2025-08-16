<?php
$page_title = "Server Error";
$page_description = "We're experiencing technical difficulties. Please try again later or contact SingBD support.";
$canonical_url = "https://singbd.com/500.php";
require_once 'config.php';
include 'partials/_header.php';
?>

<main class="main">
    <div class="error-page">
        <div class="error-page__container">
            <div class="error-page__content">
                <h1 class="error-page__title">500</h1>
                <h2 class="error-page__subtitle">Server Error</h2>
                <p class="error-page__description">
                    We're experiencing technical difficulties. Our team has been notified and is working to resolve the issue. Please try again later.
                </p>
                <div class="error-page__actions">
                    <a href="<?php echo $baseUrl; ?>/" class="error-page__btn error-page__btn--primary">
                        Go to Homepage
                    </a>
                    <a href="<?php echo $baseUrl; ?>/contact.php" class="error-page__btn error-page__btn--secondary">
                        Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'partials/_footer.php'; ?>
