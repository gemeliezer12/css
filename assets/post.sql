CREATE TABLE posts(
	idUsers int(11) NOT null,
    usernameUsers varchar(255) NOT null,
    idPosts int (11) NOT null AUTO_INCREMENT PRIMARY KEY,
    textPosts varchar(400),
    mediaPosts varchar(512),
    likenumPosts int(11),
    retweetnumPosts int(11),
    commentnumPosts int(11),
    FOREIGN KEY (idUsers) REFERENCES idUsers(idUsers)
);

CREATE TABLE comments(
    idUsers int(11) NOT null,
    usernameUsers varchar(255) NOT null,
    idPosts int(11) NOT null,
    idComments int(11) NOT null AUTO_INCREMENT PRIMARY KEY,
    textComments varchar(400),
    mediaComments varchar(510),
    likenumComments int(11),
    retweetnumComments int(11),
    FOREIGN KEY (idUsers) REFERENCES idUsers(idUsers),
    FOREIGN KEY (idPosts) REFERENCES idUsers(idPosts)
)