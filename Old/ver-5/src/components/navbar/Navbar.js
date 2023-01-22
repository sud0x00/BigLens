import React, { useState, useRef } from 'react';
import './navbar.css';
import logo from '../../images/logo.png';
import { FaBars } from 'react-icons/fa';
import data from './data';
import { useEffect } from 'react';
import Flag from '../../images/flag.png';

function Navbar() {
  const [showLinks, setShowLinks] = useState(false);
  const linksContainerRef = useRef(null);
  const linksRef = useRef(null);

  const toggleLinks = () => {
    setShowLinks(!showLinks);
  };

  useEffect(() => {
    const linksHeight = linksRef.current.getBoundingClientRect().height;
    console.log(linksHeight);
    if (showLinks) {
      linksContainerRef.current.style.height = `${linksHeight}px`;
    } else {
      linksContainerRef.current.style.height = '0';
    }
  }, [showLinks]);

  return (
    <nav>
      <div className='nav-center'>
        <div className='nav-header'>
          <a href='/'>
            <img src={logo} alt='logo' className='logo' />
          </a>

          <button className='nav-toggle' onClick={toggleLinks}>
            <FaBars />
          </button>
        </div>
        <div className='links-container' ref={linksContainerRef}>
          <ul className='links' ref={linksRef}>
            {data.map((item) => {
              const { id, url, name } = item;
              return (
                <li key={id} className='link'>
                  <a href={url}>{name}</a>
                </li>
              );
            })}
          </ul>
        </div>
      </div>
    </nav>
  );
}

export default Navbar;
