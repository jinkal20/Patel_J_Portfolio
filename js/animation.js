var i=0,letter;
  letter = "“Whitespace is like air: it is necessary for design to breathe.”";
          
    function typing() {
      if(i<letter.length){
        document.getElementById("letter").innerHTML += letter.charAt(i);
          i++;
            setTimeout(typing,150);
            }
          };
          typing();