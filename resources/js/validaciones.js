//<!--Funciones de caracteres validos-->

        // sustituye los dos espacios por uno
        function espacios(CajaTexto){
         var input = document.getElementById(CajaTexto);
            input.value = input.value.replace('  ', ' '); //sustituimos dos espacios seguidos por uno

        }


      function Letras(string){//solo letras y numeros
        var out = '';
        //Se añaden las letras validas
        var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíúóüÁÉÍÓÚÜ';//Caracteres validos
        for (var i=0; i<string.length; i++)
           if (filtro.indexOf(string.charAt(i)) != -1)
           out += string.charAt(i);
          return out;
      }
      function LetrasEspacio(string){//solo letras y numeros
        var out = '';
        //Se añaden las letras validas
        var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíúóüÁÉÍÓÚÜ ';//Caracteres validos
        for (var i=0; i<string.length; i++)
           if (filtro.indexOf(string.charAt(i)) != -1)
           out += string.charAt(i);
          return out;
      }
      function LetrasEspacioNumeros(string){//solo letras y numeros
        var out = '';
        //Se añaden las letras validas
        var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíúóüÁÉÍÓÚÜ1234567890- ';//Caracteres validos
        for (var i=0; i<string.length; i++)
           if (filtro.indexOf(string.charAt(i)) != -1)
           out += string.charAt(i);
          return out;
      }
      function Numeros(string){//solo letras y numeros
        var out = '';
        //Se añaden las letras validas
        var filtro = '1234567890,.';//Caracteres validos
        for (var i=0; i<string.length; i++)
           if (filtro.indexOf(string.charAt(i)) != -1)
           out += string.charAt(i);
          return out;
      }
   