import React from 'react';
import './main.css';
import FileUpload from '../fileupload/FileUpload';

function Main() {
  return (
    <main className='main-container'>
      <header className='main-header'>
        <h1>What is that ?</h1>
      </header>
      <article className='main-content'>
        <p>
          BigLens is an online image analysis platform. This platform uses in
          particular zsteg, steghide, outguess, exiftool, binwalk, foremost and
          strings for an in-depth steganalysis. The platform supports the
          following image formats: .png, .jpg, .gif, .bmp, .jpeg, .jfif, .jpe,
          .tiff...
        </p>
      </article>
      <FileUpload />
    </main>
  );
}

export default Main;
