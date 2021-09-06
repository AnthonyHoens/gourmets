<form action="{{ route('send.mail') }}" method="post" class="tickets__form form">
    @csrf
      <div class="form__field_container">
        <label for="name" class="form__label">Nom</label>
        <input id="name" name="name" type="text" class="form__input" value="{{ old('name') }}" placeholder="Écrivez votre nom">
        @error('name')
            <span class="form__error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form__field_container">
        <label for="first_name" class="form__label">Prénom</label>
        <input id="first_name" name="first_name" class="form__input" value="{{ old('first_name') }}" type="text" placeholder="Écrivez votre prénom">

        @error('first_name')
            <span class="form__error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form__field_container">
        <label for="email" class="form__label">Adresse e-mail</label>
        <input id="email" name="email" type="email" class="form__input" value="{{ old('email') }}" placeholder="Écrivez votre adresse e-mail">

        @error('email')
            <span class="form__error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form__field_container">
        <label for="subject" class="form__label">Sujet</label>
        <input id="subject" name="subject" class="form__input" value="{{ old('subject') }}" type="text" placeholder="Écrivez votre sujet">

        @error('subject')
            <span class="form__error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form__special_field_container">
        <label for="message" class="form__label">Message</label>
        <textarea id="message" name="message" class="form__input" cols="30" rows="10" placeholder="Écrivez votre message">{{ old('message') }}</textarea>

        @error('message')
            <span class="form__error">{{ $message }}</span>
        @enderror
    </div>

    <div class="form__submit_container">
        <input type="submit" value="Contactez-nous" class="form__submit">
    </div>
</form>
