<?php

namespace Designbycode\BusinessNameGenerator;

class BusinessNameGenerator
{
    private array $adjectives;
    private array $nouns;

    public function __construct()
    {
        $this->adjectives = [
            "Innovative", "Creative", "Dynamic", "Strategic", "Global",
            "Agile", "Efficient", "Robust", "Scalable", "Intuitive",
            "Advanced", "Leading", "Reliable", "Custom", "Smart",
            "Visionary", "Pioneering", "Cutting-edge", "Groundbreaking", "Revolutionary",
            "Trailblazing", "Futuristic", "Ingenious", "Resourceful", "Versatile",
            "Proactive", "Progressive", "Synergistic", "Transformative", "Impactful",
            "Elegant", "Sophisticated", "Sleek", "Streamlined", "User-friendly",
            "High-performance", "Next-gen", "State-of-the-art", "Premier", "Premium",
            "Elite", "Exclusive", "Exceptional", "Top-tier", "Outstanding",
            "Remarkable", "Impressive", "Phenomenal", "Astounding", "Extraordinary",
            "Superior", "Unparalleled", "Unmatched", "Distinctive", "Unique",
            "Original", "Inventive", "Nimble", "Flexible", "Adaptable",
            "Energetic", "Enthusiastic", "Passionate", "Driven", "Ambitious",
            "Motivated", "Committed", "Dedicated", "Focused", "Persistent",
            "Tenacious", "Resilient", "Sturdy", "Strong", "Powerful",
            "Mighty", "Formidable", "Tough", "Dependable", "Consistent",
            "Steady", "Trustworthy", "Honest", "Ethical", "Principled",
            "Fair", "Just", "Responsible", "Accountable", "Transparent",
            "Open", "Direct", "Straightforward", "Clear", "Plain",
            "Simple", "Uncomplicated", "Productive", "Proficient", "Skilled",
            "Competent", "Capable", "Experienced", "Knowledgeable", "Expert",
            "Masterful", "Accomplished", "Talented", "Gifted", "Amazing",
            "Incredible", "Fantastic", "Fabulous", "Wonderful", "Marvelous",
            "Magnificent", "Brilliant", "Radiant", "Luminous", "Dazzling",
            "Glowing", "Shining", "Sparkling", "Gleaming", "Bright",
            "Vivid", "Vibrant", "Colorful"
        ];
        $this->nouns = [
            "Solutions", "Trading", "Technologies", "Enterprises", "Consulting", "Systems",
            "Networks", "Services", "Partners", "Innovations", "Ventures",
            "Concepts", "Dynamics", "Strategies", "Advisors", "Associates",
            "Labs", "Works", "Platforms", "Designs", "Developments",
            "Resources", "Holdings", "Group", "Agency", "Creations",
            "Studios", "Marketing", "Investments", "Analytics", "Intelligence",
            "Management", "Research", "Productions", "Events", "Projects",
            "Industries", "Entities", "Firms", "Corporation", "Companies",
            "Businesses", "Organizations", "Sectors", "Institutions", "Establishments",
            "Operations", "Facilities", "Providers", "Vendors", "Suppliers",
            "Manufacturers", "Distributors", "Retailers", "Wholesalers", "Contractors",
            "Builders", "Developers", "Consultants", "Advisers", "Traders",
            "Brokers", "Dealers", "Agencies", "Agents", "Representatives",
            "Planners", "Designers", "Architects", "Engineers", "Technicians",
            "Specialists", "Experts", "Professionals", "Practitioners", "Clinics",
            "Centers", "Institutes", "Programs", "Academies", "Schools",
            "Colleges", "Universities", "Libraries", "Museums", "Laboratories",
            "Workshops", "Studios", "Offices", "Headquarters", "Branches",
            "Divisions", "Departments", "Units", "Sections", "Groups",
            "Teams", "Forums", "Associations", "Unions", "Syndicates",
            "Alliances", "Coalitions", "Partnerships", "Federations", "Networks",
            "Clusters", "Consortiums", "Conglomerates", "Bodies", "Outfits",
            "Outposts", "Premises", "Locations", "Sites", "Complexes",
            "Campuses", "Bases", "Centers", "Hubs", "Zones",
            "Regions", "Territories", "Districts", "Areas", "Quadrants",
            "Divisions", "Departments", "Units", "Groups", "Teams",
            "Clans", "Circles", "Clubs", "Societies", "Guilds",
            "Fraternities", "Sororities", "Associations", "Leagues", "Unions",
            "Alliances", "Coalitions", "Partnerships", "Fellowships", "Confraternities",
            "Orders", "Brotherhoods", "Sisterhoods", "Families", "Dynasties",
            "Houses", "Lineages", "Tribes", "Nations", "Peoples",
            "Communities", "Collectives", "Bands", "Gangs", "Crews",
            "Posses", "Squads", "Units", "Platoons", "Companies",
            "Battalions", "Regiments", "Brigades", "Corps", "Armies",
            "Fleets", "Navies", "Flotillas", "Squadrons", "Wings",
            "Commands", "Task Forces", "Forces", "Troops", "Militias",
            "Guards", "Reserves", "Auxiliaries", "Volunteers", "Cadres",
            "Recruits", "Conscripts", "Draftees", "Soldiers", "Sailors",
            "Marines", "Airmen", "Aviators", "Pilots", "Crews",
            "Operators", "Technicians", "Mechanics", "Engineers", "Specialists",
            "Experts", "Professionals", "Practitioners", "Consultants", "Advisors",
            "Counselors", "Guides", "Mentors", "Coaches", "Trainers",
            "Instructors", "Teachers", "Educators", "Tutors", "Lecturers",
            "Professors", "Researchers", "Scholars", "Scientists", "Analysts",
            "Strategists", "Planners", "Designers", "Architects", "Builders",
            "Constructors", "Developers", "Producers", "Creators", "Makers",
            "Manufacturers", "Fabricators", "Assemblers", "Contractors", "Erectors",
            "Installers", "Integrators", "Implementers", "Handlers", "Manipulators",
            "Controllers", "Regulators", "Managers", "Directors", "Administrators",
            "Executives", "Leaders", "Chiefs", "Heads", "Principals",
            "Partners", "Associates", "Members", "Stakeholders", "Shareholders",
            "Investors", "Backers", "Supporters", "Sponsors", "Benefactors",
            "Patrons", "Donors", "Contributors", "Funders", "Financiers",
            "Bankers", "Creditors", "Lenders", "Loaners", "Bailors",
            "Insurers", "Underwriters", "Guarantors", "Sureties", "Vouchers",
            "Securities", "Bondsmen", "Trustees", "Custodians", "Guardians",
            "Caretakers", "Wards", "Beneficiaries", "Inheritors", "Heirs",
            "Successors", "Assignees", "Appointees", "Nominees", "Candidates",
            "Contestants", "Challengers", "Competitors", "Rivals", "Opponents",
            "Adversaries", "Enemies"
        ];
    }

    public function generate(): string
    {
        $adjective = $this->adjectives[array_rand($this->adjectives)];
        $noun = $this->nouns[array_rand($this->nouns)];
        return $adjective . " " . $noun;
    }
}
