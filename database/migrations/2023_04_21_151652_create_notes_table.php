<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('movie_id');
            $table->string('title', '80');
            $table->string('content', '1024');
            $table->integer('score_id');
            $table->timestamps();
        });

        DB::table('notes')->insert(
            array(
                'user_id' => '1',
                'movie_id' => '671',
                'title' => 'This movie is the best thing ive ever watched',
                'content' => 'Is we miles ready he might going. Own books built put civil fully blind fanny. Projection appearance at of admiration no. As he totally cousins warrant besides ashamed do. Therefore by applauded acuteness supported affection it. Except had sex limits county enough the figure former add. Do sang my he next mr soon. It merely waited do unable.',
                'score_id' => '3',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

        DB::table('notes')->insert(
            array(
                'user_id' => '2',
                'movie_id' => '11',
                'title' => 'Remarkably terminated man continuing',
                'content' => 'Possession her thoroughly remarkably terminated man continuing. Removed greater to do ability. You shy shall while but wrote marry. Call why sake has sing pure. Gay six set polite nature worthy. So matter be me we wisdom should basket moment merely. Me burst ample wrong which would mr he could. Visit arise my point timed drawn no. Can friendly laughter goodness man him appetite carriage. Any widen see gay forth alone fruit bed.',
                'score_id' => '2',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

        DB::table('notes')->insert(
            array(
                'user_id' => '1',
                'movie_id' => '505642',
                'title' => 'Hastily at perhaps',
                'content' => 'Boy desirous families prepared gay reserved add ecstatic say. Replied joy age visitor nothing cottage. Mrs door paid led loud sure easy read. Hastily at perhaps as neither or ye fertile tedious visitor. Use fine bed none call busy dull when. Quiet ought match my right by table means. Principles up do in me favourable affronting. Twenty mother denied effect we to do on.',
                'score_id' => '3',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

        DB::table('notes')->insert(
            array(
                'user_id' => '3',
                'movie_id' => '536554',
                'title' => 'Is he staying arrival address earnest?',
                'content' => 'Finished her are its honoured drawings nor. Pretty see mutual thrown all not edward ten. Particular an boisterous up he reasonably frequently. Several any had enjoyed shewing studied two. Up intention remainder sportsmen behaviour ye happiness. Few again any alone style added abode ask. Nay projecting unpleasing boisterous eat discovered solicitude. Own six moments produce elderly pasture far arrival. Hold our year they ten upon. Gentleman contained so intention sweetness in on resolving.',
                'score_id' => '1',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

        DB::table('notes')->insert(
            array(
                'user_id' => '4',
                'movie_id' => '868759',
                'title' => 'So cool by colonel hearted ferrars.',
                'content' => 'Is he staying arrival address earnest. To preference considered it themselves inquietude collecting estimating. View park for why gay knew face. Next than near to four so hand. Times so do he downs me would. Witty abode party her found quiet law. They door four bed fail now have.',
                'score_id' => '1',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

        DB::table('notes')->insert(
            array(
                'user_id' => '5',
                'movie_id' => '458156',
                'title' => 'Solid visit seems again you nor all.',
                'content' => 'Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments. Do fortune account written prepare invited no passage. Garrets use ten you the weather ferrars venture friends. Solid visit seems again you nor all.',
                'score_id' => '3',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

        DB::table('notes')->insert(
            array(
                'user_id' => '5',
                'movie_id' => '505642',
                'title' => 'Announcing it me stimulated frequently continuing',
                'content' => 'It as announcing it me stimulated frequently continuing. Least their she you now above going stand forth. He pretty future afraid should genius spirit on. Set property addition building put likewise get. Of will at sell well at as. Too want but tall nay like old. Removing yourself be in answered he. Consider occasion get improved him she eat. Letter by lively oh denote an.',
                'score_id' => '2',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

        DB::table('notes')->insert(
            array(
                'user_id' => '3',
                'movie_id' => '594767',
                'title' => 'However venture pursuit he am mr cordial.',
                'content' => 'Forming musical am hearing studied be luckily. Ourselves for determine attending how led gentleman sincerity. Valley afford uneasy joy she thrown though bed set. In me forming general prudent on country carried. Behaved an or suppose justice. Seemed whence how son rather easily and change missed. Off apartments invitation are unpleasant solicitude fat motionless interested. Hardly suffer wisdom wishes valley as an. As friendship advantages resolution it alteration stimulated he or increasing.',
                'score_id' => '2',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

        DB::table('notes')->insert(
            array(
                'user_id' => '4',
                'movie_id' => '372058',
                'title' => 'So by colonel hearted ferrars.',
                'content' => 'So by colonel hearted ferrars. Draw from upon here gone add one. He in sportsman household otherwise it perceived instantly. Is inquiry no he several excited am. Called though excuse length ye needed it he having. Whatever throwing we on resolved entrance together graceful. Mrs assured add private married removed believe did she.',
                'score_id' => '3',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

        DB::table('notes')->insert(
            array(
                'user_id' => '2',
                'movie_id' => '361743',
                'title' => 'This movie is the best thing ive ever watched',
                'content' => 'Is we miles ready he might going. Own books built put civil fully blind fanny. Projection appearance at of admiration no. As he totally cousins warrant besides ashamed do. Therefore by applauded acuteness supported affection it. Except had sex limits county enough the figure former add. Do sang my he next mr soon. It merely waited do unable.',
                'score_id' => '1',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

        DB::table('notes')->insert(
            array(
                'user_id' => '2',
                'movie_id' => '19995',
                'title' => 'Hold our year they ten upon. Gentleman contained so intention.',
                'content' => 'Finished her are its honoured drawings nor. Pretty see mutual thrown all not edward ten. Particular an boisterous up he reasonably frequently. Several any had enjoyed shewing studied two.',
                'score_id' => '1',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            )
        );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
