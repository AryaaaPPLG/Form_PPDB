<style>
    #loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .loader {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<div id="loading-overlay">
    <div class="loader"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loadingOverlay = document.getElementById("loading-overlay");

        // Hide the loading overlay when the page is fully loaded
        window.addEventListener("load", function() {
            loadingOverlay.style.display = "none";
        });

        // Show the loading overlay when a link is clicked
        document.querySelectorAll("a").forEach(function(link) {
            link.addEventListener("click", function() {
                loadingOverlay.style.display = "flex";
            });
        });

        // Show the loading overlay when a form is submitted
        document.querySelectorAll("form").forEach(function(form) {
            form.addEventListener("submit", function() {
                loadingOverlay.style.display = "flex";
            });
        });
    });
</script>
