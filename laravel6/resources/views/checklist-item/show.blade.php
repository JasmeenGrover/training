<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show ChecklistItems</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('checklist-item.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type</strong>
                {{ $checklistItem->type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>key</strong>
                {{ $checklistItem->key }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>value</strong>
                {{ $checklistItem->value }}
            </div>
        </div>
    </div>
  </body>
</html>
