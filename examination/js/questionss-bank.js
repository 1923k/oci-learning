// creating an array and passing the number, questions, options, and answers
let questions = [
    {
    numb: 1,
    question: "In Oracle Cloud Infrastructure Block Volume Service, which feature enables you to increase the size of block volume without any downtime ?",
    answer: "C. Online Resizing",
    options: [
      "A. Dynamic Volume Resizing",
      "B. Volume Elasticity",
      "C. Online Resizing",
      "D. Volume Bursting"
    ]
  },
    {
    numb: 2,
    question: "Which file protocol does Oracle Cloud Infrastructure File Storage Service use to enable file sharing across instance ?",
    answer: "A. Network File System (NFS)",
    options: [
      "A. Network File System (NFS)",
      "B. File Transfer Protocol (FTP)",
      "C. Internet Small Computer System Interface (iSCSI)",
      "D. Server Message Block (SMB)"
    ]
  },
    {
    numb: 3,
    question: "In Oracle Cloud Infrastructure Object Storage Service, which storage tier is designed for rarely accessed data that can be restored within hours ?",
    answer: "C. Archive Storage",
    options: [
      "A. Intelligent Tiering",
      "B. One Zone-infrequent Access",
      "C. Archive Storage",
      "D. Standard Storage"
    ]
  },
    {
    numb: 4,
    question: "Which feature of Oracle Cloud Infrastructure Object Storage Service enables users to automatically move objects between storage tiers based on predefined rules ?",
    answer: "B. Object Lifecycle Management",
    options: [
      "A. Pre-Authenticated Requests",
      "B. Object Lifecycle Management",
      "C. Cross-Region Replication",
      "D. Object Versioning"
    ]
  },
    {
    numb: 5,
    question: "Which performance level is NOT available in Oracle Cloud Infrastructure Block Volume Service ?",
    answer: "B. Low Performance",
    options: [
      "A. Balanced",
      "B. Low Performance",
      "C. High Performance",
      "D. Ultra High Performance"
    ]
  },

  {
    numb: 6,
    question: "Which Oracle Cloud Infrastructure service is responsible for securely storing and managing encryption keys and secrets ?",
    answer: "D. Vault",
    options: [
      "A. Cloud Guard",
      "B. Security Zones",
      "C. Security Advisor",
      "D. Vault"
    ]
  },

  {
    numb: 7,
    question: "Which feature is NOT provided by Oracle Cloud Infrastructure Security Zone ?",
    answer: "B. Storing and managing encryption keys and secrets",
    options: [
      "A. Restricting resource creation based on predefined security policies",
      "B. Storing and managing encryption keys and secrets",
      "C. Continuous monitoring of security posture",
      "D. Automatically enforcing security best practices"
    ]
  },

  {
    numb: 8,
    question: "Which Oracle Cloud Infrastructure service continuously monitors your cloud resources and configurations to detect, access, and remediate security risks ?",
    answer: "B. Cloud Guard",
    options: [
      "A. Vault",
      "B. Cloud Guard",
      "C. Security Zones",
      "D. Security Advisor"
    ]
  },

  {
    numb: 9,
    question: "Which Oracle Cloud Infrastructure service is designed to protect your web applications from various types of malicious attacks, such as SQL injection and cross-site scripting ?",
    answer: "D. Web Application Firewall (WAF)",
    options: [
      "A. Cloud Guard",
      "B. Security Advisor",
      "C. Vault",
      "D. Web Application Firewall (WAF)"
    ]
  },

  {
    numb: 10,
    question: "Which factor does NOT impact the cost of running a virtual machine instance in Oracle Cloud Infrastructure ?",
    answer: "D. The region used by the VM instance",
    options: [
      "A. The size of the VM instance",
      "B. The number of virtual machines running",
      "C. The operating system used by the VM instance",
      "D. The region used by the VM instance"
    ]
  },

  {
    numb: 11,
    question: "In Oracle Cloud Infrastructure, what does the Universal Credits pricing model allow customers to do ?",
    answer: "C. Use prepaid credits for any eligible cloud service",
    options: [
      "A. Receive a fixed amount of resources for a specific price",
      "B. Pay a fixed price for all services",
      "C. Use prepaid credits for any eligible cloud service",
      "D. Pay only for services they use with no upfront commitment"
    ]
  },
  
  {
    numb: 12,
    question: "What is the primary function of a Route Table in the Oracle Cloud Infrastructure Networking service ?",
    answer: "D. To define rules to route traffic from subnets to destinations outside of VCN",
    options: [
      "A. To connect a VCN to the public internet",
      "B. To define rules controlling traffic flow between subnets",
      "C. To provide a private connection between a VCN and an on-premises network",
      "D. To define rules to route traffic from subnets to destinations outside of VCN"
    ]
  },
  
  {
    numb: 13,
    question: "What is the primary purpose of a Network Security Group (NSG) in Oracle Cloud Infrastructure Networking service ?",
    answer: "A. To control traffic flow between specific resources within a VCN",
    options: [
      "A. To control traffic flow between specific resources within a VCN",
      "B. To control traffic routing between VCNs",
      "C. To provide a private connection between a VCN and an on-premises network",
      "D. To connect a VCN to the public Internet"
    ]
  },
  
  {
    numb: 14,
    question: "Which type of load balancing policy is supported by Oracle Cloud Infrastructure Load Balancer ?",
    answer: "A. Round Robin",
    options: [
      "A. Round Robin",
      "B. Random",
      "C. Weighted Most Connection",
      "D. Weighted Least Connection"
    ]
  },
  
  {
    numb: 15,
    question: "Which component of the Oracle Cloud Infrastructure Networking service allows resources in a VCN to access Oracle Cloud services without traversing the public Internet ?",
    answer: "A. Service Gateway",
    options: [
      "A. Service Gateway",
      "B. Internet Gateway",
      "C. Network Address Translation (NAT) Gateway",
      "D. Dynamic Routing Gateway (DRG)"
    ]
  },
  
  {
    numb: 16,
    question: "Which component of the Oracle Cloud Infrastructure Networking service provides a private connection between a VCN and an on-premises network ?",
    answer: "C. Dynamic Routing Gateway (DRG)",
    options: [
      "A. Service Gateway",
      "B. Network Address Translation (NAT) Gateway",
      "C. Dynamic Routing Gateway (DRG)",
      "D. Internet Gateway"
    ]
  },
  
  {
    numb: 17,
    question: "What is the primary goal of the Oracle Cloud Infrastructure shared security model ?",
    answer: "A. To ensure a comprehensive security posture by dividing security responsibilities between Oracle and the customer",
    options: [
      "A. To ensure a comprehensive security posture by dividing security responsibilities between Oracle and the customer",
      "B. To reduce the customer's responsibility for security",
      "C. To make the customer soley responsible for all aspects of security",
      "D. To make Oracle soley responsible for all aspects of security"
    ]
  },
  
  {
    numb: 18,
    question: "Which feature in the Oracle Cloud Infrastructure Compute service enables users to migrate running instances between different physical servers ?",
    answer: "C. Live Migration",
    options: [
      "A. Fault Domain Balancing",
      "B. Instance Evacuation",
      "C. Live Migration",
      "D. Instance Migration"
    ]
  },
  
  {
    numb: 19,
    question: "What is the term used to describe the combination of an instance's shape, base image, and metadata in the Oracle Cloud Infrastructure Compute Service ?",
    answer: "C. Instance Configuration",
    options: [
      "A. Instance Specification",
      "B. Instance Profile",
      "C. Instance Configuration",
      "D. Instance Template"
    ]
  },
  
  {
    numb: 20,
    question: "What type of storage is primarily used for storing boot volume of an instance in the Oracle Cloud Infrastructure Compute service ?",
    answer: "A. Block Storage",
    options: [
      "A. Block Storage",
      "B. Object Storage",
      "C. File Storage",
      "D.  Archive Storage"
    ]
  },
  
  {
    numb: 21,
    question: "Which is NOT a type of instance offered by the Oracle Cloud Infrastructure Compute service ?",
    answer: "C. Nano instance",
    options: [
      "A. Dedicated Virtual Machine Host",
      "B. Bare Metal",
      "C. Nano instance",
      "D. Virtual Machine"
    ]
  },
  
  {
    numb: 22,
    question: "Which feature does the Oracle Cloud Infrastructure Compute service leverage for ensuring high availability of applications ?",
    answer: "A. Fault Domain",
    options: [
      "A. Fault Domain",
      "B. Real Application Clusters (RAC)",
      "C. Golden Gate",
      "D. Data Guard"
    ]
  },
  
  {
    numb: 23,
    question: "What is the primary purpose of Oracle Cloud Infrastructure Functions ?",
    answer: "A. To execute code in response to events or HTTP requests",
    options: [
      "A. To execute code in response to events or HTTP requests",
      "B. To provide a managed database service",
      "C. To deploy and manage virtual machines",
      "D. To store and manage files"
    ]
  },
  
  {
    numb: 24,
    question: "How are compartment quotas applied in Oracle Cloud Infrastructure ?",
    answer: "C. On a per-compartment basis",
    options: [
      "A. On a per-region basis",
      "B. On a per-tenancy basis",
      "C. On a per-compartment basis",
      "D. Globally, across all compartments"
    ]
  },
  
  {
    numb: 25,
    question: "In Oracle Cloud Infrastructure, what can you set up to receive notifications when budget thresholds are reached ?",
    answer: "A. Email alerts",
    options: [
      "A. Email alerts",
      "B. Pager alerts",
      "C. Push notifications",
      "D. SMS notification"
    ]
  },
  
  {
    numb: 26,
    question: "What is the primary goal of distributing resources across multiple Availability Domains in Oracle Cloud Infrastructure ?",
    answer: "A. To improve fault tolerance and high availability",
    options: [
      "A. To improve fault tolerance and high availability",
      "B. To increase storage capacity for a region",
      "C. To segregate resources based on project or department",
      "D. To reduce latency for users in different geographic locations"
    ]
  },
  
  {
    numb: 27,
    question: "Which statement best descibes the relationship between Oracle Cloud Infrastructure Regions and Availability Domain ?",
    answer: "C. An Availability Domain is a part of a region",
    options: [
      "A. A region is a part of an Availability Domain",
      "B. Availability Domain exist independently of regions",
      "C. An Availability Domain is a part of a region",
      "D. Regions and Availability Domains are the same thing"
    ]
  },
  
  {
    numb: 28,
    question: "Which Oracle Cloud Infrastructure service is NOT designed for a multicloud solutions ?",
    answer: "A. Oracle Roving Edge Infrastructure",
    options: [
      "A. Oracle Roving Edge Infrastructure",
      "B. Oracle Database Service for Azure",
      "C. Oracle MySQL Haetwave on AWS",
      "D. Oracle Interconnect for Azure"
    ]
  },
  
  {
    numb: 29,
    question: "Which is NOT a component of an Identity and Access Management (IAM) policy statement in Oracle Cloud Infrastructure ?",
    answer: "B. Data backup frequency",
    options: [
      "A. Location",
      "B. Data backup frequency",
      "C. Resource-type",
      "D. Action Verb"
    ]
  },
  
  {
    numb: 30,
    question: "Which statement is NOT true about compartments in Oracle Cloud Infrastructure ?",
    answer: "B. Compartment provide a way to store and manage encryption keys and secrets",
    options: [
      "A. Compartments are global resources",
      "B. Compartment provide a way to store and manage encryption keys and secrets",
      "C. Compartments can be nested to create a hierarchy",
      "D. Identity and Access Management (IAM) policies can be written to grant access to resources in specific compartments"
    ]
  },
  
  {
    numb: 31,
    question: "What workload types are supported by Oracle Cloud Infrastructure Autonomous Database ?",
    answer: "D. Transaction Processing and Data Warehousing",
    options: [
      "A. Data Intergration and Data Migration",
      "B. Data Streaming and Data Analysis",
      "C. Data Storage and Data Retrieval",
      "D. Transaction Processing and Data Warehousing"
    ]
  },
  
  {
    numb: 32,
    question: "Which workload type is NOT optimized for Oracle Autonomous Database on Shared Exadata Infrastructure ?",
    answer: "D. High-performance computing",
    options: [
      "A. Data warehousing",
      "B. Mixed workloads",
      "C. Transaction processing",
      "D. High-performance computing"
    ]
  },
  
  {
    numb: 33,
    question: "What is the primary purpose of the MySQL Database Service HeatWave configuration in OCI ?",
    answer: "D. To provide a distributed in-memory query accelerator",
    options: [
      "A. To offer a serverless MySQL deployment",
      "B. To ensure high availability and fault tolerance",
      "C. To enable seamless database migration from on-premises to OCI",
      "D. To provide a distributed in-memory query accelerator"
    ]
  },
  
  {
    numb: 34,
    question: "Which is a key benefit of using Oracle Cloud Infrastructure Autonomous Database ?",
    answer: "A. Reduced database management overhead",
    options: [
      "A. Reduced database management overhead",
      "B. Unlimited storage capacity",
      "C. Support for all database technologies",
      "D. Free migration from any cloud provider"
    ]
  },
  
  {
    numb: 35,
    question: "Which database technology underlines Oracle Cloud Infrastructure Autonomous Database ?",
    answer: "B. Oracle Database",
    options: [
      "A. MySQL",
      "B. Oracle Database",
      "C. Microsoft SQL Server",
      "D. PostgreSQL"
    ]
  },
];