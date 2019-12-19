$(document).ready(function () {
   $("#user_btn").click(function () {
       var dt = moment($("#campo_data").val());
       $.get( "/BuscaAjax", { dt: dt.format('YYYY/MM/DD') } )
           .done(function( data ) {
               json = JSON.parse(data);
               var pacientes = '';
               for(i=0;i<json.length;i++){
                   consulta = json[i];
                   pacientes += `
                    <tr>
                        <td class="id">${consulta.medico}</td>
                        <td>${consulta.nome}</td>
                        <td class="dt">${consulta.data_consulta}</td>
                        <td class="turno">${consulta.turno}</td>
                        <td>${consulta.quantidade}</td>
                        <td>
                            <span class="fas fa-list-ul pacientes"></span>
                        </td>
                    </tr>
                    `;
               }
               resultado.innerHTML = pacientes;

               $(".pacientes").click(function () {
                  console.log($(this).parents("tr"));
                  tr = $(this).parents("tr");
                  id = tr.children(".id").text();
                  turno = tr.children(".turno").text();
                  dt_e = tr.children(".dt").text();
                  console.log(id);
                   console.log(turno);
                   console.log(dt_e);
                   dia = moment(dt_e);
                           $.get( "/EnvioAjax", { id: id, turno: turno, dt: dia.format('YYYY/MM/DD')})
                               .done(function( datas ) {
                                   json2 = JSON.parse(datas);
                                   console.log(json2);
                                   var myList='';
                                   for(i=0;i<json2.length;i++){
                                       consulta2 = json2[i];
                                       console.log(consulta2)
                                       myList += `
                                            <tr>
                                                <td>${consulta2.id}</td>
                                                <td>${consulta2.paciente.id}</td>
                                                <td>${consulta2.paciente.nome}</td>
                                                 <td>${consulta2.data_consulta}</td>
                                                 <td>${consulta2.status}</td>
                                                 <td><a href='/editar-consulta-form?id=${consulta2.id}'>Registrar</a></td>
                                                 <td><a href='/desmarcar-consulta-form?id=${consulta2.id}'>Desmarcar</a></td>
                                            `;
                                                           }
                                   pacientesListados.innerHTML = myList;
                                                       });
               });

           });
   });
});
