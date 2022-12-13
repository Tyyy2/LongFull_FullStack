<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            聯絡資訊查看
        </h2>
    </x-slot>

    @section('css')
        <style>
            .info-table {
                width: 80%;
                padding: 50px 0;
                margin: auto;
                height: auto;
                border-radius: 20px;
                border: 5px solid black;
                background-color: white;
            }

            .info-table>table {
                width: 100%;
                height: auto;
            }


            .info-table th {
                border: 1px solid black;
                height: 50px;
            }

            .info-table td {
                height: 100px;
                border: 1px solid black;
            }

            .info-name {
                width: 5%;
            }

            .info-phone {
                width: 10%;
            }

            .info-content {
                width: 50%;
            }

            .info-mail {
                width: 10%;
            }

            .info-trash {
                width: 15%;
            }

            .delete-btn {
                background-color: red;
                display: inline-block;
                height: 20px;
                width: 50px;
                border-radius: 10px;
                text-align: center;
            }
        </style>
    @endsection


    @section('main')
        <div class="info-table">
            <table>
                <tr>
                    <th>姓名</th>
                    <th>電話</th>
                    <th>內容</th>
                    <th>E-Mail</th>
                    <th>垃圾需求</th>
                    <th>動作</th>
                </tr>

                @foreach ($contact_info as $key => $item)
                    <tr>
                        <td align="center" valign="middle" class="info-name">{{ $item->contact_name }}</td>
                        <td align="center" valign="middle" class="info-phone">{{ $item->contact_phone }}</td>
                        <td align="center" valign="middle" class="info-content">{{ $item->contact_content }}</td>
                        <td align="center" valign="middle" class="info-mail">{{ $item->contact_mail }}</td>
                        <td align="center" valign="middle" class="info-trash">
                            @if ($item->common_trash == 'on')
                                一般垃圾&nbsp;
                            @endif
                            @if ($item->recycle_trash == 'on')
                                資源回收&nbsp;
                            @endif
                            @if ($item->uncommon_trash == 'on')
                                其他&nbsp;
                            @endif
                        </td>
                        <td align="center" valign="middle"><a href="/admin/contact_info/delete/contact_info{{ $item->id}}" class="delete-btn">刪除</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endsection

</x-app-layout>
