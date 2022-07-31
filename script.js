function record(){
    var recognition = new webkitSpeechRecognition;
    
    //Recognizing Arabic speech 
    recognition.lang = "ar-SA";
    
    //Display the result on the textarea html tag
    recognition.onresult = function(event){
        document.getElementById('rec_text').value = event.results[0][0].transcript;
    }

    //Starting recognition system
    recognition.start();
}