Mp3 Player
How it works:
1. All song are located in folder "/mp3/"; ALL MP3 NAMES MUST BE WITHOUT BLANKSPACES!!!!!!!!!!!!!!!

2. Method  {$mpObject = new MpServerList(); $mpObject->getMp3List("mp3");} in Classes/MpServerList.php scan the folder and creates list with button  "Play" and "Download".
   Every "Play" button contains relevant play image {<i class='fa fa-play>} with id that matches song name.
   Every "Download" button contains relevant download image {<i class='fa fa-download>} and wrapped to <a href> to php file that makes downloading.
     <a href='Classes/downloadmp3.php?file=" . $mp3Path . >, where {$mp3Path} is  relevant path, recieved by { dirname(__DIR__) . "/mp3/" .	$files[$i];}

3. When u click "Play" button, it triggers {function playTrack(idX)} in (js/mp3_servers.js)-> we get id of the clicked "Play" button which is the same as song, sets {audio.src='mp3/' + id;} and play by {audio.play();}
   {audio} is the PLAYER variable, received by  {audio = document.getElementById("audio");}
   Also it sets song title in Player with {setPlayerSongTitle(name);}
 
4. Reloop/repeat one song is activated by custom checkbox, if it is checked, we set {audio.loop = true;}  in {$("#myCheck").click(function()}

5. Play all songs/play next song when previous ends (as player does not play the next song by default)->
   #first we create a JS array with all song. It is possible to create a Php array with songs, but had troubles passing it to JS. 
    So, we assign every song(Play button) a special class="songCount" and with that can count all songs or iterate over them {$(".songCount").each(function()}
   #In this iteration we get the id of the 1st child of this button( it is {<i class='fa fa-play>} with id as the song) and adds this id to {js_AllSongsArray}
   #Then when one song ends {$("#audio").bind('ended', function()}, we check if {Reloop/repeat one song}is not checked, and if not check play all song in queque: gets the current song (audio.src),
   finds it's indexOf in {js_AllSongsArray} and set audio.src with next track/js_AllSongsArray element = {audio.src='mp3/' + js_AllSongsArray[number + 1];}
   
6. Play or Pause Icons are changed with {function changePlayPauseIcon($(this))} (only for songs in all song list)


#change play/pause icons, setting/removing eq image on Player click
#new scroll

describe mega error with zzz.hosting, when url was "mp3" , not "mp3_server", and relevant path to music was zzz.......mp3/mp3/song.mp3 and on split left the id path as "mp/song.mp3", not pure "song.mp3".Solution just rename zz hosting to mp3_server and path now 'zzz.......mp3_server/mp3/song.mp3'



//===========================
Validation.
Rules for song name validation: only latin, no blankspace, no "/mp3/"

Front-end validation:
checks:(if Eng only, no russ, can contain[- _  0-9]).


Back-end validation:
checks: (if actual image + if file already exists + file size + if certain formats(jpg, png)).



//=============================================================
Known Errors: in mobile click on Audio.Player play/pause button does stop/start playing but does not change play/pause icons in all song list



//==============================
Admin authentication.
Admin folder is admin section, where u can upload mp3.
How Admin authentication works:
1.It is based on var $_SESSION['auth7754321'] (true/false);
2. Admin/Classes/authentication.php checks if $_SESSION['auth7754321'] is set. If TRUE, it redirect to admin/index.php, admin/index.php onece agian check if   $_SESSION['auth7754321'] isset, if not ->die("No access");
3. Admin/Classes/authentication.php checks if $_SESSION['auth7754321'] is set. If FALSE, it display login/pass form.
4. Users log/pass are stored in array $usersX, if u click form submit button, php checks if input value for loginX exists in $usersX as a key, if true, checks if this key value == password input. If true, set $_SESSION['auth7754321'].


