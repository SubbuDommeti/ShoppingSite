
@foreach($row->subcategory as $row)
<ul class="dropdown-menu-right dropdown-item" >
<li>
     <button data-filter=".{{$row->id}}" style="color: #360BEE;">--{{$row->catName}}</button>
     @include('Subpages.Admin.Category.subcategories.sub_categories',['subcategory' => $row->subcategory])
 </li>
</ul>
@endforeach
