@extends('layouts.app')

@section('title-block')
    Курсы
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Альбом 1 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" style="background-color: #f3f4f6; padding: 20px;">
                    <div class="card-body">
                        <img src="data:image/jpeg;base64,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" class="img-fluid mb-4" alt="Обложка альбома 1">
                        <h2 class="text-center mb-2">Альбом "Abbey Road"</h2>
                        <p>Исполнитель: The Beatles</p>
                        <p>Описание: Знаменитый альбом The Beatles "Abbey Road" - это классика, которую необходимо иметь в коллекции каждого поклонника музыки.</p>
                        <p>Цена: $25</p>
                        <button type="submit" class="btn btn-primary mt-2">Добавить в корзину</button>
                    </div>
                </div>
            </div>

            <!-- Альбом 2 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" style="background-color: #f3f4f6; padding: 20px;">
                    <div class="card-body">
                        <img src="https://silveradostar.com/wp-content/uploads/2021/01/dark-side-of-the-moon.jpg" class="img-fluid mb-4" alt="Обложка альбома 2">
                        <h2 class="text-center mb-2">Альбом "The Dark Side of the Moon"</h2>
                        <p>Исполнитель: Pink Floyd</p>
                        <p>Описание: Этот альбом Pink Floyd считается одним из величайших в истории музыки. Он представляет собой уникальное сочетание музыкального гения и философской глубины.</p>
                        <p>Цена: $30</p>
                        <button type="submit" class="btn btn-primary mt-2">Добавить в корзину</button>
                    </div>
                </div>
            </div>

            <!-- Альбом 3 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" style="background-color: #f3f4f6; padding: 20px;">
                    <div class="card-body">
                        <img src="https://upload.wikimedia.org/wikipedia/ru/4/41/A_Night_At_The_Opera%28Queen%29.jpg" class="img-fluid mb-4" alt="Обложка альбома 3">
                        <h2 class="text-center mb-2">Альбом "A Night at the Opera"</h2>
                        <p>Исполнитель: Queen</p>
                        <p>Описание: Этот альбом стал вехой в истории рока благодаря своей эпической музыке и выдающимся вокальным исполнениям Фредди Меркьюри.</p>
                        <p>Цена: $28</p>
                        <button type="submit" class="btn btn-primary mt-2">Добавить в корзину</button>
                    </div>
                </div>
            </div>
            
            
            <!-- Альбом 4 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" style="background-color: #f3f4f6; padding: 20px;">
                    <div class="card-body">
                        <img src="https://upload.wikimedia.org/wikipedia/en/5/55/Michael_Jackson_-_Thriller.png" class="img-fluid mb-4" alt="Обложка альбома 4">
                        <h2 class="text-center mb-2">Альбом "Thriller"</h2>
                        <p>Исполнитель: Michael Jackson</p>
                        <p>Описание: "Thriller" - самый продаваемый альбом всех времен. Он стал культурным явлением и изменил отрасль музыки.</p>
                        <p>Цена: $20</p>
                        <button type="submit" class="btn btn-primary mt-2">Добавить в корзину</button>
                    </div>
                </div>
            </div>
            
            <!-- Альбом 5 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" style="background-color: #f3f4f6; padding: 20px;">
                    <div class="card-body">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Acdc_backinblack_cover.jpg" class="img-fluid mb-4" alt="Обложка альбома 5">
                        <h2 class="text-center mb-2">Альбом "Back in Black"</h2>
                        <p>Исполнитель: AC/DC</p>
                        <p>Описание: "Back in Black" - один из самых успешных альбомов в истории рока. Он стал визитной карточкой AC/DC и завоевал миллионы поклонников.</p>
                        <p>Цена: $22</p>
                        <button type="submit" class="btn btn-primary mt-2">Добавить в корзину</button>
                    </div>
                </div>
            </div>
            
            <!-- Альбом 6 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" style="background-color: #f3f4f6; padding: 20px;">
                    <div class="card-body">
                        <img src="https://upload.wikimedia.org/wikipedia/en/2/26/Led_Zeppelin_-_Led_Zeppelin_IV.jpg" class="img-fluid mb-4" alt="Обложка альбома 6">
                        <h2 class="text-center mb-2">Альбом "Led Zeppelin IV"</h2>
                        <p>Исполнитель: Led Zeppelin</p>
                        <p>Описание: "Led Zeppelin IV" - один из самых влиятельных и успешных альбомов в истории рок-музыки. Он содержит множество хитов и стал классикой жанра.</p>
                        <p>Цена: $26</p>
                        <button type="submit" class="btn btn-primary mt-2">Добавить в корзину</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm" style="background-color: #e8f4e5; padding: 20px;">
                <div class="card-body text-center">
                    <h2 class="mb-4">Оформление покупки</h2>
                    <form action="{{ route('purchase-course') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="album">Выберите альбом:</label>
                            <select name="album" id="album" class="form-control">
                                <option value="Abbey Road">Abbey Road - The Beatles</option>
                                <option value="The Dark Side of the Moon">The Dark Side of the Moon - Pink Floyd</option>
                                <option value="A Night at the Opera">A Night at the Opera - Queen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="card_number">Номер карты:</label>
                            <input type="text" name="card_number" id="card_number" class="form-control" placeholder="Введите номер карты">
                        </div>
                        <div class="form-group">
                            <label for="expiration_date">Срок действия:</label>
                            <input type="text" name="expiration_date" id="expiration_date" class="form-control" placeholder="MM/YY">
                        </div>
                        <div class="form-group">
                            <label for="cvv">CVV:</label>
                            <input type="text" name="cvv" id="cvv" class="form-control" placeholder="Введите CVV">
                        </div>
                        <div class="form-group">
                            <label for="name">Имя на карте:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Введите имя, как на карте">
                        </div>
                        <button type="submit" class="btn btn-primary">Оформить покупку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
