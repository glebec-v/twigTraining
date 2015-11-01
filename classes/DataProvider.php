<?php

class DataProvider
{
    protected $home, $about, $products;
    static $instance;

    public function getHome() { return $this->home; }
    public function getAbout() { return $this->about; }
    public function getProducts() { return $this->products; }

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __construct()
    {
        $this->home = new stdClass();
        $this->makeHome();

        $this->about = new stdClass();
        $this->makeAbout();

        $this->products = new SplObjectStorage();
        $this->makeProduct();
    }

    protected function makeHome()
    {
        $this->home->one = 'Save the complicated maneuvers for outside the ship: every part of a 300 Series spacecraft is exactly
                             where you expect it to be. At ORIGIN, we pride ourselves on building to the pilot instead of the spacecraft. Every
                              component of an ORIGIN spacecraft, from the laser bypass core connector to the cockpit auto-latch vacuum seal system,
                               has its own storied design team and has been rigorously examined for ergonomic superiority and stress-tested to
                                within one-micron tolerances. We’re dedicated to making sure your spacecraft feels like an extension of your body;
                                 grab a 300 Series flight yoke to find out what you’ve been missing.';
        $this->home->two = 'You’re traveling at thousands of kilometers per hour, blasting asteroids with your laser cannons and
                             dodging stellar debris. So why aren’t you having fun? Space travel doesn’t need to be a chore and you don’t need to do
                              it in another matte grey box.Choose an ORIGIN 300 Series spacecraft and you’ll look forward to entering orbit again.
                               The 300 Series are ships that fight as well as they look, with powerful laser cannons standard and missile launcher
                                slots optional on every model.All that, plus sleek, beautiful lines painstakingly engineered by two hundred years of
                                 space travel expertise ... it’s no wonder they call it the ORIGIN look.';
        $this->home->three = 'Why wouldn’t you want the best? Here at ORIGIN, we understand that every-one is different so our
                               engineers aimed to provide a level of customization unparalleled in our competitors so the 300 Series offers a
                                flexible design architecture allowing you to tailor the ship to suit your needs. You can rest assured that any
                                 modifications (see authorized dealer for acceptable parts) will work natively with your 300 model or variant without
                                  sacrificing the overall quality and features that make your 300 an ORIGIN spacecraft.';
        $this->home->four = 'Peace of mind doesn’t have to mean losing out on a piece of the action. A professional pilot can’t
                              rely on a repair service contract when he’s ten jumps from home. That’s why every ORIGIN 300 Series spacecraft uses
                               vacuum-tested museum-grade parts mated with industry-defining standard attach points. Every component on a 300 is
                                accessible in the field by the pilot, so taking damage doesn’t have to mean an immediate trip home. ORIGIN relies on
                                 the strictest standards to certify authorized repair centers, so you will always have a safe port.';
    }
    protected function makeAbout()
    {
        $this->about->pic = '/views/pics/350r_about.jpg';
        $this->about->header = 'ORIGIN Jumpworks GmbH';
        $this->about->text = 'If it is possible for a company to merge class and sophistication with the sheer risk of
                        spaceflight and the cold-blooded nature of interstellar dogfighting, ORIGIN Jumpworks GmbH
                         comes the closest. The company’s extensive array of high-end spacecraft is known for their
                          sleek and sophisticated lines. Similarly, they have cultivated an exclusive customer base
                           from the rich and the powerful. As ORIGIN’s perfectly-manicured salesmen eagerly point out,
                            selecting an ORIGIN design doesn’t just mean buying a ship … it means choosing a lifestyle.
                            ORIGIN was incorporated during the so-called Glowing Age, the financial boom of the
                             mid-28th century that followed the antimatter rush. For their first decade, the company
                              produced high quality fusion engines used by the UEE military and mounted on the
                               ostentatious Roberts Space Industries and Aegis Dynamics star yachts available to the
                                public (at least, the well-heeled public) at the time. With the need for personal
                                spacecraft growing exponentially, ORIGIN moved to compete with the companies they
                                 initially supplied. Within ten years, the company was producing a top-five selling
                                  midscale composite transport and within fifty their well-paying customer base was
                                   neck and neck with RSI for gross profits in the manufactured spacecraft field.
                                    ORIGIN premiered their initial 200 and 300 lines of personal ships in 2899 and has
                                     held a strong second in that market ever since. Founded on the banks of the Rhine
                                      in Cologne, Germany, ORIGIN had strong ties to Earth for the first two centuries
                                       of their existence, originally going so far as to insist that every component
                                        for their elite 600 line be manufactured in-Sol. In recent years, these ties
                                         have been severed completely. Declaring Terra the new cultural capital of the
                                          UEE, President Jennifer Friskers made the then-unpopular decision to relocate
                                           to Terra. In a largely unexpected executive order, she moved corporate
                                            headquarters and the primary design team to the settlement of New Austin
                                             in 2913. Since that time, manufacturing has become nearly completely
                                              outsourced, with only an engine testing facility remaining on Earth’s
                                               moon. Government scrutiny of the company since the move has also
                                                flourished, with tax issues quadrupling following the decision to leave
                                                 Earth. New Austin has since become an “ORIGIN town,” with the company
                                                  holding fast as the key employer (Omega Foods, the corporate entity
                                                   responsible for the Crab-O chain, is a distant second). The system
                                                    has become a mecca for ORIGIN enthusiasts, with wealthy buyers
                                                     traveling across the galaxy to purchase their ships straight from
                                                      the factory floor. A stunning company showcase in the center of
                                                       the city highlights M50s, 300s and 890 JUMPs in a series of
                                                        life-sized action dioramas costing millions to set up and
                                                         display, and ORIGIN has sponsored naming rights for local
                                                          stadiums, high schools and streets. Tourists leaving New
                                                           Austin without a 300 Series shotglass or keychain is nearly
                                                            unheard of!';
    }
    protected function makeProduct()
    {
        $ship_300i = new stdClass();
        $ship_315p = new stdClass();
        $ship_325a = new stdClass();
        $ship_M50 = new stdClass();
        $ship_890J = new stdClass();

        $ship_300i->name = '300i';
        $ship_300i->type = 'common';
        $ship_300i->image = '/views/pics/300i_beauty_visual.jpg';
        $ship_300i->description = 'The 300i touring model is the premiere spacecraft hull on the market today. A true
                                    jack-of-all-trades, the 300i is capable of making any role its own and doing so with the class and sophistication
                                     expected of an ORIGIN design. All models feature Gorgon Defender shields and A&R Omnisky VI cannon standard.';
        $ship_315p->name = '315p';
        $ship_315p->type = 'exploration';
        $ship_315p->image = '/views/pics/315p_flight_visual.jpg';
        $ship_315p->description = 'Exploration is man’s highest calling. Prepare to chart distant horizons with man’s most sophisticated piece of technology,
                                    the ORIGIN 315p. Featuring a more robust power plant and a custom scanning package, exclusively designed by Chimera
                                     Communications, the 315p is designed for the pilot who wants to go further, to see things that few have seen.';
        $ship_325a->name = '325a';
        $ship_325a->type = 'interdiction';
        $ship_325a->image = '/views/pics/325a_front-Right_visual.jpg';
        $ship_325a->description = 'It’s a dangerous universe out there. Be the arbiter of your fate with the combat-enhanced ORIGIN 325a. Just because it’s a rough
                                    galaxy doesn’t mean you need to sacrifice your comfort: the 325a can come out on top in any dogfight. The 325a features an
                                     advanced weapon payload as well as a custom targeting system designed especially for the 325a by WillsOp.';
        $ship_M50->name = 'M50';
        $ship_M50->type = 'racing, interceptor';
        $ship_M50->image = '/views/pics/M50_comp52.jpg';
        $ship_M50->description = 'If you want to get from point A to point B as quickly as possible and with as much style as
                                   possible then ORIGIN\'s M50 is for you. Featuring supercharged engines that counter a tiny weapons loadout, the M50 is
                                    a ship for going FAST.';
        $ship_890J->name = '890 Jump';
        $ship_890J->type = 'Luxury touring';
        $ship_890J->image = '/views/pics/890_Beautyshot-World_v01_NF_140925.jpg';
        $ship_890J->description = 'With an elegant, sleek exterior that belies its spacious interior, the 890 Jump is a true
                                    engineering marvel; crafted to impress from every angle by combining a unique, innovative design with the finest
                                     materials and the most advanced technology. The result is a vessel that is in a class all of its own, a masterpiece
                                      worthy of the name ORIGIN.';


        $this->products->attach($ship_300i);
        $this->products->attach($ship_315p);
        $this->products->attach($ship_325a);
        $this->products->attach($ship_M50);
        $this->products->attach($ship_890J);

    }
}