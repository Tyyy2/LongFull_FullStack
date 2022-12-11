<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新增人才招募
        </h2>
    </x-slot>
    @section('css')
        <style>
            .employees-create {
                border: 1px solid black;
                border-radius: 20px;
                background-color: lightgray;
                width: 80%;
                height: 800px;
                margin: auto;
                display: flex;
                flex-flow: column;
                justify-content: center;
                align-items: center;
            }

            .employees-create .title {
                width: 90%;
                height: 50px;
                display: flex;
                justify-content: space-between;
            }

            .employees-create .title>label {
                width: 5%;
                height: 100%;
                display: flex;
                justify-content: start;
                align-items: center;
                font-size: 24px;
            }

            .employees-create .title #employees_title {
                width: 90%;
                height: 100%;
            }

            .employees-create .content {
                width: 90%;
                height: 80%;
                display: flex;
                justify-content: space-between;
            }

            .employees-create .content>label {
                width: 5%;
                height: 100%;
                display: flex;
                justify-content: start;
                align-items: center;
                font-size: 24px;
            }

            .employees-create .content #employees_content {
                width: 90%;
                height: 100%;
            }

            .employees-create .img {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 20px;
            }

            input[type="submit"] {
                background-color: white;
                border-radius: 10px;
                width: 80px;
                height: 30px;
            }
        </style>
    @endsection

    @section('main')
        <form action="/admin/employees_create/update{{$employees_data->id}}" method="post" enctype="multipart/form-data" class="employees-create">
            @csrf

            <div class="title">
                <label for="employees_title">標題</label>
                <input type="text" name="employees_title" id="employees_title" placeholder="{{$employees_data->employees_title}}">
            </div>

            <div class="content">
                <label for="employees_content">內文</label>
                <input type="text" name="employees_content" id="employees_content" placeholder="{{$employees_data->employees_content}}">
            </div>

            <div class="img">
                <label for="employees_img_path">請選擇圖片:&nbsp;</label>
                <input type="file" name="employees_img_path" accept="image/*"><input type="submit" value="確定">
            </div>

        </form>
    @endsection
</x-app-layout>
