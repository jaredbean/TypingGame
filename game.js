(function() {
    $(document).ready(function(){
        var wordPool = ['Program', 'Console', 'JavaScript', 'Red', 'Blue', 'Green', 'Mouse', 'Pluto', 'Jupiter', 'Mars', 'Arrow'];
        function getRandomWord(){
        
            var randomIdx = Math.floor(Math.random() * wordPool.length);
            var randomWord = wordPool[randomIdx];
            
            wordPool.splice(randomIdx, 1);
            return randomWord;
        }

        function compareWords(word, userWord){
            var correctPart = '';
            
            var idx = 0;

            word = word.toLower();
            userWord = userWord.toLower();
            // Compare user word with word letter by letter.
            while(idx < userWord.length){
                if (word[idx] === userWord[idx]){
                    correctPart += word[idx];
                }
                else {
                    break;
                }
                idx++;
            }

            // Check if the endo of the word was reached.
            if (idx === word.length){
                // The word is completed. Remove the word from the displayed words.
            }
            else {
                // Replace the first part of the word with the strong part.
                word.splice(0, idx, '<strong>' + correctPart + '</strong>');
            }

            return word;
        }
        
        var $wordList = $('.word');
        $wordList.each(function (idx, value){
            var randomWord = getRandomWord();

            // Dataset is null here...
            $(this).dataset['word'] = randomWord;
            $(this).html(randomWord);
        });


        $('#userWord').keyup(function($evt){
            var userInput = $(this).val();
            // Compare the word the word to the target words. Keep a count of the ones that have a match in them.
            $wordList.each(function (idx, value){
                $wordList[idx].html(compareWords($wordList[idx].dataset['word'], userInput));
            })

            // If none are a match, the game is over.

            // if any contain the user input, keep allowing the user to add input.
        })
    });
})();   