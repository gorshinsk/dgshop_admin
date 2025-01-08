@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменить товар</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Изменить товар</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                
                <div class="form-group">
                    <input type="text" name="title" value="{{ $product->title }}" placeholder="Наименование" class="form-control">
                </div>

                <div class="form-group">
                    <input type="text" name="article" value="{{ $product->article }}" placeholder="Артикуль" class="form-control">
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Обзор" cols="30" rows="5">{{ $product->description }}</textarea>
                </div>

                <div class="form-group">
                    <textarea name="content" placeholder="Описание" class="form-control" cols="30" rows="5">{{ $product->content }}</textarea>
                </div>

                <div class="form-group">
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Выбрать картинку</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузка</span>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <input type="text" name="price" value="{{ $product->price }}" placeholder="Цена" class="form-control">
                </div>

                <div class="form-group">
                    <input type="text" name="quantity" value="{{ $product->quantity }}" placeholder="Количество" class="form-control">
                </div>

                <div class="form-group">
                  <select name="category_id" class="form-control categories" style="width: 100%;">
                    <option selected="selected" disabled>
                        {{ $product->category->title ?? 'Выбрать категорию' }}
                    </option>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                      @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <select name="color_id" class="form-control colors" style="width: 100%;">
                    <option selected="selected" disabled>
                        {{ $product->color->title ?? 'Выбрать цвет' }}
                    </option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->title }}</option>
                      @endforeach
                  </select>
                </div>

                <div class="form-group">
                    <textarea name="properties" value placeholder="Характеристики" class="form-control" cols="30" rows="5">{{ $product->properties }}</textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Редактировать" class="btn btn-primary">
                </div>
            </form>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection