<!--
Desenvolvido por: Abraão Azevedo
Versão: 1.1.2
Data: 07 de junho de 2020
Contato: abraaonmazevedo@gmail.com
Projeto: Modelo básico de editor de texto para projetos de sites e blogs
===============================================================================
CKEditor
===============================================================================
CKEditor deve ser considerado o editor padrão para projetos.
Aqui está uma formatação simples para um editor de texto.
* Deve-se incluir "class" e/ou "divs" e vincular à folha de estilos (css).
** Deve-se incluir o "method" e "action" no "form".
*** Para ter êxito, deve-se copiar a pasta (extraída) do CKeditor no servidor.
===============================================================================  
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>CKEditor</title>
</head>
<body>
    <!-- Incluir a construção da "class" - sugestão para nome: container-editor -->
    <div class="container-editor">
        <form action="">
            <textarea name="content">Digite seu texto aqui!</textarea>
            <input type="submit" value="Enviar texto" class="">
        </form>
    </div>
    <!-- Este script faz o link com o arquivo "ckeditor.js" -->
    <script src="ckeditor/ckeditor.js"></script>

    <!-- Este script faz a relação do js com o objeto do "name" da "textarea" -->
    <script>
        CKEDITOR.replace('content');
    </script>

</body>
</html>