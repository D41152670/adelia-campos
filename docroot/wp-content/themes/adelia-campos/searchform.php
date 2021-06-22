<form action="/" method="get">
    <div class="input-group mb-4">
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control main-sidebar__input"
            placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn main-sidebar__btn" type="submit">
                <i class="icon icon-search-solid"></i>
            </button>
        </div>
    </div>
</form>