import React, { useState } from 'react';
import axios from 'axios';
import './fileupload.css';
function FileUpload() {
  const [image, setImage] = useState(null);
  const [searchResults, setSearchResults] = useState([]);
  const [loading, setLoading] = useState(false);

  const handleImageChange = (event) => {
    setImage(event.target.files[0]);
  };

  const handleSearchSubmit = async (event) => {
    event.preventDefault();
    setLoading(true);
    // send the image to the server for processing
    const formData = new FormData();
    formData.append('image', image);
    const { data } = await axios.post('/search', formData);
    setSearchResults(data);
    setLoading(false);
  };

  return (
    <div className='search-page'>
      <form onSubmit={handleSearchSubmit}>
        <input type='file' onChange={handleImageChange} />
        <button type='submit' className='search-button'>
          Search
        </button>
      </form>
      {loading ? <div className='loading'>Loading...</div> : null}
      <ul className='search-results'>
        {searchResults.map((result) => (
          <li key={result.id}>{result.name}</li>
        ))}
      </ul>
    </div>
  );
}

export default FileUpload;
