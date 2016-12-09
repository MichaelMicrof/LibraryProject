/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function activeSubmit(){
        var pass = document.getElementById('pass');
        var Rpass = document.getElementById('Rpass');
        var subm = document.getElementById('submitButton');
        if((pass.value.length >0)&(Rpass.value.length >0)&(pass.value === Rpass.value)){  
            subm.removeAttribute('disabled');
        }else{
            subm.disabled = true;
        }
    }
 



