<?php

namespace PHP81;
enum Suit {
    case Clubs;
    case Diamonds;
    case Hearts;
    case Spades;

}

function pick_card(Suit $suit) {
    return match ($suit) {
        Suit::Clubs => "It's Clubs",
        Suit::Diamonds => "It's Diamonds",
        Suit::Hearts => "It's Hearts",
        Suit::Spades => "It's Spades",
    };
}

echo pick_card(Suit::Clubs);
