<?php $thePage = 'file-saya'; ?>
@extends('themes.AdminLTE.template')
@section('content-wrapper')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            File Saya
            <small>File-file milik Anda</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> File Saya</a></li>
            <li><a href="#">Folder 1</a></li>
            <li class="active">Sub Folder 1</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box box-widget box-uploader">
            <div class="box-header with-border bg-navy">
               <div class="user-block">
                <h2 class="text-center"><i class="img-circle img-sm fa fa-file-o"></i></h2>
                <span class="username">
                  Mengunggah <a href="#">Senandung Rindu.mp3 (123 KB)</a> <i class="fa fa-loading"></i>
                  <small class="text-muted"><a href="#" class="text-muted pull-right hidden-xs">Sedang diunggah</a></small>
                </span>
                <span class="description">
                  <span class="pull-right">
                    <button class="btn btn-default btn-xs"><i class="fa fa-times"></i> Batalkan</button>
                  </span>
                  lorem ipaum
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum molestiae autem delectus nulla, aperiam asperiores qui repudiandae esse veniam deserunt ratione repellat doloremque error perferendis fugit vel laborum est ea.
                </span>
              </div><!-- /.user-block -->
              <div class="user-block">&nbsp;</div>
              <div class="user-block">
                <div class="username">
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped active progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="box box-widget box-file">
            <div class="box-header with-border">
              <div class="user-block">
                <h2 class="text-center"><i class="img-circle img-sm fa fa-file-o"></i></h2>
                <span class="username">
                  <a href="#">Senandung Rindu.mp3 (123 KB)</a> - 
                  <small class="text-muted">dibagikan kepada beberapa user <i class="fa fa-users"></i> <a href="#" class="text-muted pull-right">7:30 PM Today</a></small>
                </span>
                <span class="description">
                  lorem ipaum
                </span>
                <span class="username">
                  <button class="btn btn-default btn-xs"><i class="fa fa-link"></i> Tampilkan Link</button>
                  <button class="btn btn-default btn-xs"><i class="fa fa-download"></i> Unduh</button>
                  <button class="btn btn-default btn-xs"><i class="fa fa-share"></i> Bagikan</button>
                </span>
                <span class="pull-right hidden-xs">
                  <img class="img-circle img-xs" src="{{ livestorage_asset('themes/AdminLTE/dist/img/user3-128x128.jpg') }}" alt="user image" data-pin-nopin="true">
                  <img class="img-circle img-xs" src="{{ livestorage_asset('themes/AdminLTE/dist/img/user3-128x128.jpg') }}" alt="user image" data-pin-nopin="true">
                  <img class="img-circle img-xs" src="{{ livestorage_asset('themes/AdminLTE/dist/img/user3-128x128.jpg') }}" alt="user image" data-pin-nopin="true">
                </span>
              </div><!-- /.user-block -->
            </div>
          </div>
          <div class="box box-solid box-warning box-folder">
            <div class="box-header with-border">
               <div class="user-block">
                <h2 class="text-center"><i class="img-circle img-sm fa fa-folder-o"></i></h2>
                <span class="username">
                  <a href="#">Nama Folder</a> - 
                  <small>dibagikan secara umum <i class="fa fa-globe"></i> <a href="#" class="text-muted pull-right">7:30 PM Today</a></small>
                </span>
                <div class="username">
                  File : index.html, isd.php
                </div>
                <span class="username">
                  <button class="btn btn-default btn-xs"><i class="fa fa-link"></i> Tampilkan Link</button>
                  <button class="btn btn-default btn-xs"><i class="fa fa-download"></i> Unduh</button>
                  <button class="btn btn-default btn-xs"><i class="fa fa-share"></i> Bagikan</button>
                </span>
                <span class="pull-right hidden-xs">
                  <img class="img-circle img-xs" src="{{ livestorage_asset('themes/AdminLTE/dist/img/user3-128x128.jpg') }}" alt="user image" data-pin-nopin="true">
                  <img class="img-circle img-xs" src="{{ livestorage_asset('themes/AdminLTE/dist/img/user3-128x128.jpg') }}" alt="user image" data-pin-nopin="true">
                  <img class="img-circle img-xs" src="{{ livestorage_asset('themes/AdminLTE/dist/img/user3-128x128.jpg') }}" alt="user image" data-pin-nopin="true">
                </span>
              </div><!-- /.user-block -->
            </div>
          </div>
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <h2 class="text-center"><i class="img-circle img-sm fa fa-file-o"></i></h2>
                <span class="username">
                  <a href="#">Senandung Rindu.mp3 (123 KB)</a> - 
                  <small class="text-muted">hanya Anda <i class="fa fa-lock"></i> <a href="#" class="text-muted pull-right">7:30 PM Today</a></small>
                </span>
                <span class="description">
                  lorem ipaum
                </span>
                <span class="username">
                  <button class="btn btn-default btn-xs"><i class="fa fa-link"></i> Tampilkan Link</button>
                  <button class="btn btn-default btn-xs"><i class="fa fa-download"></i> Unduh</button>
                  <button class="btn btn-default btn-xs"><i class="fa fa-share"></i> Bagikan</button>
                </span>
                <span class="pull-right hidden-xs">
                  <img class="img-circle img-xs" src="{{ livestorage_asset('themes/AdminLTE/dist/img/user3-128x128.jpg') }}" alt="user image" data-pin-nopin="true">
                  <img class="img-circle img-xs" src="{{ livestorage_asset('themes/AdminLTE/dist/img/user3-128x128.jpg') }}" alt="user image" data-pin-nopin="true">
                  <img class="img-circle img-xs" src="{{ livestorage_asset('themes/AdminLTE/dist/img/user3-128x128.jpg') }}" alt="user image" data-pin-nopin="true">
                </span>
              </div><!-- /.user-block -->
            </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@endsection