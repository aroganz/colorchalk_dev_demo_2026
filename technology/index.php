<?php include('includes/header.php'); ?>

<section class="vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h6 class="text-success text-uppercase fw-bold tracking-widest mb-3">Enterprise Infrastructure</h6>
                <h1 class="display-2 fw-bold mb-4">The Future is <span class="mono">Scaleable</span>.</h1>
                <p class="lead text-muted mb-5">Global cloud clusters with 99.99% uptime. Deploy your API documentation and infrastructure in seconds, not hours.</p>
                <div class="d-flex gap-3">
                    <a href="services.php" class="btn btn-success px-5 py-3">Explore Cloud</a>
                    <a href="about.php" class="btn btn-outline-light px-5 py-3 border-secondary">View Stack</a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="bento-card p-0 overflow-hidden shadow-lg" style="background: #000; border-color: #333 !important;">
                    <div class="d-flex gap-2 p-3 bg-dark border-bottom border-secondary">
                        <div style="width:10px; height:10px; background:#ff5f56; border-radius:50%"></div>
                        <div style="width:10px; height:10px; background:#ffbd2e; border-radius:50%"></div>
                        <div style="width:10px; height:10px; background:#27c93f; border-radius:50%"></div>
                    </div>
                    <div class="p-4">
                        <code class="small d-block mb-2 text-secondary">// Deploying Global API...</code>
                        <code class="small d-block mb-1">> Initializing us-east-1 cluster... <span class="text-success">DONE</span></code>
                        <code class="small d-block mb-1">> Syncing PostgreSQL Nodes... <span class="text-success">100%</span></code>
                        <code class="small d-block mb-4">> Optimization complete.</code>
                        <div class="p-3 rounded-1" style="background: rgba(0, 255, 136, 0.05); border: 1px dashed var(--primary-neon);">
                            <code class="text-success">Status: Globally Distributed & Secured</code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 border-top border-secondary bg-black">
    <div class="container py-5">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-4">
                    <h2 class="display-4 fw-bold mb-0 mono text-success">0.4ms</h2>
                    <p class="text-uppercase tracking-widest small text-white-50 mt-2">Avg. Global Latency</p>
                </div>
            </div>
            <div class="col-md-4 border-md-start border-md-end border-secondary">
                <div class="p-4">
                    <h2 class="display-4 fw-bold mb-0 mono text-white">99.99<span class="text-success">%</span></h2>
                    <p class="text-uppercase tracking-widest small text-white-50 mt-2">Guaranteed Uptime</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4">
                    <h2 class="display-4 fw-bold mb-0 mono text-success">128<span class="small">bit</span></h2>
                    <p class="text-uppercase tracking-widest small text-white-50 mt-2">End-to-End Encryption</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-black">
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h6 class="text-success text-uppercase fw-bold tracking-widest mb-3">The Stack</h6>
                <h2 class="display-5 fw-bold text-white">Engineered for the <span class="italic text-white-50">Next Decade</span>.</h2>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="bento-card p-5 h-100 position-relative overflow-hidden">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h3 class="fw-bold mb-3">Dynamic API Docs</h3>
                            <p class="mb-4">Automatically generate beautiful, interactive documentation from your schema. Supports Swagger, GraphQL, and REST.</p>
                            
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="bi bi-terminal me-2"></i> Auto-generated SDKs</li>
                                <li class="mb-2"><i class="bi bi-shield-lock me-2"></i> OAuth 2.0 Ready</li>
                            </ul>
                            
                            <a href="services.php" class="text-decoration-none text-success fw-bold">Explore Docs →</a>
                        </div>
                        
                        <div class="col-md-5 d-none d-md-block">
                             <div class="p-4 bg-dark rounded border border-secondary shadow-lg">
                                <code class="small d-block text-white-50" style="font-size: 0.75rem; line-height: 1.5;">
                                    <span class="text-success">GET</span> /api/v1/auth<br>
                                    <span class="text-white-50">{</span><br>
                                    &nbsp;&nbsp;"status": <span class="text-success">"active"</span>,<br>
                                    &nbsp;&nbsp;"role": <span class="text-success">"admin"</span><br>
                                    <span class="text-white-50">}</span>
                                </code>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bento-card p-5 h-100 d-flex flex-column justify-content-center">
                    <div class="icon-circle mb-4" style="background: rgba(0,255,136,0.1); width: 60px; height: 60px;">
                        <i class="bi bi-cloud-arrow-up text-success fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Cloud Infra</h4>
                    <p class="text-white-50 small">Multi-region deployment with automated failover and edge computing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>