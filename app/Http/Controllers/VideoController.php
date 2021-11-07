<?php

namespace App\Http\Controllers;

use App\Models\video_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Exception;

class VideoController extends Controller
{
    public function create(Request $request)
    {
        try {
            if ($request->hasFile("gambar")) {
                $gambar = $request->file('gambar');
                $nama_file = time() . "_" . $gambar->getClientOriginalName();
                $tujuan_upload = public_path() . '/upload_file';
                $gambar->move($tujuan_upload, $nama_file);
            } else {
                $nama_file = "";
            }
            $video = new video_model;
            $video->judul = $request->judul;
            $video->link_video = $request->link_video;
            $video->link_thumbnail = $nama_file;
            $video->konten = $request->konten;
            $video->save();
            return back()->with('status', 'Berhasil menambahkan video.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal menambahkan video.(' . $e->getMessage() . ')');
        }
    }

    public function edit($id, Request $request)
    {
        try {
            $video = video_model::find($id);
            if ($request->hasFile("gambar")) {
                if (!empty($video->link_thumbnail)) {
                    $destinationPath = public_path() . '/upload_file';
                    File::delete($destinationPath . "/$video->link_thumbnail");
                }
                $gambar = $request->file('gambar');
                $nama_file = time() . "_" . $gambar->getClientOriginalName();
                $tujuan_upload = public_path() . '/upload_file';
                $gambar->move($tujuan_upload, $nama_file);
            } else {
                $nama_file = $video->link_thumbnail;
            }
            $video->judul = $request->judul;
            $video->link_video = $request->link_video;
            $video->link_thumbnail = $nama_file;
            $video->konten = $request->konten;
            $video->save();
            return back()->with('status', 'Berhasil mengubah video.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal mengubah video.');
        }
    }

    public function remove($id, Request $request)
    {
        try {
            $video = video_model::find($id);
            if (!empty($video->link_thumbnail)) {
                $destinationPath = public_path() . '/upload_file';
                File::delete($destinationPath . "/$video->link_thumbnail");
            }
            $video->delete();
            return back()->with('status', 'Berhasil menghapus video.');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Gagal menghapus video.');
        }
    }
}
