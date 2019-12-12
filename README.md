# TypingGame
CS 3750 Group Assignment 1

This project is browser based typing game. A user first creates an account or logs into an existing account. Once logged in, the game begins and multiple words are displayed on the screen with a visual and text-based timer. Each word has its own timer that resets when the word is successfully typed and a new word is displayed. If a timer expires, the game is over and a leader-board is displayed with the top 10 scores. A player's score is the amount of time the game elapsed. 

PHP is used as the backend language and communicates with a MySQL database. For authentication, the user password is hashed with salt on the client-side using javascript and SHA-256. The username, hashed password, and salt are stored in the database. Hashes are matched for authentication.

Login
![Login Screenshot](screenshots/login.png?raw=true "Login Screen")

Sign-up
![Login Screenshot](screenshots/signup.png?raw=true "Login Screen")

Gameplay
![Login Screenshot](screenshots/gameplay.png?raw=true "Login Screen")

Game end
![Login Screenshot](screenshots/gameend.png?raw=true "Login Screen")

Leaderboard
![Login Screenshot](screenshots/leaderboard.png?raw=true "Login Screen")

Database Records (stores username, salt, and hased password)
![Login Screenshot](screenshots/database.png?raw=true "Login Screen")
