var current = $('a[href="'+_URL+'"]');
current.addClass('active');
current.closest('li').closest('ul').siblings('a').addClass('active');
current.closest('li').closest('ul').closest('li').addClass('menu-open');