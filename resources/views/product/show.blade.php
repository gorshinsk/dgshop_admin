@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Товар</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Товар</li>
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
            <div class="col-12">
            <div class="card">
              <div class="card-header d-flex p-3">
                <div class="mr-3">
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Редактировать</a>
                </div>     
                <form action="{{ route('product.delete', $product->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Удалить" class="btn btn-danger">
                </form>           
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{ $product->id }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $product->title }}</td>
                        </tr>
                        <tr>
                            <td>Артикул</td>
                            <td>{{ $product->article }}</td>
                        </tr>
                        <tr>
                            <td>Цена</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <td>Количество</td>
                            <td>{{ $product->quantity }}</td>
                        </tr>
                        <tr>
                            <td>Категория</td>
                            <td>{{ $product->category->title ?? 'Без категории' }}</td>
                        </tr>
                        <tr>
                            <td>Цвет</td>
                            <td>
                                @if ($product->color)
                                    <div style="width: 16px; height: 16px; background-color: {{ $product->color->code }}; border: 1px solid #000; display: inline-block;"></div>
                                @else
                                    <span>Без цвета</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Картинка</td>
                            <td>
                                @if ($product->preview_image)
                                    <img src="{{ asset('storage/' . $product->preview_image) }}" 
                                        alt="{{ $product->title }}" 
                                        style="width: 150px; height: auto; border: 1px solid #ddd; border-radius: 4px; padding: 5px;">
                                @else
                                    <span>Изображение отсутствует</span>
                                @endif
                            </td>
                        </tr>
                        
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection