CREATE TABLE public.users
(
    usersID SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    display_name VARCHAR(100) NOT NULL, 
    first_name VARCHAR(80) NOT NULL,
    last_name VARCHAR(80) NOT NULL,
    date date NOT NULL
);

CREATE TABLE public.games
(
    gameID SERIAL NOT NULL PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    publisher VARCHAR(200),
    published_year int,
    date_added date,
    bgg_link VARCHAR(500),
    usersID INT NOT NULL REFERENCES public.users(usersID),
);

CREATE TABLE public.game_played
(
    game_playedID SERIAL NOT NULL PRIMARY KEY,
    game_played_date date NOT NULL,
    usersID INT NOT NULL REFERENCES public.users(usersID),
    gameID INT NOT NULL REFERENCES public.games(gameID),
    game_played_notes VARCHAR(4000)
);


