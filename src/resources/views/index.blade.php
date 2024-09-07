@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-content-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text form__input--name">
                    <div class="form__input--text form__input--name form__input--name--last_name">
                        <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}" />
                        @error('last_name')
                            <div class="form__error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form__input--text form__input--name form__input--name--first_name">
                        <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}" /><br>
                        <div class="form__error">
                            @error('first_name')
                                {{ $message }}<br>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__input--gender">
                <input type="radio" id="male" name="gender" value="male">
                    <label for="male">男性</label>
                <input type="radio" id="female" name="gender" value="female">
                    <label for="female">女性</label>
                <input type="radio" id="other" name="gender" value="other">
                    <label for="other">その他</label>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                    @error('email')
                        <div class="form__error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text form__input--tel">
                    <div class="form__input--text form__input--tel form__input--tel--form">
                        <input type="text" name="tel1" maxlength="3" placeholder="080" value="{{ old('tel1') }}">
                        @error('tel1')
                            <div class="form__error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form__input--tel--item">-</div>
                    <div class="form__input--text form__input--tel form__input--tel--form">
                        <input type="text" name="tel2" maxlength="4" placeholder="1234" value="{{ old('tel2') }}">
                        @error('tel2')
                            <div class="form__error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form__input--tel--item">-</div>
                    <div class="form__input--text form__input--tel form__input--tel--form">
                        <input type="text" name="tel3" maxlength="4" placeholder="5678" value="{{ old('tel3') }}">
                        @error('tel3')
                            <div class="form__error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>


        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101">
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <select name="category_id">
                    <option value="">選択してください</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection