<?php include('includes/header.php'); ?>

<section class="py-5 mt-5">
    <div class="container pt-5">
        <div class="row align-items-end mb-5">
            <div class="col-lg-8">
                <h6 class="text-success text-uppercase fw-bold tracking-widest mb-3">API Documentation</h6>
                <h1 class="display-4 fw-bold text-white">Cloud <span class="mono">Endpoints</span></h1>
                <p class="text-white-50 lead">Interface with our global edge network. Scalable, secure, and low-latency by design.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="p-3 bento-card d-inline-block text-start">
                    <span class="small text-white-50 d-block mb-1">Current Version</span>
                    <span class="mono text-success">v2.4.0-stable</span>
                </div>
            </div>
        </div>

        <div class="row g-4">
            
            <div class="col-lg-4">
                <div class="bento-card p-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <span class="badge bg-success text-black mono">POST</span>
                        <i class="bi bi-shield-lock text-white-50 fs-4"></i>
                    </div>
                    <h4 class="text-white fw-bold">Authentication</h4>
                    <p class="text-white-50 small mb-4">Secure your requests using JWT or OAuth2. Every endpoint is protected with 128-bit encryption.</p>
                    <div class="bg-black p-3 rounded border border-secondary">
                        <code class="small text-success">/v1/auth/login</code>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bento-card p-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <span class="badge bg-primary text-white mono">GET</span>
                        <i class="bi bi-arrow-repeat text-white-50 fs-4"></i>
                    </div>
                    <h4 class="text-white fw-bold">Real-time Sync</h4>
                    <p class="text-white-50 small mb-4">Sync database nodes across 12 global regions with zero-conflict resolution logic.</p>
                    <div class="bg-black p-3 rounded border border-secondary">
                        <code class="small text-primary">/v1/sync/cluster</code>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bento-card p-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <span class="badge bg-info text-black mono">PUSH</span>
                        <i class="bi bi-cpu text-white-50 fs-4"></i>
                    </div>
                    <h4 class="text-white fw-bold">Edge Clusters</h4>
                    <p class="text-white-50 small mb-4">Deploy serverless functions directly to the edge, minimizing latency for global users.</p>
                    <div class="bg-black p-3 rounded border border-secondary">
                        <code class="small text-info">/v1/deploy/edge</code>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-black border-top border-secondary">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-white mb-4">Ready in <span class="text-success">seconds</span>.</h2>
                <p class="text-white-50 mb-4">Our SDKs support every major language. Get started with our CLI tool to initialize your first cluster environment.</p>
                
                <div class="d-flex gap-4 mb-5">
                    <div class="text-center">
                        <i class="bi bi-box-seam text-success fs-3 d-block mb-2"></i>
                        <span class="small text-white-50">NPM / Yarn</span>
                    </div>
                    <div class="text-center">
                        <i class="bi bi-terminal-split text-success fs-3 d-block mb-2"></i>
                        <span class="small text-white-50">CLI Tool</span>
                    </div>
                    <div class="text-center">
                        <i class="bi bi-git text-success fs-3 d-block mb-2"></i>
                        <span class="small text-white-50">GitHub</span>
                    </div>
                </div>
                
                <a href="contact.php" class="btn btn-success px-5 py-3">Get Your API Key</a>
            </div>
            
            <div class="col-lg-6">
                <div class="bento-card p-0 overflow-hidden">
                    <div class="bg-dark p-3 border-bottom border-secondary d-flex align-items-center">
                        <span class="small text-white-50 mono">main.sh</span>
                    </div>
                    <div class="p-4 bg-black">
                        <code class="d-block mb-2 text-white-50">$ npm install @colorchalk/core</code>
                        <code class="d-block mb-2 text-white-50">$ colorchalk auth --key=YOUR_SECRET_KEY</code>
                        <code class="d-block text-success">$ colorchalk deploy --production</code>
                        <code class="d-block mt-3 text-white-50 opacity-50">> Deploying to us-west-2... [Done]</code>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-black border-top border-secondary">
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h6 class="text-success text-uppercase fw-bold tracking-widest mb-3">Network Availability</h6>
                <h2 class="display-6 fw-bold text-white">Global Edge <span class="text-white-50">Coverage</span></h2>
            </div>
        </div>
        
        <div class="row g-3">
            <?php
            $regions = [
                ['name' => 'North America (East)', 'ping' => '12ms', 'status' => 'Stable'],
                ['name' => 'Europe (Frankfurt)', 'ping' => '18ms', 'status' => 'Stable'],
                ['name' => 'Asia Pacific (Tokyo)', 'ping' => '42ms', 'status' => 'Stable'],
                ['name' => 'South America (Sao Paulo)', 'ping' => '51ms', 'status' => 'Stable']
            ];
            foreach ($regions as $r): ?>
            <div class="col-md-3">
                <div class="p-3 border border-secondary rounded d-flex justify-content-between align-items-center">
                    <div>
                        <span class="d-block small text-white-50"><?php echo $r['name']; ?></span>
                        <span class="mono text-success small"><?php echo $r['ping']; ?></span>
                    </div>
                    <span class="badge bg-dark border border-success text-success" style="font-size: 0.6rem;">● <?php echo $r['status']; ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5 bg-black">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="bento-card p-5 h-100 border-secondary">
                    <h5 class="text-white-50 mb-0">Sandbox</h5>
                    <h2 class="display-5 fw-bold text-white mb-4">$0<span class="fs-6 text-white-50">/mo</span></h2>
                    <ul class="list-unstyled small text-white-50 mb-5">
                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i> 1,000 Requests / mo</li>
                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i> Community Support</li>
                        <li class="mb-2 text-decoration-line-through">Global Edge Nodes</li>
                    </ul>
                    <a href="contact.php" class="btn btn-outline-light w-100 rounded-0">Start Building</a>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="bento-card p-5 h-100 border-success shadow-lg" style="background: rgba(0, 255, 136, 0.02);">
                    <div class="d-flex justify-content-between align-items-center mb-0">
                        <h5 class="text-success mb-0">Enterprise</h5>
                        <span class="badge bg-success text-black small">Most Popular</span>
                    </div>
                    <h2 class="display-5 fw-bold text-white mb-4">$49<span class="fs-6 text-white-50">/mo</span></h2>
                    <ul class="list-unstyled small text-white mb-5">
                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i> Unlimited Requests</li>
                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i> 99.99% Uptime SLA</li>
                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i> 24/7 Dedicated Support</li>
                    </ul>
                    <a href="contact.php" class="btn btn-success w-100 rounded-0">Get Full Access</a>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="bento-card p-5 h-100 border-secondary">
                    <h5 class="text-white-50 mb-0">Custom</h5>
                    <h2 class="display-5 fw-bold text-white mb-4">Talk <span class="fs-6 text-white-50">to us</span></h2>
                    <p class="text-white-50 small mb-5">For high-volume startups and government-level infrastructure needs.</p>
                    <a href="contact.php" class="btn btn-outline-light w-100 rounded-0">Contact Sales</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>