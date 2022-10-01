
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://kit.fontawesome.com/924738978d.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
        <!-- ------------------------ NavBar------------------------ -->
        <nav class="sideNav">
            <div class="profileContainer">
                <img id="profilePicture" src="assets/me.png" alt="profile-picture">
                <span id="profileName">Effi Bello</span>
                <span id="profileTitle">Helfy Candidate <i id="profileDropdown" class="fa fa-caret-down" aria-hidden="true"></i>
                </span>
            </div>

            <ul class="navOptions">
                <li class="navOption-activated">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i class="fa-solid "></i>
                                <i id="navOptionIcon" class="fa fa-th-large" aria-hidden="true"></i>
                                <span class="navOptionTitle">Dashboard</span>
                        </div>
                        <i id="navOptionDropdown" class="fa fa-angle-down" aria-hidden="true"></i>
                    </div>
                    <ul class="navOptionData">
                        <li> Dashboard v.1</li>
                        <li id="pickedData"> Dashboard v.2</li>
                        <li> Dashboard v.3</li>
                        <li> Dashboard v.4</li>
                        <li> Dashboard v.5</li>
                    </ul>
                </li> 

                <li class="navOption">
                    <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-diamond" aria-hidden="true"></i>
                            <span class="navOptionTitle">Layouts</span>
                    </div>
                </li> 

                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-bar-chart" aria-hidden="true"></i>
                            <span class="navOptionTitle">Graphs</span>
                        </div>
                            <i id="navOptionDropdown" class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </li> 

                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-envelope" aria-hidden="true"></i>
                            <span class="navOptionTitle">Mailbox</span>
                        </div>
                        <div class="notificationLabelOrange">
                            <span id="notificationLabelText">16/24</span>
                        </div>
                    </div>
                </li> 

                <li class="navOption">
                    <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-pie-chart" aria-hidden="true"></i>
                            <span class="navOptionTitle">Metrics</span>
                    </div>
                </li> 
                
                <li class="navOption">
                    <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-flask" aria-hidden="true"></i>
                            <span class="navOptionTitle">Widgets</span>
                    </div>
                </li> 

                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <span class="navOptionTitle">Forms</span>
                        </div>
                            <i id="navOptionDropdown" class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </li> 
                
                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-bar-chart" aria-hidden="true"></i>
                            <span class="navOptionTitle">App views</span>
                        </div>
                        <div class="notificationLabelGreen">
                            <span id="notificationLabelText">SPECIAL</span>
                        </div>
                    </div>
                
                </li> 

                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-files-o" aria-hidden="true"></i>
                            <span class="navOptionTitle">Other Pages</span>
                        </div>
                        <i id="navOptionDropdown" class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </li> 
                
                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-globe" aria-hidden="true"></i>
                            <span class="navOptionTitle">Miscellaneous</span>
                        </div>
                        <div class="notificationLabelLightBlue">
                            <span id="notificationLabelText">NEW</span>
                        </div>
                    </div>
                    
                </li> 

                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-flask" aria-hidden="true"></i>
                            <span class="navOptionTitle">UI Elements</span>
                        </div>
                        <i id="navOptionDropdown" class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                    
                </li>

                <li class="navOption">
                    <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-laptop" aria-hidden="true"></i>
                            <span class="navOptionTitle">Grid Options</span>
                    </div>
                </li>

                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-th" aria-hidden="true"></i>
                            <span class="navOptionTitle">Tables</span>
                        </div>
                        <i id="navOptionDropdown" class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="navOptionTitle">E-commerce</span>
                        </div>
                        <i id="navOptionDropdown" class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-picture-o" aria-hidden="true"></i>
                            <span class="navOptionTitle">Gallery</span>
                        </div>
                        <i id="navOptionDropdown" class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                                <i id="navOptionIcon" class="fa fa-sitemap" aria-hidden="true"></i>
                                <span class="navOptionTitle">Menu levels</span>
                        </div>
                        <i id="navOptionDropdown" class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="navOption">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                                <i id="navOptionIcon" class="fa fa-pencil" aria-hidden="true"></i>
                                <span class="navOptionTitle">Animations</span>
                        </div>
                        <div class="notificationLabelLightBlue">
                            <span id="notificationLabelText">62</span>
                        </div>
                    </div>
                </li> 

                <li class="navOption-new">
                    <div class="navOptionContainer">
                        <div class="navOptionTitleContainer">
                            <i id="navOptionIcon" class="fa fa-star" aria-hidden="true"></i>
                            <span class="navOptionTitle">Landing Page</span>
                        </div>
                        <div class="notificationLabelWhite">
                            <span id="notificationLabelTextNew">NEW</span>
                        </div>
                    </div>
                </li> 
            </ul>
        </nav>
        <!-- ------------------------End of NavBar------------------------ -->

            <!-- ------------------------First Row Data------------------------ -->
            <div class="firstrowdata">
                 <!-- #INCOME -->
            <div class="firstRowDataContainer">
                <div class="titlesContainer">
                    <span class="title">Income</span>
                    <div class="notificationLabelBlue">
                        <span id="notificationLabelText">Monthly</span>
                    </div>
                </div>
                <p class="amount">40,886,200</p>
                <div class="footersContainer">
                    <span class="footerTitle">Total income</span>
                    <div class="footerNumberBlue">
                        <span>28%</span>
                        <i class="fa fa-bolt" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <!-- #Orders -->
            <div class="firstRowDataContainer">
                <div class="titlesContainer">
                    <span class="title">Orders</span>
                    <div class="notificationLabelLightBlue">
                        <span id="notificationLabelText">Annual</span>
                    </div>
                    </div>
                    <p class="amount">275,800</p>
                    <div class="footersContainer">
                        <span class="footerTitle">New orders</span>
                        <div class="footerNumberLightBlue">
                            <span>20%</span>
                            <i class="fa fa-level-up" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <!-- #Visits -->
                <div class="firstRowDataContainer">
                    <div class="titlesContainer">
                        <span class="title">Visits</span>
                        <div class="notificationLabelGreen">
                            <span id="notificationLabelText">Today</span>
                        </div>
                    </div>
                    <p class="amount">106,120</p>
                    <div class="footersContainer">
                        <span class="footerTitle">New Visits</span>
                        <div class="footerNumberGreen">
                            <i class="fa fa-level-up" aria-hidden="true"></i>
                            <span>44%</span>
                        </div>
                    </div>
                </div>

                <!-- #User Activity -->
                <div class="firstRowDataContainer">
                    <div class="titlesContainer">
                        <span class="title">User activity</span>
                        <div class="notificationLabelRed">
                            <span id="notificationLabelText">Low Value</span>
                        </div>
                    </div>
                    <p class="amount">80,600</p>
                    <div class="footersContainer">
                        <span class="footerTitle">In first month</span>
                        <div class="footerNumberRed">
                            <span>38%</span>
                            <i class="fa fa-level-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ------------------------End of First Row Data------------------------ -->
        <!-- ------------------------Second Row Data------------------------ -->
            <div class="secondRowData">
                <div class="titlesContainer">
                    <span id="ordersTitle" class="title">Orders</span>
                    <div class="btn-group">
                        <button id="todayButton">Today</button>
                        <button id="monthlyButton">Monthly</button>
                        <button id="annualButton">Annual</button>
                    </div>
                </div>
                <div class="orderGraphsContainer">
                    <img id="ordersGraph" src="./assets/Orders-graph.png" alt="graph">
                    <div class="scalesContainers">
                        <div class="scalesContainer">
                            <p class="amount">2,346</p>
                            <div class="footersContainer">
                                <span class="footerTitle">In first month</span>
                                <div class="footerNumber">
                                    <span>48%</span>
                                    <i class="fa fa-level-up" aria-hidden="true" style="color: rgb(26,179,148)"></i>
                                </div>
                            </div>
                            <div class="scale48"></div>
                        </div>

                        <div class="scalesContainer">
                            <p class="amount">4,422</p>
                            <div class="footersContainer">
                                <span class="footerTitle">Orders in last month</span>
                                <div class="footerNumber">
                                    <span>60%</span>
                                    <i class="fa fa-level-down" aria-hidden="true" style="color: rgb(26,179,148)"></i>
                                </div>
                            </div>
                            <div class="scale60"></div>
                        </div>

                        <div class="scalesContainer">
                            <p class="amount">9,180</p>
                            <div class="footersContainer">
                                <span class="footerTitle">Monthly income from orders</span>
                                <div class="footerNumber">
                                    <span>20%</span>
                                    <i class="fa fa-bolt" aria-hidden="true" style="color: rgb(26,179,148)"></i>
                                </div>
                            </div>
                            <div class="scale20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ------------------------End of Second Row Data------------------------ -->
            <!-- ------------------------Third row Row Data------------------------ -->
            <div class="thirdRowData">
                <!-- #MESSAGES -->
                <div id="messagesContainer" class="thirdRowDataContainer">
                    <div class="titlesContainer">
                        <span class="title">Messages</span>
                        <div class="icon-group">
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                            <i class="fa fa-wrench" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="newMessagesNotification">
                        <div class="newMessagesNotificationTitle">
                            <i class="fa fa-envelope-o"></i>
                            <p>New messages</p>
                        </div>
                        <span class="footerTitle">You have 22 new messages and 16 waiting in draft folder</span>
                    </div>

                    <!-- Rendering messages from helfy_db -->
                    @foreach($messages as $message)
                    <div class="messageContainer">
                        <div class="titlesContainer">
                            <span class="senderName">{{ $message->{'message_title'} }}</span>
                            @if ($message->{'messageID'} == 1 )
                                <span class="timeAgoNew">1m ago</span>
                            @else
                                <span class="timeAgo">5m ago</span>
                            @endif
                        </div>
                        <p class="messageBodyText">{{ $message->{'message_body'} }}</p>
                        <p class="messageDate">{{ $message->{'message_time'} }}</p>
                    </div>
                    @endforeach

                </div>
                
                <div class="thirdRowRightSectionContainer">
                    <div class="userProjectAndTodoContainer">
                        <!-- #User project list -->
                        <div id="userProjectListContainer" class="thirdRowDataContainer">
                            <div class="titlesContainer">
                                <span class="title">User project list</span>
                                <div class="icon-group">
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                    <i class="fa fa-wrench" aria-hidden="true"></i>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                            </div>
        
                            <div class="flexTable">
                                <div class="flexTableColumns">
                                    <span class="columnTitle">Status</span>
                                    <span class="columnTitle">Date</span>
                                    <span class="columnTitle">User</span>
                                    <span class="columnTitle">Value</span>
                                </div>
        
                                <div class="flexTableRow">
                                    <span id="tableText"> Pending...</span>
                                    <span id="tableText"> 11:20pm</span>
                                    <span id="tableText"> Samantha</span>
                                    <div class="footerNumberGreen">
                                        <i class="fa fa-level-up" aria-hidden="true"></i>
                                        <span>24%</span>
                                    </div>
                                </div>
        
                                <div class="flexTableRow">
                                    <div class="notificationLabelOrange">Canceled</div>
                                    <span id="tableText">10:40am</span>
                                    <span id="tableText">Monica</span>
                                    <div class="footerNumberGreen">
                                        <i class="fa fa-level-up" aria-hidden="true"></i>
                                        <span>66%</span>
                                    </div>
                                </div>
        
                                <div class="flexTableRow">
                                    <span id="tableText">Pending...</span>
                                    <span id="tableText">01:30pm</span>
                                    <span id="tableText">John</span>
                                    <div class="footerNumberGreen">
                                        <i class="fa fa-level-up" aria-hidden="true"></i>
                                        <span>54%</span>
                                    </div>
                                </div>
                                
                                <div class="flexTableRow">
                                    <span id="tableText"> Pending...</span>
                                    <span id="tableText"> 02:20pm</span>
                                    <span id="tableText"> Agnes</span>
                                    <div class="footerNumberGreen">
                                        <i class="fa fa-level-up" aria-hidden="true"></i>
                                        <span>12%</span>
                                    </div>
                                </div>
        
                                <div class="flexTableRow">
                                    <div class="notificationLabelGreen">Completed</div>
                                    <span id="tableText"> 04:10am</span>
                                    <span id="tableText"> Amelia</span>
                                    <div class="footerNumberGreen">
                                        <i class="fa fa-level-up" aria-hidden="true"></i>
                                        <span>66%</span>
                                    </div>
                                </div>
        
                                <div class="flexTableRow">
                                    <span id="tableText"> Pending</span>
                                    <span id="tableText"> 12:08pm</span>
                                    <span id="tableText"> Damian</span>
                                    <div class="footerNumberGreen">
                                        <i class="fa fa-level-up" aria-hidden="true"></i>
                                        <span>23%</span>
                                    </div>
                                </div>
                            </div>                  
                        </div>
        
                            <!-- #TodoList -->
                        <div id="todoListContainer" class="thirdRowDataContainer">
                            <div class="titlesContainer">
                                <span class="title">Small todo list</span>
                                <div class="icon-group">
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                    <i class="fa fa-wrench" aria-hidden="true"></i>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                            </div>
        
                            <div class="todoRowsContainer">
                                <div class="todoRow">
                                    <input id="todoRow1" class="todoCheckbox" type="checkbox" checked>
                                    <label for="todoRow1" class="checkedTask" id="tableText"> Buy a milk </label>
                                </div>
                                <div class="todoRow">
                                    <input id="todoRow2" class="todoCheckbox" type="checkbox">
                                    <label for="todoRow2" id="tableText"> Go to shop and find some products. </label>
                                </div>
            
                                <div class="todoRow">
                                    <input id="todoRow3" class="todoCheckbox" type="checkbox">
                                    <label for="todoRow3" id="tableText"> Send documents to Mike </label>
                                    <div class="notificationLabelGreen"> <i class="fa fa-clock-o" aria-hidden="true"></i> 1 mins</div>
                                    
                                </div>
            
                                <div class="todoRow">
                                    <input id="todoRow4" class="todoCheckbox" type="checkbox" checked>
                                    <label for="todoRow4" class="checkedTask" id="tableText"> Go to doctor Smith. </label>
                                </div>
            
                                <div class="todoRow">
                                    <input id="todoRow5" class="todoCheckbox" type="checkbox">
                                    <label for="todoRow5" id="tableText"> Plan vacation </label>
                                </div>
            
                                <div class="todoRow">
                                    <input id="todoRow6" class="todoCheckbox" type="checkbox">
                                    <label for="todoRow6" id="tableText"> Create new stuff </label>
                                </div>
            
                                <div class="todoRow">
                                    <input id="todoRow7" class="todoCheckbox" type="checkbox">
                                    <label for="todoRow7" id="tableText"> Call Anna for dinner </label>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <!-- #Transaction Worldwide -->
                    <div id="transactionWorldwideContainer" class="thirdRowDataContainer">
                        <div class="titlesContainer">
                            <span class="title">Transactions worldwide</span>
                            <div class="icon-group">
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="tableAndTransactionsContainer">
                            <div class="flexTable">
                                    <div class="flexTableColumns">
                                        <span class="columnTitle">No.</span>
                                        <span class="columnTitle">Transaction</span>
                                        <span class="columnTitle">Date</span>
                                        <span class="columnTitle">Amount</span>
                                    </div>
            
                                    <div class="flexTableRow">
                                        <span id="tableText"> 1</span>
                                        <span id="tableText"> Security doors</span>
                                        <span id="tableText"> 16 june 2014</span>
                                        <div class="notificationLabelGreen">$483.00</div>
                                    </div>
            
                                    <div class="flexTableRow">
                                        <span id="tableText"> 2 </span>
                                        <span id="tableText">Wardrobes</span>
                                        <span id="tableText">10 june 2014</span>
                                        <div class="notificationLabelGreen">$327.00</div>
                                    </div>
            
                                    <div class="flexTableRow">
                                        <span id="tableText"> 3 </span>
                                        <span id="tableText">Set of tools</span>
                                        <span id="tableText">12 june 2014</span>
                                        <div class="notificationLabelOrange">$125.00</div>
                                    </div>
                                    
                                    <div class="flexTableRow">
                                        <span id="tableText"> 4 </span>
                                        <span id="tableText">Panoramic pictures</span>
                                        <span id="tableText">22 june 2013</span>
                                        <div class="notificationLabelGreen">$344.00</div>
                                    </div>
            
                                    <div class="flexTableRow">
                                        <span id="tableText"> 5 </span>
                                        <span id="tableText">Phones</span>
                                        <span id="tableText">24 june 2013</span>
                                        <div class="notificationLabelGreen">$235.00</div>
                                    </div>
            
                                    <div class="flexTableRow">
                                        <span id="tableText"> 6 </span>
                                        <span id="tableText">Monitors</span>
                                        <span id="tableText">26 june 2013</span>
                                        <div class="notificationLabelGreen">$100.00</div>
                                    </div>
                                </div>   
                                <img id="transactionsGraph" src="./assets/transactions-graph.png" alt="transactions-graph">
                            </div>
                        </div>
                    </div>
                
                </div>
               
            </div>
   

</body>
</html>