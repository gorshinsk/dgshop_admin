@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Товары</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Товары</li>
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
              <div class="card-header">
                <a href="{{ route('product.create') }}" class="btn btn-primary">Добавить</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th>Артикул</th>
                      {{-- <th>Картинка</th> --}}
                      <th>Цена</th>
                      <th>Количество</th>
                      <th>Категория</th>
                      <th>Цвет</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a></td>
                            <td>{{ $product->article }}</td>
                            {{-- <td><img src="images/{{$product->preview_image}}" style="width: 50px; height: 50px" alt=""></td> --}}
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->category->title ?? 'Без категории' }}</td>
                            <td>
                                @if ($product->color)
                                    <div style="width: 16px; height: 16px; background-color: {{ $product->color->code }}; border: 1px solid #000; display: inline-block;"></div>
                                @else
                                    <span>Без цвета</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
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