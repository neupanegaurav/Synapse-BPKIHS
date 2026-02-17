<?php
/**
 * Base Controller
 * Provides shared rendering logic for all controllers.
 */

class Controller
{
    /**
     * Render a view wrapped in the layout (header + footer).
     *
     * @param string $view   Path relative to VIEW_PATH, e.g. 'home/index'
     * @param array  $data   Variables to extract into the view scope
     */
    protected function render(string $view, array $data = []): void
    {
        // Extract data so views can use $variable directly
        extract($data);

        // Capture the main content
        ob_start();
        $viewFile = VIEW_PATH . '/' . $view . '.php';
        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            echo "<p>View not found: {$view}</p>";
        }
        $content = ob_get_clean();

        // Render the full layout
        require VIEW_PATH . '/layouts/header.php';
        echo $content;
        require VIEW_PATH . '/layouts/footer.php';
    }

    /**
     * Redirect to another page.
     */
    protected function redirect(string $url): void
    {
        header('Location: ' . $url);
        exit;
    }

    /**
     * Return JSON response.
     */
    protected function json(array $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}
