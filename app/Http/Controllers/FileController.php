<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Requests\FileUploadFromUrlRequest;
use App\Services\FileService;
use Illuminate\Http\Request;

class FileController extends Controller
{

    private $fileService;

    /**
     * FileController constructor.
     */
    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index()
    {
        $filename = $this->fileService->randomFile();
        return view('welcome')->with(['image' => $filename]);
    }

    public function show()
    {
        $filename = $this->fileService->randomFile();
        return response()->download($filename);
    }

    public function loadFileFromUrl(FileUploadFromUrlRequest $request)
    {
        //создаем директорию
        $this->fileService->createFilesDir();
        $this->fileService->uploadFileFromUrl($request->input('url'));
    }

    public function uploadFile(Request $request)
    {
        //создаем директорию
        $this->fileService->createFilesDir();
        //сохраняем файл
        $file = $request->file('fileToUpload');
        $file->storeAs($this->fileService->getFilesRelativeDirPath(), $file->getClientOriginalName());
        File::create([
            'filename'=>$file->getClientOriginalName()
        ]);

    }
}
