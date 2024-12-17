USE Bedflix;

INSERT INTO roles (libelle_role) VALUES
('Admin'),
('User'),
('Visitor');

INSERT INTO FILMS (titre_film, description_film, affiche_film, lien_film, duree_film) VALUES
('The Shawshank Redemption', 
 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
 'https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmRhMC00ZDJlLThmYzUtNWYxNzRmNzY2NzBmXkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_FMjpg_UX1000_.jpg', 
 'https://www.imdb.com/title/tt0111161/', 
 142.00),

('The Dark Knight', 
 'When the menace known as The Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
 'https://m.media-amazon.com/images/M/MV5BNzA5ZDk2MDQtNWM4OC00ZjQzLTliMzYtYjQ5ZWI5MWIxOTkzXkEyXkFqcGdeQXVyNDg2MjUxNjM@._V1_FMjpg_UX1000_.jpg', 
 'https://www.imdb.com/title/tt0468569/', 
 152.00),

('Inception', 
 'A thief who steals corporate secrets through dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
 'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzQtYzYxMS00ZTc4LWJlNmItYTQ3ZDJiZWRjYjM0XkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_FMjpg_UX1000_.jpg', 
 'https://www.imdb.com/title/tt1375666/', 
 148.00),

('Pulp Fiction', 
 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3YTctNDVlOS00ZjNlLTgyZGQtYTJhNWE2ZmRlZDY4XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg', 
 'https://www.imdb.com/title/tt0110912/', 
 154.00),

('Fight Club', 
 'An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into much more.',
 'https://m.media-amazon.com/images/M/MV5BMjIxMjgxNzM5MF5BMl5BanBnXkFtZTgwMDg4MzkwMzE@._V1_FMjpg_UX1000_.jpg', 
 'https://www.imdb.com/title/tt0137523/', 
 139.00),
 
('Forrest Gump', 
 'The presidencies of Kennedy and Johnson, the Vietnam War, and other historical events unfold from the perspective of an Alabama man with an IQ of 75.',
 'https://m.media-amazon.com/images/M/MV5BMTk3OTkxMDM0NF5BMl5BanBnXkFtZTcwNTYxNDYyMQ@@._V1_FMjpg_UX1000_.jpg', 
 'https://www.imdb.com/title/tt0109830/', 
 142.00),

('The Matrix', 
 'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers a shocking truth—the life he knows is an elaborate deception.',
 'https://m.media-amazon.com/images/M/MV5BNzQzOTk3MzAtNDY2OC00OTc5LWFhNjYtM2U3NjZkYjEyZWY0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg', 
 'https://www.imdb.com/title/tt0133093/', 
 136.00),

('The Godfather', 
 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmYtYTAwNi00ZjQxLTlkNTEtYzYxNzM4ODZjNTM1XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg', 
 'https://www.imdb.com/title/tt0068646/', 
 175.00),

('The Silence of the Lambs', 
 'A young FBI cadet must receive the help of an incarcerated and manipulative cannibal killer to catch another serial killer, a madman who skins his victims.',
 'https://m.media-amazon.com/images/M/MV5BMmEzMTc2OTAtNDFlOS00NzQxLTg2NjMtZjU4OTY5NjY2Njk2XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_FMjpg_UX1000_.jpg', 
 'https://www.imdb.com/title/tt0102926/', 
 118.00),

('Gladiator', 
 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.',
 'https://m.media-amazon.com/images/M/MV5BOWJlNjQwMGItNmI3Ny00NTdjLTg5MjgtNjYwN2EzMTMzNTVhXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg', 
 'https://www.imdb.com/title/tt0172495/', 
 155.00);

