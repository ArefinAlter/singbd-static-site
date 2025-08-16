<?php
$page_title = "Page Not Found";
$page_description = "The page you're looking for doesn't exist. Return to SingBD's homepage for apparel sourcing solutions.";
$canonical_url = "https://singbd.com/404.php";
require_once 'config.php';
include 'partials/_header.php';
?>

<main class="main">
    <div class="error-page">
        <div class="error-page__container">
            <div class="error-page__content">
                <h1 class="error-page__title">404</h1>
                <h2 class="error-page__subtitle">Page Not Found</h2>
                <p class="error-page__description">
                    The page you're looking for doesn't exist. It might have been moved, deleted, or you entered the wrong URL.
                </p>
                <div class="error-page__actions">
                    <a href="<?php echo $baseUrl; ?>/" class="error-page__btn error-page__btn--primary">
                        Go to Homepage
                    </a>
                    <a href="<?php echo $baseUrl; ?>/contact.php" class="error-page__btn error-page__btn--secondary">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
.error-page {
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: var(--spacing-4xl) 0;
}

.error-page__container {
    max-width: var(--container-width);
    margin: 0 auto;
    padding: 0 var(--spacing-lg);
    text-align: center;
}

.error-page__title {
    font-size: 6rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: var(--spacing-md);
    line-height: 1;
}

.error-page__subtitle {
    font-size: 2rem;
    font-weight: 600;
    color: var(--heading-color);
    margin-bottom: var(--spacing-lg);
}

.error-page__description {
    font-size: 1.125rem;
    color: var(--body-text-color);
    margin-bottom: var(--spacing-2xl);
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.error-page__actions {
    display: flex;
    gap: var(--spacing-md);
    justify-content: center;
    flex-wrap: wrap;
}

.error-page__btn {
    padding: var(--spacing-md) var(--spacing-xl);
    border-radius: var(--border-radius);
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: var(--spacing-sm);
}

.error-page__btn--primary {
    background: var(--primary-color);
    color: white;
}

.error-page__btn--primary:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
}

.error-page__btn--secondary {
    background: transparent;
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
}

.error-page__btn--secondary:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .error-page__title {
        font-size: 4rem;
    }
    
    .error-page__subtitle {
        font-size: 1.5rem;
    }
    
    .error-page__actions {
        flex-direction: column;
        align-items: center;
    }
    
    .error-page__btn {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
}
</style>

<?php include 'partials/_footer.php'; ?>
