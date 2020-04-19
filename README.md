<h3> To debug queue use sync!!! </h2>
.env QUEUE_CONNECTION=beanstalkd to select type of queue <br>
if you chnged queue type(sync, database, beanstalkd, sqs, redis) <b>./artisan config:cache</b><br>
to restart job <b>php artisan queue:restart</b><br>
if does't work <b>composer dump-autoload </b>

<ul>
    <li>to start jobs database <b>./artisan queue:work</b></li>
    <li>to start jobs beanstalkd
        <ol>
            <li><b>composer require pda/pheanstalk</b></li>
            <li><b>sudo apt-get update</b> <br> <b>sudo apt-get install beanstalkd</b></li>
            <li>fill <b>ssudo nano /etc/supervisor/conf.d/myqueue.conf</b>
                <pre>
                    [program:laravel-worker.my-test-worker]
                    process_name=%(program_name)s_%(process_num)02d
                    command=php artisan queue:work --queue=myTestWorker --tries=1 --timeout=7200 --daemon
                    directory=/home/vagrant/code/laravel.example.loc
                    autostart=true
                    autorestart=true
                    user=vagrant
                    numprocs=1
                    redirect_stderr=true
                    stdout_logfile=/home/vagrant/code/laravel.example.loc/storage/logs/importWordForWordReport.log
                </pre>
            </li>
            <li><b> sudo systemctl restart supervisor</b></li>
            <li>to check <b>ps aux | grep php</b></li> 
            <li>add to config/queue.php <br>
            <pre>
                'queues' => [
                        'myTestWorker' => 'myTestWorker'
                    ]
            </pre>                
            </li>
        </ol>
    </li>
</ul>

