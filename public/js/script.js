$(document).ready(function() {

    
    $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300       
    }
    );
    
    $('select').material_select();

    $('.modal').modal();

    
});

function submitForm (btn) {
    
    

    btn.disabled = true;
    

    btn.form.submit();
    

}