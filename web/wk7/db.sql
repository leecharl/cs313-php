CREATE TABLE public.wk7users
(
    usersID SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    PASSWORD VARCHAR(100) NOT NULL
);

CREATE TABLE public.games
(
    gameID SERIAL NOT NULL PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    publisher VARCHAR(200),
    published_year int,
    date_added date,
    bgg_link VARCHAR(500)
);

CREATE TABLE public.game_played
(
    game_playedID SERIAL NOT NULL PRIMARY KEY,
    game_played_date date NOT NULL,
    usersID INT NOT NULL REFERENCES public.users(usersID),
    gameID INT NOT NULL REFERENCES public.games(gameID),
    game_played_notes VARCHAR(4000)
);
