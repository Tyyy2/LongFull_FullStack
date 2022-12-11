<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            人才招募列表
        </h2>
    </x-slot>
    @section('css')
        <style>
            .employees-table {
                width: 80%;
                padding: 50px 0;
                margin: auto;
                margin-top: 50px;
                height: auto;
                border-radius: 20px;
                border: 2px solid black;
                background-color: white;
            }

            .employees-table>table {
                width: 100%;
                height: auto;

            }

            th {
                border: 1px solid black;
            }

            td {
                border: 1px solid black;
            }

            .employees-table tr {
                width: 100%;
                height: 50px;
            }

            .employees-table tr .employees-id {

                width: 10%;
                height: 100%;
            }

            .employees-table tr .employees-content {
                width: 70%;
                height: 100%;
            }

            .employees-table tr .btn-td {
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

            .employees-table tr .btn-td a {
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
        <table class="employees-table">
            <tr>
                <th>編號</th>
                <th>消息</th>
                <th>動作</th>
            </tr>
            @foreach ($employees_data as $key => $item)
                <tr>
                    <td align="center" valign="middle" class="employees-id">{{ $key + 1 }}</td>
                    <td align="start" valign="middle" class="employees-content">{{ $item->employees_title }}</td>
                    <td align="center" valign="middle" class="btn-td">
                        <a href="/admin/employees_editor/employees{{$key+1}}" class="edit-btn">編輯</a>
                        <a href="/admin/employees/delete" class="delete-btn">刪除</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection

</x-app-layout>
