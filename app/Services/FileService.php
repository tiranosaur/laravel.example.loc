<?php


namespace App\Services;


use App\File;
use App\Repositories\FileRepositoryEloquent;
use Illuminate\Support\Facades\Storage;

class FileService extends BaseService
{
    const FILE_DIR = 'public/files';
    public $repo;

    /**
     * FileService constructor.
     * @param $repo
     */
    public function __construct(FileRepositoryEloquent $repo)
    {
        $this->repo = $repo;
    }
///////////////////////must have for file///////////////////////////////
    public function getFilesDirPath(): string
    {
        return \Storage::getDriver()->getAdapter()->getPathPrefix() . self::FILE_DIR;
    }

    public function getFilesRelativeDirPath(): string
    {
        return self::FILE_DIR;
    }

    public function filesDirExists(): bool
    {
        return \File::exists($this->getFilesDirPath());
    }

    public function createFilesDir(): bool
    {
        if (!$this->filesDirExists()) {
            return \File::makeDirectory($this->getFilesDirPath(), 0777, true, true);
        }
        return true;
    }

///////////////////////////////////////////////////////////////////////
    public function randomFile():string
    {
        $filename = File::where('id', '>', 0)->orderBy('id', 'desc')->first()->filename ?? '';
        $file = Storage::url($this->getFilesRelativeDirPath().'/'.$filename);
        return $file;
    }

    private function getFilenameFromUrl($url): string
    {
        $split = explode('/', $url);
        return $split[count($split) - 1];
    }

    public function uploadFileFromUrl($url):void
    {
        //save file to storage
        $filename = $this->getFilenameFromUrl($url);
        $path     = $this->getFilesDirPath() . '/' . $filename;
        copy($url, $path);
        //save file to DB
        File::create([
            'filename' => $filename,
            'url'      => $url,
        ]);
    }
}
