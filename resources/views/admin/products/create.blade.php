@extends('admin.layouts.master')

@section('title')
    Thêm mới sản phẩm
@endsection

@section('style')
    <style>
        .preview-upload {
            border: 1px dashed red;
            padding: 10px;
        }

        .preview-upload img {
            width: 100%;
        }

        #file-input {
            display: none;
        }

        .preview {
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            max-width: 350px;
            margin: auto;
            background-color: rgb(255, 255, 255);
            box-shadow: 0 0 20px rgba(170, 170, 170, 0.2);
        }

        img {
            width: 100%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .input-img {
            font-weight: 600;
            cursor: pointer;
            color: #fff;
            border-radius: 8px;
            padding: 10px 20px;
            background-color: rgb(101, 101, 255);
        }
    </style>
@endsection

@section('header')
    <div class="row" style="width: 100%;">
        <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Create new Project" class="btn btn-success float-right">
        </div>
    </div>
@endsection

@section('content')
    <form style="width: 100%;">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mã sản phẩm</label>
                            <input type="text" class="form-control" name="masp" id=""
                                placeholder="Nhập mã sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="tensp" id=""
                                placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Đơn vị tính</label>
                            <input type="text" class="form-control" name="tensp" id=""
                                placeholder="Đơn vị tính">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" name="mota" rows="4" placeholder="Nhập mô tả cho sản phẩm"></textarea>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card">
                    <div class="card-body">
                        <h3>Giá sản phẩm</h3>
                        <div class="form-group">
                            <label>Giá nhập</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>Giá bán lẻ</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-dollar-sign"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label>Giá bán buôn</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-dollar-sign"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-2">
                    <div class="form-group">
                        <label>Thêm ảnh</label>
                        <div class="preview">
                            <img id="img-preview" src="./img.jpg" />

                            <label class="input-img" for="file-input">Thêm ảnh</label>
                            <input accept="image/*" type="file" id="file-input" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Loại sản phẩm</label>
                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                            <option>Value 1</option>
                            <option>Value 2</option>
                            <option>Value 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                            <option>Value 1</option>
                            <option>Value 2</option>
                            <option>Value 3</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

    </form>
@endsection

@section('script')
    <script>
        // Sử dụng FileReader để đọc dữ liệu tạm trước khi upload lên Server
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#sp_hinh-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Bắt sự kiện, ngay khi thay đổi file thì đọc lại nội dung và hiển thị lại hình ảnh mới trên khung preview-upload
        $("#sp_hinh").change(function() {
            readURL(this);
        });

        //input ảnh
        const input = document.getElementById('file-input');
        const image = document.getElementById('img-preview');

        input.addEventListener('change', (e) => {
            if (e.target.files.length) {
                const src = URL.createObjectURL(e.target.files[0]);
                image.src = src;
            }
        });
    </script>
@endsection
