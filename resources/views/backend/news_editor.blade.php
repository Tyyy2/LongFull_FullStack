<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            編輯最新消息
        </h2>
    </x-slot>
    @section('css')
        <style>
            .news-editor {
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

            .news-editor .title {
                width: 90%;
                height: 50px;
                display: flex;
                justify-content: space-between;
            }

            .news-editor .title>label {
                width: 5%;
                height: 100%;
                display: flex;
                justify-content: start;
                align-items: center;
                font-size: 24px;
            }

            .news-editor .title #news_title {
                width: 90%;
                height: 100%;
            }

            .news-editor .content {
                width: 90%;
                height: 80%;
                display: flex;
                justify-content: space-between;
            }

            .news-editor .content>label {
                width: 5%;
                height: 100%;
                display: flex;
                justify-content: start;
                align-items: center;
                font-size: 24px;
            }

            .news-editor .content #news_content {
                width: 90%;
                height: 100%;
            }

            .news-editor .img {
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
        <form action="/admin/news_editor/store" method="post" enctype="multipart/form-data" class="news-editor">
            @csrf

            <div class="title">
                <label for="news_title">標題</label>
                <input type="text" name="news_title" id="news_title">
            </div>

            <div class="content">
                <label for="news_content">內文</label>
                <input type="text" name="news_content" id="news_content">
            </div>

            <div class="img">
                <input type="file" name="news_img_path" accept="image/*" required><input type="submit" value="確定">
            </div>

        </form>
    @endsection
</x-app-layout>
