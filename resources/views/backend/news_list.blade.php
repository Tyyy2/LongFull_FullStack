<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            最新消息列表
        </h2>
    </x-slot>
    @section('css')
        <style>
            .news-table {
                width: 80%;
                padding: 50px 0;
                margin: auto;
                margin-top: 50px;
                height: auto;
                border-radius: 20px;
                border: 2px solid black;
                background-color: white;
            }

            .news-table>table {
                width: 100%;
                height: auto;

            }

            th {
                border: 1px solid black;
            }

            td {
                border: 1px solid black;
            }

            .news-table tr {
                width: 100%;
                height: 50px;
            }

            .news-table tr .news-id {

                width: 10%;
                height: 100%;
            }

            .news-table tr .news-content {
                width: 70%;
                height: 100%;
            }

            .news-table tr .btn-td {
                width: 100%;
                height: 100%;
            }

            .edit-btn {
                margin-right: 30px;
                background-color: orange;
            }

            .delete-btn {
                background-color: red;

            }

            .news-table tr .btn-td a {
                display: inline-block;
                height: 20px;
                width: 50px;
                border-radius: 10px;
                text-align: center;
            }

            .new-btn {
                margin-top: 50px;

            }
        </style>
    @endsection

    @section('main')
        <table class="news-table">
            <tr>
                <th>編號</th>
                <th>消息</th>
                <th>動作</th>
            </tr>
            @foreach ($news_data as $key => $item)
                <tr>
                    <td align="center" valign="middle" class="news-id">{{ $key + 1 }}</td>
                    <td align="start" valign="middle" class="news-content">{{ $item->news_title }}</td>
                    <td align="center" valign="middle" class="btn-td">
                        <a href="/admin/news_editor/news{{$item->id}}" class="edit-btn">編輯</a>
                        <a href="/admin/news/delete/news{{$item->id}}" class="delete-btn">刪除</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection

</x-app-layout>
