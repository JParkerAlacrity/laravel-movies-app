@extends('layouts/sign-ins')


<div class="d-flex align-content-center flex-wrap">
    <div class="container sign-in-pg">
        <div class="row title">
            <div class="col-md-4 offset-md-4">
                <h2>
                    PROJECT
                </h2>
            </div>
        </div>
        <div class="row sign-in">
            <div class="col-md-4 offset-md-4">
                
                
                    <form>
                        @include('movies/widgets/form-element')

                        @include('movies/widgets/form-element')

                        <!-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->

                        <button type="submit" class="btn btn-dark col-md-12">Sign In</button>
                    </form>
            
            </div>
        </div>
    </div>
</div>