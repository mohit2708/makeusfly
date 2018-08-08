// function delay(amount) {
//     return new Promise(resolve => setTimeout(resolve, amount));
// }

// async function breathe() {
//     console.log('breathe in...');
//     await delay(3000);
//     console.log('breathe out');
//     await delay(1000);
//     console.log('3...');
//     await delay(1000);
//     console.log('2...');
//     await delay(1000);
//     console.log('1...');
//     await delay(1000);
//     console.log('breathe in...');
//     return 'Youare done!';
// }

// breathe();

$(document).ready(function(){
    var steps = [
        'NO, thanks',
        'Give me the plugin!',
        'NOW!!',
        '...come on!!!'
    ]
    var selected = 0;
    var button = '<button class="btn btn-xs btn-link annoyed"></button>';

    $(document).on('click', '.calldownload', function(e) {
        setupButton();
    });

    function setupButton(){
        $('.downlink').addClass('disabled');
        $('.wrapannoy').html(button);
        selected = 0;
        $('.annoyed').html(steps[selected]);
    }

    function activateD(action){
        $.ajax({
            url: 'stat/count.php',
            cache: false,
            method: "POST",
            data: { whatcount : action },

        }).done(function( msg ) {
            // console.log(msg);
        });
        $('.downlink').removeClass('disabled');
    }

    $(document).on('click', '.annoyed', function(e) {
        selected++;
        if (selected < steps.length) {
            $(this).html(steps[selected]);
        } else {
            activateD('meh');
            $(this).parent().html('Meh <i class="fa fa-meh-o"></i>');
        }
    });

    $('.venoboxvid').venobox({
        bgcolor: '#000',
        spinner : 'cube-grid',
        // cb_post_open : function(obj, gallIndex, thenext, theprev){
        //     console.log(thenext);
        // },
    });
    $('.venoboxframe').venobox({
        border: '6px',
        overlayColor : 'rgba(255,255,255,0.85)',
        titlePosition : 'bottom',
        titleColor: '#333',
        titleBackground: 'transparent',
        closeColor: '#333',
        closeBackground: 'transparent',
                spinner : 'wave'
    });
    // $('.venoboxinline').venobox({
    //     framewidth: '400px',
    //     frameheight: 'auto',
    //     border: '10px',
    //     bgcolor: '#f46f00',
    //     titleattr: 'data-title'
    // });
    $('.venoboxajax').venobox({
        border: '30px;',
        // frameheight: '220px'
    });
    var venoOptions = {
        numeratio: true,
        infinigall: true,
        border : '20px',
        titleattr: 'data-title',
        // cb_after_nav : function(obj, gallIndex, thenext, theprev){
        //     console.log('item index '+ gallIndex);
        //     console.log(thenext);

        // },
        // cb_post_open : function(obj, gallIndex, thenext, theprev){
        //     console.log('item index '+ gallIndex);
        // },
    }
    $('.venobox').venobox(venoOptions);

// init plugin.
var test = $('.venoboxinline').venobox({
    numeratio: true,
        framewidth: '400px',
        frameheight: 'auto',
        border: '10px',
        bgcolor: '#f46f00',
        titleattr: 'data-title',
        infinigall: true,
        // cb_init : function(plugin){
        //     console.log('INIT');
        //     console.log(plugin);
        // },
        // cb_pre_open : function(obj){
        //     console.log('link obj');
        //     console.log(obj.data());
        // },
        // cb_post_open : function(obj, gallIndex, thenext, theprev){
        //     console.log('item index');
        //     console.log(gallIndex);
        //     console.log('next - prev lenght');
        //     console.log(thenext.length);
        //     console.log(theprev.length);
        // },
        // cb_pre_close : function(obj, gallIndex, thenext, theprev){
        //     console.log('item index');
        //     console.log(gallIndex);
        // },
        // cb_post_close : function(){
        //     console.log('CLOSED');
        // },
        // cb_after_nav : function(obj, gallIndex, thenext, theprev){
        //     console.log('after nav');
        //     console.log(gallIndex);
        // }

})
//test.venobox('foo_public_method');
// call a method from within the plugin outside of the plugin.
$(document).on('click', '.closeme', function(e){
    e.preventDefault();
    // console.log('called');
    // test.VBprev();
    // test.VBnext();
    test.VBclose();

});

// $('.closeme').on('click', function(e){
//     e.preventDefault();
//     console.log('called');
//     // test.prevVB();
//     // test.nextVB();
//     test.closeVB();

// })

    // share
    $("#share").jsSocials({
        showCount: true,
        showLabel: true,
        url: "http://veno.es/venobox/",
        text: "Check VenoBox: free #responsive #modal window #jQuery #plugin",
        shares: [{
            share: "twitter",
            via: "NicolaFranchini"
        }, "facebook", "linkedin", "googleplus"],
        shareIn: "popup"
    });
    $("#socialhead").jsSocials({
        showCount: false,
        showLabel: false,
        url: "http://veno.es/venobox/",
        text: "Check VenoBox: free #responsive #modal window #jQuery #plugin",
        shares: [{
            share: "twitter",
            via: "NicolaFranchini"
        }, "facebook", "linkedin", "googleplus"],
        shareIn: "popup"
    });
    $("#shareRound").jsSocials({
        share: "twitter",
        label: "Tweet",
        showLabel: false,
        showCount: false,
        url: "http://veno.es/venobox/",
        text: "Check VenoBox: free #responsive #modal window #jQuery #plugin",
        via: "NicolaFranchini", 
        shares: [{
            share: "twitter",
            via: "NicolaFranchini"
        }, "facebook", "linkedin", "googleplus", "pinterest"],
        shareIn: "popup",
         _createShareLink: function(share) {
                var $result = jsSocials.Socials.prototype._createShareLink.apply(this, arguments);
                $result.on("click", function() {
                    activateD('share');
                    $('.wrapannoy').html('May the Force be with you! <i class="fa fa-heart"></i>');
                });
                return $result;
            },
    });
});