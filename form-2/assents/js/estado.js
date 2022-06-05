function buscaCidades(e){
  document.querySelector("#cidade").innerHTML = '';
  var cidade_select = document.querySelector("#cidade");

  var num_estados = json_cidades.estados.length;
  var j_index = -1;

  // aqui eu pego o index do Estado dentro do JSON
  for(var x=0;x<num_estados;x++){
     if(json_cidades.estados[x].sigla == e){
        j_index = x;
     }
  }

  if(j_index != -1){
 
     // aqui eu percorro todas as cidades e crio os OPTIONS
     json_cidades.estados[j_index].cidades.forEach(function(cidade){
        var cid_opts = document.createElement('option');
        cid_opts.setAttribute('value',cidade)
        cid_opts.innerHTML = cidade;
        cidade_select.appendChild(cid_opts);
     });
  }else{
     document.querySelector("#cidade").innerHTML = '';
  }
}