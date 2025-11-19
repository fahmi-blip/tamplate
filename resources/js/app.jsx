import './bootstrap';

// Import React dan ReactDOM
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter } from 'react-router-dom';

// Import komponen App utama dari folder template Anda
// Pastikan path ini sesuai dengan lokasi App.jsx Anda
import App from '../../public/assets/src/app/App'; 

// Import styles global jika diperlukan (biasanya dari index.js lama)
// Contoh: import './src/assets/styles/style.css'; 

const container = document.getElementById('app');

if (container) {
    const root = createRoot(container);
    root.render(
        <BrowserRouter>
            <App />
        </BrowserRouter>
    );
}