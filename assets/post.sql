CREATE TABLE posts(
	idUsers int(11) NOT null,
    usernameUsers varchar(255) NOT null,
    idPosts int (11) NOT null AUTO_INCREMENT
    contentPosts varchar(400),
    mediaPosts varchar(255),
    likenumPosts int(11),
    retweetnumPosts int(11),
    commentnumPosts int(11)
);