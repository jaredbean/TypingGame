(function() {
    $(function(){
        var wordPool = ['Program', 'Console', 'JavaScript', 'Red', 'Blue', 'Green', 'Mouse', 'Pluto', 'Jupiter', 'Mars', 'Arrow'];

        function init(){
            // Initialize words
        }

        function word(){
            
        }

        function getRandomWord(){
        
            var randomIdx = Math.floor(Math.random() * wordPool.length);
            var randomWord = wordPool[randomIdx];
            
            wordPool.splice(randomIdx, 1);
            return randomWord;
        }

        /**
         * Wraps the correct part of a word with HTML to highlight it.
         * @param {string} word - The target word.
         * @param {string} userWord - The user input.
         */
        function highlightWord(word, userWord){
            return '<strong>' + word.slice(0, userWord.length) + '</strong>' + word.slice(userWord.length);
        }
        
        var $wordList = $('.word');
        $wordList.each(function (idx, value){
            var randomWord = getRandomWord();
            var $el = $(this);
            
            $el.data('word',randomWord);

            // html is a function 
            $el.html(randomWord);
        });


        $('#userWord').keyup(function($evt){
            var userInput = $(this).val();
            
            // get array of words that start with the user input.
            var wordsToCheck = $.grep($wordList, function (word){
                return $(word).data('word').toLowerCase().startsWith(userInput.toLowerCase());
            });

            // Reset word list highlighting.
            $wordList.each(function(idx,value){
                $(value).html($(value).data('word'));
            });

            if (wordsToCheck.length === 0){
                //Reset user input because there are no words that match user input. Reset words
                console.log('Reset user input.');

                $('#userWord').val('');

            }
            else {
                // Compare the word the word to the target words. Keep a count of the ones that have a match in them.
                $(wordsToCheck).each(function (idx, value){
                    var $currentWord = $(this);
                    $currentWord.html(highlightWord($currentWord.data('word'), userInput));
                })
            }
        })
    });
})();   