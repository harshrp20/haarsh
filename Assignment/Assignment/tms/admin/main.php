<?php include('index.php');
?>
<!DOCTYPE html>
<html>
        <title>Assignment</title>
        <meta charset="utf-8">
        <style type="text/CSS">
                 #table{
                     font-family: sans-serif;
                     padding: 15px 15px 15px 15px;
                     background-color: white
                 }
                 table{
                      border-collapse: collapse;
                      width: 100%;
                      }

                 th, td{
                        font-size: 1.5ch;
                        padding: 7px;
                        text-align: left;
                        }
                 td{    border-bottom: 1px solid #ddd;
                   }
               
                 th {
                        background-color:#EBEDEF;
                        color:black;
                    }
                    .dropbtn {
                              background-color:#AFD5FA;
                              color:black;

                              border: none;
                             }
                
        

                    .dropdownlist {
                                position: relative;
                                 display: inline-block;
                              }

                 .dropdownlist-content {
                                       display: none;
                                        position: absolute;
                                        background-color:white;
                                        min-width: 160px;
                                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                        z-index: 1;
                                        }

                  .dropdownlist-content a {
                                          color: black;
                                           padding: 12px 16px;
                                         text-decoration: none;
                                         display: block;
                                      }

                   .dropdownlist-content a:hover {background-color: #ddd;}

                    .dropdownlist:hover .dropdownlist-content {display: block;}

                    .dropdownlist:hover .dropbtn {background-color:#AFD5FA;}

                    

                
                  a{
                    color:#257ed6;
                  }
               
                  body{
                      background-color: #EBEDEF;
                  }
                  .emoji{
                    background-color: white;
                    border:none;
                  }
                  
                         
        </style>
    </head>
    <body>
	<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
	        <div class="clearfix"></div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Holding Accounts</li>
            </ol>

        <div id="table">
        <h3>Holding Accounts</h3>
		<?php include('triall.php');
		?>
        <div id="bar"></div>
        <h3>All Holding Accounts</h3>
        <table>
            <thead>
        
                <tr>
                    <th><input type="checkbox"></th>
                    <th>Account ID</th>
                    <th>Owner ID</th>
                    <th>Account Name</th>
                    <th>Account Type</th>
                    <th>Current Balance</th>
                    <th>Status On</th>
                    <th>Status</th>
                    <th>Actions</th>
                 </tr>
                 
                </thead>
                <tbody>
                 
                 <tr>
              
                     <td><input type="checkbox"></td>
                     <td><a href="">CR-10GrpA-012</a></td>
                     
                     <td>LH-001-08</td>
                     <td><a href="">State vs Sawer</a></td>
                     <td>Holding Account</td>
                     <td>100.00</td>
                    <td>01-09-2020 09:10 AM</td>
                    <td><div class="dropdownlist">
                        <button class="dropbtn">Active</button>
                        <div class="dropdownlist-content">
                          <a href="refund.php">Refund Account</a>
                          <a href="#">Deposit Account</a>
                          <a href="#">Account Summary</a>
                          <a href="#">View Account</a>
                          <a href="#">Remove</a>
                          
                        </div>
                      </div>
                      </td>
                    <td><button class="emoji">🖊 </button><button class="emoji">🚮 </button><button class="emoji">&#8942;</button></td>
                 
                 </tr>
                 <tr>
                    <td><input type="checkbox"></td>
                    <td><a href="">CV-10GrpA-013</a></td>
                    <td>LH-001-08</td>
                    <td><a href="">State vs Sawer</a></td>
                    <td>Current Account</td>
                    <td>100.00</td>
                   <td>01-09-2020 09:10 AM</td>
                   <td><div class="dropdownlist">
                    <button class="dropbtn">Active</button>
                    <div class="dropdownlist-content" id="ref">
                      <a href="#">Refund Account</a>
                      <a href="#">Deposit Account</a>
                      <a href="#">Account Summary</a>
                      <a href="#">View Account</a>
                      <a href="#">Remove</a>
                      
                    </div>
                  </div></td>
                   <td><button class="emoji">🖊 </button><button class="emoji">🚮 </button><button class="emoji">&#8942;</button></td>
                </tr>
                <tr>

                    <td><input type="checkbox"></td>
                    <td><a href="">TR-10GrpA-012</a></td>
                    <td>LH-001-08</td>
                    <td><a href="">State vs Sawer</a></td>
                    <td>Holding Account</td>
                    <td>100.00</td>
                   <td>01-09-2020 09:10 AM</td>
                   <td>
                       <div class="dropdownlist">
                        <button class="dropbtn">Active</button>
                        <div class="dropdownlist-content">
                          <a href="#">Refund Account</a>
                          <a href="#">Deposit Account</a>
                          <a href="#">Account Summary</a>
                          <a href="#">View Account</a>
                          <a href="#">Remove</a>
                          
                        </div>
                      </div>
                    </td>
                   <td><button class="emoji">🖊 </button><button class="emoji">🚮 </button><button class="emoji">&#8942;</button></td>
                   
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><a href="">CR-10GrpA-812</a></td>
                    <td>LH-001-08</td>
                    <td><a href="">State vs Sawer</a></td>
                    <td>Holding Account</td>
                    <td>100.00</td>
                   <td>01-09-2020 09:10 AM</td>
                   <td><div class="dropdownlist">
                    <button class="dropbtn">Active</button>
                    <div class="dropdownlist-content">
                      <a href="#">Refund Account</a>
                      <a href="#">Deposit Account</a>
                      <a href="#">Account Summary</a>
                      <a href="#">View Account</a>
                      <a href="#">Remove</a>
                      
                    </div>
                  </div></td>
                   <td><button class="emoji">🖊 </button><button class="emoji">🚮 </button><button class="emoji">&#8942;</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><a href="">CR-10GrpA-012</a></td>
                    <td>LH-001-08</td>
                    <td><a href="">State vs Sawer</a></td>
                    <td>Current Account</td>
                    <td>100.00</td>
                   <td>01-09-2020 09:10 AM</td>
                   <td><div class="dropdownlist">
                    <button class="dropbtn">Active</button>
                    <div class="dropdownlist-content">
                      <a href="#">Refund Account</a>
                      <a href="#">Deposit Account</a>
                      <a href="#">Account Summary</a>
                      <a href="#">View Account</a>
                      <a href="#">Remove</a>
                      
                    </div>
                  </div></td>
                   <td><button class="emoji">🖊 </button><button class="emoji">🚮 </button><button class="emoji">&#8942;</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><a href="">CR-10GrpA-012</a></td>
                    <td>LH-001-08</td>
                    <td><a href="">State vs Sawer</a></td>
                    <td>Holding Account</td>
                    <td>100.00</td>
                   <td>01-09-2020 09:10 AM</td>
                   <td><div class="dropdownlist">
                    <button class="dropbtn">Active</button>
                    <div class="dropdownlist-content">
                      <a href="#">Refund Account</a>
                      <a href="#">Deposit Account</a>
                      <a href="#">Account Summary</a>
                      <a href="#">View Account</a>
                      <a href="#">Remove</a>
                      
                    </div>
                  </div></td>
                   <td><button class="emoji">🖊 </button><button class="emoji">🚮 </button><button class="emoji">&#8942;</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                   <td><a href="">CV-18GrpA-083</a></td>
                   <td>LH-001-08</td>
                   <td><a href="">State vs Sawer</a></td>
                   <td>Current Account</td>
                   <td>100.00</td>
                  <td>01-09-2020 09:10 AM</td>
                  <td><div class="dropdownlist">
                    <button class="dropbtn">Active</button>
                    <div class="dropdownlist-content">
                      <a href="#">Refund Account</a>
                      <a href="#">Deposit Account</a>
                      <a href="#">Account Summary</a>
                      <a href="#">View Account</a>
                      <a href="#">Remove</a>
                      
                    </div>
                  </div></td>
                  <td><button class="emoji">🖊</button><button class="emoji"> 🚮</button> <button class="emoji">&#8942;</button></td>
               </tr>
               <tr>
                   <td><input type="checkbox"></td>
                   <td><a href="">TR-15GrpA-045</a></td>
                   <td>LH-001-08</td>
                   <td><a href="">State vs Sawer</a></td>
                   <td>Holding Account</td>
                   <td>100.00</td>
                  <td>01-09-2020 09:10 AM</td>
                  <td><div class="dropdownlist">
                    <button class="dropbtn">Active</button>
                    <div class="dropdownlist-content">
                      <a href="#">Refund Account</a>
                      <a href="#">Deposit Account</a>
                      <a href="#">Account Summary</a>
                      <a href="#">View Account</a>
                      <a href="#">Remove</a>
                      
                    </div>
                  </div></td>
                  <td><button class="emoji">🖊 </button><button class="emoji">🚮 </button><button class="emoji">&#8942;</button></td>
               </tr>
               <tr>
                   <td><input type="checkbox"></td>
                   <td><a href="">CR-10GrpA-810</a></td>
                   <td>LH-001-08</td>
                   <td><a href="">State vs Sawer</a></td>
                   <td>Holding Account</td>
                   <td>100.00</td>
                  <td>01-09-2020 09:10 AM</td>
                  
                  <td><div class="dropdownlist">
                    <button class="dropbtn">Active</button>
                    <div class="dropdownlist-content">
                      <a href="#">Refund Account</a>
                      <a href="#">Deposit Account</a>
                      <a href="#">Account Summary</a>
                      <a href="#">View Account</a>
                      <a href="#">Remove</a>
                      
                    </div>
                  </div></td>
                  <td><button class="emoji">🖊 </button><button class="emoji">🚮 </button><button class="emoji">&#8942;</button></td>
               </tr>
               <tr>
                   <td><input type="checkbox"></td>
                   <td><a href="">CR-11GrpA-012</a></td>
                   <td>LH-001-08</td>
                   <td><a href="">State vs Sawer</a></td>
                   <td>Current Account</td>
                   <td>100.00</td>
                   <td>01-09-2020 09:10 AM</td>
                   <td><div class="dropdownlist">
                    <button class="dropbtn">Active</button>
                    <div class="dropdownlist-content">
                      <a href="#">Refund Account</a>
                      <a href="#">Deposit Account</a>
                      <a href="#">Account Summary</a>
                      <a href="#">View Account</a>
                      <a href="#">Remove</a>
                      
                    </div>
                  </div></td>
                  <td><button class="emoji">🖊 </button><button class="emoji">🚮 </button><button class="emoji">&#8942;</button></td>
               </tr>
             </tbody>
            </table>
             </div>
    </body>
</html>