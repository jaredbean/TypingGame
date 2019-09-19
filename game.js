(function() {
    $(function(){
        var wordPool = ['Program', 'Console', 'JavaScript', 'Red', 'Blue', 'Green', 'Mouse', 'Pluto', 'Jupiter', 'Mars', 'Arrow'];
        
        var $wordList = $('.wordGroup');
        var wordDtos = [];// Data transfer objects.

        init();

        function init(){
            $wordList.each(function (idx, element){
                wordDtos[idx] = word(idx);
                var $el = $(element);
                var $timer = $el.find('.timer');

                $timer.data('life', wordDtos[idx].remainingTime)
                
                $el.data('word', wordDtos[idx].word);
                
                $timer.html(wordDtos[idx].remainingTime)
                // html is a function 
                $el.append(wordDtos[idx].word);



            });
        }

        function word(elementIdx){
            var newWordObj = {
                word: getRandomWord(),
                remainingTime: 5 // in seconds
            };

            newWordObj.intervalId = setInterval(function (){
                if (newWordObj.remainingTime > 0){
                    newWordObj.remainingTime--;
                    $($wordList[elementIdx]).find('.timer').html(newWordObj.remainingTime);
                }
                else {
                    clearInterval(newWordObj.intervalId);
                    alert(newWordObj.word + ' died!');
                    wordDtos.forEach(function (dto){
                        if (dto.intervalId != newWordObj.intervalId){
                            clearInterval(dto.intervalId);
                        }
                    })

                }
            }, 1000);

            return newWordObj;
        }

        /**
         * Gets a random word that does not already exist in wordDtos.
         */
        function getRandomWord(){
            var randomIdx = Math.floor(Math.random() * wordPool.length);
            var randomWord = wordPool[randomIdx];
            
            // If there are any words in wordDtos that are the same as randomWord, return a recursive call to getRandomWord.
            if (wordDtos.some(function (dto){
                return dto.word === randomWord;
            })){
                return getRandomWord();
            }
            else {
                return randomWord;
            }
        }

        /**
         * Wraps the correct part of a word with HTML to highlight it.
         * @param {string} word - The target word.
         * @param {string} userWord - The user input.
         */
        function highlightWord(word, userWord){
            return '<strong>' + word.slice(0, userWord.length) + '</strong>' + word.slice(userWord.length);
        }


        $('#userWord').keyup(function($evt){
            var userInput = $(this).val();
            
            // get array of words that start with the user input.
            var wordsToCheck = wordDtos.filter(function (dto){
                return dto.word.toLowerCase().startsWith(userInput.toLowerCase());
            });
            // var wordsToCheck = $.grep($wordList, function (word){
            //     return $(word).data('word').toLowerCase().startsWith(userInput.toLowerCase());
            // });

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