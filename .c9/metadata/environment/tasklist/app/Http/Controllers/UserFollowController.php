{"filter":false,"title":"UserFollowController.php","tooltip":"/tasklist/app/Http/Controllers/UserFollowController.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":2},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":18,"column":5},"action":"insert","lines":["public function store(Request $request, $id)","    {","        \\Auth::user()->follow($id);","        return redirect()->back();","    }","","    public function destroy($id)","    {","        \\Auth::user()->unfollow($id);","        return redirect()->back();","    }"],"id":3}],[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":6,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["use Illuminate\\Http\\Request;","","use App\\Http\\Requests;","","use App\\Task;",""],"id":5}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":0},"end":{"row":11,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529904862593,"hash":"8281dee5a66115e09bddd3297844496900d7a378"}