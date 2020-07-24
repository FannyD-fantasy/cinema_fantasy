<?php

function getprices () {
    $prices = [
        'plein'   => 10.50,
        'reduit'  => 8.50,
        'enfant'  => 6.00,
        'carte5'  => 50,
        'carte10' => 95
    ];

    return $prices;
}


$programmingMovies = [
    'Lundi 6 Juillet' => [
        '10h' => 'Avatar',
        '14h' => 'Wonder Woman',
        '20h' => 'Sixième sens'
    ],
    'Mardi 7 Juillet' => [
        '10h' => 'Labyrinthe',
        '14h' => 'La ligne verte',
        '20h' => 'The mask'
    ],
    'Mercredi 8 Juillet' => [
        '10h' => 'Incassable',
        '14h' => 'BeetleJuice',
        '20h' => 'Pirates des caraïbes 1'
    ],
    'Jeudi 9 Juillet' => [
        '10h' => 'King Kong',
        '14h' => 'Sixème sens',
        '20h' => 'Avatar'
    ],
    'Vendredi 10 Juillet' => [
        '10h' => 'Wonder Woman',
        '14h' => 'Labyrinthe',
        '20h' => 'La ligne verte'
    ],
    'Samedi 11 Juillet' => [
        '10h' => 'Pirates des caraïbes 1',
        '14h' => 'Incassable',
        '20h' => 'BeetleJuice'
    ],
    'Dimanche 12 Juillet' => [
        '10h' => 'the mask',
        '14h' => 'Avatar',
        '20h' => 'King Kong'
    ],
];

$movies = [
    [
        'title'         => 'Avatar',
        'annéeDeSortie' => '2009',
        'durée'         => '2h42',
        'type'          => 'Science fiction, Aventure',
        'realisateur'   => 'James Cameron',
        'acteur'        => 'Sam Worthington, Zoe Saldana, Sigourney Weaver',
        'synopsis'      => 'Malgré sa paralysie, Jake Sully, un ancien marine immobilisé dans un fauteuil roulant, est resté un combattant au plus profond de son être. Il est recruté pour se rendre à des années-lumière de la Terre, sur Pandora, où de puissants groupes industriels exploitent un minerai rarissime destiné à résoudre la crise énergétique sur Terre. Parce que l\'atmosphère de Pandora est toxique pour les humains, ceux-ci ont créé le Programme Avatar, qui permet à des " pilotes " humains de lier leur esprit à un avatar, un corps biologique commandé à distance, capable de survivre dans cette atmosphère létale. Ces avatars sont des hybrides créés génétiquement en croisant l\'ADN humain avec celui des Na\'vi, les autochtones de Pandora.
        Sous sa forme d\'avatar, Jake peut de nouveau marcher. On lui confie une mission d\'infiltration auprès des Na\'vi, devenus un obstacle trop conséquent à l\'exploitation du précieux minerai. Mais tout va changer lorsque Neytiri, une très belle Na\'vi, sauve la vie de Jake...',
        'image'         => '../public/assets/images/avatar.jpg',
        'age'           => '12+',
        'avis'          => '4.4'
    ],
    [
        'title'         => 'WONDER WOMAN',
        'annéeDeSortie' => '2017',
        'durée'         => '2h21',
        'type'          => 'Action, Aventure',
        'realisateur'   => 'Patty Jenkins',
        'acteur'        => 'Gal Gadot, Chris Pine, Connie Nielsen',
        'synopsis'      => 'C\'était avant qu\'elle ne devienne Wonder Woman, à l\'époque où elle était encore Diana, princesse des Amazones et combattante invincible. Un jour, un pilote américain s\'écrase sur l\'île paradisiaque où elle vit, à l\'abri des fracas du monde. Lorsqu\'il lui raconte qu\'une guerre terrible fait rage à l\'autre bout de la planète, Diana quitte son havre de paix, convaincue qu\'elle doit enrayer la menace. En s\'alliant aux hommes dans un combat destiné à mettre fin à la guerre, Diana découvrira toute l\'étendue de ses pouvoirs… et son véritable destin.',
        'image'         => '../public/assets/images/wonder_woman.jpg',
        'age'           => '12+',
        'avis'          => '4.2'
    ],
    [
        'title'         => 'SISIEME SENS',
        'annéeDeSortie' => '2000',
        'durée'         => '1h47',
        'type'          => 'SF, fantastique',
        'realisateur'   => 'M. Night Shyamalan, M. Night Shyamalan',
        'acteur'        => 'Bruce Willis , Glenn Fitzgerald, Haley Joel Osment , Toni Collette , Olivia Williams, Trevor Morgan',
        'synopsis'      => 'Cole, huit ans, est hanté par un terrible secret : il voit les morts. Ce terrible don l\'amène à se replier sur lui-même. Le docteur Malcolm Crowe, pédopsychiatre, se plonge totalement dans son dossier, d\'autant plus qu\'il connaît une grave crise conjugale avec sa femme depuis qu\'un de ses anciens patients a tenté de l\'abattre...',
        'image'         => '../public/assets/images/sixième_sens.jpg',
        'age'           => '12+',
        'avis'          => '4.6'
    ],
    [
        'title'         => 'LE LABYRINTHE DE PAN',
        'annéeDeSortie' => '2006',
        'durée'         => '1h52',
        'type'          => 'Fantastique, Epouvante-horreur',
        'realisateur'   => 'Guillermo del Toro',
        'acteur'        => 'Ivana Baquero, Sergi López, Doug Jones',
        'synopsis'      => 'Espagne, 1944. Fin de la guerre.
        Carmen, récemment remariée, s\'installe avec sa fille Ofélia chez son nouvel époux, le très autoritaire Vidal, capitaine de l\'armée franquiste.
        Alors que la jeune fille se fait difficilement à sa nouvelle vie, elle découvre près de la grande maison familiale un mystérieux labyrinthe. Pan, le gardien des lieux, une étrange créature magique et démoniaque, va lui révéler qu\'elle n\'est autre que la princesse disparue d\'un royaume enchanté.
        Afin de découvrir la vérité, Ofélia devra accomplir trois dangereuses épreuves, que rien ne l\'a préparé à affronter...',
        'image'         => '../public/assets/images/le_labyrinthe_de_pan.jpg',
        'age'           => '12+',
        'avis'          => '4.7'
    ],
    [
        'title'         => 'LA LIGNE VERTE',
        'annéeDeSortie' => '2000',
        'durée'         => '3h09',
        'type'          => 'Fantastique, Policier',
        'realisateur'   => 'Frank Darabont',
        'acteur'        => 'Tom Hanks, Michael Clarke Duncan, David Morse',
        'synopsis'      => 'Paul Edgecomb, pensionnaire centenaire d\'une maison de retraite, est hanté par ses souvenirs. Gardien-chef du pénitencier de Cold Mountain en 1935, il était chargé de veiller au bon déroulement des exécutions capitales en s’efforçant d\'adoucir les derniers moments des condamnés. Parmi eux se trouvait un colosse du nom de John Coffey, accusé du viol et du meurtre de deux fillettes. Intrigué par cet homme candide et timide aux dons magiques, Edgecomb va tisser avec lui des liens très forts.',
        'image'         => '../public/assets/images/la_ligne_verte.jpg',
        'age'           => '12+',
        'avis'          => '4.9'
    ],
    [
        'title'         => 'THE MASK',
        'annéeDeSortie' => '1994',
        'durée'         => '1h40',
        'type'          => 'Fantastique, Comédie',
        'realisateur'   => 'Chuck Russell',
        'acteur'        => 'Jim Carrey, Cameron Diaz, Peter Greene',
        'synopsis'      => 'Stanley Ipkiss, modeste employé de banque, passionné par l\'univers de Tex Avery, trouve un masque ancien aux pouvoirs surnaturels. Il est néanmoins partagé entre devenir cette créature verte sûre d\'elle ou rester le timide Stanley Ipkiss, incapable d\'aborder la magnifique chanteuse de cabaret Tina Carlyle.',
        'image'         => '../public/assets/images/the_mask.jpg',
        'age'           => '8+',
        'avis'          => '4.5'
    ],
    [
        'title'         => 'INCASSABLE',
        'annéeDeSortie' => '2000',
        'durée'         => '1h46',
        'type'          => 'Thriller, Fantastique',
        'realisateur'   => 'M. Night Shyamalan',
        'acteur'        => 'Bruce Willis, Samuel L. Jackson, Robin Wright',
        'synopsis'      => 'Elijah Price souffre depuis sa naissance d\'une forme d\'ostéogénèse. S\'il reçoit le moindre choc, ses os cassent comme des brindilles. Depuis son enfance, il n\'a de cesse d\'admirer les superhéros, des personnages qui sont tout l\'opposé de lui-même. Propriétaire d\'un magasin spécialisé dans les bandes-dessinées, il épluche pendant son temps libre les vieux articles de journaux à la recherche des plus grands désastres qui ont frappé les Etats-Unis. Il se met alors en quête d\'éventuels survivants, mais y parvient rarement.
        Au même moment, un terrible accident ferroviaire fait 131 morts. Un seul des passagers en sort indemne...',
        'image'         => '../public/assets/images/incassable.jpg',
        'age'           => '12+',
        'avis'          => '4.3'
    ],
    [
        'title'         => 'BEETLEJUICE',
        'annéeDeSortie' => '1988',
        'durée'         => '1h32',
        'type'          => 'Fantastique, Comédie',
        'realisateur'   => 'Tim Burton',
        'acteur'        => 'Michael Keaton, Winona Ryder, Alec Baldwin',
        'synopsis'      => 'Pour avoir voulu sauver un chien, Adam et Barbara Maitland passent tout de go dans l\'autre monde. Peu après, occupants invisibles de leur antique demeure ils la voient envahie par une riche et bruyante famille new-yorkaise. Rien à redire jusqu\'au jour où cette honorable famille entreprend de donner un cachet plus urbain à la vieille demeure. Adam et Barbara, scandalisés, décident de déloger les intrus. Mais leurs classiques fantômes et autres sortilèges ne font aucun effet. C\'est alors qu\'ils font appel à un "bio-exorciste" freelance connu sous le sobriquet de Beetlejuice.',
        'image'         => '../public/assets/images/beetlejuice.jpg',
        'age'           => '8+',
        'avis'          => '4.2'
    ],
    [
        'title'         => 'PIRATES DES CARAIBES : LA MALEDICTION DU BLACK PEARL',
        'annéeDeSortie' => '2003',
        'durée'         => '2h23',
        'type'          => 'Action, Fantastique',
        'realisateur'   => 'Gore Verbinski',
        'acteur'        => 'Johnny Depp, Geoffrey Rush, Keira Knightley',
        'synopsis'      => 'Dans la mer des Caraïbes, au XVIIe siècle, Jack Sparrow, flibustier gentleman, voit sa vie idylle basculer le jour où son ennemi, le perfide capitaine Barbossa, lui vole son bateau, le Black Pearl, puis attaque la ville de Port Royal, enlevant au passage la très belle fille du gouverneur, Elizabeth Swann. L\'ami d\'enfance de celle-ci, Will Turner, se joint à Jack pour se lancer aux trousses du capitaine.
        Mais Will ignore qu\'une malédiction frappe Barbossa et ses pirates. Lorsque la lune brille, ils se transforment en morts-vivants. Leur terrible sort ne prendra fin que le jour où le fabuleux trésor qu\'ils ont amassé sera restitué...',
        'image'         => '../public/assets/images/pirates_des_caraibes_1.jpg',
        'age'           => '12+',
        'avis'          => '4.6'
    ],
    [
        'title'         => 'KING KONG',
        'annéeDeSortie' => '1999',
        'durée'         => '3h00',
        'type'          => 'Fantastique, Aventure',
        'realisateur'   => 'Peter Jackson',
        'acteur'        => 'Naomi Watts, Jack Black, Adrien Brody',
        'synopsis'      => 'New York, 1933. Ann Darrow est une artiste de music-hall dont la carrière a été brisée net par la Dépression. Se retrouvant sans emploi ni ressources, la jeune femme rencontre l\'audacieux explorateur-réalisateur Carl Denham et se laisse entraîner par lui dans la plus périlleuse des aventures...
        Ce dernier a dérobé à ses producteurs le négatif de son film inachevé. Il n\'a que quelques heures pour trouver une nouvelle star et l\'embarquer pour Singapour avec son scénariste, Jack Driscoll, et une équipe réduite. Objectif avoué : achever sous ces cieux lointains son génial film d\'action.
        Mais Denham nourrit en secret une autre ambition, bien plus folle : être le premier homme à explorer la mystérieuse Skull Island et à en ramener des images. Sur cette île de légende, Denham sait que "quelque chose" l\'attend, qui changera à jamais le cours de sa vie...',
        'image'         => '../public/assets/images/king_kong.jpg',
        'age'           => '12+',
        'avis'          => '4.7'
    ],
];

$nextMovies = [
    ' E.T. l\'extraterrestre',
    ' Superman',
    ' Alice aux pays des merveilles',
    ' L\'étrange histoire de Benjamin Button',
    ' Jumanji',
    ' Un jour sans fin',
    ' L\'effet papillon',
    ' Twillight, chapitre 1 : Fascination',
    ' Entretien avec un vampire',
    ' Le monde de Narnia, chapitre 1',
];


