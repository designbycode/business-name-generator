<?php

namespace Designbycode\BusinessNameGenerator;

class Nouns implements HasGeneratorLists
{
    /**
     * @return array
     */
    public function default(): array
    {
        return [
            'Solutions', 'Trading', 'Technologies', 'Enterprises', 'Consulting', 'Systems',
            'Networks', 'Services', 'Partners', 'Innovations', 'Ventures',
            'Concepts', 'Dynamics', 'Strategies', 'Advisors', 'Associates',
            'Labs', 'Works', 'Platforms', 'Designs', 'Developments',
            'Resources', 'Holdings', 'Group', 'Agency', 'Creations',
            'Studios', 'Marketing', 'Investments', 'Analytics', 'Intelligence',
            'Management', 'Research', 'Productions', 'Events', 'Projects',
            'Industries', 'Entities', 'Firms', 'Corporation', 'Companies',
            'Businesses', 'Organizations', 'Sectors', 'Institutions', 'Establishments',
            'Operations', 'Facilities', 'Providers', 'Vendors', 'Suppliers',
            'Manufacturers', 'Distributors', 'Retailers', 'Wholesalers', 'Contractors',
            'Builders', 'Developers', 'Consultants', 'Advisers', 'Traders',
            'Brokers', 'Dealers', 'Agencies', 'Agents', 'Representatives',
            'Planners', 'Designers', 'Architects', 'Engineers', 'Technicians',
            'Specialists', 'Experts', 'Professionals', 'Practitioners', 'Clinics',
            'Centers', 'Institutes', 'Programs', 'Academies', 'Schools',
            'Colleges', 'Universities', 'Libraries', 'Museums', 'Laboratories',
            'Workshops', 'Studios', 'Offices', 'Headquarters', 'Branches',
            'Divisions', 'Departments', 'Units', 'Sections', 'Groups',
            'Teams', 'Forums', 'Associations', 'Unions', 'Syndicates',
            'Alliances', 'Coalitions', 'Partnerships', 'Federations', 'Networks',
            'Clusters', 'Consortiums', 'Conglomerates', 'Bodies', 'Outfits',
            'Outposts', 'Premises', 'Locations', 'Sites', 'Complexes',
            'Campuses', 'Bases', 'Centers', 'Hubs', 'Zones',
            'Regions', 'Territories', 'Districts', 'Areas', 'Quadrants',
            'Divisions', 'Departments', 'Units', 'Groups', 'Teams',
            'Clans', 'Circles', 'Clubs', 'Societies', 'Guilds',
            'Fraternities', 'Sororities', 'Associations', 'Leagues', 'Unions',
            'Alliances', 'Coalitions', 'Partnerships', 'Fellowships', 'Confraternities',
            'Orders', 'Brotherhoods', 'Sisterhoods', 'Families', 'Dynasties',
            'Houses', 'Lineages', 'Tribes', 'Nations', 'Peoples',
            'Communities', 'Collectives', 'Bands', 'Gangs', 'Crews',
            'Posses', 'Squads', 'Units', 'Platoons', 'Companies',
            'Battalions', 'Regiments', 'Brigades', 'Corps', 'Armies',
            'Fleets', 'Navies', 'Flotillas', 'Squadrons', 'Wings',
            'Commands', 'Task Forces', 'Forces', 'Troops', 'Militias',
            'Guards', 'Reserves', 'Auxiliaries', 'Volunteers', 'Cadres',
            'Recruits', 'Conscripts', 'Draftees', 'Soldiers', 'Sailors',
            'Marines', 'Airmen', 'Aviators', 'Pilots', 'Crews',
            'Operators', 'Technicians', 'Mechanics', 'Engineers', 'Specialists',
            'Experts', 'Professionals', 'Practitioners', 'Consultants', 'Advisors',
            'Counselors', 'Guides', 'Mentors', 'Coaches', 'Trainers',
            'Instructors', 'Teachers', 'Educators', 'Tutors', 'Lecturers',
            'Professors', 'Researchers', 'Scholars', 'Scientists', 'Analysts',
            'Strategists', 'Planners', 'Designers', 'Architects', 'Builders',
            'Constructors', 'Developers', 'Producers', 'Creators', 'Makers',
            'Manufacturers', 'Fabricators', 'Assemblers', 'Contractors', 'Erectors',
            'Installers', 'Integrators', 'Implementers', 'Handlers', 'Manipulators',
            'Controllers', 'Regulators', 'Managers', 'Directors', 'Administrators',
            'Executives', 'Leaders', 'Chiefs', 'Heads', 'Principals',
            'Partners', 'Associates', 'Members', 'Stakeholders', 'Shareholders',
            'Investors', 'Backers', 'Supporters', 'Sponsors', 'Benefactors',
            'Patrons', 'Donors', 'Contributors', 'Funders', 'Financiers',
            'Bankers', 'Creditors', 'Lenders', 'Loaners', 'Bailors',
            'Insurers', 'Underwriters', 'Guarantors', 'Sureties', 'Vouchers',
            'Securities', 'Bondsmen', 'Trustees', 'Custodians', 'Guardians',
            'Caretakers', 'Wards', 'Beneficiaries', 'Inheritors', 'Heirs',
            'Successors', 'Assignees', 'Appointees', 'Nominees', 'Candidates',
            'Contestants', 'Challengers', 'Competitors', 'Rivals', 'Opponents',
            'Adversaries', 'Enemies', 'Academy', 'Alliance', 'Altitude', 'Apex', 'Arcadia', 'Arena',
            'Aspect', 'Atlas', 'Aura', 'Avenue', 'Axis', 'Bazaar', 'Beacon',
            'Bistro', 'Boulevard', 'Bridge', 'Brio', 'Brook', 'Bunker',
            'Bureau', 'Buzz', 'Cache', 'Cafe', 'Campus', 'Canyon', 'Cape',
            'Capital', 'Cascade', 'Castle', 'Catalyst', 'Cellar', 'Center',
            'Chain', 'Chamber', 'Chateau', 'Circle', 'Citadel', 'City',
            'Clan', 'Class', 'Clearing', 'Cliff', 'Club', 'Coast', 'Code',
            'Colony', 'Column', 'Combine', 'Compass', 'Complex', 'Concept',
            'Concord', 'Cone', 'Congress', 'Conquest', 'Console', 'Constellation',
            'Construct', 'Continent', 'Core', 'Corner', 'Cosmos', 'Cottage',
            'Council', 'County', 'Course', 'Cove', 'Craft', 'Creek', 'Crescent',
            'Crest', 'Crew', 'Crisp', 'Cross', 'Crown', 'Cube', 'Culinary',
            'Culture', 'Cupola', 'Curve', 'Cut', 'Cycle',
        ];
    }

    /**
     * @return string[]
     */
    public function funny(): array
    {
        return [
            'Banana', 'Penguin', 'Noodle', 'Pickle', 'Kumquat',
            'Pineapple', 'Kangaroo', 'Platypus', 'Wombat', 'Sasquatch',
            'Yeti', 'Unicorn', 'Narwhal', 'Llama', 'Alpaca',
            'Sloth', 'Chinchilla', 'Giraffe', 'Hippo', 'Elephant',
            'Rhinoceros', 'Walrus', 'Octopus', 'Penguin', 'Koala',
            'Bumblebee', 'Firefly', 'Turtle', 'Koala', 'Squirrel',
            'Chipmunk', 'Ostrich', 'Emu', 'Caterpillar', 'Panda',
            'Ocelot', 'Penguin', 'Marmot', 'Wombat', 'Penguin',
            'Platypus', 'Armadillo', 'Aardvark', 'Pangolin', 'Salamander',
            'Axolotl', 'Quokka', 'Ferret', 'Meerkat', 'Narwhal',
            'Manatee', 'Tapir', 'Puffin', 'Sloth', 'Dodo',
        ];
    }

    /**
     * @return array
     */
    public function color(): array
    {
        return Colors::getList();
    }

    /**
     * @return string[]
     */
    public function playful(): array
    {
        return [
            'Adventure', 'Dream', 'Wonder', 'Magic', 'Fantasy',
            'Joy', 'Laughter', 'Smile', 'Happiness', 'Sunshine',
            'Rainbow', 'Bubble', 'Candy', 'Lollipop', 'Marshmallow',
            'Puppy', 'Kitten', 'Pony', 'Teddy bear', 'Toy',
            'Giggles', 'Chuckles', 'Glee', 'Jubilee', 'Merriment',
            'Amusement', 'Delight', 'Thrill', 'Excitement', 'Euphoria',
            'Frolic', 'Play', 'Whimsy', 'Mischief', 'Shenanigans',
            'Antics', 'Escapade', 'Jamboree', 'Jollification', 'Fiesta',
            'Celebration', 'Carnival', 'Parade', 'Circus', 'Revelry',
            'Frolics', 'Caprice', 'Whim', 'Lark', 'Romping',
            'Pranks', 'Tricks', 'High jinks', 'Gaiety', 'Joyfulness',
            'Bliss', 'Rapture', 'Elation', 'Ecstasy', 'Mirth',
            'Giggling', 'Snicker', 'Grin', 'Chuckling', 'Snorting',
            'Belly laugh', 'Burst of laughter', 'Hysterics', 'Cachinnation',
            'Roar of laughter',
        ];
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return array_merge(
            $this->default(),
            $this->funny(),
            $this->playful(),
            $this->color()
        );
    }
}
