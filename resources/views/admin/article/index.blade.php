@extends('layouts.app')

@section('content')
<page width="12">
    <painel title="Articles List" color="blue">
        
        <breadcrumbs v-bind:list="{{$breadcrumbsList}}"></breadcrumbs>

        <table-list 
        v-bind:titles = "['id', 'Studant', 'Course']"
        v-bind:itens = "{{ $articleList }}"  
        order="asc" ordercol="2"
        edit='#edit' create='#create' details='#details' del='#del' token='323232'
        modal="s"
        >
        </table-list>
    </painel>
    <modal namodal="create">
        <painel title="Form" color="blue">
            <form-comp css="" action="#" method="put" enctype="multipart/form-data" token="12345">
            
                <div class="form-group">
                    <label for="studant">Name</label>
                    <input type="text" class="form-control" id="studant" placeholder="Studant name">
                </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="course" placeholder="course">
                </div>
                <button class="btn btn-primary">Save</button>

            </form-comp>
        </painel>
    </modal>

    <modal namodal="edit">
        <painel title="Edit" color="blue">
            <form-comp css="" action="#" method="put" enctype="multipart/form-data" token="12345">
            
                <div class="form-group">
                    <label for="studant">Name</label>
                    <input type="text" class="form-control" id="studant" placeholder="Studant name">
                </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="course" placeholder="course">
                </div>
                <button class="btn btn-primary">Update</button>

            </form-comp>
        </painel>
    </modal>

    <modal namodal="detail">
        <painel title="Form" color="blue">
            <form-comp css="" action="#" method="put" enctype="multipart/form-data" token="12345">
            
                <div class="form-group">
                    <label for="studant">Name</label>
                    <input type="text" class="form-control" id="studant" placeholder="Studant name">
                </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="course" placeholder="course">
                </div>
                <button class="btn btn-primary">Save</button>

            </form-comp>
        </painel>
    </modal>

    <modal namodal="delete">
        <painel title="Form" color="blue">
            <form-comp css="" action="#" method="put" enctype="multipart/form-data" token="12345">
            
                <div class="form-group">
                    <label for="studant">Name</label>
                    <input type="text" class="form-control" id="studant" placeholder="Studant name">
                </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="course" placeholder="course">
                </div>
                <button class="btn btn-primary">Save</button>

            </form-comp>
        </painel>
    </modal>

</page>
@endsection
