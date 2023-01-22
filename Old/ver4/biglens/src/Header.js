import React from 'react';
import './Header.css';


function Header() {
    return (
      <header>
        <div className="faq-section">
          <h2>Frequently Asked Questions</h2>
          <ul>
            <li>How does the search work?</li>
            <li>What image types are supported?</li>
            <li>How accurate are the search results?</li>
          </ul>
        </div>
        <div className="contact-section">
          <h2>Contact Us</h2>
          <p>Email: contact@yourdomain.com</p>
          <p>Phone: 555-555-5555</p>
        </div>
      </header>
    );
  }
  
export default Header;