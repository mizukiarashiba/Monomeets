{"filter":false,"title":"2018_06_25_124456_create_user_follow_table.php","tooltip":"/tasklist/database/migrations/2018_06_25_124456_create_user_follow_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":15,"column":7},"end":{"row":18,"column":11},"action":"remove","lines":[" Schema::create('user_follow', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });"],"id":2},{"start":{"row":15,"column":7},"end":{"row":27,"column":11},"action":"insert","lines":[" Schema::create('user_follow', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->integer('follow_id')->unsigned()->index();","            $table->timestamps();","","            // Foreign key setting","            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');","            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');","","            // Do not allow duplication of combination of user_id and follow_id","            $table->unique(['user_id', 'follow_id']);","        });"]}]]},"ace":{"folds":[],"scrolltop":212.3203125,"scrollleft":0,"selection":{"start":{"row":20,"column":0},"end":{"row":20,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529901484882,"hash":"5e7e5956f041b3c3a1449f7e6793d0acefb0545f"}