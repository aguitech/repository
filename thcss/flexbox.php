<!DOCTYPE html>
<html>
	<head>
		<style>
        .header {
          height: 50px;
        }
        
        .body {
          position: absolute;
          top: 50px;
          right: 0;
          bottom: 0;
          left: 0;
          display: flex;
        }
        
        .sidebar {
          width: 140px;
        }
        
        .main {
          flex: 1;
          display: flex;
          flex-direction: column;
        }
        
        .content {
          flex: 1;
          display: flex;
        }
        
        .column {
          padding: 20px;
          border-right: 1px solid #999;
        }
        </style>
	</head>
	<body>
		<div class="header">Main header</div>
        <div class="body">
          <div class="sidebar">Sidebar</div>
        
          <div class="main">
            <div class="page-header">Page Header. Content columns are below.</div>
            <div class="content">
              <div class="column">Column 1</div>
              <div class="column">Column 1</div>
              <div class="column">Column 1</div>
            </div>
          </div>
        </div>
        
        		
	</body>
</html>