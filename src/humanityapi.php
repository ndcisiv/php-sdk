<?php namespace Humanity;

/**
 * Humanity PHP SDK
 * Version: 2.0
 * Date: 07/17/2017
 * http://www.humanity.com/api/
 *
 *
 * Quick Access Humanity SDK Methods:
 *
 * **********************************
 * API Functions
 * **********************************
 * getAPIConfig( $array_of_parameters )
 * getAPIMethods( )
 *
 * **********************************
 * Admin Functions
 * **********************************
 * getAdminSettings( )
 * updateAdminSettings( $array_of_settings_data )
 * getAdminDetails( )
 * updateAdminDetails( $array_of_admin_data )
 * getAdminFiles( $array_of_parameters )
 * getAdminFileDetails( $file_id )
 * updateAdminFile( $file_id, $array_of_file_data )
 * createAdminFile( $array_of_file_data )
 * deleteAdminFile( $file_id )
 * getAdminBackups( )
 * getAdminBackupDetails( $backup_id )
 * createAdminBackup( $array_of_backup_data )
 * deleteAdminBackup( $backup_id )
 * getAdminNRequests( )
 * getAdminBusiness( )
 * getAdminGroupPerms( $array_of_parameters )
 * updateAdminGroupPerms( $array_of_perms_data )
 *
 * **********************************
 * Messaging Functions
 * **********************************
 * getMessages( $mode )
 * getMessageDetails( $message_id )
 * createMessage( $array_of_message_data )
 * updateMessage( $array_of_message_data )
 * deleteMessage( $message_id )
 * createShiftMessage( $array_of_message_data )
 * getWallMessages( )
 * createWallMessage( $array_of_message_data )
 * deleteWallMessage( $message_id, $delete_what )
 * getMessagingNotices( $array_of_parameters )
 * getMessagingNoticeDetails( $notice_id )
 * updateMessagingNotice( $notice_id, $array_of_notice_data )
 * createMessagingNotice( $array_of_notice_data )
 * deleteMessagingNotice( $notice_id )
 *
 * **********************************
 * Reports Functions
 * **********************************
 * getReportsSchedule( $array_of_parameters )
 * getReportsBudget( $array_of_parameters )
 * getReportsTimesheets( $array_of_parameters )
 * getReportsEmployee( $array_of_parameters )
 * getReportsCustom( $array_of_parameters )
 * getReportsDailyPeakHoursNew( $array_of_parameters )
 * getReportsDailyPeakHours( $array_of_parameters )
 * getReportsGoogle( $array_of_parameters )
 * getReportsWorkUnits( $array_of_parameters )
 * getReportsWuDailyReport( $array_of_parameters )
 * getReportsForecast( $array_of_parameters )
 *
 * **********************************
 * Forecast Functions
 * **********************************
 *
 *
 * **********************************
 * Payroll Functions
 * **********************************
 * getPayrollReport( $array_of_parmeters )
 * getPayrollEnhancedReport( $array_of_parmeters )
 * getRatecards( )
 * getRatecardDetails( $ratecard_id )
 * createRatecard( $array_of_ratecard_data )
 * updateRatecard( $ratecard_id, $array_or_ratecard_data )
 * deleteRatecard( $ratecard_id )
 *
 * **********************************
 * Schedule Functions
 * **********************************
 * getSchedules( )
 * getScheduleDetails( )
 * createSchedule( $array_of_schedule_data )
 * updateSchedule( $schedule_id, $array_of_schedule_data )
 * deleteSchedule( $schedule_id )
 * getShifts( $array_of_parameters )
 * getShiftDetails( $shift_id )
 * updateShift( $shift_id, $array_of_shift_data )
 * createShift( $array_of_shift_data )
 * deleteShift( $shift_id )
 * getShiftHistory( $array_of_params )
 * getShiftApproval( $shift_id )
 * createShiftApproval( $shift_id )
 * updateShiftApproval( $shift_id, $array_of_shift_data )
 * getVacationSchedules( $array_of_parameters )
 * getVacationScheduleDetails ( $vacation_id )
 * createVacationSchedule( $array_of_vacation_data )
 * updateVacationSchedule( $vacation_id, $array_of_vacation_data )
 * deleteVacationSchedule( $vacation_id )
 * getScheduleConflicts( $array_of_parameters )
 *
 * **********************************
 * Timeclock Functions
 * **********************************
 * getTimeclocks( $array_of_parameters )
 * getTimesheets( $array_of_parameters )
 *
 * **********************************
 * Staff Functions
 * **********************************
 * doLogin( $array_of_parameters )
 * doLogout( )
 * getMe( )
 * getEmployees( $array_of_parameters )
 * getEmployeeDetails( $array_of_parameters )
 * updateEmployee( $employee_id, $array_of_employee_data )
 * createEmployee( $array_of_employee_data )
 * deleteEmployee( $employee_id )
 * getStaffSkills( )
 * getStaffSkillDetails( $skill_id )
 * createStaffSkill( $array_of_skill_data )
 * updateStaffSkill( $skill_id, $array_of_skill_data )
 * deleteStaffSkill( $skill_id )
 * createPing( $array_of_parameters )
 *
 * **********************************
 * Availability Functions
 * **********************************
 *
 *
 * **********************************
 * Location Functions
 * **********************************
 * getLocations( $array_of_parameters )
 * getLocationDetails( $location_id )
 * createLocation( $array_of_location_data )
 * updateLocation( $location_id, $array_of_location_data )
 * deleteLocation( $location_id )
 *
 * **********************************
 * Training Functions
 * **********************************
 *
 *
 * **********************************
 * Group Functions
 * **********************************
 *
 *
 * **********************************
 * Sales Functions
 * **********************************
 *
 *
 * **********************************
 * Dashboard Functions
 * **********************************
 *
 *
 * **********************************
 * Terminal Functions
 * **********************************
 *
 *
 *
 *
 *
 * All Quick-Access methods return a response like this:
 * array(
 * 	'status' => array( 'code' => '1', 'text' => 'Success', 'error' => 'Error message if any' ),
 * 	'data' => array(
 *		'field_name' => 'value'
 * 		)
 * 	)
 *
 * For methods that return multiple objects (as in the case for the getMessages( ) method
 * responses will look like this, where the indexes [0], [1] would be replaced with the
 * message you're looking to display
 *
 * array(
 * 	'status' => array( 'code' => '1', 'text' => 'Success', 'error' => 'Error message if any' ),
 * 	'data' => array(
 *		[0] => array (
 *				'id' => 1,
 *				'name' => 'value'
 *			)
 *		[1] => array (
 *				'id' => 2,
 *				'name' => 'value'
 *			)
 * 		)
 * 	)
 */
class HumanityApi
{
    // Private Class Variables
    private $_key;
    private $_callback;
    private $_init;
    private $_debug;
    private $request            =   array( );
    private $requests           =   array( );
    private $response           =   array( );
    private $raw_response       =   array( );

    // constants
    const SESSION_IDENTIFIER    =   'SP';
    const API_ENDPOINT          =   'https://www.humanity.com/api/';
    const OUTPUT_TYPE           =   'json';

    /**
     ******************************************************************
     *********************** Public Functions *************************
     ******************************************************************
     */

    public function __construct( $config = array() )
    {// construct the SDK
        try
        {//
            $this->_debug = false;
            $this->startSession( );
            // set the developer key
            $this->setAppKey( $config['key'] );

            if( !function_exists( 'curl_init' ) )
            {// curl is not available
                throw new Exception( $this->internal_errors( 6 ) );
            }
            if( !function_exists( 'json_decode' ) )
            {// json_decode is not available
                throw new Exception( $this->internal_errors( 7 ) );
            }
        }
        catch( Exception $e )
        {//
            echo $e->getMessage( ); exit;
        }
    }

    public function setDebug( $switch = false )
    {// turn debug on
        if( file_exists('log.txt') )
        {// delete previous log file
            unlink( 'log.txt' );
        }
        $this->_debug = true;
    }

    public function getSession( )
    {// check whether a valid session has been established
        if( isset( $_SESSION['token'] ) )
        {// user is already authenticated
            return $_SESSION['data'];
        }
        else
        {// user has not authenticated
            return false;
        }
    }

    public function getRawResponse( )
    {// return the raw response data
        return $this->raw_response;
    }

    public function getAppKey( )
    {// return the developer key
        return $this->_key;
    }

    public function setAppKey( $key )
    {// set the developer key to use
        $this->_key = $key;
        return $this->_key;
    }

    public function getAppToken( )
    {// return the token that's currently being used
        try
        {//
            if( $this->getSession( ) )
            {// user authenticated, return the token
                return $_SESSION['token'];
            }
            else
            {// user not authenticated, return an error
                throw new Exception( $this->internal_errors( 4 ) );
            }
        }
        catch( Exception $e )
        {//
            echo $e->getMessage();
        }
    }

    public function setRequest( $requests = array( ) )
    {// set the request parameters
        // clear out previous request data
        unset( $this->requests );

        // set the default response type of JSON
        $this->request['output'] = self::OUTPUT_TYPE;

        $this->_init = 0;

        foreach( $requests as $r => $v )
        {// loop through each request array
            if( is_array( $v ) )
            {//
                $this->requests[] = $v;
            }
            else
            {//
                if( $requests['module'] == 'staff.login' )
                {// automatically initialize session after this API call
                    $this->_init = 1;
                }
                $this->requests[] = $requests; break;
            }
        }

        return $this->api( );
    }

    public function getRequest( )
    {// return the request parameters
        return array_merge( $this->request, array( 'request' => $this->requests ) );
    }



    /**
     ******************************************************************
     ********************** Protected Functions ***********************
     ******************************************************************
     */

    protected function startSession( )
    {// start the session
        session_name( self::SESSION_IDENTIFIER );
        session_start( );
    }



    /**
     ******************************************************************
     *********************** Private Functions ************************
     ******************************************************************
     */

    private function setCallback( $callback )
    {// set the method to call after successful api call
        $this->_callback = $callback;
        return $this->_callback;
    }

    private function setSession( )
    {// store the user data to this session
        $_SESSION['token'] = $this->response['token'][0];
        $_SESSION['data'] = $this->response['data'][0];
    }

    private function destroySession( )
    {// destroy the currently active session
        $logout = $this->setRequest( array (
            'module' => 'staff.logout',
            'method' => 'GET'
        ) );
        if( $logout['status']['code'] == 1 )
        {// logout successful, remove local session data
            unset( $_SESSION['token'] );
            unset( $_SESSION['data'] );

            # REMOVE COOKIE
            setcookie("mobile_token", $this->response['token'][0], time()-(30*86400), "/", ".humanity.com");
        }
        return $logout;
    }

    private function setResponse( $response )
    {// set the response data
        // remove previous response data
        unset( $this->response );
        // set new response data
        if( isset($response['data']) )
        {//
            $this->response['response'][0] = array(
                'code' => $response['status'],
                'text' => $this->getResponseText( $response['status'] ),
                'error' => (isset($response['error']))?$response['error']:''
            );
            $this->response['data'][0] = $response['data'];
            $this->response['token'][0] = $response['token'];
        }
        else
        {//
            foreach( $response as $num => $data )
            {// loop through each response
                if( isset($data['status']) ){
                    $this->response['response'][$num] = array(
                        'code' => $data['status'],
                        'text' => $this->getResponseText( $data['status'] ),
                        'error' => (isset($data['error']))?$data['error']:''
                    );
                    $tmp = array( );
                    $id = 0;
                    if( is_array( $data['data'] ) )
                    {// is there an array returned
                        foreach( $data['data'] as $n => $v )
                        {//
                            if( is_array( $v ) )
                            {//
                                foreach( $v as $key => $val )
                                {//
                                    $tmp[$n][$key] = $val;
                                }
                            }
                            else
                            {//
                                $tmp[$n] = $v;
                            }
                        }
                        $id++;
                        $this->response['data'][$num] = $tmp;
                    }
                    else
                    {// the data response is text
                        $this->response['data'][$num] = $data['data'];
                    }
                }
            }
        }
    }

    public function getResponse( $call_num = 0 )
    {// return the API response data to the calling method
        return array(
            'status' => $this->response['response'][$call_num],
            'data' => $this->response['data'][$call_num],
            'error' => (isset($response['error']))?$response['error'][$call_num]:''
        );
    }

    private function getResponseText( $code )
    {// return a reason text for a response code
        switch( $code )
        {// select a response code to display
            case '-3' : $reason = 'Flagged API Key - Pemanently Banned'; break;
            case '-2' : $reason = 'Flagged API Key - Too Many invalid access attempts - contact us'; break;
            case '-1' : $reason = 'Flagged API Key - Temporarily Disabled - contact us'; break;
            case '1' : $reason = 'Success -'; break;
            case '2' : $reason = 'Invalid API key - App must be granted a valid key by Humanity'; break;
            case '3' : $reason = 'Invalid token key - Please re-authenticate'; break;
            case '4' : $reason = 'Invalid Method - No Method with that name exists in our API'; break;
            case '5' : $reason = 'Invalid Module - No Module with that name exists in our API'; break;
            case '6' : $reason = 'Invalid Action - No Action with that name exists in our API'; break;
            case '7' : $reason = 'Authentication Failed - You do not have permissions to access the service'; break;
            case '8' : $reason = 'Missing parameters - Your request is missing a required parameter'; break;
            case '9' : $reason = 'Invalid parameters - Your request has an invalid parameter type'; break;
            case '10' : $reason = 'Extra parameters - Your request has an extra/unallowed parameter type'; break;
            case '12' : $reason = 'Create Failed - Your CREATE request failed'; break;
            case '13' : $reason = 'Update Failed - Your UPDATE request failed'; break;
            case '14' : $reason = 'Delete Failed - Your DELETE request failed'; break;
            case '20' : $reason = 'Incorrect Permissions - You don\'t have the proper permissions to access this'; break;
            case '90' : $reason = 'Suspended API key - Access for your account has been suspended, please contact Humanity'; break;
            case '91' : $reason = 'Throttle exceeded - You have exceeded the max allowed requests. Try again later.'; break;
            case '98' : $reason = 'Bad API Paramaters - Invalid POST request. See Manual.'; break;
            case '99' : $reason = 'Service Offline - This service is temporarily offline. Try again later.'; break;
            default : $reason = 'Error code not found'; break;
        }
        // return the reason text
        return $reason;
    }

    private function internal_errors( $errno )
    {// errors internal to the Humanity SDK
        switch( $errno )
        {// internal error messages
            case 1 :
                $message = 'The requested API method was not found in this SDK.';
                break;
            case 2 :
                $message = 'The Humanity API is not responding.';
                break;
            case 3 :
                $message = 'You must use the login method before accessing other modules of this API.';
                break;
            case 4 :
                $message = 'A session has not yet been established.';
                break;
            case 5 :
                $message = 'You must specify your Developer Key when using this SDK.';
                break;
            case 6 :
                $message = 'The Humanity SDK needs the CURL PHP extension.';
                break;
            case 7 :
                $message = 'The Humanity SDK needs the JSON PHP extension.';
                break;
            case 8 :
                $message = 'File doesn\'t exist.';
                break;
            case 9 :
                $message = 'Could not find the correct mime for the file supplied.';
                break;
            default :
                $message = 'Could not find the requested error message.';
                break;
        }
        return $message; exit;
    }

    private function api( )
    {// create the api call
        if( $this->_callback == null )
        {// method to call after successful api request
            $this->setCallback( 'getResponse' );
        }
        if( $this->getSession( ) )
        {// session already established, use token
            // remove the developer key from the request, since it's not necessary
            unset( $this->request['key'] );
            // set the token for this request, since the user is already authenticated
            $this->request['token'] = $_SESSION['token'];
        }
        else
        {// session has not been established, use developer key to access API
            try
            {//
                if( isset( $this->_key ) )
                {// developer key is set
                    $this->request['key'] = $this->_key;
                }
                else
                {// developer key is not set
                    throw new Exception( $this->internal_errors( 5 ) );
                }
            }
            catch( Exception $e )
            {//
                echo $e->getMessage( );
            }
        }
        // make the api request
        return $this->perform_request( );
    }

    private function getFileMimeType( $extension )
    {//
        $mimes = array(
            "ez" => "application/andrew-inset",
            "hqx" => "application/mac-binhex40",
            "cpt" => "application/mac-compactpro",
            "doc" => "application/msword",
            "bin" => "application/octet-stream",
            "dms" => "application/octet-stream",
            "lha" => "application/octet-stream",
            "lzh" => "application/octet-stream",
            "exe" => "application/octet-stream",
            "class" => "application/octet-stream",
            "so" => "application/octet-stream",
            "dll" => "application/octet-stream",
            "oda" => "application/oda",
            "pdf" => "application/pdf",
            "ai" => "application/postscript",
            "eps" => "application/postscript",
            "ps" => "application/postscript",
            "smi" => "application/smil",
            "smil" => "application/smil",
            "wbxml" => "application/vnd.wap.wbxml",
            "wmlc" => "application/vnd.wap.wmlc",
            "wmlsc" => "application/vnd.wap.wmlscriptc",
            "bcpio" => "application/x-bcpio",
            "vcd" => "application/x-cdlink",
            "pgn" => "application/x-chess-pgn",
            "cpio" => "application/x-cpio",
            "csh" => "application/x-csh",
            "dcr" => "application/x-director",
            "dir" => "application/x-director",
            "dxr" => "application/x-director",
            "dvi" => "application/x-dvi",
            "spl" => "application/x-futuresplash",
            "gtar" => "application/x-gtar",
            "hdf" => "application/x-hdf",
            "js" => "application/x-javascript",
            "skp" => "application/x-koan",
            "skd" => "application/x-koan",
            "skt" => "application/x-koan",
            "skm" => "application/x-koan",
            "latex" => "application/x-latex",
            "nc" => "application/x-netcdf",
            "cdf" => "application/x-netcdf",
            "sh" => "application/x-sh",
            "shar" => "application/x-shar",
            "swf" => "application/x-shockwave-flash",
            "sit" => "application/x-stuffit",
            "sv4cpio" => "application/x-sv4cpio",
            "sv4crc" => "application/x-sv4crc",
            "tar" => "application/x-tar",
            "tcl" => "application/x-tcl",
            "tex" => "application/x-tex",
            "texinfo" => "application/x-texinfo",
            "texi" => "application/x-texinfo",
            "t" => "application/x-troff",
            "tr" => "application/x-troff",
            "roff" => "application/x-troff",
            "man" => "application/x-troff-man",
            "me" => "application/x-troff-me",
            "ms" => "application/x-troff-ms",
            "ustar" => "application/x-ustar",
            "src" => "application/x-wais-source",
            "xhtml" => "application/xhtml+xml",
            "xht" => "application/xhtml+xml",
            "zip" => "application/zip",
            "au" => "audio/basic",
            "snd" => "audio/basic",
            "mid" => "audio/midi",
            "midi" => "audio/midi",
            "kar" => "audio/midi",
            "mpga" => "audio/mpeg",
            "mp2" => "audio/mpeg",
            "mp3" => "audio/mpeg",
            "aif" => "audio/x-aiff",
            "aiff" => "audio/x-aiff",
            "aifc" => "audio/x-aiff",
            "m3u" => "audio/x-mpegurl",
            "ram" => "audio/x-pn-realaudio",
            "rm" => "audio/x-pn-realaudio",
            "rpm" => "audio/x-pn-realaudio-plugin",
            "ra" => "audio/x-realaudio",
            "wav" => "audio/x-wav",
            "pdb" => "chemical/x-pdb",
            "xyz" => "chemical/x-xyz",
            "bmp" => "image/bmp",
            "gif" => "image/gif",
            "ief" => "image/ief",
            "jpeg" => "image/jpeg",
            "jpg" => "image/jpeg",
            "jpe" => "image/jpeg",
            "png" => "image/png",
            "tiff" => "image/tiff",
            "tif" => "image/tif",
            "djvu" => "image/vnd.djvu",
            "djv" => "image/vnd.djvu",
            "wbmp" => "image/vnd.wap.wbmp",
            "ras" => "image/x-cmu-raster",
            "pnm" => "image/x-portable-anymap",
            "pbm" => "image/x-portable-bitmap",
            "pgm" => "image/x-portable-graymap",
            "ppm" => "image/x-portable-pixmap",
            "rgb" => "image/x-rgb",
            "xbm" => "image/x-xbitmap",
            "xpm" => "image/x-xpixmap",
            "xwd" => "image/x-windowdump",
            "igs" => "model/iges",
            "iges" => "model/iges",
            "msh" => "model/mesh",
            "mesh" => "model/mesh",
            "silo" => "model/mesh",
            "wrl" => "model/vrml",
            "vrml" => "model/vrml",
            "css" => "text/css",
            "html" => "text/html",
            "htm" => "text/html",
            "asc" => "text/plain",
            "txt" => "text/plain",
            "rtx" => "text/richtext",
            "rtf" => "text/rtf",
            "sgml" => "text/sgml",
            "sgm" => "text/sgml",
            "tsv" => "text/tab-seperated-values",
            "wml" => "text/vnd.wap.wml",
            "wmls" => "text/vnd.wap.wmlscript",
            "etx" => "text/x-setext",
            "xml" => "text/xml",
            "xsl" => "text/xml",
            "mpeg" => "video/mpeg",
            "mpg" => "video/mpeg",
            "mpe" => "video/mpeg",
            "qt" => "video/quicktime",
            "mov" => "video/quicktime",
            "mxu" => "video/vnd.mpegurl",
            "avi" => "video/x-msvideo",
            "movie" => "video/x-sgi-movie",
            "ice" => "x-conference-xcooltalk"
        );
        try
        {//
            if( $mimes[ $extension ] )
            {// mime found
                return $mimes[ $extension ];
            }
            else
            {// mime not found
                throw new Exception( 'Mime for .' . $extension . ' not found' );
            }
        }
        catch( Exception $e )
        {//
            echo $e->getMessage( );
        }
    }

    private function getFileData( $file )
    {// get file details, (data, length, mimetype)
        try
        {//
            if( file_exists( $file ) )
            {// file
                $file_data['filedata'] = file_get_contents( $file );
                $file_data['filelength'] = strlen( $file_data['filedata'] );
                if( function_exists( 'mime_content_type' ) )
                {// mime_content_type function is available
                    $file_data['mimetype'] = mime_content_type( $file );
                }
                else
                {//
                    $parts = explode( '.', $file );
                    $extension = strtolower( $parts[ sizeOf( $parts ) - 1 ] );
                    $file_data['mimetype'] = $this->getFileMimeType( $extension  );
                }

                return array(
                    'filedata' => $file_data['filedata'],
                    'filelength' => $file_data['filelength'],
                    'mimetype' => $file_data['mimetype']
                );
            }
            else
            {//
                throw new Exception( $this->internal_errors( 8 ) );
            }
        }
        catch( Exception $e )
        {//
            echo $e->getMessage( ); exit;
        }
    }

    private function perform_request( )
    {// perform the api request
        try
        {//
            $ch = curl_init( self::API_ENDPOINT );

            $filedata = '';
            if( is_array( $this->requests ) )
            {//
                foreach( $this->requests as $key => $request )
                {//
                    if( isset($request['filedata']) && $request['filedata'] )
                    {//
                        $filedata = $request['filedata'];
                        unset( $this->requests[$key]['filedata'] );
                    }
                }
            }

            $post = $filedata ? array( 'data'=> json_encode( $this->getRequest( ) ),
                'filedata' => $filedata ) : array( 'data' => json_encode( $this->getRequest( ) ) );

            curl_setopt( $ch, CURLOPT_URL, self::API_ENDPOINT );
            curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 0 );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt( $ch, CURLOPT_POST, 1 );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $post );

            // return the response from the api
            $response = curl_exec( $ch );
            $http_response_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
            curl_close( $ch );

            if( $http_response_code == 200 )
            {// response from API was a successful
                $temp = json_decode( $response, true );
                // decode the response and store each call response in its own array
                $this->setResponse( $temp );
                if( $this->_init == 1 )
                {// initialize a session
                    $this->setSession( );
                }
                // raw response call
                $this->raw_response = $temp;
                if( $this->_debug == true )
                {// debug mode is on
                    $request = json_encode( $this->getRequest( ) );
                    $db = fopen('log.txt', 'a');
                    $tmp_vals = array( );
                    if( is_array( $this->response['data'][0] ) )
                    {//
                        foreach( $this->response['data'] as $n => $v )
                        {//
                            foreach( $v as $key => $val )
                            {//
                                $tmp_vals[$n][$key] = $val;
                            }
                        }
                    }
                    else
                    {//
                        foreach( $this->response['data'] as $n => $v )
                        {//
                            $tmp_vals[$n] = $v;
                        }
                    }
                    fwrite( $db, date('m-d-Y h:i a'). "\n" . 'REQUEST: ' . $request . "\n"
                        . 'RESPONSE STATUS: (' . $this->response['response'][0]['code']
                        . ') ' . $this->response['response'][0]['text'] . " -- " . $this->response['response'][0]['error'] . "\n"
                        . 'RESPONSE DATA: ' . json_encode( $tmp_vals ) . "\n\n" );
                    fclose( $db );
                }
                // perform the callback method
                return $this->{ $this->_callback }( );
            }
            else
            {// response from API was unsuccessful
                throw new Exception( $this->internal_errors( 2 ) );
            }
        }
        catch( Exception $e )
        {//
            echo $e->getMessage();
        }
    }



    /**
     ******************************************************************
     *************************** API Functions ************************
     ******************************************************************
     */

    /**
     * Returns all config properties used in Humanity for date, time, display and error codes.
     * Level 5 is required.
     *
     * @param array $params
     * @return mixed
     */
    public function getAPIConfig( $array_of_parameters = array( ) )
    {// get api config
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'api.config',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Returns a list of all methods supported by the Humanity API and their support variables and variable types.
     * Level 5 is required.
     *
     * @return mixed
     */
    public function getAPIMethods( )
    {// get all available api methods
        return $this->setRequest(
            array(
                'module' => 'api.methods',
                'method' => 'GET'
            )
        );
    }



    /**
     ******************************************************************
     ************************* Admin Functions ************************
     ******************************************************************
     */

    /**
     * Returns a list of all modules, methods and their support variables and types.
     * Level 5 is required.
     *
     * @return mixed
     */
    public function getAdminSettings( )
    {// get admin settings
        return $this->setRequest(
            array(
                'module' => 'admin.settings',
                'method' => 'GET'
            )
        );
    }

    /**
     * Updates admin settings.
     * Level 2 is required.
     *
     * @param array $settings
     * @return mixed
     */
    public function updateAdminSettings( $array_of_settings_data = array( ) )
    {// update admin settings
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'admin.settings',
                    'method' => 'UPDATE'
                ),
                $array_of_settings_data
            )
        );
    }

    /**
     * Returns the details for the organization of the currently logged in user.
     * Level 5 is required.
     *
     * @return mixed
     */
    public function getAdminDetails( )
    {// get admin details
        return $this->setRequest(
            array(
                'module' => 'admin.details',
                'method' => 'GET'
            )
        );
    }

    /**
     * Updates the details for the organization of the currently logged in user.
     * Level 2 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function updateAdminDetails( $array_of_admin_data = array( ) )
    {// update admin details
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'admin.details',
                    'method' => 'UPDATE'
                ),
                $array_of_admin_data
            )
        );
    }

    /**
     * Retrieves a list of all files uploaded into Humanity.
     * If training id is forwarded through parameter 'training' the module retrieves the Training Files.
     * If employee id is forwarded through parameter 'employee' the module retrieves the Employee Files.
     * If no parameters are forwarded module retrieves Admin Files.
     * Display limit is 50.
     * Level 5 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getAdminFiles( $array_of_parameters = array( ) )
    {// get admin files
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'admin.files',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves the setting details on a given file.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function getAdminFileDetails( $file_id )
    {// get admin file details
        return $this->setRequest(
            array(
                'module' => 'admin.file',
                'method' => 'GET',
                'id' => $file_id
            )
        );
    }

    /**
     * Updates details of any given file uploaded.
     * Level 5 is required.
     *
     * @param $id
     * @param array $details
     * @return mixed
     */
    public function updateAdminFile( $file_id, $array_of_file_data = array( ) )
    {// update admin file details
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'admin.file',
                    'method' => 'UPDATE',
                    'id' => $file_id
                ),
                $array_of_file_data
            )
        );
    }

    /**
     * Uploads and creates details for any given file.
     * Level 3 is required.
     *
     * @param array $file_details
     * @return mixed
     */
    public function createAdminFile( $array_of_file_data = array( ) )
    {// create new admin file
        $array_of_file_data = array_merge( $array_of_file_data, $this->getFileData( $array_of_file_data['filename'] ) );
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'admin.file',
                    'method' => 'CREATE'
                ),
                $array_of_file_data
            )
        );
    }

    /**
     * Deletes any given file and file details.
     * Level 3 is required.
     *
     * @param $id
     * @return mixed
     */
    public function deleteAdminFile( $file_id )
    {// delete admin file
        return $this->setRequest(
            array(
                'module' => 'admin.file',
                'method' => 'DELETE',
                'id' => $file_id
            )
        );
    }

    /**
     * Retrieves a list of all Backups uploaded into Humanity.
     * Display limit of 50.
     * Level 5 is required.
     *
     * @return mixed
     */
    public function getAdminBackups( )
    {// get admin backups
        return $this->setRequest(
            array(
                'module' => 'admin.backups',
                'method' => 'GET'
            )
        );
    }

    /**
     * Retrieves details of any given backup file.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function getAdminBackupDetails( $backup_id )
    {// get admin backup details
        return $this->setRequest(
            array(
                'module' => 'admin.backup',
                'method' => 'GET',
                'id' => $backup_id
            )
        );
    }

    /**
     * Creates new backup file and backup file details.
     * Level 5 is required.
     *
     * @param array $backup_details
     * @return mixed
     */
    public function createAdminBackup( $array_of_backup_data = array( )  )
    {// create an admin backup
        $array_of_backup_data = array_merge( $array_of_backup_data, $this->getFileData( $array_of_backup_data['filename'] ) );
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'admin.backup',
                    'method' => 'CREATE'
                ),
                $array_of_backup_data
            )
        );
    }

    /**
     * Deletes any given backup file and backup file details.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function deleteAdminBackup( $backup_id )
    {// delete an admin backup
        return $this->setRequest(
            array(
                'module' => 'admin.backup',
                'method' => 'DELETE',
                'id' => $backup_id
            )
        );
    }

    /**
     * Retrieves a count of all requests.  Available shifts, vacations needing approving, shifts needing approving,
     * shifts pickups needing approval, shift trades needing approval before or after, and shifts available to pickup.
     * Level 3 is required.
     *
     * @return mixed
     */
    public function getAdminNRequests( )
    {// get admin nrequest
        return $this->setRequest(
            array(
                'module' => 'admin.nrequest',
                'method' => 'GET'
            )
        );
    }

    /**
     * Retrieves a business details.
     * Level 5 is required.
     *
     * @return mixed
     */
    public function getAdminBusiness( )
    {// get admin business
        return $this->setRequest(
            array(
                'module' => 'admin.business',
                'method' => 'GET'
            )
        );
    }

    /**
     * Retrieves an employees group perms.
     * If you specify id, reteives selected employees perms.
     * Level 5 is required.
     *
     * @param array $params
     * @return mixed
     */
    public function getAdminGroupPerms( $array_of_parameters = array( ) )
    {// get admin group perms
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'admin.group_perms',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Updates an employees group perms.
     * Level 5 is required.
     *
     * @param array $group_perms
     * @return mixed
     */
    public function updateAdminGroupPerms( $array_of_perms_data = array( ) )
    {// update admin group perms
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'admin.group_perms',
                    'method' => 'UPDATE'
                ),
                $array_of_perms_data
            )
        );
    }



    /**
     ******************************************************************
     ********************** Messaging Functions ***********************
     ******************************************************************
     */

    /**
     * Returns an array that contains all user messages.
     * You can specify if you want to retrieve just send, or receive messages, with parater 'mode'.
     * Level 5 is required.
     *
     * @param string $mode
     * @return mixed
     */
    public function getMessages( $mode = 'to' )
    {// get messages for the currently logged in user
        return $this->setRequest(
            array(
                'module' => 'messaging.messages',
                'method' => 'GET',
                'mode'    => $mode
            )
        );
    }

    /**
     * Retrieves a specific message by id.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function getMessageDetails( $message_id )
    {// get message details for a specific message
        return $this->setRequest(
            array(
                'module' => 'messaging.message',
                'method' => 'GET',
                'id' => $message_id
            )
        );
    }

    /**
     * Creates a new message.
     * Level 5 is required.
     *
     * @param array $message
     * @return mixed
     */
    public function createMessage( $array_of_message_data = array( ) )
    {// create a new message
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'messaging.message',
                    'method' => 'CREATE'
                ),
                $array_of_message_data
            )
        );
    }

    /**
     * Updates a message.
     * Level 5 is required.
     *
     * @param array $message
     * @return mixed
     */
    public function updateMessage( $message_id, $array_of_message_data = array( ) )
    {// update messaging message
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'messaging.message',
                    'method' => 'UPDATE',
                    'id' => $message_id
                ),
                $array_of_message_data
            )
        );
    }

    /**
     * Deletes a message.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function deleteMessage( $message_id )
    {// delete a message
        return $this->setRequest(
            array(
                'module' => 'messaging.message',
                'method' => 'DELETE',
                'id' => $message_id
            )
        );
    }

    /**
     * Send a message to all staff in shift.
     * Level 5 is required.
     *
     * @param array $message_details
     * @return mixed
     */
    public function createShiftMessage( $array_of_message_data = array( ) )
    {// create messaging shift
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'messaging.shift',
                    'method' => 'CREATE'
                ),
                $array_of_message_data
            )
        );
    }

    /**
     * Get wall message and comments.
     * Level 5 is required.
     *
     * @return mixed
     */
    public function getWallMessages( )
    {// get message wall
        return $this->setRequest(
            array(
                'module' => 'messaging.wall',
                'method' => 'GET'
            )
        );
    }

    /**
     * Creates a new wall message or comment.
     * If message id is being specified, comment is added.  Else, new message is being created.
     * User can create new wall messages/comments, only if it is enabled in admin settings.
     * Level 5 is required.
     *
     * @param array $message
     * @return mixed
     */
    public function createWallMessage( $array_of_message_data = array( ) )
    {// create a wall message
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'messaging.wall',
                    'method' => 'CREATE'
                ),
                $array_of_message_data
            )
        );
    }

    /**
     * Deletes wall message or comment.
     * Level 5 is required.
     *
     * @param $id
     * @param array $details
     * @return mixed
     */
    public function deleteWallMessage( $message_id, $delete_what = 0 )
    {// delete a wall message
        return $this->setRequest(
            array(
                'module' => 'messaging.wall',
                'method' => 'DELETE',
                'id' => $message_id,
                'delete' => $delete_what
            )
        );
    }

    /**
     * Undocumented method, please update when available.
     *
     * @param array $params
     * @return mixed
     */
    public function getMessagingNotices( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'messaging.notices',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Undocumented method, please update when available.
     *
     * @param $id
     * @return mixed
     */
    public function getMessagingNoticeDetails( $notice_id )
    {// get messaging notice details for a specific message
        return $this->setRequest(
            array(
                'module' => 'messaging.notice',
                'method' => 'GET',
                'id' => $notice_id
            )
        );
    }

    /**
     * Undocumented method, please update when available.
     *
     * @param $id
     * @param array $details
     * @return mixed
     */
    public function updateMessagingNotice( $notice_id, $array_of_notice_data = array( ) )
    {// update messaging notice
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'messaging.notice',
                    'method' => 'UPDATE',
                    'id' => $notice_id
                ),
                $array_of_notice_data
            )
        );
    }

    /**
     * Undocumented method, please update when available.
     *
     * @param array $details
     * @return mixed
     */
    public function createMessagingNotice( $array_of_notice_data = array( ) )
    {// create messaging notice
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'messaging.notice',
                    'method' => 'CREATE'
                ),
                $array_of_notice_data
            )
        );
    }

    /**
     * Undocumented method, please update when available.
     *
     * @param $id
     * @return mixed
     */
    public function deleteMessagingNotice( $notice_id )
    {// delete messaging notice details for a specific message
        return $this->setRequest(
            array(
                'module' => 'messaging.notice',
                'method' => 'DELETE',
                'id' => $notice_id
            )
        );
    }



    /**
     ******************************************************************
     ************************ Reports Functions ***********************
     ******************************************************************
     */

    /**
     * Retrieves a list of schedule reports between selected dates.
     * Level 5 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsSchedule( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.schedule',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves budget reports, between selected dates.
     * Level 3 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsBudget( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.budget',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves a list of timesheet reports.
     * Level 5 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsTimesheets( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.timesheets',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves a list of employee's reports.
     * Level 5 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsEmployee( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.employee',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves a list of custom reports.
     * Level 3 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsCustom( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.custom',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Undocumented method, please update when available.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsDailyPeakHoursNew( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.daily_peak_hours_new',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves daily peak hours between selected dates.
     * Level 3 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsDailyPeakHours( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.daily_peak_hours',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Undocumented method, please update when available.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsGoogle( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.google',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Returns a list of worked units.
     * Level 5 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsWorkUnits( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.workunits',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Returns a list of worked units.
     * Level 5 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsWuDailyReport( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.wu_daily_report',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Undocumented method, please update when available.
     *
     * @param array $details
     * @return mixed
     */
    public function getReportsForecast( $array_of_parameters = array( ) )
    {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'reports.forecast',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }



    /**
     ******************************************************************
     *********************** Forecast Functions ***********************
     ******************************************************************
     */



    /**
     ******************************************************************
     ************************ Payroll Functions ***********************
     ******************************************************************
     */

    /**
     * Run payroll specific reports on schedule / time sheet data.
     * Level 3 is required.
     *
     * @param array $report_details
     * @return mixed
     */
    public function getPayrollReport( $array_of_parameters = array( ) )
    {// get payroll report
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'payroll.report',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Undocumented method, please update when available.
     *
     * @param array $report_details
     * @return mixed
     */
    public function getPayrollEnhancedReport( $array_of_parameters = array( ) )
    {// get payroll enhancedreport
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'payroll.enhancedreport',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves a list of payroll rate cards.
     * Level 5 is required.
     *
     * @return mixed
     */
    public function getRatecards( )
    {// get payroll ratecards
        return $this->setRequest(
            array(
                'module' => 'payroll.ratecards',
                'method' => 'GET'
            )
        );
    }

    /**
     * Retrieves a payroll rate card by id.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function getRatecardDetails( $ratecard_id )
    {// get payroll ratecard
        return $this->setRequest(
            array(
                'module' => 'payroll.ratecard',
                'method' => 'GET',
                'id' => $ratecard_id
            )
        );
    }

    /**
     * Creates a payroll rate card.
     * Level 3 is required.
     *
     * @param array $ratecard_details
     * @return mixed
     */
    public function createRatecard( $array_of_ratecard_data = array( ) )
    {// create payroll ratecard
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'payroll.ratecard',
                    'method' => 'CREATE'
                ),
                $array_of_ratecard_data
            )
        );
    }

    /**
     * Updates a payroll rate card.
     * Level 3 is required.
     *
     * @param $id
     * @param array $ratecard_details
     * @return mixed
     */
    public function updateRatecard( $ratecard_id, $array_of_ratecard_data = array( ) )
    {// update payroll ratecard
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'payroll.ratecard',
                    'method' => 'UPDATE',
                    'id' => $ratecard_id
                ),
                $array_of_ratecard_data
            )
        );
    }

    /**
     * Deletes a payroll rate card.
     * Level 3 is required.
     *
     * @param $id
     * @return mixed
     */
    public function deleteRatecard( $ratecard_id )
    {// delete payroll ratecard
        return $this->setRequest(
            array(
                'module' => 'payroll.ratecard',
                'method' => 'DELETE',
                'id' => $ratecard_id
            )
        );
    }


    /**
     ******************************************************************
     *********************** Schedule Functions ***********************
     ******************************************************************
     */

    /**
     * Retrieves a list of all schedules.
     * Level 5 is required.
     *
     * @return mixed
     */
    public function getSchedules( )
    {// get schedules
        return $this->setRequest(
            array(
                'module' => 'schedule.schedules',
                'method' => 'GET'
            )
        );
    }

    /**
     * Retrieves an individual schedule.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function getScheduleDetails( $schedule_id )
    {// get schedule details
        return $this->setRequest(
            array(
                'module' => 'schedule.schedule',
                'method' => 'GET',
                'id' => $schedule_id
            )
        );
    }

    /**
     * Creates an individual schedule.
     * Level 3 is required.
     *
     * @param array $schedule_details
     * @return mixed
     */
    public function createSchedule( $array_of_schedule_data = array( ) )
    {// create a new schedule
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.schedule',
                    'method' => 'CREATE'
                ),
                $array_of_schedule_data
            )
        );
    }

    /**
     * Updates an individual schedule
     * Level 3 is required.
     *
     * @param $id
     * @param array $schedule_details
     * @return mixed
     */
    public function updateSchedule( $schedule_id, $array_of_schedule_data = array( ) )
    {// update an existing schedule
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.schedule',
                    'method' => 'UPDATE',
                    'id' => $schedule_id
                ),
                $array_of_schedule_data
            )
        );
    }

    /**
     * Deletes an individual schedule.
     * Level 3 is required.
     *
     * @param $id
     * @return mixed
     */
    public function deleteSchedule( $schedule_id )
    {// delete an existing schedule
        return $this->setRequest(
            array(
                'module' => 'schedule.schedule',
                'method' => 'DELETE',
                'id' => $schedule_id
            )
        );
    }

    /**
     * Retrieves a list of shifts.
     * Level 5 is required.
     *
     * @param array $shift_filters
     * @return mixed
     */
    public function getShifts( $array_of_parameters = array() )
    {// get shifts
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.shifts',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves an individual shift.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function getShiftDetails( $shift_id )
    {// get shift details
        return $this->setRequest(
            array(
                'module' => 'schedule.shift',
                'method' => 'GET',
                'id' => $shift_id
            )
        );
    }

    /**
     * Updates an individual shift.
     * Level 3 is required.
     *
     * @param $id
     * @param array $shift_details
     * @return mixed
     */
    public function updateShift( $shift_id, $array_of_shift_data = array( ) )
    {// update shift details
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.shift',
                    'method' => 'UPDATE',
                    'id' => $shift_id
                ),
                $array_of_shift_data
            )
        );
    }

    /**
     * Creates an individual shift.
     * Level 3 is required.
     *
     * @param array $shift_details
     * @return mixed
     */
    public function createShift( $array_of_shift_data = array( ) )
    {// create a new shift
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.shift',
                    'method' => 'CREATE'
                ),
                $array_of_shift_data
            )
        );
    }

    /**
     * Deletes an individual shift.
     * Level 3 is required.
     *
     * @param $id
     * @return mixed
     */
    public function deleteShift( $shift_id )
    {// delete a shift
        return $this->setRequest(
            array(
                'module' => 'schedule.shift',
                'method' => 'DELETE',
                'id' => $shift_id
            )
        );
    }

    /**
     * Undocumented method, please update when available.
     *
     * @param array $params
     * @return mixed
     */
    public function getShiftHistory( $array_of_parameters = array( ) )
    {// get schedule shift history
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.shifthistory',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves an individual shift that needs approval.
     * Level 3 is required.
     *
     * @param $id
     * @return mixed
     */
    public function getShiftApproval( $approval_id )
    {// get schedule shift approval
        return $this->setRequest(
            array(
                'module' => 'schedule.shiftapprove',
                'method' => 'GET',
                'id' => $approval_id
            )
        );
    }

    /**
     * Confirms an individual shift.
     * Level 3 is required.
     *
     * @param $id
     * @return mixed
     */
    public function createShiftApproval( $shift_id )
    {// create schedule shift approval
        return $this->setRequest(
            array(
                'module' => 'schedule.shiftapprove',
                'method' => 'CREATE',
                'id' => $shift_id
            )
        );
    }

    /**
     * Updates an individual shift.
     * Level 3 is required.
     *
     * @param $id
     * @param array $shift_details
     * @return mixed
     */
    public function updateShiftApproval( $approval_id, $array_of_approval_data = array( ) )
    {// update a shift approval
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.shiftapprove',
                    'method' => 'UPDATE',
                    'id' => $approval_id
                ),
                $array_of_approval_data
            )
        );
    }

    /**
     * Retrieves a list of vacations.
     * Level 5 is required.
     *
     * @param array $time_period
     * @return mixed
     */
    public function getVacationSchedules( $array_of_parameters = array( ) )
    {// get schedule vacations, pass start and end params to get vacations within a certian time-period
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.vacations',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves an individual vacation.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function getVacationScheduleDetails( $vacation_id )
    {// get vacation schedule details
        return $this->setRequest(
            array(
                'module' => 'schedule.vacation',
                'method' => 'GET',
                'id' => $vacation_id
            )
        );
    }

    /**
     * Creates an individual vacation.
     * Level 5 is required.
     *
     * @param array $vacation_details
     * @return mixed
     */
    public function createVacationSchedule( $array_of_vacation_data = array( ) )
    {// create a vacation schedule
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.vacation',
                    'method' => 'CREATE'
                ),
                $array_of_vacation_data
            )
        );
    }

    /**
     * Updates an individual vacation.
     * Level 5 is required.
     *
     * @param $id
     * @param array $vacation_details
     * @return mixed
     */
    public function updateVacationSchedule( $vacation_id, $array_of_vacation_data = array( ) )
    {// update a vacation schedule
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.vacation',
                    'method' => 'UPDATE',
                    'id' => $vacation_id
                ),
                $array_of_vacation_data
            )
        );
    }

    /**
     * Deletes an individual vacation.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function deleteVacationSchedule( $vacation_id )
    {// delete a vacation schedule
        return $this->setRequest(
            array(
                'module' => 'schedule.vacation',
                'method' => 'DELETE',
                'id' => $vacation_id
            )
        );
    }

    /**
     * Retrieves a list of schedule conflicts.
     * Level 5 is required.
     *
     * @param array $time_period
     * @return mixed
     */
    public function getScheduleConflicts( $array_of_parameters = array( ) )
    {// get schedule conflicts
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'schedule.conflicts',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }



    /**
     ******************************************************************
     ********************** Timeclock Functions ***********************
     ******************************************************************
     */

    /**
     * Returns a list of schedules.
     * Level 5 is required.
     *
     * @param $details
     * @return mixed
     */
    public function getTimeclocks($array_of_parameters) {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'timeclock.timeclocks',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Returns array of timesheets for the specified period.
     * Level 5 is required.
     *
     * @param $details
     * @return mixed
     */
    public function getTimesheets($array_of_parameters) {
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'timeclock.timesheets',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }



    /**
     ******************************************************************
     ************************ Staff Functions *************************
     ******************************************************************
     */

    /**
     * Sends user login information.  Returns status, data and token.
     *
     * @param array $user
     * @return mixed
     */
    public function doLogin( $array_of_parameters = array( ) )
    {// perform a login api call
        return $this->setRequest(
            array(
                'module' => 'staff.login',
                'method' => 'GET',
                'username' => $array_of_parameters['username'],
                'password' => $array_of_parameters['password']
            )
        );
    }

    /**
     * Logs out current user.  Terminates valid token.
     * Level 5 is required.
     */
    public function doLogout( )
    {// erase token and user data from current session
        $this->destroySession( );
    }

    /**
     * Recieves details about current logged in user.
     * Level 7 required.
     *
     * @return mixed
     */
    public function getMe( )
    {// get staff me
        return $this->setRequest(
            array(
                'module' => 'staff.me',
                'method' => 'GET'
            )
        );
    }

    /**
     * Returns array of all employees (activated, not activated). If you have specified schedule or location,
     * it will return array of all employees related to specified schedule or location.
     * Disabled employees can be retrieved with parameter "disabled":1.
     * Not activated employees can be retrieved with "inactive":1.
     * Level 5 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getEmployees( $array_of_parameters = array( ) )
    {// get a list of employees
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'staff.employees',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Returns employee info.  You have to specify employee id or eid.
     * Level 5 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function getEmployeeDetails( $array_of_parameters = array( ) )
    {// get details for a specific employee
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'staff.employee',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Updates employees account.
     * Level 3 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function updateEmployee( $employee_id, $array_of_employee_data = array( ) )
    {// update an employee record
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'staff.employee',
                    'method' => 'UPDATE',
                    'id' => $employee_id
                ),
                $array_of_employee_data
            )
        );
    }

    /**
     * Creates new employee.
     * Level 3 is required.
     *
     * @param array $details
     * @return mixed
     */
    public function createEmployee( $array_of_employee_data = array( ) )
    {// create a new employee record
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'staff.employee',
                    'method' => 'CREATE'
                ),
                $array_of_employee_data
            )
        );
    }

    /**
     * Deletes employees account.
     * Level 3 is required.
     *
     * @param $id
     * @return mixed
     */
    public function deleteEmployee( $employee_id )
    {// delete an employee
        return $this->setRequest(
            array(
                'module' => 'staff.employee',
                'method' => 'DELETE',
                'id' => $employee_id
            )
        );
    }

    /**
     * Returns an array of all skills.
     * Level 5 is required.
     *
     * @return mixed
     */
    public function getStaffSkills( )
    {// get staff skills
        return $this->setRequest(
            array(
                'module' => 'staff.skills',
                'method' => 'GET'
            )
        );
    }

    /**
     * Returns skill specified by id.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function getStaffSkillDetails( $skill_id )
    {// get staff skill details
        return $this->setRequest(
            array(
                'module' => 'staff.skill',
                'method' => 'GET',
                'id' => $skill_id
            )
        );
    }

    /**
     * Creates a new skill.
     * Level 5 is required.
     *
     * @param array $skill_details
     * @return mixed
     */
    public function createStaffSkill( $array_of_skill_data = array( ) )
    {// create staff skill
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'staff.skill',
                    'method' => 'CREATE'
                ),
                $array_of_skill_data
            )
        );
    }

    /**
     * Updates a skill.
     * Level 5 is required.
     *
     * @param $id
     * @param array $skill_details
     * @return mixed
     */
    public function updateStaffSkill( $skill_id, $array_of_skill_data = array( ) )
    {// update staff skill
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'staff.skill',
                    'method' => 'UPDATE',
                    'id' => $skill_id
                ),
                $array_of_skill_data
            )
        );
    }

    /**
     * Deletes a skill.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function deleteStaffSkill( $skill_id )
    {// delete staff skill
        return $this->setRequest(
            array(
                'module' => 'staff.skill',
                'method' => 'DELETE',
                'id' => $skill_id
            )
        );
    }

    /**
     * Ping a user.
     * Level 5 is required.
     *
     * @param array $ping_data
     * @return mixed
     */
    public function createPing( $array_of_parameters = array( ) )
    {// create a ping
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'staff.ping',
                    'method' => 'CREATE'
                ),
                $array_of_parameters
            )
        );
    }



    /**
     ******************************************************************
     ******************** Availability Functions **********************
     ******************************************************************
     */



    /**
     ******************************************************************
     *********************** Location Functions ***********************
     ******************************************************************
     */

    /**
     * Returns an array that contains all locations.
     * Level 5 is required.
     *
     * @param array $location_details
     * @return mixed
     */
    public function getLocations( $array_of_parameters = array( ) )
    {// get location locations
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'location.locations',
                    'method' => 'GET'
                ),
                $array_of_parameters
            )
        );
    }

    /**
     * Retrieves an individual location specified by id.
     * Level 5 is required.
     *
     * @param array $location_details
     * @return mixed
     */
    public function getLocationDetails( $location_id )
    {// get location location
        return $this->setRequest(
            array(
                'module' => 'location.location',
                'method' => 'GET',
                'id' => $location_id
            )
        );
    }

    /**
     * Creates a new location.
     * Level 5 is required.
     *
     * @param array $location_details
     * @return mixed
     */
    public function createLocation( $array_of_location_data = array( ) )
    {// create location location
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'location.location',
                    'method' => 'CREATE'
                ),
                $array_of_location_data
            )
        );
    }

    /**
     * Updates a location.
     * Level 5 is required.
     *
     * @param $id
     * @param array $location_details
     * @return mixed
     */
    public function updateLocation( $location_id, $array_of_location_data = array( ) )
    {// update location location
        return $this->setRequest(
            array_merge(
                array(
                    'module' => 'location.location',
                    'method' => 'UPDATE',
                    'id' => $location_id
                ),
                $array_of_location_data
            )
        );
    }

    /**
     * Deletes a location.
     * Level 5 is required.
     *
     * @param $id
     * @return mixed
     */
    public function deleteLocation( $location_id )
    {// delete location location
        return $this->setRequest(
            array(
                'module' => 'location.location',
                'method' => 'DELETE',
                'id' => $location_id
            )
        );
    }


    /**
     ******************************************************************
     *********************** Training Functions ***********************
     ******************************************************************
     */



    /**
     ******************************************************************
     ************************ Group Functions *************************
     ******************************************************************
     */


    /**
     ******************************************************************
     ************************ Sales Functions *************************
     ******************************************************************
     */


    /**
     ******************************************************************
     ********************** Dashboard Functions ***********************
     ******************************************************************
     */


    /**
     ******************************************************************
     *********************** Terminal Functions ***********************
     ******************************************************************
     */



}
