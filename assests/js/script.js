let ativarNoturno = true;


function modoNoturno(){
    ativarNoturno = !ativarNoturno

    if(!ativarNoturno){
        document.documentElement.style.setProperty('--body', '#2f4380'); /* Modo escuro*/
        document.documentElement.style.setProperty('--modo', '#006400');
        document.documentElement.style.setProperty('--borda', '#3f7b90');
        document.documentElement.style.setProperty('--header', '#000025');
        document.documentElement.style.setProperty('--button1', '#004a7c');
        document.documentElement.style.setProperty('--button2', '#000080');
        document.documentElement.style.setProperty('--button3', '#191970');
        document.documentElement.style.setProperty('--text', '#ffffff');
          document.querySelector(".noturno").innerHTML ="Modo Claro";
    }else{
        document.documentElement.style.setProperty('--body', '#81ff94'); /* Modo Claro*/
        document.documentElement.style.setProperty('--modo', '#000025');
        document.documentElement.style.setProperty('--borda', '#4bbf5c');
        document.documentElement.style.setProperty('--header', '#00d21f');
        document.documentElement.style.setProperty('--button1', '#228b22');
        document.documentElement.style.setProperty('--button2', '#32cd32');
        document.documentElement.style.setProperty('--button3', '#00ff00');
        document.documentElement.style.setProperty('--text', '#003007');
          document.querySelector(".noturno").innerHTML ="Modo Escuro";
    }
}
