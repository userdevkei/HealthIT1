<style>
    body{
        margin: 0 !important;
        padding: 0 !important;
        background: #cbd5e0 !important;
    }
    .nav{
        min-height: 75px !important;
        margin: 0;
        background: aquamarine;
    }

    .nav .brand-name{
        float: left;
        margin: 20px auto !important;
    }
    .nav .nav-links{
        float: right;
        margin: 20px auto !important;
    }
    .nav .brand-name a {
        text-decoration: none !important;
        font-size: 24px;

    }
    .nav .nav-links a {
        text-decoration: none !important;
        font-size: 20px ;
    }
    .nav-wrapper{
        margin: auto;
        width: 98%;
    }
    .vac{
        margin: 20px auto;
        padding: 7px;
    }
    .vac input{
        min-height: 20px;
    }
</style>
<div class="nav">
    <div class="nav-wrapper">
        <div class="brand-name">
            <a href="{{ '/' }}"> Home </a>
        </div>
        <div class="nav-links">
            <a href="{{ route('Immunization.index') }}"> Vaccine </a>
            <a href="#"> Reports </a>
        </div>
    </div>
</div>
