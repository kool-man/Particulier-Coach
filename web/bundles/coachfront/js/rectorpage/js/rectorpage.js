function HandleFileEvent( event, selection )
{
    var img = new Image; 
    img.onload = function( event ) { UpdatePreviewCanvas( event, img, selection ) }
    img.src = event.target.result;
}

function ShowImagePreview( object, selection )
{
    if( typeof object.files === "undefined" )
        return;
        
    ClearCanvas( selection );

    var files = object.files;
    
    if( !( window.File && window.FileReader && window.FileList && window.Blob ) )
    {
      alert('The File APIs are not fully supported in this browser.');
      return false;
    }

    if( typeof FileReader === "undefined" )
    {
        alert( "Filereader undefined!" );
        return false;
    }

    var file = files[0];

    if( file !== undefined && file != null && !( /image/i ).test( file.type ) )
    {
        UpdatePreviewFilename( selection );
        alert( "File is not an image." );
        return false;
    }

    reader = new FileReader();
    reader.onload = function( event ) { HandleFileEvent( event, selection ) }
    reader.readAsDataURL( file );
}

function ClearImagePreview( selection )
{
    var UploadForm = document.getElementById( "UploadForm" );
    if( UploadForm !== undefined && UploadForm != null )
    {
        var button = document.getElementById( "inputoverlaybutton" + selection );
        if( typeof button !== "undefined" && button != null )
            button.value = "Select Upload File";

        UploadForm.reset();
    }
    
    ClearCanvas( selection );
}

function ClearCanvas( selection )
{
    var canvas = document.getElementById( "previewcanvas" + selection );
        
    if( canvas === "undefined" )
        return;

    var context = canvas.getContext( '2d' );

    context.clearRect( 0, 0, canvas.width, canvas.height );        
}

    
function UpdatePreviewFilename( selection )
{
    var filename = document.getElementById( "uploadfileselection" + selection );
    var newvalue = filename.value.replace( "C:\\fakepath\\", "" );

    var button = document.getElementById( "inputoverlaybutton" + selection );
    if( typeof button !== "undefined" && button != null )
        button.value = newvalue;
}

function UpdatePreviewCanvas( event, img, selection )
{
    UpdatePreviewFilename( selection );
    
    var canvas = document.getElementById( "previewcanvas" + selection );
        
//    if( typeof canvas === "undefined" || typeof canvas.getContext === "undefined" )
//        return;
    
    var context = canvas.getContext( '2d' );

    var world = new Object();
    world.width = canvas.offsetWidth;
    world.height = canvas.offsetHeight;
        
    canvas.width = world.width;
    canvas.height = world.height;

    if( typeof img === "undefined" )
        return;
        
    var WidthDif = img.width - world.width;
    var HeightDif = img.height - world.height;
    
    var Scale = 0.0;
    if( WidthDif > HeightDif )
    {
        Scale = world.width / img.width;
    }
    else
    {
        Scale = world.height / img.height;
    }
    if( Scale > 1 )
        Scale = 1;
        
    var UseWidth = Math.floor( img.width * Scale );
    var UseHeight = Math.floor( img.height * Scale );
    
    var x = Math.floor( ( world.width - UseWidth ) / 2 );
    var y = Math.floor( ( world.height - UseHeight ) / 2 );
    
    context.drawImage( img, x, y, UseWidth, UseHeight );  
}

function MoveUploadElement( event )
{
    if( typeof event == 'undefined' ) event = window.event;
    if( typeof event.pageY == 'undefined' && typeof event.clientX == 'number' && document.documentElement )
    {
        event.pageX = event.clientX + document.documentElement.scrollLeft;
        event.pageY = event.clientY + document.documentElement.scrollTop;
    };
    
    var targ = ( event.currentTarget ) ? event.currentTarget : event.srcElement;
    
    var buttonelements = getElementsByClassName( targ, "inputoverlaybutton" );
    var uploadfileelements = getElementsByClassName( targ, "uploadfileselection" );
    
    var ox = oy = 0;
    var elem = buttonelements[0];
    if( elem.offsetParent )
    {
        ox = elem.offsetLeft;
        oy = elem.offsetTop;
        while( elem = elem.offsetParent )
        {
            ox += elem.offsetLeft;
            oy += elem.offsetTop;
        };
    };

    elem = buttonelements[0];
    if( elem.parentNode )
    {
        ox += elem.scrollLeft;
        oy += elem.scrollTop;
        while( elem = elem.offsetParent )
        {
            ox -= elem.scrollLeft;
            oy -= elem.scrollTop;
        };
    };

    var x = event.pageX - ox;
    var y = event.pageY - oy;
    var w = uploadfileelements[0].offsetWidth;
    var h = uploadfileelements[0].offsetHeight;

    uploadfileelements[0].style.top = y - (h / 2)  + 'px';
    uploadfileelements[0].style.left = x - w + 2 + 'px';
    
    return true;
}