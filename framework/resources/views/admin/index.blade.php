@extends('admin.layout.header$footer')
@section('content')

<div class="container adminmainpage">
    <div class="usercount alert alert-info">number of users : <span>{{$user_count}}</span></div>
    <div class="usercount alert alert-info">number of item : <span>{{$item_count}}</span></div>
    <div class="usercount alert alert-info">number of media : <span>{{$image_count}}</span></div>
</div>

<hr>

<i class="fa-solid fa-xmark" id="closeColorButton"></i>
<i class="fa-solid fa-palette" id="openColorButton"></i>

    <div class="row colorrow">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5 p-2 colorcolumns">
            <label class="form-label" for="navBackgroundColor">navBackgroundColor</label>
            <input class="form-control form-control-color" type="color" id="navBackgroundColor" name="navBackground">
            <label class="form-label" for="navFont">navFontColor</label>
            <input class="form-control form-control-color" type="color" id="navFontColor" name="navFont">
        </div><div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5 p-2 colorcolumns">
            <label class="form-label" for="sidebarBackgroundColor">sidebarBackgroundColor</label>
            <input class="form-control form-control-color" type="color" id="sidebarBackgroundColor" name="sidebarBackground">
            <label class="form-label" for="sidebarFont">sidebarFontColor</label>
            <input class="form-control form-control-color" type="color" id="sidebarFontColor" name="sidebarFont">
        </div><div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5 p-2 colorcolumns">
            <label class="form-label" for="smallsidebarBackgroundColor">smallsidebarBackgroundColor</label>
            <input class="form-control form-control-color" type="color" id="smallsidebarBackgroundColor" name="smallsidebarBackgroundColor">
            <label class="form-label" for="smallsidebarFontColor">smallsidebarFontColor</label>
            <input class="form-control form-control-color" type="color" id="smallsidebarFontColor" name="smallsidebarFontColor">
        </div><div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5 p-2 colorcolumns">
            <label class="form-label" for="theExamBackgroudColor">theExamBackgroudColor</label>
            <input class="form-control form-control-color" type="color" id="theExamBackgroudColor" name="theExamBackgroudColor">
            <label class="form-label" for="examCollectionBackgroundcolor">examCollectionBackgroundcolor</label>
            <input class="form-control form-control-color" type="color" id="examCollectionBackgroundcolor" name="examCollectionBackgroundcolor">
        </div><div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5 p-2 colorcolumns">
            <label class="form-label" for="elementViewbody">elementViewbody</label>
            <input class="form-control form-control-color" type="color" id="elementViewbody" name="elementViewbody">
            <label class="form-label" for="elementViewbodyFontColor">elementViewbodyFontColor</label>
            <input class="form-control form-control-color" type="color" id="elementViewbodyFontColor" name="elementViewbodyFontColor">
            <label class="form-label" for="elementViewFooter">elementViewFooter</label>
            <input class="form-control form-control-color" type="color" id="elementViewFooter" name="elementViewFooter">
        </div><div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5 p-2 colorcolumns">
            <label class="form-label" for="elementViewFooterButtonFont">elementViewFooterButtonFont</label>
            <input class="form-control form-control-color" type="color" id="elementViewFooterButtonFont" name="elementViewFooterButtonFont">
            <label class="form-label" for="elementViewFooterFont">elementViewFooterFont</label>
            <input class="form-control form-control-color" type="color" id="elementViewFooterFont" name="elementViewFooterFont">
            <label class="form-label" for="spanColor">spanColor</label>
            <input class="form-control form-control-color" type="color" id="spanColor" name="spanColor">
        </div><div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5 p-2 colorcolumns">
            <label class="form-label" for="footerBackgroundColor">footerBackgroundColor</label>
            <input class="form-control form-control-color" type="color" id="footerBackgroundColor" name="footerBackgroundColor">
            <label class="form-label" for="sitebackground">sitebackground</label>
            <input class="form-control form-control-color" type="color" id="sitebackground" name="footerBackgroundColor">
        </div><div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5 p-2">
            <button class="btn btn-primary translate" langAR='إعادة تعيين' langEN='set default' id='setcolordefault'></button>
        </div>
    </div>

@endsection
