@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменить цвет</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Обновить цвет</li>
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
            <form action="{{ route('color.update', $color->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text" name="title" value="{{ $color->title }}" placeholder="Наименование" class="form-control">
                    <input type="color" name="code" id="colorInput" value="{{ $color->code }}">
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