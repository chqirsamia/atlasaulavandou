<form action="{{ route('plats.search') }}" class="d-flex mr-3" >
    <div class="form-group mb-0 mr-1" >
        <input type="text" name="cle" class="form-control " value="{{ request()->cle ?? '' }}">
    </div>
    <button type="submit" class="btn btn-info " ><i class="fa fa-search"  aria-hidden="true"></i></button>
</form>