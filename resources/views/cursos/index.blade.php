<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de cursos</title>
  </head>
  <body>
      <h1>Cadastro de Cursos</h1>

      <table>
            <tr>
              <td>id</td>
              <td>nome</td>
              <td>turma</td>
            </tr>

           @foreach ($cursos as $curso)
               {{$curso->id}}
               {{$curso->nome}}
               {{$curso->turma}}
           @endforeach


      </table>
  </body>
</html>
