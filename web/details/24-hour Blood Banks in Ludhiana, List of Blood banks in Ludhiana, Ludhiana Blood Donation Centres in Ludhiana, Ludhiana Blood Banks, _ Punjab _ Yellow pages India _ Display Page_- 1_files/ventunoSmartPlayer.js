/*********************
$LastChangedDate: 2016-02-25 17:54:11 +0530 (Thu, 25 Feb 2016) $
$Rev: 10660 $
$Author: arun $
********************/
/*
 __   ________  __   __  ______ __  __  __   __  ______    
/\ \ / /\  ___\/\ "-.\ \/\__  _/\ \/\ \/\ "-.\ \/\  __ \   
\ \ \'/\ \  __\\ \ \-.  \/_/\ \\ \ \_\ \ \ \-.  \ \ \/\ \  
 \ \__| \ \_____\ \_\\"\_\ \ \_\\ \_____\ \_\\"\_\ \_____\ 
  \/_/   \/_____/\/_/ \/_/  \/_/ \/_____/\/_/ \/_/\/_____/ 
                                                           
((((((((((((((INDIA'S LEADING VIDEO ECOSYSTEM))))))))))))))
*/ 
// JavaScript Document
/*
    * 
    * @author Ventuno Technologies.
    * ver.1.2.2.2
    * 
*/
var __vtnNotAllowedIDs=[
        '1477'//kannadaprabha/
    ],
    __vtnNotAllowedHashs=[
        '523bf65fcd481'//kannadaprabha/
    ],
    __vtnNotAllowedKeys=[
        '4e997f608d6b8' //Sify
    ],
    __vtnAllowedFlexIDs=[
        '698'//Sify/
    ]    
    
    
var VTN_version="1.0.5.4", VTN_sl=[],VTN_UUID="",vtnSPL;
function VTN_loadFilesASync(sc, si, LCB) {
    if(sc[si]) {
        var f=document.createElement('script');
        f.setAttribute("type","text/javascript");
        f.setAttribute("src", sc[si]);
        f.onload=function() {
            si=si+1;
            VTN_loadFilesASync(sc, si, LCB);
        };
        document.getElementsByTagName("head")[0].appendChild(f);
    }
    else {
        if(LCB) LCB();
    }
};
function VTN_loadFilesSync(sc, si, LCB) {
    if(sc[si]) {
        document.write( '<script type="text/javascript" src="'+sc[si]+'"></script>' );
        si=si+1;
        VTN_loadFilesSync(sc, si, LCB);
    }
    else {
        return "done";
    }
};
function __vtnHitTracker( _call ) {
    var i;
    if( typeof _call == "undefined" )
        return "";
    i = new Image(1,1);
    i.src = _call;    
    return false; 
};
function __vtnHitBeacon( _keyObj ){    
    __vtnHitTracker( vtnCFG.beaconurl + 'plugins/beacon.gif?type=script;status='+_keyObj['status']+';phash='+_keyObj['pHash']+';pid='+_keyObj['pID']+';pfid='+_keyObj['pTyp']+';slotid='+_keyObj['slotID']+';did=0;vid='+_keyObj['vKey']+';stamp='+_keyObj['stamp']+'' );
};
function VTN_checkScriptLoaded(str) {
    var sl = document.getElementsByTagName('script');
	var sTag
    var regMatch = new RegExp(str,'i'), sTarget;
    for( sTag in sl ) {
        if(sl[sTag].tagName && sl[sTag].getAttribute("src") && sl[sTag].getAttribute("src").match(regMatch)!==null){
            sTarget = sl[sTag];
            if( sTarget.getAttribute("async") == "" || sTarget.getAttribute("async") == "async" || sTarget.getAttribute("async") == true  ) return true;
        };
    }
    return false;
};

vtnCFG={
    responsive:false,
    html5ver:"3.3.0.6",
    fltWidgetVer:"1.0.0.4",
    pcViewVer:"1.0.3.4",
    errorDiv:"",
    targetDivID:'vnVideoPlayerContent',
    plpTargetDivID:'vtnplaylistplayer',
    playerObject:'VentunoMediaPlayerPhase1',
    plpObject:'VentunoMediaPlayerPhase1',
    html5Player:"",
    beaconurl:'http://venlog-1542946650.us-west-2.elb.amazonaws.com/',
    ppi:(function(){
        var ro = {};
        ro.async = (function(){
            if( typeof vtn_async_flag !== "undefined" && vtn_async_flag == 1 ) return 1; 
            if( typeof vn_asyn !== "undefined" && vn_asyn == 1 ) return 1; 
            if( VTN_checkScriptLoaded("ventunoSmartPlayer") || VTN_checkScriptLoaded("ventuno_player") || VTN_checkScriptLoaded("ventuno_playlist_player") || VTN_checkScriptLoaded("ventuno_cp") || VTN_checkScriptLoaded("ventuno_editorial_player")  ) return 1; 
            return 0; 
        })();
        ( ro.async==1 )?ro.loadMethod=VTN_loadFilesASync:ro.loadMethod=VTN_loadFilesSync;
        return ro;
    })()
};
var __vtnNewCode = ( typeof window['vtn_ep'] !== 'undefined' && window['vtn_ep'] ) || ( typeof window['__ventunoplayer'] !== 'undefined' && window['__ventunoplayer'] && window['__ventunoplayer']['length'] );
if(  __vtnNewCode  ){
    var __vtnVPlU = ( typeof __vtnVPlU !== 'undefined' || __vtnVPlU )? __vtnVPlU:{
        players:[],
        loadMethod:'',
        configs:{ep:0},
        paths:{ptc:'http://',cdn:'lmaflv.edgesuite.net',card:'ventuno_evcard.min.js',cardVer:'1.0.2.7',lib:'ventuno-lib.v2.min.js',libVer:'2.0.1.4'},
        processCode:function(){
            var t = this,
                runner = function(){
                    var pInf = window['__ventunoplayer'],
                        pCode,
                        i,l = pInf.length;
                    for( i=0; i<l; i++ ){
                        pCode = pInf[i];
                        if( pCode ){
                            if( pCode['flush'] ){
                                window['__ventunoplayer'] = [];
                            } else 
                                t.objectify( pCode );
                        };
                    };                    
                };
                
            if( window['vtn_ep'] ){
                window['vtn_ep'] = false;
                if( window['vtn_publisher_id'] && window['vtn_slot_id'] ){
                    window.__ventunoplayer = window.__ventunoplayer||[];
                    window.__ventunoplayer.push({ publisher_id:window['vtn_publisher_id'],slot_id:window['vtn_slot_id'],holder_id:'vtnEditorialPlayer', player_type:'ep',ratio:(window['vtn_ratio']||'16:9'),fallbackTagID:(window['fallback_tag_id']||''),category:(window['vtn_category']||'')});
                    window.__ventunoplayer.push({ flush:true }); 
                    runner();
                };
            } else 
                runner();
        },
        objectify:function( _pCode ){
            var t = this,
                path,
                pCode = _pCode||{};
            __vtnHitBeacon({
                'status':'request',
                'stamp':new Date().getTime(),
                'pTyp':pCode['player_type'],
                'vKey':pCode['video_key']||'',
                'pID':pCode['publisher_id']||(pCode['playlist_key']?pCode['playlist_key'].split("-")[1]:''),
                'pHash':pCode['publisher_code']||'',
                'slotID':pCode['slot_id']||'0'
            });
            pCode['async'] = ( pCode['async'] || VTN_checkScriptLoaded( "ventunoSmartPlayer" ) )? 1:0; 
            if( pCode['player_type'] && pCode['publisher_id'] && pCode['slot_id'] && pCode['holder_id'] ){    
                if( pCode['player_type'] == 'epc' ){
                    if( typeof __vtnEVCardW !== 'undefined' && __vtnEVCardW && __vtnEVCardW['bootUp'] ){
                        __vtnEVCardW.bootUp( pCode );
                    } else {
                        t.players.push( pCode );
                        t.loadMethod = ( pCode['async'] )? VTN_loadFilesASync : VTN_loadFilesSync;
                        path = t.paths;
                        t.loadMethod( [ path.ptc +''+ path.cdn+'/'+path.card+'?ver='+path.cardVer ], 0 );
                    };
                } else if( pCode['player_type'] == 'epbc' ){
                    if( typeof __vtnEVCardW !== 'undefined' && __vtnEVCardW && __vtnEVCardW['bootUp'] ){
                        __vtnEVCardW.bootUp( pCode );
                    } else {
                        t.players.push( pCode );
                        
                        t.loadMethod = ( pCode['async'] )? VTN_loadFilesASync : VTN_loadFilesSync;
                        path = t.paths;
                        t.loadMethod( [ path.ptc +''+ path.cdn+'/ventuno_banner_evcard.min.js?ver='+path.cardVer ], 0 );
                    };
                } else if( pCode['player_type'] == 'ep' ){
                    if( typeof __vtnLib !== 'undefined' && __vtnLib && __vtnLib['bootUp'] ){
                        __vtnLib.bootUp( pCode );
                    } else {
                        t.players.push( pCode );
                        t.loadMethod = ( pCode['async'] || VTN_checkScriptLoaded( "ventunoSmartPlayer" ) )? VTN_loadFilesASync : VTN_loadFilesSync;
                        path = t.paths;
                        t.loadMethod( [ path.ptc +''+ path.cdn+'/'+path.lib+'?ver='+path.libVer ], 0 );
                    };
                };
            };
        }
    };
    __vtnVPlU.processCode();
} else {
    
    __vtnHitBeacon({
        'status':'request',
        'stamp':new Date().getTime(),
        'pTyp':( typeof vtn_ep !== "undefined" && vtn_ep  )?'ep':( typeof vn_fp !== "undefined" && vn_fp === 'true' )?'fp':( typeof vtn_player_type !== "undefined" && vtn_player_type )? vtn_player_type:'unknown',
        'vKey':( typeof ven_video_key !== "undefined" && ven_video_key )? ven_video_key:'',
        'pID':( function(){
                var pid = ( typeof vtn_publisher_id !== "undefined" &&  vtn_publisher_id )? vtn_publisher_id:'';
                pid = ( pid )? pid:( typeof ven_playlist_key !== "undefined" && ven_playlist_key )?ven_playlist_key.split("-")[1]:'';
                return pid;
            })(),
        'pHash':( typeof vn_publisher_code !== "undefined" && vn_publisher_code )? vn_publisher_code:'',
        'slotID':( function(){
                var sid = ( typeof vn_slot_id !== "undefined" && vn_slot_id )? vn_slot_id:'0';
                sid = ( typeof vtn_slot_id !== "undefined" && vtn_slot_id )? vtn_slot_id:sid;
                sid = ( typeof vn_fp_slot_id !== "undefined" && vn_fp_slot_id )? vn_fp_slot_id:sid;
                return sid
            })()
    });
    VTN_sl.push('http://lmaflv.edgesuite.net/ventuno_lib.min.js?ver='+VTN_version);
    vtnCFG.ppi.loadMethod(VTN_sl, 0);
}
/*
           _               _       _         _   _                                     
          | |             (_)     (_)       | | | |                                    
 __      _| |__  _   _     _  ___  _ _ __   | |_| |__   ___   _ __   __ ___   ___   _  
 \ \ /\ / / '_ \| | | |   | |/ _ \| | '_ \  | __| '_ \ / _ \ | '_ \ / _` \ \ / / | | | 
  \ V  V /| | | | |_| |   | | (_) | | | | | | |_| | | |  __/ | | | | (_| |\ V /| |_| | 
   \_/\_/ |_| |_|\__, |   | |\___/|_|_| |_|  \__|_| |_|\___| |_| |_|\__,_| \_/  \__, | 
                  __/ |  _/ |                                                    __/ | 
                 |___/  |__/                                                    |___/  
           _                                                        _                          _           _       
          | |                                                      | |                        (_)         | |      
 __      _| |__   ___ _ __    _   _  ___  _   _    ___ __ _ _ __   | |__   ___    __ _   _ __  _ _ __ __ _| |_ ___ 
 \ \ /\ / / '_ \ / _ \ '_ \  | | | |/ _ \| | | |  / __/ _` | '_ \  | '_ \ / _ \  / _` | | '_ \| | '__/ _` | __/ _ \
  \ V  V /| | | |  __/ | | | | |_| | (_) | |_| | | (_| (_| | | | | | |_) |  __/ | (_| | | |_) | | | | (_| | ||  __/
   \_/\_/ |_| |_|\___|_| |_|  \__, |\___/ \__,_|  \___\__,_|_| |_| |_.__/ \___|  \__,_| | .__/|_|_|  \__,_|\__\___|
                               __/ |                                                    | |                        
                              |___/                                                     |_|                        

Steve Jobs (1955 ~ 2011)              
*/
