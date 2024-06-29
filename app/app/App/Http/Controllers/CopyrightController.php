<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with  https://patorjk.com/software/taag/
    const COPYRIGHT = "
___.              _____  .__       .__    .____          .__             ___    
\_ |__ ___.__.   /     \ |__| ____ |  |__ |    |    ____ |__| ______ /\  \  \   
 | __ <   |  |  /  \ /  \|  |/ ___\|  |  \|    |  _/ __ \|  |/  ___/ \/   \  \  
 | \_\ \___  | /    Y    \  \  \___|   Y  \    |__\  ___/|  |\___ \  /\    )  ) 
 |___  / ____| \____|__  /__|\___  >___|  /_______ \___  >__/____  > \/   /  /  
     \/\/              \/        \/     \/        \/   \/        \/      /__/   
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
