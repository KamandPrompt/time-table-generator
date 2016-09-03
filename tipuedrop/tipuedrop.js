
/*
Tipue drop 5.0.2
Copyright (c) 2015 Tipue
Tipue drop is released under the MIT License
http://www.tipue.com/drop
*/


(function($) {

     $.fn.tipuedrop = function(options) {
			var sd="";
          var set = $.extend( {
          
               'show'                   : 3,
               'speed'                  : 300,
               'newWindow'              : false,
               'mode'                   : 'static',
               'contentLocation'        : 'tipuedrop/tipuedrop_content.json'
          
          }, options);
          
          return this.each(function() {
          
               var tipuedrop_in = {
                    pages: []
               };
               $.ajaxSetup({
                    async: false
               });
               
               if (set.mode == 'json')
               {
                    $.getJSON(set.contentLocation)
                         .done(function(json)
                         {
                              tipuedrop_in = $.extend({}, json);
                         });
               }               
               
               if (set.mode == 'static')
               {
                    tipuedrop_in = $.extend({}, tipuedrop);
               }

               $(this).keyup(function(event)
               {
                    getTipuedrop($(this));
               });               
               
               function getTipuedrop($obj)
               {
                    if ($obj.val())
                    {
                         var c = 0;
                         for (var i = 0; i < tipuedrop_in.pages.length; i++)
                         {
                              var pat = new RegExp($obj.val(), 'i');
                              if ((tipuedrop_in.pages[i].title.search(pat) != -1 || tipuedrop_in.pages[i].text.search(pat) != -1) && c < set.show)
                              {
                                   if (c == 0)
                                   {
                                        var out = '<div class="tipue_drop_box"><div id="tipue_drop_wrapper">';    
                                   }
                                   sd=tipuedrop_in.pages[i].url;
									
                                   
                                   out += '<div class="tipue_drop_item"><div class="tipue_drop_left"></div><div class="tipue_drop_right">' + tipuedrop_in.pages[i].title + '</div></div></a>';
                                   c++;
                              }
                         }
                         if (c != 0)
                         {
                              out += '</div></div>';               
                              $('#tipue_drop_content').html(out);
							  
                              $('#tipue_drop_content').fadeIn(set.speed);
                         }
                    }
                    else
                    {
                         $('#tipue_drop_content').fadeOut(set.speed);
							
                    }
               }
               
               $('html').click(function()
               {
                    $('#tipue_drop_content').fadeOut(set.speed);
					$('#srch').val(sd);
					
               });
          
          });
     };
     
})(jQuery);