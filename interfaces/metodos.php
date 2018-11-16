<?php
                  //con la palabara reserveda interface creamos una interface
                  interface metodos
                  {
                     //M�todo para recuperar todas la tareas
                      public function readAll();

                      //M�todo para crear una tarea recibe como parametro un objeto de tipo Task
                      public function create($task);

                      //M�todo para recuperar para eliminar una tarea recibe como parametro el id de la tarea
                      public function delete($id);

                      //M�todo para traer una tarea, recibe como parametro el id de la tarea
                      public function read($id); //obteniendo el id

                      //M�todo para actualizar una tarea, este recibe como parametro un objeto Task el cual tiene los datos que se modificaron
                      public function update($task);
                  }
?>