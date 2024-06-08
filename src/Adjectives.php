<?php

namespace Designbycode\BusinessNameGenerator;

class Adjectives implements HasGeneratorLists
{
    public function custom(array $array): array
    {
        return $array;
    }

    public function default(): array
    {
        return [
            'Innovative', 'Creative', 'Dynamic', 'Strategic', 'Global',
            'Agile', 'Efficient', 'Robust', 'Scalable', 'Intuitive',
            'Advanced', 'Leading', 'Reliable', 'Custom', 'Smart',
            'Visionary', 'Pioneering', 'Cutting-edge', 'Groundbreaking', 'Revolutionary',
            'Trailblazing', 'Futuristic', 'Ingenious', 'Resourceful', 'Versatile',
            'Proactive', 'Progressive', 'Synergistic', 'Transformative', 'Impactful',
            'Elegant', 'Sophisticated', 'Sleek', 'Streamlined', 'User-friendly',
            'High-performance', 'Next-gen', 'State-of-the-art', 'Premier', 'Premium',
            'Elite', 'Exclusive', 'Exceptional', 'Top-tier', 'Outstanding',
            'Remarkable', 'Impressive', 'Phenomenal', 'Astounding', 'Extraordinary',
            'Superior', 'Unparalleled', 'Unmatched', 'Distinctive', 'Unique',
            'Original', 'Inventive', 'Nimble', 'Flexible', 'Adaptable',
            'Energetic', 'Enthusiastic', 'Passionate', 'Driven', 'Ambitious',
            'Motivated', 'Committed', 'Dedicated', 'Focused', 'Persistent',
            'Tenacious', 'Resilient', 'Sturdy', 'Strong', 'Powerful',
            'Mighty', 'Formidable', 'Tough', 'Dependable', 'Consistent',
            'Steady', 'Trustworthy', 'Honest', 'Ethical', 'Principled',
            'Fair', 'Just', 'Responsible', 'Accountable', 'Transparent',
            'Open', 'Direct', 'Straightforward', 'Clear', 'Plain',
            'Simple', 'Uncomplicated', 'Productive', 'Proficient', 'Skilled',
            'Competent', 'Capable', 'Experienced', 'Knowledgeable', 'Expert',
            'Masterful', 'Accomplished', 'Talented', 'Gifted', 'Amazing',
            'Incredible', 'Fantastic', 'Fabulous', 'Wonderful', 'Marvelous',
            'Magnificent', 'Brilliant', 'Radiant', 'Luminous', 'Dazzling',
            'Glowing', 'Shining', 'Sparkling', 'Gleaming', 'Bright',
            'Vivid', 'Vibrant', 'Colorful',
        ];
    }

    /**
     * @return string[]
     */
    public function funny(): array
    {
        return [
            'Goofy', 'Silly', 'Whimsical', 'Zany', 'Wacky',
            'Quirky', 'Offbeat', 'Eccentric', 'Bizarre', 'Kooky',
            'Absurd', 'Farcical', 'Ridiculous', 'Amusing', 'Humorous',
            'Comical', 'Laughable', 'Hilarious', 'Mirthful', 'Jocular',
            'Jocund', 'Jolly', 'Cheerful', 'Lively', 'Giddy',
            'Witty', 'Droll', 'Clownish', 'Buffoonish', 'Waggish',
            'Capricious', 'Frivolous', 'Madcap', 'Peculiar', 'Unusual',
            'Strange', 'Weird', 'Odd', 'Crazy', 'Nonsensical',
            'Surreal', 'Baffling', 'Puzzling', 'Bewildering', 'Confounding',
            'Mind-boggling', 'Outlandish', 'Preposterous', 'Absurd', 'Fantastical',
        ];
    }

    /**
     * @return string[]
     */
    public function playful(): array
    {
        return [
            'Whimsical', 'Cheerful', 'Lively', 'Giddy', 'Jovial',
            'Merry', 'Mirthful', 'Jocular', 'Jocund', 'Jolly',
            'Joyful', 'Playful', 'Fun-loving', 'Bubbly', 'Bouncy',
            'Carefree', 'Animated', 'Energetic', 'Sprightly', 'Vivacious',
            'Perky', 'Peppy', 'Chipper', 'Upbeat', 'Buoyant',
            'Zesty', 'Spirited', 'High-spirited', 'Zingy', 'Zippy',
            'Witty', 'Amusing', 'Entertaining', 'Mischievous', 'Impish',
            'Rascally', 'Trickish', 'Sportive', 'Frisky', 'Frolicsome',
            'Jestful', 'Sporty', 'Fancy-free', 'Light-hearted', 'Uninhibited',
            'Carefree', 'Free-spirited', 'Wild', 'Reckless', 'Irrepressible',
            'Boisterous', 'Rambunctious', 'Exuberant', 'Radiant', 'Sunny',
            'Blithe', 'Blithesome', 'Debonair', 'Airy', 'Light',
            'Breezy', 'Untroubled', 'Jaunty', 'Happy-go-lucky', 'Ebullient',
            'Bouncing', 'Zappy', 'Full of beans', 'Bustling', 'Effervescent',
        ];
    }

    public function color(): array
    {
        return Colors::getList();
    }

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
