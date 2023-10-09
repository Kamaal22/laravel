<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "title" => "Atomic Habits",
                "description" => " This is a book about how to build good habits and break bad ones by James Clear",
                "type" => "Book"
            ],
            [
                "id" => 2,
                "title" => "The Psychology of Money",
                // write 5 paragraph description about the psychology of money
                "description" => "This is a book about how to think about money and how to make better financial decisions by Morgan Housel.
                The Psychology of Money explores the surprising ways in which our emotions guide our financial habits. It also highlights the importance of thinking about money as a tool for living a rich life, rather than a goal in itself.
                The book is divided into 20 short chapters, each of which explores a different aspect of financial psychology. The chapters are grouped into five sections, each of which explores a different aspect of financial psychology. The first section, \"The Psychology of Money,\" explores the ways in which our emotions guide our financial habits. The second section, \"The Psychology of Investing,\" explores the ways in which our emotions guide our investment decisions. The third section, \"The Psychology of Spending,\" explores the ways in which our emotions guide our spending decisions. The fourth section, \"The Psychology of Saving,\" explores the ways in which our emotions guide our saving decisions. The fifth section, \"The Psychology of Giving,\" explores the ways in which our emotions guide our giving decisions.
                The book is written in a conversational style, and is intended to be accessible to a general audience. It is also intended to be a practical guide to financial psychology, and includes a number of exercises and worksheets to help readers apply the concepts in the book to their own lives.
                The book is divided into five sections, each of which explores a different aspect of financial psychology. The first section, \"The Psychology of Money,\" explores the ways in which our emotions guide our financial habits. The second section, \"The Psychology of Investing,\" explores the ways in which our emotions guide our investment decisions. The third section, \"The Psychology of Spending,\" explores the ways in which our emotions guide our spending decisions. The fourth section, \"The Psychology of Saving,\" explores the ways in which our emotions guide our saving decisions. The fifth section, \"The Psychology of Giving,\" explores the ways in which our emotions guide our giving decisions.
                ",
                "type" => "Movie"
            ],
            [
                "id" => 3,
                "title" => "The Great Gatsby",
                "description" => "The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, the novel depicts narrator Nick Carraway's interactions with mysterious millionaire Jay Gatsby and Gatsby's obsession to reunite with his former lover, Daisy Buchanan.
                The novel was inspired by a youthful romance Fitzgerald had with a socialite, and by parties he attended on Long Island's North Shore in 1922. Following a move to the French Riviera, he completed a rough draft in 1924. Fitzgerald's editor, Maxwell Perkins, felt the book was vague and persuaded the author to revise over the next winter. Fitzgerald was repeatedly ambivalent about the book's title and he considered a variety of alternatives, including titles that referenced the Roman character Trimalchio; the title he was last documented to have desired was Under the Red, White, and Blue. First published by Scribner's in April 1925, The Great Gatsby received mixed reviews and sold poorly; in its first year, the book sold only 20,000 copies. Fitzgerald died in 1940, believing himself to be a failure and his work forgotten. However, the novel experienced a revival during World War II, and became a part of American high school curricula and numerous stage and film adaptations in the following decades. Today, The Great Gatsby is widely considered to be a literary classic and a contender for the title of the Great American Novel.
                The Modern Library named it the second-best English-language novel of the 20th century. It has sold over 25 million copies worldwide as of 2013, and annually sells an additional 500,000 copies, with total sales reaching over 30 million copies since publication. It is widely regarded as a \"Great American Novel\" and a literary classic, capturing the essence of an era. The book has been adapted into various stage and film productions, including a 1926 silent film starring Warner Baxter, a 1949 film starring Alan Ladd, a 1974 film starring Robert Redford, and a 2013 film starring Leonardo DiCaprio, Carey Mulligan, Tobey Maguire, and Joel Edgerton.
                ",
                "type" => "book"
            ],
            [
                "id" => 4,
                "title" => "Friends",
                // write 5 paragraph description about friends
                "description" => "This is a tv show about 6 friends and was created by David Crane and Marta Kauffman 
               The show is set in Manhattan, New York City. The series revolves around a group of friends in their mid-20s to early-30s who share 
               friendships, romantic relationships, and comedic situations. It is widely regarded as one of the greatest television shows of all time.
               The series was produced by Bright/Kauffman/Crane Productions, in association with Warner Bros. Television. The original executive producers
               were Kevin S. Bright, Kauffman, and Crane. Kauffman and Crane began developing Friends under the title Insomnia Cafe between November and December 1993.",
                "type" => "Tv Show"
            ],
            [
                "id" => 5,
                "title" => "Software Engineer",
                "description" => "This is a job description for a software engineer position",
                "type" => "Job"
            ]
        ];
    }


    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
