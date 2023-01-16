<style>
    .toast-success,
    .toast-warning{
        background-color: #2fb47d;
    }
    #toast-container > .toast-success {
        background-image: url('{{asset('images/approved.png')}}') !important;
    }
    #toast-container > .toast-warning {
        background-image: url('{{asset('images/trash-can.png')}}') !important;
    }
</style>
