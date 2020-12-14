<section class="register_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                <div class="row">
                    <div class="form-full-box">
                        <div class="form_title">
                            <h2>стать студентом</h2>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                        </div>
                        <form action="{{ route('applications.store') }}" method="POST">
                            @csrf
                            <div class="register-form">
                                <div class="row">
                                    <div class="col-12 col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control @error('name') is-invalid @enderror" name="name"
                                                placeholder="Ваше имя" value="{{ old('email') }}" type="text">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control @error('email') is-invalid @enderror"
                                                name="email" placeholder="Ваш адрес электронной почты"
                                                value="{{ old('email') }}" type="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label></label>
                                            <input class="form-control @error('phone') is-invalid @enderror"
                                                name="phone" placeholder="ваш номер телефона" value="{{ old('phone') }}"
                                                type="text">
                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-xs-12 col-md-12 register-btn-box">
                                        <button class="register-btn" type="submit">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 form-content">
                <h2>Почему нас выбирают?</h2>
                <p>Мы успешно работаем уже более 20 лет и являемся одной из ведущих языковых школ России</p>
                <div class="count_student">
                    <div class="single_count">
                        <span class="counter">4000</span>
                        <span class="department_name">студенты</span>
                    </div>
                    <div class="single_count">
                        <span class="counter">4</span>
                        <span class="department_name">города</span>
                    </div>
                    <div class="single_count">
                        <span class="counter">2</span>
                        <span class="department_name">2 Cтраны</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>