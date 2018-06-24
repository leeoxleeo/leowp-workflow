var leowpWorkflow = {
    
    methods: {
         
        smoothAnchorLink: function () {
            $('a[href*=\\#]').on('click', function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 500);
            });
        },
        
        init: function () {
            this.smoothAnchorLink();
        },
        
        init_ajax: function () {
        },
    },
    
    ajax: function () {
        return this.methods.init_ajax();
    },
    
    mounted: function () {
        return this.methods.init();
    },
};

$(document).ready(function () {
    leowpWorkflow.mounted();
});

$(document).ajaxStop(function () {
    leowpWorkflow.ajax();
});