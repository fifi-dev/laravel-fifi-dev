<div>
   <div class="container" style="padding:30px 0;">
         <div class="row">
             <div class="col-md-12">
                 <div class="pane panel-default">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-md-6">
                                 Ajouter une nouvelle catégorie
                             </div>
                             <div class="col-md-6">
                                 <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">Toutes les Catégories</a>
                             </div>
                         </div>
                     </div>
                     <div class="panel-body">
                         @if(Session::has('message'))
                             <div class="alert alert-success role="alert">{{Session::get('message')}}</div>
                         @endif
                         <form class="form-horizontal" wire:submit.prevent="storeCategory">
                             <div class="form-group">
                                 <label class="col-md-4 control-label">Nom de la catégorie</label>
                                 <div class="col-md-4">
                                     <input type="text" placeholder="Nom de la Catégorie" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label class="col-md-4 control-label">SlUG de la catégorie</label>
                                 <div class="col-md-4">
                                     <input type="text" placeholder="slug" class="form-control input-md" wire:model="slug">
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label class="col-md-4 control-label"></label>
                                 <div class="col-md-4">
                                     <button type="submit" class="btn btn-primary">Enregistrer</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
   </div>
</div>
