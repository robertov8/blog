@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <tabela-lista v-bind:titulos="['ID', 'Título', 'Descrição', 'Autor', 'Data']"></tabela-lista>
        </painel>
    </pagina>
@endsection
