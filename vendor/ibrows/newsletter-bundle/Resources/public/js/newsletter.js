var ns = ibrows_newsletter.namespace('ibrows_newsletter');

ns.newsletter = function($options){
    
    var $self = this;
    var $options = $options;
    
    this.ready = function(){
        this.setupTinymceButtons();
        this.setupIframeAutoheight();
    }
    
    this.setupIframeAutoheight = function()
    {
    		jQuery($options.selectors.iframeAutoheight).iframeAutoHeight();
    }

    this.setupTinymceButtons = function(){
        for(var $methodKey in $options.tinymceButtons){
            var $method = $options.tinymceButtons[$methodKey];
            var $methodName = $method.name;
            var $windowMethodName = 'tinymce_button_'+ $methodName;

            var $parameters = [];
            for(var $parameterKey in $method.parameters){
                var $parameter = $method.parameters[$parameterKey];
                if($parameter.isOptional == false){
                    $parameters.push($parameter.name);
                }else{
                    $parameters.push("'"+$parameter.defaultValue+"'");
                }
            }

            this.setupTinymceButton($windowMethodName, $methodName, $parameters);
        }
    }

    this.setupTinymceButton = function($windowMethodName, $methodName, $parameters){
        window[$windowMethodName] = function($editor){
            $editor.focus();
            $editor.selection.setContent('{{bridge.'+ $methodName +'('+$parameters.join(',')+')}}');
        };
    }
    
}