<!-- Hero Section (Centered & Typographic) -->
<header class="py-5 bg-body">
  <div class="container py-5">
    <div class="row justify-content-center text-center py-4">
      <div class="col-lg-8">
        <h1 class="display-3 fw-bold text-dark lh-sm mb-4">
          The raw foundation for modern PHP development.
        </h1>

        <p class="lead text-body-secondary mb-5 px-lg-5">
          A clean-slate PHP boilerplate designed for developers who appreciate lightweight codebases, logical directory
          structures, and zero-framework overhead.
        </p>

        <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-3">
          <a href="#structure" class="btn btn-dark btn-lg px-4 py-3 fs-6 rounded-3">
            Get Started
          </a>
          <div
            class="d-flex align-items-center gap-2 border border-light-subtle rounded-3 bg-body-tertiary px-3 py-2 font-monospace text-body-secondary small">
            <i class="bi bi-chevron-right text-muted"></i>
            <span>git clone https://github.com/evanalifian/php-boilerplate.git</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Clean Features Section (Borderless, High-Whitespace) -->
<section id="features" class="py-5 bg-body-tertiary border-top border-bottom border-light-subtle">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-md-4">
        <div class="d-flex flex-column gap-3">
          <div class="text-dark"><i class="bi bi-lightning-charge fs-3"></i></div>
          <h4 class="fw-semibold text-dark m-0">Zero Framework Bloat</h4>
          <p class="text-body-secondary small lh-base m-0">
            Skip the heavy vendor overhead and start directly with raw PHP execution. It is tailored for high-speed
            microservices or bespoke web utilities.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex flex-column gap-3">
          <div class="text-dark"><i class="bi bi-diagram-3 fs-3"></i></div>
          <h4 class="fw-semibold text-dark m-0">Modern Standards</h4>
          <p class="text-body-secondary small lh-base m-0">
            Strict PSR guidelines, fully compatible class autoloading logic, and a clean configuration architecture
            using standardized environment setups.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex flex-column gap-3">
          <div class="text-dark"><i class="bi bi-eye-slash fs-3"></i></div>
          <h4 class="fw-semibold text-dark m-0">Isolated Web Root</h4>
          <p class="text-body-secondary small lh-base m-0">
            Enhanced core directory safety. By pointing your server index directly inside the public-facing directory,
            your source files remain safe.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Clean Structure Section (Asymmetric Minimalist Design) -->
<section id="structure" class="py-5 bg-body">
  <div class="container py-5">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5">
        <div class="badge bg-dark-subtle text-dark border border-dark-subtle px-3 py-1.5 rounded-pill mb-3 fw-medium small">
          <i class="bi bi-folder-check me-1"></i> Architecture
        </div>
        <h2 class="fw-bold text-dark mb-3">Logical Layout</h2>
        <p class="text-body-secondary mb-4">
          No more guessing. This boilerplate divides configurations, core modules, route views, and assets exactly where your logical thinking demands.
        </p>
        <div class="d-flex flex-column gap-4">
          <div class="d-flex align-items-start gap-3">
            <i class="bi bi-check-circle-fill text-dark fs-5"></i>
            <div>
              <h6 class="fw-semibold text-dark mb-1">Composer Integration Ready</h6>
              <p class="text-body-secondary small m-0">Easily inject any modern PHP libraries with automated namespaces.</p>
            </div>
          </div>
          <div class="d-flex align-items-start gap-3">
            <i class="bi bi-check-circle-fill text-dark fs-5"></i>
            <div>
              <h6 class="fw-semibold text-dark mb-1">Folder-Based Convention</h6>
              <p class="text-body-secondary small m-0">Create new pages simply by creating a folder and putting an index.php file inside it.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="border border-light-subtle rounded-4 bg-body-tertiary p-4">
          <div class="d-flex align-items-center justify-content-between pb-3 border-bottom border-light-subtle mb-3">
            <span class="font-monospace text-body-secondary small"><i class="bi bi-folder-symlink me-1 text-secondary"></i> root/</span>
            <span class="badge bg-light border text-secondary fw-normal">Project Map</span>
          </div>
          
          <div class="font-monospace text-body-secondary small d-flex flex-column gap-1" style="max-height: 480px; overflow-y: auto;">
            <!-- Root Directory Name -->
            <div class="mb-2"><i class="bi bi-folder-fill text-warning me-2"></i><strong>php-boilerplate/</strong></div>
            
            <!-- Root Files -->
            <div class="d-flex justify-content-between ms-3 mb-1">
              <span><i class="bi bi-file-earmark-code text-secondary me-2"></i>.env</span>
              <span class="text-muted text-xs">Environment configuration</span>
            </div>
            <div class="d-flex justify-content-between ms-3 mb-1">
              <span><i class="bi bi-file-earmark-code text-secondary me-2"></i>.env.example</span>
              <span class="text-muted text-xs">Configuration template</span>
            </div>
            <div class="d-flex justify-content-between ms-3 mb-1">
              <span><i class="bi bi-file-earmark text-secondary me-2"></i>.gitignore</span>
              <span class="text-muted text-xs">Git ignore definitions</span>
            </div>
            <div class="d-flex justify-content-between ms-3 mb-1">
              <span><i class="bi bi-file-earmark-code text-secondary me-2"></i>.htaccess</span>
              <span class="text-muted text-xs">Apache rewrite rules</span>
            </div>
            <div class="d-flex justify-content-between ms-3 mb-1">
              <span><i class="bi bi-filetype-json text-secondary me-2"></i>composer.json</span>
              <span class="text-muted text-xs">Dependency configurations</span>
            </div>
            <div class="d-flex justify-content-between ms-3 mb-1">
              <span><i class="bi bi-file-earmark-lock text-secondary me-2"></i>composer.lock</span>
              <span class="text-muted text-xs">Dependency version lock</span>
            </div>
            <div class="d-flex justify-content-between ms-3 mb-1 text-dark fw-semibold">
              <span><i class="bi bi-file-code-fill text-dark me-2"></i>index.php</span>
              <span class="text-muted text-xs">Main application gateway router</span>
            </div>
            <div class="d-flex justify-content-between ms-3 mb-2">
              <span><i class="bi bi-file-earmark-text text-secondary me-2"></i>README.md</span>
              <span class="text-muted text-xs">Main project documentation</span>
            </div>
            
            <!-- Public Directory -->
            <div class="d-flex justify-content-between border-top border-light-subtle pt-2 mt-1 ms-3 mb-1">
              <span><i class="bi bi-folder-fill text-warning me-2"></i>public/</span>
              <span class="text-muted text-xs">Web assets (CSS, JS, Images)</span>
            </div>
            
            <!-- Src Directory (MVC Core) -->
            <div class="d-flex justify-content-between border-top border-light-subtle pt-2 mt-1 ms-3 mb-1">
              <span><i class="bi bi-folder-fill text-dark me-2"></i>src/</span>
              <span class="text-dark text-xs fw-semibold">Core application layer (MVC)</span>
            </div>
            
            <!-- Subfolders inside src/ -->
            <div class="d-flex justify-content-between ms-4 ps-2 mb-1">
              <span><i class="bi bi-folder-fill text-warning me-2"></i>Config/</span>
              <span class="text-muted text-xs">Initialization &amp; Core Components</span>
            </div>
            
            <div class="d-flex justify-content-between ms-4 ps-2 mb-1">
              <span><i class="bi bi-folder-fill text-warning me-2"></i>Controller/</span>
              <span class="text-muted text-xs">Flow Control Logic</span>
            </div>
            
            <div class="d-flex justify-content-between ms-4 ps-2 mb-1">
              <span><i class="bi bi-folder-fill text-warning me-2"></i>Exception/</span>
              <span class="text-muted text-xs">Custom Error Handling</span>
            </div>
            
            <div class="d-flex justify-content-between ms-4 ps-2 mb-1">
              <span><i class="bi bi-folder-fill text-warning me-2"></i>Middleware/</span>
              <span class="text-muted text-xs">Security &amp; Session Filters</span>
            </div>
            
            <div class="d-flex justify-content-between ms-4 ps-2 mb-1">
              <span><i class="bi bi-folder-fill text-warning me-2"></i>Model/</span>
              <span class="text-muted text-xs">Data Schema &amp; Blueprints</span>
            </div>
            
            <div class="d-flex justify-content-between ms-4 ps-2 mb-1">
              <span><i class="bi bi-folder-fill text-warning me-2"></i>Repository/</span>
              <span class="text-muted text-xs">Database Access &amp; Operations</span>
            </div>
            
            <div class="d-flex justify-content-between ms-4 ps-2 mb-1">
              <span><i class="bi bi-folder-fill text-warning me-2"></i>Service/</span>
              <span class="text-muted text-xs">Core Business Logic</span>
            </div>
            
            <div class="d-flex justify-content-between ms-4 ps-2 mb-1">
              <span><i class="bi bi-folder-fill text-warning me-2"></i>View/</span>
              <span class="text-muted text-xs">UI Presentation Templates</span>
            </div>
            
            <!-- Subfolders inside View/ -->
            <div class="d-flex justify-content-between ms-5 ps-3 mb-1">
              <span><i class="bi bi-folder text-secondary me-2"></i>account/</span>
              <span class="text-muted text-xs">Account Settings Page</span>
            </div>
            <div class="d-flex justify-content-between ms-5 ps-3 mb-1">
              <span><i class="bi bi-folder text-secondary me-2"></i>landing/</span>
              <span class="text-muted text-xs">Landing Page</span>
            </div>
            <div class="d-flex justify-content-between ms-5 ps-3 mb-1">
              <span><i class="bi bi-folder text-secondary me-2"></i>login/</span>
              <span class="text-muted text-xs">Login Page</span>
            </div>
            <div class="d-flex justify-content-between ms-5 ps-3 mb-1">
              <span><i class="bi bi-folder text-secondary me-2"></i>signup/</span>
              <span class="text-muted text-xs">Sign Up Page</span>
            </div>
            
            <!-- Vendor Directory -->
            <div class="d-flex justify-content-between border-top border-light-subtle pt-2 mt-1 ms-3 mb-1">
              <span><i class="bi bi-folder-fill text-muted me-2"></i>vendor/</span>
              <span class="text-muted text-xs">Composer dependency packages</span>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>