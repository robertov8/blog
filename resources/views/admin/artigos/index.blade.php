@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">

            <migalhas v-bind:lista="{{ $listaMigalhas }}"></migalhas>

            <tabela-lista
                    v-bind:titulos="['ID', 'Título', 'Descrição', 'Autor', 'Data']"
                    v-bind:itens="[[1, 'PHP OO', 'Curso de PHP OO', 'Admin', '01-01-2000'], [2, 'Laravel', 'Laravel e Vue.js', 'Guest', '01-01-2000'], [3, 'JavaScript', 'Moz::z', 'Guest', '01-01-2000']]"
                    ordem="asc"
                    ordemcol="0"
                    criar="#criar"
                    detalhe="#detalhe"
                    editar="#editar"
                    deletar="#deletar"
                    token="1234567890"
            >
            </tabela-lista>
        </painel>
    </pagina>
@endsection
