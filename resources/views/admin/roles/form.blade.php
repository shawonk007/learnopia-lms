<div class="row g-3">
  <div class="col-12">
    {!! html()->text('title', old('title'))->class('form-control')->placeholder("Role Title")->required()->attributes(['maxlength'=>'25']) !!}
  </div>
  <div class="col-12">
    {!! html()->textarea('description', old('description'))->class('form-control')->placeholder("Role Description")->attributes(['maxlength'=>'250', 'cols'=>'30', 'rows'=>'8']) !!}
  </div>
  <div class="col-12">
    {!! html()->text('slug', old('slug'))->class('form-control')->placeholder("Role Slug")->attributes(['maxlength'=>'25']) !!}
  </div>
  <div class="col-12">
    {!! html()->select('status', old('status'))->class('form-control')->options(['' => '-- Choose One --', '1' => 'Enable', '0' => 'Disable']) !!}
  </div>
</div>