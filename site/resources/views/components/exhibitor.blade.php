<section class="{{ $class }}">
    <div class="exhibitor__titleInfo titleInfo">
        <div class="titleInfo__img">
            <img src="{{ asset('storage'). '/' . $exhibitor->cover_img }}" alt="photo de profil">
        </div>
        <div>
            <h3 aria-level="3" role="heading" class="titleInfo__title">
                {{ $exhibitor->full_name }}
            </h3>
            <p class="titleInfo__workTitle">
                {{ $exhibitor->work_title }}
            </p>
        </div>
    </div>
    <div class="exhibitor__tableName tableName">
        <p aria-level="4" role="heading" class="tableName__title">
            Nom de la table
        </p>
        <div class="tableName__text_container">
            <p class="tableName__text">
                {{ $exhibitor->table->name }}
            </p>
        </div>
    </div>
    <div class="exhibitor__location location">
        <p aria-level="4" role="heading" class="location__title">
            Emplacement
        </p>
        <div class="location__text_container">
            <p class="location__text bcg">
                {{ $exhibitor->table->location }}
            </p>
        </div>
    </div>
    @if ($tags)
        <div class="exhibitor__tags tags">
            <p aria-level="4" role="heading" class="tags__title">
                Tags supplémentaires
            </p>

            <div class="tags__tag tag">
                @foreach($exhibitor->table->tags as $tag)
                    <p class="tag__title @if ($tag->categories == 'Pays')
                        bcg
                    @else
                        bcg_special
                    @endif">
                        {{ $tag->name }}
                    </p>
                @endforeach
            </div>
        </div>
    @endif
</section>
