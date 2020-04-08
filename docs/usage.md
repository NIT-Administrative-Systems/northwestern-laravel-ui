# Using the Layouts
There are two different versions of the layout: 

- **Purple Container** - the site content is wrapped in a run-of-the-mill Bootstrap container, which is sized based on media query breakpoints
- **Purple Widescreen** - your content has access to (nearly) the full width of the page, with a slot for a sidebar

The header, footer, flash messaging, and other features are consistent between the two layouts.

## Purple Container
The purple container is a bread-and-butter general purpose layout.

```php
@extends('northwestern::purple-container')

@section('heading')
<h2>Northwestern Bootstrap Theme</h2>
@endsection

@section('content')
<p>Hello world!</p>
@endsection
```

The heading and content are split into separate components so any flash messages can appear between them. If you find this undesirable (or your page has no heading), you may omit the separate heading section.

![Purple container layout](./assets/container-layout.png)

## Purple Widescreen
The purple widescreen layout is ideal for datatables with filter controls on the side.

```php
@extends('northwestern::purple-widescreen')

@section('sidebar')
<div class="card" class="w-100">
    <div class="card-header p-2 pl-3">
        <h4 class='mb-0 w-50 d-inline-block'>Filters</h4>
        <button type="button" class="btn btn-outline-secondary btn-sm float-right reset"><i class="fas fa-undo fa-xs" aria-hidden="true"></i> Clear</button>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label class="col-form-label col-form-label-large" for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Jane Smith" aria-describedby="nameHelp">
            <small id="nameHelp" class="text-muted">Searches legal &amp; preferred name</small>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="table-responsive">
    <table class="table table-striped table-sm mb-2">
        <!-- . . . -->
    </table>
</div>
@endsection
```

As with the purple container, the heading/content are split so flash messages may be shown between them. When displaying a table, the heading is typically omitted so the table's controls align with the top of the search filters.

![Purple widescreen layout](./assets/widescreen-layout.png)


## Page Titles

## Flash Messages

## Error Summary

## Javascript