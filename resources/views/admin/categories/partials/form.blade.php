<label for="">Satus</label>
<select class="form-control" name="published">
    @if (isset($category->id))
        <option value="0" @if ($category->published == 0) selected="" @endif>Not published</option>
        <option value="1" @if ($category->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Not published</option>
        <option value="1">Published</option>
    @endif
</select>


<input type="text" class="form-control" name="title" placeholder="Name" value="{{$category->title or ""}}" required>
<br>
<input class="form-control" type="text" name="Slug" placeholder="Auto generate" value="{{$category->slug or ""}}" readonly="">

<label for="">Parent Category</label>
<select class="form-control" name="parent_id">
    <option value="0">-- without parent category --</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Save">