{"filter":false,"title":"2018_06_15_104325_create_tasks_3.php","tooltip":"/tasklist/database/migrations/2018_06_15_104325_create_tasks_3.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":15,"column":7},"end":{"row":18,"column":11},"action":"remove","lines":[" Schema::create('tasks', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });"],"id":2}],[{"start":{"row":15,"column":7},"end":{"row":24,"column":70},"action":"insert","lines":[" Schema::create('tasks', function (Blueprint $table) {","           ","             $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->string('status');","            $table->string('content'); ","            $table->timestamps();","            ","            // Foreign key constraint","            $table->foreign('user_id')->references('id')->on('users');"],"id":3}],[{"start":{"row":24,"column":70},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":25,"column":0},"end":{"row":25,"column":12},"action":"insert","lines":["            "]},{"start":{"row":25,"column":12},"end":{"row":26,"column":0},"action":"insert","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":16},"action":"insert","lines":[" });"],"id":5},{"start":{"row":26,"column":0},"end":{"row":26,"column":13},"action":"remove","lines":["             "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":37},"action":"remove","lines":["$table->string('status');"],"id":7},{"start":{"row":19,"column":8},"end":{"row":19,"column":12},"action":"remove","lines":["    "]},{"start":{"row":19,"column":4},"end":{"row":19,"column":8},"action":"remove","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"remove","lines":["    "]},{"start":{"row":18,"column":60},"end":{"row":19,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":38},"action":"remove","lines":[" $table->increments('id');"],"id":8},{"start":{"row":17,"column":8},"end":{"row":17,"column":12},"action":"remove","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":24},"end":{"row":13,"column":24},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":0,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1529027462826,"hash":"b50a5553142df9e980419acaee685c4dd952087a"}