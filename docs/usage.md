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

By default, the sidebar will be on the left side of the screen. If you prefer to have it on the right side, pass the `layout_sidebar_side` variable in the `extends` directive. On small screens, the sidebar will always be after the content area (so controls won't be shown above their datatables).

```php
// 'left' or 'right'
@extends('northwestern::purple-widescreen', ['layout_sidebar_side' => 'right'])

@section('sidebar')
// . . .
@endsection

@section('content')
// . . .
@endsection
```

As with the purple container, the heading/content are split so flash messages may be shown between them. When displaying a table, the heading is typically omitted so the table's controls align with the top of the search filters.

![Purple widescreen layout](./assets/widescreen-layout.png)

## Page Titles
Whenever you render a view from a controller/route, you should pass the `$page_title` variable. This will be added to the page's `<title>` tag. If you do not specify a title, the app name will be used.

```php
class StudentDetailController 
{
    public function __invoke()
    {
        return view('student-detail', [
            'page_title' => 'Student Detail',
        ])
    }
}
```

Using good page titles is great for web accessibility & history.

## Error Summary
Form validation errors can be summarized with the error view. This is **not** a subsitute for showing errors with the applicable field; it should be used in concert with [`is-invalid` form control styling](https://getbootstrap.com/docs/4.0/components/forms/#validation).

The summary is not automatically included by the layout. It is better to pick a spot to insert it near the relevant form elements.

All you need to do is include the error view. It will detect when the default error bag has something to show:

```php
@include('northwestern::errors')

<h2>Billing address</h2>
<form action="...">
    <!-- ... -->
</form>
```

It has some boilerplate text and an icon, giving you a standard look for form validation summaries.

![Form validation summary](./assets/error.png)

## Flash Messages
[Flash messages](https://laravel.com/docs/7.x/session#flash-data) for the `status` key will be displayed automatically by both layouts.

## Javascript
The best practice for including Javascript in a page is to put it at the very bottom of the `<body>` element. The layouts support this by rendering [the `scripts` stack](https://laravel.com/docs/7.x/blade#stacks).

```php
@extends('northwestern::purple-container')

@section('heading')
<h2>Northwestern Bootstrap Theme</h2>
@endsection

@section('content')
<p>Hello world!</p>
@endsection

@stack('scripts')
<script lang="text/javascript">
    alert('Hello world');
</script>
@endstack
```

You may add several entries to the stack. This is useful for partial Blade templates that include some JS behaviour.

## Environment Badge
The topmost purple bar contains an environment indicator for non-production environments. Developers often have many tabs open, so the big obvious hint about where they are comes in handy.

If you set `APP_ENV=production`, it will not be shown.