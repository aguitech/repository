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
          flex: 1;x
          display: flex;
          flex-direction: column;
        }
        
        .content {
          flex: 1;
          display: flex;
          overflow: auto;
        }
        
        .box {
          min-height: -webkit-min-content;
          display: flex;
        }
        
        .column {
          padding: 20px;
          border-right: 1px solid #999;
        }
        
        .column > div {
          height: 2000px;
          background: red;
        }
        
        .column:nth-child(2) > div {
           height: auto;
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        /* All of these are just for this demo's design. */
        
        body {
          font-family: sans-serif;
          font-size: 20px;
          line-height: 50px;
          text-transform: uppercase;
          font-weight: bold;
        }
        
        .header {
          text-align: center;
          color: #fff;
          background: #444;
        }
        
        .sidebar {
          background: #666;
          padding: 4px 20px;
          color: #fff;
        }
        
        .page-header {
          padding: 6px 20px;
          background: #004141;
          color: #fff;
          font-size: .8em;
        }
        
        .content {
          background: #ddd;
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
              
        			<div class="box">
        			  <div class="column">
        				  <div>Column 1</div>
        			  </div>
        			  <div class="column">
        				  <div>Column 1</div>
        			  </div>
        			  <div class="column">
        				  <div>Column 1</div>
        			  </div>
        			</div>
        		</div>
        	</div>
        </div>
	</body>
</html>