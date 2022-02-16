@extends('layout')

@section('create')
<div id="wrapper">
    <div id=""page class="conainer">
        <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

        <form method="POST" action="/articles">
            @csrf
            <div class="field">
                <label class="label" for="Titl">Titl:</label>

                <div class="control">
                    <input class="input" type="text" name="titl" id="titl"
                </div>
            </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt:</label>

                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                    </div>
                </div>

                    <div class="field">
                        <label class="label" for="body">Body:</label>

                        <div class="control">
                            <textarea class="textarea" name="body" id="body"></textarea>
                        </div>
                    </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" name="submit">Submit</button>
                </div>
            </div>


        </form>
    </div>
    </div>
@endsection
