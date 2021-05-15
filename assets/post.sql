CREATE TABLE posts(
	idUsers int(11) NOT null,
    usernameUsers varchar(255) NOT null,
    idPosts int (11) NOT null AUTO_INCREMENT,
    textPosts varchar(400),
    mediaPosts varchar(255),
    likenumPosts int(11),
    retweetnumPosts int(11),
    commentnumPosts int(11)
);

CREATE TABLE comments(
    idUsers int(11) NOT null,
    usernameUsers varchar(255) NOT null,
    idPosts int(11) NOT null,
    idComments int(11) NOT null PRIMARY KEY,
    textComments varchar(400),
    mediaComments varchar(255),
    likenumComments int(11),
    retweetnumComments int(11)
)