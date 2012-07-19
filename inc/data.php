<?php
$data = array();
$data["types"] = array("Failure","Request");
$data["services"] = array (
    array(
        "name" => "Account Services",
        "categories" => array(
            array(
                "name" => "Active Directory",
                "failure" => true,
                "request" => true
            ),
            array(
                "name" => "ADS Codes",
                "failure" => true,
                "request" => true
            ),
            array(
                    "name" => "CAPS Replica",       
                    "failure" => true,
                    "request" => true
            ),
            array(
                    "name" => "CNA",
                    "failure" => true,
                    "request" => true
            ),
            array(
                    "name" => "Email",
                    "failure" => true,
                    "request" => true
            ),
            array(
                    "name" => "FIM",
                    "failure" => true,
                    "request" => true
            ),
            array(
                    "name" => "ILM",
                    "failure" => true,
                    "request" => true
            ),
            array(
                    "name" => "NASS",
                    "failure" => true,
                    "request" => true
            ),
            array(
                    "name" => "SAS/PFW",
                    "failure" => true,
                    "request" => true
            )
        ),
    ),
    array(
        "name" => "Administration Services",
        "categories" => array(
            array(
                "name" => "Licensing",                  
                "failure" => false,
                "request" => true
            ),
            array(
                    "name" => "New Software",
                    "failure" => false,
                    "request" => true
            ),
            array(
                    "name" => "Purchase Hardware",
                    "failure" => false,
                    "request" => true
            ),
            array(
                    "name" => "Purchase Software",
                    "failure" => false,
                    "request" => true
            ),
            array(
                    "name" => "Quotation",
                    "failure" => false,
                    "request" => true
            ),
            array(
                    "name" => "Request",
                    "failure" => false,
                    "request" => true
            ),
        ),
    ),
        array(
                "name" => "Communications Services",
                "categories" => array(
                        array(
                                "name" => "CEnet",  
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Firewall",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Hardware",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "IronPort",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "LAN",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Phone",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Site Down",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Vertel Link",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "WAN",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Wireless",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Phone Configuration",
                                "failure" => false,
                                "request" => true
                        ),
                ),
        ),
        array(
                "name" => "Desktop Services",
                "categories" => array(
                        array(
                                "name" => "Application",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Citrix",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Deployment",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Email",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Hardware",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Internet",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "IWB",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Operating System",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Peripherals",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Rebuild",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "SCCM",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Setup",
                                "failure" => false,
                                "request" => true
                        ),
                ),
        ),
        array(
                "name" => "Meeting Support Services",
                "categories" => array(
                        array(
                                "name" => "AV Equipment",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Computer",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Other",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Projector",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Meeting Support",
                                "failure" => false,
                                "request" => true
                        ),
                ),
        ),
        array(
                "name" => "Printing Services",
                "categories" => array(
                        array(
                                "name" => "Configuration",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Error",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Hardware",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Papercut",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Setup",
                                "failure" => false,
                                "request" => true
                        ),
                ),
        ),
        array(
                "name" => "Project Services",
                "categories" => array(
                        array(
                                "name" => "Project",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Request",
                                "failure" => false,
                                "request" => true
                        ),
                ),
        ),
        array(
                "name" => "Server Services",
                "categories" => array(
                        array(
                                "name" => "Access",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Active Directory",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Backup",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Citrix",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "DFS",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "DHCP",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "DNS",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Exchange",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Folder Permissions",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Group Policy",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Hardware",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Major Service Down",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Operating System",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Other Applications",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Profile",
                                "failure" => true,
                                "request" => false
                        ),
                        array(
                                "name" => "Quotas",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Restore",
                                "failure" => false,
                                "request" => true
                        ),
                        array(
                                "name" => "SCCM",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "SQL",
                                "failure" => true,
                                "request" => true
                        ),
                        array(
                                "name" => "Web/Sharepoint",
                                "failure" => true,
                                "request" => true
                        ),

                ),
        ),
        array(
                "name" => "Training Services",
                "categories" => array(
                        array(
                                "name" => "Documentation",  
                                "failure" => false,
                                "request" => true
                        ),
                        array(
                                "name" => "Training",
                                "failure" => false,
                                "request" => true
                        ),
                ),
        )
        
);

$data["serviceFailures"] = array ("Account Services",
                                "Communications Services",
                                "Desktop Services",
                                "Meeting Support Services",
                                "Printing Services",
                                "Project Services",
                                "Server Services"
                                );
                                
$data["serviceRequests"] = array (  "Account Services",
                                "Administration Services",
                                "Communications Services",
                                "Desktop Services",
                                "Meeting Support Services",
                                "Printing Services",
                                "Project Services",
                                "Server Services",
                                "Training Services"
                                );

$data["causes"] = array(
                "Configuration",
                "Duplicate Ticket",
                "Hardware",
                "Installation",
                "Linked Knowledge",
                "Linked Problem",
                "Linked Service Request",
                "Other",
                "Software",
                "Storage",
                "Training",
                
            );
        
$data["teams"] = array(
                "Data Centre",
                "Field Technicians",
                "Infrastructure Services",
                "Network Services",
                "Projects",
                "Service Desk",
                "Training Team",
                
                );
        
        
$data["fieldTechs"] = array(
                array(
                    "id" => "aaron.toomey",
                    "name" => "Aaron Toomey",
                ),
                array(
                        "id" => "ben.martin",
                        "name" => "Ben Martin",
                ),
                array(
                        "id" => "brenden.cram",
                        "name" => "Brenden Cram",
                ),
                array(
                        "id" => "fahri.cantas",
                        "name" => "Fahri Cantas",
                ),
                array(
                        "id" => "gavin.clarke",
                        "name" => "Gavin Clarke",
                ),
                array(
                        "id" => "jacob.moore",
                        "name" => "Jacob Moore",
                ),
                array(
                        "id" => "Joel.Newall",
                        "name" => "Joel Newall",
                ),
                array(
                        "id" => "kevin.lam",
                        "name" => "Kevin Lam",
                ),
                array(
                        "id" => "mervyn.jackson",
                        "name" => "Mervyn Jackson",
                ),
                array(
                        "id" => "paul.sheean",
                        "name" => "Paul Sheean",
                ),
                array(
                        "id" => "peter.nagy",
                        "name" => "Peter Nagy",
                ),

        );

