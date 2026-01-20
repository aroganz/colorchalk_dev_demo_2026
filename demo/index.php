<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Demos | ColorChalk 2026</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f7f6; margin: 0; padding: 40px; }
        h1 { text-align: center; color: #333; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; max-width: 1200px; margin: 40px auto; }
        .card { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center; transition: transform 0.2s; text-decoration: none; color: inherit; display: block; }
        .card:hover { transform: translateY(-5px); box-shadow: 0 6px 12px rgba(0,0,0,0.15); }
        .card h3 { margin: 10px 0; color: #007bff; text-transform: capitalize; }
        .card p { color: #666; font-size: 0.9em; }
        .tag { display: inline-block; background: #e9ecef; padding: 4px 10px; border-radius: 20px; font-size: 0.8em; margin-top: 10px; }
    </style>
</head>
<body>

    <h1>Developer Demo Showcase</h1>
    <p style="text-align:center;">Select a project to view the live demo</p>

    <div class="grid">
        <?php
        // Automatically list folders in this directory
        $dirs = array_filter(glob('*'), 'is_dir');
        
        foreach ($dirs as $dir) {
            // Skip system folders
            if ($dir == 'includes' || $dir == 'assets') continue;
            
            echo "<a href='$dir/' class='card'>
                    <h3>" . str_replace('_', ' ', $dir) . "</h3>
                    <p>Web Application Demo</p>
                    <span class='tag'>Live Preview</span>
                  </a>";
        }
        ?>
    </div>

</body>
</html>