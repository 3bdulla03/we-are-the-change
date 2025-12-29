<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Viewer - We Are The Change</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #1a1a1a;
            color: white;
            min-height: 100vh;
        }
        
        .viewer-container {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .viewer-header {
            background: #2c3e50;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .back-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            background: #3498db;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .back-btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }
        
        .document-title {
            font-size: 1.3rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .header-actions {
            display: flex;
            gap: 10px;
        }
        
        .action-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }
        
        .action-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        .action-btn.download {
            background: #e74c3c;
        }
        
        .action-btn.download:hover {
            background: #c0392b;
        }
        
        .viewer-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .pdf-frame {
            width: 100%;
            height: 100%;
            max-width: 1200px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        
        .pdf-frame iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .error-message {
            text-align: center;
            padding: 50px;
            max-width: 600px;
        }
        
        .error-icon {
            font-size: 4rem;
            color: #e74c3c;
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .viewer-header {
                flex-direction: column;
                text-align: center;
            }
            
            .header-left {
                flex-direction: column;
                gap: 10px;
            }
            
            .header-actions {
                width: 100%;
                justify-content: center;
            }
            
            .action-btn {
                padding: 10px 15px;
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <?php
    // Document handling
    $allowedDocs = ['report', 'poster', 'powerpoint'];
    $doc = $_GET['doc'] ?? 'report';
    
    if (!in_array($doc, $allowedDocs)) {
        $doc = 'report';
    }
    
    // Document information
    $documents = [
        'report' => [
            'title' => 'Project Report',
            'file' => 'documents/Report.pdf',
            'icon' => 'fas fa-file-pdf'
        ],
        'poster' => [
            'title' => 'Project Poster',
            'file' => 'documents/Poster.pdf',
            'icon' => 'fas fa-file-pdf'
        ],
        'powerpoint' => [
            'title' => 'Presentation',
            'file' => 'documents/PowerPoint.pdf',
            'icon' => 'fas fa-file-powerpoint'
        ]
    ];
    
    $currentDoc = $documents[$doc];
    $filePath = $currentDoc['file'];
    $fileExists = file_exists($filePath);
    ?>
    
    <div class="viewer-container">
        <div class="viewer-header">
            <div class="header-left">
                <a href="index.php#documents" class="back-btn">
                    <i class="fas fa-arrow-left"></i>
                    Back to Website
                </a>
                <div class="document-title">
                    <i class="<?php echo $currentDoc['icon']; ?>"></i>
                    <?php echo $currentDoc['title']; ?>
                </div>
            </div>
            
            <div class="header-actions">
                <button class="action-btn" onclick="toggleFullscreen()">
                    <i class="fas fa-expand"></i>
                    Fullscreen
                </button>
                <button class="action-btn download" onclick="downloadDocument()">
                    <i class="fas fa-download"></i>
                    Download
                </button>
            </div>
        </div>
        
        <div class="viewer-content">
            <?php if ($fileExists): ?>
                <div class="pdf-frame" id="pdfViewer">
                    <iframe src="<?php echo $filePath; ?>#toolbar=0&navpanes=0&scrollbar=0"></iframe>
                </div>
            <?php else: ?>
                <div class="error-message">
                    <div class="error-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h2>Document Not Found</h2>
                    <p>The requested document is currently unavailable.</p>
                    <div style="margin-top: 30px;">
                        <a href="index.php#documents" class="back-btn" style="display: inline-flex;">
                            <i class="fas fa-arrow-left"></i>
                            Return to Documents
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        // Fullscreen toggle
        function toggleFullscreen() {
            const viewer = document.getElementById('pdfViewer');
            
            if (!document.fullscreenElement) {
                if (viewer.requestFullscreen) {
                    viewer.requestFullscreen();
                } else if (viewer.webkitRequestFullscreen) {
                    viewer.webkitRequestFullscreen();
                } else if (viewer.msRequestFullscreen) {
                    viewer.msRequestFullscreen();
                }
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
            }
        }
        
        // Download document
        function downloadDocument() {
            const docFile = '<?php echo $filePath; ?>';
            const docTitle = '<?php echo $currentDoc['title']; ?>';
            
            <?php if ($fileExists): ?>
                const link = document.createElement('a');
                link.href = docFile;
                link.download = docTitle + '.pdf';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            <?php else: ?>
                alert('Document is currently unavailable for download.');
            <?php endif; ?>
        }
        
        // Keyboard shortcuts
        document.addEventListener('keydown', (e) => {
            // Escape to exit fullscreen
            if (e.key === 'Escape' && document.fullscreenElement) {
                toggleFullscreen();
            }
            
            // Ctrl+S or Cmd+S to download
            if ((e.ctrlKey || e.metaKey) && e.key === 's') {
                e.preventDefault();
                downloadDocument();
            }
            
            // Ctrl+B or Cmd+B to go back
            if ((e.ctrlKey || e.metaKey) && e.key === 'b') {
                e.preventDefault();
                window.location.href = 'index.php#documents';
            }
        });
        
        // Handle fullscreen change
        document.addEventListener('fullscreenchange', updateFullscreenButton);
        document.addEventListener('webkitfullscreenchange', updateFullscreenButton);
        
        function updateFullscreenButton() {
            const fullscreenBtn = document.querySelector('[onclick="toggleFullscreen()"]');
            const icon = fullscreenBtn.querySelector('i');
            
            if (document.fullscreenElement) {
                icon.className = 'fas fa-compress';
                fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i> Exit Fullscreen';
            } else {
                icon.className = 'fas fa-expand';
                fullscreenBtn.innerHTML = '<i class="fas fa-expand"></i> Fullscreen';
            }
        }
    </script>
</body>
</html>